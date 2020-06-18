@extends('layout.layout', ['page'=>'admin'])

@section('content')
<section class="mt-2 mb-5">
    <div class="row">
        <div class="col-xl-3 col-md-3 col-sm-3 col-3 page-left">
<!--             <div class="link_buttons">
            </div> -->

            <div class="users-wrapper">
<!--                 <div class="row inappropriated">
                    Flag as inappropriate
                    <span class="action-button btn-delete ml-2 mt-1 popup btn_del_user">
                        <span><i class="fas fa-book-dead"></i>&nbsp;&nbsp;Flag as inappropriate  </span>
                        <div class="popuptext sharethis-inline-share-buttons share_links1"></div>
                    </span>
                </div>              -->

                @foreach($users as $index => $user)
                <div class="row text-center" id="user_{{ $user['id'] }}" data-email='{{ $user["email"] }}'>
<!--                     <div class="col-xl-1 col-md-1 col-sm-1 col-1">
                        {{ $index + 1 }}
                    </div> -->

<!--                     <div class="col-xl-2 col-md-2 col-sm-2 col-2">
                        <a href="#" class="anim-button button-pink button-animation-1"><i class="fas fa-user-circle"></i></a> 
                    </div> -->
                    <div class="col-xl-7 col-md-7 col-sm-7 col-7">
                        {{ $user['name'] }}
                    </div>
                    <div class="col-xl-3 col-md-3 col-sm-3 col-3">
<!--                         <span class="action-button btn-delete ml-2 mt-1 popup btn_del_user" data-id='{{ $user["email"] }}'>
                                <span><i class="fas fa-minus-circle"></i></span>
                                <div class="popuptext sharethis-inline-share-buttons share_links1"></div>
                        </span> -->
                        <div class="box" data-userid="{{ $user['id'] }}">
                          <a href="#" class="anim-button button-pink button-animation-1"><i class="fas fa-minus-circle"></i></a> 
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-xl-9 col-md-9 col-sm-9 col-9 images-wrapper">
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
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    
    $(document).ready(function() {
        $(".users-wrapper .row").click(function() {
            let active = $(this).hasClass("active_user");
            if(active)
                return;

            $(this).addClass("active_user");
            $(this).siblings().removeClass("active_user");

            let email = $(this).data("email")
            
            let request_data = {};

            if($(this).hasClass("inappropriated"))
                request_data.inappropriated = 1;
            else
                request_data.email = email;

            showFigures(request_data);
        });

        $("body").on("click", ".btn-flaged", function() {
            request_data = {};
            request_data.inappropriated = 1;
            showFigures(request_data);
        });

        $('body').on('click', '.btn-delete', function(event){
            event.stopPropagation();
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
        });        

        $('body').on('click', '.btn-unflag', function(event){
            event.stopPropagation();

            let id = $(this).data("id");
            let url = "{{ route('unflag_image') }}";
            $.confirm({
                title: 'Really?',
                content: "Please confirm that it's appropriate.",
                backgroundDismiss: false,
                backgroundDismissAnimation: 'glow',
                buttons: {
                    confirm: {
                        text: 'Ok',
                        btnClass: 'btn-primary',
                        action: function(){
                            unflagImage(url, id);
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

        $(".users-wrapper .row .box").click(function() {
            let id = $(this).data("userid");
            $.confirm({
                title: 'Really?',
                content: 'Please confirm that you will delete this user.',
                backgroundDismiss: false,
                backgroundDismissAnimation: 'glow',
                buttons: {
                    confirm: {
                        text: 'Ok',
                        btnClass: 'btn-primary',
                        action: function(){
                            removeUser(id);
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

    function showFigures(request_data)
    {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: "{{ route('get_image_user') }}",
            data: request_data,
        }).done(function(data){
            if(data.error){
                $.alert({
                    title: 'Oops!',
                    content: 'There is no picture.',
                    btnClass: 'btn-success'
                });
            }
            else{
                if(request_data.inappropriated == undefined)
                    request_data.inappropriated = 0;
                console.log(request_data.inappropriated);
                $("#preview_figures").html(generateFigureHtml(data, true, request_data.inappropriated));
            }
        });
    }

    
    //Generate Figure
    function generateFigureHtml(data, isAuth, flaged){
        let figures = "";
        console.log(!!flaged);
        if(!! flaged) {
            for (var i = 0; i < data.length; i++) {
                figures += '<figure class="col-md-4 auth-figure text-center" id="figure'+data[i].id+'"">\
                        <a class="black-text" href="'+data[i].realimage_url+'" data-size="1600x1067">\
                            <img alt="picture" src="'+data[i].realimage_url+'"\
                                class="img-fluid">\
                            <h3 class="text-center my-3">'+data[i].title+'<span class=""> Score: '+data[i].scores+'</span></h3>\
                        </a>\
                        <div class="text-center" align="center delete-wrapper">\
                            <span class="action-button btn-unflag ml-2 mt-1 popup" data-id="'+data[i].id+'"">\
                                <span><i class="fas fa-minus-circle"></i>&nbsp&nbspUnflag</span>\
                                <div class="popuptext sharethis-inline-share-buttons share_links1"></div>\
                            </span>\
                            <span class="action-button btn-delete ml-2 mt-1 popup" data-id="'+data[i].id+'"">\
                                <span><i class="fas fa-minus-circle"></i>&nbsp&nbspDelete</span>\
                                <div class="popuptext sharethis-inline-share-buttons share_links1"></div>\
                            </span>\
                        </div>\
                    </figure>\
                ';
            }    
        } else if(isAuth) {
            for (var i = 0; i < data.length; i++) {
                figures += '<figure class="col-md-4 auth-figure text-center" id="figure'+data[i].id+'"">\
                        <a class="black-text" href="'+data[i].realimage_url+'" data-size="1600x1067">\
                            <img alt="picture" src="'+data[i].realimage_url+'"\
                                class="img-fluid">\
                            <h3 class="text-center my-3">'+data[i].title+'<span class=""> Score: '+data[i].scores+'</span></h3>\
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
                            <h3 class="text-center my-3">'+data[i].title+'<span class=""> Score: '+data[i].scores+'</span></h3>\
                        </a>\
                    </figure>\
                ';
            }    
        }
        

        return figures;
    }


    function removeUser(id)
    {
        let selector =  "#user_"+id;
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: "{{ route('remove_user') }}",
            data: {
                id: id,
            }
        }).done(function(data){
            console.log(data);
            if(data.error){
                $.alert({
                    title: 'Oops!',
                    content: 'Processing is not sucessfully.\nTry again.',
                    btnClass: 'btn-success'
                });
            }else{
                $(selector).remove();
            }
        });
    }
    function unflagImage(url, id)
        {
            let selector = '#figure'+id;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: url,
                data: {
                    id: id,
                }
            }).done(function(data){
                if(data.error){
                    $.alert({
                            title: 'Oops!',
                            content: 'There is no picture.',
                            btnClass: 'btn-success'
                        });
                }else{
                    $(selector).remove();
                }
            });
        }
</script>
@endsection
