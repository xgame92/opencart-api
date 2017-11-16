<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcLengthClassDescription.
 *
 * @property int $length_class_id
 * @property int $language_id
 * @property string $title
 * @property string $unit
 */
class OcLengthClassDescription extends Eloquent
{
    protected $table = 'oc_length_class_description';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'length_class_id' => 'int',
        'language_id'     => 'int',
    ];

    protected $fillable = [
        'title',
        'unit',
    ];
}
