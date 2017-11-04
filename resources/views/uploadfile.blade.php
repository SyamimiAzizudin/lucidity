@extends('layouts.app')
@section('content')

	<div class="panel panel-default">

	 	<div class="panel-heading">
	    	<h2>Letter of Credit Form</h2>
	  	</div>

	  	<div class="panel-body">
	  		<div class="row">
      			<div class="col-xs-12 col-sm-12 col-md-12">
      				<form action="{{url('/upload')}}" method="post" enctype="multipart/form-data">
					    {{csrf_field()}}
					        <div class="form-group">
					            <label for="upload-file">Upload</label>
					            <input type="file" name="upload-file" class="form-control">
					        </div>
					        <input class="btn btn-success" type="submit" value="Upload File" name="submit">
    				</form>
      			</div>
      		</div>
	  	</div>

	</div>

@endsection
