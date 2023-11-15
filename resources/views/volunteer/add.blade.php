@extends('layouts.volunteer')

@section('content')
<h3>Form Input Volunteer</h3>
<form method="post" action="{{route('add volunteer')}}">
  @csrf
  <div class="form-group">
    <label>User ID</label>
    <input type="text" name="user_id" class="form-control" placeholder="Nama Santri" required="">
  </div>
  <div class="form-group">
    <label>NIM</label>
    <input type="text" name="nim" class="form-control" placeholder="Tempat Lahir" required="">
  </div>
  <div class="form-group">
    <label>Devisi</label>
    <input type="text" name="devisi" class="form-control" placeholder="Tanggal Lahir" required="">
  </div>
  <div class="form-group">
    <label>No WA</label>
    <input type="text" name="no_wa" class="form-control" placeholder="Tanggal Lahir" required="">
  </div>
  <div class="form-group">
    <label>Link</label>
    <input type="text" name="link" class="form-control" placeholder="No. Hp" required="">
  </div>
  <div class="form-group">
    <label>Status Pendaftaran</label>
    <input type="text" name="status_pendaftaran" class="form-control" placeholder="No. Hp" required="">
  </div>
  <div class="form-group text-right">
    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan Data</button>
  </div>
</form>
@endsection