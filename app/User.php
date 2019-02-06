<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
<<<<<<< HEAD
    protected $fillable = [
        'name', 'email', 'password',
=======
    //include any additional fields added to register.blade.php here ex. username
    protected $fillable = [
        'name', 'username','dob', 'email', 'password'
>>>>>>> 5a0f013d30806c41d9024a4f9c6713f6aea3eff6
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
<<<<<<< HEAD
=======
    
    
    //this allows {{ $user->dob->age }} to work on the profile.blade.php "view"
    protected $dates = [
        'dob'
    ];
    
    
>>>>>>> 5a0f013d30806c41d9024a4f9c6713f6aea3eff6
}
