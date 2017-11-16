<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcFilterGroup.
 *
 * @property int $filter_group_id
 * @property int $sort_order
 */
class OcFilterGroup extends Eloquent
{
    protected $table = 'oc_filter_group';
    protected $primaryKey = 'filter_group_id';
    public $timestamps = false;

    protected $casts = [
        'sort_order' => 'int',
    ];

    protected $fillable = [
        'sort_order',
    ];
}
