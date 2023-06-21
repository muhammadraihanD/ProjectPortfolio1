<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = "kontaks";
    protected $primaryKey = "id";
    protected $guarded = [''];
    protected $keyType = "string";
}
