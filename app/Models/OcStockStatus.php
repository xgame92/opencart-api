<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcStockStatus.
 *
 * @property int $stock_status_id
 * @property int $language_id
 * @property string $name
 */
class OcStockStatus extends Eloquent
{
    protected $table = 'oc_stock_status';
    public $timestamps = false;

    protected $casts = [
        'language_id' => 'int',
    ];

    protected $fillable = [
        'name',
    ];
}
