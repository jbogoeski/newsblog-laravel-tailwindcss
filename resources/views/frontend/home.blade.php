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
	<div class="service-img"><a href="{{ route('view.post', [$first_section_big_photo->id])}}"><img src="{{ asset($first_section_big_photo->image) }}" width="800px" alt="Notebook"></a></div>
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
								<a href="{{ route('view.post', [$firstsection->id])}}"><img src="{{ asset($firstsection->image) }}" alt="Notebook"></a>
								<h4 class="heading-02"><a href="{{ route('view.post', [$firstsection->id])}}">
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
							<div class="cetagory-title"><a href="{{ route('post.category', [$firstcategory->id, $firstcategory->category_en]) }}">
								@if (session()->get('lang') == 'mkd')
								{{ $firstcategory->category_mk}}
								<span>Прочитај повеќе <i class="fa fa-angle-double-right" aria-hidden="true"></i></span></a></div>
								@else
								{{ $firstcategory->category_en}}
								<span>More <i class="fa fa-angle-double-right" aria-hidden="true"></i></span></a></div>
								@endif
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="top-news">
										<a href="{{ route('view.post', [$firstcategorybigpost->id])}}"><img src="{{ asset($firstcategorybigpost->image) }}" alt="Notebook"></a>
										<h4 class="heading-02"><a href="{{ route('view.post', [$firstcategorybigpost->id])}}">
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
										<a href="{{ route('view.post', [$firstcategorypost->id])}}"><img src="{{ asset($firstcategorypost->image) }}" alt="Notebook"></a>
										<h4 class="heading-03"><a href="{{ route('view.post', [$firstcategorypost->id])}}">
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
							<div class="cetagory-title"><a href="{{ route('post.category', [$secondcategory->id, $secondcategory->category_en]) }}">
								@if (session()->get('lang') == 'mkd')
								{{ $secondcategory->category_mk}}
								<span>Прочитај повеќе <i class="fa fa-angle-double-right" aria-hidden="true"></i></span></a></div>
								@else
								{{ $secondcategory->category_en}}
								<span>More <i class="fa fa-angle-double-right" aria-hidden="true"></i></span></a></div>
								@endif
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="top-news">
										<a href="{{ route('view.post', [$secondcategorybigpost->id])}}"><img src="{{ asset($secondcategorybigpost->image) }}" alt="Notebook"></a>
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
										<a href="{{ route('view.post', [$secondcategorypost->id])}}"><img src="{{ asset($secondcategorypost->image) }}" alt="Notebook"></a>
										<h4 class="heading-03"><a href="{{ route('view.post', [$secondcategorypost->id])}}">
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
				@php
					$livetv = DB::table('livetvs')->where('status', 1)->first();
				@endphp

				@if ($livetv->status == 1)
					
				<div class="cetagory-title-03" style="background-color: rgb(145, 53, 53)">
					@if (session()->get('lang') == 'mkd')
					Телевизија во живо
					@else
					Live TV
					@endif
				</div>
				<div class="photo">
					<div class="embed-responsive embed-responsive-16by9 embed-responsive-item" style="margin-bottom:5px;">
						{!! $livetv->embed_code !!}
					</div>
				</div><!-- /.youtube-live-close -->	
				
				
				@endif
				
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
					<div class="cetagory-title-02"><a href="{{ route('post.category', [$thirdcategory->id, $thirdcategory->category_en]) }}">
						@if (session()->get('lang') == 'mkd')
						{{ $thirdcategory->category_mk}}
						<i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i> Прочитај Повеќе </span></a></div>
						@else
						{{ $thirdcategory->category_en}}
						<i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i> All News </span></a></div>
						@endif
					<div class="row">
						
						<div class="col-md-6 col-sm-6">
							<div class="top-news">
								<a href="{{ route('view.post', [$thirdcategorybigpost->id])}}"><img src="{{ asset($thirdcategorybigpost->image) }}" alt="Notebook"></a>
								<h4 class="heading-02"><a href="{{ route('view.post', [$thirdcategorybigpost->id])}}">
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
								<a href="{{ route('view.post', [$thirdcategorypost->id])}}"><img src="{{ asset($thirdcategorypost->image) }}" alt="Notebook"></a>
								<h4 class="heading-03"><a href="{{ route('view.post', [$thirdcategorypost->id])}}">
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
					<div class="cetagory-title-02"><a href="{{ route('post.category', [$fourthcategory->id, $fourthcategory->category_en]) }}">
						@if (session()->get('lang') == 'mkd')
						{{ $fourthcategory->category_mk}}
						<i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i> Прочитај Повеќе </span></a></div>
						@else
						{{ $fourthcategory->category_en}}
						<i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i> All News </span></a></div>
						@endif
					<div class="row">
						
						<div class="col-md-6 col-sm-6">
							<div class="top-news">
								<a href="{{ route('view.post', [$fourthcategorybigpost->id])}}"><img src="{{ asset($fourthcategorybigpost->image) }}" alt="Notebook"></a>
								<h4 class="heading-02"><a href="{{ route('view.post', [$fourthcategorybigpost->id])}}">
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
								<a href="{{ route('view.post', [$fourthcategorypost->id])}}"><img src="{{ asset($fourthcategorypost->image) }}" alt="Notebook"></a>
								<h4 class="heading-03"><a href="{{ route('view.post', [$fourthcategorypost->id])}}">
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

		@php
		$firstsub = DB::table('sub_categories')->first();
		$firstsubbigpost = DB::table('posts')->where('subcategory_id', $firstsub->id)
												->where('bigthumbnail', 1)->first();
		$firstsubposts = DB::table('posts')->where('subcategory_id', $firstsub->id)
												->where('bigthumbnail', 0)->orWhere('bigthumbnail', NULL)->limit(3)->get();


		$secondsub = DB::table('sub_categories')->skip(1)->first();
		$secondsubbigpost = DB::table('posts')->where('subcategory_id', $secondsub->id)
												->where('bigthumbnail', 1)->first();
		$secondsubposts = DB::table('posts')->where('subcategory_id', $secondsub->id)
												->where('bigthumbnail', 0)->orWhere('bigthumbnail', NULL)->limit(3)->get();

