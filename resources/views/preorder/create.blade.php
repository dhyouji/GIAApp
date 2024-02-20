@extends('.layouts.app')
@section('title', 'Add Customer')
@section('content')
<form method="post" action="{{ route('preorder.store') }}" enctype="multipart/form-data">
  <div class="form-group flex-center">
    <table class="table" id="example1" width="100%" cellspacing="0">
      <tr>
        <td>Seri</td>
        <td><select name="in_series">
        @php
          $data_srs = DB::table('sbtypes')->orderBy('key','desc')->get();
        @endphp
          @foreach ($data_srs as $row)
          <option value="{{$row->key}}">{{$row->detail}}</option>
          @endforeach
        </select>
        </td>
      </tr>
      <tr>
        <td>Kain Inner</td><td><input type="text" class="form-control" name="in_inner"></td>
      </tr>
      <tr>
        <td>Kain Outer</td><td><input type="text" class="form-control" name="in_outer"></td>
      </tr>
      <tr>
        <td>Pola</td>
        <td><select name="in_pattern">
        @php
          $data_ptrn = DB::table('sbpatterns')->orderBy('key','desc')->get();
        @endphp
          @foreach ($data_ptrn as $row)
          <option value="{{$row->key}}">{{$row->detail}}</option>
          @endforeach
        </select>
        </td>
      </tr>
      <tr>
        <td>Berat Isian</td>
        <td><select name="in_fill">
        @php
          $data_fl = DB::table('sbfillws')->orderBy('key','desc')->get();
        @endphp
          @foreach ($data_fl as $row)
          <option value="{{$row->key}}">{{$row->detail}}</option>
          @endforeach
        </select>
        </td>
      </tr>
      <tr>
        <td>Ukuran</td>
        <td><select name="in_size">
        @php
          $data_sz = DB::table('sbsizes')->orderBy('key','desc')->get();
        @endphp
          @foreach ($data_sz as $row)
          <option value="{{$row->key}}">{{$row->detail}}</option>
          @endforeach
        </select>
        </td>
      </tr>
      <tr>
        <td>Note</td><td><input type="text" class="form-control" name="in_note"></td>
      </tr>
    </table>
  </div>
  <div>
    <center>
      <button type="submit" class="btn btn-primary">Submit</button>
      <button type="reset" class="btn btn-warning">Reset</button>
      <button type="button"class="btn btn-danger" onclick="window.location.href='{{route('preorder.index')}}'">Back</button>
    </center>
  </div>
  @csrf
</form>
@endsection