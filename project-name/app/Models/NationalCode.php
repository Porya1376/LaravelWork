<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NationalCode extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'code',
    ];

///todo
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
