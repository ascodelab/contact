<?php

use Ascodelab\Contact\Http\Controllers\ContactController as Contact; 

Route::get('/contact',[Contact::class,'index'])->name('contact');