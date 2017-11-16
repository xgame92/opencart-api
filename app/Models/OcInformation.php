<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcInformation.
 *
 * @property int $information_id
 * @property int $bottom
 * @property int $sort_order
 * @property bool $status
 */
class OcInformation extends Eloquent
{
    protected $table = 'oc_information';
    protected $primaryKey = 'information_id';
    public $timestamps = false;

    protected $casts = [
        'bottom'     => 'int',
        'sort_order' => 'int',
        'status'     => 'bool',
    ];

    protected $fillable = [
        'bottom',
        'sort_order',
        'status',
    ];
}
