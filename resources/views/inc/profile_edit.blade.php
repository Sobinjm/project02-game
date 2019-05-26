 <div class="youplay-banner banner-top youplay-banner-parallax small">
      <div class="image" style="background-image: url('assets/images/game-diablo-iii-1400x656.jpg')">
      </div>

      <div class="youplay-user-navigation">
        <div class="container">
          <ul>
            <li><a href="/profile">Profile</a>
            </li>
            <li><a href="/user-status">Game Status <span class="badge">6</span></a>
            </li>
            <li class="active"><a href="/user-settings">Settings</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="info">
        <div>
          <div class="container youplay-user">
            <a href="images/user/{{auth::user()->userImage}}" class="angled-img image-popup">
              <div class="img">
                <img src="images/user/{{auth::user()->userImage}}" alt="">
              </div>
              <i class="fa fa-search-plus icon"></i>
            </a>
            <!--
                -->
            <div class="user-data">
              <h2>John Doe</h2>
              <div class="location"><i class="fa fa-map-marker"></i> Los Angeles</div>
              <div class="activity">
                <div>
                  <div class="num">69</div>
                  <div class="title">Posts</div>
                </div>
                <div>
                  <div class="num">12</div>
                  <div class="title">Games</div>
                </div>
                <div>
                  <div class="num">689</div>
                  <div class="title">Followers</div>
                </div>
              </div>
            </div>
          </div>

          <div class="container mt-20">
            <a href="#!" class="btn btn-sm btn-default ml-0">Add Friend</a>
            <a href="#!" class="btn btn-sm btn-default">Private Message</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /Banner -->

    <div class="container youplay-content">

      <div class="row">

        <div class="col-md-9">

          {{-- <ul class="pagination pagination-sm mt-0">
            <li class="active">
              <a href="#">General</a>
            </li>
            <li>
              <a href="#">Security</a>
            </li>
            <li>
              <a href="#">Privacy</a>
            </li>
            <li>
              <a href="#">Notifications</a>
            </li>s
          </ul> --}}
          <form id="form1" action="user/update"  enctype="multipart/form-data"  method="POST">
            @csrf
              <h3>Update Your Profile</h3>
              <div class="container youplay-user">
                  <div class="angled-img ">
                    <div class="img">
                      <img src="images/user/{{auth::user()->userImage}}" alt="" id="blah" >
                    </div>
                  
                  </div>
                
                  <div class="user-data">
                      <input type='file' id="imgInp" name="profile" />
                   
                </div>
              </div>
      
                <h3>Date of Birth</h3>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="cur_password">Select your data birth:</label>
                    <div class="col-sm-10">
                      <div class="youplay-input">
                      <input type="date" id="dob" name="dob" required value="{{auth::user()->dob}}">
                      </div>
                    </div>
                  </div>

                  <h3>City</h3>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="cur_password">Enter Your City</label>
                    <div class="col-sm-10">
                      <div class="youplay-input">
                        <input type="text" id="city" name="city" required value="{{auth::user()->city}}">
                      </div>
                    </div>
                  </div>

                  <h3>Country</h3>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="cur_password">Enter Your Contry</label>
                    <div class="col-sm-10">
                      <div class="youplay-input">
                        <input type="text" id="country" name="country" required value="{{auth::user()->country}}">
                      </div>
                    </div>
                  </div>

                  <h3>About Me</h3>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="cur_password">Abut Me</label>
                    <div class="col-sm-10">
                      <div class="youplay-input">
                        <textarea id="" cols="30" rows="10" name="aboutme">{{auth::user()->aboutMe}}</textarea>
                       
                      </div>
                    </div>
                  </div>
            
              <input type="hidden" value="1" name="status">
                <input type="hidden" value="{{auth::user()->id}}" name="id">
                <div class="form-group" >
                    <div >
                      <button type="submit" name="update" class="btn btn-succes">update</button>
                     
                    </div>
                  </div>
          </form>
          <script src="http://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous">
</script>
          <script>
             function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#imgInp").change(function(){
        readURL(this);
    });
          </script>
         

        </div>

        <!-- Right Side -->
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
        <!-- Right Side -->

      </div>

    </div>
  </div>
</div>
