<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description_cost','home_address', 'home_date', 'home_time'];

        public function users4()
        {
            return $this->belongsTo(User::class, 'customerID');
        }
}
