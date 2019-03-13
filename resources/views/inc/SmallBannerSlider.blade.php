
    <!-- Images With Text -->
    <div class="youplay-carousel" data-autoplay="5000">
            @foreach ($poster as $poster)
            <?php

    
            $dirname = "images/poster/smallbanner/".$poster['galleryId']."/";
            $images = glob($dirname."*.jpg");
           
           ?>

           @foreach ($images as $image)
               
        <a class="angled-img" href="/match-details/{{$poster['id']}}">
          <div class="img">
            <img src="{{ asset($image) }}" alt="">
          </div>
          <div class="over-info">
            <div>
              <div>
                <h4>{{ $poster['m_title'] }}</h4>
                <div class="rating">
                    {{$poster['m_day']}}
                  {{-- <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i> --}}
                </div>
              </div>
            </div>
          </div>
        </a>
        @endforeach
        @endforeach

      </div>
      <!-- /Images With Text -->