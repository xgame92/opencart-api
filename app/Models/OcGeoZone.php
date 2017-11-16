<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcGeoZone.
 *
 * @property int $geo_zone_id
 * @property string $name
 * @property string $description
 * @property \Carbon\Carbon $date_added
 * @property \Carbon\Carbon $date_modified
 */
class OcGeoZone extends Eloquent
{
    protected $table = 'oc_geo_zone';
    protected $primaryKey = 'geo_zone_id';
    public $timestamps = false;

    protected $dates = [
        'date_added',
        'date_modified',
    ];

    protected $fillable = [
        'name',
        'description',
        'date_added',
        'date_modified',
    ];
}
