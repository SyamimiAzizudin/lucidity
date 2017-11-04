@extends('layouts.app')
@section('content')

	<div class="panel panel-default">

	 	<div class="panel-heading">
	    	<h2>Letter of Credit Form</h2>
	  	</div>

	  	<div class="panel-body">
	  		<div class="row">
      			<div class="col-xs-12 col-sm-12 col-md-12">

					<div class="col-lg-11 col-centered">
	      				<form action="{{url('/upload')}}" method="post" enctype="multipart/form-data">
						    {{csrf_field()}}
						        <div class="form-group">
						            <label for="upload-file">Upload</label>
						            <input type="file" name="upload-file" class="form-control">
						        </div>
						        <input class="btn btn-success" type="submit" value="Upload File" name="submit">
	    				</form>
					</div

					<div class="col-lg-12 col-centered">

		                <div class="col-lg-6 col-centered">
							<br>
		                    <div class="form-group">
								<label for="icn">ICN</label>
								<input type="text" name="icn" class="form-control" placeholder="ICN">
							</div>
						</div>

						<div class="col-lg-6 col-centered">
							<br>
		                    <div class="form-group">
								<label for="recipient">To</label>
								<input type="text" name="recipient" class="form-control" placeholder="Recipient">
							</div>
						</div>

						<div class="col-lg-6 col-centered">
							<br>
		                    <div class="form-group">
								<label for="sender">From</label>
								<input type="text" name="sender" class="form-control" placeholder="Sender">
							</div>
						</div>

						<div class="col-lg-6 col-centered">
							<br>
		                    <div class="form-group">
								<label for="27">27</label>
								<input type="text" name="27" class="form-control" placeholder="Sequence of Total">
							</div>
						</div>

						<div class="col-lg-6 col-centered">
							<br>
		                    <div class="form-group">
								<label for="40a">40A</label>
								<input type="text" name="40a" class="form-control" placeholder="Form of Documentary Credit">
							</div>
						</div>

						<div class="col-lg-6 col-centered">
							<br>
		                    <div class="form-group">
								<label for="20">20</label>
								<input type="text" name="20" class="form-control" placeholder="Documentary Credit Number">
							</div>
						</div>

						<div class="col-lg-6 col-centered">
							<br>
		                    <div class="form-group">
								<label for="23">23</label>
								<input type="text" name="23" class="form-control" placeholder="Reference to Pre-Advice">
							</div>
						</div>

						<div class="col-lg-6 col-centered">
							<br>
		                    <div class="form-group">
								<label for="31C">31C</label>
								<input type="text" name="31C" class="form-control" placeholder="Date of Issue">
							</div>
						</div>

						<div class="col-lg-6 col-centered">
							<br>
		                    <div class="form-group">
								<label for="40E">40E</label>
								<input type="text" name="40E" class="form-control" placeholder="Applicable Rules">
							</div>
						</div>

						<div class="col-lg-6 col-centered">
							<br>
		                    <div class="form-group">
								<label for="31D">31D</label>
								<input type="text" name="31D" class="form-control" placeholder="Date and Place of Expiry">
							</div>
						</div>

						<div class="col-lg-6 col-centered">
							<br>
		                    <div class="form-group">
								<label for="51a">51a</label>
								<input type="text" name="51a" class="form-control" placeholder="Applicant Bank">
							</div>
						</div>

						<div class="col-lg-6 col-centered">
							<br>
		                    <div class="form-group">
								<label for="50">50</label>
								<input type="text" name="50" class="form-control" placeholder="Applicant">
							</div>
						</div>

						<div class="col-lg-6 col-centered">
							<br>
		                    <div class="form-group">
								<label for="59">59</label>
								<input type="text" name="59" class="form-control" placeholder="Beneficiary">
							</div>
						</div>

						<div class="col-lg-6 col-centered">
							<br>
		                    <div class="form-group">
								<label for="32B">32B</label>
								<input type="text" name="32B" class="form-control" placeholder="Currency Code, Amount">
							</div>
						</div>

						<div class="col-lg-6 col-centered">
							<br>
		                    <div class="form-group">
								<label for="39A">39A</label>
								<input type="text" name="39A" class="form-control" placeholder="Percentage Credit Amount Tolerance">
							</div>
						</div>

						<div class="col-lg-6 col-centered">
							<br>
		                    <div class="form-group">
								<label for="39B">39B</label>
								<input type="text" name="39B" class="form-control" placeholder="Maximum Credit Amount">
							</div>
						</div>

						<div class="col-lg-6 col-centered">
							<br>
		                    <div class="form-group">
								<label for="39C">39C</label>
								<input type="text" name="39C" class="form-control" placeholder="Additional Amounts Covered">
							</div>
						</div>

						<div class="col-lg-6 col-centered">
							<br>
		                    <div class="form-group">
								<label for="41a">41a</label>
								<input type="text" name="41a" class="form-control" placeholder="Available With ... By ...">
							</div>
						</div>

						<div class="col-lg-6 col-centered">
							<br>
		                    <div class="form-group">
								<label for="42C">42C</label>
								<input type="text" name="42C" class="form-control" placeholder="Drafts at ...">
							</div>
						</div>

						<div class="col-lg-6 col-centered">
							<br>
		                    <div class="form-group">
								<label for="42a">42a</label>
								<input type="text" name="42a" class="form-control" placeholder="Drawee">
							</div>
						</div>

						<div class="col-lg-6 col-centered">
							<br>
		                    <div class="form-group">
								<label for="42M">42M</label>
								<input type="text" name="42M" class="form-control" placeholder="Mixed Payment Details">
							</div>
						</div>

						<div class="col-lg-6 col-centered">
							<br>
		                    <div class="form-group">
								<label for="42P">42P</label>
								<input type="text" name="42P" class="form-control" placeholder="Deferred Payment Details">
							</div>
						</div>

						<div class="col-lg-6 col-centered">
							<br>
		                    <div class="form-group">
								<label for="43P">43P</label>
								<input type="text" name="43P" class="form-control" placeholder="Partial Shipments">
							</div>
						</div>

						<div class="col-lg-6 col-centered">
							<br>
		                    <div class="form-group">
								<label for="43T">43T</label>
								<input type="text" name="43T" class="form-control" placeholder="Transhipment">
							</div>
						</div>

						<div class="col-lg-6 col-centered">
							<br>
		                    <div class="form-group">
								<label for="44A">44A</label>
								<input type="text" name="44A" class="form-control" placeholder="Place of Taking in Charge">
							</div>
						</div>

						<div class="col-lg-6 col-centered">
							<br>
		                    <div class="form-group">
								<label for="44E">44E</label>
								<input type="text" name="44E" class="form-control" placeholder="Port of Loading">
							</div>
						</div>

						<div class="col-lg-6 col-centered">
							<br>
		                    <div class="form-group">
								<label for="44F">44F</label>
								<input type="text" name="44F" class="form-control" placeholder="Port of Discharge">
							</div>
						</div>

						<div class="col-lg-6 col-centered">
							<br>
		                    <div class="form-group">
								<label for="44B">44B</label>
								<input type="text" name="44B" class="form-control" placeholder="Place of Final Destination">
							</div>
						</div>

						<div class="col-lg-6 col-centered">
							<br>
		                    <div class="form-group">
								<label for="44C">44C</label>
								<input type="text" name="44C" class="form-control" placeholder="Latest Date of Shipment">
							</div>
						</div>

						<div class="col-lg-6 col-centered">
							<br>
		                    <div class="form-group">
								<label for="44D">44D</label>
								<input type="text" name="44D" class="form-control" placeholder="Shipment Period">
							</div>
						</div>

						<div class="col-lg-6 col-centered">
							<br>
		                    <div class="form-group">
								<label for="45A">45A</label>
								<input type="text" name="45A" class="form-control" placeholder="Description of Goods and/or Services">
							</div>
						</div>

						<div class="col-lg-6 col-centered">
							<br>
		                    <div class="form-group">
								<label for="46A">46A</label>
								<input type="text" name="46A" class="form-control" placeholder="Documents Required">
							</div>
						</div>

						<div class="col-lg-6 col-centered">
							<br>
		                    <div class="form-group">
								<label for="47A">47A</label>
								<input type="text" name="47A" class="form-control" placeholder="Additional Conditions">
							</div>
						</div>

						<div class="col-lg-6 col-centered">
							<br>
		                    <div class="form-group">
								<label for="71B">71B</label>
								<input type="text" name="71B" class="form-control" placeholder="Charges">
							</div>
						</div>

						<div class="col-lg-6 col-centered">
							<br>
		                    <div class="form-group">
								<label for="48">48</label>
								<input type="text" name="48" class="form-control" placeholder="Period for Presentation">
							</div>
						</div>

						<div class="col-lg-6 col-centered">
							<br>
		                    <div class="form-group">
								<label for="49">49</label>
								<input type="text" name="49" class="form-control" placeholder="Confirmation Instructions">
							</div>
						</div>

						<div class="col-lg-6 col-centered">
							<br>
		                    <div class="form-group">
								<label for="53a">53a</label>
								<input type="text" name="53a" class="form-control" placeholder="Reimbursing Bank">
							</div>
						</div>

						<div class="col-lg-6 col-centered">
							<br>
		                    <div class="form-group">
								<label for="78">78</label>
								<input type="text" name="78" class="form-control" placeholder="Instructions to the Paying/Accepting/Negotiating Bank">
							</div>
						</div>

						<div class="col-lg-6 col-centered">
							<br>
		                    <div class="form-group">
								<label for="57a">57a</label>
								<input type="text" name="57a" class="form-control" placeholder="'Advise Through' Bank">
							</div>
						</div>

						<div class="col-lg-6 col-centered">
							<br>
		                    <div class="form-group">
								<label for="72">72</label>
								<input type="text" name="72" class="form-control" placeholder="Sender to Receiver Information">
							</div>
						</div>

					</div>
				</div>
      		</div>
	  	</div>

	</div>

@endsection
