
    <!-- Banner -->
    <section class="youplay-banner banner-top youplay-banner-parallax">
            <div class="image" style="background-image: url('/images/bg-6.jpg')">
            </div>
            @if(isset($login_success))
       @if(count($login_success)>=0)
      
                      <div class="alert alert-danger alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                          </button>
                            @foreach($login_success as $error)
      
                          <strong>Warning!</strong> {{$error->name}} <br>
      
      
                          @endforeach
                      </div>
      
                      @endif
                      @endif
      
      
      
                     
      
            <div class="info">
              <div>
                <div class="container">
                  <h1>{{ $matchdetails['m_title']}} <!--<br> Reaper of Souls --></h1>
                  <em>"Hungry on kill..? Supply it with the necessary."</em>
                  <br>
                  <br>
                  <br>
                  <a class="btn btn-lg" href="#!">Enroll Now</a>
                </div>
              </div>
            </div>
          </section>
          <!-- /Banner -->
      