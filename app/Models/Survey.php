<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;
    protected $fillable =['solve_problem', 'time_taken', 'customer_satisfaction', 'job_location', 'suggestion'];

    public function users4()
        {
            return $this->belongsTo(User::class, 'customerID');
        }
}