@endphp
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<div class="bg-one">
					<div class="cetagory-title-02"><a href="{{ route('post.subcategory', [$firstsub->id, $firstsub->subcategory_en]) }}">
						@if (session()->get('lang') == 'mkd')
						{{ $firstsub->subcategory_mk }}
						@else
						{{ $firstsub->subcategory_en }}
						@endif
						<i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i>
							 @if (Session::get('lang') == 'mkd')
							 Прочитај повеќе
							 @else
							 All News  
							 @endif
							</span></a></div>
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="top-news">
								<a href="{{ route('view.post', [$firstsubbigpost->id]) }}"><img src="{{ asset($firstsubbigpost->image) }}" alt="Notebook"></a>
								<h4 class="heading-02"><a href="#">
									@if (Session::get('lang') == 'mkd')
									{{ $firstsubbigpost->title_mk }}
									@else
									{{ $firstsubbigpost->title_en }}
									@endif
									   
								</a> </h4>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							@foreach ($firstsubposts as $subcategory)
						
							<div class="image-title">
								<a href="{{ route('view.post', [$subcategory->id]) }}"><img src="{{ asset($subcategory->image) }}" alt="Notebook"></a>
								<h4 class="heading-03"><a href="{{ route('view.post', [$subcategory->id]) }}">
									@if (Session::get('lang') == 'mkd')
									{{ $subcategory->title_mk }}
									@else
									{{ $subcategory->title_en }}
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
					<div class="cetagory-title-02"><a href="{{ route('post.subcategory', [$secondsub->id, $secondsub->subcategory_en]) }}">
						@if (Session::get('lang') == 'mkd')
						{{ $secondsub->subcategory_mk }}
						@else
						{{ $secondsub->subcategory_en }}
						@endif
						<i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i>
							 @if (Session::get('lang') == 'mkd')
							 Прочитај повеќе
							 @else
							 All News  
							 @endif
							</span></a></div>
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="top-news">
								<a href="{{ route('view.post', [$secondsubbigpost->id]) }}"><img src="{{ asset($secondsubbigpost->image) }}" alt="Notebook"></a>
								<h4 class="heading-02"><a href="#">
									@if (Session::get('lang') == 'mkd')
									{{ $secondsubbigpost->title_mk }}
									@else
									{{ $secondsubbigpost->title_en }}
									@endif
									   
								</a> </h4>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							@foreach ($secondsubposts as $subcategory)
						
							<div class="image-title">
								<a href="{{ route('view.post', [$subcategory->id]) }}"><img src="{{ asset($subcategory->image) }}" alt="Notebook"></a>
								<h4 class="heading-03"><a href="{{ route('view.post', [$subcategory->id]) }}">
									@if (Session::get('lang') == 'mkd')
									{{ $subcategory->title_mk }}
									@else
									{{ $subcategory->title_en }}
									@endif
								
								</a> </h4>
							</div>
							@endforeach


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
				<div class="cetagory-title-02"><a href="#">
					@if (session()->get('lang') == 'mkd')
					Актуелни
					@else
					Feature 
					@endif
					<span><i class="fa fa-plus" aria-hidden="true"></i> 
						@if (session()->get('lang') == 'mkd' )
						Прочитај повеќе
						@else
						All News  
						@endif
						
					</span></a></div>
				

					@php
						$bigsub = DB::table('posts')->orderBy('id', 'DESC')->skip(2)->first();
					@endphp
				<div class="row">
					<div class="col-md-4 col-sm-4">
						
						<div class="top-news">
							<a href="{{ route('view.post', [$bigsub->id]) }}"><img src="{{ asset($bigsub->image) }}" alt="Notebook"></a>
							<h4 class="heading-02"><a href="#">
								@if (session()->get('lang') == 'mkd')
									{{ $bigsub->title_mk }}
								@else
									{{ $bigsub->title_en }}
								@endif
							
							</a> </h4>
						</div>


					</div>

					@php
						$threeposts = DB::table('posts')->orderBy('id', 'DESC')->skip(1)->inRandomOrder()->limit(3)->get();
					@endphp
					<div class="col-md-4 col-sm-4">
					
						@foreach ($threeposts as $item)
							
						<div class="image-title">
							<a href="{{ route('view.post', [$item->id]) }}"><img src="{{ asset($item->image) }}" alt="Notebook"></a>
							<h4 class="heading-03"><a href="#">
								@if (Session::get('lang') == 'mkd')
									{{ $item->title_mk }}
								@else
								{{ $item->title_en }}
								@endif
							</a> </h4>
						</div>
						@endforeach


					</div>


					@php
						$threeposts2 = DB::table('posts')->orderBy('id', 'ASC')->inRandomOrder()->limit(3)->get();
					@endphp

					<div class="col-md-4 col-sm-4">
						
						@foreach ($threeposts2 as $item)
							
						<div class="image-title">
							<a href="{{ route('view.post', [$item->id]) }}"><img src="{{ asset($item->image) }}" alt="Notebook"></a>
							<h4 class="heading-03"><a href="#">
								@if (Session::get('lang') == 'mkd')
									{{ $item->title_mk }}
								@else
								{{ $item->title_en }}
								@endif
							</a> </h4>
						</div>
						@endforeach


					</div>
				</div>
				<!-- ******* -->
				<br />
				
			

				@php
					$areas = DB::table('areas')->get();
				@endphp
				<br><br>

				<div class="row">
						<div class="cetagory-title-02"><a href="#">
							@if (Session::get('lang') == 'mkd')
							Пребарувајте по област 
							@else
							Search By Area  
							@endif

							<i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i></span></a></div>
					<br>
					<form action="{{ route('search.areas') }}" method="GET">
						@csrf
						<div class="row">
							<div class="col-lg-4">
								<select name="area_id" id="" class="form-control" required>
									<option disabled selected>
										@if (Session::get('lang') == 'mkd')
										Одбери област 
										@else
										-Select Area
										@endif
									</option>
									@foreach ($areas as $area)
										<option value="{{ $area->id}}">{{ $area->area_en }} | {{ $area->area_mk }}</option>
									@endforeach
								</select>
							</div>
							<div class="col-lg-4">
								<select id="subarea_id" class="form-control" name="subarea_id" >
									<option disabled selected>
										@if (Session::get('lang') == 'mkd')
										Одбери наслов 
										@else
										-Select Subarea
										@endif
									</option>
								</select>
							</div>
							<div class="col-lg-4">
								<button class="btn btn-success btn-block">
									@if (Session::get('lang') == 'mkd')
									Пребарувај
									@else
									Search
									@endif
								</button>
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
						@if (session()->get('lang') == 'mkd')
						<li  role="presentation" class="active"><a  href="#tab21" aria-controls="tab21" role="tab" data-toggle="tab" aria-expanded="false">Најнови</a></li>
						<li role="presentation" ><a href="#tab22" aria-controls="tab22" role="tab" data-toggle="tab" aria-expanded="true">Популарни</a></li>
						<li role="presentation" ><a href="#tab23" aria-controls="tab23" role="tab" data-toggle="tab" aria-expanded="true">Најчитани</a></li>
						@else
						<li  role="presentation" class="active"><a  href="#tab21" aria-controls="tab21" role="tab" data-toggle="tab" aria-expanded="false">Latest</a></li>
						<li role="presentation" ><a href="#tab22" aria-controls="tab22" role="tab" data-toggle="tab" aria-expanded="true">Popular</a></li>
						<li role="presentation" ><a href="#tab23" aria-controls="tab23" role="tab" data-toggle="tab" aria-expanded="true">Trend</a></li>
						@endif
					</ul>

					@php
						$latest =  DB::table('posts')->orderBy('id', 'DESC')->limit(5)->get();
						$favourite = DB::table('posts')->orderBy('id', 'DESC')->inRandomOrder()->limit(5)->get();
						$highest = DB::table('posts')->orderBy('id', 'ASC')->inRandomOrder()->limit(5)->get();
					@endphp
					<!-- Tab panes -->
					<div class="tab-content ">
						<div role="tabpanel" class="tab-pane in active" id="tab21">
							<div class="news-titletab">
								@foreach ($latest as $item)
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#">
										@if (session()->get('lang') == 'mkd')
										{{ $item->title_mk}}
										@else
										{{ $item->title_en}}
										@endif
									</a> </h4>
								</div>
								@endforeach
								
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tab22">
							<div class="news-titletab">
								@foreach ($favourite as $item)
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#">
										@if (session()->get('lang') == 'mkd')
										{{ $item->title_mk}}
										@else
										{{ $item->title_en}}
										@endif
									</a> </h4>
								</div>
								@endforeach
								
							</div>                                          
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tab23">	
							<div class="news-titletab">
								
								@foreach ($highest as $item)
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#">
										@if (session()->get('lang') == 'mkd')
										{{ $item->title_mk}}
										@else
										{{ $item->title_en}}
										@endif
									</a> </h4>
								</div>
								@endforeach

							</div>						                                          
						</div>
					</div>
				</div>
			
				<!-- news -->
				@php
					$websites = DB::table('websites')->get();
				@endphp
				<div class="cetagory-title-04"> 
					@if (Session::get('lang') == 'mkd')
					Важни веб-страници
					@else
					Important Website
					@endif
				
				</div>
				<div class="">
					@foreach ($websites as $website)
					<div class="news-title-02">
						<h4 class="heading-03"><a href="{{ $website->website_link }}"><i class="fa fa-check" aria-hidden="true"></i> {{ $website->website_name }}</a> </h4>
					</div>
					@endforeach
				</div>

			</div>
		</div>
	</div>
