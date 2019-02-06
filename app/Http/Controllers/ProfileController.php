<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;



///controller passing profile data to the resources/views/user/profile.blade.php "view"
class profileController extends Controller
{
    //gathers username 
    public function profile($username){
                                               //returns first user it finds with this username
        $user = User::whereUsername($username)->first();
        //returns code generated in the profile.blade.php file
        return view('user.profile', compact('user'));
    }
}
