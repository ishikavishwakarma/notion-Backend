<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mandate extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'address', 'date', 'mobile_number', 'signature_file'
    ];

    // You can also add any relationships or custom methods here if necessary
}
