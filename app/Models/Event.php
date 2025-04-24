<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;


class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'startEventAt', 'endEventAt',
        'capacity', 'type', 'organization_id', 'image', 'ville_id'
    ];

    /**
     * Get the organization that owns the event.
     */
    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    /**
     * Get the volunteers associated with the event.
     */
    public function volunteers()
    {
        dd('hdjs');
        return $this->belongsToMany(User::class, 'event_volunteer');
    }

    /**
     * Get the donations associated with the event.
     */
    public function donations()
    {
        return $this->hasMany(Donation::class);
    }
}
