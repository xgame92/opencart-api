<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcRecurringDescription.
 *
 * @property int $recurring_id
 * @property int $language_id
 * @property string $name
 */
class OcRecurringDescription extends Eloquent
{
    protected $table = 'oc_recurring_description';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'recurring_id' => 'int',
        'language_id'  => 'int',
    ];

    protected $fillable = [
        'name',
    ];
}
