<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessOrder extends Model
{
    use HasFactory;
    protected $fillable = ['company_name', 'company_address', 'title', 'description_cost', 'company_date', 'company_time'];

    public function users3()
    {
        return $this->belongsTo(User::class, 'customerID');
    }
}
