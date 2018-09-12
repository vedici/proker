@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row shadow-sm" style="background-color:#eceff1; height: 120px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-md-offset-2 hidden-sm hidden-xs" style="padding-top: 10px; padding-bottom: 10px;">
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
            </div>
                
        </div>
    </div>
</div>
@endsection