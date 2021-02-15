@extends('frontend.home_master')
@section('content')

@php
	$first_section_big_photo = DB::table('posts')->where('first_section_thumbnail', 1)->orderBy('id', 'desc')->first();	
	$firstsections = DB::table('posts')->where('first_section', 1)->orderBy('id', 'desc')->limit(8)->get();
	
	$horizontal = DB::table('ads')->where('type', 2)->skip(1)->first();
	$horizontal2 = DB::table('ads')->where('type', 2)->skip(1)->first();
	$horizontal3 = DB::table('ads')->where('type', 2)->skip(2)->first();

@endphp

<!-- 1st-news-section-start -->	
<section class="news-section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9 col-sm-8">
				<div class="row">
					<div class="col-md-1 col-sm-1 col-lg-1"></div>
					<div class="col-md-10 col-sm-10">
						<div class="lead-news">
	<div class="service-img"><a href="#"><img src="{{ asset($first_section_big_photo->image) }}" width="800px" alt="Notebook"></a></div>
							<div class="content">
						<h4 class="lead-heading-01"><a href="{{ route('view.post', [$first_section_big_photo->id])}}">
							@if (session()->get('lang') == 'mkd')
							{{ $first_section_big_photo->title_mk }}
							@else
							{{ $first_section_big_photo->title_en }}
							@endif
						</a> </h4>
							</div>
						</div>
					</div>
					
				</div>
					<div class="row">
						@foreach ($firstsections as $firstsection)
						<div class="col-md-3 col-sm-3">
							<div class="top-news">
								<a href="#"><img src="{{ asset($firstsection->image) }}" alt="Notebook"></a>
								<h4 class="heading-02"><a href="#">
									@if (session()->get('lang') == 'mkd')
									{{ $firstsection->title_mk}}
									@else
									{{ $firstsection->title_en}}
									@endif
								</a> </h4>
							</div>
						</div>
						@endforeach
					</div>
				
				<!-- add-start -->	
				<div class="row">
					<div class="col-md-12 col-sm-12">
						@if ($horizontal2 == NULL)
							
						@else
							<div class="add"><img src="{{ asset($horizontal2->ads) }}" alt="" /></div>
						@endif
					</div>
				</div><!-- /.add-close -->	
				

				@php
					$firstcategory = DB::table('categories')->first();
					$firstcategorybigpost = DB::table('posts')->where('category_id', $firstcategory->id)
															->where('bigthumbnail', 1)->first();
					$firstcategoryposts = DB::table('posts')->where('category_id', $firstcategory->id)
															->where('bigthumbnail', 0)->limit(3)->get();
				@endphp

				<!-- news-start -->
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="bg-one">
							<div class="cetagory-title"><a href="#">
								@if (session()->get('lang') == 'mkd')
								{{ $firstcategory->category_mk}}
								<span>More MK<i class="fa fa-angle-double-right" aria-hidden="true"></i></span></a></div>
								@else
								{{ $firstcategory->category_en}}
								<span>More EN<i class="fa fa-angle-double-right" aria-hidden="true"></i></span></a></div>
								@endif
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="top-news">
										<a href="#"><img src="{{ asset($firstcategorybigpost->image) }}" alt="Notebook"></a>
										<h4 class="heading-02"><a href="#">
											@if (session()->get('lang') == 'mkd')
											{{ $firstcategorybigpost->title_mk}}
											@else
											{{ $firstcategorybigpost->title_en}}
											@endif
										</a> </h4>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									@foreach ($firstcategoryposts as $firstcategorypost)
									<div class="image-title">
										<a href="#"><img src="{{ asset($firstcategorypost->image) }}" alt="Notebook"></a>
										<h4 class="heading-03"><a href="#">
											@if (session()->get('lang') == 'mkd')
											{{ $firstcategorypost->title_mk}}
											@else
											{{ $firstcategorypost->title_en}}
											@endif</a> </h4>
									</div>
									@endforeach
									
								</div>
							</div>
						</div>
					</div>

					@php
					$secondcategory = DB::table('categories')->skip(1)->first();
					$secondcategorybigpost = DB::table('posts')->where('category_id', $secondcategory->id)
															->where('bigthumbnail', 1)->first();
					$secondcategoryposts = DB::table('posts')->where('category_id', $secondcategory->id)
															->where('bigthumbnail', 0)->orWhere('bigthumbnail', NULL)->limit(3)->get();
					@endphp

					<div class="col-md-6 col-sm-6">
						<div class="bg-one">
							<div class="cetagory-title"><a href="#">
								@if (session()->get('lang') == 'mkd')
								{{ $secondcategory->category_mk}}
								<span>More MK<i class="fa fa-angle-double-right" aria-hidden="true"></i></span></a></div>
								@else
								{{ $secondcategory->category_en}}
								<span>More EN<i class="fa fa-angle-double-right" aria-hidden="true"></i></span></a></div>
								@endif
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="top-news">
										<a href="#"><img src="{{ asset($secondcategorybigpost->image) }}" alt="Notebook"></a>
										<h4 class="heading-02"><a href="#">
											@if (session()->get('lang') == 'mkd')
											{{ $secondcategorybigpost->title_mk}}
											@else
											{{ $secondcategorybigpost->title_en}}
											@endif
										</a> </h4>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									@foreach ($secondcategoryposts as $secondcategorypost)
									<div class="image-title">
										<a href="#"><img src="{{ asset($secondcategorypost->image) }}" alt="Notebook"></a>
										<h4 class="heading-03"><a href="#">
											@if (session()->get('lang') == 'mkd')
											{{ $secondcategorypost->title_mk}}
											@else
											{{ $secondcategorypost->title_en}}
											@endif
										</a> </h4>
									</div>
									@endforeach
									
								</div>
							</div>
						</div>
					</div>
				</div>					
			</div>
			<div class="col-md-3 col-sm-3">
				@php
					$vertical = DB::table('ads')->where('type', 1)->first();
					$vertical2 = DB::table('ads')->where('type', 1)->skip(1)->first();

				@endphp
				<!-- add-start -->	
				<div class="row">
					<div class="col-md-12 col-sm-12">
						@if ($vertical == NULL)
							
						@else
							<div class="sidebar-add"><img src="{{ asset($vertical->ads) }}" alt="" /></div>
						@endif
					</div>
				</div><!-- /.add-close -->	
				
				<!-- youtube-live-start -->	
				<div class="cetagory-title-03">Live TV</div>
				<div class="photo">
					<div class="embed-responsive embed-responsive-16by9 embed-responsive-item" style="margin-bottom:5px;">
			
