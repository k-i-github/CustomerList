@extends('layouts.admin')
@section('title', 'リストの編集')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12 mx-auto">
        <h2>リスト編集</h2>
        <form action="{{ action('Admin\CustomerController@li_update') }}" method="post" enctype="multipart/form-data">
          @if (count($errors) > 0)
            <ul>
              @foreach($errors->all() as $e)
                <li>{{ $e }}</li>
              @endforeach
            </ul>
          @endif

          <div class="form-group row">
            <label class="col-md-2">日付</label>
            <div class="col-md-4">
              <input type="date" class="form-control" name="list_date" value="{{ $list_heds_form->list_date }}">
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
                @if ( count($list_dtls_form) >= $i + 1 )
                  <tr>
                      <td><input type="text" class="form-control" name="classification{{ $i + 1 }}" value="{{ $list_dtls_form[$i]->classification }}"></td>
                      <td>{{ $i + 1 }}</td>
                      <td><input type="time" class="form-control" name="time{{ $i + 1 }}" value="{{ $list_dtls_form[$i]->time }}"></td>
                      <td><input type="text" class="form-control" name="visitor{{ $i + 1 }}" value="{{ $list_dtls_form[$i]->visitor }}"></td>
                      <td><input type="text" class="form-control" name="clientlist{{ $i + 1 }}" value="{{ $list_dtls_form[$i]->clientlist }}"></td>
                      <td><input type="text" class="form-control" name="customer_name{{ $i + 1 }}" value="{{ $list_dtls_form[$i]->customer_name }}"></td>
                      <td><input type="text" class="form-control" name="gender{{ $i + 1 }}" value="{{ $list_dtls_form[$i]->gender }}"></td>
                      <td><input type="text" class="form-control" name="table_number{{ $i + 1 }}" value="{{ $list_dtls_form[$i]->table_number }}"></td>
                      <td><input type="text" class="form-control" name="amount{{ $i + 1 }}" value="{{ $list_dtls_form[$i]->amount }}"></td>
                      <td><input type="text" class="form-control" name="service{{ $i + 1 }}" value="{{ $list_dtls_form[$i]->service }}"></td>
                      <td><input type="text" class="form-control" name="staff{{ $i + 1 }}" value="{{ $list_dtls_form[$i]->staff }}"></td>
                  </tr>
                  @else
                  <tr>
                      <td><input type="text" class="form-control" name="classification{{ $i + 1 }}" value=""></td>
                      <td>{{ $i + 1 }}</td>
                      <td><input type="time" class="form-control" name="time{{ $i + 1 }}" value=""></td>
                      <td><input type="text" class="form-control" name="visitor{{ $i + 1 }}" value=""></td>
                      <td><input type="text" class="form-control" name="clientlist{{ $i + 1 }}" value=""></td>
                      <td><input type="text" class="form-control" name="customer_name{{ $i + 1 }}" value=""></td>
                      <td><input type="text" class="form-control" name="gender{{ $i + 1 }}" value=""></td>
                      <td><input type="text" class="form-control" name="table_number{{ $i + 1 }}" value=""></td>
                      <td><input type="text" class="form-control" name="amount{{ $i + 1 }}" value=""></td>
                      <td><input type="text" class="form-control" name="service{{ $i + 1 }}" value=""></td>
                      <td><input type="text" class="form-control" name="staff{{ $i + 1 }}" value=""></td>
                  </tr>
                  @endif
                  @endfor
              </tbody>
          </table>
          </div>
          </div>
          <div class="form-group row">
            <label class="col-md-2">画像変更</label>
              <div class="col-md-10">
                <input type="file" class="form-control-file" name="image">
                <div class="form-text text-info">
                  設定中: {{ $list_heds_form->image_path }}
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                  </label>
                </div>
              </div>
          </div>

            <div class="form-group row">
              <div class="col-md-10">
                <input type="hidden" name="id" value="{{ $list_heds_form->id }}">
                {{ csrf_field() }}
                <input type="submit" class="btn btn-primary" value="更新">
              </div>
            </div>
            </form>
           </div>
       </div>
   </div>
@endsection
