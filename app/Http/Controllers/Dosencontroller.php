<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen;

class Dosencontroller extends Controller
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
  	$dosen = new Dosen();
  	$dosen->nama = 'Erwin';
  	$dosen->alamat = 'Kedondong';
  	$dosen->pengguna_id = '1';
  	$dosen->save();
  	return "Data dengan nama {$dosen->nama} telah di simpan";
  }
}
