<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcInformationDescription.
 *
 * @property int $information_id
 * @property int $language_id
 * @property string $title
 * @property string $description
 * @property string $meta_title
 * @property string $meta_description
 * @property string $meta_keyword
 */
class OcInformationDescription extends Eloquent
{
    protected $table = 'oc_information_description';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'information_id' => 'int',
        'language_id'    => 'int',
    ];

    protected $fillable = [
        'title',
        'description',
        'meta_title',
        'meta_description',
        'meta_keyword',
    ];
}
