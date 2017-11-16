<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcCountry.
 *
 * @property int $country_id
 * @property string $name
 * @property string $iso_code_2
 * @property string $iso_code_3
 * @property string $address_format
 * @property bool $postcode_required
 * @property bool $status
 */
class OcCountry extends Eloquent
{
    protected $table = 'oc_country';
    protected $primaryKey = 'country_id';
    public $timestamps = false;

    protected $casts = [
        'postcode_required' => 'bool',
        'status'            => 'bool',
    ];

    protected $fillable = [
        'name',
        'iso_code_2',
        'iso_code_3',
        'address_format',
        'postcode_required',
        'status',
    ];
}
