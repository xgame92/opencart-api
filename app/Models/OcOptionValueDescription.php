<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcOptionValueDescription.
 *
 * @property int $option_value_id
 * @property int $language_id
 * @property int $option_id
 * @property string $name
 */
class OcOptionValueDescription extends Eloquent
{
    protected $table = 'oc_option_value_description';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'option_value_id' => 'int',
        'language_id'     => 'int',
        'option_id'       => 'int',
    ];

    protected $fillable = [
        'option_id',
        'name',
    ];
}
