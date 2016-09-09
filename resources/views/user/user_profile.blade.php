<?php
  $asset = asset('/');
?>
@extends('user.master')
@section('html_header')
	@parent
	<script src="{{$asset}}js/jquery.min.js"></script>
	<link href="{{$asset}}css/bootstrap-editable.css" rel="stylesheet" type="text/css">
	<script src="js/bootstrap.min.js"></script>
	<script src="{{$asset}}js/bootstrap-editable.min.js"></script>

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
	               	reader.onload = function (e) 
	               	{
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
		
	<script>
		$(document).ready(function()
		{
			$.fn.editable.defaults.mode = 'inline';
			
			$('#stdname').editable({
				type:'text',
				url:'{{route('edit_name')}}',
				pk:1,
				params:{ '_token':'{{ csrf_token() }}'}
			});
	
		});
	</script>
@endsection

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
				<td>{!! $stats['par3_scoring']['avg']===""?'&nbsp':$stats['par3_scoring']['avg']; !!} </td>
				<td>{!! $stats['par4_scoring']['avg']===""?'&nbsp':$stats['par4_scoring']['avg']; !!} </td>
				<td>{!! $stats['par5_scoring']['avg']===""?'&nbsp':$stats['par5_scoring']['avg']; !!} </td>
				<td>{!! $stats['hash_par3']['avg']===""?'&nbsp':$stats['hash_par3']['avg']; !!} </td>
				<td>{!! $stats['hash_par4']['avg']===""?'&nbsp':$stats['hash_par4']['avg']; !!} </td>
				<td>{!! $stats['hash_par5']['avg']===""?'&nbsp':$stats['hash_par5']['avg']; !!} </td>
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
				<td>{!! $stats['eagles']['avg']===""?'&nbsp':$stats['eagles']['avg']; !!} </td>
				<td>{!! $stats['birdies']['avg']===""?'&nbsp':$stats['birdies']['avg']; !!} </td>
				<td>{!! $stats['pars']['avg']===""?'&nbsp':$stats['pars']['avg']; !!} </td>
				<td>{!! $stats['bogeys']['avg']===""?'&nbsp':$stats['bogeys']['avg']; !!} </td>
				<td>{!! $stats['dblbogeys']['avg']===""?'&nbsp':$stats['dblbogeys']['avg']; !!} </td>
				<td>{!! $stats['others']['avg']===""?'&nbsp':$stats['others']['avg']; !!} </td>
			</tr>
			<tr style="background: deepskyblue;">
				<th>FAIRWAYS</th>
				<th>FIR%</th>
				<th>GREENS</th>
				<th>GIR%</th>
				<th>PLAYED HOLES</th>
				<th># 18 HOLE RDS</th>
			</tr>
			<!--<tr>
				<td>{{$stats['fairways']['avg']}} </td>
				<td>{{$stats['fir_percentage']['avg']}}%</td>
				<td>{{$stats['greens']['avg']}}</td>
				<td>{{$stats['gir_percentage']['avg']}}%</td>
				<td>{{$stats['played_holes_equation']['avg']}}%</td>
				<td>{{$stats['hole_rds_18']['avg']}}</td>
			</tr>-->
			<tr>
				<td>{!! $stats['fairways']['avg']===""?'&nbsp':$stats['fairways']['avg']; !!} </td>
				<td>{!! $stats['fir_percentage']['avg']===""?'&nbsp':$stats['fir_percentage']['avg'].'%'; !!} </td>
				<td>{!! $stats['greens']['avg']===""?'&nbsp':$stats['greens']['avg']; !!} </td>
				<td>{!! $stats['gir_percentage']['avg']===""?'&nbsp':$stats['gir_percentage']['avg'].'%'; !!} </td>
				<td>{!! $stats['played_holes_equation']['avg']===""?'&nbsp':$stats['played_holes_equation']['avg'].'%'; !!} </td>
				<td>{!! $stats['hole_rds_18']['avg']===""?'&nbsp':$stats['hole_rds_18']['avg']; !!} </td>
			</tr>
			<tr style="background: brown;">
				<th>SCRAMBLE OPP</th>
				<th>SCRAMBL SAV</th>
				<th>SCRAMBLE %</th>
				<th>SAND SAVE OPP</th>
				<th>SAND SAVES</th>
				<th>SAND SAVE %</th>
			</tr>
			<!--<tr>
				<td>{{$stats['scramble_opp_equation']['avg']}} </td>
				<td>{{$stats['scramble_sav_equation']['avg']}}</td>
				<td>{{$stats['scramble_percentage']['avg']}}%</td>
				<td>{{$stats['sand_opp_equation']['avg']}}</td>
				<td>{{$stats['sand_sav_equation']['avg']}}</td>
				<td>{{$stats['sand_sav_percentage']['avg']}}%</td>
			</tr>-->
			<tr>
				<td>{!! $stats['scramble_opp_equation']['avg']===""?'&nbsp':$stats['scramble_opp_equation']['avg']; !!} </td>
				<td>{!! $stats['scramble_sav_equation']['avg']===""?'&nbsp':$stats['scramble_sav_equation']['avg']; !!} </td>
				<td>{!! $stats['scramble_percentage']['avg']===""?'&nbsp':$stats['scramble_percentage']['avg'].'%'; !!} </td>
				<td>{!! $stats['sand_opp_equation']['avg']===""?'&nbsp':$stats['sand_opp_equation']['avg']; !!} </td>
				<td>{!! $stats['sand_sav_equation']['avg']===""?'&nbsp':$stats['sand_sav_equation']['avg']; !!} </td>
				<td>{!! $stats['sand_sav_percentage']['avg']===""?'&nbsp':$stats['sand_sav_percentage']['avg'].'%'; !!} </td>
			</tr>
			<tr style="background: yellow;">
				<th>MISSED GIR</th>
				<th>PUTT 1 NOGIR</th>
				<th>AVG DIST. CHIP</th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
			<!--<tr>
				<td>{{$stats['missed_gir']['avg']}} </td>
				<td>{{$stats['put_1_nogir']['avg']}}</td>
				<td>{{$stats['avg_dist_chip']['avg']}}</td>
				<td></td>
				<td></td>
				<td></td>
			</tr>-->
			<tr>
				<td>{!! $stats['missed_gir']['avg']===""?'&nbsp':$stats['missed_gir']['avg']; !!} </td>
				<td>{!! $stats['put_1_nogir']['avg']===""?'&nbsp':$stats['put_1_nogir']['avg']; !!} </td>
				<td>{!! $stats['avg_dist_chip']['avg']===""?'&nbsp':$stats['avg_dist_chip']['avg']; !!} </td>
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
			<!--<tr>
				<td>{{$stats['total_putts']['avg']}} </td>
				<td>{{$stats['putts_div_hole']['avg']}}</td>
				<td>{{$stats['avg_score']['avg']}}</td>
				<td></td>
				<td></td>
				<td></td>
			</tr>-->
			<tr>
				<td>{!! $stats['total_putts']['avg']===""?'&nbsp':$stats['total_putts']['avg']; !!} </td>
				<td>{!! $stats['putts_div_hole']['avg']===""?'&nbsp':$stats['putts_div_hole']['avg']; !!} </td>
				<td>{!! $stats['avg_score']['avg']===""?'&nbsp':$stats['avg_score']['avg']; !!} </td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr style
			<tr>
				<th style="background: rgba(0,191,255,1);">Putts < 5'</th>
				<th style="background: rgba(0,191,255,0.8);">Putts 5' < 9'</th>
				<th  style="background: rgba(0,191,255,0.6);">Putts 10' < 19'</th>
				<th style="background: rgba(0,191,255,0.4);">Putts 20' < 29'</th>
				<th style="background: rgba(0,191,255,0.2);">Putts 30'+</th>
				<th></th>
			</tr>
			<!--<tr>
				<td>{{$stats['putt_opp_5_equation']['avg']}} </td>
				<td>{{$stats['putt_opp_5_9_equation']['avg']}}</td>
				<td>{{$stats['putt_opp_10_19_equation']['avg']}}</td>
				<td>{{$stats['putt_opp_20_29_equation']['avg']}}</td>
				<td>{{$stats['putt_opp_30_equation']['avg']}}</td>
				
			</tr>-->
			<tr>
				<td>{!! $stats['putt_opp_5_equation']['avg']===""?'&nbsp':$stats['putt_opp_5_equation']['avg']; !!} </td>
				<td>{!! $stats['putt_opp_5_9_equation']['avg']===""?'&nbsp':$stats['putt_opp_5_9_equation']['avg']; !!} </td>
				<td>{!! $stats['putt_opp_10_19_equation']['avg']===""?'&nbsp':$stats['putt_opp_10_19_equation']['avg']; !!} </td>
				<td>{!! $stats['putt_opp_20_29_equation']['avg']===""?'&nbsp':$stats['putt_opp_20_29_equation']['avg']; !!} </td>
				<td>{!! $stats['putt_opp_30_equation']['avg']===""?'&nbsp':$stats['putt_opp_30_equation']['avg']; !!} </td>
			</tr>
			<tr>
				<th style="background: rgba(0,191,255,1);">Putts Made < 5'</th>
				<th style="background: rgba(0,191,255,0.8);">Putts Made 5' < 9'</th>
				<th style="background: rgba(0,191,255,0.6);">Putts Made 10' < 19'</th>
				<th style="background: rgba(0,191,255,0.4);">Putts Made 20' < 29'</th>
				<th style="background: rgba(0,191,255,0.2);">Putts Made 30'+</th>
				<th></th>
			</tr>
			<!--<tr>
				<td>{{$stats['putt_make_5_equation']['avg']}} </td>
				<td>{{$stats['putt_make_5_9_equation']['avg']}}</td>
				<td>{{$stats['putt_make_10_19_equation']['avg']}}</td>
				<td>{{$stats['putt_make_20_29_equation']['avg']}}</td>
				<td>{{$stats['putt_make_30_equation']['avg']}}</td>

			</tr>-->
			<tr>
				<td>{!! $stats['putt_make_5_equation']['avg']==""?'&nbsp':$stats['putt_make_5_equation']['avg']; !!} </td>
				<td>{!! $stats['putt_make_5_9_equation']['avg']===""?'&nbsp':$stats['putt_make_5_9_equation']['avg']; !!} </td>
				<td>{!! $stats['putt_make_10_19_equation']['avg']===""?'&nbsp':$stats['putt_make_10_19_equation']['avg']; !!} </td>
				<td>{!! $stats['putt_make_20_29_equation']['avg']===""?'&nbsp':$stats['putt_make_20_29_equation']['avg']; !!} </td>
				<td>{!! $stats['putt_make_30_equation']['avg']===""?'&nbsp':$stats['putt_make_30_equation']['avg']; !!} </td>
			</tr>
			<tr>
				<th style="background: rgba(0,191,255,1);">Make % < 5'</th>
				<th style="background: rgba(0,191,255,0.8);">Make % 5' < 9'</th>
				<th style="background: rgba(0,191,255,0.6);">Make % 10' < 19'</th>
				<th style="background: rgba(0,191,255,0.4);">Make % 20' < 29'</th>
				<th style="background: rgba(0,191,255,0.2);">Make % 30'+</th>
				<th></th>
			</tr>
			<!--<tr>
				<td>{{$stats['make_percentage_5']['avg']}}%</td>
				<td>{{$stats['make_percentage_5_9']['avg']}}%</td>
				<td>{{$stats['make_percentage_10_19']['avg']}}%</td>
				<td>{{$stats['make_percentage_20_29']['avg']}}%</td>
				<td>{{$stats['make_percentage_30']['avg']}}%</td>
			</tr>-->
			<tr>
				<td>{!! $stats['make_percentage_5']['avg']===""?'&nbsp':$stats['make_percentage_5']['avg'].'%'; !!} </td>
				<td>{!! $stats['make_percentage_5_9']['avg']===""?'&nbsp':$stats['make_percentage_5_9']['avg'].'%'; !!} </td>
				<td>{!! $stats['make_percentage_10_19']['avg']===""?'&nbsp':$stats['make_percentage_10_19']['avg'].'%'; !!} </td>
				<td>{!! $stats['make_percentage_20_29']['avg']===""?'&nbsp':$stats['make_percentage_20_29']['avg'].'%'; !!} </td>
				<td>{!! $stats['make_percentage_30']['avg']===""?'&nbsp':$stats['make_percentage_30']['avg'].'%'; !!} </td>
			</tr>
			
		</table>
	</div>
</div>

@stop