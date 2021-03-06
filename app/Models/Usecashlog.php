<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Usecashlog.
 *
 * @package namespace App\Entities;
 */
class Usecashlog extends Model implements Transformable
{
    use TransformableTrait;
    protected $connection = "mysql_game";
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'userid',
        'zoneid',
        'sn',
        'aid',
        'point',
        'cash',
        'status',
        'creatime',
        'fintime'
    ];

    protected $hidden = [

    ];

}
