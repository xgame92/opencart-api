<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcProductRelated.
 *
 * @property int $product_id
 * @property int $related_id
 */
class OcProductRelated extends Eloquent
{
    protected $table = 'oc_product_related';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'product_id' => 'int',
        'related_id' => 'int',
    ];
}
