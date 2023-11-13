<?php

namespace App\Http\Controllers;
use App\Models\Murid;


use Illuminate\Http\Request;

class MuridController extends Controller
{
    public function index()

    {
  
        return view('student.all', [
  
        "title"  => "murid",
  
        "murid" => Murid::all()
  
        ]);
  
    }
      public function show($murid)
      {
        return view('student.detail', [
          "title" => "detail-murid",
          "murid" => Murid::find($murid)
        ]);
      }
}
