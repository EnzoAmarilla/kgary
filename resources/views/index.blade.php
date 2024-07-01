@extends('layouts.master')

@section('meta_description')
    <meta property="og:image" content="../assets/images/favicon.png">
    {{-- <meta property="og:title" content="Mountaineering Patagonia - Where your adventure begins."> --}}
    {{-- <meta name="description" content="Explore different programs and pick your adventure in Patagonia."> --}}
@endsection

@section('title') Kgary @endsection

@section('content')
		<!-- Hero section -->
		<div class="owl-carousel owl-nav-overlay owl-dots-overlay" data-owl-autoplay="true" data-owl-nav="true" data-owl-dots="true" data-owl-items="1">
			<!-- Slider Item 1 -->
			<div class="section-fullscreen bg-image" data-bg-src="../assets/images/Heros/index-slide.jpg">
				<div class="bg-dark-02">
					<div class="container text-center">
						<div class="position-middle">
							<div class="row">
								<h1>
									<span class="typer text-white" id="typer1" data-words="Where your adventure begins." data-delay="75" data-deleteDelay="8000"></span><span class="cursor" data-owner="typer1"></span>
								</h1>
								<h6 class="font-small fw-normal">Explore our different programs and start experience Patagonia's magic!</h6>
							</div>
							<a class="button button-md button-radius button-reveal-right-white me-2 mt-3" href="#"><i class="bi bi-arrow-right"></i><span>See our programs</span></a>
						</div>
					</div>
				</div>
			</div>
			<!-- Slider Item 2 -->
			<div class="section-fullscreen bg-image" data-bg-src="../assets/images/Heros/slide-ski.jpg">
				<div class="bg-dark-04">
					<div class="container text-center">
						<div class="position-middle">
							<div class="row">
								<h1>Ski Tourings</h1>
								<h6 class="font-small fw-normal">in El Chaltén, Bariloche & Chilean Volcanoes.</h6>
							</div>
							<a class="button button-md button-radius button-reveal-right-white me-2 mt-3" href="#"><i class="bi bi-arrow-right"></i><span>See ski programs</span></a>
						</div>
					</div>
				</div>
			</div>
			<!-- Slider Item 3 -->
			<div class="section-fullscreen bg-image" data-bg-src="../assets/images/Heros/slide-hiking.jpg">
				<div class="bg-dark-04">
					<div class="container text-center">
						<div class="position-middle">
							<div class="row">
								<h1>Hiking</h1>
								<h6 class="font-small fw-normal">Laguna Torre, Laguna de los Tres & more...</h6>
							</div>
							<a class="button button-md button-radius button-reveal-right-white me-2 mt-3" href="#"><i class="bi bi-arrow-right"></i><span>See hiking programs</span></a>
						</div>
					</div>
				</div>
			</div>
			<!-- Slider Item 4 -->
			<div class="section-fullscreen bg-image" data-bg-src="../assets/images/Heros/slide-trekking.jpg">
				<div class="bg-dark-04">
					<div class="container text-center">
						<div class="position-middle">
							<div class="row">
								<h1>Trekking</h1>
								<h6 class="font-small fw-normal">Basecamps, Poincenot, Paso del Viento & more...</h6>
							</div>
							<a class="button button-md button-radius button-reveal-right-white me-2 mt-3" href="#"><i class="bi bi-arrow-right"></i><span>See trekking programs</span></a>
						</div>
					</div>
				</div>
			</div>
			<!-- Slider Item 5 -->
			<div class="section-fullscreen bg-image" data-bg-src="../assets/images/Heros/slide-mascent.jpg">
				<div class="bg-dark-04">
					<div class="container text-center">
						<div class="position-middle">
							<div class="row">
								<h1>Mountain Ascents</h1>
								<h6 class="font-small fw-normal">Tronador, Madsen, Mojón Rojo & more...</h6>
							</div>
							<a class="button button-md button-radius button-reveal-right-white me-2 mt-3" href="#"><i class="bi bi-arrow-right"></i><span>See ascent programs</span></a>
						</div>
					</div>
				</div>
			</div>
			<!-- Slider Item 6 -->
			<div class="section-fullscreen bg-image" data-bg-src="../assets/images/Heros/slide-alpine.jpg">
				<div class="bg-dark-04">
					<div class="container text-center">
						<div class="position-middle">
							<div class="row">
								<h1>Alpine Climbs</h1>
								<h6 class="font-small fw-normal">Catedral, Aguja de la S & Guillaumet.</h6>
							</div>
							<a class="button button-md button-radius button-reveal-right-white me-2 mt-3" href="#"><i class="bi bi-arrow-right"></i><span>See alpine climb programs</span></a>
						</div>
					</div>
				</div>
			</div>
			<!-- Slider Item 6 -->
			<div class="section-fullscreen bg-image" data-bg-src="../assets/images/Heros/slide-climbing.jpg">
				<div class="bg-dark-04">
					<div class="container text-center">
						<div class="position-middle">
							<div class="row">
								<h1>Rock Climbing</h1>
								<h6 class="font-small fw-normal">Single Pitch, Multi Pitch, Traditional.</h6>
							</div>
							<a class="button button-md button-radius button-reveal-right-white me-2 mt-3" href="#"><i class="bi bi-arrow-right"></i><span>See rock climbing programs</span></a>
						</div>
					</div>
				</div>
			</div>
			<!-- Slider Item 7 -->
			<div class="section-fullscreen bg-image" data-bg-src="../assets/images/Heros/slide-icefield.jpg">
				<div class="bg-dark-04">
					<div class="container text-center">
						<div class="position-middle">
							<div class="row">
								<h1>Ice Field Expeditions</h1>
								<h6 class="font-small fw-normal">Paso Marconi, Paso Del Viento & Gorra Blanca.</h6>
							</div>
							<a class="button button-md button-radius button-reveal-right-white me-2 mt-3" href="#"><i class="bi bi-arrow-right"></i><span>See ice field expeditions</span></a>
						</div>
					</div>
				</div>
			</div>
			<!-- Slider Item 8 -->
			<div class="section-fullscreen bg-image" data-bg-src="../assets/images/Heros/slide-private.jpg">
				<div class="bg-dark-04">
					<div class="container text-center">
						<div class="position-middle">
							<div class="row">
								<h1>Private Guiding</h1>
								<h6 class="font-small fw-normal">Contact us and ask for custom routes.</h6>
							</div>
							<a class="button button-md button-radius button-reveal-right-white me-2 mt-3" href="#"><i class="bi bi-arrow-right"></i><span>Contact us</span></a>
						</div>
					</div>
				</div>
			</div>
		</div><!-- end owl-carousel -->
		<!-- end Hero section -->
@endsection