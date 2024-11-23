<?php

namespace App\Models;

use App\Models\Reply;
use App\Models\Round;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';
    protected $guarded = [];

    public function round(){
        return $this->belongsTo(Round::class);
    }

    public function reply(){
        return $this->hasMany(Reply::class);
    }

}
