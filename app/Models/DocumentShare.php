<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocumentShare extends Model
{
    protected $fillable = ['id', 'document_id', 'user_id'];
    
    public function document() {
        return $this->belongsTo(Document::class);
    }
    
    public function user() {
        return $this->belongsTo(User::class);
    }
}