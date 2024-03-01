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
                    <form method="post" action="{{ route('preorder.postcreate3') }}" enctype="multipart/form-data">
                        <div class="form-group flex-center">
                            <table class="table" width="auto" cellspacing="0">
                                <tr>
                                    <td>Nama : </td>
                                    <td>{{ $customer->name }}</td>
                                </tr>
                                <tr>
                                <tr>
                                    <td>Alamat :</td>
                                    <td>{{ $customer->address }}</td>
                                </tr>
                                <tr>
                                <tr>
                                    <td>Kontak : </td>
                                    <td>{{ $customer->phone }}</td>
                                </tr>
                                <tr>
                                    <td>seri : </td>
                                    <td>{{ $sbdata->type }}</td>
                                </tr>
                                <td>Kain inner</td>
                                <td>{{ $sbdata->finner }}</td>
                                </tr>
                                <td>Kain outer</td>
                                <td>{{ $sbdata->fouter }}</td>
                                </tr>
                                <td>Pola</td>
                                <td>{{ $sbdata->pattern }}</td>
                                </tr>
                                <td>Berat Isian</td>
                                <td>{{ $sbdata->fillw }}</td>
                                </tr>
                                <td>Ukuran</td>
                                <td>{{ $sbdata->size }}</td>
                                </tr>
                                <td>Catatan</td>
                                <td>{{ $sbdata->note }}</td>
                                </tr>

                            </table>
                        </div>
                        <div>
                            <center>
                                <button type="Next" class="btn btn-primary">Lanjutkan</button>
                                {{-- <button type="reset" class="btn btn-warning">Reset</button> --}}
                                {{-- <button type="button" class="btn btn-danger"
                                    onclick="window.location.href='{{route('customer.index')}}'">Back</button> --}}
                                <a type="button" href="{{ route('preorder.create2') }}"
                                    class="btn btn-warning">Kembali</a>
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