<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class List_dtls extends Model
{
  protected $table ='list_dtls';
  protected $fillable = ['date', 'visitor'];
  protected $guaded = array('id');

  public static $rules = array(
//  'list_heds_id' => 'required',
    'date' => 'required',
    'visitor' => 'required',
  );

  public function list_heds()
  {
    return $this->hasMany('App\List_heds');
  }

}
