<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcModule
 * 
 * @property int $module_id
 * @property string $name
 * @property string $code
 * @property string $setting
 *
 * @package App\Models
 */
class OcModule extends Eloquent
{
	protected $table = 'oc_module';
	protected $primaryKey = 'module_id';
	public $timestamps = false;

	protected $fillable = [
		'name',
		'code',
		'setting'
	];
}
