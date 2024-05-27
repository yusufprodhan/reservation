<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    use HasFactory;
    protected $fillable = ['uid','quotationId','date','name','phone','email','movingFrom','movingTo','moveSize','instruction'];
}
