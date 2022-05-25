@extends('layouts.main')

@section('container')
    <section class="news text-center" id="work">
		<div class="container">
			 <h3 class="heading text-capitalize"> My works </h3>
			<div class="row news-grids mt-5">
						<div class="col-lg-4 col-md-6 newsgrid1">
							<div class="newsgrid_tp new_grd">
								<img src="images/list.png" alt="news image" class="img-fluid">
									<div class="news_bt">
										<h4>Storybook App</h4>
										<p class="mt-4">  KotlinRoom </p>
									</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6  newsgrid2">
							<div class="newsgrid_tp new_grd1">
								<img src="images/library.png" alt="news image" class="img-fluid">
								<div class="news_bt">
									<h4>E-library</h4>
									<p class="mt-4">  Web App </p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6  newsgrid5">
							<div class="newsgrid_tp new_grd1">
								<img src="images/bird.png" alt="news image" class="img-fluid">
								<div class="news_bt">
									<h4>Flying Bird</h4>
									<p class="mt-4">  Game Scratch </p>
								</div>
							</div>
						</div>
			</div>
		</section>
@endsection