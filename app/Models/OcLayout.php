<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcLayout.
 *
 * @property int $layout_id
 * @property string $name
 */
class OcLayout extends Eloquent
{
    protected $table = 'oc_layout';
    protected $primaryKey = 'layout_id';
    public $timestamps = false;

    protected $fillable = [
        'name',
    ];
}
