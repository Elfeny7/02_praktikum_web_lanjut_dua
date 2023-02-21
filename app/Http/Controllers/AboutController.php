<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        return "NIM : 2141720123 <br> Nama : Ikmal Faris Musyaffa <br>(menggunakan single controller)";
    }
}
