<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcCustomFieldValueDescription.
 *
 * @property int $custom_field_value_id
 * @property int $language_id
 * @property int $custom_field_id
 * @property string $name
 */
class OcCustomFieldValueDescription extends Eloquent
{
    protected $table = 'oc_custom_field_value_description';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'custom_field_value_id' => 'int',
        'language_id'           => 'int',
        'custom_field_id'       => 'int',
    ];

    protected $fillable = [
        'custom_field_id',
        'name',
    ];
}
