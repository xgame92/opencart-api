<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcCurrency
 * 
 * @property int $currency_id
 * @property string $title
 * @property string $code
 * @property string $symbol_left
 * @property string $symbol_right
 * @property string $decimal_place
 * @property float $value
 * @property bool $status
 * @property \Carbon\Carbon $date_modified
 *
 * @package App\Models
 */
class OcCurrency extends Eloquent
{
	protected $table = 'oc_currency';
	protected $primaryKey = 'currency_id';
	public $timestamps = false;

	protected $casts = [
		'value' => 'float',
		'status' => 'bool'
	];

	protected $dates = [
		'date_modified'
	];

	protected $fillable = [
		'title',
		'code',
		'symbol_left',
		'symbol_right',
		'decimal_place',
		'value',
		'status',
		'date_modified'
	];
}
