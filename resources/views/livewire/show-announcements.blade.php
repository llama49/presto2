<div>

    <div class="container">
        <div class="row">
            <div class="col-6 col-lg-2 d-inline d-lg-inline mt-5 mb-3">
                <a href="{{url()->previous()}}" class="btn bottone_indietro">← {{__('ui.back')}}</a>
            </div>
            <div class="col-12 col-lg-8 mt-5 mb-3">
                <h2 class="my_title text-center">{{__('ui.detailAnnouncement')}}</h2>
            </div>
            <div class="col-12 col-lg-8 position-relative justify-content-center mb-5">

                {{-- swiper --}}
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class=" w-75 swiper mySwiper2">
                    <div class="swiper-wrapper">
                      @if (count($announcement->images))
                      @foreach ($announcement->images as $image)

                      <div class="swiper-slide">
                        <img src="{{$image->getUrl(300,300)}}"/>
                      </div>

                      @endforeach

                      @else

                      <div class="swiper-slide">
                        <img src="{{Storage::url('public/img/default-image.jpg')}}"/>
                      </div>

                    @endif

                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                  </div>
                  <div thumbsSlider="" class=" w-75 mt-2 swiper mySwiper">
                    <div class="swiper-wrapper">
                      @if (count($announcement->images))
                      @foreach ($announcement->images as $image)

                      <div class="swiper-slide">
                        <img src="{{$image->getUrl(300,300)}}"/>
                      </div>

                      @endforeach
                    @endif
                    </div>
                  </div>

            </div>
            <div class="col-12 col-lg-4 mt-5 d-flex flex-column justify-content-between">
                {{-- NOME E PREZZO --}}
                <div class="p-3">
                    <h4>{{$announcement->category->name}}</h4>
                    <hr>
                    <h2 class="fw-bold mb-5">{{$announcement->title}}</h2>
                    <p class="fs-2 mb-3">{{$announcement->price}}€</p>
                    <p class="">{{$announcement->body}}</p>
                </div>
                <div class="mb-5 p-3">
                    <p>{{__('ui.createdAt')}}: {{$announcement->created_at->format('d/m/Y')}}</p>
                    <p>{{__('ui.advertiser')}}: {{$announcement->user->name}}</p>
                </div>
            </div>
        </div>
    </div>

</div>