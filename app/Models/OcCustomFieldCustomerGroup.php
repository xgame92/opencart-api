<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcCustomFieldCustomerGroup.
 *
 * @property int $custom_field_id
 * @property int $customer_group_id
 * @property bool $required
 */
class OcCustomFieldCustomerGroup extends Eloquent
{
    protected $table = 'oc_custom_field_customer_group';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'custom_field_id'   => 'int',
        'customer_group_id' => 'int',
        'required'          => 'bool',
    ];

    protected $fillable = [
        'required',
    ];
}