<iframe width="729" height="410" src="https://www.youtube.com/embed/S81Kte7X9uk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div><!-- /.youtube-live-close -->	
				
				<!-- facebook-page-start -->
				<div class="cetagory-title-03">Facebook </div>
				<div class="fb-root">
				<script async defer crossorigin="anonymous" src="https://connect.facebook.net/mk_MK/sdk.js#xfbml=1&version=v9.0" nonce="o3hD3Zzi"></script>
				<div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="" data-width="340" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
				</div><!-- /.facebook-page-close -->	
				
				<!-- add-start -->	
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="sidebar-add">
							@if ($vertical2 == NULL)
								
							@else
							<img src="{{ asset($vertical2->ads) }}" alt="" />

							@endif
							
						</div>
					</div>
				</div><!-- /.add-close -->	
			</div>
		</div>
	</div>
</section><!-- /.1st-news-section-close -->


@php
		$thirdcategory = DB::table('categories')->skip(2)->first();
		$thirdcategorybigpost = DB::table('posts')->where('category_id', $thirdcategory->id)
												->where('bigthumbnail', 1)->first();
		$thirdcategoryposts = DB::table('posts')->where('category_id', $thirdcategory->id)
												->where('bigthumbnail', 0)->orWhere('bigthumbnail', NULL)->limit(3)->get();


		$fourthcategory = DB::table('categories')->skip(3)->first();
		$fourthcategorybigpost = DB::table('posts')->where('category_id', $fourthcategory->id)
												->where('bigthumbnail', 1)->first();
		$fourthcategoryposts = DB::table('posts')->where('category_id', $fourthcategory->id)
												->where('bigthumbnail', 0)->orWhere('bigthumbnail', NULL)->limit(3)->get();

