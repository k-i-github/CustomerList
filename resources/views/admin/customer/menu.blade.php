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
              <div class="border border-white" style="padding:30px;">顧客追加</div>
            </div>
            <div class="col-md-6 mx-auto">
               <div class="border border-white" style="padding:30px;">顧客一覧</div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mx-auto">
              <div class="border border-white" style="padding:30px;">来店リスト追加</div>
            </div>
            <div class="col-md-6 mx-auto">
              <div class="border border-white" style="padding:30px;">来店リスト一覧</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
