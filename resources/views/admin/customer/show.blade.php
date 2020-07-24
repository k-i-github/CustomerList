@extends('layouts.admin')
@section('title', '顧客詳細')

@section('content')
  <div class="container">
    <div class="row">
      <h2>顧客詳細</h2>
    </div>
    <div class="row m-3">
      <div class="col-md-3">
        <a href="{{ action('Admin\CustomerController@edit', ['id' => $customer->id]) }}" role="button" class="btn btn-primary">編集</a>
      </div>

      <div class="col-md-3">
        <a href="{{ action('Admin\CustomerController@index') }}" role="button" class="btn btn-primary">顧客一覧</a>
      </div>

      <div class="col-md-3">
        <a href="{{ action('Admin\CustomerController@li_index') }}" role="button" class="btn btn-primary">リスト一覧</a>
      </div>

      <div class="col-md-3">
        <a href="{{ action('Admin\CustomerController@menu') }}" role="button" class="btn btn-primary">TOP</a>
      </div>

    </div>

      <div class="row">
        <div class="list-customer col-md-12 mx-auto">
          <div class="row">
            <table class="table table-dark">
              <thead>
                <tr>
                  <th width="10%">ID</th>
                  <th width="20%">名前</th>
                  <th width="10%">性別</th>
                  <th width="10%">分類</th>
                  <th width="20%">担当</th>
                  <th width="20">ボトル</th>
                </tr>
              </thead>
              <tbody>

                  <tr>
                    <th>{{ $customer->id }}</th>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->gender }}</td>
                    <td>{{ $customer->classification }}</td>
                    <td>{{ $customer->staff }}</td>
                    <td>{{ $customer->bottle }}</td>
                  </tr>

              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10 mx-auto">
          <div class="border border-white" style="padding:5px;">{{ $customer->note }}</div>
      </div>
      </div>
    </div>
@endsection
