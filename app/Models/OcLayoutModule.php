<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcLayoutModule.
 *
 * @property int $layout_module_id
 * @property int $layout_id
 * @property string $code
 * @property string $position
 * @property int $sort_order
 */
class OcLayoutModule extends Eloquent
{
    protected $table = 'oc_layout_module';
    protected $primaryKey = 'layout_module_id';
    public $timestamps = false;

    protected $casts = [
        'layout_id'  => 'int',
        'sort_order' => 'int',
    ];

    protected $fillable = [
        'layout_id',
        'code',
        'position',
        'sort_order',
    ];
}
