@extends('front.layouts.main')

@section('title', 'Home')
	
@section('contents')
	<!-- Main Slider
	<section class="slider-container" style="background-image: url({{ asset('assets') }}/front/images/slide-img-1-bg.png);">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="slides">
						Slide 1
						<div class="slide">
						
							<div class="slide-content">
								<p>
									Buku adalah sahabat paling setia, rela mendampingi sepanjang waktu dan di manapun aku berada tanpa pernah memikirkan dirinya
								</p>
								<p>- Abdurrahman Faiz</p>
							</div>
							
							<div class="slide-image">
								
								<a href="#">
									<img src="{{ asset('assets') }}/front/images/shutterstock_85475239-1.jpg" class="img-responsive" />
								</a>
							</div>
							
						</div>
						
						Slide 2
						<div class="slide" data-bg="{{ asset('assets') }}/front/images/slide-img-1-bg.png">
							
							<div class="slide-image">
								
								<a href="#">
									<img src="{{ asset('assets') }}/front/images/BERITA-B_004-IMG_0116-Copy-.jpg" class="img-responsive" />
								</a>
							</div>
						
							<div class="slide-content text-right">								
								<p>
									Buku itu seperti cermin, kalau yang berkaca padanya adalah seorang yang bodoh, engkau tak bisa berharap yang terpantul adalah seorang yang jenius.
								</p>
								<p>- JK. Rowling</p>
								
							</div>
							
						</div>
						
						Slide 3
						<div class="slide">
						
							<div class="slide-content">
								<p>
									Membaca untuk mendapatkan segalanya.
								</p>
								<p>
									- KopiahPutih
								</p>
							</div>
							
							<div class="slide-image">
								
								<a href="#">
									<img src="{{ asset('assets') }}/front/images/perpus.jpg" class="img-responsive" />
								</a>
							</div>
							
						</div>
						
						Slider navigation
						<div class="slides-nextprev-nav">
							<a href="#" class="prev">
								<i class="entypo-left-open-mini"></i>
							</a>
							<a href="#" class="next">
								<i class="entypo-right-open-mini"></i>
							</a>
						</div>
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</section> -->
	<!-- Features Blocks -->
	<!-- <section class="features-blocks">
		
		<div class="container">
			<div class="row vspace">"vspace" class is added to distinct this row			
				<div class="col-sm-4">
					
					<div class="feature-block">
						<h3>
							<i class="entypo-clock"></i>
							Tidak dibatasi waktu
						</h3>
						
						<p>
							akses ke perpustakaan digital dapat dilakukan 24 jam dalam sehari, dapat diakses kapan saja, tanpa batas waktu, selama pengguna terhubung dengan internet;
						</p>
					</div>
					
				</div>
				
				<div class="col-sm-4">
					
					<div class="feature-block">
						<h3>
							<i class="entypo-gauge"></i>
							Penggunaan informasi lebih efisien
						</h3>
						
						<p>
							informasi yang ada dapat diakses oleh pengguna secara bersamaan dalam waktu yang sama dengan jumlah orang yang banyak;
						</p>
					</div>
					
				</div>
				
				<div class="col-sm-4">
					
					<div class="feature-block">
						<h3>
							<i class="entypo-rocket"></i>
							Pencarian Lebih Cepat
						</h3>
						
						<p>
							Pengguna cukup memasukkan kata kunci yang berkaitan dengan informasi yang sedang dicari, maka semua buku yang dimuat akan disesuaikan dengan informasi terkait.
						</p>
					</div>
					
				</div>
				
			</div>
			
			Separator		<div class="row">
				<div class="col-md-12">
					<hr />
				</div>
			</div>
			
		</div>
		
	</section> -->
	<!-- Portfolio -->
	<section class="portfolio-container">
		
		<div class="container">	
			<div class="row">
				<form action="{{ url()->current() }}">
					<div class="col-md-4">
						<input type="text" name="keyword" class="form-control" placeholder="Search penilaian...">
						<br>
					</div>
					<div class="col-md-1">
						<button type="submit" class="btn btn-primary">
							Search
						</button>
						<br>
					</div>
					<div class="col-md-7">
						<br>
					</div>
				</form>
				<div >
						<table class="table table-responsive-xl">
							<thead>
								<tr >
									<th><center>Area</center></th>
									<th><center>Area RB</center></th>
									<th><center>Penilaian</center></th>
									<th><center>A</center></th>
									<th><center>B</center></th>
									<th><center>C</center></th>
									<th><center>Nilai</center></th>
									<th><center>Kriteria</center></th>
									<th><center>Bobot</center></th>
									<th><center> Skor</center></th>
									<!-- <th class="px-4 py-2 w-20">Panduan Eviden</th>
									<th class="px-4 py-2 w-20">Catatan Eviden</th> -->
									
									<th><center>Action</center></th>
									
								</tr>
							</thead>
							<tbody>
								@foreach($apms as $row)
									<tr>
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
												<a href="{{ route('home_detaileviden', ['id' => $row->id_apm]) }}"><button  class="btn btn-success">Eviden</button></a><br>
												@if(Auth::check())
													<a href="{{ route('home_editApm', ['id' => $row->id_apm]) }}"><button  class="btn btn-warning">Edit</button></a>
												@endif	
											</center>                               
										</td>	
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				{{ $apms->links() }}

			</div>
		</div>
			<!-- <div class="row" id="portfolio-items">
				@foreach($buku as $b)
					<div class="item col-sm-4 col-xs-6 filter-design">
						
						<div class="portfolio-item">
							<a href="{{ route('home_detailbuku', ['id' => $b->id]) }}" class="image">
								<img src="{{ asset('uploaded/buku') }}/{{ $b->image }}" class="img-rounded" style="width: 300px; height: 350px">
								<span class="hover-zoom"></span>
							</a>
							
							<h4>
								<a href="{{ route('home_detailbuku', ['id' => $b->id]) }}" class="name">{{ $b->judul }}</a>
							</h4>
							
							<div class="categories">
								<a href="{{ route('home_jenis', ['jenis_buku' => $b->jenis]) }}">{{ $b->jenis }}</a>
							</div>
						</div>
					</div>
				@endforeach	
			</div>		 -->
	</section>

	<!-- Testimonails -->
	<!-- <section class="testimonials-container">
		
		<div class="container">
			
			<div class="col-md-12">
				
				<div class="testimonials carousel slide" data-interval="8000">
				
					<div class="carousel-inner">
						
						<div class="item active">
						
							<blockquote>
								<p>
									Dunia adalah sebuah buku, dan mereka yang tidak melakukan perjalanan <br>
									hanya membaca sebuah halaman.
								</p>
								<small>
									<cite>Santo Agustinus</cite>
								</small>
							</blockquote>
							
						</div>
						
						<div class="item">
						
							<blockquote>
								<p>
									Membaca buku-buku yang baik berarti memberi <br>
									makanan rohani yang baik
								</p>
								<small>
									<cite>Buya Hamka</cite>
								</small>
							</blockquote>
							
						</div>
						
						<div class="item">
						
							<blockquote>
								<p>
									Jika kamu membaca buku orang yang orang lain baca, maka kamu <br>
									hanya bisa memikirkan apa yang orang lain pikir. 
								</p>
								<small>
									<cite>Norwegian Wood</cite>
								</small>
							</blockquote>
							
						</div>
					
					</div>
				
				</div>
				
			</div>
			
		</div>
		
	</section> -->
@endsection