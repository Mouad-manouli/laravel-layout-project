<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index (){
        $elevs=[
            ['titre'=>'Prémiere activité','img'=>'storage/Photo/imag3.jpg','text'=>'Some quick example text to build on the card title and make up the bulk of the cards content.'],
            ['titre'=>'Deuxiéme activité','img'=>'storage/Photo/imag4.jpg','text'=>'Some quick example text to build on the card title and make up the bulk of the cards content.'],
            ['titre'=>'Troisiéme activité','img'=>'storage/Photo/imag5.jpg','text'=>'Some quick example text to build on the card title and make up the bulk of the cards content.']
        ];
        return view('home',compact('elevs'));
    }
}
