<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcTaxRateToCustomerGroup.
 *
 * @property int $tax_rate_id
 * @property int $customer_group_id
 */
class OcTaxRateToCustomerGroup extends Eloquent
{
    protected $table = 'oc_tax_rate_to_customer_group';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'tax_rate_id'       => 'int',
        'customer_group_id' => 'int',
    ];
}
