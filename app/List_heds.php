<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class List_heds extends Model
{
  protected $table ='list_heds';
  protected $guaded = array('id');

  public static $rules = array(
    'list_date' => 'required',
    'image_path' => 'required',
  );

  public function list_dtls()
  {
    return $this->hasMany('App\List_dtls');
  }
}
