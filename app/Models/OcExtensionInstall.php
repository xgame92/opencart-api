<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcExtensionInstall
 * 
 * @property int $extension_install_id
 * @property int $extension_download_id
 * @property string $filename
 * @property \Carbon\Carbon $date_added
 *
 * @package App\Models
 */
class OcExtensionInstall extends Eloquent
{
	protected $table = 'oc_extension_install';
	protected $primaryKey = 'extension_install_id';
	public $timestamps = false;

	protected $casts = [
		'extension_download_id' => 'int'
	];

	protected $dates = [
		'date_added'
	];

	protected $fillable = [
		'extension_download_id',
		'filename',
		'date_added'
	];
}
