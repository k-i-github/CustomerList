@extends('layouts.admin')
@section('title', '顧客の編集')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <h2>顧客編集</h2>
        <form action="{{ action('Admin\CustomerController@update') }}" method="post" enctype="multipart/form-data">
          @if (count($errors) > 0)
            <ul>
              @foreach($errors->all() as $e)
                <li>{{ $e }}</li>
              @endforeach
            </ul>
          @endif

          <div class="row m-3">
            <div class="col-md-4">
              <a href="{{ action('Admin\CustomerController@li_index') }}" role="button" class="btn btn-primary">リスト一覧</a>
            </div>

            <div class="col-md-4">
              <a href="{{ action('Admin\CustomerController@index') }}" role="button" class="btn btn-primary">顧客一覧</a>
            </div>

            <div class="col-md-4">
              <a href="{{ action('Admin\CustomerController@menu') }}" role="button" class="btn btn-primary">TOP</a>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-md-2" for="name">名前</label>
            <div class="col-md-10">
              <input type="text" class="form-control" name="name" value="{{ $customer_form->name }}">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-md-2" for="gender">性別</label>
              <div class="col-md-10">
                 <div class="radio-inline">
                   <input type="radio" value="男性" name="gender" id="man">
                   <label for="man">男性</label>
                 </div>

                 <div class="radio-inline">
                   <input type="radio" value="女性" name="gender" id="woman">
                   <label for="woman">女性</label>
                 </div>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-md-2">分類</label>
                <div class="col-md-10">
                  <select name="classification" class="custom-select">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                    <option value="G">G</option>
                  </select>
                </div>
              </div>

            <div class="form-group row">
              <label class="col-md-2" for="staff">担当者</label>
              <div class="col-md-10">
                <input type="text" class="form-control" name="staff" value="{{ $customer_form->staff }}">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-md-2" for="bottle">ボトル</label>
              <div class="col-md-10">
                <input type="text" class="form-control" name="bottle" value="{{ $customer_form->bottle }}">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-md-2" for="note">メモ</label>
              <div class="col-md-10">
                <textarea class="form-control" name="note" rows="20">{{ $customer_form->note }}</textarea>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-10">
                <input type="hidden" name="id" value="{{ $customer_form->id }}">
                {{ csrf_field() }}
                <input type="submit" class="btn btn-primary" value="更新">
              </div>
            </div>
            </form>
           </div>
       </div>
   </div>
@endsection
