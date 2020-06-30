<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class List_heds extends Model
{
   protected $table ='list_heds';
   protected $guarded = array('id');

    //ListHeds
    public static $rules = array(
      'date' => 'required',
    );
}
