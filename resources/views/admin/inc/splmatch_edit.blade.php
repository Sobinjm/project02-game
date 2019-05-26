<script src="http://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous">
</script>

<h1>hi</h1><div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">

            @foreach(['danger','warning','success','info'] as $msg)

            @if(Session::has('alert-'.$msg  ))

              <div class="row">
                  <div class="col-md-12">
                    
                    <div id="error">
                      <p class="alert alert-{{$msg}}"   >{{Session::get('alert-'.$msg)}}<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </p>
                    </div>
                  </div>

              </div>

            @endif

          @endforeach
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h3 class="text-center">Edit special Match</h3>

                    <div class="row">

                           
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    {{-- <h5 class="card-header">Basic Form</h5> --}}
                                    <div class="card-body">
                                            @if (count($errors) > 0)
                                            <div class="alert alert-danger">
                                              <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                              <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                              </ul>
                                            </div>
                                            @endif
                                        <form rule="form" action="/splmatch/update/{{$matchedit['id']}}" method="POST" files=true  enctype="multipart/form-data">
                                            @csrf

                                            <div class="row form-group" >
                                                <?php
                                    
                                            
                                            $dirname1 = "images/poster/splmatch/banner/".$matchedit['galleryId']."/";
                                               
                                            $images1 = glob($dirname1."*.jpg");
                                                
                                            $dirname2= "images/poster/splmatch/smallbanner/".$matchedit['galleryId']."/";
                                        
                                            $images2 = glob($dirname2."*.jpg");

                                             
                                           ?>
                                            
                                      
                                           
                                          
                                           
                                                 <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <span>Banner</span>
                                                        @if($images1==!NULL)
                                                    <div class="card">
                                                        <img class="card-img-top img-fluid" src="{{ asset($images1[0]) }}" alt="Card image cap">
                                                        <div class="card-body">

                                                         
                                                        <a href="/splmatch/image/delete/1/{{$matchedit['galleryId']}}">  <span class="btn btn-danger" >delete</span></a>  
                                                       
                                                        </div>
                                                    </div>
                                                    @endif
                                                </div>
                                           
                                              
                                           
                                                
                                                
                                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <span>SubBanner</span>
                                                        @if($images2==!NULL)
                                                    <div class="card">
                                                        <img class="card-img-top img-fluid" src="{{ asset($images2[0]) }}" alt="Card image cap">
                                                        <div class="card-body">

                                                         
                                                        <a href="/splmatch/image/delete/2/{{$matchedit['galleryId']}}">  <span class="btn btn-danger" >delete</span></a>  
                                                       
                                                        </div>
                                                    </div>
                                                    @endif
                                                </div> 
                                              
                                          
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Game Id</label>
                                            <input id="inputText3" type="text" class="form-control" name="game_id"  value="{{$matchedit['game_id']}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Match Title</label>
                                            <input id="inputText3" type="text" class="form-control" name="m_title"  value="{{$matchedit['m_title']}}">
                                            </div>
                                            <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Match Type</label>
                                                    <input id="inputText3" type="text" class="form-control" name="m_type" value="{{$matchedit['m_type']}}">
                                                </div>
                                                <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">Match Description</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{$matchedit['description']}}
                                                        </textarea>
                                                </div>
                                                <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">Match Rules</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="rules">{{$matchedit['rules']}}</textarea>
                                                </div>
                                                <div class="form-group">
                                                        <label for="inputText3" class="col-form-label">Time Zone</label>
                                                        <input id="inputText3" type="text" class="form-control" name="time_zone" value="{{$matchedit['time_zone']}}">
                                                </div>
                                                <div class="form-group">
                                                        <label for="inputText3" class="col-form-label">Prize</label>
                                                        <input id="inputText3" type="text" class="form-control" name="prize" value="{{$matchedit['prize']}}">
                                                </div>
                                                <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">Match results</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="result">{{$matchedit['result']}}</textarea>
                                                </div>
                                                <div class="form-group">
                                                        <label for="inputText3" class="col-form-label">Team Type</label>
                                                        <input id="inputText3" type="text" class="form-control" name="team_type" value="{{$matchedit['team_type']}}">
                                                </div>
                                                <div class="form-group">
                                                        <label for="inputText3" class="col-form-label">Member Type</label>
                                                        <input id="inputText3" type="text" class="form-control" name="member_type" value="{{$matchedit['member_type']}}">
                                                </div>
                                                <div class="form-group">
                                                        <label for="inputText3" class="col-form-label">Match Tag line</label>
                                                        <input id="inputText3" type="text" class="form-control" name="tagline" value="{{$matchedit['tagline']}}">
                                                </div>         
                                            <div class="form-group">
                                                <label for="inputText4" class="col-form-label">Entry Fee</label>
                                                <input id="inputText4" type="number" class="form-control" placeholder="Numbers" name="entry_fee" value="{{$matchedit['entry_fee']}}">
                                            </div>
                                            
                                            
                                            {{-- <div class="form-group">
                                                    <label for="inputText4" class="col-form-label"> Image</label>
                                                        <label for="input-select"> Match Day</label>
                                                        <select class="form-control" id="input-select" name="m_day">
                                                            <option value="{{$matchedit['m_day']}}">{{$matchedit['m_day']}}</option>


                                                            <script>
                                                            
                                                             var days = [
                                                                    'Sunday',
                                                                    'Monday',
                                                                    'Tuesday',
                                                                    'Wednesday',
                                                                    'Thursday',
                                                                    'Friday',
                                                                    'Saturday'
                                                                ];

                                                                for(var i=0 ; i< 7 ; i++ ){
                                                                    document.write("<option value='"+days[i]+"'>"+days[i]+"</option>");
                                                                }
                                                            
                                                            </script>




                                                        </select>
                                                    </div> --}}
                                                    <div class="form-group">
                                                        <label for="inputText4" class="col-form-label">Match Date</label>
                                                        <input id="inputText4" type="date" class="form-control" placeholder="Numbers" name="m_date" value="{{$matchedit['m_date']}} }}">
                                                    </div>


                                                    

                                            <div class="form-group">
                                            <label for="inputText4" class="col-form-label">Add banner</label>
                                            <div class="input-group control-group increment" >
                                                <input type="file" name="filename1" class="form-control">
                                                <div class="input-group-btn"> 
                                                  {{-- <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button> --}}
                                                </div>
                                              </div>
                                              <input type="hidden" name="galleryId" value="{{$matchedit['galleryId']}}">
                                              <div class="clone " >
                                                    <label for="inputText4" class="col-form-label">Add sub banner</label>
                                                <div class="control-group input-group" style="margin-top:10px">
                                                    
                                                  <input type="file" name="filename2" class="form-control">
                                                  <div class="input-group-btn"> 
                                                    {{-- <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button> --}}
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                                    <input id="inputText4" type="submit" class="btn btn-info" name="Add" >
                                                   
                                        </form>

                                    </div>

                                   
                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    
     
        <script>
            $(document).ready(function() {

$(".btn-success").click(function(){ 
    var html = $(".clone").html();
    $(".increment").after(html);
});

$("body").on("click",".btn-danger",function(){ 
    $(this).parents(".control-group").remove();
});

});
        </script>