@endphp
<!-- 2nd-news-section-start -->	
<section class="news-section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<div class="bg-one">
					<div class="cetagory-title-02"><a href="#">
						@if (session()->get('lang') == 'mkd')
						{{ $thirdcategory->category_mk}}
						<i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i>All News MK </span></a></div>
						@else
						{{ $thirdcategory->category_en}}
						<i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i>All News EN </span></a></div>
						@endif
					<div class="row">
						
						<div class="col-md-6 col-sm-6">
							<div class="top-news">
								<a href="#"><img src="{{ asset($thirdcategorybigpost->image) }}" alt="Notebook"></a>
								<h4 class="heading-02"><a href="#">
									@if (session()->get('lang') == 'mkd')
											{{ $thirdcategorybigpost->title_mk}}
											@else
											{{ $thirdcategorybigpost->title_en}}
											@endif	
								</a> </h4>
							</div>
						</div>
						
						<div class="col-md-6 col-sm-6">
							@foreach ($thirdcategoryposts as $thirdcategorypost)
								
							<div class="image-title">
								<a href="#"><img src="{{ asset($thirdcategorypost->image) }}" alt="Notebook"></a>
								<h4 class="heading-03"><a href="#">
									@if (session()->get('lang') == 'mkd')
									{{ $thirdcategorypost->title_mk}}
									@else
									{{ $thirdcategorypost->title_en}}
									@endif
								</a> </h4>
							</div>
							@endforeach
						
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="bg-one">
					<div class="cetagory-title-02"><a href="#">
						@if (session()->get('lang') == 'mkd')
						{{ $fourthcategory->category_mk}}
						<i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i>All News MK </span></a></div>
						@else
						{{ $fourthcategory->category_en}}
						<i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i>All News EN </span></a></div>
						@endif
					<div class="row">
						
						<div class="col-md-6 col-sm-6">
							<div class="top-news">
								<a href="#"><img src="{{ asset($fourthcategorybigpost->image) }}" alt="Notebook"></a>
								<h4 class="heading-02"><a href="#">
									@if (session()->get('lang') == 'mkd')
											{{ $fourthcategorybigpost->title_mk}}
											@else
											{{ $fourthcategorybigpost->title_en}}
											@endif	
								</a> </h4>
							</div>
						</div>
						
						<div class="col-md-6 col-sm-6">
							@foreach ($fourthcategoryposts as $fourthcategorypost)
								
							<div class="image-title">
								<a href="#"><img src="{{ asset($fourthcategorypost->image) }}" alt="Notebook"></a>
								<h4 class="heading-03"><a href="#">
									@if (session()->get('lang') == 'mkd')
									{{ $fourthcategorypost->title_mk}}
									@else
									{{ $fourthcategorypost->title_en}}
									@endif
								</a> </h4>
							</div>
							@endforeach
						
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ******* -->
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<div class="bg-one">
					<div class="cetagory-title-02"><a href="#">Biz-Econ<i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i> All News  </span></a></div>
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="top-news">
								<a href="#"><img src="{{ asset('frontend/img/news.jpg') }}" alt="Notebook"></a>
								<h4 class="heading-02"><a href="#">Israel sends treaty delegation to Bahrain with Trump aides</a> </h4>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="image-title">
								<a href="#"><img src="{{ asset('frontend/img/news.jpg') }}" alt="Notebook"></a>
								<h4 class="heading-03"><a href="#">Israel sends treaty delegation to Bahrain with Trump aides</a> </h4>
							</div>
							<div class="image-title">
								<a href="#"><img src="{{ asset('frontend/img/news.jpg') }}" alt="Notebook"></a>
								<h4 class="heading-03"><a href="#">Israel sends treaty delegation to Bahrain with Trump aides</a> </h4>
							</div>
							<div class="image-title">
								<a href="#"><img src="{{ asset('frontend/img/news.jpg') }}" alt="Notebook"></a>
								<h4 class="heading-03"><a href="#">Israel sends treaty delegation to Bahrain with Trump aides</a> </h4>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="bg-one">
					<div class="cetagory-title-02"><a href="#">Education <i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i> All News  </span></a></div>
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="top-news">
								<a href="#"><img src="{{ asset('frontend/img/news.jpg') }}" alt="Notebook"></a>
								<h4 class="heading-02"><a href="#">Students won't get form fill-up fee back</a> </h4>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="image-title">
								<a href="#"><img src="{{ asset('frontend/img/news.jpg') }}" alt="Notebook"></a>
								<h4 class="heading-03"><a href="#">Students won't get form fill-up fee back</a> </h4>
							</div>
							<div class="image-title">
								<a href="#"><img src="{{ asset('frontend/img/news.jpg') }}" alt="Notebook"></a>
								<h4 class="heading-03"><a href="#">Students won't get form fill-up fee back</a> </h4>
							</div>
							<div class="image-title">
								<a href="#"><img src="{{ asset('frontend/img/news.jpg') }}" alt="Notebook"></a>
								<h4 class="heading-03"><a href="#">Students won't get form fill-up fee back</a> </h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- add-start -->	
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<div class="add">
					@if ($horizontal2 == NULL)
								
					@else
					<img src="{{ asset($horizontal2->ads) }}" alt="" />

					@endif
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="add">
					@if ($horizontal3 == NULL)
								
					@else
					<img src="{{ asset($horizontal3->ads) }}" alt="" />

					@endif
				
				</div>
			</div>
		</div><!-- /.add-close -->	
		
	</div>
