<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DigitalContentType extends Model
{
    use HasFactory;

    public function digital_Content(){
        return $this->hasMany(DigitalContent::class);
    }
}
