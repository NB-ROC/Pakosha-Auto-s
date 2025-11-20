<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    use HasFactory;

    protected $table = 'personal_info';

    protected $fillable = [
        'user_id',
        'city',
        'street',
        'zipcode',
        'country_code',
        'phone',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
