@extends('layouts.admin')

	@section('content')

		<!--<div class="review-content">
			<div class="top-header span_top">
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" alt="" /></a>
					<p>Movie Theater</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="reviews-section">
				<h3 class="head">Movie Reviews</h3>
					<div class="col-md-9 reviews-grids">-->

					@foreach($reports as $reporte)

							<div class="review">
								<div class="movie-pic">
									<img src="compus/{{$reporte->path}}" alt="" style="width: 200px"/>
								</div>
								<div class="review-info">
									<a class="span" href="single.html"> 
									<i>{{$reporte->marca}}</i></a>
									<p class="info">Marca:&nbsp;&nbsp;{{$reporte->monitor}}</p>
									<p class="info">Monitor:&nbsp;&nbsp;{{$reporte->mouse}}</p>
									<p class="info">Teclado:&nbsp;&nbsp;{{$reporte->teclado}}</p>
									<p class="info">Sala:&nbsp;&nbsp;{{$reporte->salas_id}}</p>
								</div>
								<div class="clearfix"></div>
							</div>
						@endforeach
						

						

					<!--</div>


					<div class="clearfix"></div>
			</div>
			</div>
		<div class="review-slider">
			 <ul id="flexiselDemo1">
				<li><img src="images/r1.jpg" alt=""/></li>
				<li><img src="images/r2.jpg" alt=""/></li>
				<li><img src="images/r3.jpg" alt=""/></li>
				<li><img src="images/r4.jpg" alt=""/></li>
				<li><img src="images/r5.jpg" alt=""/></li>
				<li><img src="images/r6.jpg" alt=""/></li>
			</ul>	
		</div>	-->

	@endsection