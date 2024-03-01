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
                    <form class="form-inline">
                        <div class="pull-left">
                            <h2>{{$title}}</h2>
                        </div>
                        <div class="input-group mr-1">
                            <input class="form-control" type="text" name="q" value="{{ $q}}"
                                placeholder="Pencarian..." />
                            <button class="btn btn-success"><i class="bi bi-arrow-clockwise"></i> Refresh</button>
                            <a class="btn btn-primary" href="{{ route('sbfillw.create') }}"><i
                                    class="bi bi-plus-lg"></i> Tambah Berat Isian Sleeping Bag</a>
                        </div>
                    </form>
                </div>

                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <div class="card-body table-responsive">
                    <table class="table table-bordered table-striped table-hover mb-0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Keyword</th>
                                <th>Detail</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <?php $no = 1 ?>
                        @foreach($row as $row)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $row->key }}</td>
                            <td>{{ $row->detail }}</td>
                            <td>{{ $row->status }}</td>
                            <td>
                                <a class="btn btn-sm btn-warning" href="{{ route('sbfillw.edit', $row) }}">Ubah</a>
                                <form method="POST" action="{{ route('sbfillw.destroy', $row) }}"
                                    style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger"
                                        onclick="return confirm('Hapus Data?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
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