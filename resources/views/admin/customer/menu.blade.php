{{-- layouts/admin.blade.php --}}
@extends('layouts.admin')

@section('title', 'CustomerList')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <h1>Customer Menu</h1>
          <div class="row">
            <div class="col-md-6 mx-auto">
              <a href="{{ action('Admin\CustomerController@create') }}">
              <div class="border border-white text-center" style="padding:10%;">顧客追加</div>
            </a>
            </div>
            <div class="col-md-6 mx-auto">
              <a href="{{ action('Admin\CustomerController@index') }}">
               <div class="border border-white text-center" style="padding:10%;">顧客一覧</div>
             </a>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mx-auto">
              <a href="{{ action('Admin\CustomerController@li_create') }}">
              <div class="border border-white text-center" style="padding:10%;">来店リスト追加</div>
              </a>
            </div>
            <div class="col-md-6 mx-auto">
              <div class="border border-white text-center" style="padding:10%;">来店リスト一覧</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
