<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcProductImage.
 *
 * @property int $product_image_id
 * @property int $product_id
 * @property string $image
 * @property int $sort_order
 */
class OcProductImage extends Eloquent
{
    protected $table = 'oc_product_image';
    protected $primaryKey = 'product_image_id';
    public $timestamps = false;

    protected $casts = [
        'product_id' => 'int',
        'sort_order' => 'int',
    ];

    protected $fillable = [
        'product_id',
        'image',
        'sort_order',
    ];
}
