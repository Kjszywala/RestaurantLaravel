<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * The User class extends the Model class provided by Laravel's Eloquent ORM. 
 * It represents a user in the system. The $fillable property defines the attributes 
 * that can be mass-assigned when creating or updating a user. 
 * The $table property specifies the database table associated with the model.
 */
class User extends Model
{
    //use HasFactory;
    protected $fillable = ['id','login', 'password', 'name', 'surname', 'phone', 'email', 'age', 'gender'];
    protected $table = 'users';

}
