
@endphp
<h1>heading</h1>

<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h3 class="text-center">Add Weekly Match</h3>
               
                @php


                foreach ($show as $go) {
                   echo $go['m_day']."<br/>";
                }
                @endphp
            </div>
        </div>
    </div>