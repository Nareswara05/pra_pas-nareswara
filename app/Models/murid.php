<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class murid extends Model
{
    protected $table = 'murid';
    protected $fillable = ['nama_murid', 'nis', 'tanggal_lahir'];
}
