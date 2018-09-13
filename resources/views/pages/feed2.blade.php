@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row shadow-sm" style="background-color:#eceff1; height: 100px;">
            <div class="container">
                <div class="row text-center" style="margin-top:25px;">
                    <div class="col-md-1">

                    </div>
                    <div class="col-md-10">
                      <h1><a href="#" style="text-decoration:none;" data-toggle="modal" data-target="#categoryModal">CATEGORY</a></h1>
                      <div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="categoryModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Change Seller Category</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <ul class="list-group list-group-flush">
                                <li class="list-group-item"><span class="font-weight-bold">Seller Category</span></li>
                                <li class="list-group-item"><a href="#">Music</a></li>
                                <li class="list-group-item"><a href="#">Craft</a></li>
                                <li class="list-group-item"><a href="#">Software</a></li>
                                <li class="list-group-item"><a href="#">Cookery</a></li>
                                <li class="list-group-item"><a href="#">Drawing</a></li>
                                <li class="list-group-item"><a href="#">Sculpture</a></li>
                                <li class="list-group-item"><a href="#">Video Game</a></li>
                                <li class="list-group-item"><a href="#">Architecture</a></li>
                              </ul>
                            </div>
                            <div class="modal-footer">

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-1">

                    </div>
                </div>
                <div class="row" style="margin-top: 50px;">
                  <div class="col-md-3">
                    <div class="card rounded-0">
                      <div class="card-body">
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item"><span class="font-weight-bold">Followed Seller</span></li>
                          <li class="list-group-item">Dapibus ac facilisis in</li>
                          <li class="list-group-item">Vestibulum at eros</li>
                          <li class="list-group-item">Cras justo odio</li>
                          <li class="list-group-item">Dapibus ac facilisis in</li>
                          <li class="list-group-item">Vestibulum at eros</li>
                          <li class="list-group-item">Cras justo odio</li>
                          <li class="list-group-item">Dapibus ac facilisis in</li>
                          <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                    <!-- Card Posting -->
                    <div class="col-md-6">
                      <!-- List Posting -->
                      <div class="card rounded-0" style="margin-bottom:15px;">
                        <div class="card-body">
                          <div class="row" style="border-bottom:solid 1px #d4d7db; padding:5px;">
                            <div class="col-md-2">
                              <img src="{{ URL::asset('/img/sample.jpg') }}" class="img-responsive" style="width:50px;height:50px;"/>
                            </div>
                            <div class="col-md-10">
                              <span class=""><a href="detail" style="text-decoration:none;">Denning & Fourcade</a></span>
                            </div>
                          </div>
                          <div class="row" style="margin-top:10px; padding:5px;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                          </div>
                        </div>
                      </div>

                      <div class="card rounded-0" style="margin-bottom:15px;">
                        <div class="card-body">
                          <div class="row" style="border-bottom:solid 1px #d4d7db; padding:5px;">
                            <div class="col-md-2">
                              <img src="{{ URL::asset('/img/sample.jpg') }}" class="img-responsive" style="width:50px;height:50px;"/>
                            </div>
                            <div class="col-md-10">
                              <span class=""><a href="detail" style="text-decoration:none;">Denning & Fourcade</a></span>
                            </div>
                          </div>
                          <div class="row" style="margin-top:10px; padding:5px;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                          </div>
                        </div>
                      </div>

                      <div class="card rounded-0" style="margin-bottom:15px;">
                        <div class="card-body">
                          <div class="row" style="border-bottom:solid 1px #d4d7db; padding:5px;">
                            <div class="col-md-2">
                              <img src="{{ URL::asset('/img/sample.jpg') }}" class="img-responsive" style="width:50px;height:50px;"/>
                            </div>
                            <div class="col-md-10">
                              <span class=""><a href="detail" style="text-decoration:none;">Denning & Fourcade</a></span>
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
                    <div class="col-md-3">
                      <div class="card rounded-0">
                        <div class="card-body">
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item"><span class="font-weight-bold">Active Seller</span></li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