</section><!-- /.2nd-news-section-close -->

<!-- 3rd-news-section-start -->	
<section class="news-section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9 col-sm-9">
				<div class="cetagory-title-02"><a href="#">Feature  <i class="fa fa-angle-right" aria-hidden="true"></i> all district news tab here <span><i class="fa fa-plus" aria-hidden="true"></i> All News  </span></a></div>
				
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<div class="top-news">
							<a href="#"><img src="{{ asset('frontend/img/news.jpg') }}" alt="Notebook"></a>
							<h4 class="heading-02"><a href="#">Achieving SDG-4 during COVID-19 Pandemic</a> </h4>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="image-title">
							<a href="#"><img src="{{ asset('frontend/img/news.jpg') }}" alt="Notebook"></a>
							<h4 class="heading-03"><a href="#">Achieving SDG-4 during COVID-19 Pandemic</a> </h4>
						</div>
						<div class="image-title">
							<a href="#"><img src="{{ asset('frontend/img/news.jpg') }}" alt="Notebook"></a>
							<h4 class="heading-03"><a href="#">Achieving SDG-4 during COVID-19 Pandemic</a> </h4>
						</div>
						<div class="image-title">
							<a href="#"><img src="{{ asset('frontend/img/news.jpg') }}" alt="Notebook"></a>
							<h4 class="heading-03"><a href="#">Achieving SDG-4 during COVID-19 Pandemic</a> </h4>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="image-title">
							<a href="#"><img src="{{ asset('frontend/img/news.jpg') }}" alt="Notebook"></a>
							<h4 class="heading-03"><a href="#">Achieving SDG-4 during COVID-19 Pandemic</a> </h4>
						</div>
						<div class="image-title">
							<a href="#"><img src="{{ asset('frontend/img/news.jpg') }}" alt="Notebook"></a>
							<h4 class="heading-03"><a href="#">Achieving SDG-4 during COVID-19 Pandemic</a> </h4>
						</div>
						<div class="image-title">
							<a href="#"><img src="{{ asset('frontend/img/news.jpg') }}" alt="Notebook"></a>
							<h4 class="heading-03"><a href="#">Achieving SDG-4 during COVID-19 Pandemic</a> </h4>
						</div>
					</div>
				</div>
				<!-- ******* -->
				<br />
				
				
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="cetagory-title-02"><a href="#">Sci-Tech<i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i> সব খবর  </span></a></div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="bg-gray">
							<div class="top-news">
								<a href="#"><img src="{{ asset('frontend/img/news.jpg') }}" alt="Notebook"></a>
								<h4 class="heading-02"><a href="#">Facebook Messenger gets shiny new logo </a> </h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="news-title">
							<a href="#">Facebook Messenger gets shiny new logo </a>
						</div>
						<div class="news-title">
							<a href="#">Facebook Messenger gets shiny new logo </a>
						</div>
						<div class="news-title">
							<a href="#">Facebook Messenger gets shiny new logo</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="news-title">
							<a href="#">Facebook Messenger gets shiny new logo </a>
						</div>
						<div class="news-title">
							<a href="#">Facebook Messenger gets shiny new logo </a>
						</div>
						<div class="news-title">
							<a href="#">Facebook Messenger gets shiny new logo </a>
						</div>
					</div>
				</div>


				@php
					$areas = DB::table('areas')->get();
				@endphp
				<br><br>

				<div class="row">
						<div class="cetagory-title-02"><a href="#">Search By Area <i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i> সব খবর  </span></a></div>
					<br>
					<form action="{{ route('search.areas') }}" method="GET">
						@csrf
						<div class="row">
							<div class="col-lg-4">
								<select name="area_id" id="" class="form-control" required>
									<option disabled selected>-Select Area</option>
									@foreach ($areas as $area)
										<option value="{{ $area->id}}">{{ $area->area_en }} | {{ $area->area_mk }}</option>
									@endforeach
								</select>
							</div>
							<div class="col-lg-4">
								<select id="subarea_id" class="form-control" name="subarea_id" >
									<option disabled selected>-Select Subarea</option>
								</select>
							</div>
							<div class="col-lg-4">
								<button class="btn btn-success btn-block">Search</button>
							</div>

						</div>
					</form>
				</div>

				<br><br>
				
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="sidebar-add">
							@if ($horizontal2 == NULL )
								
							@else
								<img src="{{ asset($horizontal2->ads) }}" alt="" />
							@endif
						</div>
					</div>
				</div><!-- /.add-close -->	


			</div>
			<div class="col-md-3 col-sm-3">
				<div class="tab-header">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs nav-justified" role="tablist">
						<li role="presentation" class="active"><a href="#tab21" aria-controls="tab21" role="tab" data-toggle="tab" aria-expanded="false">Latest</a></li>
						<li role="presentation" ><a href="#tab22" aria-controls="tab22" role="tab" data-toggle="tab" aria-expanded="true">Popular</a></li>
						<li role="presentation" ><a href="#tab23" aria-controls="tab23" role="tab" data-toggle="tab" aria-expanded="true">Popular1</a></li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content ">
						<div role="tabpanel" class="tab-pane in active" id="tab21">
							<div class="news-titletab">
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#">Both education and life must be saved</a> </h4>
								</div>
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#">Both education and life must be saved</a> </h4>
								</div>
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#">Both education and life must be saved</a> </h4>
								</div>
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#">Both education and life must be saved</a> </h4>
								</div>
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#">Both education and life must be saved</a> </h4>
								</div>
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#">Both education and life must be saved</a> </h4>
								</div>
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#">Both education and life must be saved</a> </h4>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tab22">
							<div class="news-titletab">
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#">Both education and life must be saved</a> </h4>
								</div>
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#">Both education and life must be saved</a> </h4>
								</div>
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#">Both education and life must be saved</a> </h4>
								</div>
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#">Both education and life must be saved</a> </h4>
								</div>
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#">Both education and life must be saved</a> </h4>
								</div>
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#">Both education and life must be saved</a> </h4>
								</div>
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#">Both education and life must be saved</a> </h4>
								</div>
							</div>                                          
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tab23">	
							<div class="news-titletab">
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#">Both education and life must be saved</a> </h4>
								</div>
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#">Both education and life must be saved</a> </h4>
								</div>
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#">Both education and life must be saved</a> </h4>
								</div>
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#">Both education and life must be saved</a> </h4>
								</div>
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#">Both education and life must be saved</a> </h4>
								</div>
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#">Both education and life must be saved</a> </h4>
								</div>
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#">Both education and life must be saved</a> </h4>
								</div>
							</div>						                                          
						</div>
					</div>
				</div>
				<!-- Namaj Times -->
				<div class="cetagory-title-03">Prayer Time </div>
				Prayer Times count option here
				<!-- Namaj Times -->
				<div class="cetagory-title-03">Old News  </div>
				<form action="" method="post">
					<div class="old-news-date">
						<input type="text" name="from" placeholder="From Date" required="">
						<input type="text" name="" placeholder="To Date">			
					</div>
					<div class="old-date-button">
						<input type="submit" value="search ">
					</div>
				</form>
				<!-- news -->
				<br><br><br><br><br>
				<div class="cetagory-title-04"> Important Website</div>
				<div class="">
				<div class="news-title-02">
					<h4 class="heading-03"><a href="#"><i class="fa fa-check" aria-hidden="true"></i> Both education and life must be saved  </a> </h4>
				</div>
				<div class="news-title-02">
					<h4 class="heading-03"><a href="#"><i class="fa fa-check" aria-hidden="true"></i> Both education and life must be saved</a> </h4>
				</div>
				<div class="news-title-02">
					<h4 class="heading-03"><a href="#"><i class="fa fa-check" aria-hidden="true"></i> Both education and life must be saved  </a> </h4>
				</div>
				<div class="news-title-02">
					<h4 class="heading-03"><a href="#"><i class="fa fa-check" aria-hidden="true"></i> Both education and life must be saved </a> </h4>
				</div>
				<div class="news-title-02">
					<h4 class="heading-03"><a href="#"><i class="fa fa-check" aria-hidden="true"></i> Both education and life must be saved  </a> </h4>
				</div>
				<div class="news-title-02">
					<h4 class="heading-03"><a href="#"><i class="fa fa-check" aria-hidden="true"></i> Both education and life must be saved  </a> </h4>
				</div>
				<div class="news-title-02">
					<h4 class="heading-03"><a href="#"><i class="fa fa-check" aria-hidden="true"></i> Both education and life must be saved  </a> </h4>
				</div>
				<div class="news-title-02">
					<h4 class="heading-03"><a href="#"><i class="fa fa-check" aria-hidden="true"></i> Both education and life must be saved </a> </h4>
				</div>
				</div>

			</div>
		</div>
	</div>
