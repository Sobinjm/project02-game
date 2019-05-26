<div class="youplay-banner banner-top youplay-banner-parallax small">
        <div class="image" style="background-image: url('assets/images/game-diablo-iii-1400x656.jpg')">
        </div>
  
        <div class="youplay-user-navigation">
          <div class="container">
            <ul>
              {{-- <li><a href="user-activity.html">Activity</a>
              </li> --}}
              <li class="active"><a href="/profile">Profile</a>
              </li>
              <li><a href="/user-status">Game Status <span class="badge">6</span></a>
              </li>
              {{-- <li><a href="user-messages.html">Messages <span class="badge">6</span></a>
              </li> --}}
              <li><a href="user-settings">Settings</a>
              </li>
            </ul>
          </div>
        </div>
  
        <div class="info">
          <div>
            <div class="container youplay-user">
                    {{-- <a href="assets/images/user-photo.jpg" class="angled-img image-popup"> --}}
              <a href="#!" class="angled-img ">
                <div class="img">
                <img src="images/user/{{auth::user()->userImage}}" alt="">
                </div>
                <i class="fa fa-search-plus icon"></i>
              </a>
              <!--
                  -->
              <div class="user-data">
                <h2>{{auth::user()->username}}</h2>
                <div class="location"><i class="fa fa-map-marker"></i> {{auth::user()->city}}s</div>
                <div class="activity">
                  <div>
                    <div class="num">0</div>
                    <div class="title">Posts</div>
                  </div>
                  <div>
                    <div class="num">0</div>
                    <div class="title">Games</div>
                  </div>
                  <div>
                    <div class="num">0</div>
                    <div class="title">Followers</div>
                  </div>
                </div>
              </div>
            </div>
  
            {{-- <div class="container mt-20">
              <a href="#!" class="btn btn-sm btn-default ml-0">Add Friend</a>
              <a href="#!" class="btn btn-sm btn-default">Private Message</a>
            </div> --}}
          </div>
        </div>
      </div>
      <!-- /Banner -->
  
      <div class="container youplay-content">
  
        <div class="row">
  
          <div class="col-md-9">
  
            <h3 class="mt-0 mb-20">{{auth::user()->username}}</h3>
  
            <h3 class="mt-40 mb-20">Contact Information</h3>
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <td style="width: 200px;">
                    <p>Current City</p>
                  </td>
                  <td>
                    <p><a href="#">{{auth::user()->city}}</a>
                    </p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>Mobile</p>
                  </td>
                  <td>
                    <p>+91- {{auth::user()->mobile}} @if(auth::user()->mobile_status==0)
                                                          <a href="/mob_verify/{{auth::user()->id}}"><i class="fa fa-warning" style="color:red"></i></a> 
                                                          @else
                                                         <i class="fa fa-check-circle-o" style="color:green"></i>
                                                          @endif  
                    </td></p>
                </tr>
                <tr>
                  <td>
                    <p>Email</p>
                  </td>
                  <td>
                    <p><a href="#">{{auth::user()->email}}</a>
                    </p>
                  </td>
                </tr>
               
              </tbody>
            </table>
  
            <h3 class="mt-40 mb-20">Personal Information</h3>
            <table class="table table-bordered">
              <tbody>
               
                
                <tr>
                  <td>
                    <p>About Me</p>
                  </td>
                  <td>
                    <p>{{auth::user()->aboutMe}}</p>
  
                    {{-- <p>Vel <strong>class</strong> lectus auctor interdum. Mi <strong>nec</strong> senectus commodo sed suscipit vitae parturient, risus vivamus quisque dolor aliquet amet. Etiam penatibus nascetur netus. Non leo eu vitae sem laoreet. Varius in
                      augue. Mollis convallis.</p> --}}
                  </td>
                </tr>
              </tbody>
            </table>
  
          </div>
  
          <!-- Left Side -->
          <div class="col-md-3">
            <div class="side-block">
              <h4 class="block-title">About</h4>
              <div class="block-content">
                Ecce dabo Pinkman Isai OK? Sicut locutus est tibi, et datus est, et hic sine Semper consequat volumus ... et ille in urbe ista licet? Et infernus, ubi tu non Virginiae ornare vel ipsum. Ut enim Albuquerque et ille eum iure hic, et ego ducam te ad iustitiam.
              </div>
            </div>
            <div class="side-block">
              <h4 class="block-title">Location</h4>
              <div class="block-content pt-5">
                <div class="responsive-embed responsive-embed-16x9">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423284.59051352815!2d-118.41173249999999!3d34.0204989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2z0JvQvtGBLdCQ0L3QtNC20LXQu9C10YEsINCa0LDQu9C40YTQvtGA0L3QuNGPLCDQodCo0JA!5e0!3m2!1sru!2sru!4v1430158354122"
                  width="600" height="450"></iframe>
                </div>
              </div>
            </div>
          </div>
          <!-- Left Side -->
  
        </div>
      </div>
      
  
  