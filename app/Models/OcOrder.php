<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcOrder.
 *
 * @property int $order_id
 * @property int $invoice_no
 * @property string $invoice_prefix
 * @property int $store_id
 * @property string $store_name
 * @property string $store_url
 * @property int $customer_id
 * @property int $customer_group_id
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $telephone
 * @property string $fax
 * @property string $custom_field
 * @property string $payment_firstname
 * @property string $payment_lastname
 * @property string $payment_company
 * @property string $payment_address_1
 * @property string $payment_address_2
 * @property string $payment_city
 * @property string $payment_postcode
 * @property string $payment_country
 * @property int $payment_country_id
 * @property string $payment_zone
 * @property int $payment_zone_id
 * @property string $payment_address_format
 * @property string $payment_custom_field
 * @property string $payment_method
 * @property string $payment_code
 * @property string $shipping_firstname
 * @property string $shipping_lastname
 * @property string $shipping_company
 * @property string $shipping_address_1
 * @property string $shipping_address_2
 * @property string $shipping_city
 * @property string $shipping_postcode
 * @property string $shipping_country
 * @property int $shipping_country_id
 * @property string $shipping_zone
 * @property int $shipping_zone_id
 * @property string $shipping_address_format
 * @property string $shipping_custom_field
 * @property string $shipping_method
 * @property string $shipping_code
 * @property string $comment
 * @property float $total
 * @property int $order_status_id
 * @property int $affiliate_id
 * @property float $commission
 * @property int $marketing_id
 * @property string $tracking
 * @property int $language_id
 * @property int $currency_id
 * @property string $currency_code
 * @property float $currency_value
 * @property string $ip
 * @property string $forwarded_ip
 * @property string $user_agent
 * @property string $accept_language
 * @property \Carbon\Carbon $date_added
 * @property \Carbon\Carbon $date_modified
 */
class OcOrder extends Eloquent
{
    protected $table = 'oc_order';
    protected $primaryKey = 'order_id';
    public $timestamps = false;

    protected $casts = [
        'invoice_no'          => 'int',
        'store_id'            => 'int',
        'customer_id'         => 'int',
        'customer_group_id'   => 'int',
        'payment_country_id'  => 'int',
        'payment_zone_id'     => 'int',
        'shipping_country_id' => 'int',
        'shipping_zone_id'    => 'int',
        'total'               => 'float',
        'order_status_id'     => 'int',
        'affiliate_id'        => 'int',
        'commission'          => 'float',
        'marketing_id'        => 'int',
        'language_id'         => 'int',
        'currency_id'         => 'int',
        'currency_value'      => 'float',
    ];

    protected $dates = [
        'date_added',
        'date_modified',
    ];

    protected $fillable = [
        'invoice_no',
        'invoice_prefix',
        'store_id',
        'store_name',
        'store_url',
        'customer_id',
        'customer_group_id',
        'firstname',
        'lastname',
        'email',
        'telephone',
        'fax',
        'custom_field',
        'payment_firstname',
        'payment_lastname',
        'payment_company',
        'payment_address_1',
        'payment_address_2',
        'payment_city',
        'payment_postcode',
        'payment_country',
        'payment_country_id',
        'payment_zone',
        'payment_zone_id',
        'payment_address_format',
        'payment_custom_field',
        'payment_method',
        'payment_code',
        'shipping_firstname',
        'shipping_lastname',
        'shipping_company',
        'shipping_address_1',
        'shipping_address_2',
        'shipping_city',
        'shipping_postcode',
        'shipping_country',
        'shipping_country_id',
        'shipping_zone',
        'shipping_zone_id',
        'shipping_address_format',
        'shipping_custom_field',
        'shipping_method',
        'shipping_code',
        'comment',
        'total',
        'order_status_id',
        'affiliate_id',
        'commission',
        'marketing_id',
        'tracking',
        'language_id',
        'currency_id',
        'currency_code',
        'currency_value',
        'ip',
        'forwarded_ip',
        'user_agent',
        'accept_language',
        'date_added',
        'date_modified',
    ];
}
