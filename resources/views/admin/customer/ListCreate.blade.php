@extends('layouts.admin')
@section('title', '来店リスト追加')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12 mx-auto">
        <h2>来店リスト追加</h2>
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
                  <tr>
                      <td><input type="text" class="form-control" name="classification1" value="{{ old('classification1') }}"></td>
                      <td>1</td>
                      <td><input type="time" class="form-control" name="time1" value="{{ old('time1') }}"></td>
                      <td><input type="text" class="form-control" name="visitor1" value="{{ old('visitor1') }}"></td>
                      <td><input type="text" class="form-control" name="clientlist1" value="{{ old('clientlist1') }}"></td>
                      <td><input type="text" class="form-control" name="customer_name1" value="{{ old('customer_name1') }}"></td>
                      <td><input type="text" class="form-control" name="gender1" value="{{ old('gender1') }}"></td>
                      <td><input type="text" class="form-control" name="table_number1" value="{{ old('table_number1') }}"></td>
                      <td><input type="text" class="form-control" name="amount1" value="{{ old('amount1') }}"></td>
                      <td><input type="text" class="form-control" name="service1" value="{{ old('service1') }}"></td>
                      <td><input type="text" class="form-control" name="staff1" value="{{ old('staff1') }}"></td>
                  </tr>
                  <tr>
                    <td><input type="text" class="form-control" name="classification2" value="{{ old('classification2') }}"></td>
                    <td>2</td>
                    <td><input type="time" class="form-control" name="time2" value="{{ old('time2') }}"></td>
                    <td><input type="text" class="form-control" name="visitor2" value="{{ old('visitor2') }}"></td>
                    <td><input type="text" class="form-control" name="clientlist2" value="{{ old('clientlist2') }}"></td>
                    <td><input type="text" class="form-control" name="customer_name2" value="{{ old('customer_name2') }}"></td>
                    <td><input type="text" class="form-control" name="gender2" value="{{ old('gender2') }}"></td>
                    <td><input type="text" class="form-control" name="table_number2" value="{{ old('table_number2') }}"></td>
                    <td><input type="text" class="form-control" name="amount2" value="{{ old('amount2') }}"></td>
                    <td><input type="text" class="form-control" name="service2" value="{{ old('service2') }}"></td>
                    <td><input type="text" class="form-control" name="staff2" value="{{ old('staff2') }}"></td>
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
