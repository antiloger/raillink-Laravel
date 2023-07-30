<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainNews extends Model
{
    public $primaryKey = 'n_id';
    public $timestamps = true;
    use HasFactory;
}
