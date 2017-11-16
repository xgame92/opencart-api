<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcLengthClass.
 *
 * @property int $length_class_id
 * @property float $value
 */
class OcLengthClass extends Eloquent
{
    protected $table = 'oc_length_class';
    protected $primaryKey = 'length_class_id';
    public $timestamps = false;

    protected $casts = [
        'value' => 'float',
    ];

    protected $fillable = [
        'value',
    ];
}
