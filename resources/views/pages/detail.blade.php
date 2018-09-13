@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row shadow-sm" style="background-color:#eceff1; height: 120px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-md-offset-2 d-none d-md-block" style="padding-top: 10px; padding-bottom: 10px;">
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
                <div class="row" style="margin-top: 50px;">
                    <!-- Card Company Info-->
                    <div class="col-md-4">
                      <div class="card rounded-0" style="margin-bottom:15px;">
                        <div class="card-header text-center">
                          <h4>Company Info</h4>
                        </div>
                        <div class="card-body">
                          <table class="table table-responsive">
                            <tbody>
                              <tr>
                                <th>Sales Name</th>
                                <td>Denning & fourcade</td>
                              </tr>
                              <tr>
                                <th>Phone Number</th>
                                <td>089532718927</td>
                              </tr>
                              <tr>
                                <th>Address</th>
                                <td>Salem Boulevard No. 15, Bouyard Avenue</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <!---->
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
                              <span class="">Denning & Fourcade</span>
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
                              <span class="">Denning & Fourcade</span>
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
</div>
@endsection
