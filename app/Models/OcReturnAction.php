<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcReturnAction.
 *
 * @property int $return_action_id
 * @property int $language_id
 * @property string $name
 */
class OcReturnAction extends Eloquent
{
    protected $table = 'oc_return_action';
    public $timestamps = false;

    protected $casts = [
        'language_id' => 'int',
    ];

    protected $fillable = [
        'name',
    ];
}
