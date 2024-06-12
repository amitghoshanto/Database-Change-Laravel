<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewArea extends Model
{
    use HasFactory;
    protected $connection = 'location_database';
    protected $table = 'area';
    protected $primaryKey = 'id';

    public $timestamps = false;
}
