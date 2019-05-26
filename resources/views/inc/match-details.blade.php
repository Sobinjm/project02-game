

    <!-- Banner -->


    
<?php
$dirname = "images/poster/banner/".$details['galleryId']."/";
$images = glob($dirname."*.jpg");

$dirname = "images/poster/smallbanner/".$details['galleryId']."/";
$subimages = glob($dirname."*.jpg");


?>
   
  
    
  
    <div class="youplay-banner banner-top youplay-banner-parallax xsmall">
        
    <div class="image" style="background-image: url({{asset($images[0])}})">
      </div>

      <div class="info">
        <div>
          <div class="container">
          <h2>{{$details['m_title']}}</h2>
          <span class="btn ">Entrol Now <!--<br> Reaper of Souls --></span>
          </div>
        </div>
      </div>
    </div>
    <!-- /Banner -->


    <div class="container youplay-news youplay-post">

      <div class="col-md-9">
        <!-- Post Info -->
        <article class="news-one">

          <!-- Post Text -->
          <div class="description">
              <span class="">
            <a href="http://www.youtube.com/watch?v=1nKW9kTjsps" class="angled-img pull-left video-popup">
              <div class="img">
                <img src="{{asset($subimages[0])}}" alt="">
              </div>
              <i class="fa fa-play icon"></i> 
           </a>
        </span>
        <h2>{{$details['m_title']}}</h2>
            <p>
              {{$details['description']}}
            </p><br/><br/><br/>

            {{-- <p>
              Ludum mutavit. Verbum est ex. Et ... sunt occidat. Videtur quod est super omne oppidum. Quis transfretavit tu iratus es contudit cranium cum dolor apparatus. Qui curis! Modo nobis certamen est, qui non credunt at.
            </p>

            <p>
              Nonne vides quid sit? Tu es ... Jesse me respice. Tu ... blowfish sunt. A blowfish! Cogitare. Statura pusillus, nec sapientium panem, nec artificum. Sed predators facile prædam blowfish secretum telum non se habet. Non ille? Quid faciam blowfish, Isai.
              Blowfish quid faciat? In blowfish inflat, purus?
            </p>

            <p>
              Blowfish librantur in se quatuor, quinquies maior quam normalis, et quare? Quare id faciam? Ut terrorem facit, qui quid. Terrent! Ut alter, scarier pisces agminis off. Et quod tu es? Vos blowfish. Tu iustus in omnibus visio. Vides ... suus ' suus 'non
              aliud aerem. Nunc ... qui cum partibus blowfish Isai? Tu damnare ius. Vos blowfish. Dicere iterum. Dicere illam quasi velis eam. Es BLOWFISH!
            </p>

            <p>
              Ut sibi fuerat socius sagittis. Ego intervenerit. Vere quia a te nuper iratus occidit illos undecim annorum puer. Deinde, si hoc forte qui fuit imperavit.
            </p> --}}
          </div>
        </article>
          <!-- /Post Text -->
       
          <!-- Review Rating -->
          <div class="youplay-review-rating">
            <div class="row">
              {{-- <div class="col-md-4">
                <div class="youplay-hexagon-rating" data-max="10" title="9.1 out of 10"><span>9.1</span>
                </div>
              </div> --}}
              <div class="col-md-4">
                <h3 class="mt-0">Price</h3>
                <ul>
                  {{-- <li><i class="fa fa-plus-circle"></i> First Price
                    500 Rs.</li>
                  <li><i class="fa fa-plus-circle"></i>Second Price
                    300 Rs.</li>
                  <li><i class="fa fa-plus-circle"></i> Third Price
                    150 Rs.</li> --}}

                    {!!$details['rules']!!}
                  {{-- <li><i class="fa fa-plus-circle"></i> Creature/Boss design</li> --}}
                </ul>
              </div>
              <div class="col-md-8">



                <h3 class="mt-0">Terms & Conditions</h3>
                <ul>
                  <li><i class="fa fa-check"></i> Match will be played in Map- erangel.</li>
                  <li><i class="fa fa-check"></i> Using any kind of Hacks or scripting is not allowed if we see you using any hack we will be Ban your account right away.</li>
                  <li><i class="fa fa-check"></i>  Winner will be selected based on your team rankings.</li>
                  <li><i class="fa fa-check"></i> Match will be played in tpp mode.</li>
                </ul>
              </div>
            </div>
          </div>
          <!-- /Review Rating -->

          <!-- Post Tags -->
          {{-- <div class="tags">
            <i class="fa fa-tags"></i>  <a href="#">Bloodborne</a>, <a href="#">first try</a>, <a href="#">first boss problem</a>, <a href="#">newbie game</a>
          </div> --}}
          <!-- /Post Tags -->

          <!-- Post Meta -->
          {{-- <div class="meta">
            <div class="item">
              <i class="fa fa-user meta-icon"></i>
              Author <a href="#!">nK</a>
            </div>
            <div class="item">
              <i class="fa fa-calendar meta-icon"></i>
              Published <a href="#!">Today</a>
            </div>
            <div class="item">
              <i class="fa fa-bookmark meta-icon"></i>
              Categories <a href="#!">First Try</a>
            </div>
            <div class="item">
              <i class="fa fa-eye meta-icon"></i>
              Views 384
            </div>
            <div class="item">
              <a href="#"><i class="fa fa-heart"></i> 27</a>
            </div>
          </div> --}}
          <!-- /Post Meta -->

          <!-- Post Share -->
          {{-- <div class="btn-group social-list social-likes" data-counters="no">
            <span class="btn btn-default facebook" title="Share link on Facebook"></span>
            <span class="btn btn-default twitter" title="Share link on Twitter"></span>
            <span class="btn btn-default plusone" title="Share link on Google+"></span>
            <span class="btn btn-default pinterest" title="Share image on Pinterest" data-media=""></span>
            <span class="btn btn-default vkontakte" title="Share link on VK"></span>
          </div> --}}
          <!-- /Post Share -->
        {{-- </article> --}}
        <!-- /Post Info -->

        <!-- Post Comments -->
        <div class="comments-block">
          <h2>Comments <small>(2)</small></h2>

          <!-- Comments List -->
          <ul class="comments-list">
            <!-- Kristen Bradley comment -->
            <li>
              <article>
                <div class="comment-avatar pull-left">
                  <img src="assets/images/avatar-user-1.png" alt="">
                </div>
                <div class="comment-cont clearfix">
                  <a class="comment-author h4" href="#!">Kristen Bradley</a>
                  <div class="date">
                    <i class="fa fa-calendar"></i> 25 minutes ago
                    <a href="#!" class="pull-right"><i class="fa fa-reply"></i> Reply</a>
                  </div>
                  <div class="comment-text">
                    Ludum mutavit. Verbum est ex. Et ... sunt occidat. Videtur quod est super omne oppidum. Quis transfretavit tu iratus es contudit cranium cum dolor apparatus. Qui curis! Modo nobis certamen est, qui non credunt at.
                  </div>
                </div>
              </article>

              <ul class="child-comment">
                <!-- Mike Pearson comment -->
                <li>
                  <article>
                    <div class="comment-avatar pull-left">
                      <img src="assets/images/avatar.png" alt="">
                    </div>
                    <div class="comment-cont clearfix">
                      <a class="comment-author h4" href="#!">Mike Pearson</a>
                      <div class="date">
                        <i class="fa fa-calendar"></i> 5 minutes ago
                        <a href="#!" class="pull-right"><i class="fa fa-reply"></i> Reply</a>
                      </div>
                      <div class="comment-text">
                        Yeah!
                      </div>
                    </div>
                  </article>
                </li>
                <!-- /Mike Pearson comment -->
              </ul>
            </li>
            <!-- /Kristen Bradley comment -->
          </ul>
          <!-- /Comments List -->

          <h2>Leave a Reply</h2>
          <!-- Comment Form -->
          <form action="#!" class="comment-form">
            <div class="comment-cont clearfix">
              <div class="youplay-input">
                <input type="text" name="username" placeholder="Your Name *">
              </div>
              <div class="youplay-input">
                <input type="email" name="email" placeholder="Your Email *">
              </div>
              <div class="youplay-textarea">
                <textarea name="message" rows="5" placeholder="Your Comment..."></textarea>
              </div>
              <button class="btn btn-default pull-right">Submit</button>
            </div>
          </form>
          <!-- /Comment Form -->
        </div>
        <!-- /Post Comments -->
      </div>
      <!-- Right Side -->
      <div class="col-md-3">

        <!-- Side Search -->
        <div class="side-block">
          <p>Search by News:</p>
          <form action="http://html.nkdev.info/youplay/dark/search.html">
            <div class="youplay-input">
              <input type="text" name="search" placeholder="enter search term">
            </div>
          </form>
        </div>
        <!-- /Side Search -->
      </div>


   </div>

            