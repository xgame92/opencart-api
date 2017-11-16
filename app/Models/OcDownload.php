<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcDownload.
 *
 * @property int $download_id
 * @property string $filename
 * @property string $mask
 * @property \Carbon\Carbon $date_added
 */
class OcDownload extends Eloquent
{
    protected $table = 'oc_download';
    protected $primaryKey = 'download_id';
    public $timestamps = false;

    protected $dates = [
        'date_added',
    ];

    protected $fillable = [
        'filename',
        'mask',
        'date_added',
    ];
}
