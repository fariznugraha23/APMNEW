@extends('front.layouts.main')

@section('title', 'Edit Data Apm')
	
@section('contents')

	<section class="breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-sm-7">
					<h1>Data Apm</h1>
					<ol class="breadcrumb bc-3">
						<li>
							<a href="{{ route('home') }}"><i class="entypo-home"></i>Home</a>
						</li>
						<li class="active">
							<strong>Edit Data Apm</strong>
						</li>
					</ol>			
				</div>
			</div>
		</div>
	</section>
	<section class="contact-container">
	
		<div class="container">
			
			<div class="row">
				<div class="col-md-3"></div>
				
				<div class="col-md-6">
					<form class="contact-form" role="form" method="post" action="{{ route('home_editApmStore', ['id' => $apms->id_apm]) }}" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="form-group">
                            <label for="validationCustom01">Nomor</label>
							<input type="text" name="panduan_eviden" class="form-control" value="{{ $apms->panduan_eviden }}" placeholder="Nomor :" />
						</div>
						<div class="form-group">
                            <label for="validationCustom01">Area</label>
							<!-- <input type="text" name="id_area" class="form-control" value="{{ $apms->id_area }}" placeholder="Area:" /> -->
							<select name="id_area" id="id_area" class="form-control">
                                <option value="{{ $apms->id_area }}">{{ $apms->area_apm->nama_area }}</option>
                                @foreach ($area as $areas)
                                    <option value="{{$areas->id_area}}">{{ $areas->nama_area}}</option>
                                @endforeach
                            </select>
						</div>
						
						<div class="form-group">
                            <label for="validationCustom01">Area RB</label>
							<input type="text" name="area_rb" class="form-control" value="{{ $apms->area_rb }}" placeholder="Area RB:" />
						</div>

						<div class="form-group">
                        <label for="validationCustom01">Penilaian</label>
							<input type="text" name="penilaian" class="form-control" value="{{ $apms->penilaian }}" placeholder="Penilaian:" />
						</div>
                        <div class="form-group">
                        <label for="validationCustom01">A</label>
							<input type="text" name="a" class="form-control" value="{{ $apms->a }}" placeholder="A:" />
						</div>
                        <div class="form-group">
                        <label for="validationCustom01">B</label>
							<input type="text" name="b" class="form-control" value="{{ $apms->b }}" placeholder="B:" />
						</div>
                        <div class="form-group">
                        <label for="validationCustom01">C</label>
							<textarea name="c" class="form-control" value="{{ $apms->c }}" placeholder="{{ $apms->c }}" >{{ $apms->c }}</textarea>
						</div>
                        <div class="form-group">
                        <label for="validationCustom01">Nilai</label>
							<!-- <input type="text" name="nilai" class="form-control" value="{{ $apms->nilai }}" placeholder="Nilai:" /> -->
							<select name="nilai" id="nilai" class="form-control" >
                                <option value="{{ $apms->nilai }}">{{ $apms->nilai }}</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>   
                            </select>
						</div>
                        <div class="form-group">
                        <label for="validationCustom01">Kriteria</label>
							<!-- <input type="text" name="id_kriteria" class="form-control" value="{{ $apms->id_kriteria }}" placeholder="Kriteria:" /> -->
							<select name="id_kriteria" id="id_kriteria" class="form-control">
                                <option value="{{ $apms->id_kriteria }}">{{ $apms->kriteria_apm->nama_kriteria }}</option>
                                @foreach ($kriteria as $kriterias)
                                    <option value="{{$kriterias->id_kriteria}}">{{ $kriterias->nama_kriteria}}</option>
                                @endforeach
                            </select>
						</div>
                        <div class="form-group">
                        <label for="validationCustom01">Bobot</label>
							<input type="text" name="bobot" class="form-control" value="{{ $apms->bobot }}" placeholder="Bobot:" />
						</div>
						<!-- <div class="form-group">
							<input type="file" name="image" class="form-control" />
						</div> -->
						
						<div class="form-group text-right">
							<button class="btn btn-primary" name="send">Save</button>
						</div>
						
					</form>
					
				</div>
				<div class="col-md-3"></div>
				
			</div>
			
		</div>
		
	</section>
@endsection