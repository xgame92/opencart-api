<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcProduct
 * 
 * @property int $product_id
 * @property string $model
 * @property string $sku
 * @property string $upc
 * @property string $ean
 * @property string $jan
 * @property string $isbn
 * @property string $mpn
 * @property string $location
 * @property int $quantity
 * @property int $stock_status_id
 * @property string $image
 * @property int $manufacturer_id
 * @property bool $shipping
 * @property float $price
 * @property int $points
 * @property int $tax_class_id
 * @property \Carbon\Carbon $date_available
 * @property float $weight
 * @property int $weight_class_id
 * @property float $length
 * @property float $width
 * @property float $height
 * @property int $length_class_id
 * @property bool $subtract
 * @property int $minimum
 * @property int $sort_order
 * @property bool $status
 * @property int $viewed
 * @property \Carbon\Carbon $date_added
 * @property \Carbon\Carbon $date_modified
 *
 * @package App\Models
 */
class OcProduct extends Eloquent
{
	protected $table = 'oc_product';
	protected $primaryKey = 'product_id';
	public $timestamps = false;

	protected $casts = [
		'quantity' => 'int',
		'stock_status_id' => 'int',
		'manufacturer_id' => 'int',
		'shipping' => 'bool',
		'price' => 'float',
		'points' => 'int',
		'tax_class_id' => 'int',
		'weight' => 'float',
		'weight_class_id' => 'int',
		'length' => 'float',
		'width' => 'float',
		'height' => 'float',
		'length_class_id' => 'int',
		'subtract' => 'bool',
		'minimum' => 'int',
		'sort_order' => 'int',
		'status' => 'bool',
		'viewed' => 'int'
	];

	protected $dates = [
		'date_available',
		'date_added',
		'date_modified'
	];

	protected $fillable = [
		'model',
		'sku',
		'upc',
		'ean',
		'jan',
		'isbn',
		'mpn',
		'location',
		'quantity',
		'stock_status_id',
		'image',
		'manufacturer_id',
		'shipping',
		'price',
		'points',
		'tax_class_id',
		'date_available',
		'weight',
		'weight_class_id',
		'length',
		'width',
		'height',
		'length_class_id',
		'subtract',
		'minimum',
		'sort_order',
		'status',
		'viewed',
		'date_added',
		'date_modified'
	];
}
