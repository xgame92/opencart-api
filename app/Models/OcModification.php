<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcModification
 * 
 * @property int $modification_id
 * @property int $extension_install_id
 * @property string $name
 * @property string $code
 * @property string $author
 * @property string $version
 * @property string $link
 * @property string $xml
 * @property bool $status
 * @property \Carbon\Carbon $date_added
 *
 * @package App\Models
 */
class OcModification extends Eloquent
{
	protected $table = 'oc_modification';
	protected $primaryKey = 'modification_id';
	public $timestamps = false;

	protected $casts = [
		'extension_install_id' => 'int',
		'status' => 'bool'
	];

	protected $dates = [
		'date_added'
	];

	protected $fillable = [
		'extension_install_id',
		'name',
		'code',
		'author',
		'version',
		'link',
		'xml',
		'status',
		'date_added'
	];
}
