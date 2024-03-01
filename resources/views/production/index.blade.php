@section('plugins.Datatables', true)
@extends('adminlte::page')

@section('title', "Meikha GIA - $title")


@section('content_header')
<h1>Dashboard - {{$title}}</h1>
@stop

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{$title}}</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="maintable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>POId</th>
                                <th>Pengerjaan</th>
                                <th>Catatan</th>
                                <th>Tanggal & Waktu</th>
                                <th>Di Kerjakan Oleh</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        @php
                        $no = 1;
                        $row = $row->sortBy('datetime');
                        @endphp
                        @foreach($row as $row)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $row->preorder }}</td>
                            <td>{{ $row->taskst }}</td>
                            <td>{{ $row->note }}</td>
                            <td>{{ $row->datetime }}</td>
                            <td>{{ DB::table('users')->where('id',$row->staff)->value('name')}}</td>
                            <td>
                                <a class="btn btn-sm btn-warning" href="{{ route('prod.edit', $row->id) }}">Update
                                    Pengerjaan</a>
                                <a class="btn btn-sm btn-warning"
                                    href="{{ route('prod.show', $row->preorder) }}">Rincian
                                    Produksi</a>
                            </td>
                        </tr>
                        @endforeach
                        <tbody>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>POId</th>
                                <th>Pengerjaan</th>
                                <th>Catatan</th>
                                <th>Tanggal & Waktu</th>
                                <th>Di Kerjakan Oleh</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
</div>
@stop
@section('css')
{{--
<link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop
@section('js')
<script>
    $("#maintable").DataTable({
    "responsive": true,
    "autoWidth": false,
  });
</script>
<script src="http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer></script>
@stop