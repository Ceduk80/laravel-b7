<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function welcome()
    {
     return view('welcome');
    }

   public function home()
   {
    return view('home');
   }

   public function services()
   {
    return view('services');
   }

   public function contact()
   {
    $dataAtual = date('d/m/Y');

    return view('contact', ['qualquer_coisa' => $dataAtual]);
   }
}
   