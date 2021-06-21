@extends('admin.layouts.main')

@section('title', 'Tambah Dokumen')
	
@section('contents')
	<ol class="breadcrumb bc-3">
		<li>
			<a href="index.html"><i class="entypo-home"></i>Home</a>
		</li>
		<li class="active">
			<strong>Tambah Dokumen</strong>
		</li>
	</ol>	<div class="panel panel-primary" data-collapsed="0">
		
			<div class="panel-heading">
				<div class="panel-title">
					Tambah Dokumen
				</div>
			</div>
			
			<div class="panel-body">
				
				<form action="{{ route('member_store') }}" method="post" role="form" class="form-horizontal form-groups-bordered" enctype="multipart/form-data">
					{{ csrf_field() }}
	
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Area</label>
						
						<div class="col-sm-5">
                            <select name="id_area" id="id_area" class="form-control">
                                <option value=""></option>
                                @foreach ($area as $areas)
                                    <option value="{{$areas->id_area}}">{{ $areas->nama_area}}</option>
                                @endforeach
                            </select>
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Area RB</label>
						
						<div class="col-sm-5">
							<input type="number" name="area_rb" class="form-control">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Penilaian</label>
						
						<div class="col-sm-5">
                        <input type="text" name="penilaian"  class="form-control">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">A</label>
						
						<div class="col-sm-5">
							<input type="text" name="a" class="form-control">
						</div>
					</div>
                    <div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">B</label>
						
						<div class="col-sm-5">
							<input type="text" name="b" class="form-control">
						</div>
					</div>
                    <div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">C</label>
						
						<div class="col-sm-5">
							<input type="text" name="c" class="form-control">
						</div>
					</div>
                    <div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Nilai</label>
						
						<div class="col-sm-5">
                            <select name="nilai" id="nilai" class="form-control" >
                                <option value=""></option>
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
                                <option value=""></option>
                                @foreach ($kriteria as $kriterias)
                                    <option value="{{$kriterias->id_kriteria}}">{{ $kriterias->nama_kriteria}}</option>
                                @endforeach
                            </select>
						</div>
					</div>
                    <div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Bobot</label>
						
						<div class="col-sm-5">
							<input type="text" name="number" class="form-control">
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