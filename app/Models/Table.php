<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * The Table class extends the Model class provided by Laravel's Eloquent ORM. 
 * It represents a table in the system. The $fillable property defines the attributes 
 * that can be mass-assigned when creating or updating a table. 
 * The $table property specifies the database table associated with the model.
 */
class Table extends Model
{
    //use HasFactory;
    protected $fillable = ['id', 'party_size'];
    protected $table = 'tables';
}
