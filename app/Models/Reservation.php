<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //use HasFactory;
    protected $fillable = ['id', 'date', 'time', 'party_size', 'user_id', 'table_id'];
    protected $table = 'tables';
}
