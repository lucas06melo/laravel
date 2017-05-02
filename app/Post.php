<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
	protected $fillable = [
	'title',
	'subtitulo',
	'texto',
	'resumo',
	'image',
	'legenda',

	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

}
