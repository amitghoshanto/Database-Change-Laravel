<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewDistrict extends Model
{
    use HasFactory;
    protected $connection = 'location_database';
    protected $table = 'district';
    protected $primaryKey = 'id';

    public $timestamps = false;
}
