<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:29 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcAttributeGroup.
 *
 * @property int $attribute_group_id
 * @property int $sort_order
 */
class OcAttributeGroup extends Eloquent
{
    protected $table = 'oc_attribute_group';
    protected $primaryKey = 'attribute_group_id';
    public $timestamps = false;

    protected $casts = [
        'sort_order' => 'int',
    ];

    protected $fillable = [
        'sort_order',
    ];
}
