@extends('user.master')
@section('content')
<?php
  $asset = asset('/');
?>
<!doctype html>
<html class="no-js" lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		<link rel="stylesheet" href="{{$asset}}css/bootstrap.min.css">
		<link href="{{$asset}}css/bootstrap-datepicker.css" rel="stylesheet">
		<link rel="stylesheet" href="{{$asset}}css/font-awesome.min.css">
		<link rel="stylesheet" href="{{$asset}}css/style.css">
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<link href="{{$asset}}css/ie10-viewport-bug-workaround.css" rel="stylesheet">
		<!-- Custom styles for this template -->
		<link href="{{$asset}}css/dashboard.css" rel="stylesheet">
		
		<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
		<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		<script src="{{$asset}}js/ie-emulation-modes-warning.js"></script>
		
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
		</style>
	</head>
	<body>
		<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		<!-- Add your site or application content here -->
		
		<div class="container-fluid">
			<div class="row">
				<div class="main">
					<h1 class="page-header">Add a round</h1>
					<form action = "{{ route('submitForm') }}" method = "post" align="center">
						<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
					<div class="form-group">
						<div class="col-md-2"><label>Location</label></div>
						<div class="col-md-4">
							<input type="text" class="form-control" name="nameFromUser">
						</div>
						<div class="col-md-2"><label>Date</label></div>
						<div class="col-md-4">
							<input type='text' name=dateFromUser class="form-control" id='datetimepicker1' />
						</div>
					</div>
					<br>
					<br>
					<br>
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table">
									
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
										<td class="numeric  pink"><input class=hole_par_out type="text" Name="gameResult[hole_pair][input][0]" /></td>
										<td class="numeric  pink"><input class=hole_par_out type="text" Name="gameResult[hole_pair][input][1]" /></td>
										<td class="numeric  pink"><input class=hole_par_out type="text" Name="gameResult[hole_pair][input][2]" /></td>
										<td class="numeric  pink"><input class=hole_par_out type="text" Name="gameResult[hole_pair][input][3]" /></td>
										<td class="numeric  pink"><input class=hole_par_out type="text" Name="gameResult[hole_pair][input][4]" /></td>
										<td class="numeric  pink"><input class=hole_par_out type="text" Name="gameResult[hole_pair][input][5]" /></td>
										<td class="numeric  pink"><input class=hole_par_out type="text" Name="gameResult[hole_pair][input][6]" /></td>
										<td class="numeric  pink"><input class=hole_par_out type="text" Name="gameResult[hole_pair][input][7]" /></td>
										<td class="numeric  pink"><input class=hole_par_out type="text" Name="gameResult[hole_pair][input][8]" /></td>

										<td><input id="hole_par_out_sum" readonly="readonly" Name="gameResult[hole_pair][out_sum]" /></td>

										<td class="numeric  pink"><input class=" hole_par_in" type="text" Name="gameResult[hole_pair][input][9]" /></td>
										<td class="numeric  pink"><input class=" hole_par_in" type="text" Name="gameResult[hole_pair][input][10]" /></td>
										<td class="numeric  pink"><input class=" hole_par_in" type="text" Name="gameResult[hole_pair][input][11]" /></td>
										<td class="numeric  pink"><input class=" hole_par_in" type="text" Name="gameResult[hole_pair][input][12]" /></td>
										<td class="numeric  pink"><input class=" hole_par_in" type="text" Name="gameResult[hole_pair][input][13]" /></td>
										<td class="numeric  pink"><input class=" hole_par_in" type="text" Name="gameResult[hole_pair][input][14]" /></td>
										<td class="numeric  pink"><input class=" hole_par_in" type="text" Name="gameResult[hole_pair][input][15]" /></td>
										<td class="numeric  pink"><input class=" hole_par_in" type="text" Name="gameResult[hole_pair][input][16]" /></td>
										<td class="numeric  pink"><input class=" hole_par_in" type="text" Name="gameResult[hole_pair][input][17]" /></td>
										
										<td><input id="hole_par_in_sum" readonly="readonly" Name="gameResult[hole_pair][in_sum]" /></td>

										<td><input id="hole_par_tot" readonly="readonly" Name="gameResult[hole_pair][tot]" /></td>
									</tr>

									<tr>
										<td>SCORE</td>
										<td class="numeric "><input class=" score_out" type="text" Name="gameResult[score][input][0]" /></td>
										<td class="numeric "><input class=" score_out" type="text" Name="gameResult[score][input][1]" /></td>
										<td class="numeric "><input class=" score_out" type="text" Name="gameResult[score][input][2]" /></td>
										<td class="numeric "><input class=" score_out" type="text" Name="gameResult[score][input][3]" /></td>
										<td class="numeric "><input class=" score_out" type="text" Name="gameResult[score][input][4]" /></td>
										<td class="numeric "><input class=" score_out" type="text" Name="gameResult[score][input][5]" /></td>
										<td class="numeric "><input class=" score_out" type="text" Name="gameResult[score][input][6]" /></td>
										<td class="numeric "><input class=" score_out" type="text" Name="gameResult[score][input][7]" /></td>
										<td class="numeric "><input class=" score_out" type="text" Name="gameResult[score][input][8]" /></td>

										<td><input id="score_out_sum" readonly="readonly" Name="gameResult[score][out_sum]" /></td>

										<td class="numeric "><input class=" score_in" type="text" Name="gameResult[score][input][9]" /></td>
										<td class="numeric "><input class=" score_in" type="text" Name="gameResult[score][input][10]" /></td>
										<td class="numeric "><input class=" score_in" type="text" Name="gameResult[score][input][11]" /></td>
										<td class="numeric "><input class=" score_in" type="text" Name="gameResult[score][input][12]" /></td>
										<td class="numeric "><input class=" score_in" type="text" Name="gameResult[score][input][13]" /></td>
										<td class="numeric "><input class=" score_in" type="text" Name="gameResult[score][input][14]" /></td>
										<td class="numeric "><input class=" score_in" type="text" Name="gameResult[score][input][15]" /></td>
										<td class="numeric "><input class=" score_in" type="text" Name="gameResult[score][input][16]" /></td>
										<td class="numeric "><input class=" score_in" type="text" Name="gameResult[score][input][17]" /></td>
										
										<td><input id ="score_in_sum" readonly="readonly" Name="gameResult[score][in_sum]" /></td>
										<td><input id="score_tot" readonly="readonly" Name="gameResult[score][tot]" /></td>
									</tr>

									<tr>
										<td>FIR</td>
										<td class="numeric "><input class="fir_out" type="text" Name="gameResult[fir][input][0]" /></td>
										<td class="numeric "><input class="fir_out" type="text" Name="gameResult[fir][input][1]" /></td>
										<td class="numeric "><input class="fir_out" type="text" Name="gameResult[fir][input][2]" /></td>
										<td class="numeric "><input class="fir_out" type="text" Name="gameResult[fir][input][3]" /></td>
										<td class="numeric "><input class="fir_out" type="text" Name="gameResult[fir][input][4]" /></td>
										<td class="numeric "><input class="fir_out" type="text" Name="gameResult[fir][input][5]" /></td>
										<td class="numeric "><input class="fir_out" type="text" Name="gameResult[fir][input][6]" /></td>
										<td class="numeric "><input class="fir_out" type="text" Name="gameResult[fir][input][7]" /></td>
										<td class="numeric "><input class="fir_out" type="text" Name="gameResult[fir][input][8]" /></td>

										<td><input id ="fir_out_sum" readonly="readonly" Name="gameResult[fir][out_sum]" /></td>

										<td class="numeric "><input class="fir_in"  type="text" Name="gameResult[fir][input][9]" /></td>
										<td class="numeric "><input class="fir_in" type="text" Name="gameResult[fir][input][10]" /></td>
										<td class="numeric "><input class="fir_in"  type="text" Name="gameResult[fir][input][11]" /></td>
										<td class="numeric "><input class="fir_in"  type="text" Name="gameResult[fir][input][12]" /></td>
										<td class="numeric "><input class="fir_in"  type="text" Name="gameResult[fir][input][13]" /></td>
										<td class="numeric "><input class="fir_in"  type="text" Name="gameResult[fir][input][14]" /></td>
										<td class="numeric "><input class="fir_in"  type="text" Name="gameResult[fir][input][15]" /></td>
										<td class="numeric "><input class="fir_in"  type="text" Name="gameResult[fir][input][16]" /></td>
										<td class="numeric "><input class="fir_in"  type="text" Name="gameResult[fir][input][17]" /></td>
										
										<td><input id="fir_in_sum" readonly="readonly" Name="gameResult[fir][in_sum]" /></td>
										<td><input id="fir_tot" readonly="readonly" Name="gameResult[fir][tot]" /></td>
									</tr>

									<tr>
										<td>GIR</td>
										<td class="numeric "><input class="gir_out" type="text" Name="gameResult[gir][input][0]" /></td>
										<td class="numeric "><input class="gir_out" type="text" Name="gameResult[gir][input][1]" /></td>
										<td class="numeric "><input class="gir_out" type="text" Name="gameResult[gir][input][2]" /></td>
										<td class="numeric "><input class="gir_out" type="text" Name="gameResult[gir][input][3]" /></td>
										<td class="numeric "><input class="gir_out" type="text" Name="gameResult[gir][input][4]" /></td>
										<td class="numeric "><input class="gir_out" type="text" Name="gameResult[gir][input][5]" /></td>
										<td class="numeric "><input class="gir_out" type="text" Name="gameResult[gir][input][6]" /></td>
										<td class="numeric "><input class="gir_out" type="text" Name="gameResult[gir][input][7]" /></td>
										<td class="numeric "><input class="gir_out" type="text" Name="gameResult[gir][input][8]" /></td>

										<td><input id ="gir_out_sum" readonly="readonly" Name="gameResult[gir][out_sum]" /></td>

										
										<td class="numeric "><input class="gir_in"  type="text" Name="gameResult[gir][input][9]" /></td>
										<td class="numeric "><input class="gir_in" type="text" Name="gameResult[gir][input][10]" /></td>
										<td class="numeric "><input class="gir_in"  type="text" Name="gameResult[gir][input][11]" /></td>
										<td class="numeric "><input class="gir_in"  type="text" Name="gameResult[gir][input][12]" /></td>
										<td class="numeric "><input class="gir_in"  type="text" Name="gameResult[gir][input][13]" /></td>
										<td class="numeric "><input class="gir_in"  type="text" Name="gameResult[gir][input][14]" /></td>
										<td class="numeric "><input class="gir_in"  type="text" Name="gameResult[gir][input][15]" /></td>
										<td class="numeric "><input class="gir_in"  type="text" Name="gameResult[gir][input][16]" /></td>
										<td class="numeric "><input class="gir_in"  type="text" Name="gameResult[gir][input][17]" /></td>
										
										<td><input id="gir_in_sum" readonly="readonly" Name="gameResult[gir][in_sum]" /></td>
										<td><input id="gir_tot" readonly="readonly" Name="gameResult[gir][tot]" /></td>
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

										<td><input type="text" id="gir_dist_putt_1_out_sum" Name="gameResult[gir_dist_putt_1][out_sum]" readonly="readonly"/></td>

										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>

										<td><input type="text" id="gir_dist_putt_1_in_sum" Name="gameResult[gir_dist_putt_1][in_sum]" readonly="readonly"/></td>
										<td><input type="text" id="gir_dist_putt_1_tot" Name="gameResult[gir_dist_putt_1][tot]" readonly="readonly"/></td>
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
										<td><input id='avg_dist_hol_gir_out' type="text" Name="gameResult[avg_dist_hol_gir][out_sum]" readonly="readonly"/></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>

										<td><input id='avg_dist_hol_gir_in' type="text" Name="gameResult[avg_dist_hol_gir][in_sum]" readonly="readonly"/></td>
										<td><input type="text" id='avg_dist_hol_gir_tot' Name="gameResult[avg_dist_hol_gir][tot]" readonly="readonly"/></td>
									</tr>

									<tr>
										<td>PUTT 1</td>
										<td class="numeric "><input class="putt_1_out" type="text" Name="gameResult[putt_1][input][0]" /></td>
										<td class="numeric "><input class="putt_1_out" type="text" Name="gameResult[putt_1][input][1]" /></td>
										<td class="numeric "><input class="putt_1_out" type="text" Name="gameResult[putt_1][input][2]" /></td>
										<td class="numeric "><input class="putt_1_out" type="text" Name="gameResult[putt_1][input][3]" /></td>
										<td class="numeric "><input class="putt_1_out" type="text" Name="gameResult[putt_1][input][4]" /></td>
										<td class="numeric "><input class="putt_1_out" type="text" Name="gameResult[putt_1][input][5]" /></td>
										<td class="numeric "><input class="putt_1_out" type="text" Name="gameResult[putt_1][input][6]" /></td>
										<td class="numeric "><input class="putt_1_out" type="text" Name="gameResult[putt_1][input][7]" /></td>
										<td class="numeric "><input class="putt_1_out" type="text" Name="gameResult[putt_1][input][8]" /></td>

										<td><input id ="putt_1_out_sum" readonly="readonly" Name="gameResult[putt_1][out_sum]" readonly="readonly" /></td>

										<td class="numeric "><input class="putt_1_in"  type="text" Name="gameResult[putt_1][input][9]" /></td>
										<td class="numeric "><input class="putt_1_in" type="text" Name="gameResult[putt_1][input][10]" /></td>
										<td class="numeric "><input class="putt_1_in"  type="text" Name="gameResult[putt_1][input][11]" /></td>
										<td class="numeric "><input class="putt_1_in"  type="text" Name="gameResult[putt_1][input][12]" /></td>
										<td class="numeric "><input class="putt_1_in"  type="text" Name="gameResult[putt_1][input][13]" /></td>
										<td class="numeric "><input class="putt_1_in"  type="text" Name="gameResult[putt_1][input][14]" /></td>
										<td class="numeric "><input class="putt_1_in"  type="text" Name="gameResult[putt_1][input][15]" /></td>
										<td class="numeric "><input class="putt_1_in"  type="text" Name="gameResult[putt_1][input][16]" /></td>
										<td class="numeric "><input class="putt_1_in"  type="text" Name="gameResult[putt_1][input][17]" /></td>
										
										
										<td><input id="putt_1_in_sum" readonly="readonly" Name="gameResult[putt_1][in_sum]" readonly="readonly"/></td>
										<td><input id="putt_1_tot" readonly="readonly" Name="gameResult[putt_1][tot]" readonly="readonly"/></td>
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
										<td><input type="text" id='dist_aft_putt_1_out_sum' Name="gameResult[dist_aft_putt_1][out_sum]" readonly="readonly"/></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input type="text" id='dist_aft_putt_1_in_sum' Name="gameResult[dist_aft_putt_1][in_sum]" readonly="readonly"/></td>
										<td><input type="text" id='dist_aft_putt_1_tot' Name="gameResult[dist_aft_putt_1][tot]" readonly="readonly"/></td>
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
										<td><input  type="text" id='num_putt_2_out_sum' readonly="readonly" Name="gameResult[num_putt_2][out_sum]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input type="text" id='num_putt_2_in_sum' Name="gameResult[num_putt_2][in_sum]" readonly="readonly"/></td>
										<td><input type="text" id='num_putt_2_tot' Name="gameResult[num_putt_2][tot]" readonly="readonly"/></td>
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
										<td><input type="text" id="avg_dist_hole_putt1_out_sum" Name="gameResult[avg_dist_hole_putt1][out_sum]" readonly="readonly"/></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input type="text" id="avg_dist_hole_putt1_in_sum" Name="gameResult[avg_dist_hole_putt1][in_sum]" readonly="readonly"/></td>
										<td><input type="text" id="avg_dist_hole_putt1_tot" Name="gameResult[avg_dist_hole_putt1][tot]" readonly="readonly"/></td>
									</tr>
									<tr>
										<td>PUTT 2</td>
										<td class="numeric "><input class="putt_2_out" type="text" Name="gameResult[putt_2][input][0]" /></td>
										<td class="numeric "><input class="putt_2_out" type="text" Name="gameResult[putt_2][input][1]" /></td>
										<td class="numeric "><input class="putt_2_out" type="text" Name="gameResult[putt_2][input][2]" /></td>
										<td class="numeric "><input class="putt_2_out" type="text" Name="gameResult[putt_2][input][3]" /></td>
										<td class="numeric "><input class="putt_2_out" type="text" Name="gameResult[putt_2][input][4]" /></td>
										<td class="numeric "><input class="putt_2_out" type="text" Name="gameResult[putt_2][input][5]" /></td>
										<td class="numeric "><input class="putt_2_out" type="text" Name="gameResult[putt_2][input][6]" /></td>
										<td class="numeric "><input class="putt_2_out" type="text" Name="gameResult[putt_2][input][7]" /></td>
										<td class="numeric "><input class="putt_2_out" type="text" Name="gameResult[putt_2][input][8]" /></td>

										<td><input id ="putt_2_out_sum" readonly="readonly" Name="gameResult[putt_2][out_sum]" /></td>

										<td class="numeric "><input class="putt_2_in" type="text" Name="gameResult[putt_2][input][10]" /></td>
										<td class="numeric "><input class="putt_2_in"  type="text" Name="gameResult[putt_2][input][11]" /></td>
										<td class="numeric "><input class="putt_2_in"  type="text" Name="gameResult[putt_2][input][12]" /></td>
										<td class="numeric "><input class="putt_2_in"  type="text" Name="gameResult[putt_2][input][13]" /></td>
										<td class="numeric "><input class="putt_2_in"  type="text" Name="gameResult[putt_2][input][14]" /></td>
										<td class="numeric "><input class="putt_2_in"  type="text" Name="gameResult[putt_2][input][15]" /></td>
										<td class="numeric "><input class="putt_2_in"  type="text" Name="gameResult[putt_2][input][16]" /></td>
										<td class="numeric "><input class="putt_2_in"  type="text" Name="gameResult[putt_2][input][17]" /></td>
										<td class="numeric "><input class="putt_2_in"  type="text" Name="gameResult[putt_2][input][18]" /></td>
			
										<td><input id="putt_2_in_sum" readonly="readonly" Name="gameResult[putt_2][in_sum]" /></td>
										<td><input id="putt_2_tot" readonly="readonly" Name="gameResult[putt_2][tot]" /></td>
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
										<td><input type="text" id='num_putt_3_out_sum' Name="gameResult[num_putt_3][out_sum]" readonly="readonly"/></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input type="text" id='num_putt_3_in_sum' Name="gameResult[num_putt_3][in_sum]" readonly="readonly"/></td>
										<td><input type="text" id='num_putt_3_tot' Name="gameResult[num_putt_3][tot]" readonly="readonly"/></td>
									</tr>

									<tr>
										<td>PUTT 3</td>
										<td class="numeric "><input class="putt_3_out" type="text" Name="gameResult[putt_3][input][0]" /></td>
										<td class="numeric "><input class="putt_3_out" type="text" Name="gameResult[putt_3][input][1]" /></td>
										<td class="numeric "><input class="putt_3_out" type="text" Name="gameResult[putt_3][input][2]" /></td>
										<td class="numeric "><input class="putt_3_out" type="text" Name="gameResult[putt_3][input][3]" /></td>
										<td class="numeric "><input class="putt_3_out" type="text" Name="gameResult[putt_3][input][4]" /></td>
										<td class="numeric "><input class="putt_3_out" type="text" Name="gameResult[putt_3][input][5]" /></td>
										<td class="numeric "><input class="putt_3_out" type="text" Name="gameResult[putt_3][input][6]" /></td>
										<td class="numeric "><input class="putt_3_out" type="text" Name="gameResult[putt_3][input][7]" /></td>
										<td class="numeric "><input class="putt_3_out" type="text" Name="gameResult[putt_3][input][8]" /></td>

										<td><input id ="putt_3_out_sum" readonly="readonly" Name="gameResult[putt_3][out_sum]" /></td>

										<td class="numeric "><input class="putt_3_in"  type="text" Name="gameResult[putt_3][input][9]" /></td>
										<td class="numeric "><input class="putt_3_in"  type="text" Name="gameResult[putt_3][input][10]" /></td>
										<td class="numeric "><input class="putt_3_in"  type="text" Name="gameResult[putt_3][input][11]" /></td>
										<td class="numeric "><input class="putt_3_in"  type="text" Name="gameResult[putt_3][input][12]" /></td>
										<td class="numeric "><input class="putt_3_in"  type="text" Name="gameResult[putt_3][input][13]" /></td>
										<td class="numeric "><input class="putt_3_in"  type="text" Name="gameResult[putt_3][input][14]" /></td>
										<td class="numeric "><input class="putt_3_in"  type="text" Name="gameResult[putt_3][input][15]" /></td>
										<td class="numeric "><input class="putt_3_in"  type="text" Name="gameResult[putt_3][input][16]" /></td>
										<td class="numeric "><input class="putt_3_in"  type="text" Name="gameResult[putt_3][input][17]" /></td>
										
										<td><input id="putt_3_in_sum" readonly="readonly" Name="gameResult[putt_3][in_sum]" /></td>
										<td><input id="putt_3_tot" readonly="readonly" Name="gameResult[putt_3][tot]" /></td>
									</tr>

									<tr>
										<td>TOT PUTT</td>
										<td class="numeric ash"><input id='tot_putt_out_0' readonly="readonly" class="tot_putt_out" type="text" Name="gameResult[tot_putt][input][0]" /></td>
										<td class="numeric ash"><input id='tot_putt_out_1' readonly="readonly" class="tot_putt_out" type="text" Name="gameResult[tot_putt][input][1]" /></td>
										<td class="numeric ash"><input id='tot_putt_out_2' readonly="readonly" class="tot_putt_out" type="text" Name="gameResult[tot_putt][input][2]" /></td>
										<td class="numeric ash"><input id='tot_putt_out_3' readonly="readonly" class="tot_putt_out" type="text" Name="gameResult[tot_putt][input][3]" /></td>
										<td class="numeric ash"><input id='tot_putt_out_4' readonly="readonly" class="tot_putt_out" type="text" Name="gameResult[tot_putt][input][4]" /></td>
										<td class="numeric ash"><input id='tot_putt_out_5' readonly="readonly" class="tot_putt_out" type="text" Name="gameResult[tot_putt][input][5]" /></td>
										<td class="numeric ash"><input id='tot_putt_out_6' readonly="readonly" class="tot_putt_out" type="text" Name="gameResult[tot_putt][input][6]" /></td>
										<td class="numeric ash"><input id='tot_putt_out_7' readonly="readonly" class="tot_putt_out" type="text" Name="gameResult[tot_putt][input][7]" /></td>
										<td class="numeric ash"><input id='tot_putt_out_8' readonly="readonly" class="tot_putt_out" type="text" Name="gameResult[tot_putt][input][8]" /></td>

										<td><input id ="tot_putt_out_sum" readonly="readonly" Name="gameResult[tot_putt][out_sum]" /></td>

										<td class="numeric ash"><input id='tot_putt_in_0' readonly="readonly" class="tot_putt_in"  type="text" Name="gameResult[tot_putt][input][9]" /></td>
					
										<td class="numeric ash"><input id='tot_putt_in_1' readonly="readonly  ash" class="tot_putt_in"  type="text" Name="gameResult[tot_putt][input][10]" /></td>
										<td class="numeric ash"><input id='tot_putt_in_2' readonly="readonly" class="tot_putt_in"  type="text" Name="gameResult[tot_putt][input][11]" /></td>
										<td class="numeric ash"><input id='tot_putt_in_3' readonly="readonly" class="tot_putt_in"  type="text" Name="gameResult[tot_putt][input][12]" /></td>
										<td class="numeric ash"><input id='tot_putt_in_4' readonly="readonly" class="tot_putt_in"  type="text" Name="gameResult[tot_putt][input][13]" /></td>
										<td class="numeric ash"><input id='tot_putt_in_5' readonly="readonly" class="tot_putt_in"  type="text" Name="gameResult[tot_putt][input][14]" /></td>
										<td class="numeric ash"><input id='tot_putt_in_6' readonly="readonly" class="tot_putt_in"  type="text" Name="gameResult[tot_putt][input][15]" /></td>
										<td class="numeric ash"><input id='tot_putt_in_7' readonly="readonly" class="tot_putt_in"  type="text" Name="gameResult[tot_putt][input][16]" /></td>
										<td class="numeric ash"><input id='tot_putt_in_8' readonly="readonly" class="tot_putt_in"  type="text" Name="gameResult[tot_putt][input][17]" /></td>
										
										<td><input id="tot_putt_in_sum" readonly="readonly" Name="gameResult[tot_putt][in_sum]" /></td>
										<td><input id="tot_putt_tot" readonly="readonly" Name="gameResult[tot_putt][tot]" /></td>
									</tr>

									<tr>
										<td>TOT FT MADE</td>
										<td class="numeric ash"><input id='tot_ft_made_out_0' readonly="readonly" class="tot_ft_made_out" type="text" Name="gameResult[tot_ft_made][input][0]" /></td>
										<td class="numeric ash"><input class="tot_ft_made_out" id='tot_ft_made_out_1' readonly="readonly" type="text" Name="gameResult[tot_ft_made][input][1]" /></td>
										<td class="numeric ash"><input class="tot_ft_made_out" id='tot_ft_made_out_2' readonly="readonly" type="text" Name="gameResult[tot_ft_made][input][2]" /></td>
										<td class="numeric ash"><input class="tot_ft_made_out" id='tot_ft_made_out_3' readonly="readonly" type="text" Name="gameResult[tot_ft_made][input][3]" /></td>
										<td class="numeric ash"><input class="tot_ft_made_out" id='tot_ft_made_out_4' readonly="readonly" type="text" Name="gameResult[tot_ft_made][input][4]" /></td>
										<td class="numeric ash"><input class="tot_ft_made_out" id='tot_ft_made_out_5' readonly="readonly" type="text" Name="gameResult[tot_ft_made][input][5]" /></td>
										<td class="numeric ash"><input class="tot_ft_made_out" type="text" id='tot_ft_made_out_6' readonly="readonly" Name="gameResult[tot_ft_made][input][6]" /></td>
										<td class="numeric ash"><input class="tot_ft_made_out" id='tot_ft_made_out_7' readonly="readonly" type="text" Name="gameResult[tot_ft_made][input][7]" /></td>
										<td class="numeric ash"><input class="tot_ft_made_out" type="text" Name="gameResult[tot_ft_made][input][8]" id='tot_ft_made_out_8' readonly="readonly" /></td>

										<td><input id ="tot_ft_made_out_sum" readonly="readonly" Name="gameResult[tot_ft_made][out_sum]" /></td>

										<td class="numeric ash"><input class="tot_ft_made_in"  type="text" Name="gameResult[tot_ft_made][input][9]" id='tot_ft_made_in_0' readonly="readonly"/></td>
										<td class="numeric ash"><input class="tot_ft_made_in" type="text" Name="gameResult[tot_ft_made][input][10]" id='tot_ft_made_in_1' readonly="readonly"/></td>
										<td class="numeric ash"><input class="tot_ft_made_in"  type="text" Name="gameResult[tot_ft_made][input][11]" id='tot_ft_made_in_2' readonly="readonly"/></td>
										<td class="numeric ash"><input class="tot_ft_made_in"  type="text" Name="gameResult[tot_ft_made][input][12]" id='tot_ft_made_in_3' readonly="readonly"/></td>
										<td class="numeric ash"><input class="tot_ft_made_in"  type="text" Name="gameResult[tot_ft_made][input][13]" id='tot_ft_made_in_4' readonly="readonly"/></td>
										<td class="numeric ash"><input class="tot_ft_made_in"  type="text" Name="gameResult[tot_ft_made][input][14]" id='tot_ft_made_in_5' readonly="readonly"/></td>
										<td class="numeric ash"><input class="tot_ft_made_in"  type="text" Name="gameResult[tot_ft_made][input][15]" id='tot_ft_made_in_6' readonly="readonly"/></td>
										<td class="numeric ash"><input class="tot_ft_made_in"  type="text" Name="gameResult[tot_ft_made][input][16]" id='tot_ft_made_in_7' readonly="readonly"/></td>
										<td class="numeric ash"><input class="tot_ft_made_in"  type="text" Name="gameResult[tot_ft_made][input][17]" id='tot_ft_made_in_8' readonly="readonly"/></td>
										
										<td><input id="tot_ft_made_in_sum" readonly="readonly" Name="gameResult[tot_ft_made][in_sum]" /></td>
										<td><input id="tot_ft_made_tot" readonly="readonly" Name="gameResult[tot_ft_made][tot]" /></td>
									</tr>

									<tr>
										<td>PUTT OPP &lt;5</td>
										<td class="numeric ash"><input class="putt_opp_5_out" type="text" Name="gameResult[putt_opp_5][input][0]" id='putt_opp_5_out_0' readonly="readonly" /></td>
										<td class="numeric ash"><input class="putt_opp_5_out" type="text" Name="gameResult[putt_opp_5][input][1]" id='putt_opp_5_out_1' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_5_out" type="text" Name="gameResult[putt_opp_5][input][2]" id='putt_opp_5_out_2' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_5_out" type="text" Name="gameResult[putt_opp_5][input][3]" id='putt_opp_5_out_3' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_5_out" type="text" Name="gameResult[putt_opp_5][input][4]" id='putt_opp_5_out_4' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_5_out" type="text" Name="gameResult[putt_opp_5][input][5]" id='putt_opp_5_out_5' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_5_out" type="text" Name="gameResult[putt_opp_5][input][6]" id='putt_opp_5_out_6' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_5_out" type="text" Name="gameResult[putt_opp_5][input][7]" id='putt_opp_5_out_7' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_5_out" type="text" Name="gameResult[putt_opp_5][input][8]" id='putt_opp_5_out_8' readonly="readonly"/></td>

										<td><input id ="putt_opp_5_out_sum" readonly="readonly" Name="gameResult[putt_opp_5][out_sum]" /></td>

										<td class="numeric ash"><input class="putt_opp_5_in" type="text" Name="gameResult[putt_opp_5][input][10]" id='putt_opp_5_in_0' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_5_in"  type="text" Name="gameResult[putt_opp_5][input][11]" id='putt_opp_5_in_1' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_5_in"  type="text" Name="gameResult[putt_opp_5][input][12]" id='putt_opp_5_in_2' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_5_in"  type="text" Name="gameResult[putt_opp_5][input][13]" id='putt_opp_5_in_3' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_5_in"  type="text" Name="gameResult[putt_opp_5][input][14]" id='putt_opp_5_in_4' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_5_in"  type="text" Name="gameResult[putt_opp_5][input][15]" id='putt_opp_5_in_5' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_5_in"  type="text" Name="gameResult[putt_opp_5][input][16]" id='putt_opp_5_in_6' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_5_in"  type="text" Name="gameResult[putt_opp_5][input][17]" id='putt_opp_5_in_7' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_5_in"  type="text" Name="gameResult[putt_opp_5][input][18]" id='putt_opp_5_in_8' readonly="readonly"/></td>
										
										<td><input id="putt_opp_5_in_sum" readonly="readonly" Name="gameResult[putt_opp_5][in_sum]" /></td>
										<td><input id="putt_opp_5_tot" readonly="readonly" Name="gameResult[putt_opp_5][tot]" /></td>
									</tr>
			
									<tr>
										<td>PUTT MAKE &lt;5</td>
										<td class="numeric ash"><input class="putt_make_5_out" type="text" Name="gameResult[putt_make_5][input][0]" id='putt_make_5_out_0' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_5_out" type="text" Name="gameResult[putt_make_5][input][1]" id='putt_make_5_out_1' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_5_out" type="text" Name="gameResult[putt_make_5][input][2]" id='putt_make_5_out_2' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_5_out" type="text" Name="gameResult[putt_make_5][input][3]" id='putt_make_5_out_3' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_5_out" type="text" Name="gameResult[putt_make_5][input][4]" id='putt_make_5_out_4' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_5_out" type="text" Name="gameResult[putt_make_5][input][5]" id='putt_make_5_out_5' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_5_out" type="text" Name="gameResult[putt_make_5][input][6]" id='putt_make_5_out_6' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_5_out" type="text" Name="gameResult[putt_make_5][input][7]" id='putt_make_5_out_7' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_5_out" type="text" Name="gameResult[putt_make_5][input][8]" id='putt_make_5_out_8' readonly="readonly"/></td>

										<td><input id ="putt_make_5_out_sum" readonly="readonly" Name="gameResult[putt_make_5][out_sum]" /></td>

										<td class="numeric ash"><input class="putt_make_5_in"  type="text" Name="gameResult[putt_make_5][input][9]" id='putt_make_5_in_0' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_5_in" type="text" Name="gameResult[putt_make_5][input][10]" id='putt_make_5_in_1' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_5_in"  type="text" Name="gameResult[putt_make_5][input][11]" id='putt_make_5_in_2' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_5_in"  type="text" Name="gameResult[putt_make_5][input][12]" id='putt_make_5_in_3' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_5_in"  type="text" Name="gameResult[putt_make_5][input][13]" id='putt_make_5_in_4' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_5_in"  type="text" Name="gameResult[putt_make_5][input][14]" id='putt_make_5_in_5' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_5_in"  type="text" Name="gameResult[putt_make_5][input][15]" id='putt_make_5_in_6' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_5_in"  type="text" Name="gameResult[putt_make_5][input][16]" id='putt_make_5_in_7' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_5_in"  type="text" Name="gameResult[putt_make_5][input][17]" id='putt_make_5_in_8' readonly="readonly"/></td>
										
										<td><input id="putt_make_5_in_sum" readonly="readonly" Name="gameResult[putt_make_5][in_sum]" /></td>
										<td><input id="putt_make_5_tot" readonly="readonly" Name="gameResult[putt_make_5][tot]" /></td>
									</tr>

									<tr>
										<td>PUTT OPP 5-9</td>
										<td class="numeric ash"><input class="putt_opp_5_9_out" type="text" Name="gameResult[putt_opp_5-9][input][0]" id='putt_opp_5_9_out_0' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_5_9_out" type="text" Name="gameResult[putt_opp_5-9][input][1]" id='putt_opp_5_9_out_1' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_5_9_out" type="text" Name="gameResult[putt_opp_5-9][input][2]" id='putt_opp_5_9_out_2' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_5_9_out" type="text" Name="gameResult[putt_opp_5-9][input][3]" id='putt_opp_5_9_out_3' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_5_9_out" type="text" Name="gameResult[putt_opp_5-9][input][4]" id='putt_opp_5_9_out_4' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_5_9_out" type="text" Name="gameResult[putt_opp_5-9][input][5]" id='putt_opp_5_9_out_5' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_5_9_out" type="text" Name="gameResult[putt_opp_5-9][input][6]" id='putt_opp_5_9_out_6' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_5_9_out" type="text" Name="gameResult[putt_opp_5-9][input][7]" id='putt_opp_5_9_out_7' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_5_9_out" type="text" Name="gameResult[putt_opp_5-9][input][8]" id='putt_opp_5_9_out_8' readonly="readonly"/></td>

										<td><input id="putt_opp_5_9_out_sum" readonly="readonly" Name="gameResult[putt_opp_5-9][out_sum]" id='putt_opp_5_9_in_8' readonly="readonly"/></td>

										<td class="numeric ash"><input class="putt_opp_5_9_in" type="text" Name="gameResult[putt_opp_5-9][input][9]" id='putt_opp_5_9_in_0' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_5_9_in" type="text" Name="gameResult[putt_opp_5-9][input][10]" id='putt_opp_5_9_in_1' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_5_9_in" type="text" Name="gameResult[putt_opp_5-9][input][11]" id='putt_opp_5_9_in_2' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_5_9_in" type="text" Name="gameResult[putt_opp_5-9][input][12]" id='putt_opp_5_9_in_3' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_5_9_in" type="text" Name="gameResult[putt_opp_5-9][input][13]" id='putt_opp_5_9_in_4' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_5_9_in" type="text" Name="gameResult[putt_opp_5-9][input][14]" id='putt_opp_5_9_in_5' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_5_9_in" type="text" Name="gameResult[putt_opp_5-9][input][15]" id='putt_opp_5_9_in_6' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_5_9_in" type="text" Name="gameResult[putt_opp_5-9][input][16]" id='putt_opp_5_9_in_7' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_5_9_in" type="text" Name="gameResult[putt_opp_5-9][input][17]" id='putt_opp_5_9_in_8' readonly="readonly"/></td>
										
										
										<td><input id="putt_opp_5_9_in_sum" readonly="readonly" Name="gameResult[putt_opp_5-9][in_sum]" /></td>
										<td><input id="putt_opp_5_9_tot" readonly="readonly" Name="gameResult[putt_opp_5-9][tot]" /></td>
									</tr>

									<tr>
										<td>PUTT MAKE 5-9</td>
										<td class="numeric ash"><input class="putt_make_5_9_out" type="text" Name="gameResult[putt_make_5-9][input][0]" id='putt_make_5_9_out_0' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_5_9_out" type="text" Name="gameResult[putt_make_5-9][input][1]" id='putt_make_5_9_out_1' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_5_9_out" type="text" Name="gameResult[putt_make_5-9][input][2]" id='putt_make_5_9_out_2' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_5_9_out" type="text" Name="gameResult[putt_make_5-9][input][3]" id='putt_make_5_9_out_3' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_5_9_out" type="text" Name="gameResult[putt_make_5-9][input][4]" id='putt_make_5_9_out_4' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_5_9_out" type="text" Name="gameResult[putt_make_5-9][input][5]" id='putt_make_5_9_out_5' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_5_9_out" type="text" Name="gameResult[putt_make_5-9][input][6]" id='putt_make_5_9_out_6' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_5_9_out" type="text" Name="gameResult[putt_make_5-9][input][7]" id='putt_make_5_9_out_7' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_5_9_out" type="text" Name="gameResult[putt_make_5-9][input][8]" id='putt_make_5_9_out_8' readonly="readonly"/></td>

										<td><input id="putt_make_5_9_out_sum" readonly="readonly" Name="gameResult[putt_make_5-9][out_sum]" /></td>

										<td class="numeric ash"><input class="putt_make_5_9_in" type="text" Name="gameResult[putt_make_5-9][input][9]" id='putt_make_5_9_in_0' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_5_9_in" type="text" Name="gameResult[putt_make_5-9][input][10]" id='putt_make_5_9_in_1' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_5_9_in" type="text" Name="gameResult[putt_make_5-9][input][11]" id='putt_make_5_9_in_2' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_5_9_in" type="text" Name="gameResult[putt_make_5-9][input][12]" id='putt_make_5_9_in_3' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_5_9_in" type="text" Name="gameResult[putt_make_5-9][input][13]" id='putt_make_5_9_in_4' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_5_9_in" type="text" Name="gameResult[putt_make_5-9][input][14]" id='putt_make_5_9_in_5' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_5_9_in" type="text" Name="gameResult[putt_make_5-9][input][15]" id='putt_make_5_9_in_6' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_5_9_in" type="text" Name="gameResult[putt_make_5-9][input][16]" id='putt_make_5_9_in_7' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_5_9_in" type="text" Name="gameResult[putt_make_5-9][input][17]" id='putt_make_5_9_in_8' readonly="readonly"/></td>
										
										<td><input id="putt_make_5_9_in_sum" readonly="readonly" Name="gameResult[putt_make_5-9][in_sum]" /></td>
										<td><input id="putt_make_5_9_tot" readonly="readonly" Name="gameResult[putt_make_5-9][tot]" /></td>
									</tr>

									<tr>
										<td>PUTT OPP 10-19</td>
										<td class="numeric ash"><input class="putt_opp_10_19_out" type="text" Name="gameResult[putt_opp_10-19][input][0]" id='putt_opp_10_19_out_0' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_10_19_out" type="text" Name="gameResult[putt_opp_10-19][input][1]" id='putt_opp_10_19_out_1' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_10_19_out" type="text" Name="gameResult[putt_opp_10-19][input][2]" id='putt_opp_10_19_out_2' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_10_19_out" type="text" Name="gameResult[putt_opp_10-19][input][3]" id='putt_opp_10_19_out_3' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_10_19_out" type="text" Name="gameResult[putt_opp_10-19][input][4]" id='putt_opp_10_19_out_4' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_10_19_out" type="text" Name="gameResult[putt_opp_10-19][input][5]" id='putt_opp_10_19_out_5' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_10_19_out" type="text" Name="gameResult[putt_opp_10-19][input][6]" id='putt_opp_10_19_out_6' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_10_19_out" type="text" Name="gameResult[putt_opp_10-19][input][7]" id='putt_opp_10_19_out_7' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_10_19_out" type="text" Name="gameResult[putt_opp_10-19][input][8]" id='putt_opp_10_19_out_8' readonly="readonly"/></td>

										<td><input id="putt_opp_10_19_out_sum" readonly="readonly" Name="gameResult[putt_opp_10-19][out_sum]" /></td>

										
										<td class="numeric ash"><input class="putt_opp_10_19_in" type="text" Name="gameResult[putt_opp_10-19][input][9]" id='putt_opp_10_19_in_0' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_10_19_in" type="text" Name="gameResult[putt_opp_10-19][input][10]" id='putt_opp_10_19_in_1' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_10_19_in" type="text" Name="gameResult[putt_opp_10-19][input][11]" id='putt_opp_10_19_in_2' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_10_19_in" type="text" Name="gameResult[putt_opp_10-19][input][12]" id='putt_opp_10_19_in_3' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_10_19_in" type="text" Name="gameResult[putt_opp_10-19][input][13]" id='putt_opp_10_19_in_4' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_10_19_in" type="text" Name="gameResult[putt_opp_10-19][input][14]" id='putt_opp_10_19_in_5' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_10_19_in" type="text" Name="gameResult[putt_opp_10-19][input][15]" id='putt_opp_10_19_in_6' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_10_19_in" type="text" Name="gameResult[putt_opp_10-19][input][16]" id='putt_opp_10_19_in_7' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_10_19_in" type="text" Name="gameResult[putt_opp_10-19][input][17]" id='putt_opp_10_19_in_8' readonly="readonly"/></td>
										
										<td><input id="putt_opp_10_19_in_sum" readonly="readonly" Name="gameResult[putt_opp_10-19][in_sum]" /></td>
										<td><input id="putt_opp_10_19_tot" readonly="readonly" Name="gameResult[putt_opp_10-19][tot]" /></td>
									</tr>

									<tr>
										<td>PUTT MAKE 10-19</td>
										<td class="numeric ash"><input class="putt_make_10_19_out" type="text" Name="gameResult[putt_make_10-19][input][0]" id='putt_make_10_19_out_0' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_10_19_out" type="text" Name="gameResult[putt_make_10-19][input][1]" id='putt_make_10_19_out_1' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_10_19_out" type="text" Name="gameResult[putt_make_10-19][input][2]" id='putt_make_10_19_out_2' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_10_19_out" type="text" Name="gameResult[putt_make_10-19][input][3]" id='putt_make_10_19_out_3' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_10_19_out" type="text" Name="gameResult[putt_make_10-19][input][4]" id='putt_make_10_19_out_4' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_10_19_out" type="text" Name="gameResult[putt_make_10-19][input][5]" id='putt_make_10_19_out_5' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_10_19_out" type="text" Name="gameResult[putt_make_10-19][input][6]" id='putt_make_10_19_out_6' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_10_19_out" type="text" Name="gameResult[putt_make_10-19][input][7]" id='putt_make_10_19_out_7' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_10_19_out" type="text" Name="gameResult[putt_make_10-19][input][8]" id='putt_make_10_19_out_8' readonly="readonly"/></td>

										<td><input id="putt_make_10_19_out_sum" readonly="readonly" Name="gameResult[putt_make_10-19][out_sum]" /></td>

										<td class="numeric ash"><input class="putt_make_10_19_in" type="text" Name="gameResult[putt_make_10-19][input][9]" id='putt_make_10_19_in_0' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_10_19_in" type="text" Name="gameResult[putt_make_10-19][input][10]" id='putt_make_10_19_in_1' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_10_19_in" type="text" Name="gameResult[putt_make_10-19][input][11]" id='putt_make_10_19_in_2' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_10_19_in" type="text" Name="gameResult[putt_make_10-19][input][12]" id='putt_make_10_19_in_3' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_10_19_in" type="text" Name="gameResult[putt_make_10-19][input][13]" id='putt_make_10_19_in_4' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_10_19_in" type="text" Name="gameResult[putt_make_10-19][input][14]" id='putt_make_10_19_in_5' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_10_19_in" type="text" Name="gameResult[putt_make_10-19][input][15]" id='putt_make_10_19_in_6' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_10_19_in" type="text" Name="gameResult[putt_make_10-19][input][16]" id='putt_make_10_19_in_7' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_10_19_in" type="text" Name="gameResult[putt_make_10-19][input][17]" id='putt_make_10_19_in_8' readonly="readonly"/></td>
										
										<td><input id="putt_make_10_19_in_sum" readonly="readonly" Name="gameResult[putt_make_10-19][in_sum]" /></td>
										<td><input id="putt_make_10_19_tot" readonly="readonly" Name="gameResult[putt_make_10-19][tot]" /></td>
									</tr>
									
									<tr>
										<td>PUTT OPP 20-29</td>
										<td class="numeric ash"><input class="putt_opp_20_29_out" type="text" Name="gameResult[putt_opp_20-29][input][0]" id='putt_opp_20_29_out_0' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_20_29_out" type="text" Name="gameResult[putt_opp_20-29][input][1]" id='putt_opp_20_29_out_1' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_20_29_out" type="text" Name="gameResult[putt_opp_20-29][input][2]" id='putt_opp_20_29_out_2' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_20_29_out" type="text" Name="gameResult[putt_opp_20-29][input][3]" id='putt_opp_20_29_out_3' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_20_29_out" type="text" Name="gameResult[putt_opp_20-29][input][4]" id='putt_opp_20_29_out_4' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_20_29_out" type="text" Name="gameResult[putt_opp_20-29][input][5]" id='putt_opp_20_29_out_5' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_20_29_out" type="text" Name="gameResult[putt_opp_20-29][input][6]" id='putt_opp_20_29_out_6' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_20_29_out" type="text" Name="gameResult[putt_opp_20-29][input][7]" id='putt_opp_20_29_out_7' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_20_29_out" type="text" Name="gameResult[putt_opp_20-29][input][8]" id='putt_opp_20_29_out_8' readonly="readonly"/></td>

										<td><input id="putt_opp_20_29_out_sum" readonly="readonly" Name="gameResult[putt_opp_20-29][out_sum]" /></td>

										<td class="numeric ash"><input class="putt_opp_20_29_in" type="text" Name="gameResult[putt_opp_20-29][input][10]" id='putt_opp_20_29_in_0' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_20_29_in" type="text" Name="gameResult[putt_opp_20-29][input][11]" id='putt_opp_20_29_in_1' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_20_29_in" type="text" Name="gameResult[putt_opp_20-29][input][12]" id='putt_opp_20_29_in_2' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_20_29_in" type="text" Name="gameResult[putt_opp_20-29][input][13]" id='putt_opp_20_29_in_3' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_20_29_in" type="text" Name="gameResult[putt_opp_20-29][input][14]" id='putt_opp_20_29_in_4' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_20_29_in" type="text" Name="gameResult[putt_opp_20-29][input][15]" id='putt_opp_20_29_in_5' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_20_29_in" type="text" Name="gameResult[putt_opp_20-29][input][16]" id='putt_opp_20_29_in_6' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_20_29_in" type="text" Name="gameResult[putt_opp_20-29][input][17]" id='putt_opp_20_29_in_7' readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_20_29_in" type="text" Name="gameResult[putt_opp_20-29][input][18]" id='putt_opp_20_29_in_8' readonly="readonly"/></td>
										
										<td><input id="putt_opp_20_29_in_sum" readonly="readonly" Name="gameResult[putt_opp_20-29][19]" /></td>
										<td><input id="putt_opp_20_29_tot" readonly="readonly" Name="gameResult[putt_opp_20-29][20]" /></td>
									</tr>

									<tr>
										<td>PUTT MAKE 20-29</td>
										<td class="numeric ash"><input class="putt_make_20_29_out" type="text" Name="gameResult[putt_make_20-29][input][0]" id="putt_make_20_29_out_0" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_20_29_out" type="text" Name="gameResult[putt_make_20-29][input][1]" id="putt_make_20_29_out_1" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_20_29_out" type="text" Name="gameResult[putt_make_20-29][input][2]" id="putt_make_20_29_out_2" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_20_29_out" type="text" Name="gameResult[putt_make_20-29][input][3]" id="putt_make_20_29_out_3" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_20_29_out" type="text" Name="gameResult[putt_make_20-29][input][4]" id="putt_make_20_29_out_4" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_20_29_out" type="text" Name="gameResult[putt_make_20-29][input][5]" id="putt_make_20_29_out_5" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_20_29_out" type="text" Name="gameResult[putt_make_20-29][input][6]" id="putt_make_20_29_out_6" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_20_29_out" type="text" Name="gameResult[putt_make_20-29][input][7]" id="putt_make_20_29_out_7" readonly="readonly" /></td>
										<td class="numeric ash"><input class="putt_make_20_29_out" type="text" Name="gameResult[putt_make_20-29][input][8]" id="putt_make_20_29_out_8" readonly="readonly"/></td>

										<td><input id="putt_make_20_29_out_sum" readonly="readonly" Name="gameResult[putt_make_20-29][out_sum]" /></td>


										<td class="numeric ash"><input class="putt_make_20_29_in" type="text" Name="gameResult[putt_make_20-29][input][9]" id="putt_make_20_29_in_0" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_20_29_in" type="text" Name="gameResult[putt_make_20-29][input][10]" id="putt_make_20_29_in_1" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_20_29_in" type="text" Name="gameResult[putt_make_20-29][input][11]" id="putt_make_20_29_in_2" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_20_29_in" type="text" Name="gameResult[putt_make_20-29][input][12]" id="putt_make_20_29_in_3" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_20_29_in" type="text" Name="gameResult[putt_make_20-29][input][13]" id="putt_make_20_29_in_4" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_20_29_in" type="text" Name="gameResult[putt_make_20-29][input][14]" id="putt_make_20_29_in_5" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_20_29_in" type="text" Name="gameResult[putt_make_20-29][input][15]" id="putt_make_20_29_in_6" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_20_29_in" type="text" Name="gameResult[putt_make_20-29][input][16]" id="putt_make_20_29_in_7" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_20_29_in" type="text" Name="gameResult[putt_make_20-29][input][17]" id="putt_make_20_29_in_8" readonly="readonly"/></td>

										<td><input id="putt_make_20_29_in_sum" readonly="readonly" Name="gameResult[putt_make_20-29][in_sum]" /></td>
										<td><input id="putt_make_20_29_tot" readonly="readonly" Name="gameResult[putt_make_20-29][tot]" /></td>
									</tr>
									<tr>
										<td>PUTT OPP 30+</td>
										<td class="numeric ash"><input class="putt_opp_30_out" type="text" Name="gameResult[putt_opp_30][input][0]" id="putt_opp_30_out_0" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_30_out" type="text" Name="gameResult[putt_opp_30][input][1]" id="putt_opp_30_out_1" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_30_out" type="text" Name="gameResult[putt_opp_30][input][2]" id="putt_opp_30_out_2" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_30_out" type="text" Name="gameResult[putt_opp_30][input][3]" id="putt_opp_30_out_3" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_30_out" type="text" Name="gameResult[putt_opp_30][input][4]" id="putt_opp_30_out_4" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_30_out" type="text" Name="gameResult[putt_opp_30][input][5]" id="putt_opp_30_out_5" readonly="readonly" /></td>
										<td class="numeric ash"><input class="putt_opp_30_out" type="text" Name="gameResult[putt_opp_30][input][6]" id="putt_opp_30_out_6" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_30_out" type="text" Name="gameResult[putt_opp_30][input][7]" id="putt_opp_30_out_7" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_30_out" type="text" Name="gameResult[putt_opp_30][input][8]" id="putt_opp_30_out_8" readonly="readonly"/></td>

										<td><input id ="putt_opp_30_out_sum" readonly="readonly" Name="gameResult[putt_opp_30][out_sum]" /></td>

										<td class="numeric ash"><input class="putt_opp_30_in"  type="text" Name="gameResult[putt_opp_30][input][9]" id="putt_opp_30_in_0" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_30_in" type="text" Name="gameResult[putt_opp_30][input][10]" id="putt_opp_30_in_1" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_30_in"  type="text" Name="gameResult[putt_opp_30][input][11]" id="putt_opp_30_in_2" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_30_in"  type="text" Name="gameResult[putt_opp_30][input][12]" id="putt_opp_30_in_3" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_30_in"  type="text" Name="gameResult[putt_opp_30][input][13]" id="putt_opp_30_in_4" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_30_in"  type="text" Name="gameResult[putt_opp_30][input][14]" id="putt_opp_30_in_5" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_30_in"  type="text" Name="gameResult[putt_opp_30][input][15]" id="putt_opp_30_in_6" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_30_in"  type="text" Name="gameResult[putt_opp_30][input][16]" id="putt_opp_30_in_7" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_opp_30_in"  type="text" Name="gameResult[putt_opp_30][input][17]" id="putt_opp_30_in_8" readonly="readonly"/></td>
										
										<td><input id="putt_opp_30_in_sum" readonly="readonly" Name="gameResult[putt_opp_30][in_sum]" /></td>
										<td><input id="putt_opp_30_tot" readonly="readonly" Name="gameResult[putt_opp_30][tot]" /></td>
									</tr>

									<tr>
										<td>PUTT Make 30+</td>
										<td class="numeric ash"><input class="putt_make_30_out" type="text" Name="gameResult[putt_make_30][input][0]" id="putt_make_30_out_0" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_30_out" type="text" Name="gameResult[putt_make_30][input][1]" id="putt_make_30_out_1" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_30_out" type="text" Name="gameResult[putt_make_30][input][2]" id="putt_make_30_out_2" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_30_out" type="text" Name="gameResult[putt_make_30][input][3]" id="putt_make_30_out_3" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_30_out" type="text" Name="gameResult[putt_make_30][input][4]" id="putt_make_30_out_4" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_30_out" type="text" Name="gameResult[putt_make_30][input][5]" id="putt_make_30_out_5" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_30_out" type="text" Name="gameResult[putt_make_30][input][6]" id="putt_make_30_out_6" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_30_out" type="text" Name="gameResult[putt_make_30][input][7]" id="putt_make_30_out_7" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_30_out" type="text" Name="gameResult[putt_make_30][input][8]" id="putt_make_30_out_8" readonly="readonly"/></td>

										<td><input id ="putt_make_30_out_sum" readonly="readonly" Name="gameResult[putt_make_30][out_sum]" id="putt_make_30_in_0" readonly="readonly"/></td>

										<td class="numeric ash"><input class="putt_make_30_in"  type="text" Name="gameResult[putt_make_30][input][9]" id="putt_make_30_in_0" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_30_in" type="text" Name="gameResult[putt_make_30][input][10]" id="putt_make_30_in_1" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_30_in"  type="text" Name="gameResult[putt_make_30][input][11]" id="putt_make_30_in_2" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_30_in"  type="text" Name="gameResult[putt_make_30][input][12]" id="putt_make_30_in_3" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_30_in"  type="text" Name="gameResult[putt_make_30][input][13]" id="putt_make_30_in_4" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_30_in"  type="text" Name="gameResult[putt_make_30][input][14]" id="putt_make_30_in_5" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_30_in"  type="text" Name="gameResult[putt_make_30][input][15]" id="putt_make_30_in_6" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_30_in"  type="text" Name="gameResult[putt_make_30][input][16]" id="putt_make_30_in_7" readonly="readonly"/></td>
										<td class="numeric ash"><input class="putt_make_30_in"  type="text" Name="gameResult[putt_make_30][input][17]" id="putt_make_30_in_8" readonly="readonly"/></td>
										
										<td><input id="putt_make_30_in_sum" readonly="readonly" Name="gameResult[putt_make_30][in_sum]" /></td>
										<td><input id="putt_make_30_tot" readonly="readonly" Name="gameResult[putt_make_30][tot]" /></td>
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
										<td><input type="text" readonly="readonly" Name="gameResult[nogir_dist_putt_1][out_sum]" id='nogir_dist_putt_1_out_sum'/></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input type="text" readonly="readonly" Name="gameResult[nogir_dist_putt_1][in_sum]" id='nogir_dist_putt_1_in_sum'/></td>
										<td><input type="text" readonly="readonly" Name="gameResult[nogir_dist_putt_1][tot]" id='nogir_dist_putt_1_tot' /></td>
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
										<td><input readonly="readonly" Name="gameResult[no_gir][out_sum]" id='no_gir_out_sum'/></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input readonly="readonly" Name="gameResult[no_gir][in_sum]" id='no_gir_in_sum'/></td>
										<td><input readonly="readonly" Name="gameResult[no_gir][tot]" id='no_gir_tot'/></td>
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
										<td><input type="text" readonly="readonly" Name="gameResult[avg_dist_hol_nogir][out_sum]" id="avg_dist_hol_nogir_out_sum"/></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input type="text" readonly="readonly" Name="gameResult[avg_dist_hol_nogir][in_sum]" id="avg_dist_hol_nogir_in_sum"/></td>
										<td><input type="text" readonly="readonly" Name="gameResult[avg_dist_hol_nogir][tot]" id="avg_dist_hol_nogir_tot" /></td>
									</tr>
									
									<tr>
										<td>SCRAMBL OPP</td>
										<td class="numeric ash"><input class="scrambl_opp_out" type="text" Name="gameResult[scrambl_opp][input][0]" id='scrambl_opp_out_0' readonly="readonly"/></td>
										<td class="numeric ash"><input class="scrambl_opp_out" type="text" Name="gameResult[scrambl_opp][input][1]" id='scrambl_opp_out_1' readonly="readonly"/></td>
										<td class="numeric ash"><input class="scrambl_opp_out" type="text" Name="gameResult[scrambl_opp][input][2]" id='scrambl_opp_out_2' readonly="readonly"/></td>
										<td class="numeric ash"><input class="scrambl_opp_out" type="text" Name="gameResult[scrambl_opp][input][3]" id='scrambl_opp_out_3' readonly="readonly"/></td>
										<td class="numeric ash"><input class="scrambl_opp_out" type="text" Name="gameResult[scrambl_opp][input][4]" id='scrambl_opp_out_4' readonly="readonly"/></td>
										<td class="numeric ash"><input class="scrambl_opp_out" type="text" Name="gameResult[scrambl_opp][input][5]" id='scrambl_opp_out_5' readonly="readonly"/></td>
										<td class="numeric ash"><input class="scrambl_opp_out" type="text" Name="gameResult[scrambl_opp][input][6]" id='scrambl_opp_out_6' readonly="readonly"/></td>
										<td class="numeric ash"><input class="scrambl_opp_out" type="text" Name="gameResult[scrambl_opp][input][7]" id='scrambl_opp_out_7' readonly="readonly"/></td>
										<td class="numeric ash"><input class="scrambl_opp_out" type="text" Name="gameResult[scrambl_opp][input][8]" id='scrambl_opp_out_8' readonly="readonly"/></td>

										<td><input id ="scrambl_opp_out_sum" readonly="readonly" Name="gameResult[scrambl_opp][out_sum]" /></td>

										<td class="numeric ash"><input class="scrambl_opp_in"  type="text" Name="gameResult[scrambl_opp][input][9]" id='scrambl_opp_in_0' readonly="readonly"/></td>
										<td class="numeric ash"><input class="scrambl_opp_in" type="text" Name="gameResult[scrambl_opp][input][10]" id='scrambl_opp_in_1' readonly="readonly" /></td>
										<td class="numeric ash"><input class="scrambl_opp_in"  type="text" Name="gameResult[scrambl_opp][input][11]" id='scrambl_opp_in_2' readonly="readonly" /></td>
										<td class="numeric ash"><input class="scrambl_opp_in"  type="text" Name="gameResult[scrambl_opp][input][12]" id='scrambl_opp_in_3' readonly="readonly" /></td>
										<td class="numeric ash"><input class="scrambl_opp_in"  type="text" Name="gameResult[scrambl_opp][input][13]" id='scrambl_opp_in_4' readonly="readonly" /></td>
										<td class="numeric ash"><input class="scrambl_opp_in"  type="text" Name="gameResult[scrambl_opp][input][14]" id='scrambl_opp_in_5' readonly="readonly" /></td>
										<td class="numeric ash"><input class="scrambl_opp_in"  type="text" Name="gameResult[scrambl_opp][input][15]" id='scrambl_opp_in_6' readonly="readonly" /></td>
										<td class="numeric ash"><input class="scrambl_opp_in"  type="text" Name="gameResult[scrambl_opp][input][16]" id='scrambl_opp_in_7' readonly="readonly" /></td>
										<td class="numeric ash"><input class="scrambl_opp_in"  type="text" Name="gameResult[scrambl_opp][input][17]" id='scrambl_opp_in_8' readonly="readonly" /></td>
										
										<td><input id="scrambl_opp_in_sum" readonly="readonly" Name="gameResult[scrambl_opp][in_sum]" /></td>
										<td><input id="scrambl_opp_tot" readonly="readonly" Name="gameResult[scrambl_opp][tot]" /></td>
									</tr>

									<tr>
										<td>SCRAMBL SAV</td>
										<td class="numeric ash"><input class="scrambl_sav_out" type="text" Name="gameResult[scrambl_sav][input][0]" id="scrambl_sav_out_0" readonly="readonly"/></td>
										<td class="numeric ash"><input class="scrambl_sav_out" type="text" Name="gameResult[scrambl_sav][input][1]" id="scrambl_sav_out_1" readonly="readonly"/></td>
										<td class="numeric ash"><input class="scrambl_sav_out" type="text" Name="gameResult[scrambl_sav][input][2]" id="scrambl_sav_out_2" readonly="readonly"/></td>
										<td class="numeric ash"><input class="scrambl_sav_out" type="text" Name="gameResult[scrambl_sav][input][3]" id="scrambl_sav_out_3" readonly="readonly"/></td>
										<td class="numeric ash"><input class="scrambl_sav_out" type="text" Name="gameResult[scrambl_sav][input][4]" id="scrambl_sav_out_4" readonly="readonly"/></td>
										<td class="numeric ash"><input class="scrambl_sav_out" type="text" Name="gameResult[scrambl_sav][input][5]" id="scrambl_sav_out_5" readonly="readonly"/></td>
										<td class="numeric ash"><input class="scrambl_sav_out" type="text" Name="gameResult[scrambl_sav][input][6]" id="scrambl_sav_out_6" readonly="readonly"/></td>
										<td class="numeric ash"><input class="scrambl_sav_out" type="text" Name="gameResult[scrambl_sav][input][7]" id="scrambl_sav_out_7" readonly="readonly"/></td>
										<td class="numeric ash"><input class="scrambl_sav_out" type="text" Name="gameResult[scrambl_sav][input][8]" id="scrambl_sav_out_8" readonly="readonly"/></td>

										<td><input id ="scrambl_sav_out_sum" readonly="readonly" Name="gameResult[scrambl_sav][out_sum]" /></td>

										<td class="numeric ash"><input class="scrambl_sav_in" type="text" Name="gameResult[scrambl_sav][input][10]" id="scrambl_sav_in_0" readonly="readonly"/></td>
										<td class="numeric ash"><input class="scrambl_sav_in"  type="text" Name="gameResult[scrambl_sav][input][11]" id="scrambl_sav_in_1" readonly="readonly"/></td>
										<td class="numeric ash"><input class="scrambl_sav_in"  type="text" Name="gameResult[scrambl_sav][input][12]" id="scrambl_sav_in_2" readonly="readonly"/></td>
										<td class="numeric ash"><input class="scrambl_sav_in"  type="text" Name="gameResult[scrambl_sav][input][13]" id="scrambl_sav_in_3" readonly="readonly"/></td>
										<td class="numeric ash"><input class="scrambl_sav_in"  type="text" Name="gameResult[scrambl_sav][input][14]" id="scrambl_sav_in_4" readonly="readonly"/></td>
										<td class="numeric ash"><input class="scrambl_sav_in"  type="text" Name="gameResult[scrambl_sav][input][15]" id="scrambl_sav_in_5" readonly="readonly"/></td>
										<td class="numeric ash"><input class="scrambl_sav_in"  type="text" Name="gameResult[scrambl_sav][input][16]" id="scrambl_sav_in_6" readonly="readonly"/></td>
										<td class="numeric ash"><input class="scrambl_sav_in"  type="text" Name="gameResult[scrambl_sav][input][17]" id="scrambl_sav_in_7" readonly="readonly"/></td>
										<td class="numeric ash"><input class="scrambl_sav_in"  type="text" Name="gameResult[scrambl_sav][input][18]" id="scrambl_sav_in_8" readonly="readonly"/></td>
										
										<td><input id="scrambl_sav_in_sum" readonly="readonly" Name="gameResult[scrambl_sav][in_sum]" /></td>
										<td><input id="scrambl_sav_tot" readonly="readonly" Name="gameResult[scrambl_sav][tot]" /></td>
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
										<td><input type="text" id="scrambl_percentage_out_sum" readonly="readonly" Name="gameResult[scrambl%][out_sum]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input type="text" id="scrambl_percentage_in_sum" readonly="readonly" Name="gameResult[scrambl%][in_sum]" /></td>
										<td><input type="text" id="scrambl_percentage_sum" readonly="readonly" Name="gameResult[scrambl%][tot]" /></td>
									</tr>
									
									<tr>
										<td>SAND OPP</td>
										<td class="numeric "><input class="sand_opp_out" type="text" Name="gameResult[sand_opp][input][0]" id="sand_opp_out_0" /></td>
										<td class="numeric "><input class="sand_opp_out" type="text" Name="gameResult[sand_opp][input][1]" id="sand_opp_out_1" /></td>
										<td class="numeric "><input class="sand_opp_out" type="text" Name="gameResult[sand_opp][input][2]" id="sand_opp_out_2" /></td>
										<td class="numeric "><input class="sand_opp_out" type="text" Name="gameResult[sand_opp][input][3]" id="sand_opp_out_3" /></td>
										<td class="numeric "><input class="sand_opp_out" type="text" Name="gameResult[sand_opp][input][4]" id="sand_opp_out_4" /></td>
										<td class="numeric "><input class="sand_opp_out" type="text" Name="gameResult[sand_opp][input][5]" id="sand_opp_out_5" /></td>
										<td class="numeric "><input class="sand_opp_out" type="text" Name="gameResult[sand_opp][input][6]" id="sand_opp_out_6" /></td>
										<td class="numeric "><input class="sand_opp_out" type="text" Name="gameResult[sand_opp][input][7]" id="sand_opp_out_7" /></td>
										<td class="numeric "><input class="sand_opp_out" type="text" Name="gameResult[sand_opp][input][8]" id="sand_opp_out_8" /></td>

										<td><input id ="sand_opp_out_sum" readonly="readonly" Name="gameResult[sand_opp][out_sum]" /></td>

										<td class="numeric "><input class="sand_opp_in"  type="text" id="sand_opp_in_0" Name="gameResult[sand_opp][input][9]" /></td>
										<td class="numeric "><input class="sand_opp_in"  type="text" id="sand_opp_in_1" Name="gameResult[sand_opp][input][10]" /></td>
										<td class="numeric "><input class="sand_opp_in"  type="text" id="sand_opp_in_2" Name="gameResult[sand_opp][input][11]" /></td>
										<td class="numeric "><input class="sand_opp_in"  type="text" id="sand_opp_in_3" Name="gameResult[sand_opp][input][12]" /></td>
										<td class="numeric "><input class="sand_opp_in"  type="text" id="sand_opp_in_4" Name="gameResult[sand_opp][input][13]" /></td>
										<td class="numeric "><input class="sand_opp_in"  type="text" id="sand_opp_in_5" Name="gameResult[sand_opp][input][14]" /></td>
										<td class="numeric "><input class="sand_opp_in"  type="text" id="sand_opp_in_6" Name="gameResult[sand_opp][input][15]" /></td>
										<td class="numeric "><input class="sand_opp_in"  type="text" id="sand_opp_in_7" Name="gameResult[sand_opp][input][16]" /></td>
										<td class="numeric "><input class="sand_opp_in"  type="text" id="sand_opp_in_8" Name="gameResult[sand_opp][input][17]" /></td>
										
										<td><input id="sand_opp_in_sum" readonly="readonly" Name="gameResult[sand_opp][in_sum]" /></td>
										<td><input id="sand_opp_tot" readonly="readonly" Name="gameResult[sand_opp][tot]" /></td>
									</tr>

									<tr>
										<td>SAND SAV</td>
										<td class="numeric ash"><input class="sand_sav_out" type="text" id="sand_sav_out_0" readonly="readonly" Name="gameResult[sand_sav][input][0]" /></td>
										<td class="numeric ash"><input class="sand_sav_out" type="text" id="sand_sav_out_1" readonly="readonly"  Name="gameResult[sand_sav][input][1]" /></td>
										<td class="numeric ash"><input class="sand_sav_out" type="text" id="sand_sav_out_2" readonly="readonly"  Name="gameResult[sand_sav][input][2]" /></td>
										<td class="numeric ash"><input class="sand_sav_out" type="text" id="sand_sav_out_3" readonly="readonly"  Name="gameResult[sand_sav][input][3]" /></td>
										<td class="numeric ash"><input class="sand_sav_out" type="text" id="sand_sav_out_4" readonly="readonly"  Name="gameResult[sand_sav][input][4]" /></td>
										<td class="numeric ash"><input class="sand_sav_out" type="text" id="sand_sav_out_5" readonly="readonly"  Name="gameResult[sand_sav][input][5]" /></td>
										<td class="numeric ash"><input class="sand_sav_out" type="text" id="sand_sav_out_6" readonly="readonly"  Name="gameResult[sand_sav][input][6]" /></td>
										<td class="numeric ash"><input class="sand_sav_out" type="text" id="sand_sav_out_7" readonly="readonly"  Name="gameResult[sand_sav][input][7]" /></td>
										<td class="numeric ash"><input class="sand_sav_out" type="text" id="sand_sav_out_8" readonly="readonly"  Name="gameResult[sand_sav][input][8]" /></td>

										<td><input id ="sand_sav_out_sum" readonly="readonly" Name="gameResult[sand_sav][out_sum]" /></td>

										<td class="numeric ash"><input class="sand_sav_in"  type="text" id="sand_sav_in_0" readonly="readonly"  Name="gameResult[sand_sav][input][9]" /></td>
										<td class="numeric ash"><input class="sand_sav_in" type="text" id="sand_sav_in_1" readonly="readonly" Name="gameResult[sand_sav][input][10]" /></td>
										<td class="numeric ash"><input class="sand_sav_in"  type="text" id="sand_sav_in_2" readonly="readonly" Name="gameResult[sand_sav][input][11]" /></td>
										<td class="numeric ash"><input class="sand_sav_in"  type="text" id="sand_sav_in_3" readonly="readonly" Name="gameResult[sand_sav][input][12]" /></td>
										<td class="numeric ash"><input class="sand_sav_in"  type="text" id="sand_sav_in_4" readonly="readonly" Name="gameResult[sand_sav][input][13]" /></td>
										<td class="numeric ash"><input class="sand_sav_in"  type="text" id="sand_sav_in_5" readonly="readonly" Name="gameResult[sand_sav][input][14]" /></td>
										<td class="numeric ash"><input class="sand_sav_in"  type="text" id="sand_sav_in_6" readonly="readonly" Name="gameResult[sand_sav][input][15]" /></td>
										<td class="numeric ash"><input class="sand_sav_in"  type="text" id="sand_sav_in_7" readonly="readonly" Name="gameResult[sand_sav][input][16]" /></td>
										<td class="numeric ash"><input class="sand_sav_in"  type="text" id="sand_sav_in_8" readonly="readonly" Name="gameResult[sand_sav][input][17]" /></td>
										
										<td><input id="sand_sav_in_sum" readonly="readonly" Name="gameResult[sand_sav][in_sum]" /></td>
										<td><input id="sand_sav_tot" readonly="readonly" Name="gameResult[sand_sav][tot]" /></td>
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
										<td><input type="text" id="sand_percentage_out_sum" readonly="readonly" Name="gameResult[sand%][out_sum]" /></td>
										<td class="black"></td>
										<td class="black"></td>  
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										
										<td><input type="text" id="sand_percentage_in_sum"  readonly="readonly" Name="gameResult[sand%][in_sum]" /></td>
										<td><input type="text" id="sand_percentage_sum"  readonly="readonly" Name="gameResult[sand%][tot]" /></td>
									</tr>
									
									<tr>
										<td>PENALTIES</td>
										<td class="numeric "><input class="penalties_out" type="text" Name="gameResult[penalties][input][0]" /></td>
										<td class="numeric "><input class="penalties_out" type="text" Name="gameResult[penalties][input][1]" /></td>
										<td class="numeric "><input class="penalties_out" type="text" Name="gameResult[penalties][input][2]" /></td>
										<td class="numeric "><input class="penalties_out" type="text" Name="gameResult[penalties][input][3]" /></td>
										<td class="numeric "><input class="penalties_out" type="text" Name="gameResult[penalties][input][4]" /></td>
										<td class="numeric "><input class="penalties_out" type="text" Name="gameResult[penalties][input][5]" /></td>
										<td class="numeric "><input class="penalties_out" type="text" Name="gameResult[penalties][input][6]" /></td>
										<td class="numeric "><input class="penalties_out" type="text" Name="gameResult[penalties][input][7]" /></td>
										<td class="numeric "><input class="penalties_out" type="text" Name="gameResult[penalties][input][8]" /></td>

										<td><input id ="penalties_out_sum" readonly="readonly" Name="gameResult[penalties][out_sum]" /></td>

										<td class="numeric "><input class="penalties_in"  type="text" Name="gameResult[penalties][input][9]" /></td>
										<td class="numeric "><input class="penalties_in" type="text" Name="gameResult[penalties][input][10]" /></td>
										<td class="numeric "><input class="penalties_in"  type="text" Name="gameResult[penalties][input][11]" /></td>
										<td class="numeric "><input class="penalties_in"  type="text" Name="gameResult[penalties][input][12]" /></td>
										<td class="numeric "><input class="penalties_in"  type="text" Name="gameResult[penalties][input][13]" /></td>
										<td class="numeric "><input class="penalties_in"  type="text" Name="gameResult[penalties][input][14]" /></td>
										<td class="numeric "><input class="penalties_in"  type="text" Name="gameResult[penalties][input][15]" /></td>
										<td class="numeric "><input class="penalties_in"  type="text" Name="gameResult[penalties][input][16]" /></td>
										<td class="numeric "><input class="penalties_in"  type="text" Name="gameResult[penalties][input][17]" /></td>
										
										<td><input id="penalties_in_sum" readonly="readonly" Name="gameResult[penalties][in_sum]" /></td>
										<td><input id="penalties_tot" readonly="readonly" Name="gameResult[penalties][tot]" /></td>
									</tr>

									<tr>
										<td>PAR3</td>
										<td class="numeric ash"><input id="par3_out" readonly="readonly" type="text" Name="gameResult[par3][input][0]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input id="par3_out_sum" readonly="readonly" Name="gameResult[par3][out_sum]" /></td>
										<td class="numeric ash"><input id="par3_in" readonly="readonly" type="text" Name="gameResult[par3][input][1]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input id="par3_in_sum" readonly="readonly" Name="gameResult[par3][in_sum]" /></td>
										<td><input id="par3_tot" readonly="readonly" Name="gameResult[par3][tot]" /></td>
									</tr>

									<tr>
										<td>PAR3STROKES</td>
										<td class="numeric ash"><input id="par3strokes_out" readonly="readonly"  type="text" Name="gameResult[par3strokes][input][0]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input id="par3strokes_out_sum" readonly="readonly" type="text"  Name="gameResult[par3strokes][out_sum]" /></td>
										<td class="numeric ash"><input id="par3strokes_in" readonly="readonly" type="text" Name="gameResult[par3strokes][input][1]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input id="par3strokes_in_sum" readonly="readonly" Name="gameResult[par3strokes][in_sum]" /></td>
										<td><input id="par3strokes_tot" readonly="readonly" Name="gameResult[par3strokes][tot]" /></td>
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
										<td><input id="par3_score_out_sum" type="text" readonly="readonly" Name="gameResult[par3scor][out_sum]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input id="par3_score_in_sum" type="text" readonly="readonly" Name="gameResult[par3scor][in_sum]" /></td>
										<td><input id="par3_score_tot" type="text" readonly="readonly" Name="gameResult[par3scor][tot]" /></td>
									</tr>
									<tr>
										<td>PAR4</td>
										<td class="numeric ash"><input id="par4_out" readonly="readonly" type="text" Name="gameResult[par4][input][0]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input id="par4_out_sum" readonly="readonly" Name="gameResult[par4][out_sum]" /></td>
										<td class="numeric ash"><input id="par4_in" readonly="readonly" type="text" Name="gameResult[par4][input][1]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input id="par4_in_sum" readonly="readonly" Name="gameResult[par4][in_sum]" /></td>
										<td><input id="par4_tot" readonly="readonly" Name="gameResult[par4][tot]" /></td>
									</tr>

									<tr>
										<td>PAR4STROKES</td>
										<td class="numeric ash"><input id="par4strokes_out" readonly="readonly"  type="text" Name="gameResult[par4strokes][input][0]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input id="par4strokes_out_sum" readonly="readonly" type="text"  Name="gameResult[par4strokes][out_sum]" /></td>
										<td class="numeric ash"><input id="par4strokes_in" readonly="readonly" type="text" Name="gameResult[par4strokes][input][1]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input id="par4strokes_in_sum" readonly="readonly" Name="gameResult[par4strokes][in_sum]" /></td>
										<td><input id="par4strokes_tot" readonly="readonly" Name="gameResult[par4strokes][tot]" /></td>
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
										<td><input id="par4_score_out_sum" type="text" readonly="readonly" Name="gameResult[par4scor][out_sum]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input id="par4_score_in_sum" type="text" readonly="readonly" Name="gameResult[par4scor][in_sum]" /></td>
										<td><input id="par4_score_tot" type="text" readonly="readonly" Name="gameResult[par4scor][tot]" /></td>
									</tr>
									<tr>
										<td>PAR5</td>
										<td class="numeric ash"><input id="par5_out" readonly="readonly" type="text" Name="gameResult[par5][input][0]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input id="par5_out_sum" readonly="readonly" Name="gameResult[par5][out_sum]" /></td>
										<td class="numeric ash"><input id="par5_in" readonly="readonly" type="text" Name="gameResult[par5][input][1]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input id="par5_in_sum" readonly="readonly" Name="gameResult[par5][in_sum]" /></td>
										<td><input id="par5_tot" readonly="readonly" Name="gameResult[par5][tot]" /></td>
									</tr>

									<tr>
										<td>PAR5STROKES</td>
										<td class="numeric ash"><input id="par5strokes_out" readonly="readonly"  type="text" Name="gameResult[par5strokes][input][0]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input id="par5strokes_out_sum" readonly="readonly" type="text"  Name="gameResult[par5strokes][out_sum]" /></td>
										<td class="numeric ash"><input id="par5strokes_in" readonly="readonly" type="text" Name="gameResult[par5strokes][input][1]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input id="par5strokes_in_sum" readonly="readonly" Name="gameResult[par5strokes][in_sum]" /></td>
										<td><input id="par5strokes_tot" readonly="readonly" Name="gameResult[par5strokes][tot]" /></td>
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
										<td><input id="par5_score_out_sum" type="text" readonly="readonly" Name="gameResult[par5scor][out_sum]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input id="par5_score_in_sum" type="text" readonly="readonly" Name="gameResult[par5scor][in_sum]" /></td>
										<td><input id="par5_score_tot" type="text" readonly="readonly" Name="gameResult[par5scor][tot]" /></td>
									</tr>
									
									<tr>
										<td>EAGLE</td>
										<td class="numeric ash"><input id="eagle_out_0" readonly="readonly" class="eagle_out" type="text" Name="gameResult[eagle][input][0]" /></td>
										<td class="numeric ash"><input id="eagle_out_1" readonly="readonly" class="eagle_out" type="text" Name="gameResult[eagle][input][1]" /></td>
										<td class="numeric ash"><input id="eagle_out_2" readonly="readonly" class="eagle_out" type="text" Name="gameResult[eagle][input][2]" /></td>
										<td class="numeric ash"><input id="eagle_out_3" readonly="readonly" class="eagle_out" type="text" Name="gameResult[eagle][input][3]" /></td>
										<td class="numeric ash"><input id="eagle_out_4" readonly="readonly" class="eagle_out" type="text" Name="gameResult[eagle][input][4]" /></td>
										<td class="numeric ash"><input id="eagle_out_5" readonly="readonly" class="eagle_out" type="text" Name="gameResult[eagle][input][5]" /></td>
										<td class="numeric ash"><input id="eagle_out_6" readonly="readonly" class="eagle_out" type="text" Name="gameResult[eagle][input][6]" /></td>
										<td class="numeric ash"><input id="eagle_out_7" readonly="readonly" class="eagle_out" type="text" Name="gameResult[eagle][input][7]" /></td>
										<td class="numeric ash"><input id="eagle_out_8" readonly="readonly" class="eagle_out" type="text" Name="gameResult[eagle][input][8]" /></td>

										<td><input id ="eagle_out_sum" readonly="readonly" Name="gameResult[eagle][out_sum]" /></td>

										<td class="numeric ash"><input id="eagle_in_0" readonly="readonly"  class="eagle_in"  type="text" Name="gameResult[eagle][input][9]" /></td>
										<td class="numeric ash"><input id="eagle_in_1" readonly="readonly"  class="eagle_in" type="text" Name="gameResult[eagle][input][10]" /></td>
										<td class="numeric ash"><input id="eagle_in_2" readonly="readonly"  class="eagle_in"  type="text" Name="gameResult[eagle][input][11]" /></td>
										<td class="numeric ash"><input id="eagle_in_3" readonly="readonly"  class="eagle_in"  type="text" Name="gameResult[eagle][input][12]" /></td>
										<td class="numeric ash"><input id="eagle_in_4" readonly="readonly"  class="eagle_in"  type="text" Name="gameResult[eagle][input][13]" /></td>
										<td class="numeric ash"><input id="eagle_in_5" readonly="readonly"  class="eagle_in"  type="text" Name="gameResult[eagle][input][14]" /></td>
										<td class="numeric ash"><input id="eagle_in_6" readonly="readonly"  class="eagle_in"  type="text" Name="gameResult[eagle][input][15]" /></td>
										<td class="numeric ash"><input id="eagle_in_7" readonly="readonly"  class="eagle_in"  type="text" Name="gameResult[eagle][input][16]" /></td>
										<td class="numeric ash"><input id="eagle_in_8" readonly="readonly"  class="eagle_in"  type="text" Name="gameResult[eagle][input][17]" /></td>
										
										<td><input id="eagle_in_sum" readonly="readonly" Name="gameResult[eagle][in_sum]" /></td>
										<td><input id="eagle_tot" readonly="readonly" Name="gameResult[eagle][tot]" /></td>
									</tr>

									<tr>
										<td>BIRDIE</td>
										<td class="numeric ash"><input id="birdie_out_0" readonly="readonly" class="birdie_out" type="text" Name="gameResult[birdie][input][0]" /></td>
										<td class="numeric ash"><input id="birdie_out_1" readonly="readonly" class="birdie_out" type="text" Name="gameResult[birdie][input][1]" /></td>
										<td class="numeric ash"><input id="birdie_out_2" readonly="readonly" class="birdie_out" type="text" Name="gameResult[birdie][input][2]" /></td>
										<td class="numeric ash"><input id="birdie_out_3" readonly="readonly" class="birdie_out" type="text" Name="gameResult[birdie][input][3]" /></td>
										<td class="numeric ash"><input id="birdie_out_4" readonly="readonly" class="birdie_out" type="text" Name="gameResult[birdie][input][4]" /></td>
										<td class="numeric ash"><input id="birdie_out_5" readonly="readonly" class="birdie_out" type="text" Name="gameResult[birdie][input][5]" /></td>
										<td class="numeric ash"><input id="birdie_out_6" readonly="readonly" class="birdie_out" type="text" Name="gameResult[birdie][input][6]" /></td>
										<td class="numeric ash"><input id="birdie_out_7" readonly="readonly" class="birdie_out" type="text" Name="gameResult[birdie][input][7]" /></td>
										<td class="numeric ash"><input id="birdie_out_8" readonly="readonly" class="birdie_out" type="text" Name="gameResult[birdie][input][8]" /></td>

										<td><input id ="birdie_out_sum" readonly="readonly" Name="gameResult[birdie][out_sum]" /></td>

										<td class="numeric ash"><input id="birdie_in_0" readonly="readonly" class="birdie_in"  type="text" Name="gameResult[birdie][input][9]" /></td>
										<td class="numeric ash"><input id="birdie_in_1" readonly="readonly" class="birdie_in" type="text" Name="gameResult[birdie][input][10]" /></td>
										<td class="numeric ash"><input id="birdie_in_2" readonly="readonly" class="birdie_in" type="text" Name="gameResult[birdie][input][11]" /></td>
										<td class="numeric ash"><input id="birdie_in_3" readonly="readonly" class="birdie_in"  type="text" Name="gameResult[birdie][input][12]" /></td>
										<td class="numeric ash"><input id="birdie_in_4" readonly="readonly" class="birdie_in"  type="text" Name="gameResult[birdie][input][13]" /></td>
										<td class="numeric ash"><input id="birdie_in_5" readonly="readonly" class="birdie_in"  type="text" Name="gameResult[birdie][input][14]" /></td>
										<td class="numeric ash"><input id="birdie_in_6" readonly="readonly" class="birdie_in"  type="text" Name="gameResult[birdie][input][15]" /></td>
										<td class="numeric ash"><input id="birdie_in_7" readonly="readonly" class="birdie_in"  type="text" Name="gameResult[birdie][input][16]" /></td>
										<td class="numeric ash"><input id="birdie_in_8" readonly="readonly" class="birdie_in"  type="text" Name="gameResult[birdie][input][17]" /></td>
										
										<td><input id="birdie_in_sum" readonly="readonly" Name="gameResult[birdie][in_sum]" /></td>
										<td><input id="birdie_tot" readonly="readonly" Name="gameResult[birdie][tot]" /></td>
									</tr>

									<tr>
										<td>PAR</td>
										<td class="numeric ash"><input id="par_out_0" readonly="readonly" class="par_out" type="text" Name="gameResult[par][input][0]" /></td>
										<td class="numeric ash"><input id="par_out_1" readonly="readonly" class="par_out" type="text" Name="gameResult[par][input][1]" /></td>
										<td class="numeric ash"><input id="par_out_2" readonly="readonly" class="par_out" type="text" Name="gameResult[par][input][2]" /></td>
										<td class="numeric ash"><input id="par_out_3" readonly="readonly" class="par_out" type="text" Name="gameResult[par][input][3]" /></td>
										<td class="numeric ash"><input id="par_out_4" readonly="readonly" class="par_out" type="text" Name="gameResult[par][input][4]" /></td>
										<td class="numeric ash"><input id="par_out_5" readonly="readonly" class="par_out" type="text" Name="gameResult[par][input][5]" /></td>
										<td class="numeric ash"><input id="par_out_6" readonly="readonly" class="par_out" type="text" Name="gameResult[par][input][6]" /></td>
										<td class="numeric ash"><input id="par_out_7" readonly="readonly" class="par_out" type="text" Name="gameResult[par][input][7]" /></td>
										<td class="numeric ash"><input id="par_out_8" readonly="readonly" class="par_out" type="text" Name="gameResult[par][input][8]" /></td>

										<td><input id ="par_out_sum" readonly="readonly" Name="gameResult[par][out_sum]" /></td>

										<td class="numeric ash"><input id="par_in_0" readonly="readonly" class="par_in"  type="text" Name="gameResult[par][input][9]" /></td>
										<td class="numeric ash"><input id="par_in_1" readonly="readonly" class="par_in" type="text" Name="gameResult[par][input][10]" /></td>
										<td class="numeric ash"><input id="par_in_2" readonly="readonly" class="par_in"  type="text" Name="gameResult[par][input][11]" /></td>
										<td class="numeric ash"><input id="par_in_3" readonly="readonly" class="par_in"  type="text" Name="gameResult[par][input][12]" /></td>
										<td class="numeric ash"><input id="par_in_4" readonly="readonly" class="par_in"  type="text" Name="gameResult[par][input][13]" /></td>
										<td class="numeric ash"><input id="par_in_5" readonly="readonly" class="par_in"  type="text" Name="gameResult[par][input][14]" /></td>
										<td class="numeric ash"><input id="par_in_6" readonly="readonly" class="par_in"  type="text" Name="gameResult[par][input][15]" /></td>
										<td class="numeric ash"><input id="par_in_7" readonly="readonly" class="par_in"  type="text" Name="gameResult[par][input][16]" /></td>
										<td class="numeric ash"><input id="par_in_8" readonly="readonly" class="par_in"  type="text" Name="gameResult[par][input][17]" /></td>
										
										<td><input id="par_in_sum" readonly="readonly" Name="gameResult[par][in_sum]" /></td>
										<td><input id="par_tot" readonly="readonly" Name="gameResult[par][tot]" /></td>
									</tr>

									
									<tr>
										<td>BOGEY</td>
										<td class="numeric ash"><input id="bogey_out_0" readonly="readonly" class="bogey_out" type="text" Name="gameResult[bogey][input][0]" /></td>
										<td class="numeric ash"><input id="bogey_out_1" readonly="readonly" class="bogey_out" type="text" Name="gameResult[bogey][input][1]" /></td>
										<td class="numeric ash"><input id="bogey_out_2" readonly="readonly" class="bogey_out" type="text" Name="gameResult[bogey][input][2]" /></td>
										<td class="numeric ash"><input id="bogey_out_3" readonly="readonly" class="bogey_out" type="text" Name="gameResult[bogey][input][3]" /></td>
										<td class="numeric ash"><input id="bogey_out_4" readonly="readonly" class="bogey_out" type="text" Name="gameResult[bogey][input][4]" /></td>
										<td class="numeric ash"><input id="bogey_out_5" readonly="readonly" class="bogey_out" type="text" Name="gameResult[bogey][input][5]" /></td>
										<td class="numeric ash"><input id="bogey_out_6" readonly="readonly" class="bogey_out" type="text" Name="gameResult[bogey][input][6]" /></td>
										<td class="numeric ash"><input id="bogey_out_7" readonly="readonly" class="bogey_out" type="text" Name="gameResult[bogey][input][7]" /></td>
										<td class="numeric ash"><input id="bogey_out_8" readonly="readonly" class="bogey_out" type="text" Name="gameResult[bogey][input][8]" /></td>

										<td><input id ="bogey_out_sum" readonly="readonly" Name="gameResult[bogey][out_sum]" /></td>

										<td class="numeric ash"><input id="bogey_in_0" readonly="readonly" class="bogey_in"  type="text" Name="gameResult[bogey][input][9]" /></td>
										<td class="numeric ash"><input id="bogey_in_1" readonly="readonly" class="bogey_in" type="text" Name="gameResult[bogey][input][10]" /></td>
										<td class="numeric ash"><input id="bogey_in_2" readonly="readonly" class="bogey_in"  type="text" Name="gameResult[bogey][input][11]" /></td>
										<td class="numeric ash"><input id="bogey_in_3" readonly="readonly" class="bogey_in"  type="text" Name="gameResult[bogey][input][12]" /></td>
										<td class="numeric ash"><input id="bogey_in_4" readonly="readonly" class="bogey_in"  type="text" Name="gameResult[bogey][input][13]" /></td>
										<td class="numeric ash"><input id="bogey_in_5" readonly="readonly" class="bogey_in"  type="text" Name="gameResult[bogey][input][14]" /></td>
										<td class="numeric ash"><input id="bogey_in_6" readonly="readonly" class="bogey_in"  type="text" Name="gameResult[bogey][input][15]" /></td>
										<td class="numeric ash"><input id="bogey_in_7" readonly="readonly" class="bogey_in"  type="text" Name="gameResult[bogey][input][16]" /></td>
										<td class="numeric ash"><input id="bogey_in_8" readonly="readonly" class="bogey_in"  type="text" Name="gameResult[bogey][input][17]" /></td>
										
										<td><input id="bogey_in_sum" readonly="readonly" Name="gameResult[bogey][in_sum]" /></td>
										<td><input id="bogey_tot" readonly="readonly" Name="gameResult[bogey][tot]" /></td>
									</tr>

									<tr>
										<td>DBLBOGEY</td>
										<td class="numeric ash"><input id="dblbogey_out_0" readonly="readonly" class="dblbogey_out" type="text" Name="gameResult[dblbogey][input][0]" /></td>
										<td class="numeric ash"><input id="dblbogey_out_1" readonly="readonly" class="dblbogey_out" type="text" Name="gameResult[dblbogey][input][1]" /></td>
										<td class="numeric ash"><input id="dblbogey_out_2" readonly="readonly" class="dblbogey_out" type="text" Name="gameResult[dblbogey][input][2]" /></td>
										<td class="numeric ash"><input id="dblbogey_out_3" readonly="readonly" class="dblbogey_out" type="text" Name="gameResult[dblbogey][input][3]" /></td>
										<td class="numeric ash"><input id="dblbogey_out_4" readonly="readonly" class="dblbogey_out" type="text" Name="gameResult[dblbogey][input][4]" /></td>
										<td class="numeric ash"><input id="dblbogey_out_5" readonly="readonly" class="dblbogey_out" type="text" Name="gameResult[dblbogey][input][5]" /></td>
										<td class="numeric ash"><input id="dblbogey_out_6" readonly="readonly" class="dblbogey_out" type="text" Name="gameResult[dblbogey][input][6]" /></td>
										<td class="numeric ash"><input id="dblbogey_out_7" readonly="readonly" class="dblbogey_out" type="text" Name="gameResult[dblbogey][input][7]" /></td>
										<td class="numeric ash"><input id="dblbogey_out_8" readonly="readonly" class="dblbogey_out" type="text" Name="gameResult[dblbogey][input][8]" /></td>

										<td><input id ="dblbogey_out_sum" readonly="readonly" Name="gameResult[dblbogey][out_sum]" /></td>

										<td class="numeric ash"><input id="dblbogey_in_0" readonly="readonly" class="dblbogey_in"  type="text" Name="gameResult[dblbogey][input][9]" /></td>
										<td class="numeric ash"><input id="dblbogey_in_1" readonly="readonly" class="dblbogey_in" type="text" Name="gameResult[dblbogey][input][10]" /></td>
										<td class="numeric ash"><input id="dblbogey_in_2" readonly="readonly" class="dblbogey_in"  type="text" Name="gameResult[dblbogey][input][11]" /></td>
										<td class="numeric ash"><input id="dblbogey_in_3" readonly="readonly" class="dblbogey_in"  type="text" Name="gameResult[dblbogey][input][12]" /></td>
										<td class="numeric ash"><input id="dblbogey_in_4" readonly="readonly" class="dblbogey_in"  type="text" Name="gameResult[dblbogey][input][13]" /></td>
										<td class="numeric ash"><input id="dblbogey_in_5" readonly="readonly" class="dblbogey_in"  type="text" Name="gameResult[dblbogey][input][14]" /></td>
										<td class="numeric ash"><input id="dblbogey_in_6" readonly="readonly" class="dblbogey_in"  type="text" Name="gameResult[dblbogey][input][15]" /></td>
										<td class="numeric ash"><input id="dblbogey_in_7" readonly="readonly" class="dblbogey_in"  type="text" Name="gameResult[dblbogey][input][16]" /></td>
										<td class="numeric ash"><input id="dblbogey_in_8" readonly="readonly" class="dblbogey_in"  type="text" Name="gameResult[dblbogey][input][17]" /></td>
										
										<td><input id="dblbogey_in_sum" readonly="readonly" Name="gameResult[dblbogey][in_sum]" /></td>
										<td><input id="dblbogey_tot" readonly="readonly" Name="gameResult[dblbogey][tot]" /></td>
									</tr>
									<tr>
										<td>OTHER</td>
										<td class="numeric ash"><input id="other_out_0" readonly="readonly" class="other_out" type="text" Name="gameResult[other][input][0]" /></td>
										<td class="numeric ash"><input id="other_out_1" readonly="readonly" class="other_out" type="text" Name="gameResult[other][input][1]" /></td>
										<td class="numeric ash"><input id="other_out_2" readonly="readonly" class="other_out" type="text" Name="gameResult[other][input][2]" /></td>
										<td class="numeric ash"><input id="other_out_3" readonly="readonly" class="other_out" type="text" Name="gameResult[other][input][3]" /></td>
										<td class="numeric ash"><input id="other_out_4" readonly="readonly" class="other_out" type="text" Name="gameResult[other][input][4]" /></td>
										<td class="numeric ash"><input id="other_out_5" readonly="readonly" class="other_out" type="text" Name="gameResult[other][input][5]" /></td>
										<td class="numeric ash"><input id="other_out_6" readonly="readonly" class="other_out" type="text" Name="gameResult[other][input][6]" /></td>
										<td class="numeric ash"><input id="other_out_7" readonly="readonly" class="other_out" type="text" Name="gameResult[other][input][7]" /></td>
										<td class="numeric ash"><input id="other_out_8" readonly="readonly" class="other_out" type="text" Name="gameResult[other][input][8]" /></td>

										<td><input id ="other_out_sum" readonly="readonly" Name="gameResult[other][out_sum]" /></td>

										<td class="numeric ash"><input id="other_in_0" readonly="readonly" class="other_in"  type="text" Name="gameResult[other][input][9]" /></td>
										<td class="numeric ash"><input id="other_in_1" readonly="readonly" class="other_in" type="text" Name="gameResult[other][input][10]" /></td>
										<td class="numeric ash"><input id="other_in_2" readonly="readonly" class="other_in"  type="text" Name="gameResult[other][input][11]" /></td>
										<td class="numeric ash"><input id="other_in_3" readonly="readonly" class="other_in"  type="text" Name="gameResult[other][input][12]" /></td>
										<td class="numeric ash"><input id="other_in_4" readonly="readonly" class="other_in"  type="text" Name="gameResult[other][input][13]" /></td>
										<td class="numeric ash"><input id="other_in_5" readonly="readonly" class="other_in"  type="text" Name="gameResult[other][input][14]" /></td>
										<td class="numeric ash"><input id="other_in_6" readonly="readonly" class="other_in"  type="text" Name="gameResult[other][input][15]" /></td>
										<td class="numeric ash"><input id="other_in_7" readonly="readonly" class="other_in"  type="text" Name="gameResult[other][input][16]" /></td>
										<td class="numeric ash"><input id="other_in_8" readonly="readonly" class="other_in"  type="text" Name="gameResult[other][input][17]" /></td>
										
										<td><input id="other_in_sum" readonly="readonly" Name="gameResult[other][in_sum]" /></td>
										<td><input id="other_tot" readonly="readonly" Name="gameResult[other][tot]" /></td>
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
										<td><input id="played_holes_tot" readonly="readonly" Name="gameResult[played_holes][tot]" /></td>
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
									<td><input id="par3_scoring" readonly="readonly" name="summaryResult[par3_scoring][0]"></td>
									<td><input id="par4_scoring" readonly="readonly" name="summaryResult[par4_scoring][0]"></td>
									<td><input id="par5_scoring" readonly="readonly" name="summaryResult[par5_scoring][0]"></td>
									<td><input id="hash_par3" readonly="readonly" name="summaryResult[hash_par3][0]"></td>
									<td><input id="hash_par4" readonly="readonly" name="summaryResult[hash_par4][0]"></td>
									<td><input id="hash_par5" readonly="readonly" name="summaryResult[hash_par5][0]"></td>
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
									<td><input id="eagles" readonly="readonly" name="summaryResult[eagles][0]"></td>
									<td><input id="birdies" readonly="readonly" name="summaryResult[birdies][0]"></td>
									<td><input id="pars" readonly="readonly" name="summaryResult[pars][0]"></td>
									<td><input id="bogeys" readonly="readonly" name="summaryResult[bogeys][0]"></td>
									<td><input id="dblbogeys" readonly="readonly" name="summaryResult[dblbogeys][0]"></td>
									<td><input id="others" readonly="readonly" name="summaryResult[others][0]"></td>
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
									<td><input id="fairways" readonly="readonly" name="summaryResult[fairways][0]"></td>
									<td><input id="fir_percentage" readonly="readonly" name="summaryResult[fir_percentage][0]"></td>
									<td><input id="greens" readonly="readonly" name="summaryResult[greens][0]"></td>
									<td><input id="gir_percentage" readonly="readonly" name="summaryResult[gir_percentage][0]"></td>
									<td><input id="played_holes_equation" readonly="readonly" name="summaryResult[played_holes_equation][0]"></td>
									<td><input id="hole_rds_18" readonly="readonly" name="summaryResult[hole_rds_18][0]"></td>
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
									<td><input id="scramble_opp_equation" readonly="readonly" name="summaryResult[scramble_opp_equation][0]"></td>
									<td><input id="scramble_sav_equation" readonly="readonly" name="summaryResult[scramble_sav_equation][0]"></td>
									<td><input id="scramble_percentage" readonly="readonly" name="summaryResult[scramble_percentage][0]"></td>
									<td><input id="sand_opp_equation" readonly="readonly" name="summaryResult[sand_opp_equation][0]"></td>
									<td><input id="sand_sav_equation" readonly="readonly" name="summaryResult[sand_sav_equation][0]"></td>
									<td><input id="sand_sav_percentage" readonly="readonly" name="summaryResult[sand_sav_percentage][0]"></td>
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
									<td><input id="missed_gir" readonly="readonly" name="summaryResult[missed_gir][0]"></td>
									<td><input id="put_1_nogir" readonly="readonly" name="summaryResult[put_1_nogir][0]"></td>
									<td><input id="avg_dist_chip" readonly="readonly" name="summaryResult[avg_dist_chip][0]"></td>
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
									<td><input id="total_putts" readonly="readonly" name="summaryResult[total_putts][0]"></td>
									<td><input id="putts_div_hole" readonly="readonly" name="summaryResult[putts_div_hole][0]"></td>
									<td><input id="avg_score" readonly="readonly" name="summaryResult[avg_score][0]"></td>
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
									<td><input id="putt_opp_5_equation" readonly="readonly" name="summaryResult[putt_opp_5_equation][0]"></td>
									<td><input id="putt_opp_5_9_equation" readonly="readonly" name="summaryResult[putt_opp_5_9_equation][0]"></td>
									<td><input id="putt_opp_10_19_equation" readonly="readonly" name="summaryResult[putt_opp_10_19_equation][0]"></td>
									<td><input id="putt_opp_20_29_equation" readonly="readonly" name="summaryResult[putt_opp_20_29_equation][0]"></td>
									<td><input id="putt_opp_30_equation" readonly="readonly" name="summaryResult[putt_opp_30_equation][0]"></td>
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
									<td><input id="putt_make_5_equation" readonly="readonly" name="summaryResult[putt_make_5_equation][0]"></td>
									<td><input id="putt_make_5_9_equation" readonly="readonly" name="summaryResult[putt_make_5_9_equation][0]"></td>
									<td><input id="putt_make_10_19_equation" readonly="readonly" name="summaryResult[putt_make_10_19_equation][0]"></td>
									<td><input id="putt_make_20_29_equation" readonly="readonly" name="summaryResult[putt_make_20_29_equation][0]"></td>
									<td><input id="putt_make_30_equation" readonly="readonly" name="summaryResult[putt_make_30_equation][0]"></td>
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
									<td><input id="make_percentage_5" readonly="readonly" name="summaryResult[make_percentage_5][0]"></td>
									<td><input id="make_percentage_5_9" readonly="readonly" name="summaryResult[make_percentage_5_9][0]"></td>
									<td><input id="make_percentage_10_19" readonly="readonly" name="summaryResult[make_percentage_10_19][0]"></td>
									<td><input id="make_percentage_20_29" readonly="readonly" name="summaryResult[make_percentage_20_29][0]"></td>
									<td><input id="make_percentage_30" readonly="readonly" name="summaryResult[make_percentage_30][0]"></td>
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
		<script src="{{$asset}}js/jquery.min.js"></script>
		<script src="{{$asset}}js/bootstrap.min.js"></script>
		<script src="{{$asset}}js/bootstrap-datepicker.js"></script>
		<script type="text/javascript">
            $(document).ready(function () {
                $('#datetimepicker1').datepicker({endDate:'0d'});
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
	</body>
</html>
@stop