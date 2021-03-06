<?php

namespace Dlouvard\Releasenote\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Created by PhpStorm.
 * User: dlouvard_imac
 * Date: 18/07/2017
 * Time: 18:25
 */
class Release extends Model
{
    public $table = 'releases';
    protected $fillable = [
        'versions',
        'body',
        'newthings',
        'ameliorations',
        'bugs',
        'reflexions',
        'version',
        'right',
        'status'
    ];
}