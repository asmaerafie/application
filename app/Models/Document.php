<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'name','path',
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
