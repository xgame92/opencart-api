<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcTaxClass
 * 
 * @property int $tax_class_id
 * @property string $title
 * @property string $description
 * @property \Carbon\Carbon $date_added
 * @property \Carbon\Carbon $date_modified
 *
 * @package App\Models
 */
class OcTaxClass extends Eloquent
{
	protected $table = 'oc_tax_class';
	protected $primaryKey = 'tax_class_id';
	public $timestamps = false;

	protected $dates = [
		'date_added',
		'date_modified'
	];

	protected $fillable = [
		'title',
		'description',
		'date_added',
		'date_modified'
	];
}
