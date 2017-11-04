@extends('layouts.app')
@section('content')

	<div class="panel panel-default">

	 	<div class="panel-heading">
	    	<h2>Letter of Credit Form
	    		<{{-- a href="{{ url('/credit/create') }}" class="btn btn-primary pull-right btn_md" role="button">
	    			<span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Upload File
	    		</a> --}}
	    	</h2>
	  	</div>

	  	<div class="panel-body">
	  		<div class="row">
      			<div class="col-xs-12 col-sm-12 col-md-12">
      				<?php
				         echo Form::open(array('url' => '/uploadfile','files'=>'true'));
				         echo 'Select the file to upload.';
				         echo Form::file('image');
				         echo Form::submit('Upload File');
				         echo Form::close();
				    ?>
      			</div>
      		</div>
	  	</div>

	</div>

@endsection
