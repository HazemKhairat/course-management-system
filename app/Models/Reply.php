<?php

namespace App\Models;

use App\Models\User;
use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reply extends Model
{
    use HasFactory;
    protected $table = 'replies';
    protected $guarded = [];

    public function project(){
        return $this->belongsTo( Project::class);
    }

    public function user(){
        return $this->belongsTo( User::class);
    }

}
