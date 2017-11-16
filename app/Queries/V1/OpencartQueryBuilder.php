<?php
/**
 * Created by PhpStorm.
 * User: yigit
 * Date: 25.08.2017
 * Time: 14:47.
 */

namespace App\Queries\V1;

use App\Models\OcCountry;
use Illuminate\Database\Eloquent\Builder;

class OpencartQueryBuilder
{
    public static function Build(Builder $query, $model, $operatorArray)
    {
        if ($model instanceof OcCountry) {
            /*  static::operationChecker($query,$operatorArarray[0],$model->country_id,'country_id');
              static::operationChecker($query,$operatorArray[1],$model->name,'name');
              static::operationChecker($query,$operatorArray[2],$model->iso_code_2,'iso_code_2');
              static::operationChecker($query,$operatorArray[3],$model->iso_code_3,'iso_code_3');
              static::operationChecker($query,$operatorArray[4],$model->address_format,'address_format');
              static::operationChecker($query,$operatorArray[5],$model->postcode_required,'postcode_required');
              static::operationChecker($query,$operatorArray[6],$model->status,'status');
             */
            $query = CountryCustomFilter::Build($query, $model, $operatorArray);
        }

        return $query;
    }

    /*  public static function operationChecker(Builder $query,$sqlOperator,$input,$table){
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
*/
  /*
    public static function TempCode(Builder $query, $model, $operatorArarray){
        if($model instanceof OcCountry){

            if(!is_null($model->country_id)){
                if($operatorArarray[0] == '=='){
                    $query->where('country_id',$model->country_id);
                }else if($operatorArarray[0] == 'like'){
                    $query->where('country_id',$model->country_id.'%');
                }else{
                    $query->where('country_id',$operatorArarray[0],$model->country_id);
                }
            }
            if(!is_null($model->name)){
                if($operatorArarray[1] == '=='){
                    $query->where('name',$model->name);
                }else if($operatorArarray[1] == 'like'){
                    $query->where('name',$model->name.'%');
                }else{
                    $query->where('name',$operatorArarray[0],$model->name);
                }
            }
            if(!is_null($model->iso_code_2)){
                if($operatorArarray[0] == '=='){
                    $query->where('iso_code_2',$model->iso_code_2);
                }else if($operatorArarray[0] == 'like'){
                    $query->where('iso_code_2',$model->iso_code_2.'%');
                }else{
                    $query->where('iso_code_2',$operatorArarray[0],$model->iso_code_2);
                }
            }
            if(!is_null($model->iso_code_3)){
                if($operatorArarray[0] == '=='){
                    $query->where('iso_code_3',$model->iso_code_3);
                }else if($operatorArarray[0] == 'like'){
                    $query->where('iso_code_3',$model->iso_code_3.'%');
                }else{
                    $query->where('iso_code_3',$operatorArarray[0],$model->iso_code_3);
                }
            }
            if(!is_null($model->address_format)){
                if($operatorArarray[0] == '=='){
                    $query->where('address_format',$model->address_format);
                }else if($operatorArarray[0] == 'like'){
                    $query->where('address_format',$model->address_format.'%');
                }else{
                    $query->where('address_format',$operatorArarray[0],$model->address_format);
                }
            }
            if(!is_null($model->postcode_required)){
                if($operatorArarray[0] == '=='){
                    $query->where('postcode_required',$model->postcode_required);
                }else if($operatorArarray[0] == 'like'){
                    $query->where('postcode_required',$model->postcode_required.'%');
                }else{
                    $query->where('postcode_required',$operatorArarray[0],$model->postcode_required);
                }
            }
            if(!is_null($model->postcode_required)){
                if($operatorArarray[0] == '=='){
                    $query->where('postcode_required',$model->postcode_required);
                }else if($operatorArarray[0] == 'like'){
                    $query->where('postcode_required',$model->postcode_required.'%');
                }else{
                    $query->where('postcode_required',$operatorArarray[0],$model->postcode_required);
                }
            }
        }
    }
    */
}
