<?php
/**
 * Created by PhpStorm.
 * User: yigit
 * Date: 25.08.2017
 * Time: 19:41
 */

namespace App\Queries\V1;

use Illuminate\Database\Eloquent\Builder;

abstract class AbstractCustomFilter
{

    public static function operationChecker(Builder $query,$sqlOperator,$input,$table){
        if(!is_null($input)) {
            if ($sqlOperator == '==') {
                $query->where($table, $input);
            } else if ($sqlOperator == 'like') {
                $query->where($table,'like',$input.'%');
            } else {
                $query->where($table, $sqlOperator, $input);
            }
        }
    }
}