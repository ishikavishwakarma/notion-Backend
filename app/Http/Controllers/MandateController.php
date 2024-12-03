<?php

namespace App\Http\Controllers;

use App\Models\Mandate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\Facade\Pdf;


class MandateController extends Controller
{

    public function store(Request $request)
{
    // Manually validate the request data
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255|min:2',
        'email' => 'required|email|unique:mandates,email',
        'address' => 'required|string|max:500',
        'date' => 'required|date',
        'mobile_number' => 'required|string|max:15|min:10|unique:mandates,mobile_number',
        'signature_file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // If validation fails, return custom error response
    if ($validator->fails()) {
        return response()->json(['message' => $validator->errors()], 422);
    }

    // Handle the file upload if validation passes
    if ($request->hasFile('signature_file')) {
        $filePath = $request->file('signature_file')->store('signatures', 'public');
    }

    $name = ucwords(strtolower($request->input('name')));
    $address = ucwords(strtolower($request->input('address')));

    // Create a new Mandate record
    $mandate = Mandate::create([
        'name' => $name,
        'email' => $request->input('email'),
        'address' => $address,
        'date' => $request->input('date'),
        'mobile_number' => $request->input('mobile_number'),
        'signature_file' => $filePath,
    ]);

    // Send email with PDF after saving the Mandate data
    $this->sendEmailWithPdf($mandate->id);

    // Return the mandate data in JSON format
    return response()->json($mandate, 201);
}



    public function get()
    {
        // Retrieve all mandates from the database
        $mandates = Mandate::all();

        // Return the mandates data in JSON format
        return response()->json($mandates, 200);
    }

    public function destroy($id)
    {
        $mandate = Mandate::findOrFail($id);

        // Delete the signature file if it exists
        if (Storage::exists('public/' . $mandate->signature_file)) {
            Storage::delete('public/' . $mandate->signature_file);
        }

        $mandate->delete();

        return response()->json(null, 204);
    }




public function sendEmailWithPdf($id)
{
    try {
        $mandate = Mandate::findOrFail($id);

        // Define PDF storage path
        $pdfPath = storage_path('app/public/mandates/mandate-' . $mandate->id . '.pdf');

        // Check if the directory exists and create it if necessary
        if (!is_dir(storage_path('app/public/mandates'))) {
            mkdir(storage_path('app/public/mandates'), 0775, true);
        }

        // Generate PDF from Blade view
        $pdf = Pdf::loadView('mandate_pdf', ['mandate' => $mandate]);

        // Save PDF to the specified path
        $pdf->save($pdfPath);

        // Prepare email data
        $emailData = [
            'name' => $mandate->name,
            'email' => $mandate->email,
        ];

        // Send email with PDF attachment
        Mail::send('emails.mandate', $emailData, function ($message) use ($mandate, $pdfPath) {
            $message->to($mandate->email)
                ->subject('Mandate Form')
                ->attach($pdfPath);
        });

        // Cleanup temporary PDF
        if (file_exists($pdfPath)) {
            unlink($pdfPath);
        }

        return response()->json(['message' => 'Email sent successfully!'], 200);
    } catch (\Exception $e) {
        // Log the error and return a 500 response
        \Log::error('Error sending email: ' . $e->getMessage());
        return response()->json(['message' => 'Failed to send email. Error: ' . $e->getMessage()], 500);
    }
}


}
