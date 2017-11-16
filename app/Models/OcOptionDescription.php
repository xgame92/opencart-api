<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcOptionDescription.
 *
 * @property int $option_id
 * @property int $language_id
 * @property string $name
 */
class OcOptionDescription extends Eloquent
{
    protected $table = 'oc_option_description';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'option_id'   => 'int',
        'language_id' => 'int',
    ];

    protected $fillable = [
        'name',
    ];
}
