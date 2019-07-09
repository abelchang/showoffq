<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qtitle extends Model
{
    protected $table = 'qtitle';

    public function qtitle() {
    	return $query->orderBy('id',DESC);
    }
}
