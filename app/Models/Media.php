<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'file_original_name',
        'file_name',
        'filePath',
        'fileFullPath',
        'extension',
        'type',
        'file_size'
    ];
}
