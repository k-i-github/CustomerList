<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Customer Model
use App\Customer;

class CustomerController extends Controller
{
    //topメニュー
    public function menu()
    {
      return view('admin.customer.menu');
    }
    //顧客ページ
    public function add()
    {
      return view ('admin.customer.create');
    }

    public function create(Request $request)
    {
      //varidation
      $this->validate($request, Customer::$rules);

      $customer = new Customer;
      $form = $request->all();

      unset($form['_token']);

      $customer->fill($form);
      $customer->save();

      return redirect ('admin/customer/create');
    }

    public function index(Request $request)
    {
      $cond_name = $request->cond_name;
      if ($cond_name != '') {
        //検索されたら検索結果を取得する
        $posts = Customer::where('name', $cond_name)->get();
      } else {
        $posts = Customer::all();
      }
      return view('admin.customer.index', ['posts' => $posts, 'cond_name' => $cond_name]);
    }

    public function show(Request $request) //????????????
    {
    
      return view('admin.customer.show', );
    }

    public function edit(Request $request)
    {
      $customer = Customer::find($request->id);
      if (empty($customer)) {
        abort(404);
      }
      return view('admin.customer.edit', ['customer_form' => $customer]);
    }

    public function update(Request $request)
    {
      $this->validate($request, Customer::$rules);
      $customer = Customer::find($request->id);
      $customer_form = $request->all();
      unset($customer_form['_token']);

      $customer->fill($customer_form)->save();

      return redirect('admin/customer');
    }
    //リストページ
    public function li_add()
    {
      return view ('admin.customer.ListCreate');
    }

    public function li_create(Request $request)
    {
      return redirect ('admin/customer/ListCreate');
    }
}
