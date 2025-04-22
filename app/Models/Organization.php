<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Category;
use App\Models\User;

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


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the category that the organization belongs to.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the events for the organization.
     */
    public function events()
    {
        return $this->hasMany(Event::class);
    }

    /**
     * Check if the organization is pending approval.
     */
    public function isPending()
    {
        return $this->status === 'pending';
    }

    /**
     * Check if the organization is approved.
     */
    public function isApproved()
    {
        return $this->status === 'approved';
    }

    /**
     * Check if the organization is rejected.
     */
    public function isRejected()
    {
        return $this->status === 'rejected';
    }
    
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
{
    return $this->belongsTo(Category::class);
}
}
