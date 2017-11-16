<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcUpload.
 *
 * @property int $upload_id
 * @property string $name
 * @property string $filename
 * @property string $code
 * @property \Carbon\Carbon $date_added
 */
class OcUpload extends Eloquent
{
    protected $table = 'oc_upload';
    protected $primaryKey = 'upload_id';
    public $timestamps = false;

    protected $dates = [
        'date_added',
    ];

    protected $fillable = [
        'name',
        'filename',
        'code',
        'date_added',
    ];
}
