@extends('layout.layout')
<link rel="stylesheet" href="{{asset('storage/css/imageslider.min.css')}}" type="text/css">
@section('content')
<div class="row">
    <div class="col-md-12">
      <div id="mdb-lightbox-ui">
        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="pswp__bg"></div>
            <div class="pswp__scroll-wrap">
                <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
                <!-- don't modify these 3 pswp__item elements, data is added later on. -->
                <div class="pswp__container" style="transform: translate3d(0px, 0px, 0px);">
                    <div class="pswp__item" style="display: block; transform: translate3d(-2131px, 0px, 0px);"><div class="pswp__zoom-wrap" style="transform: translate3d(676px, 44px, 0px) scale(1);"><img class="pswp__img" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(104).jpg" style="opacity: 1; width: 552px; height: 368px;"></div></div>
                    <div class="pswp__item" style="transform: translate3d(0px, 0px, 0px);"><div class="pswp__zoom-wrap" style="transform: translate3d(385.172px, 96.0313px, 0px) scale(0.687941);"><img class="pswp__img pswp__img--placeholder" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(45).jpg" style="width: 552px; height: 368px; display: none;"><img class="pswp__img" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(45).jpg" style="display: block; width: 552px; height: 368px;"></div></div>
                    <div class="pswp__item" style="display: block; transform: translate3d(2131px, 0px, 0px);"><div class="pswp__zoom-wrap" style="transform: translate3d(676px, 44px, 0px) scale(1);"><img class="pswp__img" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(122).jpg" style="opacity: 1; width: 552px; height: 368px;"></div></div>
                </div>
                <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                <div class="pswp__ui pswp__ui--fit pswp__ui--hidden">
                    <div class="pswp__top-bar">
                        <!--  Controls are self-explanatory. Order can be changed. -->
                        <div class="pswp__counter">4 / 9</div>       
                        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>       
                        <!--<button class="pswp__button pswp__button--share" title="Share"></button>-->        
                        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>       
                        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button> 
                        <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                        <!-- element will get class pswp__preloader--active when preloader is running -->
                        <div class="pswp__preloader">
                            <div class="pswp__preloader__icn">
                                <div class="pswp__preloader__cut">
                                    <div class="pswp__preloader__donut"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                    <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                    <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
                    </div>
                </div>
            </div>
        </div>
      </div>
  
      <div class="mdb-lightbox no-margin">
        @foreach ($images as $image)
            <figure class="col-md-4">
                <a class="black-text" href="{{$image->realimage_url}}" data-size="1600x1067">
                <img alt="picture" src="{{$image->realimage_url}}"
                    class="img-fluid">
                <h3 class="text-center my-3">{{$image->title}}</h3>
                </a>
            </figure>
        @endforeach
      </div>
    </div>
  </div>
  <script>
    //   $(function () {
    //     $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
    //   });
  </script>
@endsection