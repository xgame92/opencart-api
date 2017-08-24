<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcCustomerWishlist
 * 
 * @property int $customer_id
 * @property int $product_id
 * @property \Carbon\Carbon $date_added
 *
 * @package App\Models
 */
class OcCustomerWishlist extends Eloquent
{
	protected $table = 'oc_customer_wishlist';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'customer_id' => 'int',
		'product_id' => 'int'
	];

	protected $dates = [
		'date_added'
	];

	protected $fillable = [
		'date_added'
	];
}
