<?php
  $asset = asset('/');
?>
@extends('user.master')
@section('profile')
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>

	<script >
		$(document).ready(function()
		{ 
			$("#change_picture").click(function()
			{ 
				$( "#file" ).click();
			});
			$( "#file" ).change(function()
			{
			var reader = new FileReader();
               	reader.onload = function (e) {
                  	$('#image_upload').attr('src', e.target.result);
                  	//$("#form").submit();
                  	$("#save").show();
                  	$("#discard").show();
                  	$("#change_picture").hide();
			};
			reader.readAsDataURL(this.files[0]);
			
			});
			$( "#save" ).click(function()
			{
				$("#form").submit();
			});
			$( "#discard" ).click(function()
			{
				$("#change_picture").show();
				$("#save").hide();
                  	$("#discard").hide();
			});
		});		
    	</script>
@stop
@section('edit_name')
<script src="{{$asset}}js/jquery.min.js"></script>
<link href="{{$asset}}css/bootstrap.min.css" rel="stylesheet" type="text/css">
<script src="{{$asset}}js/bootstrap.min.js"></script>
<link href="{{$asset}}css/bootstrap-editable.css" rel="stylesheet" type="text/css">
<script src="{{$asset}}js/bootstrap-editable.min.js"></script>

	<script>
		$(document).ready(function(){
			$.fn.editable.defaults.mode = 'inline';
			//$('#stdid').editable();
			
			$('#stdname').editable({
				type:'text',
				url:'{{route('edit_name')}}',
				pk:1
			});
	
		});
	</script>
@stop

@section('content')
<h1 class="page-header">User profile</h1>

<div class="row">
	
	<div class="col-md-2">
		<a class="thumbnail">
			<img src="{{$asset}}images/{{ strlen($userProfile->photo)>0?$userProfile->photo:'avator.png'}}" id="image_upload" alt="..." >
		</a>
		<a href="javascript:void(0)" id="change_picture">Change</a>
		<a href="javascript:void(0)" id="save" style="display: none;">Save</a>
		<a href="javascript:void(0)" id="discard" style="display: none;">Discard</a>
	</div>
	<form  id="form" action=" {{route('change_picture')}} " method="post" enctype="multipart/form-data"  style="display: none;">
		{{csrf_field()}}
		<input type="file" id="file" name="file" value="file">
	</form>


	<div class="col-md-10">
		<div class="table-responsive">
			<table class="table table-striped" id="user_profile_table">
				<tbody>
					<tr>
						<td>Name:</td>
						<td> <a href="#" id="stdname">{{$userProfile->name}}</a> </td>
					</tr>
					<tr>
						<td>Email:</td>
						<td> {{$userProfile->email}}</td>
					</tr>
					<tr>
						<td>Join Date:</td>
						<td><?php $dateParts = explode(' ', $userProfile->created_at); echo  $dateParts[0];?></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<br>
