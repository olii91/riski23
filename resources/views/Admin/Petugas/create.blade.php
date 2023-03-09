@extends('layouts.admin')

@section('title', 'Detail Pengaduan')

@section('css')
    <style>
        .text-primary:hover {
            text-decoration: underline;
        }

        .text-grey {
            color: #6c757d;
        }

        .text-grey:hover {
            color: #6c757d;
        }

        .btn-purple {
            background: #6a70fc;
            border: 1px solid #6a70fc;
            color: #fff;
            width: 100%;
        }
    </style>
@endsection

@section('header')
    <a href="{{ route('pengaduan.index') }}" class="text-primary">Data Pengaduan</a>
    <a href="#" class="text-grey"></a>
    <a href="#" class="text-grey">Detail Pengaduan</a>
@endsection