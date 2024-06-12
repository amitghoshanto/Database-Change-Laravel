<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OldDivision extends Model
{
    use HasFactory;
    protected $table = 'divisions';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'old_id',
        'country_code',
        'name',
        'bn_name',
        'slug',
    ];
}


// create laravel migration in single file-
// ALTER TABLE `divisions` ADD `old_id` INT(11) NOT NULL DEFAULT '0' AFTER `id`;      
// ALTER TABLE `district` ADD `old_id` INT(11) NOT NULL DEFAULT '0' AFTER `id`; 
// ALTER TABLE `area` ADD `old_id` INT(11) NOT NULL DEFAULT '0' AFTER `id`;           
// ALTER TABLE `sub_area` ADD `old_id` INT(11) NOT NULL DEFAULT '0' AFTER `id`;   
