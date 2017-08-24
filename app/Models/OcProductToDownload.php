<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcProductToDownload
 * 
 * @property int $product_id
 * @property int $download_id
 *
 * @package App\Models
 */
class OcProductToDownload extends Eloquent
{
	protected $table = 'oc_product_to_download';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'product_id' => 'int',
		'download_id' => 'int'
	];
}
