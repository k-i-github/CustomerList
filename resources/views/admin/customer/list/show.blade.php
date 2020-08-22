@extends('layouts.admin')
@section('title', 'リスト詳細')

@section('content')
  <div class="container">
    <div class="row">
      <h2>リスト詳細</h2>
    </div>
    <div class="row m-3">
      <div class="col-md-3">
        <a href="{{ action('Admin\CustomerController@menu') }}" role="button" class="btn btn-primary">TOP</a>
      </div>

      <div class="col-md-3">
        <a href="{{ action('Admin\CustomerController@li_index') }}" role="button" class="btn btn-primary">リスト一覧</a>
      </div>

      <div class="col-md-3">
        <a href="{{ action('Admin\CustomerController@index') }}" role="button" class="btn btn-primary">顧客一覧</a>
      </div>

      <div class="col-md-3">
        <a href="{{ action('Admin\CustomerController@li_edit', ['id' => $list_heds->id]) }}" role="button" class="btn btn-primary">編集</a>
      </div>

    </div>

  <div class="form-group row">
    <label class="col-md-2">日付</label>
    <div class="col-md-4">
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
        @for ($i = 0; $i < count($list_dtls); $i++)
          <tr>
              <td>{{ $list_dtls[$i]->classification }}</td>
              <td>{{ $i + 1 }}</td>
              <td>{{ $list_dtls[$i]->time }}</td>
              <td>{{ $list_dtls[$i]->visitor }}</td>
              <td>{{ $list_dtls[$i]->clientlist }}</td>
              <td>{{ $list_dtls[$i]->customer_name }}</td>
              <td>{{ $list_dtls[$i]->gender }}</td>
              <td>{{ $list_dtls[$i]->table_number }}</td>
              <td>{{ $list_dtls[$i]->amount }}</td>
              <td>{{ $list_dtls[$i]->service }}</td>
              <td>{{ $list_dtls[$i]->staff }}</td>
          </tr>
        @endfor
      </tbody>
  </table>

  </div>
  </div>

</div>
@endsection
