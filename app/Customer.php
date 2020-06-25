<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
  protected $table ='customer'; //?????????
  protected $guarded = array('id');
   //顧客追加
    public static $rules = array(
      'name' => 'required',
      'gender' => 'required',
    );
}
