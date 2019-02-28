<style>
        .switch {
          position: relative;
          display: inline-block;
          width: 60px;
          height: 34px;
        }
        
        .switch input { 
          opacity: 0;
          width: 0;
          height: 0;
        }
        
        .slider {
          position: absolute;
          cursor: pointer;
          top: 0;
          left: 0;
          right: 0;
          bottom: 0;
          background-color: #ccc;
          -webkit-transition: .4s;
          transition: .4s;
        }
        
        .slider:before {
          position: absolute;
          content: "";
          height: 26px;
          width: 26px;
          left: 4px;
          bottom: 4px;
          background-color: white;
          -webkit-transition: .4s;
          transition: .4s;
        }
        
        input:checked + .slider {
          background-color: #2196F3;
        }
        
        input:focus + .slider {
          box-shadow: 0 0 1px #2196F3;
        }
        
        input:checked + .slider:before {
          -webkit-transform: translateX(26px);
          -ms-transform: translateX(26px);
          transform: translateX(26px);
        }
        
        /* Rounded sliders */
        .slider.round {
          border-radius: 34px;
        }
        
        .slider.round:before {
          border-radius: 50%;
        }


        .add_match{
    position: relative;
}
.add_match span{
    position: absolute;
    right: 10px;
}

        </style>
       
<div class="dashboard-wrapper">
    <div class="container-fluid  dashboard-content">
        <div class="row">
           
            @foreach(['danger','warning','success','info'] as $msg)

            @if(Session::has('alert-'.$msg  ))

              <div class="row">
                  <div class="col-md-12">
                    
                    <div id="error">
                      <p class="alert alert-{{$msg}}"   >{{Session::get('alert-'.$msg)}}<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                    </div>
                  </div>

              </div>

            @endif

          @endforeach

<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">
        <h5 class="card-header add_match">Weekly match info 
         <a href="/addmatch">   <span class="btn btn-success btn-xs">Add Match</span></a>
        </h5>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">days</th>
                        <th scope="col">Action</th>
                        <th scope="col"> Status</th>
                    </tr>
                </thead>
                <tbody>

                  @foreach ($show as $show)
                      
                
                    <tr>
                        
                        <th scope="row">1</th>

                        <td><a href="/match/details/{{$show['id']}}">{{ $show['m_title']}}</a></td>
                    <td>{{$show['m_day']}}</td>
                    <td> <a href="/match_edit/{{$show['id']}}"> <span class="btn btn-info btn-xs">edit</span></a> 
                          <a href="/delete/{{ $show['id']}}"><span class="btn btn-danger btn-xs">Delete</span></a>
                        </td>
                        <td> 
                            {{-- <span class="btn btn-success" id="btnon" >on</span>
                            <span class="btn btn-danger" id="btnoff">off</span> --}}

                            <div class="form-group row">
                                    <div class="col-12 col-sm-8 col-lg-6 pt-1">
                                        <div class="switch-button switch-button-success switch-button-xs">
                                            <input type="checkbox"   @if($show['result']=='-') {{'checked'}} @endif   name="switch16" id="switch16"><span>
                                        <label for="switch16"></label></span>
                                        </div>
                                    </div>
                                </div>

                        </td>
                  
                    </tr>
                  
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
        </div>
    </div>
</div>


<script src="http://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous">
</script>
<script>    
$(document).ready( function(){
     $('#btnon').click(function() { 
        
          
         
     });
     $('#btnoff').click(function() { 
        
        alert('MATCH POSTER OFF');    
         
     });

   
});
</script>

