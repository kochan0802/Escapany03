<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function admins()
    {
        return $this->hasMany(Admin::class);
    }
}
