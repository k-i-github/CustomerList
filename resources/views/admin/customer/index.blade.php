@extends('layouts.admin')
@section('title', '顧客一覧')

@section('content')
  <div class="container">
    <div class="row">
      <h2>顧客一覧</h2>
    </div>

    <div class="row m-3">
      <div class="col-md-4">
        <a href="{{ action('Admin\CustomerController@add') }}" role="button" class="btn btn-primary">新規顧客追加</a>
      </div>

      <div class="col-md-4">
        <a href="{{ action('Admin\CustomerController@li_index') }}" role="button" class="btn btn-primary">リスト一覧</a>
      </div>

      <div class="col-md-4">
        <a href="{{ action('Admin\CustomerController@menu') }}" role="button" class="btn btn-primary">TOP</a>
      </div>
    </div>

    <div class="row">
        <div class="col-md-8">
          <form action="{{ action('Admin\CustomerController@index') }}" method="get">
            <div class="form-group row">
              <label class="col-md-2">名前　検索</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="cond_name" value="{{ $cond_name }}">
              </div>

              <div class="col-md-2">
                {{ csrf_field() }}
                <input type="submit" class="btn btn-primary" value="検索">
              </div>
            </div>
          </form>
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
                  <th width="20%">ボトル</th>
                  <th width="20%">詳細</th>
                </tr>
              </thead>
              <tbody>
                @foreach($posts as $customer)
                  <tr>
                    <th>{{ $customer->id }}</th>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->gender }}</td>
                    <td>{{ $customer->classification }}</td>
                    <td>{{ $customer->staff }}</td>
                    <td>{{ $customer->bottle }}</td>
                    <td>
                      <div>
                        <a href="{{ action('Admin\CustomerController@show', ['id' => $customer->id]) }}">詳細</a>
                      </div>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

@endsection
