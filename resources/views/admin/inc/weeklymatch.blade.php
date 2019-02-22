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
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h3 class="text-center">Add Weekly Match</h3>

                    <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    {{-- <h5 class="card-header">Basic Form</h5> --}}
                                    <div class="card-body">
                                        <form action="/weeklymatch" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Match Title</label>
                                                <input id="inputText3" type="text" class="form-control" name="m_title">
                                            </div>
                                            <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Match Type</label>
                                                    <input id="inputText3" type="text" class="form-control" name="m_type">
                                                </div>
                                                <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">Match Description</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                                                </div>
                                                <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">Match Rules</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="rules"></textarea>
                                                </div>
                                                <div class="form-group">
                                                        <label for="inputText3" class="col-form-label">Time Zone</label>
                                                        <input id="inputText3" type="text" class="form-control" name="time_zone">
                                                </div>
                                                <div class="form-group">
                                                        <label for="inputText3" class="col-form-label">Prize</label>
                                                        <input id="inputText3" type="text" class="form-control" name="prize">
                                                </div>
                                                <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">Match Rules</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="rules"></textarea>
                                                </div>
                                                <div class="form-group">
                                                        <label for="inputText3" class="col-form-label">Team Type</label>
                                                        <input id="inputText3" type="text" class="form-control" name="team_type">
                                                </div>
                                                <div class="form-group">
                                                        <label for="inputText3" class="col-form-label">Member Type</label>
                                                        <input id="inputText3" type="text" class="form-control" name="member_type">
                                                </div>
                                                <div class="form-group">
                                                        <label for="inputText3" class="col-form-label">Categories</label>
                                                        <input id="inputText3" type="text" class="form-control" name="categories">
                                                </div>
                                                <div class="form-group">
                                                        <label for="inputText3" class="col-form-label">Match Tag line</label>
                                                        <input id="inputText3" type="text" class="form-control" name="tagline">
                                                </div>         
                                            <div class="form-group">
                                                <label for="inputText4" class="col-form-label">Entry Fee</label>
                                                <input id="inputText4" type="number" class="form-control" placeholder="Numbers" name="entry_fee">
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