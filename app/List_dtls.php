<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class List_dtls extends Model
{
  protected $table ='list_dtls';
  protected $guarded = array('id');

    // ListDtls
    public static $rules = array(
      'date' => 'required',
      'time' => 'required',
      'visitor' => 'required',
    );

}
