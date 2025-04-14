<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'category_id',
        'description',
        'website',
        'contact_email',
        'contact_phone',
        'status',
    ];
}
