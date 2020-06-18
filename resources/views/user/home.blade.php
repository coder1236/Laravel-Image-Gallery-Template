@extends('layout.layout', ['page'=>'user'])

@section('content')
    <section class="mt-2 mb-5">
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
            
            <div class="images-wrapper">
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
                <div class="mdb-lightbox no-margin" id="preview_figures">
                    @foreach ($ratedimage as $image)
                    <figure class="col-md-4 auth-figure" id='figure{{ $image->id }}'>
                        <a class="black-text" href="{{$image->realimage_url}}" data-size="1600x1067">
                            <img alt="picture" src="{{$image->realimage_url}}"
                                class="img-fluid">
                            <h3 class="text-center my-3">{{$image->title}}<span class=""> Score: {{$image->scores}}</span></h3>
                        </a>
                        <div class='text-center' align="center">
                            <span class="action-button btn-delete ml-2 mt-1 popup" data-id='{{ $image->id }}'>
                                <span><i class="fas fa-minus-circle"></i>&nbsp&nbspDelete</span>
                                <div class="popuptext sharethis-inline-share-buttons share_links1"></div>
                            </span>
                        </div>
                    </figure>
                    @endforeach
                </div>
              </div>

            </div>
        </div>
    </section>
    @auth
    <!-- Upload Dialog -->
    <div class="modal fade" id="modalCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
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
                                <input type="text" class="form-control" id="title" name="title" placeholder="Image Title">
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
    @endauth

    <script>
        var swiper;
        let loaded_cnt = 0;
        let isLoading = false;
        
        $('document').ready(function(){
            $('.mdb-lightbox div > span').click(function(event){
                let id = $(this).data("id");
                let url = "{{ route('remove_image_user') }}";
                $.confirm({
                    title: 'Really?',
                    content: 'Please confirm that you will delete it.',
                    backgroundDismiss: false,
                    backgroundDismissAnimation: 'glow',
                    buttons: {
                        confirm: {
                            text: 'Ok',
                            btnClass: 'btn-primary',
                            action: function(){
                                removeImage(url, id);                                
                            }
                        },
                        cancel: {
                            text: 'Cancel',
                            btnClass: 'btn-danger',
                            keys: ['enter', 'shift']
                        }
                    }
                });
                event.preventDefault();
            });

            //Initialize Swiper
            swiper = new Swiper('.swiper-container', {
                navigation: {
                    nextEl: '.arrow-right',
                    prevEl: '.arrow-left',
                },
                preloadImages: false,
                lazy: true,
                on: {
                    slideNextTransitionEnd: function(){
                        getRandomImage(true);
                    },
                    slidePrevTransitionEnd: function(){
                        getRandomImage(false);
                    }
                }
            });

            // appendPrepareImages();

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

        });


        function appendPrepareImages(){
            swiper.prependSlide('<div class="swiper-slide prev-image bg-success"><img class="swiper-lazy" src="" alt="" width="auto" height="100%" /><div class="swiper-lazy-preloader"></div></div>');
            swiper.appendSlide('<div class="swiper-slide next-image bg-danger"><img class="swiper-lazy" src="" alt="" width="auto" height="100%" /><div class="swiper-lazy-preloader"></div></div>');
        }

        function getRandomImage(isNext){
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
                url: "{{ route('get_image_user') }}",
                data: {
                    ignored_ids:ignored_ids,
                }
            }).done(function(data){
                if(data.error){
                    $.alert({
                        title: 'Oops!',
                        content: 'There is no picture.',
                        btnClass: 'btn-success'
                    });
                }
                else{
                    if(ids !== null && ids != '')
                        ids += ','
                    ids += data.image.id;

                    localStorage.setItem("ignored_ids",ids);
                    //case of swipe next
                    if(isNext) nextSwipe(data);
                    else prevSwipe(data);//case of swipe prev
                }
            });
        }

        function nextSwipe(data){
            $('.next-image img').attr('src', data.image.realimage_url);
            $('.next-image').removeClass('bg-danger');
            $('.next-image').attr('data-id', data.image.id);
            $('.picture-title').html(data.image.title);

            var imageId = $('.primary-image').data('id');

            $('.next-image').addClass('primary-image');
            $('.next-image').removeClass('next-image');
            
            swiper.removeSlide(swiper.previousIndex);
            swiper.appendSlide('<div class="swiper-slide next-image bg-danger"><img class="swiper-lazy" src="" alt="" width="auto" height="100%" /><div class="swiper-lazy-preloader"></div></div>');
            updateScore(imageId, 1);
        }

        function prevSwipe(data){
            $('.prev-image img').attr('src', data.image.realimage_url);
            $('.prev-image').removeClass('bg-success');
            $('.prev-image').attr('data-id', data.image.id);
            $('.picture-title').html(data.image.title);

            var imageId = $('.primary-image').data('id');

            $('.prev-image').addClass('primary-image');
            $('.prev-image').removeClass('prev-image');
            swiper.removeSlide(swiper.previousIndex);
            swiper.prependSlide('<div class="swiper-slide prev-image bg-success"><img class="swiper-lazy" src="" alt="" width="auto" height="100%" /><div class="swiper-lazy-preloader"></div></div>');
            updateScore(imageId, -1);
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