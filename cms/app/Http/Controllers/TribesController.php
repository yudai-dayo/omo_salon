<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TribesController extends Controller
{
    //
    public function getsignup(){
        return View('user.signup');
    }
}
