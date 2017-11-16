<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcStatistic.
 *
 * @property int $statistics_id
 * @property string $code
 * @property float $value
 */
class OcStatistic extends Eloquent
{
    protected $primaryKey = 'statistics_id';
    public $timestamps = false;

    protected $casts = [
        'value' => 'float',
    ];

    protected $fillable = [
        'code',
        'value',
    ];
}
