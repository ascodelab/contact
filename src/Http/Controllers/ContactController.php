<?php

namespace Ascodelab\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Ascodelab\Contact\Contact;

class ContactController extends Controller
{

    public function index(){
        //testing laravel class
        //return Contact::test();
        return view('ascodelab::contact');
    }
}
