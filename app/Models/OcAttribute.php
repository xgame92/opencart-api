<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:29 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcAttribute.
 *
 * @property int $attribute_id
 * @property int $attribute_group_id
 * @property int $sort_order
 */
class OcAttribute extends Eloquent
{
    protected $table = 'oc_attribute';
    protected $primaryKey = 'attribute_id';
    public $timestamps = false;

    protected $casts = [
        'attribute_group_id' => 'int',
        'sort_order'         => 'int',
    ];

    protected $fillable = [
        'attribute_group_id',
        'sort_order',
    ];
}
