<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeModel extends Model
{
    use HasFactory;
    protected $table = "employee";
    protected $primaryKey = "emp_id";
    // protected $foreignKey = "role_id";
}
