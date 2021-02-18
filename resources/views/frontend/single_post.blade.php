@extends('frontend.home_master')
@section('content')


<!-- single-page-start -->
	
<section class="single-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">   
                   <li><a href="#"><i class="fa fa-home"></i></a></li>					   
                   @if (session()->get('lang') == 'mkd')
                       <li><a href="#">{{ $post->category_mk }}</a></li>
                   @else
                       <li><a href="#">{{ $post->category_en }}</a></li>
                   @endif
        
                   @if (session()->get('lang') == 'mkd')
                    <li><a href="#">{{ $post->subcategory_mk }}</a></li>
                    @else
                    <li><a href="#">{{ $post->subcategory_en }}</a></li>
                    @endif

                
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12"> 											
                <header class="headline-header margin-bottom-10">
                    @if (session()->get('lang') == 'mkd')
                    <h1 class="headline">{{ $post->title_mk }}</h1>
                    @else
                    <h1 class="headline">{{ $post->title_en }}</h1>
                    @endif
                </header>
     
     
             <div class="article-info margin-bottom-20">
              <div class="row">
                    <div class="col-md-6 col-sm-6"> 
                     <ul class="list-inline">
                     
                     
                     <li>{{ $post->name }}</li>     <li><i class="fa fa-clock-o"></i> {{ $post->post_date }}</li>
                     </ul>
                    
                    </div>
                    <div class="col-md-6 col-sm-6 pull-right"> 						
                        <ul class="social-nav">
                            <div class="sharethis-inline-share-buttons"></div>
                        </ul>						   
                    </div>						
                </div>				 
             </div>				
        </div>
      </div>
      <!-- ******** -->

@php
    $relatedposts = DB::table('posts')->where('category_id', $post->category_id)->orderBy('id', 'desc')->limit(3)->get();
@endphp

      <div class="row">
        <div class="col-md-8 col-sm-8">
            <div class="single-news">
                <img src="{{ asset($post->image) }}" alt="" />

                @if (session()->get('lang') == 'mkd')
                <h4 class="caption">{{ $post->title_mk }}</h4>
                @else
                <h4 class="caption">{{ $post->title_en }}</h4>
                @endif

                @if (session()->get('lang') == 'mkd')
                <p>{!! $post->description_mk !!}</p>
                @else
                <p>{!! $post->description_en !!}</p>
                @endif
            </div>
            <!-- ********* -->
            <div class="row">
                <div class="col-md-12"><h2 class="heading">
                    @if (session()->get('lang') == 'mkd')
                        Related News MK
                    @else
                        Related News En                    
                    @endif
                </h2></div>
               
                @foreach ($relatedposts as $relatedpost)
                    
                <div class="col-md-4 col-sm-4">
                    <div class="top-news sng-border-btm">
                        <a href="{{ route('view.post', [$relatedpost->id]) }}"><img src="{{ asset($relatedpost->image) }}" alt="Notebook"></a>
                        <h4 class="heading-02"><a href="#">
                            @if (session()->get('lang') == 'mkd')
                            {{ $relatedpost->title_mk }}
                            @else
                            {{ $relatedpost->title_en }}                    
                            @endif
                        </a> </h4>
                    </div>
                </div>
                @endforeach



            </div>
        </div>

        @php
            	$horizontal = DB::table('ads')->where('type', 1)->skip(1)->first();

        @endphp

        <div class="col-md-4 col-sm-4">
            <!-- add-start -->	
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="sidebar-add"><img src="{{ asset($horizontal->ads) }}" alt="" /></div>
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
                        <div class="sidebar-add"><img src="{{ asset($horizontal->ads) }}" alt="" /></div>
                    </div>
                </div><!-- /.add-close -->
        </div>
      </div>
    </div>
</section>







@endsection