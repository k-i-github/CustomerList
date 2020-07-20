@extends('layouts.admin')
@section('title', 'リスト詳細')

@section('content')
  <div class="container">
    <div class="row">
      <h2>リスト詳細</h2>
    </div>
    <div class="row">
      <div class="col-md-3">
        <a href="{{ action('Admin\CustomerController@menu') }}" role="button" class="btn btn-primary">TOP</a>
      </div>



      <div class="col-md-3">
        <a href="{{ action('Admin\CustomerController@index') }}" role="button" class="btn btn-primary">顧客一覧</a>
      </div>


      <div class="col-md-3">
        <a href="{{ action('Admin\CustomerController@edit', ['id' => $customer->id]) }}" role="button" class="btn btn-primary">編集</a>

    </div>
  </div>

  <div class="form-group row">
    <label class="col-md-2">日付</label>
    <div class="col-md-2">
      <input type="date" class="form-control" name="list_date" value="{{ old('list_date') }}">
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
              <td>{{ $list_dtls->classification }}</td>
              <td>1</td>
              <td>{{ $list_dtls->time }}</td>
              <td>{{ $list_dtls->visitor }}</td>
              <td>{{ $list_dtls->clientlist }}</td>
              <td>{{ $list_dtls->customer_name }}</td>
              <td>{{ $list_dtls->gender }}</td>
              <td>{{ $list_dtls->table_number }}</td>
              <td>{{ $list_dtls->amount }}</td>
              <td>{{ $list_dtls->service }}</td>
              <td>{{ $list_dtls->staff }}</td>
          </tr>




      </tbody>
  </table>

  </div>
  </div>
      
    </div>
@endsection
