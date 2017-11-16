<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcLocation.
 *
 * @property int $location_id
 * @property string $name
 * @property string $address
 * @property string $telephone
 * @property string $fax
 * @property string $geocode
 * @property string $image
 * @property string $open
 * @property string $comment
 */
class OcLocation extends Eloquent
{
    protected $table = 'oc_location';
    protected $primaryKey = 'location_id';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'address',
        'telephone',
        'fax',
        'geocode',
        'image',
        'open',
        'comment',
    ];
}
