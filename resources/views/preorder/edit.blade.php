@section('plugins.Datatables', true)

@extends('adminlte::page')

@section('title', "Meikha GIA - $title")

@section('content_header')
<p />
@stop

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">{{$title}}</h3>
        </div>
        <div class="card-body">
          <form method="post" action="{{ route('preorder.store') }}" enctype="multipart/form-data">
            <div class="form-group flex-center">
              <table class="table" id="example1" width="100%" cellspacing="0">
                <tr>
                  <td>Seri</td>
                  <td><select name="in_series">
                      @php
                      $data_srs = DB::table('series')->orderBy('key_series','desc')->get();
                      @endphp
                      @foreach ($data_srs as $row)
                      <option value="{{$row->key_series}}" @if($row->key_series == $data->series) {{"
                        selected"}}@endif>{{$row->name}}</option>
                      @endforeach
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>Kain Inner</td>
                  <td><input type="text" class="form-control" name="in_inner" value="{{$data->inner}}"></td>
                </tr>
                <tr>
                  <td>Kain Outer</td>
                  <td><input type="text" class="form-control" name="in_outer" value="{{$data->inner}}"></td>
                </tr>
                <tr>
                  <td>Pola</td>
                  <td><select name="in_pattern">
                      @php
                      $data_ptrn = DB::table('patterns')->orderBy('key_pattern','desc')->get();
                      @endphp
                      @foreach ($data_ptrn as $row)
                      <option value="{{$row->key_pattern}}" @if($row->key_pattern == $data->pattern) {{"
                        selected"}}@endif>{{$row->name}}</option>
                      @endforeach
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>Berat Isian</td>
                  <td><select name="in_fill">
                      @php
                      $data_fl = DB::table('fills')->orderBy('key_fill','desc')->get();
                      @endphp
                      @foreach ($data_fl as $row)
                      <option value="{{$row->key_fill}}" @if($row->key_fill == $data->fill_weight) {{"
                        selected"}}@endif>{{$row->name}}</option>
                      @endforeach
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>Ukuran</td>
                  <td><select name="in_size">
                      @php
                      $data_sz = DB::table('sizes')->orderBy('key_size','desc')->get();
                      @endphp
                      @foreach ($data_sz as $row)<option value="{{$row->key_size}}" @if($row->key_size == $data->size)
                        {{" selected"}}@endif>{{$row->name}}</option>
                      @endforeach
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>Note</td>
                  <td><input type="text" class="form-control" name="in_note" value="{{$data->note}}"></td>
                </tr>
              </table>
            </div>
            <div>
              <center>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-warning">Reset</button>
                <button type="button" class="btn btn-danger"
                  onclick="window.location.href='{{route('preorder.index')}}'">Back</button>
              </center>
            </div>
            @csrf
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@stop

@section('css')
{{--
<link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
<script>
  console.log('Hi!'); 
</script>

@stop