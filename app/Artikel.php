<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model {

	//
	protected $table = 'artikels';
    protected $primaryKey = 'id';
    protected $fillable = array('judul','penulis','isi_artikel','tanggal','publish','view');
    public $timestamps = false;

}

