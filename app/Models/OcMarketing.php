<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcMarketing.
 *
 * @property int $marketing_id
 * @property string $name
 * @property string $description
 * @property string $code
 * @property int $clicks
 * @property \Carbon\Carbon $date_added
 */
class OcMarketing extends Eloquent
{
    protected $table = 'oc_marketing';
    protected $primaryKey = 'marketing_id';
    public $timestamps = false;

    protected $casts = [
        'clicks' => 'int',
    ];

    protected $dates = [
        'date_added',
    ];

    protected $fillable = [
        'name',
        'description',
        'code',
        'clicks',
        'date_added',
    ];
}
