@extends('layout.layout', ['page'=>'home'])

@section('content')
    <section class="mt-2 mb-5">
        <div class="row">
            <div class="main-picture col-xl-12 col-md-12 col-sm-12 col-12 text-center">
                <div id="container"></div>
            </div>
            @if(isset($randomimage['id']))
                <h5 class="picture-title mx-auto">{{$randomimage['title']}}</h5>
            @endif
        </div>
        
        <div class="row picture-control mb-5">
            <div class="arrow arrow-left col-xl-1 col-md-2 col-sm-2 col-2" >
                <a href="#" class="action-button">
                    <span><i class="fas fa-thumbs-down"></i></span>
                </a>
            </div>
            <div class="mx-auto col-xl-10 col-8 button -group text-center">
                <form class="upload-from" action="{{ route('ajaxImageUpload') }}" enctype="multipart/form-data" method="POST">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="file" name="image" class="custom-file-input" accept="image/*">
                </form>
                @guest
                <a href="{{ url('/auth/redirect/facebook') }}" class="btn-picture-upload action-button btn-login">
                    <span><i class="fas fa-cloud-upload-alt"></i>
                    &nbsp&nbspUpload my {{ $singular }}</span>
                </a>
                @endguest
                @auth
                <a href="{{ url('/auth/redirect/facebook') }}" class="btn-picture-upload action-button" data-toggle="modal" data-target="#modalCart">
                    <span><i class="fas fa-cloud-upload-alt"></i>
                    &nbsp&nbspUpload my {{ $singular }}</span>
                </a>
                @endauth
                <a href="#" class="action-button btn-share2 ml-2 mt-1 popup">
                    <span><i class="far fa-share-alt"></i>&nbsp&nbspShare</span>
                </a>
                <p class="btn-flag text-primary mt-3" >Flag as inappropriate</p>
            </div>
            <div class="arrow arrow-right col-xl-1 col-md-2 col-sm-2 col-2 float-right">
                <a href="#" class="action-button">
                    <span><i class="fas fa-thumbs-up"></i></span>
                </a>
            </div>
        </div>
        
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
            
            <!-- <h2 class="text-center text-primary mt-3"> Highest Rated {{ $plural }}</h2> -->
            <div class="text-center text-primary">
                <svg class="svg-text" width="90vw" height="1em" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <filter id="drop-stroke-shadow">
                            <fegaussianblur in="SourceAlpha" stddeviation="10"></fegaussianblur>
                        </filter>
                        <symbol id="stroke">
                            <text x="50%" y="67%" fill="none" stroke-width=".035em" stroke-linecap="round" stroke-linejoin="round" paint-order="stroke fill" text-anchor="middle">Highest Rated {{ $plural }}</text>
                        </symbol>
                        <symbol id="fill">
                            <text x="50%" y="60%" text-anchor="middle">Highest Rated {{ $plural }}</text>
                        </symbol>
                    </defs>
                    <g class="svg-text__shaded__stroke" stroke="#c5376d">
                        <use y="5%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroke" opacity="0.5" filter="url(#drop-stroke-shadow)"></use>
                        <use y="3%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroke"></use>
                        <use y="2%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroke"></use>
                        <use y="1%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroke"></use>
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroke" stroke="#ec528d"></use>
                    </g>
                    <g fill="#e6e6e6">
                        <use class="svg-text__shaded" y="7%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#fill"></use>
                        <use y="6.5%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#fill"></use>
                        <use y="6%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#fill"></use>
                        <use y="5.5%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#fill"></use>
                        <use y="5%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#fill"></use>
                        <use y="4.5%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#fill"></use>
                        <use y="4%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#fill"></use>
                        <use y="3.5%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#fill" fill="white"></use>
                    </g>
                </svg>
            </div>
            <div class="mdb-lightbox no-margin" id="preview_figures">
            </div>
        </div>
    </section>
    @auth
    <!-- Upload Dialog -->
    <div style="position: relative;">
    <div class="modal fade" id="modalCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true" style="z-index: 1000011">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <!--Header-->
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Upload Image</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <!--Body-->
          <div class="modal-body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                          <form class="image-upload-form" action="{{ route('ajaxImageUpload') }}" enctype="multipart/form-data" method="POST">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <!-- Material input -->
                              <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-heading"></i></div>
                                </div>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Name {{ $abbreviated }}">
                              </div>                    
                              <!-- Upload image input-->
                                <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                                    <input id="upload" type="file" name="image" class="form-control border-0">
                                    <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose file</label>
                                    <div class="input-group-append">
                                        <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                                    </div>
                                </div>

                                <!-- Uploaded image area-->
                                <div class="image-area mt-4"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
                          </form>
                    </div>
                </div>
            </div>


          </div>
          <!--Footer-->
          <div class="modal-footer">
              <a href="#" class="action-button btn-upload-image ml-2 mt-1 popup">
                  <span><i class="fas fa-cloud-upload-alt"></i>&nbsp&nbspUpload</span>
                  <div class="popuptext sharethis-inline-share-buttons share_links1"></div>
              </a>
          </div>
        </div>
      </div>
    </div>
    </div>
    @endauth

    <script>
        // let swiper;
        let loaded_cnt = 0;
        let isLoading = false;
        let imgCnt = 1040;

        var loadImage = function()
        {
            if(!! isLoading)
                return;

            isLoading = true;

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: "{{ route('get_previews') }}",
                data: {
                    loaded_cnt: loaded_cnt,
                }
            }).done(function(data){
                loaded_cnt += data.ratedimage.length;

                $("#preview_figures").append(generateFigureHtml(data.ratedimage, false));
                setTimeout(function(){isLoading = false;}, 1000);
            });
        }


        $(document).ready(function(){
            $("body").on("swiperight", ".prev-image",function(){
                swipeRight();
            });  

            $("body").on("swipeleft", ".prev-image",function(){
                swipeLeft();
            }); 

            $(window).scroll(function(){
                let cur_height = window.innerHeight + window.scrollY;
                let all_height = document.body.offsetHeight;
                let p = cur_height/all_height;
                let loaded_cnt = parseInt(localStorage.getItem("loaded_cnt"));
                loaded_cnt = isNaN(loaded_cnt) ? 0:loaded_cnt;

                if(p>0.8)
                    loadImage();
            });

            appendPrepareImages();

            $('body').on('click', '.btn-flag', function(){
                $.confirm({
                    title: 'Really?',
                    content: 'Please confirm that you believe this picture is inappropriate.',
                    backgroundDismiss: false,
                    backgroundDismissAnimation: 'glow',
                    buttons: {
                        confirm: {
                            text: 'Ok',
                            btnClass: 'btn-primary',
                            action: function(){
                                setInappropriate();
                                $('.arrow-left').click();
                            }
                        },
                        cancel: {
                            text: 'Cancel',
                            btnClass: 'btn-danger',
                            keys: ['enter', 'shift']
                        }
                    }
                });
            });
            loadImage();
        });


        let swipeRight = function() {
            let el = {};
            for (var i = 0; i < $('.prev-image').length; i++) {
              if($('.prev-image').eq(i).css("display") == "block"){
                el = $('.prev-image').eq(i);
              }
            }

            el.addClass('rotate-left').delay(700).fadeOut(1, "swing", removeSwipeItem);
            $('.prev-image').find('.status').remove();
            
            // updateScore(imageId, 1);
            let imageId = el.data("id");
            el.append('<div class="status like">Like!</div>');      
            updateScore(imageId, 1);
            getRandomImage();
            

            if ( ! el.is(':last-child')) {
              let next_width = el.next().data("img-width");
              $('#container').css('width', next_width);
              
              el.next().removeClass('rotate-left rotate-right').fadeIn(400);
            }
        }

        let swipeLeft = function() {
            let el = {};
            for (var i = 0; i < $('.prev-image').length; i++) {
              if($('.prev-image').eq(i).css("display") == "block"){
                el = $('.prev-image').eq(i);
              }
            }

            el.addClass('rotate-right').delay(700).fadeOut(1, "swing", removeSwipeItem);
            $('.prev-image').find('.status').remove();
            el.append('<div class="status dislike">Dislike!</div>');

            let imageId = el.data("id");
            updateScore(imageId, -1);
            getRandomImage();

            if ( ! el.is(':last-child') ) {
                let next_width = el.next().data("img-width");
                $('#container').css('width', next_width);

                el.next().removeClass('rotate-left rotate-right').fadeIn(400);
            }
        }

        $("body").on("click", ".arrow-left", function() {
            swipeLeft();
        });

        $("body").on("click", ".arrow-right", function() {
            swipeRight();
        });

        let setInappropriate = function()
        {
            var imageId = $('.primary-image').data('id');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: "{{ route('set_inappropriate') }}",
                data: {
                    id: imageId,
                }
            });
        }

        
        //Generate Figure
        function generateFigureHtml(data, isAuth){
            let figures = "";
            if(isAuth){
                for (var i = 0; i < data.length; i++) {
                    figures += '<figure class="col-md-4 auth-figure text-center" id="figure'+data[i].id+'"">\
                            <a class="black-text" href="'+data[i].realimage_url+'" data-size="1600x1067">\
                                <img alt="picture" src="'+data[i].realimage_url+'"\
                                    class="img-fluid">\
                                <h3 class="text-center my-3">'+data[i].title+'<br /><span class=""> Score: '+data[i].scores+'</span></h3>\
                            </a>\
                            <div class="text-center" align="center delete-wrapper">\
                                <span class="action-button btn-delete ml-2 mt-1 popup" data-id="'+data[i].id+'"">\
                                    <span><i class="fas fa-minus-circle"></i>&nbsp&nbspDelete</span>\
                                    <div class="popuptext sharethis-inline-share-buttons share_links1"></div>\
                                </span>\
                            </div>\
                        </figure>\
                    ';
                }    
            }
            else{
                for (var i = 0; i < data.length; i++) {
                    figures += '<figure class="col-md-4 auth-figure text-center" id="figure'+data[i].id+'"">\
                            <a class="black-text" href="'+data[i].realimage_url+'" data-size="1600x1067">\
                                <img alt="picture" src="'+data[i].realimage_url+'"\
                                    class="img-fluid">\
                                <h3 class="text-center my-3">'+data[i].title+'<br /><span class=""> Score: '+data[i].scores+'</span></h3>\
                            </a>\
                        </figure>\
                    ';
                }    
            }
            

            return figures;
        }


        function appendPrepareImages(){
            getRandomImage(true, getRandomImage);
        }

        function getRandomImage(readstate = true, callback=null){

            let display = ' style="z-index: ' + imgCnt + ';"';
            if($("#container .prev-image").length <= 0)
                display = ' style="display: block; z-index: ' + imgCnt + ';"';
            let id = "prev_img_"+imgCnt;
            let html = '<div class="prev-image primary-image" '+display+';" id="'+id+'" data-id="" data-score="">\
                          <div class="avatar bg-danger"  style="display:block;">\
                              <img src="{{ asset("images/default.jpg") }}"/>\
                          </div>\
                      </div>';
            imgCnt --;

            $('#container').append(html);

            ignored_ids = [];
            let ids = localStorage.getItem("ignored_ids");
            if(ids != null && ids != '')
              ignored_ids = ids.split(",");

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: "{{ route('get_image') }}",
                data: {
                    ignored_ids:ignored_ids,
                }
            }).done(function(data){
                if(data.error){
                    alert_dialog();
                }

                else{
                    if(ids !== null && ids != '')
                        ids += ','
                    ids += data.image.id;

                    localStorage.setItem("ignored_ids",ids);
                    loadSwipe(data, id);

                    if(callback != null)
                      callback(true);
                }
            });
        }

        function alert_dialog() {
            $.alert({
                title: 'Oops!',
                content: 'There is no picture.',
                btnClass: 'btn-success'
            });
        }

        function loadSwipe(data, id){

            var imageId = $('.primary-image').data('id');
            $("#"+id).data("id", data.image.id);
            $("#"+id).data("score", data.image.scores);
            $("#"+id+" img").attr("src", data.image.realimage_url);

            var theImage = new Image();
            theImage.src = data.image.realimage_url;
            theImage.onload = function() {
                var height = $("#"+id).height();
                var width = this.width * height / this.height;
                
                $("#"+id).data("img-width", width + 60);
                $("#"+id).css("width", "fit-content");
                if($("#"+id).css("display") == "block")
                    $("#container").css("width", width + 60);
            };
        }

        function removeSwipeItem(){
            $('#container .prev-image avatar:last-child').removeClass('bg-danger');
            $('#container .prev-image:first-child').remove();
        }

        function makeSlide(src){
            var html = '<div class="swiper-slide ">';
                    html += '<img class="swiper-lazy" src="'+src+'" alt="" width="auto" height="100%" />';
                    html += '<div class="swiper-lazy-preloader"></div>';
                html += '</div>';
            return html;
        }

        function updateScore(id, score){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: "{{ route('update_score') }}",
                data: {
                    id: id,
                    score: score,
                }
            });
        }
    </script>
@endsection

