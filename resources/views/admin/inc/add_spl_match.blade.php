<script src="http://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous">
</script>


<h1>hi</h1><div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <!-- ============================================================== -->
            <!-- pageheader -->
            <!-- ============================================================== -->
            {{-- <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Blank Pageheader </h2>
                        <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blank Pageheader</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- ============================================================== -->
            <!-- end pageheader -->
            <!-- ============================================================== -->

            @foreach(['danger','warning','success','info'] as $msg)

            @if(Session::has('alert-'.$msg  ))

              <div class="row">
                  <div class="col-md-12">
                    
                    <div id="error">
                      <p class="alert alert-{{$msg}}"   >{{Session::get('alert-'.$msg)}}<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <a href="/admin" > show poster</a> </p>
                    </div>
                  </div>

              </div>

            @endif

          @endforeach
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h3 class="text-center">Add Special Match</h3>

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
                                        <form rule="form" action="/spl_match" method="POST" files=true  enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">GameId</label>
                                                <input id="inputText3" type="text" class="form-control" name="game_id" value="{{ old('game_id') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Match Title</label>
                                                <input id="inputText3" type="text" class="form-control" name="m_title" value="{{ old('m_title') }}">
                                            </div>
                                            <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Match Type</label>
                                                    <input id="inputText3" type="text" class="form-control" name="m_type" value="{{ old('m_type') }}">
                                                </div>
                                                <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">Match Description</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{ old('description') }}</textarea>
                                                </div>
                                                <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">Match Rules</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="rules">{{ old('rules') }}</textarea>
                                                </div>
                                                <div class="form-group">
                                                        <label for="inputText3" class="col-form-label">Time Zone</label>
                                                        <input id="inputText3" type="text" class="form-control" name="time_zone" value="{{ old('time_zone') }}">
                                                </div>
                                                <div class="form-group">
                                                        <label for="inputText3" class="col-form-label">Prize</label>
                                                        <input id="inputText3" type="text" class="form-control" name="prize" value="{{ old('prize') }}">
                                                </div>
                                                {{-- <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">Match Rules</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="rules"></textarea>
                                                </div> --}}
                                                <div class="form-group">
                                                        <label for="inputText3" class="col-form-label">Team Type</label>
                                                        <input id="inputText3" type="text" class="form-control" name="team_type" value="{{ old('team_type') }}">
                                                </div>
                                                <div class="form-group">
                                                        <label for="inputText3" class="col-form-label">Member Type</label>
                                                        <input id="inputText3" type="text" class="form-control" name="member_type" value="{{ old('member_type') }}">
                                                </div>
                                                <div class="form-group">
                                                        <label for="inputText3" class="col-form-label">Match Tag line</label>
                                                        <input id="inputText3" type="text" class="form-control" name="tagline" value="{{ old('tagline') }}">
                                                </div>         
                                            <div class="form-group">
                                                <label for="inputText4" class="col-form-label">Entry Fee</label>
                                                <input id="inputText4" type="number" class="form-control" placeholder="Numbers" name="entry_fee" value="{{ old('entry_fee') }}">
                                            </div>
                                            
                                            
                                            {{-- <div class="form-group">
                                                        <label for="input-select"> Match Day</label>
                                                        <select class="form-control" id="input-select" name="m_day">
                                                            <option>Select Days</option>


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
                                                        <input id="inputText4" type="date" class="form-control" placeholder="Numbers" name="m_date" value="{{ old('entry_fee') }}">
                                                    </div>
                                            <div class="form-group">
                                            <label for="inputText4" class="col-form-label">Add Image</label>
                                            <div class="input-group control-group increment" >
                                                <input type="file" name="filename[]" class="form-control">
                                                <div class="input-group-btn"> 
                                                  {{-- <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button> --}}
                                                </div>
                                              </div>
                                              <div class="clone " >
                                                <div class="control-group input-group" style="margin-top:10px">
                                                  <input type="file" name="filename[]" class="form-control">
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
