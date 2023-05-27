<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * The Reservation class extends the Model class provided by Laravel's Eloquent ORM. 
 * It represents a reservation in the system. 
 * The $fillable property defines the attributes that can 
 * be mass-assigned when creating or updating a reservation. The $table property 
 * specifies the database table associated with the model.
 */
class Reservation extends Model
{
    protected $fillable = ['id', 'date', 'time', 'party_size', 'user_id', 'table_id'];
    protected $table = 'reservations';
    public $timestamps = false;

    /**
     * Get the user associated with the reservation.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get the table associated with the reservation.
     */
    public function table()
    {
        return $this->belongsTo(Table::class, 'table_id');
    }

}