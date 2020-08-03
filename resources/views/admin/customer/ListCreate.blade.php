@extends('layouts.admin')
@section('title', '来店リスト追加')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12 mx-auto">
        <h2>来店リスト追加</h2>

        <div class="row m-3">
          <div class="col-md-4">
            <a href="{{ action('Admin\CustomerController@index') }}" role="button" class="btn btn-primary">顧客一覧</a>
          </div>
          <div class="col-md-4">
            <a href="{{ action('Admin\CustomerController@li_index') }}" role="button" class="btn btn-primary">リスト一覧</a>
          </div>
          <div class="col-md-4">
            <a href="{{ action('Admin\CustomerController@menu') }}" role="button" class="btn btn-primary">TOP</a>
          </div>
        </div>

        <form action="{{ action('Admin\CustomerController@li_create') }}" method="post" enctype="multipart/form-data">
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
                @for ($i = 0; $i < 10; $i++)
                <tr>
                    <td><input type="text" class="form-control" name="classification{{ $i + 1 }}" value="{{ old('classification') }}"></td>
                    <td>{{ $i + 1 }}</td>
                    <td><input type="time" class="form-control" name="time{{ $i + 1 }}" value="{{ old('time') }}"></td>
                    <td><input type="text" class="form-control" name="visitor{{ $i + 1 }}" value="{{ old('visitor') }}"></td>
                    <td><input type="text" class="form-control" name="clientlist{{ $i + 1 }}" value="{{ old('clientlist') }}"></td>
                    <td><input type="text" class="form-control" name="customer_name{{ $i + 1 }}" value="{{ old('customer_name') }}"></td>
                    <td><input type="text" class="form-control" name="gender{{ $i + 1 }}" value="{{ old('gender') }}"></td>
                    <td><input type="text" class="form-control" name="table_number{{ $i + 1 }}" value="{{ old('table_number') }}"></td>
                    <td><input type="text" class="form-control" name="amount{{ $i + 1 }}" value="{{ old('amount') }}"></td>
                    <td><input type="text" class="form-control" name="service{{ $i + 1 }}" value="{{ old('service') }}"></td>
                    <td><input type="text" class="form-control" name="staff{{ $i + 1 }}" value="{{ old('staff') }}"></td>
                </tr>

                @endfor


              </tbody>
          </table>

          </div>
          </div>


          <div class="form-group row">
            <label class="col-md-2">画像アップロード</label>
              <div class="col-md-10">
                <input type="file" class="form-control-file" name="image">
              </div>
          </div>


            {{ csrf_field() }}
            <input type="submit" class="btn btn-primary" value="追加">
            </form>
           </div>
       </div>
   </div>
@endsection
