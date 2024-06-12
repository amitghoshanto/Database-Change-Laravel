<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewDivision extends Model
{
    use HasFactory;
    protected $connection = 'location_database';
    protected $table = 'divisions';
    protected $primaryKey = 'id';

    public $timestamps = false;
}
