<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcReview
 * 
 * @property int $review_id
 * @property int $product_id
 * @property int $customer_id
 * @property string $author
 * @property string $text
 * @property int $rating
 * @property bool $status
 * @property \Carbon\Carbon $date_added
 * @property \Carbon\Carbon $date_modified
 *
 * @package App\Models
 */
class OcReview extends Eloquent
{
	protected $table = 'oc_review';
	protected $primaryKey = 'review_id';
	public $timestamps = false;

	protected $casts = [
		'product_id' => 'int',
		'customer_id' => 'int',
		'rating' => 'int',
		'status' => 'bool'
	];

	protected $dates = [
		'date_added',
		'date_modified'
	];

	protected $fillable = [
		'product_id',
		'customer_id',
		'author',
		'text',
		'rating',
		'status',
		'date_added',
		'date_modified'
	];
}
