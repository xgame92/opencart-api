<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcCategoryToLayout.
 *
 * @property int $category_id
 * @property int $store_id
 * @property int $layout_id
 */
class OcCategoryToLayout extends Eloquent
{
    protected $table = 'oc_category_to_layout';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'category_id' => 'int',
        'store_id'    => 'int',
        'layout_id'   => 'int',
    ];

    protected $fillable = [
        'layout_id',
    ];
}
