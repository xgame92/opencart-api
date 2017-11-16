<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcEvent.
 *
 * @property int $event_id
 * @property string $code
 * @property string $trigger
 * @property string $action
 * @property bool $status
 * @property int $sort_order
 */
class OcEvent extends Eloquent
{
    protected $table = 'oc_event';
    protected $primaryKey = 'event_id';
    public $timestamps = false;

    protected $casts = [
        'status'     => 'bool',
        'sort_order' => 'int',
    ];

    protected $fillable = [
        'code',
        'trigger',
        'action',
        'status',
        'sort_order',
    ];
}
