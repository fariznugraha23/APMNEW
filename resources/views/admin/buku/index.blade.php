@extends('admin.layouts.main')

@section('title', 'List Eviden')
	
@section('contents')
	<ol class="breadcrumb bc-3">
		<li>
			<a href="index.html"><i class="entypo-home"></i>Home</a>
		</li>
		<li class="active">
			<strong>Eviden</strong>
		</li>
	</ol>
			
	<h2>Eviden</h2>

	<br />
	<div class="row">
		<div class="col-md-8">
			<a href="{{ route('buku_create') }}" class="btn btn-primary">Tambah Data</a>
		</div>
		<div class="col-md-4">
			<form class="form-inline" method="get">
				<input class="form-control" name="search" type="text" value="{{ $search }}" placeholder="Search" aria-label="Search">
				<button class="btn btn-primary btn-rounded btn-sm" type="submit">Search</button>
			</form>
		</div>
	</div>
		
	<br>
	<br>
	<table class="table table-bordered datatable" id="table-1">
		<thead>
			<tr>
				<th>Nomor</th>
				<th>Area</th>
				<th>Area RB</th>
				<th>Penilaian</th>
				<th>A</th>
				<th>B</th>
				<th>C</th>
				<th>Nilai</th>
				<th>Kriteria</th>
				<th>Bobot</th>
				<th>Skor</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1; ?>
			@foreach($eviden as $row)
				<tr class="odd gradeX">
				<td >{{ $row->panduan_eviden}}</td>
				<td >{{ $row->area_apm->nama_area }}</td>
				<td ><center>{{ $row->area_rb }}</center></td>
				<td >{{ $row->penilaian }}</td>
				<td >{{ $row->a }}</td>
				<td >{{ $row->b }}</td>
				<td >{{ $row->c }}</td>
				<td style="text-transform: uppercase;"><center>{{ $row->nilai }}</center></td>
				<td >{{ $row->kriteria_apm->nama_kriteria }}</td>
				<td ><center>{{ $row->bobot }}</center></td>
				<td ><center> &nbsp{{ $row->skor }}</center></td>
					<td width="10px">
						<a href="{{ route('buku_edit', ['id' => $row->slug]) }}" class="btn btn-success">Update</a>
					</td>
					<!-- <td width="10px">
						<a href="{{ route('buku_edit', ['id' => $row->id]) }}" class="btn btn-success">Edit</a>
					</td>
					<td width="10px">
						<button class="btn btn-danger" data-toggle="modal" data-target="#modal-delete" data-id="{{ $row->id }}">Delete</button>
						
						{{-- <form action="{{ route('buku_delete') }}" method="post">
							{{ csrf_field() }}

							<input type="hidden" name="id" value="{{ $row->id }}">
							<button type="submit" class="btn btn-danger">Hapus</button>
						</form> --}}
					</td> -->
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="row">
			<div class="col-md-12">
				<div class="text-center">
					<ul class="pagination">
						{{ $eviden->render() }}
					</ul>						
				</div>
			</div>
		</div>
@endsection

@section('modal')
	<div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-sm" role="document">
			<form action="{{ route('buku_delete') }}" method="post">

				{{ csrf_field() }}

				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Hapus data buku</h4>
					</div>
					<div class="modal-body">
						<input type="hidden" name="id">
						Are you sure you want to delete this data?
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
						<button type="submit" class="btn btn-danger">Yes</button>
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection

@section('registerscript')
	<script>
		$('#modal-delete').on('show.bs.modal', function (e) {
			var id = $(e.relatedTarget).data('id');
			$(this).find('input[name="id"]').val(id);
		});
	</script>
@endsection