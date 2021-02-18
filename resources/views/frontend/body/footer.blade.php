@php
    
$websitesetting = DB::table('websitesettings')->first();
@endphp

<section>
    <div class="container-fluid">
        <div class="top-footer">
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <div class="foot-logo">
                        <img src="{{ asset($websitesetting->logo)}}" style="height: 50px;" />
                    </div>
                </div>
                <div class="col-md-6 col-sm-4">
                     <div class="social">
                        <ul>
                            <li><a href="" target="_blank" class="facebook"> <i class="fa fa-facebook"></i></a></li>
                            <li><a href="" target="_blank" class="twitter"> <i class="fa fa-twitter"></i></a></li>
                            <li><a href="" target="_blank" class="instagram"> <i class="fa fa-instagram"></i></a></li>
                            <li><a href="" target="_blank" class="android"> <i class="fa fa-android"></i></a></li>
                            <li><a href="" target="_blank" class="linkedin"> <i class="fa fa-linkedin"></i></a></li>
                            <li><a href="" target="_blank" class="youtube"> <i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="apps-img">
                        <ul>
                            <li><a href="#"><img src="{{ asset('frontend/img/apps-01.png')}}" alt="" /></a></li>
                            <li><a href="#"><img src="{{ asset('frontend/img/apps-02.png')}}" alt="" /></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- /.top-footer-close -->

@php
    $websitesetting = DB::table('websitesettings')->first()
@endphp
<!-- middle-footer-start -->	
<section class="middle-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="editor-one">
                    @if (session()->get('lang') == 'mkd')
                    Адреса на компанијата 
                    <br>
                        {{ $websitesetting->address_mk}}
                    @else
                    Company Address
                    <br>
                        {{ $websitesetting->address_en}}
                    @endif
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="editor-two">
                    @if (session()->get('lang') == 'mkd')
                    Телефонски број
                    <br>
                        {{ $websitesetting->phone_mk}}
                    @else
                    Company Phone
                    <br>
                        {{ $websitesetting->phone_en}}
                    @endif                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="editor-three">
                    @if (session()->get('lang') == 'mkd')
                    Емаил
                    <br>
                        {{ $websitesetting->email}}
                    @else
                    Company Email
                    <br>
                        {{ $websitesetting->email}}
                    @endif    
                </div>
            </div>
        </div>
    </div>
</section><!-- /.middle-footer-close -->

<!-- bottom-footer-start -->	
<section class="bottom-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="copyright">	
                    
                    @if (session()->get('lang') == 'mkd')
                    Сите права се задржани © 2021 @jbogoeski
                    @else
                    All rights reserved © 2021 @jbogoeski
                    @endif  
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="btm-foot-menu">
                    <ul>
                        @if (session()->get('lang') == 'mkd')
                        <li><a href="#">За Нас</a></li>
                        <li><a href="#">Контактирајте не</a></li>
                        @else
                        <li><a href="#">About US</a></li>
                        <li><a href="#">Contact US</a></li>
                        @endif 
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
