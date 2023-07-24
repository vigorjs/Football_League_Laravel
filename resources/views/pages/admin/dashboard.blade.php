@extends('layouts.admin')

@section('title', 'Dashboard')

@push('after-script')
    @if ($message = Session::get('login'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil Login',
            text: 'Fitur Admin ini hanya untuk belajar integrasi dengan template adminlte saja',
        })
    </script>
    @endif
    @if ($message = Session::get('register'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil Daftar',
            text: 'Fitur Admin ini hanya untuk belajar integrasi dengan template adminlte saja',
        })
    </script>
    @endif
@endpush
