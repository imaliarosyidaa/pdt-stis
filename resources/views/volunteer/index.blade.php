@extends('layouts.volunteer')
@section('content')
    <table>
		<tr>
			<th>user ID</th>
			<th>nim</th>
			<th>devisi</th>
			<th>No Wa</th>
			<th>Link</th>
            <th>Status Pendaftaran</th>
            <th>Created at</th>
            <th>Update at</th>
		</tr>
    @foreach($volunteers as $v)
        <tr>
            <td>{{ $v->user_id }}</td>
            <td>{{ $v->nim}}</td>
            <td>{{ $v->devisi }}</td>    
            <td>{{ $v->no_wa }}</td>
            <td>{{ $v->link }}</td>
            <td>{{ $v->status_pendaftaran }}</td>
            <td>{{ $v->created_at }}</td>
            <td>{{ $v->updated_at }}</td>
        </tr>
    @endforeach
    </table>
    <h3>Tampil Data Satri</h3>
    <a class="btn btn-success" href="{{route('add volunteer')}}"><i class="fa fa-plus"></i> Tambah Santri</a>
@endsection