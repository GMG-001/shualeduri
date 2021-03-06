<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Question extends Model
{
    use HasFactory;
    protected $fillable=['question','answer_1','answer_2','answer_3','answer_4','is_correct'];

    public function answers(){
        return $this->belongsToMany(Answer::class);
    }
    public function questions(){
        return DB::table('questions')->get();
    }
}
