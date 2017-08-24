<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcVoucherTheme
 * 
 * @property int $voucher_theme_id
 * @property string $image
 *
 * @package App\Models
 */
class OcVoucherTheme extends Eloquent
{
	protected $table = 'oc_voucher_theme';
	protected $primaryKey = 'voucher_theme_id';
	public $timestamps = false;

	protected $fillable = [
		'image'
	];
}
