@extends('front.layouts.main')

@section('title', 'Edit Data Apm')
	
@section('contents')
	<section class="breadcrumb">	
		<div class="container">
			<div class="row">
				<div class="col-sm-9">
					<h1>Edit Data Apm</h1>	
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
                            <label for="validationCustom01">Area</label>
							<input type="text" name="id_area" class="form-control" value="{{ $apms->id_area }}" placeholder="Area:" />
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
							<input type="text" name="c" class="form-control" value="{{ $apms->c }}" placeholder="C:" />
						</div>
                        <div class="form-group">
                        <label for="validationCustom01">Nilai</label>
							<input type="text" name="nilai" class="form-control" value="{{ $apms->nilai }}" placeholder="Nilai:" />
						</div>
                        <div class="form-group">
                        <label for="validationCustom01">Kriteria</label>
							<input type="text" name="id_kriteria" class="form-control" value="{{ $apms->id_kriteria }}" placeholder="Kriteria:" />
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