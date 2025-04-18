@extends('layouts.app')
@section('title', 'Dashboard Pasien')
@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Dashboard Pasien</h3>
  </div>
  <div class="card-body">
    <p>Selamat datang, {{ session('user')->name ?? 'Pasien' }}!</p>
    <p>Silakan memilih menu di samping kiri untuk memulai.</p>
  </div>
</div>
@endsection
