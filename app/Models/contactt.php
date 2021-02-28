<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contactt extends Model
{
    public $table = "contactuss";
    use HasFactory;
    protected $fillable = ['namecont','emailcont','phonecont','descriptioncont']; 
}
