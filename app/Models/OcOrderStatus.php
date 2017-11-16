<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcOrderStatus.
 *
 * @property int $order_status_id
 * @property int $language_id
 * @property string $name
 */
class OcOrderStatus extends Eloquent
{
    protected $table = 'oc_order_status';
    public $timestamps = false;

    protected $casts = [
        'language_id' => 'int',
    ];

    protected $fillable = [
        'name',
    ];
}
