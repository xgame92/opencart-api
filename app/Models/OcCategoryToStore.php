<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcCategoryToStore.
 *
 * @property int $category_id
 * @property int $store_id
 */
class OcCategoryToStore extends Eloquent
{
    protected $table = 'oc_category_to_store';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'category_id' => 'int',
        'store_id'    => 'int',
    ];
}
