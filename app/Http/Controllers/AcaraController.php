<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use Illuminate\Http\Request;


class AcaraController extends Controller
{
    public function index()

    {
  
        return view('acaraa.all', [
  
        "title"  => "acara",
  
        "acara" => Acara::all()
  
        ]);
  
    }
      public function show($acara)
      {
        return view('acaraa.detail', [
          "title" => "detail-acara",
          "acara" => Acara::find($acara)
        ]);
      }
}
