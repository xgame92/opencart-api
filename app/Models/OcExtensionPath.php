<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcExtensionPath.
 *
 * @property int $extension_path_id
 * @property int $extension_install_id
 * @property string $path
 * @property \Carbon\Carbon $date_added
 */
class OcExtensionPath extends Eloquent
{
    protected $table = 'oc_extension_path';
    protected $primaryKey = 'extension_path_id';
    public $timestamps = false;

    protected $casts = [
        'extension_install_id' => 'int',
    ];

    protected $dates = [
        'date_added',
    ];

    protected $fillable = [
        'extension_install_id',
        'path',
        'date_added',
    ];
}
