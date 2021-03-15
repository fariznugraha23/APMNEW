@extends('admin.layouts.main')

@section('title', 'Dashboard')
	
@section('contents')
	<div class="row">
		<div class="col-sm-3">
			<div class="tile-stats tile-green">
				<div class="icon"><i class="entypo-thumbs-up"></i></div>
				<div class="num" data-start="0" data-end="{{ $apmsa }}" data-postfix="" data-duration="1500" data-delay="0">0</div>
				
				<h3>Jumlah Nilai A</h3>
			</div>
			
		</div>
		<div class="col-sm-3">
			<div class="tile-stats tile-green">
				<div class="icon"><i class="entypo-thumbs-up"></i></div>
				<div class="num" data-start="0" data-end="{{ $apmsb }}" data-postfix="" data-duration="1500" data-delay="0">0</div>
				
				<h3>Jumlah Nilai B</h3>
			</div>
			
		</div>
		<div class="col-sm-3">
			<div class="tile-stats tile-green">
				<div class="icon"><i class="entypo-thumbs-up"></i></div>
				<div class="num" data-start="0" data-end="{{ $apmsc }}" data-postfix="" data-duration="1500" data-delay="0">0</div>
				
				<h3>Jumlah Nilai C</h3>
			</div>
			
		</div>
		<!-- <div class="col-sm-3">
			<div class="tile-stats tile-green">
				<div class="icon"><i class="entypo-thumbs-up"></i></div>
				<div class="num" data-start="0" data-end="{{ $skor }}" data-postfix="" data-duration="1500" data-delay="0">0</div>
				
				<h3>Jumlah Skor</h3>
			</div>
			
		</div> -->
		<!-- <div class="col-sm-3">
			<div class="tile-stats tile-green">
				<div class="icon"><i class="entypo-thumbs-up"></i></div>
				<div class="num" data-start="0" data-end="" data-postfix="" data-duration="1500" data-delay="0">0</div>
				
				<h3>Jumlah Bobot</h3>
			</div>
			
		</div> -->

		<div class="col-sm-3">
		
			<div class="tile-stats tile-orange">
				<div class="icon"><i class="entypo-folder"></i></div>
				<div class="num" data-start="0" data-end="{{ $jumlah_data }}" data-postfix="" data-duration="1500" data-delay="600">0</div>
				
				<h3>Jumlah Data</h3>
			</div>
			
		</div>
	</div>
@endsection