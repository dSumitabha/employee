<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employees';

    // Define the attributes that are mass assignable
    protected $fillable = ['name', 'email', 'password', 'employee_code'];
}
