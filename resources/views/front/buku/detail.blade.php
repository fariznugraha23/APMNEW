@extends('front.layouts.main')

@section('title', 'Detail')
	
@section('contents')
	<!-- Breadcrumb -->
	<section class="breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1>Detail Eviden</h1>
					<ol class="breadcrumb bc-3">
						<li>
							<a href="{{ route('home') }}"><i class="entypo-home"></i>Home</a>
						</li>
						<li class="active">
							<strong>{{ $apms->area_apm->nama_area }}</strong>
						</li>
					</ol>			
				</div>
			</div>
		</div>
	</section>


	<!-- About Us Text -->
	<section class="content-section">
		<div class="container">
			
			<div class="row">
			@if(Auth::check())
			<!-- <div class="col-sm-2"></div>
			<div class="col-sm-8"> -->
			<h3>{{ $apms->area_apm->nama_area }}</h3>
					<br />
					<table class="table">
						<tr>
							<td style="font-weight: bold;">Area RB</td>
							<td>{{ $apms->area_rb }}</td>
						</tr>
						<tr>
							<td style="font-weight: bold;">Penilaian</td>
							<td>{{ $apms->penilaian }}</td>
						</tr>
						<tr>
							<td style="font-weight: bold;">A</td>
							<td>{{ $apms->a }}</td>
						</tr>
						<tr>
							<td style="font-weight: bold;">B</td>
							<td>{{ $apms->b }}</td>
						</tr>
						<tr>
							<td style="font-weight: bold;">C</td>
							<td>{{ $apms->c }}</td>
						</tr>
						<tr>
							<td style="font-weight: bold;">Nilai</td>
							<td>{{ $apms->nilai }}</td>
						</tr>
						<tr>
							<td style="font-weight: bold;">Kriteria</td>
							<td>{{ $apms->kriteria_apm->nama_kriteria }}</td>
						</tr>
						<tr>
							<td style="font-weight: bold;">Bobot</td>
							<td>{{ $apms->bobot }}</td>
						</tr>
						<tr>
							<td style="font-weight: bold;">Skor</td>
							<td>{{ $apms->skor }}</td>
						</tr>
					</table>
					
					<hr style="border: 3px solid black;border-radius: 5px;">
					<br>
					<!-- </div>
			<div class="col-sm-2"></div> -->
			@endif
			@if(!Auth::check())
				<div class="col-sm-6">
					<h3>{{ $apms->area_apm->nama_area }}</h3>
					<br />
					<table class="table">
						<tr>
							<td style="font-weight: bold;">Area RB</td>
							<td>{{ $apms->area_rb }}</td>
						</tr>
						<tr>
							<td style="font-weight: bold;">Penilaian</td>
							<td>{{ $apms->penilaian }}</td>
						</tr>
						<tr>
							<td style="font-weight: bold;">A</td>
							<td>{{ $apms->a }}</td>
						</tr>
						<tr>
							<td style="font-weight: bold;">B</td>
							<td>{{ $apms->b }}</td>
						</tr>
						<tr>
							<td style="font-weight: bold;">C</td>
							<td>{{ $apms->c }}</td>
						</tr>
						<tr>
							<td style="font-weight: bold;">Nilai</td>
							<td>{{ $apms->nilai }}</td>
						</tr>
						<tr>
							<td style="font-weight: bold;">Kriteria</td>
							<td>{{ $apms->kriteria_apm->nama_kriteria }}</td>
						</tr>
						<tr>
							<td style="font-weight: bold;">Bobot</td>
							<td>{{ $apms->bobot }}</td>
						</tr>
						<tr>
							<td style="font-weight: bold;">Skor</td>
							<td>{{ $apms->skor }}</td>
						</tr>
					</table>

				</div>
				<div class="col-sm-6">
					
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Nomor</th>
								<th scope="col">Title</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
						<?php $no=1;?>
							@forelse($files as $f)
							<tr>
								<td ><?php echo $no; ?></th>
								<td>{{$f->title}}</td>
								<td><a href="{{ route('home_downloadEviden', ['id' => $f->id_file]) }}"><button  class="btn btn-success">Download</button></a></td>	
							</tr>
							<?php $no++;?>
							@empty
								<tr>
                                	<td class="border px-4 py-2 text-center" colspan="3">Tidak ada data</td>
								</tr>
							
							@endforelse
						</tbody>
					</table>	
				</div>
				@endif
			</div>
			
			@if(Auth::check())
			<div class="row">
			<div class="col-sm-5">
					<form class="contact-form" role="form" method="POST" action="{{ route('home_uploadEviden') }}" enctype="multipart/form-data">
					{{ csrf_field() }}
						<div class="form-group">
							<label for="exampleInputText1">Title Eviden</label>
							<input type="hidden" class="form-control" name="id_apm" value="{{$apms->id_apm}}">
							<input type="text" class="form-control" id="exampleInputText1" name="title" placeholder="Title">
						</div>
						<div class="form-group">
							<label for="exampleFile1">File Eviden</label>
							<input type="file" class="form-control" name="pdf" id="exampleFile1" >
						</div>
						<button type="submit" class="btn btn-primary" name="submit">Submit</button>
					</form>
				</div>
				<div class="col-sm-7">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Nomor</th>
								<th scope="col">Title</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
						<?php $no=1;?>
							@forelse($files as $f)
							<tr>
								<td ><?php echo $no; ?></th>
								<td>{{$f->title}}</td>
								<td>
									<a href="{{ route('home_downloadEviden', ['id' => $f->id_file]) }}"><button  class="btn btn-success">Download</button></a>
									<!-- <a href="{{ route('home_downloadEviden', ['id' => $f->id_file]) }}"><button  class="btn btn-warning">Edit</button></a> -->
									<a href="{{ route('home_deleteEviden', ['id' => $f->id_file]) }}"><button  class="btn btn-danger">Delete</button></a>
								</td>	
							</tr>
							<?php $no++;?>
							@empty
								<tr>
                                	<td class="border px-4 py-2 text-center" colspan="3">Tidak ada data</td>
								</tr>
							
							@endforelse
						</tbody>
					</table>
				</div>
				
			</div>
			@endif
		</div>	
	</section>
@endsection