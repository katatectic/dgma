<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $table = 'phones';

    public $fillable = ['model', 'description', 'price', 'user_id'];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