</section><!-- /.3rd-news-section-close -->







@php
	$big_photo = DB::table('photos')->where('type', 1)->first();
	$photos = DB::table('photos')->orderBy('id', 'DESC')->limit(5)->get();
@endphp

<!-- gallery-section-start -->	
<section class="news-section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-sm-7">
				<div class="gallery_cetagory-title">
					 @if (session()->get('lang') == 'mkd')
					 Фото Галерија
					 @else
					 Photo Gallery 
					 @endif
				 
					</div>

				<div class="row">
					<div class="col-md-8 col-sm-8">
						<div class="photo_screen">
							<div class="myPhotos" style="width:100%">
									<img src="{{ $big_photo->photo }}"  alt="Avatar">
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="photo_list_bg">
							@foreach ($photos as $photo)
							<div class="photo_img photo_border">
								<img src="{{ asset($photo->photo) }}" alt="image" onclick="currentDiv(1)">
								<div class="heading-03">
									@if (session()->get('lang') == 'mkd')
									{{ $photo->title_mk}}
									@else
									{{ $photo->title_en}}
									@endif
								</div>
							</div>
							@endforeach
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
				Video Gallery clickable  jquery  close
			=========================================-->
@php
	$big_video = DB::table('videos')->where('type', 1)->first();
	$videos = DB::table('videos')->orderBy('id', 'DESC')->limit(5)->get()


@endphp

			</div>
			<div class="col-md-4 col-sm-5">
				<div class="gallery_cetagory-title">
					@if (session()->get('lang') == 'mkd')
					Видео Галерија
					@else
					Video Gallery 
					@endif
				</div>

				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="video_screen">
							<div class="myVideos" style="width:100%">
								<div class="embed-responsive embed-responsive-16by9 embed-responsive-item">
									{!! $big_video->embed_code !!}
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
					
						<div class="gallery_sec owl-carousel">
							@foreach ($videos as $video)
								
							<div class="video_image" style="width:100%" onclick="currentDivs(1)">
								<div class="embed-responsive embed-responsive-16by9 embed-responsive-item">
									{!! $video->embed_code !!}
								</div>
								<div class="heading-03">
									<div class="content_padding">
										@if (session()->get('lang') == 'mkd')
										{{ $video->title_mk}}
										@else
										{{ $video->title_en}}
										@endif
										</div>
								</div>
							</div>
							@endforeach

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