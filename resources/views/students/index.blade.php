@extends('layout.main')

@section('title', 'Daftar Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Daftar Mahasiswa</h1>

            <ul class="list-group">
                @foreach ($students as $sd)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $sd->nama }}
                    <a href="" class="badge badge-info">Detail</a>
                </li>
                @endforeach
            </ul>

        </div>
    </div>
</div>
@endsection