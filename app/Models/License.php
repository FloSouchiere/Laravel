<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'duration',
        'duration_type',
        'day_start',
        'month_start'
    ];

    protected $hidden = [

    ];

    public function memberships()
    {
        return $this
            ->hasMany('App\Models\Membership');
    }
}
