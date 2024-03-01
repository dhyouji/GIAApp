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
                    @php
                    $preordr = \App\Models\Preorder::where(['id' => $row[0]->preorder])->first();
                    $custmr = \App\Models\Customer::where(['id' => $preordr->customer])->first();
                    @endphp
                    Customer : {{ $custmr->name }}
                    @php echo str_repeat('&nbsp', 5) @endphp
                    Tanggal Order : {{ $preordr->datetime }}
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
                <div class="card-body">
                    <div class="card">
                        @foreach ($row as $row)
                        <div class="card-body">
                            {{ Carbon\Carbon::parse($row->datetime)->translatedFormat('l, d-m-Y') }}
                            {{ Carbon\Carbon::parse($row->datetime)->format('h:i') }}
                            <p>
                            <h5 class="card-title">{{ $row->taskst }}</h5>
                            </p>
                            <p class="card-text">catatan : {{ $row->note }}</p>
                        </div>
                        @endforeach
                    </div>

                    <div class="input-group mb-3 justify-content-center">
                        <a class="btn btn-sm btn-warning" href="{{ route('prod.edit', $row->id) }}">Update
                            Pengerjaan</a>
                        <a class="btn btn-danger" href="{{ url('prod') }}">Kembali</a>
                    </div>
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