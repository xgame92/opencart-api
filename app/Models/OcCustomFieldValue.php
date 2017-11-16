<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcCustomFieldValue.
 *
 * @property int $custom_field_value_id
 * @property int $custom_field_id
 * @property int $sort_order
 */
class OcCustomFieldValue extends Eloquent
{
    protected $table = 'oc_custom_field_value';
    protected $primaryKey = 'custom_field_value_id';
    public $timestamps = false;

    protected $casts = [
        'custom_field_id' => 'int',
        'sort_order'      => 'int',
    ];

    protected $fillable = [
        'custom_field_id',
        'sort_order',
    ];
}
