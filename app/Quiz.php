<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable=['jawaban1','jawaban2','jawaban3','jawaban_benar','pertanyaan'];

    public function video()
    {
		return $this->belongsTo('App\video');
	}
}


