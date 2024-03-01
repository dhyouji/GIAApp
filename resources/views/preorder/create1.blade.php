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
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="card-body">
                    <form method="post" action="{{ route('preorder.postcreate1') }}" enctype="multipart/form-data">
                        <div class="form-group flex-center">
                            <table class="table" id="example1" width="100%" cellspacing="0">
                                <tr>
                                    <td>Nama</td>
                                    <td><input type="text" class="form-control" name="in_name"
                                            value="{{ $customer->name ?? '' }}"></td>
                                </tr>
                                <tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td><input type="text" class="form-control" name="in_address"
                                            value="{{ $customer->address ?? '' }}">
                                    </td>
                                </tr>
                                <tr>
                                <tr>
                                    <td>Kontak</td>
                                    <td><input type="text" class="form-control" name="in_phone"
                                            value="{{ $customer->phone ?? '' }}">
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div>
                            <center>
                                <button type="Next" class="btn btn-primary">Lanjutkan</button>
                                {{-- <button type="reset" class="btn btn-warning">Reset</button> --}}
                                {{-- <button type="button" class="btn btn-danger"
                                    onclick="window.location.href='{{route('customer.index')}}'">Back</button> --}}
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