@extends('layouts.app')

@section('content')
<script>$("textarea").resizable();</script>
    <div class="container-fluid">
        <div class="row shadow-sm" style="background-color:#eceff1; height: 120px;">
            <div class="col-md-2 offset-md-2 d-none d-md-block" style="padding-top: 10px; padding-bottom: 10px;">
                <img src="{{ URL::asset('/img/sample.jpg') }}" class="img-responsive" style="width:100px; height:100px;" alt="Profile"/>
            </div>
            <div class="col-md-8 text-left col-xs-12" style="padding-top: 27px; padding-bottom: 10px;">
                <div class="row">
                    <h2>Denning & Fourcade, Inc.</h2>
                </div>
                <div class="row">
                    <h5>Music Producer</h5>
                </div>
            </div>
        </div>
            <div class="container">
                <div class="row" style="margin-top: 50px;">
                    <!-- Card Company Info-->
                    <div class="col-md-4">
                      <div class="card rounded-0" style="margin-bottom:15px;">
                        <div class="card-header text-center">
                          <h4>Statistics</h4>
                        </div>
                        <div class="card-body text-center">
                            <span>Your Work</span>
                            <div class="row">
                                <canvas id="pieChart"></canvas>
                            </div>
                        </div>
                      </div>
                    </div>
                    <!---->
                    <!-- Card Posting -->
                    <div class="col-md-6">
                        <div class="card shadow rounded-0" style="margin-bottom:15px;">
                          <div class="card-body">
                            <form>
                              <div class="form-group">
                                <textarea placeholder="Remember, be nice!" class="form-control form-control-no-border" style="resize: none;outline: none;border: none;overflow: hidden;"></textarea>
                                <hr>
                              </div>
                            </form>
                            <a href="#" class="btn btn-outline-dark btn-sm"><i class="fa fa-pencil"></i> Write an article</a>
                            <a href="#" class="btn btn-outline-dark btn-sm"><i class="fa fa-picture-o"></i> Images</a>
                            <a href="#" class="btn btn-outline-dark btn-sm"><i class="fa fa-video-camera"></i> Video</a>
                            <a href="#" class="btn btn-primary btn-sm float-right">Post</a>
                          </div>
                        </div>
                      <!-- List Posting -->
                      <div class="card shadow-sm rounded-0" style="margin-bottom:15px;">
                        <div class="card-body">
                          <div class="row" style="border-bottom:solid 1px #d4d7db; padding:5px;">
                            <div class="col-md-2">
                              <img src="{{ URL::asset('/img/sample.jpg') }}" class="img-responsive" style="width:50px;height:50px;"/>
                            </div>
                            <div class="col-md-10">
                              <span class="">Denning & Fourcade</span>
                            </div>
                          </div>
                          <div class="row" style="margin-top:10px; padding:5px;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                          </div>
                        </div>
                      </div>

                      <div class="card shadow-sm rounded-0" style="margin-bottom:15px;">
                        <div class="card-body">
                          <div class="row" style="border-bottom:solid 1px #d4d7db; padding:5px;">
                            <div class="col-md-2">
                              <img src="{{ URL::asset('/img/sample.jpg') }}" class="img-responsive" style="width:50px;height:50px;"/>
                            </div>
                            <div class="col-md-10">
                              <span class="">Denning & Fourcade</span>
                            </div>
                          </div>
                          <div class="row" style="margin-top:10px; padding:5px;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                          </div>
                        </div>
                      </div>

                      <div class="card shadow-sm rounded-0" style="margin-bottom:15px;">
                        <div class="card-body">
                          <div class="row" style="border-bottom:solid 1px #d4d7db; padding:5px;">
                            <div class="col-md-2">
                              <img src="{{ URL::asset('/img/sample.jpg') }}" class="img-responsive" style="width:50px;height:50px;"/>
                            </div>
                            <div class="col-md-10">
                              <span class="">Denning & Fourcade</span>
                            </div>
                          </div>
                          <div class="row" style="margin-top:10px; padding:5px;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                          </div>
                        </div>
                      </div>
                      <!---->
                    </div>
                    <!---->
                    <div class="col-md-2">

                    </div>
                </div>
            </div>
    </div>
</div>
<script>
var ctxP = document.getElementById("pieChart").getContext('2d');
var myPieChart = new Chart(ctxP, {
    type: 'pie',
    data: {
        labels: ["Cancelled", "OnProgress", "Waiting", "Finished", "Delivered"],
        datasets: [
            {
                data: [2, 50, 100, 15, 45],
                backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
                hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
            }
        ]
    },
    options: {
        responsive: true
    }
});
</script>
@endsection
