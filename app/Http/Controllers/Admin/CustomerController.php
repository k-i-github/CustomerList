<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Customer Model
use App\Customer;
use Carbon\carbon;
// 使用モデルの宣言
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
      // まずはHEDを登録
      $list_heds = new List_heds;
      // ピカチュウ->攻撃力 = 100;
      // ピカチュウ->防御力 = 90;
      $list_heds->created_at = Carbon::now();

      $form = $request->all();


      if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $list_heds->image_path = basename($path);
      } else {
        //$list_heds->image_path = null;
        $list_heds->image_path = "test";
      }
      $list_heds->list_date = $form['list_date'];
      $list_heds->save();
      // 上のlistheds seveで登録したレコードのIDを取得
      $list_insert_id = $list_heds->id;
      // list heds終わり

      $this->validate($request, List_dtls::$rules);

      // 上記で登録されたHEDのIDをDTLテーブルのlistHED idに登録する
      $list_dtls = new List_dtls;
      // dtlsの hed_id に上で作った$list_insert_id(hedsのIDを登録する)
      $list_dtls->list_hed_id = $list_insert_id;
      $list_dtls->classification = $form['classification'];
      $list_dtls->time = $form['time'];
      $list_dtls->visitor = $form['visitor'];
      $list_dtls->clientlist = $form['clientlist'];
      $list_dtls->customer_name = $form['customer_name'];
      $list_dtls->gender = $form['gender'];
      $list_dtls->table_number = $form['table_number'];
      $list_dtls->amount = $form['amount'];
      $list_dtls->service = $form['service'];
      $list_dtls->staff = $form['staff'];

      $list_dtls->save();
      //$list_dtls->fill($form);
      //$list_dtls->save();

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
