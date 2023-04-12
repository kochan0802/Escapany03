<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    
   public static function getAllReservationOrderByUpdated_at()
  {
    return self::orderBy('updated_at', 'desc')->get();
  }
  
  public function userreservations()
{
    return $this->belongsTo(User::class, 'user_id');
}

}
