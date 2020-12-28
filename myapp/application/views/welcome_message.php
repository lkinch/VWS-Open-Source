<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<!-- Add this to <head> -->
	<!-- Load required Bootstrap and BootstrapVue CSS -->
	<link type="text/css" rel="stylesheet" href="//unpkg.com/bootstrap/dist/css/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.css" />

	<!-- Load polyfills to support older browsers -->
	<script src="//polyfill.io/v3/polyfill.min.js?features=es2015%2CIntersectionObserver" crossorigin="anonymous"></script>

	<!-- Load Vue followed by BootstrapVue -->
	<script src="//unpkg.com/vue@latest/dist/vue.min.js"></script>
	<script src="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.js"></script>

	<!-- Load the following for BootstrapVueIcons support -->
	<script src="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue-icons.min.js"></script>
</head>
<body>


	<div id="app" >
		<b-carousel
		id="carousel-1"
		v-model="slide"
		:interval="4000"
		fade
		controls
		indicators
		fluid
		background="#ababab"
		img-width="600"
		img-height="400"
		class="mb-2"
		style="text-shadow: 1px 1px 2px #333; max-height: 400px;"
		@sliding-start="onSlideStart"
		@sliding-end="onSlideEnd"
		>
		<!-- Text slides with image -->
		<b-carousel-slide
			caption="Virtual Wellness Program"
			
		><template #img>
          <img
            class="d-block img-fluid w-50 m-auto"
            width="600"
            height="400"
            src="static/img/healthcare-staff-GCDW945.JPG"
            alt="image slot"
          >
        </template></b-carousel-slide>

		<b-carousel-slide
			caption="Virtual Wellness Program"
			
		><template #img>
          <img
            class="d-block img-fluid w-50 m-auto"
            width="600"
            height="400"
            src="static/img/healthcare-worker-assisting-senior-man-with-down-s-HFD7VAK.jpg"
            alt="image slot"
          >
        </template></b-carousel-slide>

		<b-carousel-slide
			caption="Virtual Wellness Program"
			
		><template #img>
          <img
            class="d-block img-fluid w-25 m-auto"
            height="400"
            src="static/img/healthcare-and-medicine-WRP6C34.jpg"
            alt="image slot"
          >
        </template></b-carousel-slide>
		
		</b-carousel>
		<div class="row m-4">
			<div class="col-sm-2" ></div>
			<b-card
				title="Participant"
				img-src="static/img/business-executives-actively-participating-MFLDQWT.jpg"
				img-alt="Image"
				img-top
				tag="article"
    			style="max-width: 20rem;"
				class="mb-2 mt-4 col-sm-3"
			>
				<b-card-text >
				Login to the virtual wellness program as a participant
				</b-card-text>

				<b-button href="#" variant="primary">Login</b-button>
			</b-card>
			<div class="col-sm-2" ></div>
			<b-card
				title="Researcher"
				img-src="static/img/cute-caucasian-chemists-PFQDRJQ.jpg"
				img-alt="Image"
				img-top
				tag="article"
				style="max-width: 20rem;"
				class="mb-2 col-sm-3"
			>
				<b-card-text >
				Login to the virtual wellness program as a researcher.
				</b-card-text>

				<b-button href="#" variant="primary">Login</b-button>
			</b-card>
			<div class="col-sm-2" ></div>
		</div>
	</div>
	<script>
		var app = new Vue ({
			el: "#app",
			data() {
			return {
				slide: 0,
				sliding: null
			}
			},
			methods: {
				onSlideStart(slide) {
					this.sliding = true
				},
				onSlideEnd(slide) {
					this.sliding = false
				}
			}
		})
	</script>
	
</div>
	<script src="https://cdn.jsdelivr.net/npm/vue@latest/dist/vue.js"></script>
</body>
</html>
