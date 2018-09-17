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
                <div class="row" style="margin-top:15px;">
                  <div class="col-md-2"></div>
                  <div class="col-md-8">
                  <table class="table table-responsive" id="productTable">
                    <thead>
                      <tr>
                        <th>Customer Name</th>
                        <th>Project Name</th>
                        <th>Deadline</th>
                        <th>Project Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>James Sullivan</td>
                        <td>Mobile Workforce</td>
                        <td>08-10-2018</td>
                        <td>Finished</td>
                      </tr>
                      <tr>
                        <td>John Doe</td>
                        <td>Mobile SalesForce</td>
                        <td>28-10-2018</td>
                        <td>On Progress</td>
                      </tr>
                      <tr>
                        <td>Christ Evans</td>
                        <td>MyChatbot</td>
                        <td>11-12-2018</td>
                        <td>Delayed</td>
                      </tr>
                    </tbody>
                  </table>
                  </div>
                  <div class="col-md-2"></div>
                </div>
                <script>
                  $(document).ready( function () {
                    $('#productTable').DataTable();
                  } );
                </script>
              </div>
            </div>
          </div>
          @endsection
