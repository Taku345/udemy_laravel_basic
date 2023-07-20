<?php
namespace App\Services;

class CheckFormService
{
  public static function checkGender($data){
    if($data->gender === 0){
      $gender = '男性';
    } else {
      $gender = '女性';
    }
    return $gender;
  }

  public static function checkAge($data){
    if($data->age === 1){ $age = '～19歳';}
    if($data->age === 2){ $age = '～29歳';}
    if($data->age === 3){ $age = '～39歳';}
    if($data->age === 4){ $age = '～49歳';}
    if($data->age === 5){ $age = '～59歳';}
    if($data->age === 6){ $age = '60歳～';}
    return $age;
  }

}

?>