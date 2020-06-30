@extends('layouts.admin')
@section('title', 'リスト一覧')

@section('content')
  <div class="container">
    <div class="row">
      <h2>顧客一覧</h2>
    </div>
    <div class="row">
      <div class="col-md-2">
        <a href="{{ action('Admin\CustomerController@index') }}" role="button" class="btn btn-primary">顧客一覧</a>
      </div>
      <div class="col-md-2">
        <a href="{{ action('Admin\CustomerController@menu') }}" role="button" class="btn btn-primary">TOP</a>
      </div>
        <div class="col-md-8">
          <form action="{{ action('Admin\CustomerController@li_index') }}" method="get">
            <div class="form-group row">
              <label class="col-md-2">日付　検索</label>
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
                  <th width="30%">年月日</th>
                  <th width="30%">詳細</th>
                  <th width="30%">画像</th>
                </tr>
              </thead>
              <tbody>
                @foreach($posts as $customer)
                  <tr>
                    <th>{{ $ }}</th>
                    <td>{{ $ }}</td>
                    <td>{{ $ }}</td>
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
