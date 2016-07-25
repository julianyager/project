<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function controllerAbout()
    {
      $people= ['Taylor', 'Matt', 'Jeffery'];
      return view('about')->withGuys($people);
    }


}
