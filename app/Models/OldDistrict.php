<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OldDistrict extends Model
{
    use HasFactory;
    protected $table = 'district';

    protected $primaryKey = 'id';

    public $timestamps = false;
    protected $fillable = [
        'old_id',
        'divisionid',
        'name',
        'bn_name',
        'slug',
    ];
}
