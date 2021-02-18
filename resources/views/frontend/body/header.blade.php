@php

    $categories = DB::table('categories')->orderBy('id', 'ASC')->get();
    $social = DB::table('socials')->first();

    $horizontal = DB::table('ads')->where('type', 2)->first();

	$websitesetting = DB::table('websitesettings')->first();

    
@endphp

<section class="hdr_section" style="background-color: rgb(145, 53, 53)">
    <div class="container-fluid">			
        <div class="row">
            <div class="col-xs-6 col-md-2 col-sm-4">
                <div class="header_logo">
                    <a href="/"><img src="{{ asset($websitesetting->logo)}}"></a> 
                </div>
            </div>              
            <div class="col-xs-6 col-md-8 col-sm-8">
                <div id="menu-area" class="menu_area" >
                    <div class="menu_bottom" style="background-color: rgb(145, 53, 53)">
                        <nav role="navigation" class="navbar navbar-default mainmenu" >
                    <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header" >
                                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <!-- Collection of nav links and other content for toggling -->
                            <div id="navbarCollapse" class="collapse navbar-collapse" style="background-color: rgb(145, 53, 53)">
                                <ul class="nav navbar-nav">
                                    <li><a href="/">HOME</a></li>

                                    @foreach ($categories as $category)
                                    @php
                                        $subcategories = DB::table('sub_categories')
                                        ->where('category_id', $category->id)
                                        ->orderBy('id', 'ASC')->get();
                                    @endphp
                                    <li class="dropdown">
                                        <a href="{{ route('post.category', [$category->id, $category->category_en]) }}">
                                            @if (session()->get('lang') == 'mkd')
                                                {{ $category->category_mk }}
                                            @else
                                                {{ $category->category_en }}
                                            @endif
                                            <b class="caret"></b></a>
                                        <ul class="dropdown-menu" style="background-color: white" >
                                            @foreach ($subcategories as $subcategory)
                                            <li  ><a style="color: black" href="{{ route('post.subcategory', [$subcategory->id, $subcategory->subcategory_en]) }}">
                                                @if (session()->get('lang') == 'mkd')
                                                {{ $subcategory->subcategory_mk }}
                                                @else
                                                {{ $subcategory->subcategory_en }}
                                                @endif
                                            </a></li>
                                            @endforeach

                                        </ul>
                                    </li>
                                    @endforeach
                                </ul>

                            </div>
                        </nav>											
                    </div>
                </div>					
            </div> 
            <div class="col-xs-12 col-md-2 col-sm-12">
                <div class="header-icon">
                    <ul>

                        <!-- version-start -->
                        @if (session()->get('lang') == 'mkd')
                            <li class="version" ><a href="{{ route('language.english') }}"><B style="color:black">ENGLISH</B></a></li>&nbsp;&nbsp;&nbsp;
                        @else
                            <li class="version"><a href="{{ route('language.mkd') }}"><B style="color:black">MKD</B></a></li>&nbsp;&nbsp;&nbsp;
                        @endif

                        <!-- login-start -->
                    
                        <!-- search-start -->
                        <li><div class="search-large-divice">
                            <div class="search-icon-holder"> <a href="#" class="search-icon" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-search" aria-hidden="true"></i></a>
                                <div class="modal fade bd-example-modal-lg" action="@php echo url( '/' ); @endphp" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <i class="fa fa-times-circle" aria-hidden="true"></i> </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="custom-search-input">
                                                            <form>
                                                                <div class="input-group">
                                                                    <input class="search form-control input-lg" placeholder="search" value="Type Here.." type="text">
                                                                    <span class="input-group-btn">
                                                                    <button class="btn btn-lg" type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                                                                </span> </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></li>
                        <!-- social-start -->
                        <li>
                            <div class="dropdown">
                              <button class="dropbtn-02"><i class="fa fa-thumbs-up" aria-hidden="true"></i></button>
                              <div class="dropdown-content">
                                <a href="{{ $social->facebook }}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
                                <a href="{{ $social->facebook }}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>
                                <a href="{{ $social->facebook }}" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i> Youtube</a>
                                <a href="{{ $social->facebook }}" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a>
                              </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!-- /.header-close -->

<!-- top-add-start -->
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                <div class="top-add">
                    @if ($horizontal == NULL)
                    @else
                    <a href="{{$horizontal->link }}"><img src="{{ asset($horizontal->ads)}}" alt="" /></a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section> <!-- /.top-add-close -->

<!-- date-start -->

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="date">
                    <ul>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>  Prilep </li>
                        <li><i class="fa fa-calendar" aria-hidden="true"></i>  Friday, 19th Fevruary 2021 </li>
                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> Update 1 day ago </li>
                    </ul>
                    
                </div>
            </div>
        </div>
    </div>
</section><!-- /.date-close -->  

<!-- notice-start -->
 @php
     $headline = DB::table('posts')->where('posts.headline', 1)->orderBy('id', 'DESC')->limit(3)->get();
 @endphp
<section>
    <div class="container-fluid" >
        <div class="row scroll">
            @if (session()->get('lang') == 'mkd')
                <div class="col-md-2 col-sm-3 scroll_01 " style="background-color: rgb(145, 53, 53)">Актуелни вести :</div>
            @else
                <div class="col-md-2 col-sm-3 scroll_01 " style="background-color: rgb(145, 53, 53)">Breaking News :</div>
            @endif

            <div class="col-md-10 col-sm-9 scroll_02">
                <marquee>
                    @foreach ($headline as $line)
                        @if (session()->get('lang') == 'mkd')
                        *    {{ $line->title_mk }}
                        @else
                        *    {{ $line->title_en }}
                        @endif
                    @endforeach
                </marquee>
            </div>
        </div>
    </div>
</section>


    @php
     $notices = DB::table('notices')->orderBy('id', 'DESC')->first();
 @endphp

 @if ($notices->status == 1)
   
 <section>
     <div class="container-fluid">
        <div class="row scroll">
            @if (session()->get('lang') == 'mkd')
            <div class="col-md-2 col-sm-3 scroll_01" style="background-color: green">Notice MK :</div>
            @else
            <div class="col-md-2 col-sm-3 scroll_01" style="background-color: green">Notice EN:</div>
            @endif
            
            <div class="col-md-10 col-sm-9 scroll_02">
                <marquee>
                    @if (session()->get('lang') == 'mkd')
                    *    {{ $notices->notice }}
                    @else
                    *    {{ $notices->notice }}
                    @endif
                </marquee>
            </div>
        </div>
    </div>
</section>
     
@endif
