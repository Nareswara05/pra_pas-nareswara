<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;


class GuruController extends Controller
{
    public function index()

    {
  
        return view('teacher.all', [
  
        "title"  => "guru",
  
        "guru" => Guru::all()
  
        ]);
  
    }
      public function show($guru)
      {
        return view('teacher.detail', [
          "title" => "detail-teacher",
          "guru" => Guru::find($guru)
        ]);
      }
}
