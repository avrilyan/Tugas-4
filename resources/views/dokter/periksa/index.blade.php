@extends('adminlte::page')

@section('title', 'Periksa')

@section('content_header')
    <h1>Memeriksa</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-header bg-primary text-white">
            Daftar Periksa Pasien
        </div>
        <div class="card-body">
            <a href="{{ route('periksa.create') }}" class="btn btn-success mb-3">+ Tambah Pasien</a>
            <table class="table caption-top">
                <caption>List of users</caption>
                <thead class="bg-primary text-white">
                    <tr>
                        <th scope="col">NO.</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Teguh Cilik</td>
                        <td>
                            <a href="{{ route('periksa.edit', 1) }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Budi Speed</td>
                        <td>
                            <a href="{{ route('periksa.edit', 2) }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Sugeng Tumbler</td>
                        <td>
                            <a href="{{ route('periksa.edit', 3) }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection