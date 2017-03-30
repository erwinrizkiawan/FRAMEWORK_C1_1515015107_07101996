<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function awal()
  {
    return "Hello dari Erwin Rizkiawan";
  }
  public function tambah()
  {
    return $this->simpan();
  }
  public function simpan()
  {
    $mahasiswa = new Mahasiswa();
    $mahasiswa->nama = 'Erwin';
    $mahasiswa->alamat = 'Kedondong';
    $mahasiswa->nim = '1515015107';
    $mahasiswa->pengguna_id = '2';
    $mahasiswa->save();
    return "Data dengan nama {$mahasiswa->nama} telah di simpan";
  }
}
