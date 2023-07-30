<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainArticle extends Model
{
    protected $primaryKey = 'a_id';
    public $timestamps = true;
    use HasFactory;
}
