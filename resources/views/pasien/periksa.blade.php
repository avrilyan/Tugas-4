@extends('layouts.app')
@section('title', 'Periksa Pasien')
@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Form Pemeriksaan</h3>
  </div>
  <div class="card-body">
    <form>
      <div class="form-group">
        <label>Nama Pasien</label>
        <input type="text" class="form-control" placeholder="Nama Pasien">
      </div>
      <div class="form-group">
        <label>Keluhan</label>
        <textarea class="form-control" rows="3" placeholder="Tuliskan keluhan"></textarea>
      </div>
      <div class="form-group">
        <label>Tanggal Periksa</label>
        <input type="date" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
  </div>
</div>
@endsection