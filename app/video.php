<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    protected $fillable=['title','description','exercise','user_id','path_video'];

    public function quiz()
    {
		return $this->hasOne('App\Quiz');
	}
}