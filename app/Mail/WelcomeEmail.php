<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeEmail extends Mailable
{
    use Queueable, SerializesModels;
 
    public $details;
    public $name;
    public $email;
    public $mobile;
    public $subject;

    /**
     * Create a new message instance.
     *
     * @param string $details
     * @param string $name
     * @param string $email
     * @param string $mobile
     * @param string $subject
     */
    public function __construct($details, $name, $email, $mobile, $subject)
    {
        $this->details = $details;
        $this->name = $name;
        $this->subject = $subject;
        $this->email = $email;
        $this->mobile = $mobile;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject("New Enquiry About {$this->subject}")
            ->view('contact_email.maildata') 
            ->with([
                'details' => $this->details,
                'name' => $this->name,
                'email' => $this->email,
                'mobile' => $this->mobile,
            ]);
    }
}
