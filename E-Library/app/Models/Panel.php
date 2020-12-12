<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panel extends Model
{
    use HasFactory;
    
    protected $table = 'panels';

    protected $fillable = [
        'id','users_id','books_id'
    ];

    public function getAll() 
    {
        return $this->where()
        ->orderBy('created_at', 'desc')->get();
    }
}