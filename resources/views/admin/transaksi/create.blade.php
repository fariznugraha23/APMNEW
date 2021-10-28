@extends('admin.layouts.main')

@section('title', 'Tambah LHKPN/LHKASN')
	
@section('contents')
	<ol class="breadcrumb bc-3">
		<li>
			<a href="index.html"><i class="entypo-home"></i>Home</a>
		</li>
		<li class="active">
			<strong>Tambah LHKPN/LHKASN</strong>
		</li>
	</ol>	<div class="panel panel-primary" data-collapsed="0">
		
			<div class="panel-heading">
				<div class="panel-title">
					Tambah LHKPN/LHKASN
				</div>
			</div>
			
			<div class="panel-body">
				
				<form action="{{ route('transaksi_store') }}" method="post" role="form" class="form-horizontal form-groups-bordered" enctype="multipart/form-data">
					{{ csrf_field() }}
	

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Nama</label>
						
						<div class="col-sm-5">
							<input type="text" name="nama" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Jabatan</label>
						
						<div class="col-sm-5">
							<select name="jabatan" class="form-control">
								<option value="">-- Pilih Status --</option>
								@foreach ($jabatan as $j)
								<option value="{{ $j->id_jabatan }}">{{ $j->nama_jabatan }}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Link Dokumen</label>
						
						<div class="col-sm-5">
							<input type="text" name="link_dokumen" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Status</label>
						
						<div class="col-sm-5">
							<select name="status" class="form-control">
								<option value="">-- Pilih Status --</option>
								@foreach ($status as $k)
								<option value="{{ $k->code }}">{{ $k->nama_status }}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-primary">Tambah</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	<br />
@endsection