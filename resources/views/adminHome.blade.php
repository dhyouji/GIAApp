@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <a href="{{ route('user.index') }}">Manajemen Pengguna</a>
                <a href="{{ route('customer.index') }}">Manajemen Pelanggan</a>
                <a href="{{ route('sbtype.index') }}">Manajemen Tipe Sleeping Bag</a>
                <a href="{{ route('sbpattern.index') }}">Manajemen Pola Sleeping Bag</a>
                <a href="{{ route('sbsize.index') }}">Manajemen Ukuran Sleeping Bag</a>
                <a href="{{ route('sbfillw.index') }}">Manajemen Berat Isian Sleeping Bag</a>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in {{ auth()->user()->name }} with type admin
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection