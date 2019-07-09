<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qanswer extends Model
{
    protected $table = 'qanswer';

    protected $fillable = [
    	'email','q1','q2','q3','q4','q5','q6','q7'
    ];

    public $timestamps = true;

    public function qanswer() {
    	return $qurey->orderBy('id',DESC);
    }
}