<div class="row">
<div class="col-md-12">
	<div class="table-responsive">
		<table class="table" id="summary">
			<tr style="background: chocolate;">
				<th>PAR 3 SCORING</th>
				<th>PAR 4 SCORING</th>
				<th>PAR 5 SCORING</th>
				<th>#PAR3</th>
				<th>#PAR4</th>
				<th>#PAR5</th>
			</tr>
			<tr>
				<td>{{$status->avg_par3_scoring}} </td>
				<td>{{$status->avg_par4_scoring}}</td>
				<td>{{$status->avg_par5_scoring}}</td>
				<td>{{$status->avg_hash_par3}}</td>
				<td>{{$status->avg_hash_par4}}</td>
				<td>{{$status->avg_hash_par5}}</td>
			</tr>
			<tr style="background: red;">
				<th>EAGLES</th>
				<th>BIRDIES</th>
				<th>PARS</th>
				<th>BOGEYS</th>
				<th>DBOGEYS</th>
				<th>OTHERS</th>
			</tr>
			<tr>

				<td>{{$status->avg_eagles}} </td>
				<td>{{$status->avg_birdies}}</td>
				<td>{{$status->avg_pars}}</td>
				<td>{{$status->avg_bogeys}}</td>
				<td>{{$status->avg_dblbogeys}}</td>
				<td>{{$status->avg_others}}</td>

			</tr>
			<tr style="background: deepskyblue;">
				<th>FAIRWAYS</th>
				<th>FIR%</th>
				<th>GREENS</th>
				<th>GIR%</th>
				<th>PLAYED HOLES</th>
				<th># 18 HOLE RDS</th>
			</tr>
			<tr>
				<td>{{$status->avg_fairways}} </td>
				<td>{{$status->avg_fir_percentage}}</td>
				<td>{{$status->avg_greens}}</td>
				<td>{{$status->avg_gir_percentage}}</td>
				<td>{{$status->avg_played_holes_equation}}</td>
				<td>{{$status->avg_hole_rds_18}}</td>
			</tr>
			<tr style="background: brown;">
				<th>SCRAMBLE OPP</th>
				<th>SCRAMBL SAV</th>
				<th>SCRAMBLE %</th>
				<th>SAND SAVE OPP</th>
				<th>SAND SAVES</th>
				<th>SAND SAVE %</th>
			</tr>
			<tr>
				<td>{{$status->avg_scramble_opp_equation}} </td>
				<td>{{$status->avg_scramble_sav_equation}}</td>
				<td>{{$status->avg_scramble_percentage}}</td>
				<td>{{$status->avg_sand_opp_equation}}</td>
				<td>{{$status->avg_sand_sav_equation}}</td>
				<td>{{$status->avg_sand_sav_percentage}}</td>
			</tr>
			<tr style="background: yellow;">
				<th>MISSED GIR</th>
				<th>PUTT 1 NOGIR</th>
				<th>AVG DIST. CHIP</th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
			<tr>
				<td>{{$status->avg_missed_gir}} </td>
				<td>{{$status->avg_put_1_nogir}}</td>
				<td>{{$status->avg_avg_dist_chip}}</td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr style="background: green;">
				<th>TOTAL PUTTS</th>
				<th>PUTTS/HOLE</th>
				<th>AVG. SCORE</th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
			<tr>
				<td>{{$status->avg_total_putts}} </td>
				<td>{{$status->avg_putts_div_hole}}</td>
				<td>{{$status->avg_avg_score}}</td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<th style="background: rgba(0,191,255,1);">Putts < 5'</th>
				<th style="background: rgba(0,191,255,0.8);">Putts 5' < 9'</th>
				<th  style="background: rgba(0,191,255,0.6);">Putts 10' < 19'</th>
				<th style="background: rgba(0,191,255,0.4);">Putts 20' < 29'</th>
				<th style="background: rgba(0,191,255,0.2);">Putts 30'+</th>
				<th></th>
			</tr>
			<tr>
				<td>{{$status->avg_putt_opp_5_equation}} </td>
				<td>{{$status->avg_putt_opp_5_9_equation}}</td>
				<td>{{$status->avg_putt_opp_10_19_equation}}</td>
				<td>{{$status->avg_putt_opp_20_29_equation}}</td>
				<td>{{$status->avg_putt_opp_30_equation}}</td>
				
			</tr>
			<tr>
				<th style="background: rgba(0,191,255,1);">Putts Made < 5'</th>
				<th style="background: rgba(0,191,255,0.8);">Putts Made 5' < 9'</th>
				<th style="background: rgba(0,191,255,0.6);">Putts Made 10' < 19'</th>
				<th style="background: rgba(0,191,255,0.4);">Putts Made 20' < 29'</th>
				<th style="background: rgba(0,191,255,0.2);">Putts Made 30'+</th>
				<th></th>
			</tr>
			<tr>
				<td>{{$status->avg_putt_make_5_equation}} </td>
				<td>{{$status->avg_putt_make_5_9_equation}}</td>
				<td>{{$status->avg_putt_make_10_19_equation}}</td>
				<td>{{$status->avg_putt_make_20_29_equation}}</td>
				<td>{{$status->avg_putt_make_30_equation}}</td>

			</tr>
			<tr>
				<th style="background: rgba(0,191,255,1);">Make % < 5'</th>
				<th style="background: rgba(0,191,255,0.8);">Make % 5' < 9'</th>
				<th style="background: rgba(0,191,255,0.6);">Make % 10' < 19'</th>
				<th style="background: rgba(0,191,255,0.4);">Make % 20' < 29'</th>
				<th style="background: rgba(0,191,255,0.2);">Make % 30'+</th>
				<th></th>
			</tr>
			<tr>
				<td>{{$status->avg_make_percentage_5}} </td>
				<td>{{$status->avg_make_percentage_5_9}}</td>
				<td>{{$status->avg_make_percentage_10_19}}</td>
				<td>{{$status->avg_make_percentage_20_29}}</td>
				<td>{{$status->avg_make_percentage_30}}</td>
			</tr>
			
		</table>
	</div>
</div>

@stop