<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcZoneToGeoZone.
 *
 * @property int $zone_to_geo_zone_id
 * @property int $country_id
 * @property int $zone_id
 * @property int $geo_zone_id
 * @property \Carbon\Carbon $date_added
 * @property \Carbon\Carbon $date_modified
 */
class OcZoneToGeoZone extends Eloquent
{
    protected $table = 'oc_zone_to_geo_zone';
    protected $primaryKey = 'zone_to_geo_zone_id';
    public $timestamps = false;

    protected $casts = [
        'country_id'  => 'int',
        'zone_id'     => 'int',
        'geo_zone_id' => 'int',
    ];

    protected $dates = [
        'date_added',
        'date_modified',
    ];

    protected $fillable = [
        'country_id',
        'zone_id',
        'geo_zone_id',
        'date_added',
        'date_modified',
    ];
}
