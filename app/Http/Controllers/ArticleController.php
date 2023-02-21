<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function article($id=0){
        return "Artikel dengan id = ".$id."<br>(menggunakan single controller)";
    }

}
