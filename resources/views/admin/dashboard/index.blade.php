@extends('admin.layouts.main')

@section('title', 'Dashboard')
	
@section('contents')
	<div class="row">
		<div class="col-sm-3">
			<div class="tile-stats tile-green">
				<div class="icon"><i class="entypo-thumbs-up"></i></div>
				<div class="num" data-start="0" data-end="{{ $apmsa }}" data-postfix="" data-duration="1500" data-delay="0">0</div>
				
				<h3>Dokumen Lengkap</h3>
			</div>
			
		</div>
		<div class="col-sm-3">
			<div class="tile-stats tile-green">
				<div class="icon"><i class="entypo-thumbs-up"></i></div>
				<div class="num" data-start="0" data-end="{{ $apmsb }}" data-postfix="" data-duration="1500" data-delay="0">0</div>
				
				<h3>Dokumen Belum Lengkap</h3>
			</div>
			
		</div>
		<div class="col-sm-3">
			<div class="tile-stats tile-green">
				<div class="icon"><i class="entypo-thumbs-up"></i></div>
				<div class="num" data-start="0" data-end="{{ $apmsc }}" data-postfix="" data-duration="1500" data-delay="0">0</div>
				
				<h3>Dokumen Kosong</h3>
			</div>
			
		</div>

		<div class="col-sm-3">
		
			<div class="tile-stats tile-orange">
				<div class="icon"><i class="entypo-folder"></i></div>
				<div class="num" data-start="0" data-end="{{ $jumlah_data }}" data-postfix="" data-duration="1500" data-delay="600">0</div>
				
				<h3>Jumlah Dokumen</h3>
			</div>
			
		</div>
	</div>
	<div class="row">
		<div class="col-sm-3">
			<div class="tile-stats tile-red">
				<div class="icon"><i class="entypo-thumbs-up"></i></div>
				<div class="num" data-start="0" data-end="{{ $kepemimpinan }}" data-postfix="" data-duration="1500" data-delay="0">0</div>
				
				<h3>of {{ $jumkepemimpinan }} LEADERSHIP</h3>
			</div>
			
		</div>
		<div class="col-sm-3">
			<div class="tile-stats tile-red">
				<div class="icon"><i class="entypo-thumbs-up"></i></div>
				<div class="num" data-start="0" data-end="{{ $cusfo }}" data-postfix="" data-duration="1500" data-delay="0">0</div>
				
				<h3>of {{ $jumcusfo }} CUSTOMER FOCUS</h3>
			</div>
			
		</div>
		<div class="col-sm-3">
			<div class="tile-stats tile-red">
				<div class="icon"><i class="entypo-thumbs-up"></i></div>
				<div class="num" data-start="0" data-end="{{ $proman }}" data-postfix="" data-duration="1500" data-delay="0">0</div>
				
				<h3>of {{ $jumproman }} PROSES MANAGEMENT</h3>
			</div>
			
		</div>


		<div class="col-sm-3">
		
			<div class="tile-stats tile-red">
				<div class="icon"><i class="entypo-folder"></i></div>
				<div class="num" data-start="0" data-end="{{ $strapla }}" data-postfix="" data-duration="1500" data-delay="600">0</div>
				
				<h3>of {{ $jumstrapla }} STRATEGIC PLANNING</h3>
			</div>
			
		</div>
	</div>
	<div class="row">
		<div class="col-sm-3">
			<div class="tile-stats tile-red">
				<div class="icon"><i class="entypo-thumbs-up"></i></div>
				<div class="num" data-start="0" data-end="{{ $resman }}" data-postfix="" data-duration="1500" data-delay="0">0</div>
				
				<h3>of {{ $jumresman }} RESOURCES MANAGEMENT</h3>
			</div>
			
		</div>
		<div class="col-sm-3">
			<div class="tile-stats tile-red">
				<div class="icon"><i class="entypo-thumbs-up"></i></div>
				<div class="num" data-start="0" data-end="{{ $docsystem }}" data-postfix="" data-duration="1500" data-delay="0">0</div>
				
				<h3>of {{ $jumdocsystem }} DOKUMEN SYSTEM</h3>
			</div>
			
		</div>
		<div class="col-sm-3">
			<div class="tile-stats tile-red">
				<div class="icon"><i class="entypo-thumbs-up"></i></div>
				<div class="num" data-start="0" data-end="{{ $peres }}" data-postfix="" data-duration="1500" data-delay="0">0</div>
				
				<h3>of {{ $jumperes }} PERFORMANCE RESULT</h3>
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
		
			<!-- <div class="tile-stats tile-orange">
				<div class="icon"><i class="entypo-folder"></i></div>
				<div class="num" data-start="0" data-end="{{ $jumlah_data }}" data-postfix="" data-duration="1500" data-delay="600">0</div>
				
				<h3>Jumlah Data</h3>
			</div> -->
			
		</div>
	</div>
@endsection