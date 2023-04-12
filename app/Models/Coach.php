<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    use HasFactory;

protected $guarded = [
    'id',
    'created_at',
    'updated_at',
  ];
  
  //   public function users()
  // {
  //   return $this->belongsToMany(User::class)->withTimestamps();
  // }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
        
  public function coachreservations()
  {
    return $this->hasMany(Reservation::class);
  }

    
}
