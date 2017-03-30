<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
protected $table = 'pengguna';
protected $filelable = ['username','password'];

public function pengguna(){
		return $this->hasOne(mahasiswa::class,'pengguna_id');
	}

	public function dosen(){
		return $this->hasOne(dosen::class,'pengguna_id')
}
}
