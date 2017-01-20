@extends('user.master')
<?php
  $asset = asset('/');
?>

@section('html_header')
	@parent
	<style>
		input{border:0px solid #000; margin:0; background:transparent; width:100%;text-align: center;}
		table tr td{border-right:1px solid #ddd; border-bottom:1px solid #ddd;width: 30px;}
		table{background: #fff none repeat scroll 0 0;
			border-left: 1px solid #ddd;
			border-top: 1px solid #ddd;}
		/*table tr:first-child{background:#006400; color:#fff;font-weight: bold;}*/
		
		td.numeric {
			padding: 8px 0px !important;
		}
		.black{
			background: #000;
		}
		.pink{
			background: #FFB6C1;
		}
		.ash{
			background:#808080;
		}
		
		#spreadSheet td 
		{
			min-width: 45px;
			padding: 0px!important;
		}
		#spreadSheet input {
		  border:none;
		  width:100%;
		  font-family: Verdana, Helvetica, Arial, FreeSans, sans-serif;
		  font-size:12px;
		  padding: 8px 0px!important;
		}
	</style>
@stop


@section('content')
		<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		<!-- Add your site or application content here -->
		
		<div class="container-fluid">
			<div class="row">
				<div class="main">
					<h3 class="page-header">Round Detail</h3>
					<form action = "{{ route('editForm', ['course_id'=>$courseId]) }}" method = "post" align="center">
						<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
					<div class="form-group">
						<div class="col-md-2"><label>Location</label></div>
						<div class="col-md-4">
							<input type="text" value="{{$locationName}}" class="form-control" name="nameFromUser">
							
						</div>
						<div class="col-md-2"><label>Date</label></div>
						<div class="col-md-4">
							{{$dates}}
						</div>
					</div>
					<br>
					<br>
					<br>
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table" id='spreadSheet'>
									
									<tr style="background: #006400;color:#fff;font-weight: bold;text-align:center">
										<td></td>
										<td>1</td>
										<td>2</td>
										<td>3</td>
										<td>4</td>
										<td>5</td>
										<td>6</td>
										<td>7</td>
										<td>8</td>
										<td>9</td>
										<td>OUT</td>
										<td>10</td>
										<td>11</td>
										<td>12</td>
										<td>13</td>
										<td>14</td>
										<td>15</td>
										<td>16</td>
										<td>17</td>
										<td>18</td>
										<td>&nbsp;&nbsp;IN&nbsp;&nbsp;</td>
										<td>TOT</td>
									</tr>
									<tr>
										<td>HOLE PAR</td>

										<td class="pink"><input value="{{$gameResult['hole_pair']['input'][0]}}" class="hole_par_out" type="text" Name="gameResult[hole_pair][input][0]" /></td>
										<td class="pink"><input value="{{$gameResult['hole_pair']['input'][1]}}" class="hole_par_out" type="text" Name="gameResult[hole_pair][input][1]" /></td>
										<td class="pink"><input value="{{$gameResult['hole_pair']['input'][2]}}" class="hole_par_out" type="text" Name="gameResult[hole_pair][input][2]" /></td>
										<td class="pink"><input value="{{$gameResult['hole_pair']['input'][3]}}" class="hole_par_out" type="text" Name="gameResult[hole_pair][input][3]" /></td>
										<td class="pink"><input value="{{$gameResult['hole_pair']['input'][4]}}" class="hole_par_out" type="text" Name="gameResult[hole_pair][input][4]" /></td>
										<td class="pink"><input value="{{$gameResult['hole_pair']['input'][5]}}" class="hole_par_out" type="text" Name="gameResult[hole_pair][input][5]" /></td>
										<td class="pink"><input value="{{$gameResult['hole_pair']['input'][6]}}" class="hole_par_out" type="text" Name="gameResult[hole_pair][input][6]" /></td>
										<td class="pink"><input value="{{$gameResult['hole_pair']['input'][7]}}" class="hole_par_out" type="text" Name="gameResult[hole_pair][input][7]" /></td>
										<td class="pink"><input value="{{$gameResult['hole_pair']['input'][8]}}" class="hole_par_out" type="text" Name="gameResult[hole_pair][input][8]" /></td>

										<td><input value="{{$gameResult['hole_pair']['out_sum']}}"" id="hole_par_out_sum" readonly="readonly" Name="gameResult[hole_pair][out_sum]" /></td>

										<td class="pink"><input value="{{$gameResult['hole_pair']['input'][9]}}" class=" hole_par_in" type="text" Name="gameResult[hole_pair][input][9]" /></td>
										<td class="pink"><input value="{{$gameResult['hole_pair']['input'][10]}}" class=" hole_par_in" type="text" Name="gameResult[hole_pair][input][10]" /></td>
										<td class="pink"><input value="{{$gameResult['hole_pair']['input'][11]}}" class=" hole_par_in" type="text" Name="gameResult[hole_pair][input][11]" /></td>
										<td class="pink"><input value="{{$gameResult['hole_pair']['input'][12]}}" class=" hole_par_in" type="text" Name="gameResult[hole_pair][input][12]" /></td>
										<td class="pink"><input value="{{$gameResult['hole_pair']['input'][13]}}" class=" hole_par_in" type="text" Name="gameResult[hole_pair][input][13]" /></td>
										<td class="pink"><input value="{{$gameResult['hole_pair']['input'][14]}}" class=" hole_par_in" type="text" Name="gameResult[hole_pair][input][14]" /></td>
										<td class="pink"><input value="{{$gameResult['hole_pair']['input'][15]}}" class=" hole_par_in" type="text" Name="gameResult[hole_pair][input][15]" /></td>
										<td class="pink"><input value="{{$gameResult['hole_pair']['input'][16]}}" class=" hole_par_in" type="text" Name="gameResult[hole_pair][input][16]" /></td>
										<td class="pink"><input value="{{$gameResult['hole_pair']['input'][17]}}" class=" hole_par_in" type="text" Name="gameResult[hole_pair][input][17]" /></td>
										
										<td><input value="{{$gameResult['hole_pair']['in_sum']}}" id="hole_par_in_sum" readonly="readonly" Name="gameResult[hole_pair][in_sum]" /></td>

										<td><input value="{{$gameResult['hole_pair']['tot']}}" id="hole_par_tot" readonly="readonly" Name="gameResult[hole_pair][tot]" /></td>
									</tr>

									<tr>
										<td>SCORE</td>
										<td><input value="{{$gameResult['score']['input'][0]}}" class="score_out" type="text" Name="gameResult[score][input][0]" /></td>
										<td><input value="{{$gameResult['score']['input'][1]}}" class="score_out" type="text" Name="gameResult[score][input][1]" /></td>
										<td><input value="{{$gameResult['score']['input'][2]}}" class="score_out" type="text" Name="gameResult[score][input][2]" /></td>
										<td><input value="{{$gameResult['score']['input'][3]}}" class="score_out" type="text" Name="gameResult[score][input][3]" /></td>
										<td><input value="{{$gameResult['score']['input'][4]}}" class="score_out" type="text" Name="gameResult[score][input][4]" /></td>
										<td><input value="{{$gameResult['score']['input'][5]}}" class="score_out" type="text" Name="gameResult[score][input][5]" /></td>
										<td><input value="{{$gameResult['score']['input'][6]}}" class="score_out" type="text" Name="gameResult[score][input][6]" /></td>
										<td><input value="{{$gameResult['score']['input'][7]}}" class="score_out" type="text" Name="gameResult[score][input][7]" /></td>
										<td><input value="{{$gameResult['score']['input'][8]}}" class="score_out" type="text" Name="gameResult[score][input][8]" /></td>

										<td><input value="{{$gameResult['score']['out_sum']}}" id="score_out_sum" readonly="readonly" Name="gameResult[score][out_sum]" /></td>

										<td><input value="{{$gameResult['score']['input'][9]}}" class="score_in" type="text" Name="gameResult[score][input][9]" /></td>
										<td><input value="{{$gameResult['score']['input'][10]}}" class="score_in" type="text" Name="gameResult[score][input][10]" /></td>
										<td><input value="{{$gameResult['score']['input'][11]}}" class="score_in" type="text" Name="gameResult[score][input][11]" /></td>
										<td><input value="{{$gameResult['score']['input'][12]}}" class="score_in" type="text" Name="gameResult[score][input][12]" /></td>
										<td><input value="{{$gameResult['score']['input'][13]}}" class="score_in" type="text" Name="gameResult[score][input][13]" /></td>
										<td><input value="{{$gameResult['score']['input'][14]}}" class="score_in" type="text" Name="gameResult[score][input][14]" /></td>
										<td><input value="{{$gameResult['score']['input'][15]}}" class="score_in" type="text" Name="gameResult[score][input][15]" /></td>
										<td><input value="{{$gameResult['score']['input'][16]}}" class="score_in" type="text" Name="gameResult[score][input][16]" /></td>
										<td><input value="{{$gameResult['score']['input'][17]}}" class="score_in" type="text" Name="gameResult[score][input][17]" /></td>
										
										<td><input value="{{$gameResult['score']['in_sum']}}" id ="score_in_sum" readonly="readonly" Name="gameResult[score][in_sum]" /></td>
										<td><input value="{{$gameResult['score']['tot']}}" id="score_tot" readonly="readonly" Name="gameResult[score][tot]" /></td>
									</tr>

									<tr>
										<td>FIR</td>
										<td><input value="{{$gameResult['fir']['input'][0]}}" class="numeric fir_out" type="text" Name="gameResult[fir][input][0]" /></td>
										<td><input value="{{$gameResult['fir']['input'][1]}}" class="numeric fir_out" type="text" Name="gameResult[fir][input][1]" /></td>
										<td><input value="{{$gameResult['fir']['input'][2]}}" class="numeric fir_out" type="text" Name="gameResult[fir][input][2]" /></td>
										<td><input value="{{$gameResult['fir']['input'][3]}}" class="numeric fir_out" type="text" Name="gameResult[fir][input][3]" /></td>
										<td><input value="{{$gameResult['fir']['input'][4]}}" class="numeric fir_out" type="text" Name="gameResult[fir][input][4]" /></td>
										<td><input value="{{$gameResult['fir']['input'][5]}}" class="numeric fir_out" type="text" Name="gameResult[fir][input][5]" /></td>
										<td><input value="{{$gameResult['fir']['input'][6]}}" class="numeric fir_out" type="text" Name="gameResult[fir][input][6]" /></td>
										<td><input value="{{$gameResult['fir']['input'][7]}}" class="numeric fir_out" type="text" Name="gameResult[fir][input][7]" /></td>
										<td><input value="{{$gameResult['fir']['input'][8]}}" class="numeric fir_out" type="text" Name="gameResult[fir][input][8]" /></td>

										<td><input value="{{$gameResult['fir']['out_sum']}}" id ="fir_out_sum" readonly="readonly" Name="gameResult[fir][out_sum]" /></td>

										<td><input value="{{$gameResult['fir']['input'][9]}}" class="numeric fir_in"  type="text" Name="gameResult[fir][input][9]" /></td>
										<td><input value="{{$gameResult['fir']['input'][10]}}" class="numeric fir_in" type="text" Name="gameResult[fir][input][10]" /></td>
										<td><input value="{{$gameResult['fir']['input'][11]}}" class="numeric fir_in"  type="text" Name="gameResult[fir][input][11]" /></td>
										<td><input value="{{$gameResult['fir']['input'][12]}}" class="numeric fir_in"  type="text" Name="gameResult[fir][input][12]" /></td>
										<td><input value="{{$gameResult['fir']['input'][13]}}" class="numeric fir_in"  type="text" Name="gameResult[fir][input][13]" /></td>
										<td><input value="{{$gameResult['fir']['input'][14]}}" class="numeric fir_in"  type="text" Name="gameResult[fir][input][14]" /></td>
										<td><input value="{{$gameResult['fir']['input'][15]}}" class="numeric fir_in"  type="text" Name="gameResult[fir][input][15]" /></td>
										<td><input value="{{$gameResult['fir']['input'][16]}}" class="numeric fir_in"  type="text" Name="gameResult[fir][input][16]" /></td>
										<td><input value="{{$gameResult['fir']['input'][17]}}" class="numeric fir_in"  type="text" Name="gameResult[fir][input][17]" /></td>
										
										<td><input value="{{$gameResult['fir']['in_sum']}}" id="fir_in_sum" readonly="readonly" Name="gameResult[fir][in_sum]" /></td>
										<td><input value="{{$gameResult['fir']['tot']}}" id="fir_tot" readonly="readonly" Name="gameResult[fir][tot]" /></td>
									</tr>

									<tr>
										<td>GIR</td>
										<td><input value="{{$gameResult['gir']['input'][0]}}" class="numeric gir_out" type="text" Name="gameResult[gir][input][0]" /></td>
										<td><input value="{{$gameResult['gir']['input'][1]}}" class="numeric gir_out" type="text" Name="gameResult[gir][input][1]" /></td>

										<td><input value="{{$gameResult['gir']['input'][2]}}" class="numeric gir_out" type="text" Name="gameResult[gir][input][2]" /></td>
										<td><input value="{{$gameResult['gir']['input'][3]}}" class="numeric gir_out" type="text" Name="gameResult[gir][input][3]" /></td>
										<td><input value="{{$gameResult['gir']['input'][4]}}" class="numeric gir_out" type="text" Name="gameResult[gir][input][4]" /></td>
										<td><input value="{{$gameResult['gir']['input'][5]}}" class="numeric gir_out" type="text" Name="gameResult[gir][input][5]" /></td>
										<td><input value="{{$gameResult['gir']['input'][6]}}" class="numeric gir_out" type="text" Name="gameResult[gir][input][6]" /></td>
										<td><input value="{{$gameResult['gir']['input'][7]}}" class="numeric gir_out" type="text" Name="gameResult[gir][input][7]" /></td>

										<td><input value="{{$gameResult['gir']['input'][8]}}" class="numeric gir_out" type="text" Name="gameResult[gir][input][8]" /></td>

										<td><input value="{{$gameResult['gir']['out_sum']}}" id ="gir_out_sum" readonly="readonly" Name="gameResult[gir][out_sum]" /></td>

										
										<td><input value="{{$gameResult['gir']['input'][9]}}" class="numeric gir_in"  type="text" Name="gameResult[gir][input][9]" /></td>
										<td><input value="{{$gameResult['gir']['input'][10]}}" class="numeric gir_in" type="text" Name="gameResult[gir][input][10]" /></td>
										<td><input value="{{$gameResult['gir']['input'][11]}}" class="numeric gir_in"  type="text" Name="gameResult[gir][input][11]" /></td>
										<td><input value="{{$gameResult['gir']['input'][12]}}" class="numeric gir_in"  type="text" Name="gameResult[gir][input][12]" /></td>
										<td><input value="{{$gameResult['gir']['input'][13]}}" class="numeric gir_in"  type="text" Name="gameResult[gir][input][13]" /></td>
										<td><input value="{{$gameResult['gir']['input'][14]}}" class="numeric gir_in"  type="text" Name="gameResult[gir][input][14]" /></td>
										<td><input value="{{$gameResult['gir']['input'][15]}}" class="numeric gir_in"  type="text" Name="gameResult[gir][input][15]" /></td>
										<td><input value="{{$gameResult['gir']['input'][16]}}" class="numeric gir_in"  type="text" Name="gameResult[gir][input][16]" /></td>
										<td><input value="{{$gameResult['gir']['input'][17]}}" class="numeric gir_in"  type="text" Name="gameResult[gir][input][17]" /></td>
										
										<td><input value="{{$gameResult['gir']['in_sum']}}" id="gir_in_sum" readonly="readonly" Name="gameResult[gir][in_sum]" /></td>
										<td><input value="{{$gameResult['gir']['tot']}}" id="gir_tot" readonly="readonly" Name="gameResult[gir][tot]" /></td>
									</tr>

									<tr>
										<td>GIR DIST PUTT 1</td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>

										<td><input value="{{$gameResult['gir_dist_putt_1']['out_sum']}}" type="text" id="gir_dist_putt_1_out_sum" Name="gameResult[gir_dist_putt_1][out_sum]" readonly="readonly"/></td>

										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>

										<td><input value="{{$gameResult['gir_dist_putt_1']['in_sum']}}" type="text" id="gir_dist_putt_1_in_sum" Name="gameResult[gir_dist_putt_1][in_sum]" readonly="readonly"/></td>
										<td><input value="{{$gameResult['gir_dist_putt_1']['tot']}}" type="text" id="gir_dist_putt_1_tot" Name="gameResult[gir_dist_putt_1][tot]" readonly="readonly"/></td>
									</tr>

									<tr>
										<td>AVG DIST HOL GIR</td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input value="{{$gameResult['avg_dist_hol_gir']['out_sum']}}" id='avg_dist_hol_gir_out' type="text" Name="gameResult[avg_dist_hol_gir][out_sum]" readonly="readonly"/></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>

										<td><input value="{{$gameResult['avg_dist_hol_gir']['in_sum']}}" id='avg_dist_hol_gir_in' type="text" Name="gameResult[avg_dist_hol_gir][in_sum]" readonly="readonly"/></td>
										<td><input value="{{$gameResult['avg_dist_hol_gir']['tot']}}" type="text" id='avg_dist_hol_gir_tot' Name="gameResult[avg_dist_hol_gir][tot]" readonly="readonly"/></td>
									</tr>

									<tr>
										<td>PUTT 1</td>
										<td><input value="{{$gameResult['putt_1']['input'][0]}}" class="numeric putt_1_out" type="text" Name="gameResult[putt_1][input][0]" /></td>
										<td><input value="{{$gameResult['putt_1']['input'][1]}}" class="numeric putt_1_out" type="text" Name="gameResult[putt_1][input][1]" /></td>
										<td><input value="{{$gameResult['putt_1']['input'][2]}}" class="numeric putt_1_out" type="text" Name="gameResult[putt_1][input][2]" /></td>
										<td><input value="{{$gameResult['putt_1']['input'][3]}}" class="numeric putt_1_out" type="text" Name="gameResult[putt_1][input][3]" /></td>
										<td><input value="{{$gameResult['putt_1']['input'][4]}}" class="numeric putt_1_out" type="text" Name="gameResult[putt_1][input][4]" /></td>
										<td><input value="{{$gameResult['putt_1']['input'][5]}}" class="numeric putt_1_out" type="text" Name="gameResult[putt_1][input][5]" /></td>
										<td><input value="{{$gameResult['putt_1']['input'][6]}}" class="numeric putt_1_out" type="text" Name="gameResult[putt_1][input][6]" /></td>
										<td><input value="{{$gameResult['putt_1']['input'][7]}}" class="numeric putt_1_out" type="text" Name="gameResult[putt_1][input][7]" /></td>
										<td><input value="{{$gameResult['putt_1']['input'][8]}}" class="numeric putt_1_out" type="text" Name="gameResult[putt_1][input][8]" /></td>

										<td><input value="{{$gameResult['putt_1']['out_sum']}}" id ="putt_1_out_sum" readonly="readonly" Name="gameResult[putt_1][out_sum]" readonly="readonly" /></td>

										<td><input value="{{$gameResult['putt_1']['input'][9]}}" class="numeric putt_1_in"  type="text" Name="gameResult[putt_1][input][9]" /></td>
										<td><input value="{{$gameResult['putt_1']['input'][10]}}" class="numeric putt_1_in" type="text" Name="gameResult[putt_1][input][10]" /></td>
										<td><input value="{{$gameResult['putt_1']['input'][11]}}" class="numeric putt_1_in"  type="text" Name="gameResult[putt_1][input][11]" /></td>
										<td><input value="{{$gameResult['putt_1']['input'][12]}}" class="numeric putt_1_in"  type="text" Name="gameResult[putt_1][input][12]" /></td>
										<td><input value="{{$gameResult['putt_1']['input'][13]}}" class="numeric putt_1_in"  type="text" Name="gameResult[putt_1][input][13]" /></td>
										<td><input value="{{$gameResult['putt_1']['input'][14]}}" class="numeric putt_1_in"  type="text" Name="gameResult[putt_1][input][14]" /></td>
										<td><input value="{{$gameResult['putt_1']['input'][15]}}" class="numeric putt_1_in"  type="text" Name="gameResult[putt_1][input][15]" /></td>
										<td><input value="{{$gameResult['putt_1']['input'][16]}}" class="numeric putt_1_in"  type="text" Name="gameResult[putt_1][input][16]" /></td>
										<td><input value="{{$gameResult['putt_1']['input'][17]}}" class="numeric putt_1_in"  type="text" Name="gameResult[putt_1][input][17]" /></td>
										
										
										<td><input value="{{$gameResult['putt_1']['in_sum']}}" id="putt_1_in_sum" readonly="readonly" Name="gameResult[putt_1][in_sum]" readonly="readonly"/></td>
										<td><input value="{{$gameResult['putt_1']['tot']}}" id="putt_1_tot" readonly="readonly" Name="gameResult[putt_1][tot]" readonly="readonly"/></td>
									</tr>

									<tr>
										<td>DIST AFT PUTT 1</td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input value="{{$gameResult['dist_aft_putt_1']['out_sum']}}" type="text" id='dist_aft_putt_1_out_sum' Name="gameResult[dist_aft_putt_1][out_sum]" readonly="readonly"/></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input value="{{$gameResult['dist_aft_putt_1']['in_sum']}}" type="text" id='dist_aft_putt_1_in_sum' Name="gameResult[dist_aft_putt_1][in_sum]" readonly="readonly"/></td>
										<td><input value="{{$gameResult['dist_aft_putt_1']['tot']}}" type="text" id='dist_aft_putt_1_tot' Name="gameResult[dist_aft_putt_1][tot]" readonly="readonly"/></td>
									</tr>
									<tr>
										<td>NUM PUTT 2</td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input value="{{$gameResult['num_putt_2']['out_sum']}}"  type="text" id='num_putt_2_out_sum' readonly="readonly" Name="gameResult[num_putt_2][out_sum]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input  value="{{$gameResult['num_putt_2']['in_sum']}}" type="text" id='num_putt_2_in_sum' Name="gameResult[num_putt_2][in_sum]" readonly="readonly"/></td>
										<td><input value="{{$gameResult['num_putt_2']['tot']}}"  type="text" id='num_putt_2_tot' Name="gameResult[num_putt_2][tot]" readonly="readonly"/></td>
									</tr>
									<tr>
										<td>AVG DIST HOL PUTT1</td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input value="{{$gameResult['avg_dist_hole_putt1']['out_sum']}}" type="text" id="avg_dist_hole_putt1_out_sum" Name="gameResult[avg_dist_hole_putt1][out_sum]" readonly="readonly"/></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input value="{{$gameResult['avg_dist_hole_putt1']['in_sum']}}" type="text" id="avg_dist_hole_putt1_in_sum" Name="gameResult[avg_dist_hole_putt1][in_sum]" readonly="readonly"/></td>
										<td><input value="{{$gameResult['avg_dist_hole_putt1']['tot']}}" type="text" id="avg_dist_hole_putt1_tot" Name="gameResult[avg_dist_hole_putt1][tot]" readonly="readonly"/></td>
									</tr>
									<tr>
										<td>PUTT 2</td>
										<td><input value="{{$gameResult['putt_2']['input'][0]}}" class="numeric putt_2_out" type="text" Name="gameResult[putt_2][input][0]" /></td>
										<td><input value="{{$gameResult['putt_2']['input'][1]}}" class="numeric putt_2_out" type="text" Name="gameResult[putt_2][input][1]" /></td>
										<td><input value="{{$gameResult['putt_2']['input'][2]}}" class="numeric putt_2_out" type="text" Name="gameResult[putt_2][input][2]" /></td>
										<td><input value="{{$gameResult['putt_2']['input'][3]}}" class="numeric putt_2_out" type="text" Name="gameResult[putt_2][input][3]" /></td>
										<td><input value="{{$gameResult['putt_2']['input'][4]}}" class="numeric putt_2_out" type="text" Name="gameResult[putt_2][input][4]" /></td>
										<td><input value="{{$gameResult['putt_2']['input'][5]}}" class="numeric putt_2_out" type="text" Name="gameResult[putt_2][input][5]" /></td>
										<td><input value="{{$gameResult['putt_2']['input'][6]}}" class="numeric putt_2_out" type="text" Name="gameResult[putt_2][input][6]" /></td>
										<td><input value="{{$gameResult['putt_2']['input'][7]}}" class="numeric putt_2_out" type="text" Name="gameResult[putt_2][input][7]" /></td>
										<td><input value="{{$gameResult['putt_2']['input'][8]}}" class="numeric putt_2_out" type="text" Name="gameResult[putt_2][input][8]" /></td>

										<td><input value="{{$gameResult['putt_2']['out_sum']}}" id ="putt_2_out_sum" readonly="readonly" Name="gameResult[putt_2][out_sum]" /></td>

										<td><input value="{{$gameResult['putt_2']['input'][10]}}" class="numeric putt_2_in" type="text" Name="gameResult[putt_2][input][10]" /></td>
										<td><input value="{{$gameResult['putt_2']['input'][11]}}" class="numeric putt_2_in"  type="text" Name="gameResult[putt_2][input][11]" /></td>
										<td><input value="{{$gameResult['putt_2']['input'][12]}}" class="numeric putt_2_in"  type="text" Name="gameResult[putt_2][input][12]" /></td>
										<td><input value="{{$gameResult['putt_2']['input'][13]}}" class="numeric putt_2_in"  type="text" Name="gameResult[putt_2][input][13]" /></td>
										<td><input value="{{$gameResult['putt_2']['input'][14]}}" class="numeric putt_2_in"  type="text" Name="gameResult[putt_2][input][14]" /></td>
										<td><input value="{{$gameResult['putt_2']['input'][15]}}" class="numeric putt_2_in"  type="text" Name="gameResult[putt_2][input][15]" /></td>
										<td><input value="{{$gameResult['putt_2']['input'][16]}}" class="numeric putt_2_in"  type="text" Name="gameResult[putt_2][input][16]" /></td>
										<td><input value="{{$gameResult['putt_2']['input'][17]}}" class="numeric putt_2_in"  type="text" Name="gameResult[putt_2][input][17]" /></td>
										<td><input value="{{$gameResult['putt_2']['input'][18]}}" class="numeric putt_2_in"  type="text" Name="gameResult[putt_2][input][18]" /></td>
			
										<td><input value="{{$gameResult['putt_2']['in_sum']}}" id="putt_2_in_sum" readonly="readonly" Name="gameResult[putt_2][in_sum]" /></td>
										<td><input value="{{$gameResult['putt_2']['tot']}}" id="putt_2_tot" readonly="readonly" Name="gameResult[putt_2][tot]" /></td>
									</tr>
									<tr>
										<td>NUM PUTT 3</td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input value="{{$gameResult['num_putt_3']['out_sum']}}" type="text" id='num_putt_3_out_sum' Name="gameResult[num_putt_3][out_sum]" readonly="readonly"/></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input value="{{$gameResult['num_putt_3']['in_sum']}}" type="text" id='num_putt_3_in_sum' Name="gameResult[num_putt_3][in_sum]" readonly="readonly"/></td>
										<td><input value="{{$gameResult['num_putt_3']['tot']}}" type="text" id='num_putt_3_tot' Name="gameResult[num_putt_3][tot]" readonly="readonly"/></td>
									</tr>

									<tr>
										<td>PUTT 3</td>
										<td><input value="{{$gameResult['putt_3']['input'][0]}}" class="numeric putt_3_out" type="text" Name="gameResult[putt_3][input][0]" /></td>
										<td><input value="{{$gameResult['putt_3']['input'][1]}}" class="numeric putt_3_out" type="text" Name="gameResult[putt_3][input][1]" /></td>
										<td><input value="{{$gameResult['putt_3']['input'][2]}}" class="numeric putt_3_out" type="text" Name="gameResult[putt_3][input][2]" /></td>
										<td><input value="{{$gameResult['putt_3']['input'][3]}}" class="numeric putt_3_out" type="text" Name="gameResult[putt_3][input][3]" /></td>
										<td><input value="{{$gameResult['putt_3']['input'][4]}}" class="numeric putt_3_out" type="text" Name="gameResult[putt_3][input][4]" /></td>
										<td><input value="{{$gameResult['putt_3']['input'][5]}}" class="numeric putt_3_out" type="text" Name="gameResult[putt_3][input][5]" /></td>
										<td><input value="{{$gameResult['putt_3']['input'][6]}}" class="numeric putt_3_out" type="text" Name="gameResult[putt_3][input][6]" /></td>
										<td><input value="{{$gameResult['putt_3']['input'][7]}}" class="numeric putt_3_out" type="text" Name="gameResult[putt_3][input][7]" /></td>
										<td><input value="{{$gameResult['putt_3']['input'][8]}}" class="numeric putt_3_out" type="text" Name="gameResult[putt_3][input][8]" /></td>

										<td><input value="{{$gameResult['putt_3']['out_sum']}}" id ="putt_3_out_sum" readonly="readonly" Name="gameResult[putt_3][out_sum]" /></td>

										<td><input value="{{$gameResult['putt_3']['input'][9]}}" class="numeric putt_3_in"  type="text" Name="gameResult[putt_3][input][9]" /></td>
										<td><input value="{{$gameResult['putt_3']['input'][10]}}" class="numeric putt_3_in"  type="text" Name="gameResult[putt_3][input][10]" /></td>
										<td><input value="{{$gameResult['putt_3']['input'][11]}}" class="numeric putt_3_in"  type="text" Name="gameResult[putt_3][input][11]" /></td>
										<td><input value="{{$gameResult['putt_3']['input'][12]}}" class="numeric putt_3_in"  type="text" Name="gameResult[putt_3][input][12]" /></td>
										<td><input value="{{$gameResult['putt_3']['input'][13]}}" class="numeric putt_3_in"  type="text" Name="gameResult[putt_3][input][13]" /></td>
										<td><input value="{{$gameResult['putt_3']['input'][14]}}" class="numeric putt_3_in"  type="text" Name="gameResult[putt_3][input][14]" /></td>
										<td><input value="{{$gameResult['putt_3']['input'][15]}}" class="numeric putt_3_in"  type="text" Name="gameResult[putt_3][input][15]" /></td>
										<td><input value="{{$gameResult['putt_3']['input'][16]}}" class="numeric putt_3_in"  type="text" Name="gameResult[putt_3][input][16]" /></td>
										<td><input value="{{$gameResult['putt_3']['input'][17]}}" class="numeric putt_3_in"  type="text" Name="gameResult[putt_3][input][17]" /></td>
										
										<td><input value="{{$gameResult['putt_3']['in_sum']}}" id="putt_3_in_sum" readonly="readonly" Name="gameResult[putt_3][in_sum]" /></td>
										<td><input value="{{$gameResult['putt_3']['tot']}}" id="putt_3_tot" readonly="readonly" Name="gameResult[putt_3][tot]" /></td>
									</tr>

									<tr>
										<td>TOT PUTT</td>
										<td class="ash"><input value="{{$gameResult['tot_putt']['input'][0]}}" id='tot_putt_out_0' readonly="readonly" class="numeric tot_putt_out" type="text" Name="gameResult[tot_putt][input][0]" /></td>
										<td class="ash"><input value="{{$gameResult['tot_putt']['input'][1]}}" id='tot_putt_out_1' readonly="readonly" class="numeric tot_putt_out" type="text" Name="gameResult[tot_putt][input][1]" /></td>
										<td class="ash"><input value="{{$gameResult['tot_putt']['input'][2]}}" id='tot_putt_out_2' readonly="readonly" class="numeric tot_putt_out" type="text" Name="gameResult[tot_putt][input][2]" /></td>
										<td class="ash"><input value="{{$gameResult['tot_putt']['input'][3]}}" id='tot_putt_out_3' readonly="readonly" class="numeric tot_putt_out" type="text" Name="gameResult[tot_putt][input][3]" /></td>
										<td class="ash"><input value="{{$gameResult['tot_putt']['input'][4]}}" id='tot_putt_out_4' readonly="readonly" class="numeric tot_putt_out" type="text" Name="gameResult[tot_putt][input][4]" /></td>
										<td class="ash"><input value="{{$gameResult['tot_putt']['input'][5]}}" id='tot_putt_out_5' readonly="readonly" class="numeric tot_putt_out" type="text" Name="gameResult[tot_putt][input][5]" /></td>
										<td class="ash"><input value="{{$gameResult['tot_putt']['input'][6]}}" id='tot_putt_out_6' readonly="readonly" class="numeric tot_putt_out" type="text" Name="gameResult[tot_putt][input][6]" /></td>
										<td class="ash"><input value="{{$gameResult['tot_putt']['input'][7]}}" id='tot_putt_out_7' readonly="readonly" class="numeric tot_putt_out" type="text" Name="gameResult[tot_putt][input][7]" /></td>
										<td class="ash"><input value="{{$gameResult['tot_putt']['input'][8]}}" id='tot_putt_out_8' readonly="readonly" class="numeric tot_putt_out" type="text" Name="gameResult[tot_putt][input][8]" /></td>

										<td><input value="{{$gameResult['tot_putt']['out_sum']}}" id ="tot_putt_out_sum" readonly="readonly" Name="gameResult[tot_putt][out_sum]" /></td>

										<td class="ash"><input value="{{$gameResult['tot_putt']['input'][9]}}" id='tot_putt_in_0' readonly="readonly" class="numeric tot_putt_in"  type="text" Name="gameResult[tot_putt][input][9]" /></td>
										<td class="ash"><input value="{{$gameResult['tot_putt']['input'][10]}}" id='tot_putt_in_1' readonly="readonly" class="numeric tot_putt_in"  type="text" Name="gameResult[tot_putt][input][10]" /></td>
										<td class="ash"><input value="{{$gameResult['tot_putt']['input'][11]}}" id='tot_putt_in_2' readonly="readonly" class="numeric tot_putt_in"  type="text" Name="gameResult[tot_putt][input][11]" /></td>
										<td class="ash"><input value="{{$gameResult['tot_putt']['input'][12]}}" id='tot_putt_in_3' readonly="readonly" class="numeric tot_putt_in"  type="text" Name="gameResult[tot_putt][input][12]" /></td>
										<td class="ash"><input value="{{$gameResult['tot_putt']['input'][13]}}" id='tot_putt_in_4' readonly="readonly" class="numeric tot_putt_in"  type="text" Name="gameResult[tot_putt][input][13]" /></td>
										<td class="ash"><input value="{{$gameResult['tot_putt']['input'][14]}}" id='tot_putt_in_5' readonly="readonly" class="numeric tot_putt_in"  type="text" Name="gameResult[tot_putt][input][14]" /></td>
										<td class="ash"><input value="{{$gameResult['tot_putt']['input'][15]}}" id='tot_putt_in_6' readonly="readonly" class="numeric tot_putt_in"  type="text" Name="gameResult[tot_putt][input][15]" /></td>
										<td class="ash"><input value="{{$gameResult['tot_putt']['input'][16]}}" id='tot_putt_in_7' readonly="readonly" class="numeric tot_putt_in"  type="text" Name="gameResult[tot_putt][input][16]" /></td>
										<td class="ash"><input value="{{$gameResult['tot_putt']['input'][17]}}" id='tot_putt_in_8' readonly="readonly" class="numeric tot_putt_in"  type="text" Name="gameResult[tot_putt][input][17]" /></td>
										
										<td><input value="{{$gameResult['tot_putt']['in_sum']}}" id="tot_putt_in_sum" readonly="readonly" Name="gameResult[tot_putt][in_sum]" /></td>
										<td><input value="{{$gameResult['tot_putt']['tot']}}" id="tot_putt_tot" readonly="readonly" Name="gameResult[tot_putt][tot]" /></td>
									</tr>

									<tr>
										<td>TOT FT MADE</td>
										<td class="ash"><input value="{{$gameResult['tot_ft_made']['input'][0]}}" id='tot_ft_made_out_0' readonly="readonly" class="tot_ft_made_out numeric" type="text" Name="gameResult[tot_ft_made][input][0]" /></td>
										<td class="ash"><input value="{{$gameResult['tot_ft_made']['input'][1]}}" class="tot_ft_made_out numeric" id='tot_ft_made_out_1' readonly="readonly" type="text" Name="gameResult[tot_ft_made][input][1]" /></td>
										<td class="ash"><input value="{{$gameResult['tot_ft_made']['input'][2]}}" class="tot_ft_made_out numeric" id='tot_ft_made_out_2' readonly="readonly" type="text" Name="gameResult[tot_ft_made][input][2]" /></td>
										<td class="ash"><input value="{{$gameResult['tot_ft_made']['input'][3]}}" class="tot_ft_made_out numeric" id='tot_ft_made_out_3' readonly="readonly" type="text" Name="gameResult[tot_ft_made][input][3]" /></td>
										<td class="ash"><input value="{{$gameResult['tot_ft_made']['input'][4]}}" class="tot_ft_made_out numeric" id='tot_ft_made_out_4' readonly="readonly" type="text" Name="gameResult[tot_ft_made][input][4]" /></td>
										<td class="ash"><input value="{{$gameResult['tot_ft_made']['input'][5]}}" class="tot_ft_made_out numeric" id='tot_ft_made_out_5' readonly="readonly" type="text" Name="gameResult[tot_ft_made][input][5]" /></td>
										<td class="ash"><input value="{{$gameResult['tot_ft_made']['input'][6]}}" class="tot_ft_made_out numeric" type="text" id='tot_ft_made_out_6' readonly="readonly" Name="gameResult[tot_ft_made][input][6]" /></td>
										<td class="ash"><input value="{{$gameResult['tot_ft_made']['input'][7]}}" class="tot_ft_made_out numeric" id='tot_ft_made_out_7' readonly="readonly" type="text" Name="gameResult[tot_ft_made][input][7]" /></td>
										<td class="ash"><input value="{{$gameResult['tot_ft_made']['input'][8]}}" class="tot_ft_made_out numeric" type="text" Name="gameResult[tot_ft_made][input][8]" id='tot_ft_made_out_8' readonly="readonly" /></td>

										<td><input value="{{$gameResult['tot_ft_made']['out_sum']}}" id ="tot_ft_made_out_sum" readonly="readonly" Name="gameResult[tot_ft_made][out_sum]" /></td>

										<td class="ash"><input value="{{$gameResult['tot_ft_made']['input'][9]}}" class="tot_ft_made_in numeric"  type="text" Name="gameResult[tot_ft_made][input][9]" id='tot_ft_made_in_0' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult['tot_ft_made']['input'][10]}}" class="tot_ft_made_in numeric" type="text" Name="gameResult[tot_ft_made][input][10]" id='tot_ft_made_in_1' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult['tot_ft_made']['input'][11]}}" class="tot_ft_made_in numeric"  type="text" Name="gameResult[tot_ft_made][input][11]" id='tot_ft_made_in_2' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult['tot_ft_made']['input'][12]}}" class="tot_ft_made_in numeric"  type="text" Name="gameResult[tot_ft_made][input][12]" id='tot_ft_made_in_3' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult['tot_ft_made']['input'][13]}}" class="tot_ft_made_in numeric"  type="text" Name="gameResult[tot_ft_made][input][13]" id='tot_ft_made_in_4' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult['tot_ft_made']['input'][14]}}" class="tot_ft_made_in numeric"  type="text" Name="gameResult[tot_ft_made][input][14]" id='tot_ft_made_in_5' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult['tot_ft_made']['input'][15]}}" class="tot_ft_made_in numeric"  type="text" Name="gameResult[tot_ft_made][input][15]" id='tot_ft_made_in_6' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult['tot_ft_made']['input'][16]}}" class="tot_ft_made_in numeric"  type="text" Name="gameResult[tot_ft_made][input][16]" id='tot_ft_made_in_7' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult['tot_ft_made']['input'][17]}}" class="tot_ft_made_in numeric"  type="text" Name="gameResult[tot_ft_made][input][17]" id='tot_ft_made_in_8' readonly="readonly"/></td>
										
										<td><input value="{{$gameResult['tot_ft_made']['in_sum']}}" id="tot_ft_made_in_sum" readonly="readonly" Name="gameResult[tot_ft_made][in_sum]" /></td>
										<td><input value="{{$gameResult['tot_ft_made']['tot']}}" id="tot_ft_made_tot" readonly="readonly" Name="gameResult[tot_ft_made][tot]" /></td>
									</tr>

									<tr>
										<td>PUTT OPP &lt;5</td>
										<td class="ash"><input value="{{$gameResult['putt_opp_5']['input'][0]}}" class="putt_opp_5_out numeric" type="text" Name="gameResult[putt_opp_5][input][0]" id='putt_opp_5_out_0' readonly="readonly" /></td>

										<td class="ash"><input value="{{$gameResult['putt_opp_5']['input'][1]}}" class="putt_opp_5_out numeric" type="text" Name="gameResult[putt_opp_5][input][1]" id='putt_opp_5_out_1' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult['putt_opp_5']['input'][2]}}" class="putt_opp_5_out numeric" type="text" Name="gameResult[putt_opp_5][input][2]" id='putt_opp_5_out_2' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult['putt_opp_5']['input'][3]}}" class="putt_opp_5_out numeric" type="text" Name="gameResult[putt_opp_5][input][3]" id='putt_opp_5_out_3' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult['putt_opp_5']['input'][4]}}" class="putt_opp_5_out numeric" type="text" Name="gameResult[putt_opp_5][input][4]" id='putt_opp_5_out_4' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult['putt_opp_5']['input'][5]}}" class="putt_opp_5_out numeric" type="text" Name="gameResult[putt_opp_5][input][5]" id='putt_opp_5_out_5' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult['putt_opp_5']['input'][6]}}" class="putt_opp_5_out numeric" type="text" Name="gameResult[putt_opp_5][input][6]" id='putt_opp_5_out_6' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult['putt_opp_5']['input'][7]}}" class="putt_opp_5_out numeric" type="text" Name="gameResult[putt_opp_5][input][7]" id='putt_opp_5_out_7' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult['putt_opp_5']['input'][8]}}" class="putt_opp_5_out numeric" type="text" Name="gameResult[putt_opp_5][input][8]" id='putt_opp_5_out_8' readonly="readonly"/></td>

										<td><input value="{{$gameResult['putt_opp_5']['out_sum']}}" id ="putt_opp_5_out_sum" readonly="readonly" Name="gameResult[putt_opp_5][out_sum]" /></td>

										<td class="ash"><input value="{{$gameResult['putt_opp_5']['input'][10]}}" class="putt_opp_5_in numeric" type="text" Name="gameResult[putt_opp_5][input][10]" id='putt_opp_5_in_0' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult['putt_opp_5']['input'][11]}}" class="putt_opp_5_in numeric"  type="text" Name="gameResult[putt_opp_5][input][11]" id='putt_opp_5_in_1' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult['putt_opp_5']['input'][12]}}" class="putt_opp_5_in numeric"  type="text" Name="gameResult[putt_opp_5][input][12]" id='putt_opp_5_in_2' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult['putt_opp_5']['input'][13]}}" class="putt_opp_5_in numeric"  type="text" Name="gameResult[putt_opp_5][input][13]" id='putt_opp_5_in_3' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult['putt_opp_5']['input'][14]}}" class="putt_opp_5_in numeric"  type="text" Name="gameResult[putt_opp_5][input][14]" id='putt_opp_5_in_4' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult['putt_opp_5']['input'][15]}}" class="putt_opp_5_in numeric"  type="text" Name="gameResult[putt_opp_5][input][15]" id='putt_opp_5_in_5' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult['putt_opp_5']['input'][16]}}" class="putt_opp_5_in numeric"  type="text" Name="gameResult[putt_opp_5][input][16]" id='putt_opp_5_in_6' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult['putt_opp_5']['input'][17]}}" class="putt_opp_5_in numeric"  type="text" Name="gameResult[putt_opp_5][input][17]" id='putt_opp_5_in_7' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult['putt_opp_5']['input'][18]}}" class="putt_opp_5_in numeric"  type="text" Name="gameResult[putt_opp_5][input][18]" id='putt_opp_5_in_8' readonly="readonly"/></td>
										
										<td><input value="{{$gameResult["putt_opp_5"]["in_sum"]}}" id="putt_opp_5_in_sum" readonly="readonly" Name="gameResult[putt_opp_5][in_sum]" /></td>

										<td><input value="{{$gameResult["putt_opp_5"]["tot"]}}" id="putt_opp_5_tot" readonly="readonly" Name="gameResult[putt_opp_5][tot]" /></td>
									</tr>
			
									<tr>
										<td>PUTT MAKE &lt;5</td>
										<td class="ash"><input value="{{$gameResult["putt_make_5"]["input"][0]}}" class="numeric putt_make_5_out" type="text" Name="gameResult[putt_make_5][input][0]" id='putt_make_5_out_0' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_5"]["input"][1]}}" class="numeric putt_make_5_out" type="text" Name="gameResult[putt_make_5][input][1]" id='putt_make_5_out_1' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_5"]["input"][2]}}" class="numeric putt_make_5_out" type="text" Name="gameResult[putt_make_5][input][2]" id='putt_make_5_out_2' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_5"]["input"][3]}}" class="numeric putt_make_5_out" type="text" Name="gameResult[putt_make_5][input][3]" id='putt_make_5_out_3' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_5"]["input"][4]}}" class="numeric putt_make_5_out" type="text" Name="gameResult[putt_make_5][input][4]" id='putt_make_5_out_4' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_5"]["input"][5]}}" class="numeric putt_make_5_out" type="text" Name="gameResult[putt_make_5][input][5]" id='putt_make_5_out_5' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_5"]["input"][6]}}" class="numeric putt_make_5_out" type="text" Name="gameResult[putt_make_5][input][6]" id='putt_make_5_out_6' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_5"]["input"][7]}}" class="numeric putt_make_5_out" type="text" Name="gameResult[putt_make_5][input][7]" id='putt_make_5_out_7' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_5"]["input"][8]}}" class="numeric putt_make_5_out" type="text" Name="gameResult[putt_make_5][input][8]" id='putt_make_5_out_8' readonly="readonly"/></td>

										<td><input value="{{$gameResult["putt_make_5"]["out_sum"]}}" id ="putt_make_5_out_sum" readonly="readonly" Name="gameResult[putt_make_5][out_sum]" /></td>
										
										<td class="ash"><input value="{{$gameResult["putt_make_5"]["input"][9]}}" class="numeric putt_make_5_in" type="text" Name="gameResult[putt_make_5][input][9]" id='putt_make_5_in_0' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_5"]["input"][10]}}" class="numeric putt_make_5_in" type="text" Name="gameResult[putt_make_5][input][10]" id='putt_make_5_in_1' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_5"]["input"][11]}}" class="numeric putt_make_5_in"  type="text" Name="gameResult[putt_make_5][input][11]" id='putt_make_5_in_2' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_5"]["input"][12]}}" class="numeric putt_make_5_in"  type="text" Name="gameResult[putt_make_5][input][12]" id='putt_make_5_in_3' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_5"]["input"][13]}}" class="numeric putt_make_5_in"  type="text" Name="gameResult[putt_make_5][input][13]" id='putt_make_5_in_4' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_5"]["input"][14]}}" class="numeric putt_make_5_in"  type="text" Name="gameResult[putt_make_5][input][14]" id='putt_make_5_in_5' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_5"]["input"][15]}}" class="numeric putt_make_5_in"  type="text" Name="gameResult[putt_make_5][input][15]" id='putt_make_5_in_6' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_5"]["input"][16]}}" class="numeric putt_make_5_in"  type="text" Name="gameResult[putt_make_5][input][16]" id='putt_make_5_in_7' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_5"]["input"][17]}}" class="numeric putt_make_5_in"  type="text" Name="gameResult[putt_make_5][input][17]" id='putt_make_5_in_8' readonly="readonly"/></td>
										
										<td><input value="{{$gameResult["putt_make_5"]["in_sum"]}}" id="putt_make_5_in_sum" readonly="readonly" Name="gameResult[putt_make_5][in_sum]" /></td>
										<td><input value="{{$gameResult["putt_make_5"]["tot"]}}" id="putt_make_5_tot" readonly="readonly" Name="gameResult[putt_make_5][tot]" /></td>
									</tr>

									<tr>
										<td>PUTT OPP 5-9</td>
										<td class="ash"><input value="{{$gameResult["putt_opp_5-9"]["input"][0]}}" class="numeric putt_opp_5_9_out" type="text" Name="gameResult[putt_opp_5-9][input][0]" id='putt_opp_5_9_out_0' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_5-9"]["input"][1]}}" class=numeric "putt_opp_5_9_out" type="text" Name="gameResult[putt_opp_5-9][input][1]" id='putt_opp_5_9_out_1' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_5-9"]["input"][2]}}" class="numeric putt_opp_5_9_out" type="text" Name="gameResult[putt_opp_5-9][input][2]" id='putt_opp_5_9_out_2' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_5-9"]["input"][3]}}" class="numeric putt_opp_5_9_out" type="text" Name="gameResult[putt_opp_5-9][input][3]" id='putt_opp_5_9_out_3' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_5-9"]["input"][4]}}" class="numeric putt_opp_5_9_out" type="text" Name="gameResult[putt_opp_5-9][input][4]" id='putt_opp_5_9_out_4' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_5-9"]["input"][5]}}" class="numeric putt_opp_5_9_out" type="text" Name="gameResult[putt_opp_5-9][input][5]" id='putt_opp_5_9_out_5' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_5-9"]["input"][6]}}" class="numeric putt_opp_5_9_out" type="text" Name="gameResult[putt_opp_5-9][input][6]" id='putt_opp_5_9_out_6' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_5-9"]["input"][7]}}" class="numeric putt_opp_5_9_out" type="text" Name="gameResult[putt_opp_5-9][input][7]" id='putt_opp_5_9_out_7' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_5-9"]["input"][8]}}" class="numeric putt_opp_5_9_out" type="text" Name="gameResult[putt_opp_5-9][input][8]" id='putt_opp_5_9_out_8' readonly="readonly"/></td>

										<td><input value="{{$gameResult["putt_opp_5-9"]["out_sum"]}}" id="putt_opp_5_9_out_sum" readonly="readonly" Name="gameResult[putt_opp_5-9][out_sum]" id='putt_opp_5_9_in_8' readonly="readonly"/></td>

										<td class="ash"><input value="{{$gameResult["putt_opp_5-9"]["input"][9]}}" class="numeric putt_opp_5_9_in" type="text" Name="gameResult[putt_opp_5-9][input][9]" id='putt_opp_5_9_in_0' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_5-9"]["input"][10]}}" class="numeric putt_opp_5_9_in" type="text" Name="gameResult[putt_opp_5-9][input][10]" id='putt_opp_5_9_in_1' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_5-9"]["input"][11]}}" class="numeric putt_opp_5_9_in" type="text" Name="gameResult[putt_opp_5-9][input][11]" id='putt_opp_5_9_in_2' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_5-9"]["input"][12]}}" class="numeric putt_opp_5_9_in" type="text" Name="gameResult[putt_opp_5-9][input][12]" id='putt_opp_5_9_in_3' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_5-9"]["input"][13]}}" class="numeric putt_opp_5_9_in" type="text" Name="gameResult[putt_opp_5-9][input][13]" id='putt_opp_5_9_in_4' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_5-9"]["input"][14]}}" class="numeric putt_opp_5_9_in" type="text" Name="gameResult[putt_opp_5-9][input][14]" id='putt_opp_5_9_in_5' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_5-9"]["input"][15]}}" class="numeric putt_opp_5_9_in" type="text" Name="gameResult[putt_opp_5-9][input][15]" id='putt_opp_5_9_in_6' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_5-9"]["input"][16]}}" class="numeric putt_opp_5_9_in" type="text" Name="gameResult[putt_opp_5-9][input][16]" id='putt_opp_5_9_in_7' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_5-9"]["input"][17]}}" class="numeric putt_opp_5_9_in" type="text" Name="gameResult[putt_opp_5-9][input][17]" id='putt_opp_5_9_in_8' readonly="readonly"/></td>
										
										
										<td><input value="{{$gameResult["putt_opp_5-9"]["in_sum"]}}" id="putt_opp_5_9_in_sum" readonly="readonly" Name="gameResult[putt_opp_5-9][in_sum]" /></td>
										<td><input value="{{$gameResult["putt_opp_5-9"]["tot"]}}" id="putt_opp_5_9_tot" readonly="readonly" Name="gameResult[putt_opp_5-9][tot]" /></td>
									</tr>

									<tr>
										<td>PUTT MAKE 5-9</td>
										<td class="ash"><input value="{{$gameResult["putt_make_5-9"]["input"][0]}}" class="numeric putt_make_5_9_out" type="text" Name="gameResult[putt_make_5-9][input][0]" id='putt_make_5_9_out_0' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_5-9"]["input"][1]}}" class="numeric putt_make_5_9_out" type="text" Name="gameResult[putt_make_5-9][input][1]" id='putt_make_5_9_out_1' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_5-9"]["input"][2]}}" class="numeric putt_make_5_9_out" type="text" Name="gameResult[putt_make_5-9][input][2]" id='putt_make_5_9_out_2' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_5-9"]["input"][3]}}" class="numeric putt_make_5_9_out" type="text" Name="gameResult[putt_make_5-9][input][3]" id='putt_make_5_9_out_3' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_5-9"]["input"][4]}}" class="numeric putt_make_5_9_out" type="text" Name="gameResult[putt_make_5-9][input][4]" id='putt_make_5_9_out_4' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_5-9"]["input"][5]}}" class="numeric putt_make_5_9_out" type="text" Name="gameResult[putt_make_5-9][input][5]" id='putt_make_5_9_out_5' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_5-9"]["input"][6]}}" class="numeric putt_make_5_9_out" type="text" Name="gameResult[putt_make_5-9][input][6]" id='putt_make_5_9_out_6' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_5-9"]["input"][7]}}" class="numeric putt_make_5_9_out" type="text" Name="gameResult[putt_make_5-9][input][7]" id='putt_make_5_9_out_7' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_5-9"]["input"][8]}}" class="numeric putt_make_5_9_out" type="text" Name="gameResult[putt_make_5-9][input][8]" id='putt_make_5_9_out_8' readonly="readonly"/></td>

										<td><input value="{{$gameResult["putt_make_5-9"]["out_sum"]}}" id="putt_make_5_9_out_sum" readonly="readonly" Name="gameResult[putt_make_5-9][out_sum]" /></td>

										<td class="ash"><input value="{{$gameResult["putt_make_5-9"]["input"][9]}}" class="numeric putt_make_5_9_in" type="text" Name="gameResult[putt_make_5-9][input][9]" id='putt_make_5_9_in_0' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_5-9"]["input"][10]}}" class="numeric putt_make_5_9_in" type="text" Name="gameResult[putt_make_5-9][input][10]" id='putt_make_5_9_in_1' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_5-9"]["input"][11]}}" class="numeric putt_make_5_9_in" type="text" Name="gameResult[putt_make_5-9][input][11]" id='putt_make_5_9_in_2' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_5-9"]["input"][12]}}" class="numeric putt_make_5_9_in" type="text" Name="gameResult[putt_make_5-9][input][12]" id='putt_make_5_9_in_3' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_5-9"]["input"][13]}}" class="numeric putt_make_5_9_in" type="text" Name="gameResult[putt_make_5-9][input][13]" id='putt_make_5_9_in_4' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_5-9"]["input"][14]}}" class="numeric putt_make_5_9_in" type="text" Name="gameResult[putt_make_5-9][input][14]" id='putt_make_5_9_in_5' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_5-9"]["input"][15]}}" class="numeric putt_make_5_9_in" type="text" Name="gameResult[putt_make_5-9][input][15]" id='putt_make_5_9_in_6' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_5-9"]["input"][16]}}" class="numeric putt_make_5_9_in" type="text" Name="gameResult[putt_make_5-9][input][16]" id='putt_make_5_9_in_7' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_5-9"]["input"][17]}}" class="numeric putt_make_5_9_in" type="text" Name="gameResult[putt_make_5-9][input][17]" id='putt_make_5_9_in_8' readonly="readonly"/></td>
										
										<td><input value="{{$gameResult["putt_make_5-9"]["in_sum"]}}" id="putt_make_5_9_in_sum" readonly="readonly" Name="gameResult[putt_make_5-9][in_sum]" /></td>
										<td><input value="{{$gameResult["putt_make_5-9"]["tot"]}}" id="putt_make_5_9_tot" readonly="readonly" Name="gameResult[putt_make_5-9][tot]" /></td>
									</tr>

									<tr>
										<td>PUTT OPP 10-19</td>
										<td class="ash"><input value="{{$gameResult["putt_opp_10-19"]["input"][0]}}" class="numeric putt_opp_10_19_out" type="text" Name="gameResult[putt_opp_10-19][input][0]" id='putt_opp_10_19_out_0' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_10-19"]["input"][1]}}" class="numeric putt_opp_10_19_out" type="text" Name="gameResult[putt_opp_10-19][input][1]" id='putt_opp_10_19_out_1' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_10-19"]["input"][2]}}" class="numeric putt_opp_10_19_out" type="text" Name="gameResult[putt_opp_10-19][input][2]" id='putt_opp_10_19_out_2' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_10-19"]["input"][3]}}" class="numeric putt_opp_10_19_out" type="text" Name="gameResult[putt_opp_10-19][input][3]" id='putt_opp_10_19_out_3' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_10-19"]["input"][4]}}" class="numeric putt_opp_10_19_out" type="text" Name="gameResult[putt_opp_10-19][input][4]" id='putt_opp_10_19_out_4' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_10-19"]["input"][5]}}" class="numeric putt_opp_10_19_out" type="text" Name="gameResult[putt_opp_10-19][input][5]" id='putt_opp_10_19_out_5' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_10-19"]["input"][6]}}" class="numeric putt_opp_10_19_out" type="text" Name="gameResult[putt_opp_10-19][input][6]" id='putt_opp_10_19_out_6' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_10-19"]["input"][7]}}" class="numeric putt_opp_10_19_out" type="text" Name="gameResult[putt_opp_10-19][input][7]" id='putt_opp_10_19_out_7' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_10-19"]["input"][8]}}" class="numeric putt_opp_10_19_out" type="text" Name="gameResult[putt_opp_10-19][input][8]" id='putt_opp_10_19_out_8' readonly="readonly"/></td>

										<td><input value="{{$gameResult["putt_opp_10-19"]["out_sum"]}}" id="putt_opp_10_19_out_sum" readonly="readonly" Name="gameResult[putt_opp_10-19][out_sum]" /></td>

										
										<td class="ash"><input value="{{$gameResult["putt_opp_10-19"]["input"][9]}}" class="numeric putt_opp_10_19_in" type="text" Name="gameResult[putt_opp_10-19][input][9]" id='putt_opp_10_19_in_0' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_10-19"]["input"][10]}}" class="numeric putt_opp_10_19_in" type="text" Name="gameResult[putt_opp_10-19][input][10]" id='putt_opp_10_19_in_1' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_10-19"]["input"][11]}}" class="numeric putt_opp_10_19_in" type="text" Name="gameResult[putt_opp_10-19][input][11]" id='putt_opp_10_19_in_2' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_10-19"]["input"][12]}}" class="numeric putt_opp_10_19_in" type="text" Name="gameResult[putt_opp_10-19][input][12]" id='putt_opp_10_19_in_3' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_10-19"]["input"][13]}}" class="numeric putt_opp_10_19_in" type="text" Name="gameResult[putt_opp_10-19][input][13]" id='putt_opp_10_19_in_4' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_10-19"]["input"][14]}}" class="numeric putt_opp_10_19_in" type="text" Name="gameResult[putt_opp_10-19][input][14]" id='putt_opp_10_19_in_5' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_10-19"]["input"][15]}}" class="numeric putt_opp_10_19_in" type="text" Name="gameResult[putt_opp_10-19][input][15]" id='putt_opp_10_19_in_6' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_10-19"]["input"][16]}}" class="numeric putt_opp_10_19_in" type="text" Name="gameResult[putt_opp_10-19][input][16]" id='putt_opp_10_19_in_7' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_10-19"]["input"][17]}}" class="numeric putt_opp_10_19_in" type="text" Name="gameResult[putt_opp_10-19][input][17]" id='putt_opp_10_19_in_8' readonly="readonly"/></td>
										
										<td><input value="{{$gameResult["putt_opp_10-19"]["in_sum"]}}" id="putt_opp_10_19_in_sum" readonly="readonly" Name="gameResult[putt_opp_10-19][in_sum]" /></td>
										<td><input value="{{$gameResult["putt_opp_10-19"]["tot"]}}" id="putt_opp_10_19_tot" readonly="readonly" Name="gameResult[putt_opp_10-19][tot]" /></td>
									</tr>

									<tr>
										<td>PUTT MAKE 10-19</td>
										<td class="ash"><input value="{{$gameResult["putt_make_10-19"]["input"][0]}}" class="putt_make_10_19_out numeric" type="text" Name="gameResult[putt_make_10-19][input][0]" id='putt_make_10_19_out_0' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_10-19"]["input"][1]}}" class="putt_make_10_19_out numeric" type="text" Name="gameResult[putt_make_10-19][input][1]" id='putt_make_10_19_out_1' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_10-19"]["input"][2]}}" class="putt_make_10_19_out numeric" type="text" Name="gameResult[putt_make_10-19][input][2]" id='putt_make_10_19_out_2' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_10-19"]["input"][3]}}" class="putt_make_10_19_out numeric" type="text" Name="gameResult[putt_make_10-19][input][3]" id='putt_make_10_19_out_3' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_10-19"]["input"][4]}}" class="putt_make_10_19_out numeric" type="text" Name="gameResult[putt_make_10-19][input][4]" id='putt_make_10_19_out_4' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_10-19"]["input"][5]}}" class="putt_make_10_19_out numeric" type="text" Name="gameResult[putt_make_10-19][input][5]" id='putt_make_10_19_out_5' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_10-19"]["input"][6]}}" class="putt_make_10_19_out numeric" type="text" Name="gameResult[putt_make_10-19][input][6]" id='putt_make_10_19_out_6' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_10-19"]["input"][7]}}" class="putt_make_10_19_out numeric" type="text" Name="gameResult[putt_make_10-19][input][7]" id='putt_make_10_19_out_7' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_10-19"]["input"][8]}}" class="putt_make_10_19_out numeric" type="text" Name="gameResult[putt_make_10-19][input][8]" id='putt_make_10_19_out_8' readonly="readonly"/></td>

										<td><input value="{{$gameResult["putt_make_10-19"]["out_sum"]}}" id="putt_make_10_19_out_sum" readonly="readonly" Name="gameResult[putt_make_10-19][out_sum]" /></td>

										<td class="ash"><input value="{{$gameResult["putt_make_10-19"]["input"][9]}}" class="numeric putt_make_10_19_in" type="text" Name="gameResult[putt_make_10-19][input][9]" id='putt_make_10_19_in_0' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_10-19"]["input"][10]}}" class="putt_make_10_19_in numeric" type="text" Name="gameResult[putt_make_10-19][input][10]" id='putt_make_10_19_in_1' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_10-19"]["input"][11]}}" class="putt_make_10_19_in numeric" type="text" Name="gameResult[putt_make_10-19][input][11]" id='putt_make_10_19_in_2' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_10-19"]["input"][12]}}" class="putt_make_10_19_in numeric" type="text" Name="gameResult[putt_make_10-19][input][12]" id='putt_make_10_19_in_3' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_10-19"]["input"][13]}}" class="putt_make_10_19_in numeric" type="text" Name="gameResult[putt_make_10-19][input][13]" id='putt_make_10_19_in_4' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_10-19"]["input"][14]}}" class="putt_make_10_19_in numeric" type="text" Name="gameResult[putt_make_10-19][input][14]" id='putt_make_10_19_in_5' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_10-19"]["input"][15]}}" class="putt_make_10_19_in numeric" type="text" Name="gameResult[putt_make_10-19][input][15]" id='putt_make_10_19_in_6' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_10-19"]["input"][16]}}" class="putt_make_10_19_in numeric" type="text" Name="gameResult[putt_make_10-19][input][16]" id='putt_make_10_19_in_7' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_10-19"]["input"][17]}}" class="putt_make_10_19_in numeric" type="text" Name="gameResult[putt_make_10-19][input][17]" id='putt_make_10_19_in_8' readonly="readonly"/></td>
										
										<td><input value="{{$gameResult["putt_make_10-19"]["in_sum"]}}" id="putt_make_10_19_in_sum" readonly="readonly" Name="gameResult[putt_make_10-19][in_sum]" /></td>
										<td><input value="{{$gameResult["putt_make_10-19"]["tot"]}}" id="putt_make_10_19_tot" readonly="readonly" Name="gameResult[putt_make_10-19][tot]" /></td>
									</tr>
									
									<tr>
										<td>PUTT OPP 20-29</td>
										<td class="ash"><input value="{{$gameResult["putt_opp_20-29"]["input"][0]}}" class="numeric putt_opp_20_29_out" type="text" Name="gameResult[putt_opp_20-29][input][0]" id='putt_opp_20_29_out_0' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_20-29"]["input"][1]}}" class="numeric putt_opp_20_29_out" type="text" Name="gameResult[putt_opp_20-29][input][1]" id='putt_opp_20_29_out_1' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_20-29"]["input"][2]}}" class="numeric putt_opp_20_29_out" type="text" Name="gameResult[putt_opp_20-29][input][2]" id='putt_opp_20_29_out_2' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_20-29"]["input"][3]}}" class="numeric putt_opp_20_29_out" type="text" Name="gameResult[putt_opp_20-29][input][3]" id='putt_opp_20_29_out_3' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_20-29"]["input"][4]}}" class="numeric putt_opp_20_29_out" type="text" Name="gameResult[putt_opp_20-29][input][4]" id='putt_opp_20_29_out_4' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_20-29"]["input"][5]}}" class="numeric putt_opp_20_29_out" type="text" Name="gameResult[putt_opp_20-29][input][5]" id='putt_opp_20_29_out_5' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_20-29"]["input"][6]}}" class="numeric putt_opp_20_29_out" type="text" Name="gameResult[putt_opp_20-29][input][6]" id='putt_opp_20_29_out_6' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_20-29"]["input"][7]}}" class="numeric putt_opp_20_29_out" type="text" Name="gameResult[putt_opp_20-29][input][7]" id='putt_opp_20_29_out_7' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_20-29"]["input"][8]}}" class="numeric putt_opp_20_29_out" type="text" Name="gameResult[putt_opp_20-29][input][8]" id='putt_opp_20_29_out_8' readonly="readonly"/></td>

										<td><input value="{{$gameResult["putt_opp_20-29"]["out_sum"]}}" id="putt_opp_20_29_out_sum" readonly="readonly" Name="gameResult[putt_opp_20-29][out_sum]" /></td>

										<td class="ash"><input value="{{$gameResult["putt_opp_20-29"]["input"][10]}}" class="numeric putt_opp_20_29_in" type="text" Name="gameResult[putt_opp_20-29][input][10]" id='putt_opp_20_29_in_0' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_20-29"]["input"][11]}}" class="numeric putt_opp_20_29_in" type="text" Name="gameResult[putt_opp_20-29][input][11]" id='putt_opp_20_29_in_1' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_20-29"]["input"][12]}}" class="numeric putt_opp_20_29_in" type="text" Name="gameResult[putt_opp_20-29][input][12]" id='putt_opp_20_29_in_2' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_20-29"]["input"][13]}}" class="numeric putt_opp_20_29_in" type="text" Name="gameResult[putt_opp_20-29][input][13]" id='putt_opp_20_29_in_3' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_20-29"]["input"][14]}}" class="numeric putt_opp_20_29_in" type="text" Name="gameResult[putt_opp_20-29][input][14]" id='putt_opp_20_29_in_4' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_20-29"]["input"][15]}}" class="numeric putt_opp_20_29_in" type="text" Name="gameResult[putt_opp_20-29][input][15]" id='putt_opp_20_29_in_5' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_20-29"]["input"][16]}}" class="numeric putt_opp_20_29_in" type="text" Name="gameResult[putt_opp_20-29][input][16]" id='putt_opp_20_29_in_6' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_20-29"]["input"][17]}}" class="numeric putt_opp_20_29_in" type="text" Name="gameResult[putt_opp_20-29][input][17]" id='putt_opp_20_29_in_7' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_20-29"]["input"][18]}}" class="numeric putt_opp_20_29_in" type="text" Name="gameResult[putt_opp_20-29][input][18]" id='putt_opp_20_29_in_8' readonly="readonly"/></td>
										
										<td><input value="{{$gameResult["putt_opp_20-29"][19]}}" id="putt_opp_20_29_in_sum" readonly="readonly" Name="gameResult[putt_opp_20-29][19]" /></td>
										<td><input value="{{$gameResult["putt_opp_20-29"][20]}}" id="putt_opp_20_29_tot" readonly="readonly" Name="gameResult[putt_opp_20-29][20]" /></td>
									</tr>

									<tr>
										<td>PUTT MAKE 20-29</td>
										<td class="ash"><input value="{{$gameResult["putt_make_20-29"]["input"][0]}}" class="putt_make_20_29_out numeric" type="text" Name="gameResult[putt_make_20-29][input][0]" id="putt_make_20_29_out_0" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_20-29"]["input"][1]}}" class="putt_make_20_29_out numeric" type="text" Name="gameResult[putt_make_20-29][input][1]" id="putt_make_20_29_out_1" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_20-29"]["input"][2]}}" class="putt_make_20_29_out numeric" type="text" Name="gameResult[putt_make_20-29][input][2]" id="putt_make_20_29_out_2" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_20-29"]["input"][3]}}" class="putt_make_20_29_out numeric" type="text" Name="gameResult[putt_make_20-29][input][3]" id="putt_make_20_29_out_3" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_20-29"]["input"][4]}}" class="putt_make_20_29_out numeric" type="text" Name="gameResult[putt_make_20-29][input][4]" id="putt_make_20_29_out_4" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_20-29"]["input"][5]}}" class="putt_make_20_29_out numeric" type="text" Name="gameResult[putt_make_20-29][input][5]" id="putt_make_20_29_out_5" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_20-29"]["input"][6]}}" class="putt_make_20_29_out numeric" type="text" Name="gameResult[putt_make_20-29][input][6]" id="putt_make_20_29_out_6" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_20-29"]["input"][7]}}" class="putt_make_20_29_out numeric" type="text" Name="gameResult[putt_make_20-29][input][7]" id="putt_make_20_29_out_7" readonly="readonly" /></td>
										<td class="ash"><input value="{{$gameResult["putt_make_20-29"]["input"][8]}}" class="putt_make_20_29_out numeric" type="text" Name="gameResult[putt_make_20-29][input][8]" id="putt_make_20_29_out_8" readonly="readonly"/></td>

										<td><input value="{{$gameResult["putt_make_20-29"]["out_sum"]}}" id="putt_make_20_29_out_sum" readonly="readonly" Name="gameResult[putt_make_20-29][out_sum]" /></td>


										<td class="ash"><input value="{{$gameResult["putt_make_20-29"]["input"][9]}}" class="numeric putt_make_20_29_in" type="text" Name="gameResult[putt_make_20-29][input][9]" id="putt_make_20_29_in_0" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_20-29"]["input"][10]}}" class="putt_make_20_29_in numeric" type="text" Name="gameResult[putt_make_20-29][input][10]" id="putt_make_20_29_in_1" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_20-29"]["input"][11]}}" class="putt_make_20_29_in numeric" type="text" Name="gameResult[putt_make_20-29][input][11]" id="putt_make_20_29_in_2" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_20-29"]["input"][12]}}" class="putt_make_20_29_in numeric" type="text" Name="gameResult[putt_make_20-29][input][12]" id="putt_make_20_29_in_3" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_20-29"]["input"][13]}}" class="putt_make_20_29_in numeric" type="text" Name="gameResult[putt_make_20-29][input][13]" id="putt_make_20_29_in_4" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_20-29"]["input"][14]}}" class="putt_make_20_29_in numeric" type="text" Name="gameResult[putt_make_20-29][input][14]" id="putt_make_20_29_in_5" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_20-29"]["input"][15]}}" class="putt_make_20_29_in numeric" type="text" Name="gameResult[putt_make_20-29][input][15]" id="putt_make_20_29_in_6" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_20-29"]["input"][16]}}" class="putt_make_20_29_in numeric" type="text" Name="gameResult[putt_make_20-29][input][16]" id="putt_make_20_29_in_7" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_20-29"]["input"][17]}}" class="putt_make_20_29_in numeric" type="text" Name="gameResult[putt_make_20-29][input][17]" id="putt_make_20_29_in_8" readonly="readonly"/></td>

										<td><input value="{{$gameResult["putt_make_20-29"]["in_sum"]}}" id="putt_make_20_29_in_sum" readonly="readonly" Name="gameResult[putt_make_20-29][in_sum]" /></td>
										<td><input value="{{$gameResult["putt_make_20-29"]["tot"]}}" id="putt_make_20_29_tot" readonly="readonly" Name="gameResult[putt_make_20-29][tot]" /></td>
									</tr>
									<tr>
										<td>PUTT OPP 30+</td>
										<td class="ash"><input value="{{$gameResult["putt_opp_30"]["input"][0]}}" class="numeric putt_opp_30_out" type="text" Name="gameResult[putt_opp_30][input][0]" id="putt_opp_30_out_0" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_30"]["input"][1]}}" class="numeric putt_opp_30_out" type="text" Name="gameResult[putt_opp_30][input][1]" id="putt_opp_30_out_1" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_30"]["input"][2]}}" class="numeric putt_opp_30_out" type="text" Name="gameResult[putt_opp_30][input][2]" id="putt_opp_30_out_2" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_30"]["input"][3]}}" class="numeric putt_opp_30_out" type="text" Name="gameResult[putt_opp_30][input][3]" id="putt_opp_30_out_3" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_30"]["input"][4]}}" class="numeric putt_opp_30_out" type="text" Name="gameResult[putt_opp_30][input][4]" id="putt_opp_30_out_4" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_30"]["input"][5]}}" class="numeric putt_opp_30_out" type="text" Name="gameResult[putt_opp_30][input][5]" id="putt_opp_30_out_5" readonly="readonly" /></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_30"]["input"][6]}}" class="numeric putt_opp_30_out" type="text" Name="gameResult[putt_opp_30][input][6]" id="putt_opp_30_out_6" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_30"]["input"][7]}}" class="numeric putt_opp_30_out" type="text" Name="gameResult[putt_opp_30][input][7]" id="putt_opp_30_out_7" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_30"]["input"][8]}}" class="numeric putt_opp_30_out" type="text" Name="gameResult[putt_opp_30][input][8]" id="putt_opp_30_out_8" readonly="readonly"/></td>

										<td><input value="{{$gameResult["putt_opp_30"]["out_sum"]}}" id ="putt_opp_30_out_sum" readonly="readonly" Name="gameResult[putt_opp_30][out_sum]" /></td>

										<td class="ash"><input value="{{$gameResult["putt_opp_30"]["input"][9]}}" class="numeric putt_opp_30_in"  type="text" Name="gameResult[putt_opp_30][input][9]" id="putt_opp_30_in_0" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_30"]["input"][10]}}" class="numeric putt_opp_30_in" type="text" Name="gameResult[putt_opp_30][input][10]" id="putt_opp_30_in_1" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_30"]["input"][11]}}" class="numeric putt_opp_30_in"  type="text" Name="gameResult[putt_opp_30][input][11]" id="putt_opp_30_in_2" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_30"]["input"][12]}}" class="numeric putt_opp_30_in"  type="text" Name="gameResult[putt_opp_30][input][12]" id="putt_opp_30_in_3" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_30"]["input"][13]}}" class="numeric putt_opp_30_in"  type="text" Name="gameResult[putt_opp_30][input][13]" id="putt_opp_30_in_4" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_30"]["input"][14]}}" class="numeric putt_opp_30_in"  type="text" Name="gameResult[putt_opp_30][input][14]" id="putt_opp_30_in_5" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_30"]["input"][15]}}" class="numeric putt_opp_30_in"  type="text" Name="gameResult[putt_opp_30][input][15]" id="putt_opp_30_in_6" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_30"]["input"][16]}}" class="numeric putt_opp_30_in"  type="text" Name="gameResult[putt_opp_30][input][16]" id="putt_opp_30_in_7" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_opp_30"]["input"][17]}}" class="numeric putt_opp_30_in"  type="text" Name="gameResult[putt_opp_30][input][17]" id="putt_opp_30_in_8" readonly="readonly"/></td>
										
										<td><input value="{{$gameResult["putt_opp_30"]["in_sum"]}}" id="putt_opp_30_in_sum" readonly="readonly" Name="gameResult[putt_opp_30][in_sum]" /></td>
										<td><input value="{{$gameResult["putt_opp_30"]["tot"]}}" id="putt_opp_30_tot" readonly="readonly" Name="gameResult[putt_opp_30][tot]" /></td>
									</tr>

									<tr>
										<td>PUTT Make 30+</td>
										<td class="ash"><input value="{{$gameResult["putt_make_30"]["input"][0]}}" class="numeric putt_make_30_out" type="text" Name="gameResult[putt_make_30][input][0]" id="putt_make_30_out_0" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_30"]["input"][1]}}" class="numeric putt_make_30_out" type="text" Name="gameResult[putt_make_30][input][1]" id="putt_make_30_out_1" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_30"]["input"][2]}}" class="numeric putt_make_30_out" type="text" Name="gameResult[putt_make_30][input][2]" id="putt_make_30_out_2" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_30"]["input"][3]}}" class="numeric putt_make_30_out" type="text" Name="gameResult[putt_make_30][input][3]" id="putt_make_30_out_3" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_30"]["input"][4]}}" class="numeric putt_make_30_out" type="text" Name="gameResult[putt_make_30][input][4]" id="putt_make_30_out_4" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_30"]["input"][5]}}" class="numeric putt_make_30_out" type="text" Name="gameResult[putt_make_30][input][5]" id="putt_make_30_out_5" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_30"]["input"][6]}}" class="numeric putt_make_30_out" type="text" Name="gameResult[putt_make_30][input][6]" id="putt_make_30_out_6" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_30"]["input"][7]}}" class="numeric putt_make_30_out" type="text" Name="gameResult[putt_make_30][input][7]" id="putt_make_30_out_7" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_30"]["input"][8]}}" class="numeric putt_make_30_out" type="text" Name="gameResult[putt_make_30][input][8]" id="putt_make_30_out_8" readonly="readonly"/></td>

										<td><input value="{{$gameResult["putt_make_30"]["out_sum"]}}" id ="putt_make_30_out_sum" readonly="readonly" Name="gameResult[putt_make_30][out_sum]" id="putt_make_30_in_0" readonly="readonly"/></td>

										<td class="ash"><input value="{{$gameResult["putt_make_30"]["input"][9]}}" class="numeric putt_make_30_in"  type="text" Name="gameResult[putt_make_30][input][9]" id="putt_make_30_in_0" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_30"]["input"][10]}}" class="numeric putt_make_30_in" type="text" Name="gameResult[putt_make_30][input][10]" id="putt_make_30_in_1" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_30"]["input"][11]}}" class="numeric putt_make_30_in"  type="text" Name="gameResult[putt_make_30][input][11]" id="putt_make_30_in_2" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_30"]["input"][12]}}" class="numeric putt_make_30_in"  type="text" Name="gameResult[putt_make_30][input][12]" id="putt_make_30_in_3" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_30"]["input"][13]}}" class="numeric putt_make_30_in"  type="text" Name="gameResult[putt_make_30][input][13]" id="putt_make_30_in_4" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_30"]["input"][14]}}" class="numeric putt_make_30_in"  type="text" Name="gameResult[putt_make_30][input][14]" id="putt_make_30_in_5" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_30"]["input"][15]}}" class="numeric putt_make_30_in"  type="text" Name="gameResult[putt_make_30][input][15]" id="putt_make_30_in_6" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_30"]["input"][16]}}" class="numeric putt_make_30_in"  type="text" Name="gameResult[putt_make_30][input][16]" id="putt_make_30_in_7" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["putt_make_30"]["input"][17]}}" class="numeric putt_make_30_in"  type="text" Name="gameResult[putt_make_30][input][17]" id="putt_make_30_in_8" readonly="readonly"/></td>
										
										<td><input value="{{$gameResult["putt_make_30"]["in_sum"]}}" id="putt_make_30_in_sum" readonly="readonly" Name="gameResult[putt_make_30][in_sum]" /></td>
										<td><input value="{{$gameResult["putt_make_30"]["tot"]}}" id="putt_make_30_tot" readonly="readonly" Name="gameResult[putt_make_30][tot]" /></td>
									</tr>

									<tr>
										<td>NOGIR DIST PUTT 1</td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input value="{{$gameResult["nogir_dist_putt_1"]["out_sum"]}}" type="text" readonly="readonly" Name="gameResult[nogir_dist_putt_1][out_sum]" id='nogir_dist_putt_1_out_sum'/></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input value="{{$gameResult["nogir_dist_putt_1"]["in_sum"]}}" type="text" readonly="readonly" Name="gameResult[nogir_dist_putt_1][in_sum]" id='nogir_dist_putt_1_in_sum'/></td>
										<td><input value="{{$gameResult["nogir_dist_putt_1"]["tot"]}}" type="text" readonly="readonly" Name="gameResult[nogir_dist_putt_1][tot]" id='nogir_dist_putt_1_tot' /></td>
									</tr>
									<tr>
										<td>NO GIR</td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input value="{{$gameResult["no_gir"]["out_sum"]}}"  readonly="readonly" Name="gameResult[no_gir][out_sum]" id='no_gir_out_sum'/></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input value="{{$gameResult["no_gir"]["in_sum"]}}"  readonly="readonly" Name="gameResult[no_gir][in_sum]" id='no_gir_in_sum'/></td>
										<td><input value="{{$gameResult["no_gir"]["tot"]}}" readonly="readonly" Name="gameResult[no_gir][tot]" id='no_gir_tot'/></td>
									</tr>
									<tr>
										<td>AVG DIST HOL NOGIR</td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input value="{{$gameResult["avg_dist_hol_nogir"]["out_sum"]}}" type="text" readonly="readonly" Name="gameResult[avg_dist_hol_nogir][out_sum]" id="avg_dist_hol_nogir_out_sum"/></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input value="{{$gameResult["avg_dist_hol_nogir"]["in_sum"]}}" type="text" readonly="readonly" Name="gameResult[avg_dist_hol_nogir][in_sum]" id="avg_dist_hol_nogir_in_sum"/></td>
										<td><input value="{{$gameResult["avg_dist_hol_nogir"]["tot"]}}" type="text" readonly="readonly" Name="gameResult[avg_dist_hol_nogir][tot]" id="avg_dist_hol_nogir_tot" /></td>
									</tr>
									
									<tr>
										<td>SCRAMBL OPP</td>
										<td class="ash"><input value="{{$gameResult["scrambl_opp"]["input"][0]}}" class="numeric scrambl_opp_out" type="text" Name="gameResult[scrambl_opp][input][0]" id='scrambl_opp_out_0' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["scrambl_opp"]["input"][1]}}" class="numeric scrambl_opp_out" type="text" Name="gameResult[scrambl_opp][input][1]" id='scrambl_opp_out_1' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["scrambl_opp"]["input"][2]}}" class="numeric scrambl_opp_out" type="text" Name="gameResult[scrambl_opp][input][2]" id='scrambl_opp_out_2' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["scrambl_opp"]["input"][3]}}" class="numeric scrambl_opp_out" type="text" Name="gameResult[scrambl_opp][input][3]" id='scrambl_opp_out_3' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["scrambl_opp"]["input"][4]}}" class="numeric scrambl_opp_out" type="text" Name="gameResult[scrambl_opp][input][4]" id='scrambl_opp_out_4' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["scrambl_opp"]["input"][5]}}" class="numeric scrambl_opp_out" type="text" Name="gameResult[scrambl_opp][input][5]" id='scrambl_opp_out_5' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["scrambl_opp"]["input"][6]}}" class="numeric scrambl_opp_out" type="text" Name="gameResult[scrambl_opp][input][6]" id='scrambl_opp_out_6' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["scrambl_opp"]["input"][7]}}" class="numeric scrambl_opp_out" type="text" Name="gameResult[scrambl_opp][input][7]" id='scrambl_opp_out_7' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["scrambl_opp"]["input"][8]}}" class="numeric scrambl_opp_out" type="text" Name="gameResult[scrambl_opp][input][8]" id='scrambl_opp_out_8' readonly="readonly"/></td>

										<td><input value="{{$gameResult["scrambl_opp"]["out_sum"]}}" id ="scrambl_opp_out_sum" readonly="readonly" Name="gameResult[scrambl_opp][out_sum]" /></td>

										<td class="ash"><input value="{{$gameResult["scrambl_opp"]["input"][9]}}" class="numeric scrambl_opp_in"  type="text" Name="gameResult[scrambl_opp][input][9]" id='scrambl_opp_in_0' readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["scrambl_opp"]["input"][10]}}" class="numeric scrambl_opp_in" type="text" Name="gameResult[scrambl_opp][input][10]" id='scrambl_opp_in_1' readonly="readonly" /></td>
										<td class="ash"><input value="{{$gameResult["scrambl_opp"]["input"][11]}}" class="numeric scrambl_opp_in"  type="text" Name="gameResult[scrambl_opp][input][11]" id='scrambl_opp_in_2' readonly="readonly" /></td>
										<td class="ash"><input value="{{$gameResult["scrambl_opp"]["input"][12]}}" class="numeric scrambl_opp_in"  type="text" Name="gameResult[scrambl_opp][input][12]" id='scrambl_opp_in_3' readonly="readonly" /></td>
										<td class="ash"><input value="{{$gameResult["scrambl_opp"]["input"][13]}}" class="numeric scrambl_opp_in"  type="text" Name="gameResult[scrambl_opp][input][13]" id='scrambl_opp_in_4' readonly="readonly" /></td>
										<td class="ash"><input value="{{$gameResult["scrambl_opp"]["input"][14]}}" class="numeric scrambl_opp_in"  type="text" Name="gameResult[scrambl_opp][input][14]" id='scrambl_opp_in_5' readonly="readonly" /></td>
										<td class="ash"><input value="{{$gameResult["scrambl_opp"]["input"][15]}}" class="numeric scrambl_opp_in"  type="text" Name="gameResult[scrambl_opp][input][15]" id='scrambl_opp_in_6' readonly="readonly" /></td>
										<td class="ash"><input value="{{$gameResult["scrambl_opp"]["input"][16]}}" class="numeric scrambl_opp_in"  type="text" Name="gameResult[scrambl_opp][input][16]" id='scrambl_opp_in_7' readonly="readonly" /></td>
										<td class="ash"><input value="{{$gameResult["scrambl_opp"]["input"][17]}}" class="numeric scrambl_opp_in"  type="text" Name="gameResult[scrambl_opp][input][17]" id='scrambl_opp_in_8' readonly="readonly" /></td>
										
										<td><input value="{{$gameResult["scrambl_opp"]["in_sum"]}}" id="scrambl_opp_in_sum" readonly="readonly" Name="gameResult[scrambl_opp][in_sum]" /></td>
										<td><input value="{{$gameResult["scrambl_opp"]["tot"]}}" id="scrambl_opp_tot" readonly="readonly" Name="gameResult[scrambl_opp][tot]" /></td>
									</tr>

									<tr>
										<td>SCRAMBL SAV</td>
										<td class="ash"><input value="{{$gameResult["scrambl_sav"]["input"][0]}}" class="numeric scrambl_sav_out" type="text" Name="gameResult[scrambl_sav][input][0]" id="scrambl_sav_out_0" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["scrambl_sav"]["input"][1]}}" class="numeric scrambl_sav_out" type="text" Name="gameResult[scrambl_sav][input][1]" id="scrambl_sav_out_1" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["scrambl_sav"]["input"][2]}}" class="numeric scrambl_sav_out" type="text" Name="gameResult[scrambl_sav][input][2]" id="scrambl_sav_out_2" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["scrambl_sav"]["input"][3]}}" class="numeric scrambl_sav_out" type="text" Name="gameResult[scrambl_sav][input][3]" id="scrambl_sav_out_3" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["scrambl_sav"]["input"][4]}}" class="numeric scrambl_sav_out" type="text" Name="gameResult[scrambl_sav][input][4]" id="scrambl_sav_out_4" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["scrambl_sav"]["input"][5]}}" class="numeric scrambl_sav_out" type="text" Name="gameResult[scrambl_sav][input][5]" id="scrambl_sav_out_5" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["scrambl_sav"]["input"][6]}}" class="numeric scrambl_sav_out" type="text" Name="gameResult[scrambl_sav][input][6]" id="scrambl_sav_out_6" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["scrambl_sav"]["input"][7]}}" class="numeric scrambl_sav_out" type="text" Name="gameResult[scrambl_sav][input][7]" id="scrambl_sav_out_7" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["scrambl_sav"]["input"][8]}}" class="numeric scrambl_sav_out" type="text" Name="gameResult[scrambl_sav][input][8]" id="scrambl_sav_out_8" readonly="readonly"/></td>

										<td><input value="{{$gameResult["scrambl_sav"]["out_sum"]}}" id="scrambl_opp_tot" id ="scrambl_sav_out_sum" readonly="readonly" Name="gameResult[scrambl_sav][out_sum]" /></td>

										<td class="ash"><input value="{{$gameResult["scrambl_sav"]["input"][10]}}" class="numeric scrambl_sav_in" type="text" Name="gameResult[scrambl_sav][input][10]" id="scrambl_sav_in_0" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["scrambl_sav"]["input"][11]}}" class="numeric scrambl_sav_in"  type="text" Name="gameResult[scrambl_sav][input][11]" id="scrambl_sav_in_1" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["scrambl_sav"]["input"][12]}}" class="numeric scrambl_sav_in"  type="text" Name="gameResult[scrambl_sav][input][12]" id="scrambl_sav_in_2" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["scrambl_sav"]["input"][13]}}" class="numeric scrambl_sav_in"  type="text" Name="gameResult[scrambl_sav][input][13]" id="scrambl_sav_in_3" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["scrambl_sav"]["input"][14]}}" class="numeric scrambl_sav_in"  type="text" Name="gameResult[scrambl_sav][input][14]" id="scrambl_sav_in_4" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["scrambl_sav"]["input"][15]}}" class="numeric scrambl_sav_in"  type="text" Name="gameResult[scrambl_sav][input][15]" id="scrambl_sav_in_5" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["scrambl_sav"]["input"][16]}}" class="numeric scrambl_sav_in"  type="text" Name="gameResult[scrambl_sav][input][16]" id="scrambl_sav_in_6" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["scrambl_sav"]["input"][17]}}" class="numeric scrambl_sav_in"  type="text" Name="gameResult[scrambl_sav][input][17]" id="scrambl_sav_in_7" readonly="readonly"/></td>
										<td class="ash"><input value="{{$gameResult["scrambl_sav"]["input"][18]}}" class="numeric scrambl_sav_in"  type="text" Name="gameResult[scrambl_sav][input][18]" id="scrambl_sav_in_8" readonly="readonly"/></td>
										
										<td><input value="{{$gameResult["scrambl_sav"]["in_sum"]}}" id="scrambl_sav_in_sum" readonly="readonly" Name="gameResult[scrambl_sav][in_sum]" /></td>
										<td><input value="{{$gameResult["scrambl_sav"]["tot"]}}" id="scrambl_sav_tot" readonly="readonly" Name="gameResult[scrambl_sav][tot]" /></td>
									</tr>

									<tr>
										<td>SCRAMBL%</td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input value="{{$gameResult["scrambl%"]["out_sum"]}}" type="text" id="scrambl_percentage_out_sum" readonly="readonly" Name="gameResult[scrambl%][out_sum]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input value="{{$gameResult["scrambl%"]["in_sum"]}}" type="text" id="scrambl_percentage_in_sum" readonly="readonly" Name="gameResult[scrambl%][in_sum]" /></td>
										<td><input value="{{$gameResult["scrambl%"]["tot"]}}" type="text" id="scrambl_percentage_sum" readonly="readonly" Name="gameResult[scrambl%][tot]" /></td>
									</tr>
									
									<tr>
										<td>SAND OPP</td>
										<td><input value="{{$gameResult["sand_opp"]["input"][0]}}" class="sand_opp_out numeric" type="text" Name="gameResult[sand_opp][input][0]" id="sand_opp_out_0" /></td>
										<td><input value="{{$gameResult["sand_opp"]["input"][1]}}" class="sand_opp_out numeric" type="text" Name="gameResult[sand_opp][input][1]" id="sand_opp_out_1" /></td>
										<td><input value="{{$gameResult["sand_opp"]["input"][2]}}" class="sand_opp_out numeric" type="text" Name="gameResult[sand_opp][input][2]" id="sand_opp_out_2" /></td>
										<td><input value="{{$gameResult["sand_opp"]["input"][3]}}" class="sand_opp_out numeric" type="text" Name="gameResult[sand_opp][input][3]" id="sand_opp_out_3" /></td>
										<td><input value="{{$gameResult["sand_opp"]["input"][4]}}" class="sand_opp_out numeric" type="text" Name="gameResult[sand_opp][input][4]" id="sand_opp_out_4" /></td>
										<td><input value="{{$gameResult["sand_opp"]["input"][5]}}" class="sand_opp_out numeric" type="text" Name="gameResult[sand_opp][input][5]" id="sand_opp_out_5" /></td>
										<td><input value="{{$gameResult["sand_opp"]["input"][6]}}" class="sand_opp_out numeric" type="text" Name="gameResult[sand_opp][input][6]" id="sand_opp_out_6" /></td>
										<td><input value="{{$gameResult["sand_opp"]["input"][7]}}" class="sand_opp_out numeric" type="text" Name="gameResult[sand_opp][input][7]" id="sand_opp_out_7" /></td>
										<td><input value="{{$gameResult["sand_opp"]["input"][8]}}" class="sand_opp_out numeric" type="text" Name="gameResult[sand_opp][input][8]" id="sand_opp_out_8" /></td>

										<td><input value="{{$gameResult["sand_opp"]["out_sum"]}}" id ="sand_opp_out_sum" readonly="readonly" Name="gameResult[sand_opp][out_sum]" /></td>

										<td><input value="{{$gameResult["sand_opp"]["input"][9]}}" class="sand_opp_in numeric"  type="text" id="sand_opp_in_0" Name="gameResult[sand_opp][input][9]" /></td>
										<td><input value="{{$gameResult["sand_opp"]["input"][10]}}" class="sand_opp_in numeric"  type="text" id="sand_opp_in_1" Name="gameResult[sand_opp][input][10]" /></td>
										<td><input value="{{$gameResult["sand_opp"]["input"][11]}}" class="sand_opp_in numeric"  type="text" id="sand_opp_in_2" Name="gameResult[sand_opp][input][11]" /></td>
										<td><input value="{{$gameResult["sand_opp"]["input"][12]}}" class="sand_opp_in numeric"  type="text" id="sand_opp_in_3" Name="gameResult[sand_opp][input][12]" /></td>
										<td><input value="{{$gameResult["sand_opp"]["input"][13]}}" class="sand_opp_in numeric"  type="text" id="sand_opp_in_4" Name="gameResult[sand_opp][input][13]" /></td>
										<td><input value="{{$gameResult["sand_opp"]["input"][14]}}" class="sand_opp_in numeric"  type="text" id="sand_opp_in_5" Name="gameResult[sand_opp][input][14]" /></td>
										<td><input value="{{$gameResult["sand_opp"]["input"][15]}}" class="sand_opp_in numeric"  type="text" id="sand_opp_in_6" Name="gameResult[sand_opp][input][15]" /></td>
										<td><input value="{{$gameResult["sand_opp"]["input"][16]}}" class="sand_opp_in numeric"  type="text" id="sand_opp_in_7" Name="gameResult[sand_opp][input][16]" /></td>
										<td><input value="{{$gameResult["sand_opp"]["input"][17]}}" class="sand_opp_in numeric"  type="text" id="sand_opp_in_8" Name="gameResult[sand_opp][input][17]" /></td>
										
										<td><input value="{{$gameResult["sand_opp"]["in_sum"]}}" id="sand_opp_in_sum" readonly="readonly" Name="gameResult[sand_opp][in_sum]" /></td>
										<td><input value="{{$gameResult["sand_opp"]["tot"]}}" id="sand_opp_tot" readonly="readonly" Name="gameResult[sand_opp][tot]" /></td>
									</tr>

									<tr>
										<td>SAND SAV</td>
										<td class="ash"><input value="{{$gameResult["sand_sav"]["input"][0]}}" class="sand_sav_out numeric" type="text" id="sand_sav_out_0" readonly="readonly" Name="gameResult[sand_sav][input][0]" /></td>
										<td class="ash"><input value="{{$gameResult["sand_sav"]["input"][1]}}" class="numeric sand_sav_out" type="text" id="sand_sav_out_1" readonly="readonly"  Name="gameResult[sand_sav][input][1]" /></td>
										<td class="ash"><input value="{{$gameResult["sand_sav"]["input"][2]}}" class="numeric sand_sav_out" type="text" id="sand_sav_out_2" readonly="readonly"  Name="gameResult[sand_sav][input][2]" /></td>
										<td class="ash"><input value="{{$gameResult["sand_sav"]["input"][3]}}" class="numeric sand_sav_out" type="text" id="sand_sav_out_3" readonly="readonly"  Name="gameResult[sand_sav][input][3]" /></td>
										<td class="ash"><input value="{{$gameResult["sand_sav"]["input"][4]}}" class="numeric sand_sav_out" type="text" id="sand_sav_out_4" readonly="readonly"  Name="gameResult[sand_sav][input][4]" /></td>
										<td class="ash"><input value="{{$gameResult["sand_sav"]["input"][5]}}" class="numeric sand_sav_out" type="text" id="sand_sav_out_5" readonly="readonly"  Name="gameResult[sand_sav][input][5]" /></td>
										<td class="ash"><input value="{{$gameResult["sand_sav"]["input"][6]}}" class="numeric sand_sav_out" type="text" id="sand_sav_out_6" readonly="readonly"  Name="gameResult[sand_sav][input][6]" /></td>
										<td class="ash"><input value="{{$gameResult["sand_sav"]["input"][7]}}" class="numeric sand_sav_out" type="text" id="sand_sav_out_7" readonly="readonly"  Name="gameResult[sand_sav][input][7]" /></td>
										<td class="ash"><input value="{{$gameResult["sand_sav"]["input"][8]}}" class="numeric sand_sav_out" type="text" id="sand_sav_out_8" readonly="readonly"  Name="gameResult[sand_sav][input][8]" /></td>
										<td><input value="{{$gameResult["sand_sav"]["out_sum"]}}" id ="sand_sav_out_sum" readonly="readonly" Name="gameResult[sand_sav][out_sum]" /></td>

										<td class="ash"><input value="{{$gameResult["sand_sav"]["input"][9]}}" class="numeric sand_sav_in"  type="text" id="sand_sav_in_0" readonly="readonly"  Name="gameResult[sand_sav][input][9]" /></td>
										<td class="ash"><input value="{{$gameResult["sand_sav"]["input"][10]}}" class="numeric sand_sav_in" type="text" id="sand_sav_in_1" readonly="readonly" Name="gameResult[sand_sav][input][10]" /></td>
										<td class="ash"><input value="{{$gameResult["sand_sav"]["input"][11]}}" class="numeric sand_sav_in"  type="text" id="sand_sav_in_2" readonly="readonly" Name="gameResult[sand_sav][input][11]" /></td>
										<td class="ash"><input value="{{$gameResult["sand_sav"]["input"][12]}}" class="numeric sand_sav_in"  type="text" id="sand_sav_in_3" readonly="readonly" Name="gameResult[sand_sav][input][12]" /></td>
										<td class="ash"><input value="{{$gameResult["sand_sav"]["input"][13]}}" class="numeric sand_sav_in"  type="text" id="sand_sav_in_4" readonly="readonly" Name="gameResult[sand_sav][input][13]" /></td>
										<td class="ash"><input value="{{$gameResult["sand_sav"]["input"][14]}}" class="numeric sand_sav_in"  type="text" id="sand_sav_in_5" readonly="readonly" Name="gameResult[sand_sav][input][14]" /></td>
										<td class="ash"><input value="{{$gameResult["sand_sav"]["input"][15]}}" class="numeric sand_sav_in"  type="text" id="sand_sav_in_6" readonly="readonly" Name="gameResult[sand_sav][input][15]" /></td>
										<td class="ash"><input value="{{$gameResult["sand_sav"]["input"][16]}}" class="numeric sand_sav_in"  type="text" id="sand_sav_in_7" readonly="readonly" Name="gameResult[sand_sav][input][16]" /></td>
										<td class="ash"><input value="{{$gameResult["sand_sav"]["input"][17]}}" class="numeric sand_sav_in"  type="text" id="sand_sav_in_8" readonly="readonly" Name="gameResult[sand_sav][input][17]" /></td>
										
										<td><input value="{{$gameResult["sand_sav"]["in_sum"]}}" id="sand_sav_in_sum" readonly="readonly" Name="gameResult[sand_sav][in_sum]" /></td>
										<td><input value="{{$gameResult["sand_sav"]["tot"]}}" id="sand_sav_tot" readonly="readonly" Name="gameResult[sand_sav][tot]" /></td>
									</tr>


									<tr>
										<td>SAND%</td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input value="{{$gameResult["sand%"]["out_sum"]}}" type="text" id="sand_percentage_out_sum" readonly="readonly" Name="gameResult[sand%][out_sum]" /></td>
										<td class="black"></td>
										<td class="black"></td>  
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										
										<td><input value="{{$gameResult["sand%"]["in_sum"]}}" type="text" id="sand_percentage_in_sum"  readonly="readonly" Name="gameResult[sand%][in_sum]" /></td>
										<td><input value="{{$gameResult["sand%"]["tot"]}}" type="text" id="sand_percentage_sum"  readonly="readonly" Name="gameResult[sand%][tot]" /></td>
									</tr>
									
									<tr>
										<td>PENALTIES</td>
										<td><input value="{{$gameResult["penalties"]["input"][0]}}" class="penalties_out numeric" type="text" Name="gameResult[penalties][input][0]" /></td>
										<td><input value="{{$gameResult["penalties"]["input"][1]}}" class="numeric penalties_out" type="text" Name="gameResult[penalties][input][1]" /></td>
										<td><input value="{{$gameResult["penalties"]["input"][2]}}" class="numeric penalties_out" type="text" Name="gameResult[penalties][input][2]" /></td>
										<td><input value="{{$gameResult["penalties"]["input"][3]}}" class="numeric penalties_out" type="text" Name="gameResult[penalties][input][3]" /></td>
										<td><input value="{{$gameResult["penalties"]["input"][4]}}" class="numeric penalties_out" type="text" Name="gameResult[penalties][input][4]" /></td>
										<td><input value="{{$gameResult["penalties"]["input"][5]}}" class="numeric penalties_out" type="text" Name="gameResult[penalties][input][5]" /></td>
										<td><input value="{{$gameResult["penalties"]["input"][6]}}" class="numeric penalties_out" type="text" Name="gameResult[penalties][input][6]" /></td>
										<td><input value="{{$gameResult["penalties"]["input"][7]}}" class="numeric penalties_out" type="text" Name="gameResult[penalties][input][7]" /></td>
										<td><input value="{{$gameResult["penalties"]["input"][8]}}" class="numeric penalties_out" type="text" Name="gameResult[penalties][input][8]" /></td>

										<td><input value="{{$gameResult["penalties"]["out_sum"]}}" id ="penalties_out_sum" readonly="readonly" Name="gameResult[penalties][out_sum]" /></td>

										<td><input value="{{$gameResult["penalties"]["input"][9]}}" class="numeric penalties_in"  type="text" Name="gameResult[penalties][input][9]" /></td>
										<td><input value="{{$gameResult["penalties"]["input"][10]}}" class="numeric penalties_in" type="text" Name="gameResult[penalties][input][10]" /></td>
										<td><input value="{{$gameResult["penalties"]["input"][11]}}" class="numeric penalties_in"  type="text" Name="gameResult[penalties][input][11]" /></td>
										<td><input value="{{$gameResult["penalties"]["input"][12]}}" class="numeric penalties_in"  type="text" Name="gameResult[penalties][input][12]" /></td>
										<td><input value="{{$gameResult["penalties"]["input"][13]}}" class="numeric penalties_in"  type="text" Name="gameResult[penalties][input][13]" /></td>
										<td><input value="{{$gameResult["penalties"]["input"][14]}}" class="numeric penalties_in"  type="text" Name="gameResult[penalties][input][14]" /></td>
										<td><input value="{{$gameResult["penalties"]["input"][15]}}" class="numeric penalties_in"  type="text" Name="gameResult[penalties][input][15]" /></td>
										<td><input value="{{$gameResult["penalties"]["input"][16]}}" class="numeric penalties_in"  type="text" Name="gameResult[penalties][input][16]" /></td>
										<td><input value="{{$gameResult["penalties"]["input"][17]}}" class="numeric penalties_in"  type="text" Name="gameResult[penalties][input][17]" /></td>
										
										<td><input value="{{$gameResult["penalties"]["in_sum"]}}" id="penalties_in_sum" readonly="readonly" Name="gameResult[penalties][in_sum]" /></td>
										<td><input value="{{$gameResult["penalties"]["tot"]}}" id="penalties_tot" readonly="readonly" Name="gameResult[penalties][tot]" /></td>
									</tr>

									<tr>
										<td>PAR3</td>
										<td class="ash"><input value="{{$gameResult["par3"]["input"][0]}}"  id="par3_out" readonly="readonly" type="text" Name="gameResult[par3][input][0]" class="numeric" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input value="{{$gameResult["par3"]["out_sum"]}}"  id="par3_out_sum" readonly="readonly" Name="gameResult[par3][out_sum]" /></td>
										<td class="ash"><input value="{{$gameResult["par3"]["tot"]}}"  id="par3_in" readonly="readonly" type="text" Name="gameResult[par3][input][1]" class="numeric" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input value="{{$gameResult["par3"]["in_sum"]}}"  id="par3_in_sum" readonly="readonly" Name="gameResult[par3][in_sum]" /></td>
										<td><input value="{{$gameResult["par3"]["tot"]}}"  id="par3_tot" readonly="readonly" Name="gameResult[par3][tot]" /></td>
									</tr>

									<tr>
										<td>PAR3STROKES</td>
										<td class="ash"><input value="{{$gameResult["par3strokes"]["input"][0]}}" id="par3strokes_out" readonly="readonly"  type="text" Name="gameResult[par3strokes][input][0]" class="numeric" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input value="{{$gameResult["par3strokes"]["out_sum"]}}" id="par3strokes_out_sum" readonly="readonly" type="text"  Name="gameResult[par3strokes][out_sum]" /></td>
										<td class="ash"><input id="par3strokes_in" readonly="readonly" type="text" Name="gameResult[par3strokes][input][1]" class="numeric" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input value="{{$gameResult["par3strokes"]["in_sum"]}}" id="par3strokes_in_sum" readonly="readonly" Name="gameResult[par3strokes][in_sum]" /></td>
										<td><input value="{{$gameResult["par3strokes"]["tot"]}}" id="par3strokes_tot" readonly="readonly" Name="gameResult[par3strokes][tot]" /></td>
									</tr>
									<tr>
										<td>PAR3SCOR</td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input value="{{$gameResult["par3scor"]["out_sum"]}}" id="par3_score_out_sum" type="text" readonly="readonly" Name="gameResult[par3scor][out_sum]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input value="{{$gameResult["par3scor"]["in_sum"]}}" id="par3_score_in_sum" type="text" readonly="readonly" Name="gameResult[par3scor][in_sum]" /></td>
										<td><input value="{{$gameResult["par3scor"]["tot"]}}" id="par3_score_tot" type="text" readonly="readonly" Name="gameResult[par3scor][tot]" /></td>
									</tr>
									<tr>
										<td>PAR4</td>
										<td class="ash"><input value="{{$gameResult["par4"]["input"][0]}}" id="par4_out" readonly="readonly" type="text" Name="gameResult[par4][input][0]" class="numeric" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input value="{{$gameResult["par4"]["out_sum"]}}" id="par4_out_sum" readonly="readonly" Name="gameResult[par4][out_sum]" /></td>
										<td class="ash"><input value="{{$gameResult["par4"]["in_sum"]}}" id="par4_in" readonly="readonly" type="text" Name="gameResult[par4][input][1]" class="numeric" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input value="{{$gameResult["par4"]["in_sum"]}}" id="par4_in_sum" readonly="readonly" Name="gameResult[par4][in_sum]" /></td>
										<td><input value="{{$gameResult["par4"]["tot"]}}" id="par4_tot" readonly="readonly" Name="gameResult[par4][tot]" /></td>
									</tr>

									<tr>
										<td>PAR4STROKES</td>
										<td class="ash"><input value="{{$gameResult["par4strokes"]["input"][0]}}" id="par4strokes_out" readonly="readonly"  type="text" Name="gameResult[par4strokes][input][0]" class="numeric" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input value="{{$gameResult["par4strokes"]["out_sum"]}}" id="par4strokes_out_sum" readonly="readonly" type="text"  Name="gameResult[par4strokes][out_sum]" /></td>
										<td class="ash"><input value="{{$gameResult["par4strokes"]["input"][1]}}" id="par4strokes_in" readonly="readonly" type="text" Name="gameResult[par4strokes][input][1]" class="numeric" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input value="{{$gameResult["par4strokes"]["out_sum"]}}" id="par4strokes_in_sum" readonly="readonly" Name="gameResult[par4strokes][in_sum]" /></td>
										<td><input value="{{$gameResult["par4strokes"]["tot"]}}" id="par4strokes_tot" readonly="readonly" Name="gameResult[par4strokes][tot]" /></td>
									</tr>
									<tr>
										<td>PAR4SCOR</td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input value="{{$gameResult["par4scor"]["out_sum"]}}"  id="par4_score_out_sum" type="text" readonly="readonly" Name="gameResult[par4scor][out_sum]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input value="{{$gameResult["par4scor"]["in_sum"]}}"  id="par4_score_in_sum" type="text" readonly="readonly" Name="gameResult[par4scor][in_sum]" /></td>
										<td><input value="{{$gameResult["par4scor"]["tot"]}}"  id="par4_score_tot" type="text" readonly="readonly" Name="gameResult[par4scor][tot]" /></td>
									</tr>
									<tr>
										<td>PAR5</td>
										<td class="ash"><input value="{{$gameResult["par5"]["input"][0]}}" id="par5_out" readonly="readonly" type="text" Name="gameResult[par5][input][0]" class="numeric" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input value="{{$gameResult["par5"]["out_sum"]}}" id="par5_out_sum" readonly="readonly" Name="gameResult[par5][out_sum]" /></td>
										<td class="ash"><input value="{{$gameResult["par5"]["input"][1]}}"  id="par5_in" readonly="readonly" type="text" Name="gameResult[par5][input][1]" class="numeric" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input value="{{$gameResult["par5"]["in_sum"]}}"  id="par5_in_sum" readonly="readonly" Name="gameResult[par5][in_sum]" /></td>
										<td><input value="{{$gameResult["par5"]["tot"]}}"  id="par5_tot" readonly="readonly" Name="gameResult[par5][tot]" /></td>
									</tr>

									<tr>
										<td>PAR5STROKES</td>
										<td class="ash"><input value="{{$gameResult["par5strokes"]["input"][0]}}" id="par5strokes_out" readonly="readonly"  type="text" Name="gameResult[par5strokes][input][0]" class="numeric" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input value="{{$gameResult["par5strokes"]["out_sum"]}}" id="par5strokes_out_sum" readonly="readonly" type="text"  Name="gameResult[par5strokes][out_sum]" /></td>
										<td class="ash"><input value="{{$gameResult["par5strokes"]["input"][1]}}"  id="par5strokes_in" readonly="readonly" type="text" Name="gameResult[par5strokes][input][1]" class="numeric" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input value="{{$gameResult["par5strokes"]["in_sum"]}}"  id="par5strokes_in_sum" readonly="readonly" Name="gameResult[par5strokes][in_sum]" /></td>
										<td><input value="{{$gameResult["par5strokes"]["tot"]}}"  id="par5strokes_tot" readonly="readonly" Name="gameResult[par5strokes][tot]" /></td>
									</tr>
									<tr>
										<td>PAR5SCOR</td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input value="{{$gameResult["par5scor"]["out_sum"]}}"  id="par5_score_out_sum" type="text" readonly="readonly" Name="gameResult[par5scor][out_sum]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input value="{{$gameResult["par5scor"]["in_sum"]}}"  id="par5_score_in_sum" type="text" readonly="readonly" Name="gameResult[par5scor][in_sum]" /></td>
										<td><input value="{{$gameResult["par5scor"]["tot"]}}"  id="par5_score_tot" type="text" readonly="readonly" Name="gameResult[par5scor][tot]" /></td>
									</tr>
									
									<tr>
										<td>EAGLE</td>
										<td class="ash"><input value="{{$gameResult["eagle"]["input"][0]}}" id="eagle_out_0" readonly="readonly" class="eagle_out numeric" type="text" Name="gameResult[eagle][input][0]" /></td>
										<td class="ash"><input value="{{$gameResult["eagle"]["input"][1]}}" id="eagle_out_1" readonly="readonly" class="eagle_out numeric" type="text" Name="gameResult[eagle][input][1]" /></td>
										<td class="ash"><input value="{{$gameResult["eagle"]["input"][2]}}" id="eagle_out_2" readonly="readonly" class="eagle_out numeric" type="text" Name="gameResult[eagle][input][2]" /></td>
										<td class="ash"><input value="{{$gameResult["eagle"]["input"][3]}}" id="eagle_out_3" readonly="readonly" class="eagle_out numeric" type="text" Name="gameResult[eagle][input][3]" /></td>
										<td class="ash"><input value="{{$gameResult["eagle"]["input"][4]}}" id="eagle_out_4" readonly="readonly" class="eagle_out numeric" type="text" Name="gameResult[eagle][input][4]" /></td>
										<td class="ash"><input value="{{$gameResult["eagle"]["input"][5]}}" id="eagle_out_5" readonly="readonly" class="eagle_out numeric" type="text" Name="gameResult[eagle][input][5]" /></td>
										<td class="ash"><input value="{{$gameResult["eagle"]["input"][6]}}" id="eagle_out_6" readonly="readonly" class="eagle_out numeric" type="text" Name="gameResult[eagle][input][6]" /></td>
										<td class="ash"><input value="{{$gameResult["eagle"]["input"][7]}}" id="eagle_out_7" readonly="readonly" class="eagle_out numeric" type="text" Name="gameResult[eagle][input][7]" /></td>
										<td class="ash"><input value="{{$gameResult["eagle"]["input"][8]}}" id="eagle_out_8" readonly="readonly" class="eagle_out numeric" type="text" Name="gameResult[eagle][input][8]" /></td>

										<td><input value="{{$gameResult["eagle"]["out_sum"]}}" id ="eagle_out_sum" readonly="readonly" Name="gameResult[eagle][out_sum]" /></td>

										<td class="ash"><input value="{{$gameResult["eagle"]["input"][9]}}" id="eagle_in_0" readonly="readonly"  class="eagle_in numeric"  type="text" Name="gameResult[eagle][input][9]" /></td>
										<td class="ash"><input value="{{$gameResult["eagle"]["input"][10]}}" id="eagle_in_1" readonly="readonly"  class="eagle_in numeric" type="text" Name="gameResult[eagle][input][10]" /></td>
										<td class="ash"><input value="{{$gameResult["eagle"]["input"][11]}}" id="eagle_in_2" readonly="readonly"  class="eagle_in numeric"  type="text" Name="gameResult[eagle][input][11]" /></td>
										<td class="ash"><input value="{{$gameResult["eagle"]["input"][12]}}" id="eagle_in_3" readonly="readonly"  class="eagle_in numeric"  type="text" Name="gameResult[eagle][input][12]" /></td>
										<td class="ash"><input value="{{$gameResult["eagle"]["input"][13]}}" id="eagle_in_4" readonly="readonly"  class="eagle_in numeric"  type="text" Name="gameResult[eagle][input][13]" /></td>
										<td class="ash"><input value="{{$gameResult["eagle"]["input"][14]}}" id="eagle_in_5" readonly="readonly"  class="eagle_in numeric"  type="text" Name="gameResult[eagle][input][14]" /></td>
										<td class="ash"><input value="{{$gameResult["eagle"]["input"][15]}}" id="eagle_in_6" readonly="readonly"  class="eagle_in numeric"  type="text" Name="gameResult[eagle][input][15]" /></td>
										<td class="ash"><input value="{{$gameResult["eagle"]["input"][16]}}" id="eagle_in_7" readonly="readonly"  class="eagle_in numeric"  type="text" Name="gameResult[eagle][input][16]" /></td>
										<td class="ash"><input value="{{$gameResult["eagle"]["input"][17]}}" id="eagle_in_8" readonly="readonly"  class="eagle_in numeric"  type="text" Name="gameResult[eagle][input][17]" /></td>
										
										<td><input value="{{$gameResult["eagle"]["in_sum"]}}" id="eagle_in_sum" readonly="readonly" Name="gameResult[eagle][in_sum]" /></td>
										<td><input value="{{$gameResult["eagle"]["tot"]}}" id="eagle_tot" readonly="readonly" Name="gameResult[eagle][tot]" /></td>
									</tr>

									<tr>
										<td>BIRDIE</td>
										<td class="ash"><input value="{{$gameResult["birdie"]["input"][0]}}" id="birdie_out_0" readonly="readonly" class="birdie_out numeric" type="text" Name="gameResult[birdie][input][0]" /></td>
										<td class="ash"><input value="{{$gameResult["birdie"]["input"][1]}}" id="birdie_out_1" readonly="readonly" class="birdie_out numeric" type="text" Name="gameResult[birdie][input][1]" /></td>
										<td class="ash"><input value="{{$gameResult["birdie"]["input"][2]}}" id="birdie_out_2" readonly="readonly" class="birdie_out numeric" type="text" Name="gameResult[birdie][input][2]" /></td>
										<td class="ash"><input value="{{$gameResult["birdie"]["input"][3]}}" id="birdie_out_3" readonly="readonly" class="birdie_out numeric" type="text" Name="gameResult[birdie][input][3]" /></td>
										<td class="ash"><input value="{{$gameResult["birdie"]["input"][4]}}" id="birdie_out_4" readonly="readonly" class="birdie_out numeric" type="text" Name="gameResult[birdie][input][4]" /></td>
										<td class="ash"><input value="{{$gameResult["birdie"]["input"][5]}}" id="birdie_out_5" readonly="readonly" class="birdie_out numeric" type="text" Name="gameResult[birdie][input][5]" /></td>
										<td class="ash"><input value="{{$gameResult["birdie"]["input"][6]}}" id="birdie_out_6" readonly="readonly" class="birdie_out numeric" type="text" Name="gameResult[birdie][input][6]" /></td>
										<td class="ash"><input value="{{$gameResult["birdie"]["input"][7]}}" id="birdie_out_7" readonly="readonly" class="birdie_out numeric" type="text" Name="gameResult[birdie][input][7]" /></td>
										<td class="ash"><input value="{{$gameResult["birdie"]["input"][8]}}" id="birdie_out_8" readonly="readonly" class="birdie_out numeric" type="text" Name="gameResult[birdie][input][8]" /></td>

										<td><input value="{{$gameResult["birdie"]["out_sum"]}}" id ="birdie_out_sum" readonly="readonly" Name="gameResult[birdie][out_sum]" /></td>

										<td class="ash"><input value="{{$gameResult["birdie"]["input"][9]}}" id="birdie_in_0" readonly="readonly" class="birdie_in numeric"  type="text" Name="gameResult[birdie][input][9]" /></td>
										<td class="ash"><input value="{{$gameResult["birdie"]["input"][10]}}" id="birdie_in_1" readonly="readonly" class="birdie_in numeric" type="text" Name="gameResult[birdie][input][10]" /></td>
										<td class="ash"><input value="{{$gameResult["birdie"]["input"][11]}}" id="birdie_in_2" readonly="readonly" class="birdie_in numeric" type="text" Name="gameResult[birdie][input][11]" /></td>
										<td class="ash"><input value="{{$gameResult["birdie"]["input"][12]}}" id="birdie_in_3" readonly="readonly" class="birdie_in numeric"  type="text" Name="gameResult[birdie][input][12]" /></td>
										<td class="ash"><input value="{{$gameResult["birdie"]["input"][13]}}" id="birdie_in_4" readonly="readonly" class="birdie_in numeric"  type="text" Name="gameResult[birdie][input][13]" /></td>
										<td class="ash"><input value="{{$gameResult["birdie"]["input"][14]}}" id="birdie_in_5" readonly="readonly" class="birdie_in numeric"  type="text" Name="gameResult[birdie][input][14]" /></td>
										<td class="ash"><input value="{{$gameResult["birdie"]["input"][15]}}" id="birdie_in_6" readonly="readonly" class="birdie_in numeric"  type="text" Name="gameResult[birdie][input][15]" /></td>
										<td class="ash"><input value="{{$gameResult["birdie"]["input"][16]}}" id="birdie_in_7" readonly="readonly" class="birdie_in numeric"  type="text" Name="gameResult[birdie][input][16]" /></td>
										<td class="ash"><input value="{{$gameResult["birdie"]["input"][17]}}" id="birdie_in_8" readonly="readonly" class="birdie_in numeric"  type="text" Name="gameResult[birdie][input][17]" /></td>
										
										<td><input value="{{$gameResult["birdie"]["in_sum"]}}" id="birdie_in_sum" readonly="readonly" Name="gameResult[birdie][in_sum]" /></td>
										<td><input value="{{$gameResult["birdie"]["tot"]}}" id="birdie_tot" readonly="readonly" Name="gameResult[birdie][tot]" /></td>
									</tr>

									<tr>
										<td>PAR</td>
										<td class="ash"><input value="{{$gameResult["par"]["input"][0]}}" id="par_out_0" readonly="readonly" class="par_out numeric" type="text" Name="gameResult[par][input][0]" /></td>
										<td class="ash"><input value="{{$gameResult["par"]["input"][1]}}" id="par_out_1" readonly="readonly" class="par_out numeric" type="text" Name="gameResult[par][input][1]" /></td>
										<td class="ash"><input value="{{$gameResult["par"]["input"][2]}}" id="par_out_2" readonly="readonly" class="par_out numeric" type="text" Name="gameResult[par][input][2]" /></td>
										<td class="ash"><input value="{{$gameResult["par"]["input"][3]}}" id="par_out_3" readonly="readonly" class="par_out numeric" type="text" Name="gameResult[par][input][3]" /></td>
										<td class="ash"><input value="{{$gameResult["par"]["input"][4]}}" id="par_out_4" readonly="readonly" class="par_out numeric" type="text" Name="gameResult[par][input][4]" /></td>
										<td class="ash"><input value="{{$gameResult["par"]["input"][5]}}" id="par_out_5" readonly="readonly" class="par_out numeric" type="text" Name="gameResult[par][input][5]" /></td>
										<td class="ash"><input value="{{$gameResult["par"]["input"][6]}}" id="par_out_6" readonly="readonly" class="par_out numeric" type="text" Name="gameResult[par][input][6]" /></td>
										<td class="ash"><input value="{{$gameResult["par"]["input"][7]}}" id="par_out_7" readonly="readonly" class="par_out numeric" type="text" Name="gameResult[par][input][7]" /></td>
										<td class="ash"><input value="{{$gameResult["par"]["input"][8]}}" id="par_out_8" readonly="readonly" class="par_out numeric" type="text" Name="gameResult[par][input][8]" /></td>

										<td><input value="{{$gameResult["par"]["out_sum"]}}" id ="par_out_sum" readonly="readonly" Name="gameResult[par][out_sum]" /></td>

										<td class="ash"><input value="{{$gameResult["par"]["input"][9]}}" id="par_in_0" readonly="readonly" class="par_in numeric"  type="text" Name="gameResult[par][input][9]" /></td>
										<td class="ash"><input value="{{$gameResult["par"]["input"][10]}}" id="par_in_1" readonly="readonly" class="par_in numeric" type="text" Name="gameResult[par][input][10]" /></td>
										<td class="ash"><input value="{{$gameResult["par"]["input"][11]}}" id="par_in_2" readonly="readonly" class="par_in numeric"  type="text" Name="gameResult[par][input][11]" /></td>
										<td class="ash"><input value="{{$gameResult["par"]["input"][12]}}" id="par_in_3" readonly="readonly" class="par_in numeric"  type="text" Name="gameResult[par][input][12]" /></td>
										<td class="ash"><input value="{{$gameResult["par"]["input"][13]}}" id="par_in_4" readonly="readonly" class="par_in numeric"  type="text" Name="gameResult[par][input][13]" /></td>
										<td class="ash"><input value="{{$gameResult["par"]["input"][14]}}" id="par_in_5" readonly="readonly" class="par_in numeric"  type="text" Name="gameResult[par][input][14]" /></td>
										<td class="ash"><input value="{{$gameResult["par"]["input"][15]}}" id="par_in_6" readonly="readonly" class="par_in numeric"  type="text" Name="gameResult[par][input][15]" /></td>
										<td class="ash"><input value="{{$gameResult["par"]["input"][16]}}" id="par_in_7" readonly="readonly" class="par_in numeric"  type="text" Name="gameResult[par][input][16]" /></td>
										<td class="ash"><input  value="{{$gameResult["par"]["input"][17]}}"id="par_in_8" readonly="readonly" class="par_in numeric"  type="text" Name="gameResult[par][input][17]" /></td>
									
										
										<td><input value="{{$gameResult["par"]["in_sum"]}}" id="par_in_sum" readonly="readonly" Name="gameResult[par][in_sum]" /></td>
										<td><input value="{{$gameResult["par"]["tot"]}}" id="par_tot" readonly="readonly" Name="gameResult[par][tot]" /></td>
									</tr>

									
									<tr>
										<td>BOGEY</td>
										<td class="ash"><input value="{{$gameResult["bogey"]["input"][0]}}" id="bogey_out_0" readonly="readonly" class="bogey_out numeric" type="text" Name="gameResult[bogey][input][0]" /></td>
										<td class="ash"><input value="{{$gameResult["bogey"]["input"][1]}}" id="bogey_out_1" readonly="readonly" class="bogey_out numeric" type="text" Name="gameResult[bogey][input][1]" /></td>
										<td class="ash"><input value="{{$gameResult["bogey"]["input"][2]}}" id="bogey_out_2" readonly="readonly" class="bogey_out numeric" type="text" Name="gameResult[bogey][input][2]" /></td>
										<td class="ash"><input value="{{$gameResult["bogey"]["input"][3]}}" id="bogey_out_3" readonly="readonly" class="bogey_out numeric" type="text" Name="gameResult[bogey][input][3]" /></td>
										<td class="ash"><input value="{{$gameResult["bogey"]["input"][4]}}" id="bogey_out_4" readonly="readonly" class="bogey_out numeric" type="text" Name="gameResult[bogey][input][4]" /></td>
										<td class="ash"><input value="{{$gameResult["bogey"]["input"][5]}}" id="bogey_out_5" readonly="readonly" class="bogey_out numeric" type="text" Name="gameResult[bogey][input][5]" /></td>
										<td class="ash"><input value="{{$gameResult["bogey"]["input"][6]}}" id="bogey_out_6" readonly="readonly" class="bogey_out numeric" type="text" Name="gameResult[bogey][input][6]" /></td>
										<td class="ash"><input value="{{$gameResult["bogey"]["input"][7]}}" id="bogey_out_7" readonly="readonly" class="bogey_out numeric" type="text" Name="gameResult[bogey][input][7]" /></td>
										<td class="ash"><input value="{{$gameResult["bogey"]["input"][8]}}" id="bogey_out_8" readonly="readonly" class="bogey_out numeric" type="text" Name="gameResult[bogey][input][8]" /></td>

										<td><input value="{{$gameResult["bogey"]["out_sum"]}}" id ="bogey_out_sum" readonly="readonly" Name="gameResult[bogey][out_sum]" /></td>

										<td class="ash"><input value="{{$gameResult["bogey"]["input"][9]}}" id="bogey_in_0" readonly="readonly" class="bogey_in numeric"  type="text" Name="gameResult[bogey][input][9]" /></td>
										<td class="ash"><input value="{{$gameResult["bogey"]["input"][10]}}" id="bogey_in_1" readonly="readonly" class="bogey_in numeric" type="text" Name="gameResult[bogey][input][10]" /></td>
										<td class="ash"><input value="{{$gameResult["bogey"]["input"][11]}}" id="bogey_in_2" readonly="readonly" class="bogey_in numeric"  type="text" Name="gameResult[bogey][input][11]" /></td>
										<td class="ash"><input value="{{$gameResult["bogey"]["input"][12]}}" id="bogey_in_3" readonly="readonly" class="bogey_in numeric"  type="text" Name="gameResult[bogey][input][12]" /></td>
										<td class="ash"><input value="{{$gameResult["bogey"]["input"][13]}}" id="bogey_in_4" readonly="readonly" class="bogey_in numeric"  type="text" Name="gameResult[bogey][input][13]" /></td>
										<td class="ash"><input value="{{$gameResult["bogey"]["input"][14]}}" id="bogey_in_5" readonly="readonly" class="bogey_in numeric"  type="text" Name="gameResult[bogey][input][14]" /></td>
										<td class="ash"><input value="{{$gameResult["bogey"]["input"][15]}}" id="bogey_in_6" readonly="readonly" class="bogey_in numeric"  type="text" Name="gameResult[bogey][input][15]" /></td>
										<td class="ash"><input value="{{$gameResult["bogey"]["input"][16]}}" id="bogey_in_7" readonly="readonly" class="bogey_in numeric"  type="text" Name="gameResult[bogey][input][16]" /></td>
										<td class="ash"><input value="{{$gameResult["bogey"]["input"][17]}}" id="bogey_in_8" readonly="readonly" class="bogey_in numeric"  type="text" Name="gameResult[bogey][input][17]" /></td>
										
										<td><input value="{{$gameResult["bogey"]["in_sum"]}}" id="bogey_in_sum" readonly="readonly" Name="gameResult[bogey][in_sum]" /></td>
										<td><input value="{{$gameResult["bogey"]["tot"]}}" id="bogey_tot" readonly="readonly" Name="gameResult[bogey][tot]" /></td>
									</tr>

									<tr>
										<td>DBLBOGEY</td>
										<td class="ash"><input value="{{$gameResult["dblbogey"]["input"][0]}}" id="dblbogey_out_0" readonly="readonly" class="dblbogey_out numeric" type="text" Name="gameResult[dblbogey][input][0]" /></td>
										<td class="ash"><input value="{{$gameResult["dblbogey"]["input"][1]}}" id="dblbogey_out_1" readonly="readonly" class="dblbogey_out numeric" type="text" Name="gameResult[dblbogey][input][1]" /></td>
										<td class="ash"><input value="{{$gameResult["dblbogey"]["input"][2]}}" id="dblbogey_out_2" readonly="readonly" class="dblbogey_out numeric" type="text" Name="gameResult[dblbogey][input][2]" /></td>
										<td class="ash"><input value="{{$gameResult["dblbogey"]["input"][3]}}" id="dblbogey_out_3" readonly="readonly" class="dblbogey_out numeric" type="text" Name="gameResult[dblbogey][input][3]" /></td>
										<td class="ash"><input value="{{$gameResult["dblbogey"]["input"][4]}}" id="dblbogey_out_4" readonly="readonly" class="dblbogey_out numeric" type="text" Name="gameResult[dblbogey][input][4]" /></td>
										<td class="ash"><input value="{{$gameResult["dblbogey"]["input"][5]}}" id="dblbogey_out_5" readonly="readonly" class="dblbogey_out numeric" type="text" Name="gameResult[dblbogey][input][5]" /></td>
										<td class="ash"><input value="{{$gameResult["dblbogey"]["input"][6]}}" id="dblbogey_out_6" readonly="readonly" class="dblbogey_out numeric" type="text" Name="gameResult[dblbogey][input][6]" /></td>
										<td class="ash"><input value="{{$gameResult["dblbogey"]["input"][7]}}" id="dblbogey_out_7" readonly="readonly" class="dblbogey_out numeric" type="text" Name="gameResult[dblbogey][input][7]" /></td>
										<td class="ash"><input value="{{$gameResult["dblbogey"]["input"][8]}}" id="dblbogey_out_8" readonly="readonly" class="dblbogey_out numeric" type="text" Name="gameResult[dblbogey][input][8]" /></td>

										<td><input value="{{$gameResult["dblbogey"]["out_sum"]}}" id ="dblbogey_out_sum" readonly="readonly" Name="gameResult[dblbogey][out_sum]" /></td>

										<td class="ash"><input value="{{$gameResult["dblbogey"]["input"][9]}}" id="dblbogey_in_0" readonly="readonly" class="dblbogey_in numeric"  type="text" Name="gameResult[dblbogey][input][9]" /></td>
										<td class="ash"><input value="{{$gameResult["dblbogey"]["input"][10]}}" id="dblbogey_in_1" readonly="readonly" class="dblbogey_in numeric" type="text" Name="gameResult[dblbogey][input][10]" /></td>
										<td class="ash"><input value="{{$gameResult["dblbogey"]["input"][11]}}" id="dblbogey_in_2" readonly="readonly" class="dblbogey_in numeric"  type="text" Name="gameResult[dblbogey][input][11]" /></td>
										<td class="ash"><input value="{{$gameResult["dblbogey"]["input"][12]}}" id="dblbogey_in_3" readonly="readonly" class="dblbogey_in numeric"  type="text" Name="gameResult[dblbogey][input][12]" /></td>
										<td class="ash"><input value="{{$gameResult["dblbogey"]["input"][13]}}" id="dblbogey_in_4" readonly="readonly" class="dblbogey_in numeric"  type="text" Name="gameResult[dblbogey][input][13]" /></td>
										<td class="ash"><input value="{{$gameResult["dblbogey"]["input"][14]}}" id="dblbogey_in_5" readonly="readonly" class="dblbogey_in numeric"  type="text" Name="gameResult[dblbogey][input][14]" /></td>
										<td class="ash"><input value="{{$gameResult["dblbogey"]["input"][15]}}" id="dblbogey_in_6" readonly="readonly" class="dblbogey_in numeric"  type="text" Name="gameResult[dblbogey][input][15]" /></td>
										<td class="ash"><input value="{{$gameResult["dblbogey"]["input"][16]}}" id="dblbogey_in_7" readonly="readonly" class="dblbogey_in numeric"  type="text" Name="gameResult[dblbogey][input][16]" /></td>
										<td class="ash"><input value="{{$gameResult["dblbogey"]["input"][17]}}" id="dblbogey_in_8" readonly="readonly" class="dblbogey_in numeric"  type="text" Name="gameResult[dblbogey][input][17]" /></td>
										
										<td><input value="{{$gameResult["dblbogey"]["in_sum"]}}" id="dblbogey_in_sum" readonly="readonly" Name="gameResult[dblbogey][in_sum]" /></td>
										<td><input value="{{$gameResult["dblbogey"]["tot"]}}" id="dblbogey_tot" readonly="readonly" Name="gameResult[dblbogey][tot]" /></td>
									</tr>
									<tr>
										<td>OTHER</td>
										<td class="ash"><input value="{{$gameResult["other"]["input"][0]}}" id="other_out_0" readonly="readonly" class="other_out numeric" type="text" Name="gameResult[other][input][0]" /></td>
										<td class="ash"><input value="{{$gameResult["other"]["input"][1]}}" id="other_out_1" readonly="readonly" class="other_out numeric" type="text" Name="gameResult[other][input][1]" /></td>
										<td class="ash"><input value="{{$gameResult["other"]["input"][2]}}" id="other_out_2" readonly="readonly" class="other_out numeric" type="text" Name="gameResult[other][input][2]" /></td>
										<td class="ash"><input value="{{$gameResult["other"]["input"][3]}}" id="other_out_3" readonly="readonly" class="other_out numeric" type="text" Name="gameResult[other][input][3]" /></td>
										<td class="ash"><input value="{{$gameResult["other"]["input"][4]}}" id="other_out_4" readonly="readonly" class="other_out numeric" type="text" Name="gameResult[other][input][4]" /></td>
										<td class="ash"><input value="{{$gameResult["other"]["input"][5]}}" id="other_out_5" readonly="readonly" class="other_out numeric" type="text" Name="gameResult[other][input][5]" /></td>
										<td class="ash"><input value="{{$gameResult["other"]["input"][6]}}" id="other_out_6" readonly="readonly" class="other_out numeric" type="text" Name="gameResult[other][input][6]" /></td>
										<td class="ash"><input value="{{$gameResult["other"]["input"][7]}}" id="other_out_7" readonly="readonly" class="other_out numeric" type="text" Name="gameResult[other][input][7]" /></td>
										<td class="ash"><input value="{{$gameResult["other"]["input"][8]}}" id="other_out_8" readonly="readonly" class="other_out numeric" type="text" Name="gameResult[other][input][8]" /></td>

										<td><input value="{{$gameResult["other"]["out_sum"]}}" id ="other_out_sum" readonly="readonly" Name="gameResult[other][out_sum]" /></td>

										<td class="ash"><input value="{{$gameResult["other"]["input"][9]}}" id="other_in_0" readonly="readonly" class="other_in numeric"  type="text" Name="gameResult[other][input][9]" /></td>
										<td class="ash"><input value="{{$gameResult["other"]["input"][10]}}" id="other_in_1" readonly="readonly" class="other_in numeric" type="text" Name="gameResult[other][input][10]" /></td>
										<td class="ash"><input value="{{$gameResult["other"]["input"][11]}}" id="other_in_2" readonly="readonly" class="other_in numeric"  type="text" Name="gameResult[other][input][11]" /></td>
										<td class="ash"><input value="{{$gameResult["other"]["input"][12]}}" id="other_in_3" readonly="readonly" class="other_in numeric"  type="text" Name="gameResult[other][input][12]" /></td>
										<td class="ash"><input value="{{$gameResult["other"]["input"][13]}}" id="other_in_4" readonly="readonly" class="other_in numeric"  type="text" Name="gameResult[other][input][13]" /></td>
										<td class="ash"><input value="{{$gameResult["other"]["input"][14]}}" id="other_in_5" readonly="readonly" class="other_in numeric"  type="text" Name="gameResult[other][input][14]" /></td>
										<td class="ash"><input value="{{$gameResult["other"]["input"][15]}}" id="other_in_6" readonly="readonly" class="other_in numeric"  type="text" Name="gameResult[other][input][15]" /></td>
										<td class="ash"><input value="{{$gameResult["other"]["input"][16]}}" id="other_in_7" readonly="readonly" class="other_in numeric"  type="text" Name="gameResult[other][input][16]" /></td>
										<td class="ash"><input value="{{$gameResult["other"]["input"][17]}}" id="other_in_8" readonly="readonly" class="other_in numeric"  type="text" Name="gameResult[other][input][17]" /></td>
										
										<td><input value="{{$gameResult["other"]["in_sum"]}}" id="other_in_sum" readonly="readonly" Name="gameResult[other][in_sum]" /></td>
										<td><input value="{{$gameResult["other"]["tot"]}}" id="other_tot" readonly="readonly" Name="gameResult[other][tot]" /></td>
									</tr>
									<tr>
										<td>PLAYED HOLES</td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input value="{{$gameResult["played_holes"]["tot"]}}" id="played_holes_tot" readonly="readonly" Name="gameResult[played_holes][tot]" /></td>
									</tr>
							</table>
						</div>
						<br>
						<br>
						<br>
						<div class="table-responsive">
							<table class="table">
								<tr style="background: chocolate;">
									<th>PAR 3 SCORING</th>
									<th>PAR 4 SCORING</th>
									<th>PAR 5 SCORING</th>
									<th>#PAR3</th>
									<th>#PAR4</th>
									<th>#PAR5</th>
								</tr>
								<tr>
									<td><input value="{{$summaryResult['par3_scoring'][0]}}" id="par3_scoring" readonly="readonly" name="summaryResult[par3_scoring][0]"></td>
									<td><input value="{{$summaryResult['par4_scoring'][0]}}" id="par4_scoring" readonly="readonly" name="summaryResult[par4_scoring][0]"></td>
									<td><input value="{{$summaryResult['par5_scoring'][0]}}" id="par5_scoring" readonly="readonly" name="summaryResult[par5_scoring][0]"></td>
									<td><input value="{{$summaryResult['hash_par3'][0]}}" id="hash_par3" readonly="readonly" name="summaryResult[hash_par3][0]"></td>
									<td><input value="{{$summaryResult['hash_par4'][0]}}" id="hash_par4" readonly="readonly" name="summaryResult[hash_par4][0]"></td>
									<td><input value="{{$summaryResult['hash_par5'][0]}}" id="hash_par5" readonly="readonly" name="summaryResult[hash_par5][0]"></td>
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
									<td><input value="{{$summaryResult['eagles'][0]}}" id="eagles" readonly="readonly" name="summaryResult[eagles][0]"></td>
									<td><input value="{{$summaryResult['birdies'][0]}}" id="birdies" readonly="readonly" name="summaryResult[birdies][0]"></td>
									<td><input value="{{$summaryResult['pars'][0]}}" id="pars" readonly="readonly" name="summaryResult[pars][0]"></td>
									<td><input value="{{$summaryResult['bogeys'][0]}}" id="bogeys" readonly="readonly" name="summaryResult[bogeys][0]"></td>
									<td><input value="{{$summaryResult['dblbogeys'][0]}}" id="dblbogeys" readonly="readonly" name="summaryResult[dblbogeys][0]"></td>
									<td><input value="{{$summaryResult['others'][0]}}" id="others" readonly="readonly" name="summaryResult[others][0]"></td>
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
									<td><input value="{{$summaryResult['fairways'][0]}}" id="fairways" readonly="readonly" name="summaryResult[fairways][0]"></td>
									<td><input value="{{$summaryResult['fir_percentage'][0]}}" id="fir_percentage" readonly="readonly" name="summaryResult[fir_percentage][0]"></td>
									<td><input value="{{$summaryResult['greens'][0]}}" id="greens" readonly="readonly" name="summaryResult[greens][0]"></td>
									<td><input value="{{$summaryResult['gir_percentage'][0]}}" id="gir_percentage" readonly="readonly" name="summaryResult[gir_percentage][0]"></td>
									<td><input value="{{$summaryResult['played_holes_equation'][0]}}" id="played_holes_equation" readonly="readonly" name="summaryResult[played_holes_equation][0]"></td>
									<td><input value="{{$summaryResult['hole_rds_18'][0]}}" id="hole_rds_18" readonly="readonly" name="summaryResult[hole_rds_18][0]"></td>
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
									<td><input value="{{$summaryResult['scramble_opp_equation'][0]}}" id="scramble_opp_equation" readonly="readonly" name="summaryResult[scramble_opp_equation][0]"></td>
									<td><input value="{{$summaryResult['scramble_sav_equation'][0]}}" id="scramble_sav_equation" readonly="readonly" name="summaryResult[scramble_sav_equation][0]"></td>
									<td><input value="{{$summaryResult['scramble_percentage'][0]}}" id="scramble_percentage" readonly="readonly" name="summaryResult[scramble_percentage][0]"></td>
									<td><input value="{{$summaryResult['sand_opp_equation'][0]}}" id="sand_opp_equation" readonly="readonly" name="summaryResult[sand_opp_equation][0]"></td>
									<td><input value="{{$summaryResult['sand_sav_equation'][0]}}" id="sand_sav_equation" readonly="readonly" name="summaryResult[sand_sav_equation][0]"></td>
									<td><input value="{{$summaryResult['sand_sav_percentage'][0]}}" id="sand_sav_percentage" readonly="readonly" name="summaryResult[sand_sav_percentage][0]"></td>
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
									<td><input value="{{$summaryResult['missed_gir'][0]}}" id="missed_gir" readonly="readonly" name="summaryResult[missed_gir][0]"></td>
									<td><input value="{{$summaryResult['put_1_nogir'][0]}}" id="put_1_nogir" readonly="readonly" name="summaryResult[put_1_nogir][0]"></td>
									<td><input value="{{$summaryResult['avg_dist_chip'][0]}}" id="avg_dist_chip" readonly="readonly" name="summaryResult[avg_dist_chip][0]"></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr style="background: green;">
									<th>TOTAL PUTTS</th>
									<th>PUTTS/HOLE</th>
									<th>SCORE</th>
									<th></th>
									<th></th>
									<th></th>
								</tr>
								<tr>
									<td><input value="{{$summaryResult['total_putts'][0]}}" id="total_putts" readonly="readonly" name="summaryResult[total_putts][0]"></td>
									<td><input value="{{$summaryResult['putts_div_hole'][0]}}" id="putts_div_hole" readonly="readonly" name="summaryResult[putts_div_hole][0]"></td>
									<td><input value="{{$summaryResult['avg_score'][0]}}" id="avg_score" readonly="readonly" name="summaryResult[avg_score][0]"></td>
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
									<td><input value="{{$summaryResult['putt_opp_5_equation'][0]}}" id="putt_opp_5_equation" readonly="readonly" name="summaryResult[putt_opp_5_equation][0]"></td>
									<td><input value="{{$summaryResult['putt_opp_5_9_equation'][0]}}" id="putt_opp_5_9_equation" readonly="readonly" name="summaryResult[putt_opp_5_9_equation][0]"></td>
									<td><input value="{{$summaryResult['putt_opp_10_19_equation'][0]}}" id="putt_opp_10_19_equation" readonly="readonly" name="summaryResult[putt_opp_10_19_equation][0]"></td>
									<td><input value="{{$summaryResult['putt_opp_20_29_equation'][0]}}" id="putt_opp_20_29_equation" readonly="readonly" name="summaryResult[putt_opp_20_29_equation][0]"></td>
									<td><input value="{{$summaryResult['putt_opp_30_equation'][0]}}" id="putt_opp_30_equation" readonly="readonly" name="summaryResult[putt_opp_30_equation][0]"></td>
									<td></td>
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
									<td><input value="{{$summaryResult['putt_make_5_equation'][0]}}" id="putt_make_5_equation" readonly="readonly" name="summaryResult[putt_make_5_equation][0]"></td>
									<td><input value="{{$summaryResult['putt_make_5_9_equation'][0]}}" id="putt_make_5_9_equation" readonly="readonly" name="summaryResult[putt_make_5_9_equation][0]"></td>
									<td><input value="{{$summaryResult['putt_make_10_19_equation'][0]}}" id="putt_make_10_19_equation" readonly="readonly" name="summaryResult[putt_make_10_19_equation][0]"></td>
									<td><input value="{{$summaryResult['putt_make_20_29_equation'][0]}}" id="putt_make_20_29_equation" readonly="readonly" name="summaryResult[putt_make_20_29_equation][0]"></td>
									<td><input value="{{$summaryResult['putt_make_30_equation'][0]}}" id="putt_make_30_equation" readonly="readonly" name="summaryResult[putt_make_30_equation][0]"></td>
									<td></td>
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
									<td><input value="{{$summaryResult['make_percentage_5'][0]}}" id="make_percentage_5" readonly="readonly" name="summaryResult[make_percentage_5][0]"></td>
									<td><input value="{{$summaryResult['make_percentage_5_9'][0]}}" id="make_percentage_5_9" readonly="readonly" name="summaryResult[make_percentage_5_9][0]"></td>
									<td><input value="{{$summaryResult['make_percentage_10_19'][0]}}" id="make_percentage_10_19" readonly="readonly" name="summaryResult[make_percentage_10_19][0]"></td>
									<td><input value="{{$summaryResult['make_percentage_20_29'][0]}}" id="make_percentage_20_29" readonly="readonly" name="summaryResult[make_percentage_20_29][0]"></td>
									<td><input value="{{$summaryResult['make_percentage_30'][0]}}" id="make_percentage_30" readonly="readonly" name="summaryResult[make_percentage_30][0]"></td>
									<td></td>
								</tr>
								<tr>
									<td colspan="6" style="background: #006400;color: #fff;font-weight: 700; text-align:center"><input type="submit" value="Submit" name="submit"/></td>
								</tr>
							</table>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
		<script src="{{$asset}}js/bootstrap-datepicker.js"></script>
		<script type="text/javascript">
            $(document).ready(function () {
                $('#datetimepicker1').datepicker();
            });
        </script>
		<script type="text/javascript" src="{{$asset}}custom_js/formulas.js"></script>
		<script>
			$(document).ready(function(){
				window.setInterval(function(){
				  SetToken()
				}, 60000);
			});
			
			function SetToken()
			{
				$.ajax({
					url: "{{route("get_csrf_token")}}"
				})
			  .done(function( data ) {
				  var dataJson = JSON.parse(data);
				  $( "input[value='_token']" ).val(dataJson.token);
				//alert( "Data Saved: " + msg );
			  });
			}
		</script>
@stop
