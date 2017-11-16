<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcProductToCategory.
 *
 * @property int $product_id
 * @property int $category_id
 */
class OcProductToCategory extends Eloquent
{
    protected $table = 'oc_product_to_category';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'product_id'  => 'int',
        'category_id' => 'int',
    ];
}
