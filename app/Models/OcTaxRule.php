<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcTaxRule.
 *
 * @property int $tax_rule_id
 * @property int $tax_class_id
 * @property int $tax_rate_id
 * @property string $based
 * @property int $priority
 */
class OcTaxRule extends Eloquent
{
    protected $table = 'oc_tax_rule';
    protected $primaryKey = 'tax_rule_id';
    public $timestamps = false;

    protected $casts = [
        'tax_class_id' => 'int',
        'tax_rate_id'  => 'int',
        'priority'     => 'int',
    ];

    protected $fillable = [
        'tax_class_id',
        'tax_rate_id',
        'based',
        'priority',
    ];
}
