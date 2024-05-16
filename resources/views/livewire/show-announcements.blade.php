<div>

    <div class="container">
        <div class="row">
            <div class="col-2 d-none d-lg-inline mt-5 mb-3">
                <a href="{{url()->previous()}}" class="btn bottone_indietro">← {{__('ui.back')}}</a>
            </div>
            <div class="col-12 col-lg-8 mt-5 mb-3">
                <h2 class="my_title text-center">{{__('ui.detailAnnouncement')}}</h2>
            </div>
            <div class="col-12 col-lg-8 position-relative justify-content-center mb-5">

                {{-- swiper --}}
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class=" w-75 swiper mySwiper2">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                      </div>
                      <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                      </div>
                      <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                      </div>
                      <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                      </div>
                      <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                      </div>
                      <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                      </div>
                      <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                      </div>
                      <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                      </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                  </div>
                  <div thumbsSlider="" class=" w-75 mt-2 swiper mySwiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                      </div>
                      <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                      </div>
                      <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                      </div>
                      <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                      </div>
                      <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                      </div>
                      <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                      </div>
                      <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                      </div>
                      <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                      </div>
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