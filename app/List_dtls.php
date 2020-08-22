<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class List_dtls extends Model
{
  protected $table ='list_dtls';
  protected $guaded = array('id');

//  protected $fillable ='list_date'; 

  public static $rules = array(
    'time1' => 'required',
    'visitor1' => 'required',
  );

}