</section><!-- /.3rd-news-section-close -->









<!-- gallery-section-start -->	
<section class="news-section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-sm-7">
				<div class="gallery_cetagory-title"> Photo Gallery </div>

				<div class="row">
					<div class="col-md-8 col-sm-8">
						<div class="photo_screen">
							<div class="myPhotos" style="width:100%">
									<img src="{{ asset('frontend/img/news.jpg') }}"  alt="Avatar">
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="photo_list_bg">
							
							<div class="photo_img photo_border active">
								<img src="{{ asset('frontend/img/news.jpg') }}" alt="image" onclick="currentDiv(1)">
								<div class="heading-03">
									Casting of Israeli actress as Cleopatra sparks anger
								</div>
							</div>

							<div class="photo_img photo_border">
								<img src="{{ asset('frontend/img/news.jpg') }}" alt="image" onclick="currentDiv(1)">
								<div class="heading-03">
									Casting of Israeli actress as Cleopatra sparks anger
								</div>
							</div>

							<div class="photo_img photo_border">
								<img src="{{ asset('frontend/img/news.jpg') }}" alt="image" onclick="currentDiv(1)">
								<div class="heading-03">
									Casting of Israeli actress as Cleopatra sparks anger
								</div>
							</div>

							<div class="photo_img photo_border">
								<img src="{{ asset('frontend/img/news.jpg') }}" alt="image" onclick="currentDiv(1)">
								<div class="heading-03">
									Casting of Israeli actress as Cleopatra sparks anger
								</div>
							</div>

							<div class="photo_img photo_border">
								<img src="{{ asset('frontend/img/news.jpg') }}" alt="image" onclick="currentDiv(1)">
								<div class="heading-03">
									Casting of Israeli actress as Cleopatra sparks anger
								</div>
							</div>

						</div>
					</div>
				</div>

				<!--=======================================
				Video Gallery clickable jquary  start
			========================================-->

						<script>
								var slideIndex = 1;
								showDivs(slideIndex);

								function plusDivs(n) {
									showDivs(slideIndex += n);
								}

								function currentDiv(n) {
									showDivs(slideIndex = n);
								}

								function showDivs(n) {
									var i;
									var x = document.getElementsByClassName("myPhotos");
									var dots = document.getElementsByClassName("demo");
									if (n > x.length) {slideIndex = 1}
									if (n < 1) {slideIndex = x.length}
									for (i = 0; i < x.length; i++) {
										x[i].style.display = "none";
									}
									for (i = 0; i < dots.length; i++) {
										dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
									}
									x[slideIndex-1].style.display = "block";
									dots[slideIndex-1].className += " w3-opacity-off";
								}
							</script>

			<!--=======================================
				Video Gallery clickable  jquary  close
			=========================================-->

			</div>
			<div class="col-md-4 col-sm-5">
				<div class="gallery_cetagory-title"> photo Gallery </div>

				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="video_screen">
							<div class="myVideos" style="width:100%">
								<div class="embed-responsive embed-responsive-16by9 embed-responsive-item">
								<iframe width="853" height="480" src="https://www.youtube.com/embed/AWM8164ksVY?list=RDAWM8164ksVY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
					
						<div class="gallery_sec owl-carousel">

							<div class="video_image" style="width:100%" onclick="currentDivs(1)">
								<img src="{{ asset('frontend/img/news.jpg') }}"  alt="Avatar">
								<div class="heading-03">
									<div class="content_padding">
										Kumar Sanu tests positive for coronavirus
									</div>
								</div>
							</div>

							<div class="video_image" style="width:100%" onclick="currentDivs(1)">
								<img src="{{ asset('frontend/img/news.jpg') }}"  alt="Avatar">
								<div class="heading-03">
									<div class="content_padding">
									Kumar Sanu tests positive for coronavirus
									</div>
								</div>
							</div>

							<div class="video_image" style="width:100%" onclick="currentDivs(1)">
								<img src="{{ asset('frontend/img/news.jpg') }}"  alt="Avatar">
								<div class="heading-03">
									<div class="content_padding">
										Kumar Sanu tests positive for coronavirus  
									</div>
								</div>
							</div>

							<div class="video_image" style="width:100%" onclick="currentDivs(1)">
								<img src="{{ asset('frontend/img/news.jpg') }}"  alt="Avatar">
								<div class="heading-03">
									<div class="content_padding">
										Kumar Sanu tests positive for coronavirus
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>


				<script>
					var slideIndex = 1;
					showDivss(slideIndex);

					function plusDivs(n) {
						showDivss(slideIndex += n);
					}

					function currentDivs(n) {
						showDivss(slideIndex = n);
					}

					function showDivss(n) {
						var i;
						var x = document.getElementsByClassName("myVideos");
						var dots = document.getElementsByClassName("demo");
						if (n > x.length) {slideIndex = 1}
						if (n < 1) {slideIndex = x.length}
						for (i = 0; i < x.length; i++) {
							x[i].style.display = "none";
						}
						for (i = 0; i < dots.length; i++) {
							dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
						}
						x[slideIndex-1].style.display = "block";
						dots[slideIndex-1].className += " w3-opacity-off";
					}
				</script>

			</div>
		</div>
	</div>
</section><!-- /.gallery-section-close -->


<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.0.4/popper.js"></script>

<!-- SubArea search from Area -->
<script type="text/javascript">
    $(document).ready(function(){
        $('select[name="area_id"]').on('change', function(){
            var area_id = $(this).val();
            if(area_id) {
                $.ajax({
                    url: "{{ url('/get/subarea/frontend') }}/"+area_id,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $("#subarea_id").empty();
                            $.each(data,function(key,value){
                                $('#subarea_id').append('<option value="'+value.id+'">'+value.subarea_en+' | '+value.subcarea_mk+'</option');
                            });
                    },
                });
            } else {
                alert('danger');
            }
        });
    });
    </script>
@endsection