<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcStore.
 *
 * @property int $store_id
 * @property string $name
 * @property string $url
 * @property string $ssl
 */
class OcStore extends Eloquent
{
    protected $table = 'oc_store';
    protected $primaryKey = 'store_id';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'url',
        'ssl',
    ];
}
