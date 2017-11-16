<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcExtension.
 *
 * @property int $extension_id
 * @property string $type
 * @property string $code
 */
class OcExtension extends Eloquent
{
    protected $table = 'oc_extension';
    protected $primaryKey = 'extension_id';
    public $timestamps = false;

    protected $fillable = [
        'type',
        'code',
    ];
}
