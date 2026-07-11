<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Our real table's primary key column is "user_id", not Laravel's
    // default "id". This tells Eloquent which column to use.
    protected $primaryKey = 'user_id';

    // These two are actually Eloquent's defaults already — 'int' key type
    // and auto-incrementing — but we spell them out here so it's obvious
    // at a glance that user_id is a normal auto-increment integer PK.
    protected $keyType = 'int';
    public $incrementing = true;

    // Our table has no "updated_at" column. Setting this to null tells
    // Eloquent not to try writing to it. We keep $timestamps at its
    // default (true) so Eloquent still auto-fills "created_at" for us
    // whenever a new user is created.
    const UPDATED_AT = null;

    // Fields that are allowed to be mass-assigned, e.g. User::create([...]).
    // This is a safety measure so a form can't sneak in fields we don't want,
    // like setting role to admin.
    protected $fillable = [
        'full_name',
        'email',
        'password',
        'phone_number',
        'date_of_birth',
        'country',
        'learning_goal',
        'about_me',
        'profile_image',
        'role',
    ];

    // Fields hidden when the model is converted to an array/JSON.
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'date_of_birth' => 'date',
            'created_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Small helper used later in middleware/views to check the user's role.
    public function isAdmin(): bool
    {
        return $this->role === 'admin';
    }
}