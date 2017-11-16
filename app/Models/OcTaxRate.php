<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcTaxRate.
 *
 * @property int $tax_rate_id
 * @property int $geo_zone_id
 * @property string $name
 * @property float $rate
 * @property string $type
 * @property \Carbon\Carbon $date_added
 * @property \Carbon\Carbon $date_modified
 */
class OcTaxRate extends Eloquent
{
    protected $table = 'oc_tax_rate';
    protected $primaryKey = 'tax_rate_id';
    public $timestamps = false;

    protected $casts = [
        'geo_zone_id' => 'int',
        'rate'        => 'float',
    ];

    protected $dates = [
        'date_added',
        'date_modified',
    ];

    protected $fillable = [
        'geo_zone_id',
        'name',
        'rate',
        'type',
        'date_added',
        'date_modified',
    ];
}
