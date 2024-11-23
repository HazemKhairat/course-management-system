<?php

namespace App\Models;
use App\Models\User;
use App\Models\Project;
use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Round extends Model
{
    use HasFactory;
    protected $table = 'rounds';
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function project(){
        return $this->hasMany(Project::class);
    }

    public function student(){
        return $this->hasMany(Student::class);
    }
}
