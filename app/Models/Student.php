<?php

namespace App\Models;

use App\Models\User;
use App\Models\Round;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $garded = [];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function round(){
        return $this->belongsTo(Round::class);
    }
}
