
<?php

  use App\Post; 
  $posts = Post::all();
?>
@foreach($posts as $post)
<div id="mainDiv" style="padding-top: 10px">

		<ul class="media-list main-list">

			<li class="media"><a class="pull-left" href="#"> </a>

				<div class="row">
					<div class="col-md-2">

						<div class="text-center date-body" style="width: 110px">
							<label for="" class="date-title">{{$post->created_at}}</label>
							<div class="date-content">
								<p class="dia">10</p>
								<hr class="nomargin" />

							</div>
						</div>
					</div>
					<div class="col-md-7">
						<h2 class="media-heading" style="padding-left: 10px;">
							<a href="">  {{$post->title}} </a>
						</h2>
					</div>
					<div class="col-md-3">

						<a href="http://facebook.com"
							class="btn btn-social-icon btn-facebook"> <i
							class="fa fa-facebook"></i></a> <a
							class="btn btn-social-icon btn-google-plus"><i
							class="fa fa-google-plus"></i></a> <a
							class="btn btn-social-icon btn-twitter"><i
							class="fa fa-twitter"></i></a>

					</div>
				</div>

				
				<div class="media-body" id="k">
					<h4 class="media-content">
						<img class="media-object img-responsive pull-left "src="http://lorempixel.com/500/250/" alt="..." style="padding-right: 10px;">
						{{$post->body}}

					</h4>

		



					<!-- readMore -->
					<div class="row">
						<div class="col-md-8">
							<div
								class="source-section first-section first-lower-section subscribe"
								id="viewMore">
								<button type="button"
									class="btn btn-success btn-md btn-subscribe">
									<i class="fa fa-newspaper-o fa-lg "></i>Read More
								</button>

							</div>
						</div>
						<div class="col-md-2">
							<div class="numberofviews2 pull-right">
								<font color="#000000"><b><span
										class="glyphicon glyphicon-eye-open "></span> 5,253</b></font> Views
							</div>
						</div>
						<div class="col-md-2">
							<div class="numberofviews2 pull-right">
								<font color="#000000"><b><span
										class="glyphicon glyphicon-thumbs-up"></span> 5,253</b></font> Likes
							</div>

						</div>

					</div>
					<!-- readMore -->

				</div>
	</div>
	@endforeach