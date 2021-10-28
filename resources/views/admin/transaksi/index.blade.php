@extends('admin.layouts.main')

@section('title', 'LHKPN & LHKASN')
	
@section('contents')
	<ol class="breadcrumb bc-3">
		<li>
			<a href="#"><i class="entypo-home"></i>Home</a>
		</li>
		<li class="active">
			<strong>LHKPN & LHKASN</strong>
		</li>
	</ol>
			
	<h2>LHKPN & LHKASN</h2>

	<br />
	<a href="{{ route('transaksi_create') }}" class="btn btn-primary">Tambah Data</a>
	<br>
	<br>
	<div id="myDiv">
		<table class="table table-bordered datatable">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Penyelenggara Negara</th>
					<th>Jabatan</th>
					<th>Dokumen</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1; ?>
				@foreach($lhk as $t)
					<tr class="odd gradeX">
						<td>{{ $no++ }}</td>
						<td>{{ $t->nama }}</td>
						<td>{{ $t->jabatan_lhkpnlhkasn->nama_jabatan }}</td>
						<td><a href="{{ $t->link_dokumen }}" target="_blank"><span class="badge badge-pill badge-success">{{ $t->status_lhkpnlhkasn->nama_status }}</span></a></td>
						<td> <a href="{{ route('transaksi_edit', ['id' => $t->id]) }}" ><span class="badge badge-pill badge-info">Edit</span></a> | <a href="{{ route('transaksi_delete', ['id' => $t->id]) }}" ><span class="badge badge-pill badge-danger">Delete</span> </a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection