<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcProductAttribute.
 *
 * @property int $product_id
 * @property int $attribute_id
 * @property int $language_id
 * @property string $text
 */
class OcProductAttribute extends Eloquent
{
    protected $table = 'oc_product_attribute';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'product_id'   => 'int',
        'attribute_id' => 'int',
        'language_id'  => 'int',
    ];

    protected $fillable = [
        'text',
    ];
}
