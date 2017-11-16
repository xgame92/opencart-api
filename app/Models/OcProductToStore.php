<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcProductToStore.
 *
 * @property int $product_id
 * @property int $store_id
 */
class OcProductToStore extends Eloquent
{
    protected $table = 'oc_product_to_store';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'product_id' => 'int',
        'store_id'   => 'int',
    ];
}
