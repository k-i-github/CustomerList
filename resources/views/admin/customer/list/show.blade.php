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
        <a href="{{ action('Admin\CustomerController@edit', ['id' => 1]) }}" role="button" class="btn btn-primary">編集</a>

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
        @foreach($list_dtls as $list_dtl)
          <tr>
              <td>{{ $list_dtl->classification }}</td>
              <td>1</td>
              <td>{{ $list_dtl->time }}</td>
              <td>{{ $list_dtl->visitor }}</td>
              <td>{{ $list_dtl->clientlist }}</td>
              <td>{{ $list_dtl->customer_name }}</td>
              <td>{{ $list_dtl->gender }}</td>
              <td>{{ $list_dtl->table_number }}</td>
              <td>{{ $list_dtl->amount }}</td>
              <td>{{ $list_dtl->service }}</td>
              <td>{{ $list_dtl->staff }}</td>
          </tr>

        @endforeach



      </tbody>
  </table>

  </div>
  </div>

    </div>
@endsection
