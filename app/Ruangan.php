<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    protected $table = 'ruangan';
	protected $filelable = ['title'];
	protected $guarded = ['id'];

	public function jadwal_matakuliah(){
		return $this->hasMany(jadwal_matakuliah::class,'ruangan_id');
	}
}
