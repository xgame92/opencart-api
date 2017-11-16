<?php
/**
 * Created by PhpStorm.
 * User: yigit
 * Date: 25.08.2017
 * Time: 19:38.
 */

namespace App\Queries\V1;

use App\Models\OcCountry;
use Illuminate\Database\Eloquent\Builder;

class CountryCustomFilter extends AbstractCustomFilter
{
    public static function Build(Builder $query, OcCountry $model, $operatorArray)
    {
        parent::operationChecker($query, $operatorArray[0], $model->country_id, 'country_id');
        parent::operationChecker($query, $operatorArray[1], $model->name, 'name');
        parent::operationChecker($query, $operatorArray[2], $model->iso_code_2, 'iso_code_2');
        parent::operationChecker($query, $operatorArray[3], $model->iso_code_3, 'iso_code_3');
        parent::operationChecker($query, $operatorArray[4], $model->address_format, 'address_format');
        parent::operationChecker($query, $operatorArray[5], $model->postcode_required, 'postcode_required');
        parent::operationChecker($query, $operatorArray[6], $model->status, 'status');

        return $query;
    }
}
