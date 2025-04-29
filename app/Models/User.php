<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */



    //  public function volunteeredEvents()
    //  {
    //   return $this->belongsToMany(Event::class, 'event_volunteer')
    //   ->withPivot('skills', 'availability', 'status')
    //   ->withTimestamps();
    // }

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_role');
    }

    /**
     * Check if the user has a specific role.
     */
    public function hasRole($role)
    {
        return $this->roles()->where('name', $role)->exists();
    }

    public function isAdmin()
    {
        return $this->hasRole('admin');
    }

    public function isOrganization()
    {
        return $this->hasRole('organization');
    }

    public function isVolunteer()
    { 
        return $this->hasRole('volunteer');
    }

    public function organization()
    {
        return $this->hasOne(Organization::class);
    }
    public function events()
    {
        return $this->belongsToMany(Event::class, 'event_volunteer', 'user_id', 'event_id');
    }

}
