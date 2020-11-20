<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'license_id',
        'payment_type',
        'price',
        'date_start',
        'date_end',
    ];

    protected $hidden = [

    ];

    public function user()
    {
        return $this
            ->belongsTo('App\Models\User');
    }
    public function license()
    {
        return $this
            ->belongsTo('App\Models\License');
    }
}
