@extends('template/main')

@section('content')
<div class="row cpanel">
	<div class="cpanel-content">
		<div class="col-md-2 hidden-sm hidden-xs">
			<img src="{{ URL::asset('/img/sample.jpg') }}" class="img-company" alt="Profile"/>
		</div>
		<div class="col-md-8 text-left col-xs-12">
			<div class="row">
				<h2>Denning & Fourcade, Inc.</h2>
			</div>
			<div class="row">
				<h5>Music Producer</h5>
			</div>
		</div>
	</div>
</div>    
  <div class="row content" style="height:auto;">
	<div class="col-xs-12 col-md-4 sidenav panel panel-custom" style="background-color: #f7f9f9;">
		<!-- <div class="affix"> -->
		<div class="panel-heading">
			<h3>Statistics</h3>
		</div>
		<div class="panel-body">
			<div class="visible-xs">
				<a href="#"> Statistics Details </a>
			</div>
			<div class="panel panel-custom hidden-xs">
				  <div class="panel-body">
					  Project Status Percentage
					  <div id="piechart" class="chart-panel"></div>
					  Engagement for past 7 days
					  <div class="row engagement-panel">
						  <div class="col-sm-4">
							  <span class="glyphicon glyphicon-user"> +10</span>
						  </div>
						  <div class="col-sm-4">
							  <span class="glyphicon glyphicon-comment"> -5</span>
						  </div>
						  <div class="col-sm-4">
							  <span class="glyphicon glyphicon-eye-open"> +2</span>
						  </div>
					  </div>
				  </div>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-md-8 text-left post-wrapper"> 
		  <!-- <h1>Your Products</h1> -->
		  
		  <!-- <hr>
		  <h3>Test</h3>
		  <p>Lorem ipsum...</p> -->
		  <div class="row col-xs-12 col-md-8 col-md-offset-1 input-post" style="">
			  <form action="" class="form-post" style="">
				  <div class="row col-xs-12">
					  <textarea class="form-control textarea-post" style="" placeholder="Share Your Work Here"></textarea>
				  </div>
				  <div class="row col-xs-12" style="margin-bottom: 20px;">
					  <div class="col-sm-6">
						  <button type="button" class="btn btn-primary">Image</button>
						  <button type="button" class="btn btn-primary">Video</button>
					  </div>
					  <div class="col-sm-6 text-right">
						  <button type="button" class="btn btn-primary">Submit</button>
					  </div>
				  </div>
			  </form>
		  </div>

		  <!-- Looping From Database -->
		  <div class="row col-xs-12 col-md-8 col-md-offset-1 list-post" style="margin-top: 20px; border: solid 1px;border-color:#d5dddd; background-color: #f7f9f9;">
			  <div class="row col-xs-12 post-content" style="margin: 5px;">
				  <div class="row" style="border-bottom: solid 1px #d5dddd; margin:2px;">
					  <div class="col-xs-2">
						  <img src="/img/sample.jpg" style="height:40px; width: 40px; margin-bottom:5px;">
					  </div>
					  <div class="col-xs-10">
						  Denning & Fourcade, Inc.
					  </div>
				  </div>
				  <div class="row">
					  <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do ei-xsod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
				  </div>
			  </div>
		  </div>
		  <div class="row col-xs-12 col-md-8 col-md-offset-1 list-post" style="margin-top: 20px; border: solid 1px;border-color:#d5dddd; background-color: #f7f9f9;">
			  <div class="row col-xs-12 post-content" style="margin: 5px;">
				  <div class="row" style="border-bottom: solid 1px #d5dddd; margin:2px;">
					  <div class="col-xs-2">
						  <img src="">
					  </div>
					  <div class="col-xs-10">
						  Company's Name
					  </div>
				  </div>
				  <div class="row">
					  <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do ei-xsod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
				  </div>
			  </div>
		  </div>
		  <div class="row col-xs-12 col-md-8 col-md-offset-1 list-post" style="margin-top: 20px; border: solid 1px;border-color:#d5dddd; background-color: #f7f9f9;">
			  <div class="row col-xs-12 post-content" style="margin: 5px;">
				  <div class="row" style="border-bottom: solid 1px #d5dddd; margin:2px;">
					  <div class="col-xs-2">
						  <img src="">
					  </div>
					  <div class="col-xs-10">
						  Company's Name
					  </div>
				  </div>
				  <div class="row">
					  <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do ei-xsod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
				  </div>
			  </div>
		  </div>
		  <div class="row col-xs-12 col-md-8 col-md-offset-1 list-post" style="margin-top: 20px; border: solid 1px;border-color:#d5dddd; background-color: #f7f9f9;">
			  <div class="row col-xs-12 post-content" style="margin: 5px;">
				  <div class="row" style="border-bottom: solid 1px #d5dddd; margin:2px;">
					  <div class="col-xs-2">
						  <img src="">
					  </div>
					  <div class="col-xs-10">
						  Company's Name
					  </div>
				  </div>
				  <div class="row">
					  <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do ei-xsod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
				  </div>
			  </div>
		  </div>
		  <!---->
	</div>
  </div>
  @endsection