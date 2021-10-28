@extends('admin.layouts.main')

@section('title', 'Edit LHKPN/LHKASN')
	
@section('contents')
	<ol class="breadcrumb bc-3">
		<li>
			<a href="index.html"><i class="entypo-home"></i>Home</a>
		</li>
		<li class="active">
			<strong>Edit LHKPN/LHKASN</strong>
		</li>
	</ol>	<div class="panel panel-primary" data-collapsed="0">
		
			<div class="panel-heading">
				<div class="panel-title">
				Edit LHKPN/LHKASN
				</div>
			</div>
			
			<div class="panel-body">
				
				<form action="{{ route('transaksi_update', ['id' => $lhk->id]) }}" method="post" role="form" class="form-horizontal form-groups-bordered" enctype="multipart/form-data">
					
					{{ csrf_field() }}
					<input type="hidden" name="_method" value="PUT">
	
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Nama</label>
						
						<div class="col-sm-5">
							<input type="text" name="nama" value="{{ $lhk->nama }}" class="form-control">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Jabatan</label>
						
						<div class="col-sm-5">
							<select name="jabatan" id="jabatan" class="form-control">
                                <option value="{{ $lhk->jabatan }}">{{ $lhk->jabatan_lhkpnlhkasn->nama_jabatan }}</option>
                                @foreach ($jabatan as $j)
                                    <option value="{{$j->id_jabatan}}">{{ $j->nama_jabatan}}</option>
                                @endforeach
                            </select>
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Link Dokumen</label>
						
						<div class="col-sm-5">
							<input type="text" name="link_dokumen" value="{{ $lhk->link_dokumen }}" class="form-control">
						</div>
					</div>
			
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Status</label>
						
						<div class="col-sm-5">
						<select name="status" id="status" class="form-control">
                                <option value="{{ $lhk->id }}">{{ $lhk->status_lhkpnlhkasn->nama_status }}</option>
                                @foreach ($status as $s)
                                    <option value="{{$s->code}}">{{ $s->nama_status}}</option>
                                @endforeach
                            </select>
						</div>
					</div>	
				
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-success">Update Data</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	<br />
@endsection