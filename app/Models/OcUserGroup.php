<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcUserGroup
 * 
 * @property int $user_group_id
 * @property string $name
 * @property string $permission
 *
 * @package App\Models
 */
class OcUserGroup extends Eloquent
{
	protected $table = 'oc_user_group';
	protected $primaryKey = 'user_group_id';
	public $timestamps = false;

	protected $fillable = [
		'name',
		'permission'
	];
}
