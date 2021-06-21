@extends('admin.layouts.main')

@section('title', 'Kategori APM')
	
@section('contents')
	<ol class="breadcrumb bc-3">
		<li>
			<a href="index.html"><i class="entypo-home"></i>Home</a>
		</li>
		<li class="active">
			<strong>Dokumen APM</strong>
		</li>
	</ol>
			
	<h2>Dokumen APM</h2>

	<br />
	<div class="row">
		<div class="col-md-8">
            <!-- <button data-toggle="modal" data-target="#modal-delete" class="btn btn-primary">Tambah Data</button> -->
			<a href="{{ route('kategori_create') }}" class="btn btn-primary">Tambah Data</a> 
		</div>
		<div class="col-md-4">
			<form class="form-inline" method="get">
				<input class="form-control" name="search" type="text" placeholder="Search" aria-label="Search">
				<button class="btn btn-primary btn-rounded btn-sm" type="submit">Search</button>
			</form>
		</div>
	</div>
		
	<br>
	<br>
	<div >
		<table class="table table-bordered datatable" id="table-1">
			<thead>
				<tr >
					<th><center>Nomor</center></th>
					<th><center>Area</center></th>
					<th><center>Area RB</center></th>
					<th><center>Penilaian</center></th>
					<th><center>A</center></th>
					<th><center>B</center></th>
					<th><center>C</center></th>
					<th><center>Nilai</center></th>
					<th><center>Kriteria</center></th>
					<th><center>Bobot</center></th>
					<th><center>Skor</center></th>
					<!-- <th class="px-4 py-2 w-20">Panduan Eviden</th>
					<th class="px-4 py-2 w-20">Catatan Eviden</th> -->
					
					<th><center>Action</center></th>
					
				</tr>
			</thead>
			<tbody>
				@foreach($apms as $row)
					<tr>
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
						<!-- <td  >{{ $row->panduan_eviden }}</td>
						<td  >{{ $row->catatan_eviden }}</td> -->
						
						<td  >                           
							<center>
								<a href="{{ route('home_detaileviden', ['id' => $row->slug]) }}"><button  class="btn btn-success">Eviden</button></a><br>
								@if(Auth::check())
									<a href="{{ route('home_editApm', ['id' => $row->slug]) }}"><button  class="btn btn-warning">Edit</button></a>
								@endif	
							</center>                               
						</td>	
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>

	<div class="row">	
		<div class="col-md-12">
			<div class="text-center">
				<ul class="pagination">
				{{ $apms->links() }}
				</ul>						
			</div>
		</div>
	</div>

@endsection

<!-- @section('modal')
	<div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-sm" role="document">
			<form action="{{ route('kategori_delete') }}" method="post">

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
    
    <div class="modal fade" id="modal-post" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-sm" role="document">
                <form action="{{ route('kategori_store') }}" method="post">
    
                    {{ csrf_field() }}
    
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Tambah Kategori</h4>
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
    </div>
@endsection

@section('registerscript')
	<script>
		$('#modal-delete').on('show.bs.modal', function (e) {
			var id = $(e.relatedTarget).data('id');
			$(this).find('input[name="id"]').val(id);
		});
	</script>
@endsection -->