<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcBannerImage
 * 
 * @property int $banner_image_id
 * @property int $banner_id
 * @property int $language_id
 * @property string $title
 * @property string $link
 * @property string $image
 * @property int $sort_order
 *
 * @package App\Models
 */
class OcBannerImage extends Eloquent
{
	protected $table = 'oc_banner_image';
	protected $primaryKey = 'banner_image_id';
	public $timestamps = false;

	protected $casts = [
		'banner_id' => 'int',
		'language_id' => 'int',
		'sort_order' => 'int'
	];

	protected $fillable = [
		'banner_id',
		'language_id',
		'title',
		'link',
		'image',
		'sort_order'
	];
}
