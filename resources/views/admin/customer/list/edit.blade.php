@extends('layouts.admin')
@section('title', 'リストの編集')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <h2>リスト編集</h2>
        <form action="{{ action('Admin\CustomerController@li_update') }}" method="post" enctype="multipart/form-data">
          @if (count($errors) > 0)
            <ul>
              @foreach($errors->all() as $e)
                <li>{{ $e }}</li>
              @endforeach
            </ul>
          @endif

          <div class="form-group row">
            <label class="col-md-2">日付</label>
            <div class="col-md-2">
              <input type="date" class="form-control" name="list_date" value="{{ $list_heds_form->list_date }}">
            </div>
          </div>

          <div class="form-group row">
          <div class="table-responsive">

            <table class="table table-bordered">
              <thead>
                  <tr>
                      <th>分類</th>
                      <th></th>
                      <th>時間</th>
                      <th>来店者名</th>
                      <th>営業先店舗</th>
                      <th>顧客名</th>
                      <th>性別</th>
                      <th>卓番</th>
                      <th>金額</th>
                      <th>接客</th>
                      <th>担当</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td><input type="text" class="form-control" name="classification1" value="{{ $list_dtls_form->classification1 }}"></td>
                      <td>1</td>
                      <td><input type="time" class="form-control" name="time1" value="{{ $list_dtls_form->time1 }}"></td>
                      <td><input type="text" class="form-control" name="visitor1" value="{{ $list_dtls_form->visitor1}}"></td>
                      <td><input type="text" class="form-control" name="clientlist1" value="{{ $list_dtls_form->clientlist1 }}"></td>
                      <td><input type="text" class="form-control" name="customer_name1" value="{{ $list_dtls_form->customer_name1 }}"></td>
                      <td><input type="text" class="form-control" name="gender1" value="{{ $list_dtls_form->gender1 }}"></td>
                      <td><input type="text" class="form-control" name="table_number1" value="{{ $list_dtls_form->table_number1 }}"></td>
                      <td><input type="text" class="form-control" name="amount1" value="{{ $list_dtls_form->amount1 }}"></td>
                      <td><input type="text" class="form-control" name="service1" value="{{ $list_dtls_form->service1 }}"></td>
                      <td><input type="text" class="form-control" name="staff1" value="{{ $list_dtls_form->staff1 }}"></td>
                  </tr>
                  <tr>
                    <td><input type="text" class="form-control" name="classification2" value="{{ $list_dtls_form->classification2 }}"></td>
                    <td>2</td>
                    <td><input type="time" class="form-control" name="time2" value="{{ $list_dtls_form->time2 }}"></td>
                    <td><input type="text" class="form-control" name="visitor2" value="{{ $list_dtls_form->visitor2 }}"></td>
                    <td><input type="text" class="form-control" name="clientlist2" value="{{ $list_dtls_form->clientlist2 }}"></td>
                    <td><input type="text" class="form-control" name="customer_name2" value="{{ $list_dtls_form->customer_name2 }}"></td>
                    <td><input type="text" class="form-control" name="gender2" value="{{ $list_dtls_form->gender2 }}"></td>
                    <td><input type="text" class="form-control" name="table_number2" value="{{ $list_dtls_form->table_number2 }}"></td>
                    <td><input type="text" class="form-control" name="amount2" value="{{ $list_dtls_form->amount2 }}"></td>
                    <td><input type="text" class="form-control" name="service2" value="{{ $list_dtls_form->service2 }}"></td>
                    <td><input type="text" class="form-control" name="staff2" value="{{ $list_dtls_form->staff2 }}"></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td>3</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td>4</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td>5</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td>6</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td>7</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td>8</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td>9</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td>10</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
              </tbody>
          </table>

          </div>
          </div>

          <div class="form-group row">
            <label class="col-md-2">画像変更</label>
              <div class="col-md-10">
                <input type="file" class="form-control-file" name="image">
                <div class="form-text text-info">
                  設定中: {{ $list_heds_form->image_path }}
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                  </label>
                </div>
              </div>
          </div>

            <div class="form-group row">
              <div class="col-md-10">
                <input type="hidden" name="id" value="{{ $list_heds_form->id }}">
                {{ csrf_field() }}
                <input type="submit" class="btn btn-primary" value="更新">
              </div>
            </div>
            </form>
           </div>
       </div>
   </div>
@endsection
