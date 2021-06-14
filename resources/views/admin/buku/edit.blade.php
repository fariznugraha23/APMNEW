@extends('admin.layouts.main')

@section('title', 'Tambah Buku')
	
@section('contents')
	<ol class="breadcrumb bc-3">
		<li>
			<a href="index.html"><i class="entypo-home"></i>Home</a>
		</li>
		<li class="active">
			<strong>Tambah Buku</strong>
		</li>
	</ol>	<div class="panel panel-primary" data-collapsed="0">
		
			<div class="panel-heading">
				<div class="panel-title">
					Tambah Buku
				</div>
			</div>
			
			<div class="panel-body">
				
				<form action="{{ route('buku_update', ['id' => $eviden->id_apm]) }}" method="post" role="form" class="form-horizontal form-groups-bordered" enctype="multipart/form-data">
					
					{{ csrf_field() }}
					<input type="hidden" name="_method" value="PUT">
	
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Nomor</label>
						
						<div class="col-sm-5">
							<input type="text" name="panduan_eviden" value="{{ $eviden->panduan_eviden }}" class="form-control">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Area</label>
						
						<div class="col-sm-5">
							<select name="id_area" id="id_area" class="form-control">
                                <option value="{{ $eviden->id_area }}">{{ $eviden->area_apm->nama_area }}</option>
                                @foreach ($area as $areas)
                                    <option value="{{$areas->id_area}}">{{ $areas->nama_area}}</option>
                                @endforeach
                            </select>
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Area RB</label>
						
						<div class="col-sm-5">
							<input type="text" name="area_rb" value="{{ $eviden->area_rb }}" class="form-control">
						</div>
					</div>
					
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Penilaian</label>
						
						<div class="col-sm-5">
							<input type="text" name="penilaian" value="{{ $eviden->penilaian }}" class="form-control">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">A</label>
						
						<div class="col-sm-5">
							<input type="text" name="a" value="{{ $eviden->a }}" class="form-control">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">B</label>
						
						<div class="col-sm-5">
							<input type="text" name="b" value="{{ $eviden->b }}" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">C</label>
						
						<div class="col-sm-5">
							<input type="text" name="c" value="{{ $eviden->c }}" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Nilai</label>
						
						<div class="col-sm-5">
						<select name="nilai" id="nilai" class="form-control" >
                                <option value="{{ $eviden->nilai }}">{{ $eviden->nilai }}</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>   
                            </select>
						</div>
					</div>		
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Kriteria</label>
						
						<div class="col-sm-5">
						<select name="id_kriteria" id="id_kriteria" class="form-control">
                                <option value="{{ $eviden->id_kriteria }}">{{ $eviden->kriteria_apm->nama_kriteria }}</option>
                                @foreach ($kriteria as $kriterias)
                                    <option value="{{$kriterias->id_kriteria}}">{{ $kriterias->nama_kriteria}}</option>
                                @endforeach
                            </select>
						</div>
					</div>	
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Bobot</label>
						
						<div class="col-sm-5">
							<input type="text" name="bobot" value="{{ $eviden->bobot }}" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Skor</label>
						
						<div class="col-sm-5">
							<input type="text" name="skor" value="{{ $eviden->skor }}" class="form-control">
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