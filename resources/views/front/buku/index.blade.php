@extends('front.layouts.main')

@section('title', 'Katalog Buku')
	
@section('contents')
	<section class="breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-sm-7">
					<h1>Area APM</h1>
					<ol class="breadcrumb bc-3">
						<li>
							<a href="{{ route('home') }}"><i class="entypo-home"></i>Home</a>
						</li>
						<li class="active">
							<strong>Area APM</strong>
						</li>
					</ol>			
				</div>
			</div>
		</div>
	</section>


	<!-- <section class="portfolio-container">
		<div class="container">
			@if(Auth::check())
				<?php
					$check = DB::table('transaksi')->where('id_user', Auth::user()->id)->where('tgl_kembali', 'Masih dipinjam')->count();
				 ?>
				@if($check == 5 ) 
					<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert">
							<span aria-hidden="true">&times;</span>
							<span class="sr-only">Close</span>
						</button>
						Anda telah meminjam buku melebihi batas yang telah ditentukan, untuk meminjam buku kembali anda harus mengembalikan buku yang telah dipinjam sebelumnya
					</div>
				@endif
			@endif
			<form action="{{ route('home_pencarian') }}" method="get">
				{{ csrf_field() }}
				<div class="col-md-10">
		 			<input type="text" name="keyword" class="form-control" placeholder="Cari buku...">
				</div>
				<div class="col-md-2">
					<button type="submit" class="btn btn-primary">Cari</button>
				</div>
			</form>

			
			<div class="row" id="portfolio-items">
				@forelse($buku as $b)
				<div class="item col-sm-4 col-xs-6 filter-design">
					<div class="portfolio-item">
						<a href="{{ route('home_detailbuku', ['id' => $b->id]) }}" class="image">
							<img src="{{ asset('uploaded/buku') }}/{{ $b->image }}" style="width: 300px; height: 350px" class="img-rounded" />
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
				@empty
					<p>Tidak ada buku yg terinput</p>
				@endforelse
			</div>
			
			<div class="row">
			
				<div class="col-md-12">
				
					<div class="text-center">
					
						<ul class="pagination">
							{{ $buku->render() }}
						</ul>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</section> -->
@endsection