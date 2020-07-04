<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Customer Model
use App\Customer;
use Carbon\carbon;
use App\List_dtls;
use App\List_heds;

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

    public function show($id) //????????????
    {
      $customer = Customer::findOrFail($id);

      return view('admin.customer.show', ['customer' => Customer::findOrFail($id)]);
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
      $this->validate($request, List_dtls::$rules);

      $list_dtls = new List_dtls;
      $form = $request->all();

      if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $list_dtls->image_path = basename($path);
      } else {
        $list_dtls->image_path = null;
      }

      unset($form['_token']);
      unset($form['image']);

      $list_dtls->fill($form);
      $list_dtls->save();

      $list_heds = new List_heds;
      $list_heds->list_dtls_id = $list_dtls->id;
      $list_heds->date = Carbon::now();
      $list_heds->save();

      return redirect ('admin/customer/ListCreate');
    }

  /*   public function li_index(Request $request)
    {
      $cond_time = $request->cond_time;
      if ($cond_time != '') {
        $posts =
      }
    } */
}
