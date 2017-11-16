<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcCategory.
 *
 * @property int $category_id
 * @property string $image
 * @property int $parent_id
 * @property bool $top
 * @property int $column
 * @property int $sort_order
 * @property bool $status
 * @property \Carbon\Carbon $date_added
 * @property \Carbon\Carbon $date_modified
 */
class OcCategory extends Eloquent
{
    protected $table = 'oc_category';
    protected $primaryKey = 'category_id';
    public $timestamps = false;

    protected $casts = [
        'parent_id'  => 'int',
        'top'        => 'bool',
        'column'     => 'int',
        'sort_order' => 'int',
        'status'     => 'bool',
    ];

    protected $dates = [
        'date_added',
        'date_modified',
    ];

    protected $fillable = [
        'image',
        'parent_id',
        'top',
        'column',
        'sort_order',
        'status',
        'date_added',
        'date_modified',
    ];
}
