<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdraw_request extends Model
{
    use HasFactory;
    protected $table = 'withdraw_requests';
    protected $fillable=[
        '*'
    ];
}
