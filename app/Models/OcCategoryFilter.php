<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcCategoryFilter.
 *
 * @property int $category_id
 * @property int $filter_id
 */
class OcCategoryFilter extends Eloquent
{
    protected $table = 'oc_category_filter';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'category_id' => 'int',
        'filter_id'   => 'int',
    ];
}
