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
			<!-- <table class="table">
                <thead >
                    <tr>
                        <th class="px-4 py-2" width="10%">No.</th>
                        <th class="px-4 py-2" width="55%">Nama Area</th>
                        <th class="px-4 py-2" width="35%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($apms as $row)
                        <tr>
                        	<td class="border px-4 py-2"> {{ $row->id_area }}</td>
                            <td class="border px-4 py-2">{{ $row->nama_area }}</td>
                            <td class="border px-4 py-2">
                               
                                    <button wire:click="edit({{ $row->id_area }})" class="btn btn-warning">Edit</button>
                                    <button wire:click="delete({{ $row->id_area }})" class="btn btn-secondary">Hapus</button>
                              
                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table> -->
			<table class="table">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-2 w-20">Area</th>
                            <th class="w-10">Area RB</th>
                            <th class="px-4 py-2 w-60">Penilaian</th>
                            <th class="px-4 py-2 w-60">A</th>
                            <th class="px-4 py-2 w-60">B</th>
                            <th class="px-4 py-2 w-20">C</th>
                            <th class="w-10">Nilai</th>
                            <th class="px-4 py-2 w-20">Kriteria</th>
                            <th class="w-10">Bobot</th>
                            <th class="w-10">Skor</th>
                            <!-- <th class="px-4 py-2 w-20">Panduan Eviden</th>
                            <th class="px-4 py-2 w-20">Catatan Eviden</th> -->
							
                            <th class="px-4 py-2 w-20">Action</th>
							
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($apms as $row)
                            <tr>
                                <td class="border px-4 py-2">{{ $row->area_apm->nama_area }}</td>
                                <td class="border px-4 py-2">{{ $row->area_rb }}</td>
                                <td class="border px-4 py-2">{{ $row->penilaian }}</td>
                                <td class="border px-4 py-2">{{ $row->a }}</td>
                                <td class="border px-4 py-2">{{ $row->b }}</td>
                                <td class="border px-4 py-2">{{ $row->c }}</td>
                                <td class="border px-4 py-2" style="text-transform: uppercase;">{{ $row->nilai }}</td>
                                <td class="border px-4 py-2">{{ $row->kriteria_apm->nama_kriteria }}</td>
                                <td class="border px-4 py-2">{{ $row->bobot }}</td>
                                <td class="border px-4 py-2">{{ $row->skor }}</td>
                                <!-- <td class="border px-4 py-2">{{ $row->panduan_eviden }}</td>
                                <td class="border px-4 py-2">{{ $row->catatan_eviden }}</td> -->
								
                                <td class="border px-4 py-2">                           
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
		</div>
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