<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Selamat Datang <br>(menggunakan controller)";
    }
    public function about(){
        return "NIM : 2141720123 <br> Nama : Ikmal Faris Musyaffa <br>(menggunakan controller)";
    }
    public function article($id=0){
        return "Artikel dengan id = ".$id."<br>(menggunakan controller)";
    }

}
