<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainDetails extends Model
{
    protected $primaryKey = 'train_id';
    public $timestamps = true;
    use HasFactory;
}
