<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcVoucherThemeDescription.
 *
 * @property int $voucher_theme_id
 * @property int $language_id
 * @property string $name
 */
class OcVoucherThemeDescription extends Eloquent
{
    protected $table = 'oc_voucher_theme_description';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'voucher_theme_id' => 'int',
        'language_id'      => 'int',
    ];

    protected $fillable = [
        'name',
    ];
}
