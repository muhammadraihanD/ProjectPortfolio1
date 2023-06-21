<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;
use App\Models\Portofolio;
use App\Models\Contact;

class HomeController extends Controller
{
    //
    function show(){
        $data['profil'] = Profil::first();
        $data['portofolio'] = Portofolio::all();
        return view('home',$data);
    }
}
