@extends('frontend.home_master')
@section('content')


	<!-- archive_page-start -->
	<section class="single_page">						
		<div class="container-fluid">											
		<div class="row">
			<div class="col-md-12">
				<div class="single_info">
					<span>
						<a href="#"><i class="fa fa-home" aria-hidden="true"></i> /
						</a>  Sub Category			
					</span>				    
				</div>
			</div>
			<div class="col-md-9 col-sm-8">				
				{{-- <div class="row">							
					<div class="col-md-8 col-sm-7">
						<div class="archive_post_sec">
							<div class="archive_img">
								<a href="#"><img src="assets/img/news.jpg" alt="Notebook"></a>
							</div>
							<div class="archive_post_height">
								<div class="archive_heading_01">
									<a href="#">Shutdown of educational institutions</a>
								</div>
								<div class="archive_dtails">
									The government has again extended the closure of educational institutions until 14 November to contain the spread of the novel coronavirus in the country. <span style="text-align:right"><a href="#">Read More...</a></span>
								</div>
							</div>
						</div>
					</div>															 					
					<div class="col-md-4 col-sm-5">									
						<div class="archive_post_sec">
							<div class="archive_img">
								<a href="#"><img src="assets/img/news.jpg" alt="Notebook"></a>
							</div>
							<div class="archive_padding">
								<div class="archive_heading_02">
									<a href=" ">Shutdown of educational institutions</a>
								</div>
							</div>
						</div>				
						<div class="archive_post_sec">
							<div class="archive_img">
								<a href="#"><img src="assets/img/news.jpg" alt="Notebook"></a>
							</div>
							<div class="archive_padding">
								<div class="archive_heading_02">
									<a href=" ">Shutdown of educational institutions</a>
								</div>
							</div>
						</div>
					</div>
				</div>				
				<div class="archive_post_sec_again">
					<div class="row">
						<div class="col-md-4 col-sm-5">
							<div class="archive_img_again">
								<a href="#"><img src="assets/img/news.jpg" alt="Notebook"></a>
							</div>
						</div>
						<div class="col-md-8 col-sm-7">
							<div class="archive_padding_again">
								<div class="archive_heading_01">
									<a href="#">Shutdown of educational institutions</a>
								</div>
								<div class="archive_dtails">
									 The government has again extended the closure of educational institutions until 14 November to contain the spread of the novel coronavirus in the country. 
								</div>
								<div class="dtails_btn"><a href="#">Read More...</a>
								</div>
							</div>
						</div>
					</div>
				</div>		
				<div class="archive_post_sec_again">
					<div class="row">
						<div class="col-md-4 col-sm-5">
							<div class="archive_img_again">
								<a href="#"><img src="assets/img/news.jpg" alt="Notebook"></a>
							</div>
						</div>
						<div class="col-md-8 col-sm-7">
							<div class="archive_padding_again">
								<div class="archive_heading_01">
									<a href="#">Shutdown of educational institutions</a>
								</div>
								<div class="archive_dtails">
									The government has again extended the closure of educational institutions until 14 November to contain the spread of the novel coronavirus in the country. 
								</div>
								<div class="dtails_btn"><a href="#">Read More...</a>
								</div>
							</div>
						</div>
					</div>
				</div>		


                 --}}
                    @foreach ($subposts as $subpost)
                    <div class="archive_post_sec_again">
                        <div class="row">
                         <div class="col-md-4 col-sm-5">
                             <div class="archive_img_again">
                                 <a href="{{ route('view.post', [$subpost->id])}}"><img src="{{ asset($subpost->image) }}" alt="Notebook"></a>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-7">
                                <div class="archive_padding_again">
                                    <div class="archive_heading_01">
                                        @if (session()->get('lang') == 'mkd')
                                        <a href="#">{{ $subpost->title_mk }}</a>
                                        </div>
                                        <div class="archive_dtails">
                                            {!! Str::limit($subpost->description_mk, 200) !!}
                                        </div>
                                        <div class="dtails_btn"><a href="#">Read More... MK</a>
                                        @else
                                        <a href="#">{{ $subpost->title_en }}</a>
                                        </div>
                                        <div class="archive_dtails">
                                            {!! Str::limit($subpost->description_en, 200) !!}
                                        </div>
                                        <div class="dtails_btn"><a href="#">Read More... EN</a>



                                        @endif
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>			
                    @endforeach
                    
                <div class="row">
					<div class="col-md-12">
                            {{ $subposts->links('pagination::bootstrap-4')}}

					</div>
				</div>	
			</div>
			<div class="col-md-3 col-sm-4">
				<!-- add-start -->	
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="sidebar-add"><img src="assets/img/add_01.jpg" alt="" /></div>
						</div>
					</div><!-- /.add-close -->
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
									<h4 class="heading-03"><a href="#">Shutdown of educational institutions</a> </h4>
								</div>
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#">Shutdown of educational institutions</a> </h4>
								</div>
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#">Shutdown of educational institutions</a> </h4>
								</div>
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#">Shutdown of educational institutions</a> </h4>
								</div>
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#">Shutdown of educational institutions</a> </h4>
								</div>
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#">Shutdown of educational institutions</a> </h4>
								</div>
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#">Shutdown of educational institutions</a> </h4>
								</div><div class="news-title-02">
									<h4 class="heading-03"><a href="#">Shutdown of educational institutions</a> </h4>
								</div><div class="news-title-02">
									<h4 class="heading-03"><a href="#">Shutdown of educational institutions</a> </h4>
								</div><div class="news-title-02">
									<h4 class="heading-03"><a href="#">Shutdown of educational institutions</a> </h4>
								</div><div class="news-title-02">
									<h4 class="heading-03"><a href="#">Shutdown of educational institutions</a> </h4>
								</div><div class="news-title-02">
									<h4 class="heading-03"><a href="#">Shutdown of educational institutions</a> </h4>
								</div><div class="news-title-02">
									<h4 class="heading-03"><a href="#">Shutdown of educational institutions</a> </h4>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tab22">
							<div class="news-titletab">
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#"> educational institutions</a> </h4>
								</div>
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#"> educational institutions</a> </h4>
								</div>
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#"> ducational institutions</a> </h4>
								</div>
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#"> educational institutions</a> </h4>
								</div>
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#"> educational institutions</a> </h4>
								</div>
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#"> educational institutions</a> </h4>
								</div>
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#"> educational institutions</a> </h4>
								</div>
							</div>                                          
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tab23">	
							<div class="news-titletab">
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#">Shutdown of educational institutions</a> </h4>
								</div>
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#">Shutdown of educational institutions</a> </h4>
								</div>
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#">Shutdown of educational institutions</a> </h4>
								</div>
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#">Shutdown of educational institutions</a> </h4>
								</div>
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#">Shutdown of educational institutions</a> </h4>
								</div>
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#">Shutdown of educational institutions</a> </h4>
								</div>
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#">Shutdown of educational institutions</a> </h4>
								</div>
							</div>						                                          
						</div>
					</div>
				</div>
				<!-- add-start -->	
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="sidebar-add"><img src="assets/img/add_01.jpg" alt="" /></div>
						</div>
					</div><!-- /.add-close -->
			</div>			
		</div>
	</div>
</section>



@endsection