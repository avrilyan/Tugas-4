@extends('layouts.app')
@section('title', 'Riwayat Pasien')
@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Riwayat Pemeriksaan</h3>
  </div>
  <div class="card-body">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Nama Pasien</th>
          <th>Tanggal</th>
          <th>Keluhan</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Contoh Pasien</td>
          <td>2025-04-10</td>
          <td>Sakit perut dan mual</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection