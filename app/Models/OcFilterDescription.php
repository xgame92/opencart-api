<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcFilterDescription.
 *
 * @property int $filter_id
 * @property int $language_id
 * @property int $filter_group_id
 * @property string $name
 */
class OcFilterDescription extends Eloquent
{
    protected $table = 'oc_filter_description';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'filter_id'       => 'int',
        'language_id'     => 'int',
        'filter_group_id' => 'int',
    ];

    protected $fillable = [
        'filter_group_id',
        'name',
    ];
}
