<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcSeoUrl.
 *
 * @property int $seo_url_id
 * @property int $store_id
 * @property int $language_id
 * @property string $query
 * @property string $keyword
 */
class OcSeoUrl extends Eloquent
{
    protected $table = 'oc_seo_url';
    protected $primaryKey = 'seo_url_id';
    public $timestamps = false;

    protected $casts = [
        'store_id'    => 'int',
        'language_id' => 'int',
    ];

    protected $fillable = [
        'store_id',
        'language_id',
        'query',
        'keyword',
    ];
}
