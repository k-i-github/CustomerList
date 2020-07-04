<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class List_dtls extends Model
{
  protected $table ='list_dtls';
  protected $guaded = array('id');

  public static $rules = array(
    'date' => 'required',
    'visitor' => 'required',
  );

}
