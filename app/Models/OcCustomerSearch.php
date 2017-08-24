<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcCustomerSearch
 * 
 * @property int $customer_search_id
 * @property int $store_id
 * @property int $language_id
 * @property int $customer_id
 * @property string $keyword
 * @property int $category_id
 * @property bool $sub_category
 * @property bool $description
 * @property int $products
 * @property string $ip
 * @property \Carbon\Carbon $date_added
 *
 * @package App\Models
 */
class OcCustomerSearch extends Eloquent
{
	protected $table = 'oc_customer_search';
	protected $primaryKey = 'customer_search_id';
	public $timestamps = false;

	protected $casts = [
		'store_id' => 'int',
		'language_id' => 'int',
		'customer_id' => 'int',
		'category_id' => 'int',
		'sub_category' => 'bool',
		'description' => 'bool',
		'products' => 'int'
	];

	protected $dates = [
		'date_added'
	];

	protected $fillable = [
		'store_id',
		'language_id',
		'customer_id',
		'keyword',
		'category_id',
		'sub_category',
		'description',
		'products',
		'ip',
		'date_added'
	];
}
