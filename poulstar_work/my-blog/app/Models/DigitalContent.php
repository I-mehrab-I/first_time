<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DigitalContent extends Model
{
    use HasFactory;

public function digital_Content_Type()
{
    return $this->belongsTo(DigitalContentType::class);
}
}
