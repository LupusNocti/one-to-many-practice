<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskList extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
        // add other fields that are allowed to be mass-assigned here
    ];
}