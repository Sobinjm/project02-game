@php
use Carbon\Carbon;    
@endphp

<!-- Latest News -->
 <h2 class="container h1">Latest News</h2>
 <section class="youplay-news container">
   <!-- Single News Block -->

@foreach ($poster as $poster)


  
        <?php
    $matchday=$poster['m_day'];
    $date = Carbon::parse('next '.$matchday.'')->toDateString();

    $dirname = "images/poster/smallbanner/".$poster['galleryId']."/";
    $images = glob($dirname."*.jpg");
   
   ?>
    
    @foreach($images as $image) 
    
        
 
   <div class="news-one">
     <div class="row vertical-gutter">
       <div class="col-md-4">
         <a href="/match-details/{{$poster['id']}}" class="angled-img">
           <div class="img">
             <img src='{{ asset($image) }}' alt="">
           </div>
           <div class="youplay-hexagon-rating youplay-hexagon-rating-small" data-max="10" data-size="50" title="9.1 out of 10"><span>9.1</span>
           </div>
         </a>
       </div>
       <div class="col-md-8">
         <div class="clearfix">
           <h3 class="h2 pull-left m-0"><a href="/match-details/{{$poster['id']}}">{{$poster['m_title']}}</a></h3>
         <span class="date pull-right"><i class="fa fa-calendar"></i> {{$poster['m_day']}} {{$date}}</span>
         </div>
         <div class="tags">
           <i class="fa fa-tags"></i>  <a href="#">Bloodborne</a>, <a href="#">first try</a>, <a href="#">first boss problem</a>, <a href="#">newbie game</a>
         </div>
         <div class="description">
           <p>
           {{$poster['description']}}
           </p>
           {{-- <p>
            {{$poster['destribtion']}}
           </p> --}}
         </div>
        <a href="/match-details/{{$poster['id']}}" class="btn read-more pull-left">Read More</a>
       </div>
     </div>
   </div>
   <!-- /Single News Block -->
   @endforeach

   @endforeach
 </section>
 <!-- /Latest News -->