<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcSetting.
 *
 * @property int $setting_id
 * @property int $store_id
 * @property string $code
 * @property string $key
 * @property string $value
 * @property bool $serialized
 */
class OcSetting extends Eloquent
{
    protected $table = 'oc_setting';
    protected $primaryKey = 'setting_id';
    public $timestamps = false;

    protected $casts = [
        'store_id'   => 'int',
        'serialized' => 'bool',
    ];

    protected $fillable = [
        'store_id',
        'code',
        'key',
        'value',
        'serialized',
    ];
}
