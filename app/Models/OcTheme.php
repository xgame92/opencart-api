<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcTheme.
 *
 * @property int $theme_id
 * @property int $store_id
 * @property string $theme
 * @property string $route
 * @property string $code
 * @property \Carbon\Carbon $date_added
 */
class OcTheme extends Eloquent
{
    protected $table = 'oc_theme';
    protected $primaryKey = 'theme_id';
    public $timestamps = false;

    protected $casts = [
        'store_id' => 'int',
    ];

    protected $dates = [
        'date_added',
    ];

    protected $fillable = [
        'store_id',
        'theme',
        'route',
        'code',
        'date_added',
    ];
}
