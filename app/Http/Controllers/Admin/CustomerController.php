<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    //
    public function add()
    {
      return view('admin.customer.menu');
    }

    public function create(Request $request)
    {
      return redirect ('admin/customer/create');
    }
}
