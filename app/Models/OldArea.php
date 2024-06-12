<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OldArea extends Model
{
    use HasFactory;
    protected $table = 'area';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'old_id',
        'districtid',
        'name',
        'bn_name',
        'slug',
    ];
}
