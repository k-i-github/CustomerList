@extends('layouts.admin')
@section('title', '顧客一覧')

@section('content')
  <div class="container">
    <div class="row">
      <h2>顧客一覧<h2>
    </div>
    <div class="row">
      <div class="col-md-4">
        <a href="{{ action('Admin\CustomerController@add') }}" role="button" class="btn btn-primary">新規顧客追加</a>
        <div class="col-md-8">
          <form action="{{ action('Admin\CustomerController@index') }}" method="get">
            <div class="form-group row">
              <label class="col-md-2">タイトル</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
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
        <div class="list-news col-md-12 mx-auto">
          <div class="row">
            <table class="table table-dark">
              <thead>
                <tr>
                  <th width="10%">ID</th>
                  <th width="10%">名前</th>
                  <th width="10%">性別</th>
                  <th width="10%">分類</th>
                  <th width="10%">担当</th>
                  <th width="10%">ボトル</th>
                </tr>
              </thead>
              <tbody>
                @foreach($posts as $news)
                  <tr>
                    <th>{{ }}</th>
                    <tb>{{ }}</tb>
                    <tb>{{ }}</tb>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
@endsection
