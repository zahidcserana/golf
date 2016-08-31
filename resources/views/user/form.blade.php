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
			input{border:0px solid #000; margin:0; background:transparent; width:100%}
			table tr td{border-right:1px solid #ddd; border-bottom:1px solid #ddd;width: 30px;}
			table{background: #fff none repeat scroll 0 0;
				border-left: 1px solid #ddd;
				border-top: 1px solid #ddd;}
			/*table tr:first-child{background:#006400; color:#fff;font-weight: bold;}*/
			table tr:nth-child(even){background:#fff;}
			table tr:nth-child(odd){background:#ddd;}
			
			.black{
				background: #000;
			}
			.pink{
				background: #FFB6C1;
			}
		</style>
		<head>
    		
		</head>
	</head>
	<body>
		<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		<!-- Add your site or application content here -->
		
		<div class="container-fluid">
			<div class="row">
				<div class="main">
					<h1 class="page-header">Course list</h1>
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-striped">
								<form action = "{{ url('submitForm') }}" method = "post" align="center">
									<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
									<tr style="background: #006400;color:#fff;font-weight: bold;text-align:center">
										<td>5/14/2016</td>
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
										<td>IN</td>
										<td>TOT</td>
									</tr>
									<tr>
										<td>HOLE_PAR</td>
										<td  class="numeric pink"><input class=hole_par_out type="text" Name="gameResult[hole_pair][0]" /></td>
										<td class="numeric pink"><input class=hole_par_out type="text" Name="gameResult[hole_pair][1]" /></td>
										<td class="numeric pink"><input class=hole_par_out type="text" Name="gameResult[hole_pair][2]" /></td>
										<td class="numeric pink"><input class=hole_par_out type="text" Name="gameResult[hole_pair][3]" /></td>
										<td class="numeric pink"><input class=hole_par_out type="text" Name="gameResult[hole_pair][4]" /></td>
										<td class="numeric pink"><input class=hole_par_out type="text" Name="gameResult[hole_pair][5]" /></td>
										<td class="numeric pink"><input class=hole_par_out type="text" Name="gameResult[hole_pair][6]" /></td>
										<td class="numeric pink"><input class=hole_par_out type="text" Name="gameResult[hole_pair][7]" /></td>
										<td class="numeric pink"><input class=hole_par_out type="text" Name="gameResult[hole_pair][8]" /></td>

										<td><input id="hole_par_out_sum" readonly="readonly" Name="gameResult[hole_pair][9]" /></td>

										<td class="numeric pink"><input class=" hole_par_in" type="text" Name="gameResult[hole_pair][10]" /></td>
										<td class="numeric pink"><input class=" hole_par_in" type="text" Name="gameResult[hole_pair][11]" /></td>
										<td class="numeric pink"><input class=" hole_par_in" type="text" Name="gameResult[hole_pair][12]" /></td>
										<td class="numeric pink"><input class=" hole_par_in" type="text" Name="gameResult[hole_pair][13]" /></td>
										<td class="numeric pink"><input class=" hole_par_in" type="text" Name="gameResult[hole_pair][14]" /></td>
										<td class="numeric pink"><input class=" hole_par_in" type="text" Name="gameResult[hole_pair][15]" /></td>
										<td class="numeric pink"><input class=" hole_par_in" type="text" Name="gameResult[hole_pair][16]" /></td>
										<td class="numeric pink"><input class=" hole_par_in" type="text" Name="gameResult[hole_pair][17]" /></td>
										<td class="numeric pink"><input class=" hole_par_in" type="text" Name="gameResult[hole_pair][18]" /></td>

										<td><input id="hole_par_in_sum" readonly="readonly" Name="gameResult[hole_pair][19]" /></td>

										<td><input id="hole_par_tot" readonly="readonly" Name="gameResult[hole_pair][19]" /></td>
									</tr>

									<tr>
										<td>SCORE</td>
										<td class="numeric"><input class=" score_out" type="text" Name="gameResult[score][0]" /></td>
										<td class="numeric"><input class=" score_out" type="text" Name="gameResult[score][1]" /></td>
										<td class="numeric"><input class=" score_out" type="text" Name="gameResult[score][2]" /></td>
										<td class="numeric"><input class=" score_out" type="text" Name="gameResult[score][3]" /></td>
										<td class="numeric"><input class=" score_out" type="text" Name="gameResult[score][4]" /></td>
										<td class="numeric"><input class=" score_out" type="text" Name="gameResult[score][5]" /></td>
										<td class="numeric"><input class=" score_out" type="text" Name="gameResult[score][6]" /></td>
										<td class="numeric"><input class=" score_out" type="text" Name="gameResult[score][7]" /></td>
										<td class="numeric"><input class=" score_out" type="text" Name="gameResult[score][8]" /></td>

										<td><input id="score_out_sum" readonly="readonly" Name="gameResult[score][9]" /></td>

										<td class="numeric"><input class=" score_in" type="text" Name="gameResult[score][10]" /></td>
										<td class="numeric"><input class=" score_in" type="text" Name="gameResult[score][11]" /></td>
										<td class="numeric"><input class=" score_in" type="text" Name="gameResult[score][12]" /></td>
										<td class="numeric"><input class=" score_in" type="text" Name="gameResult[score][13]" /></td>
										<td class="numeric"><input class=" score_in" type="text" Name="gameResult[score][14]" /></td>
										<td class="numeric"><input class=" score_in" type="text" Name="gameResult[score][15]" /></td>
										<td class="numeric"><input class=" score_in" type="text" Name="gameResult[score][16]" /></td>
										<td class="numeric"><input class=" score_in" type="text" Name="gameResult[score][17]" /></td>
										<td class="numeric"><input class=" score_in" type="text" Name="gameResult[score][18]" /></td>

										<td><input id ="score_in_sum" readonly="readonly" Name="gameResult[score][19]" /></td>
										<td><input id="score_tot" Name="gameResult[score][20]" /></td>
									</tr>

									<tr>
										<td>FIR</td>
										<td class="numeric"><input class="fir_out" type="text" Name="gameResult[fir][0]" /></td>
										<td class="numeric"><input class="fir_out" type="text" Name="gameResult[fir][1]" /></td>
										<td class="numeric"><input class="fir_out" type="text" Name="gameResult[fir][2]" /></td>
										<td class="numeric"><input class="fir_out" type="text" Name="gameResult[fir][3]" /></td>
										<td class="numeric"><input class="fir_out" type="text" Name="gameResult[fir][4]" /></td>
										<td class="numeric"><input class="fir_out" type="text" Name="gameResult[fir][5]" /></td>
										<td class="numeric"><input class="fir_out" type="text" Name="gameResult[fir][6]" /></td>
										<td class="numeric"><input class="fir_out" type="text" Name="gameResult[fir][7]" /></td>
										<td class="numeric"><input class="fir_out" type="text" Name="gameResult[fir][8]" /></td>

										<td><input id ="fir_out_sum" readonly="readonly" Name="gameResult[fir][9]" /></td>

										<td class="numeric"><input class="fir_in" type="text" Name="gameResult[fir][10]" /></td>
										<td class="numeric"><input class="fir_in"  type="text" Name="gameResult[fir][11]" /></td>
										<td class="numeric"><input class="fir_in"  type="text" Name="gameResult[fir][12]" /></td>
										<td class="numeric"><input class="fir_in"  type="text" Name="gameResult[fir][13]" /></td>
										<td class="numeric"><input class="fir_in"  type="text" Name="gameResult[fir][14]" /></td>
										<td class="numeric"><input class="fir_in"  type="text" Name="gameResult[fir][15]" /></td>
										<td class="numeric"><input class="fir_in"  type="text" Name="gameResult[fir][16]" /></td>
										<td class="numeric"><input class="fir_in"  type="text" Name="gameResult[fir][17]" /></td>
										<td class="numeric"><input class="fir_in"  type="text" Name="gameResult[fir][18]" /></td>
										
										<td><input id="fir_in_sum" readonly="readonly" Name="gameResult[fir][19]" /></td>
										<td><input id="fir_tot" readonly="readonly" Name="gameResult[fir][20]" /></td>
									</tr>

									<tr>
										<td>GIR</td>
										<td class="numeric"><input class="gir_out" type="text" Name="gameResult[gir][0]" /></td>
										<td class="numeric"><input class="gir_out" type="text" Name="gameResult[gir][1]" /></td>
										<td class="numeric"><input class="gir_out" type="text" Name="gameResult[gir][2]" /></td>
										<td class="numeric"><input class="gir_out" type="text" Name="gameResult[gir][3]" /></td>
										<td class="numeric"><input class="gir_out" type="text" Name="gameResult[gir][4]" /></td>
										<td class="numeric"><input class="gir_out" type="text" Name="gameResult[gir][5]" /></td>
										<td class="numeric"><input class="gir_out" type="text" Name="gameResult[gir][6]" /></td>
										<td class="numeric"><input class="gir_out" type="text" Name="gameResult[gir][7]" /></td>
										<td class="numeric"><input class="gir_out" type="text" Name="gameResult[gir][8]" /></td>

										<td><input id ="gir_out_sum" readonly="readonly" Name="gameResult[gir][9]" /></td>

										<td class="numeric"><input class="gir_in" type="text" Name="gameResult[gir][10]" /></td>
										<td class="numeric"><input class="gir_in"  type="text" Name="gameResult[gir][11]" /></td>
										<td class="numeric"><input class="gir_in"  type="text" Name="gameResult[gir][12]" /></td>
										<td class="numeric"><input class="gir_in"  type="text" Name="gameResult[gir][13]" /></td>
										<td class="numeric"><input class="gir_in"  type="text" Name="gameResult[gir][14]" /></td>
										<td class="numeric"><input class="gir_in"  type="text" Name="gameResult[gir][15]" /></td>
										<td class="numeric"><input class="gir_in"  type="text" Name="gameResult[gir][16]" /></td>
										<td class="numeric"><input class="gir_in"  type="text" Name="gameResult[gir][17]" /></td>
										<td class="numeric"><input class="gir_in"  type="text" Name="gameResult[gir][18]" /></td>
										
										<td><input id="gir_in_sum" readonly="readonly" Name="gameResult[gir][19]" /></td>
										<td><input id="gir_tot" readonly="readonly" Name="gameResult[gir][20]" /></td>
									</tr>

									<tr>
										<td>GIR_DIST_PUTT_1</td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>

										<td><input type="hidden" Name="gameResult[gir_dist_put_1][9]" /></td>

										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>

										<td><input type="hidden" Name="gameResult[gir_dist_put_1][19]" /></td>
										<td><input type="hidden" Name="gameResult[gir_dist_put_1][20]" /></td>
									</tr>

									<tr>
										<td>AVG_DIST_HOL_GIR</td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input type="hidden" Name="gameResult[avg_dist_hol_gir][9]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>

										<td><input type="hidden" Name="gameResult[avg_dist_hol_gir][19]" /></td>
										<td><input type="hidden" Name="gameResult[avg_dist_hol_gir][20]" /></td>
									</tr>

									<tr>
										<td>PUT_1</td>
										<td class="numeric"><input class="put_1_out" type="text" Name="gameResult[put_1][0]" /></td>
										<td class="numeric"><input class="put_1_out" type="text" Name="gameResult[put_1][1]" /></td>
										<td class="numeric"><input class="put_1_out" type="text" Name="gameResult[put_1][2]" /></td>
										<td class="numeric"><input class="put_1_out" type="text" Name="gameResult[put_1][3]" /></td>
										<td class="numeric"><input class="put_1_out" type="text" Name="gameResult[put_1][4]" /></td>
										<td class="numeric"><input class="put_1_out" type="text" Name="gameResult[put_1][5]" /></td>
										<td class="numeric"><input class="put_1_out" type="text" Name="gameResult[put_1][6]" /></td>
										<td class="numeric"><input class="put_1_out" type="text" Name="gameResult[put_1][7]" /></td>
										<td class="numeric"><input class="put_1_out" type="text" Name="gameResult[put_1][8]" /></td>

										<td><input id ="put_1_out_sum" readonly="readonly" Name="gameResult[put_1][9]" /></td>

										<td class="numeric"><input class="put_1_in" type="text" Name="gameResult[put_1][10]" /></td>
										<td class="numeric"><input class="put_1_in"  type="text" Name="gameResult[put_1][11]" /></td>
										<td class="numeric"><input class="put_1_in"  type="text" Name="gameResult[put_1][12]" /></td>
										<td class="numeric"><input class="put_1_in"  type="text" Name="gameResult[put_1][13]" /></td>
										<td class="numeric"><input class="put_1_in"  type="text" Name="gameResult[put_1][14]" /></td>
										<td class="numeric"><input class="put_1_in"  type="text" Name="gameResult[put_1][15]" /></td>
										<td class="numeric"><input class="put_1_in"  type="text" Name="gameResult[put_1][16]" /></td>
										<td class="numeric"><input class="put_1_in"  type="text" Name="gameResult[put_1][17]" /></td>
										<td class="numeric"><input class="put_1_in"  type="text" Name="gameResult[put_1][18]" /></td>
										
										<td><input id="put_1_in_sum" readonly="readonly" Name="gameResult[put_1][19]" /></td>
										<td><input id="put_1_tot" readonly="readonly" Name="gameResult[put_1][20]" /></td>
									</tr>

									<tr>
										<td>DIST_AFT_PUTT_1</td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input type="hidden" Name="gameResult[dist_aft_putt_1][9]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input type="hidden" Name="gameResult[dist_aft_putt_1][19]" /></td>
										<td><input type="hidden" Name="gameResult[dist_aft_putt_1][20]" /></td>
									</tr>
									<tr>
										<td>NUM_PUTT_2</td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input type="hidden" Name="gameResult[num_putt_2][9]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input type="hidden" Name="gameResult[num_putt_2][19]" /></td>
										<td><input type="hidden" Name="gameResult[num_putt_2][20]" /></td>
									</tr>
									<tr>
										<td>AVG_DIST_HOL_PUTT1</td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input type="hidden" Name="gameResult[avg_dist_hole_putt1][9]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input type="hidden" Name="gameResult[avg_dist_hole_putt1][19]" /></td>
										<td><input type="hidden" Name="gameResult[avg_dist_hole_putt1][20]" /></td>
									</tr>
									<tr>
										<td>PUT_2</td>
										<td class="numeric"><input class="put_2_out" type="text" Name="gameResult[put_2][0]" /></td>
										<td class="numeric"><input class="put_2_out" type="text" Name="gameResult[put_2][1]" /></td>
										<td class="numeric"><input class="put_2_out" type="text" Name="gameResult[put_2][2]" /></td>
										<td class="numeric"><input class="put_2_out" type="text" Name="gameResult[put_2][3]" /></td>
										<td class="numeric"><input class="put_2_out" type="text" Name="gameResult[put_2][4]" /></td>
										<td class="numeric"><input class="put_2_out" type="text" Name="gameResult[put_2][5]" /></td>
										<td class="numeric"><input class="put_2_out" type="text" Name="gameResult[put_2][6]" /></td>
										<td class="numeric"><input class="put_2_out" type="text" Name="gameResult[put_2][7]" /></td>
										<td class="numeric"><input class="put_2_out" type="text" Name="gameResult[put_2][8]" /></td>

										<td><input id ="put_2_out_sum" readonly="readonly" Name="gameResult[put_2][9]" /></td>

										<td class="numeric"><input class="put_2_in" type="text" Name="gameResult[put_2][10]" /></td>
										<td class="numeric"><input class="put_2_in"  type="text" Name="gameResult[put_2][11]" /></td>
										<td class="numeric"><input class="put_2_in"  type="text" Name="gameResult[put_2][12]" /></td>
										<td class="numeric"><input class="put_2_in"  type="text" Name="gameResult[put_2][13]" /></td>
										<td class="numeric"><input class="put_2_in"  type="text" Name="gameResult[put_2][14]" /></td>
										<td class="numeric"><input class="put_2_in"  type="text" Name="gameResult[put_2][15]" /></td>
										<td class="numeric"><input class="put_2_in"  type="text" Name="gameResult[put_2][16]" /></td>
										<td class="numeric"><input class="put_2_in"  type="text" Name="gameResult[put_2][17]" /></td>
										<td class="numeric"><input class="put_2_in"  type="text" Name="gameResult[put_2][18]" /></td>
										
										<td><input id="put_2_in_sum" readonly="readonly" Name="gameResult[put_2][19]" /></td>
										<td><input id="put_2_tot" readonly="readonly" Name="gameResult[put_2][20]" /></td>
									</tr>
									<tr>
										<td>NUM_PUTT_3</td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input type="hidden" Name="gameResult[num_putt_3][9]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input type="hidden" Name="gameResult[num_putt_3][19]" /></td>
										<td><input type="hidden" Name="gameResult[num_putt_3][20]" /></td>
									</tr>

									<tr>
										<td>PUTT_3</td>
										<td class="numeric put_3_out"><input type="text" Name="gameResult[putt_3][0]" /></td>
										<td class="numeric put_3_out"><input type="text" Name="gameResult[putt_3][1]" /></td>
										<td class="numeric put_3_out"><input type="text" Name="gameResult[putt_3][2]" /></td>
										<td class="numeric put_3_out"><input type="text" Name="gameResult[putt_3][3]" /></td>
										<td class="numeric put_3_out"><input type="text" Name="gameResult[putt_3][4]" /></td>
										<td class="numeric put_3_out"><input type="text" Name="gameResult[putt_3][5]" /></td>
										<td class="numeric put_3_out"><input type="text" Name="gameResult[putt_3][6]" /></td>
										<td class="numeric put_3_out"><input type="text" Name="gameResult[putt_3][7]" /></td>
										<td class="numeric put_3_out"><input type="text" Name="gameResult[putt_3][8]" /></td>

										<td><input type="hidden" Name="gameResult[putt_3][9]" /></td>

										<td class="numeric put_3_in"><input type="text" Name="gameResult[putt_3][10]" /></td>
										<td class="numeric put_3_in"><input type="text" Name="gameResult[putt_3][11]" /></td>
										<td class="numeric put_3_in"><input type="text" Name="gameResult[putt_3][12]" /></td>
										<td class="numeric put_3_in"><input type="text" Name="gameResult[putt_3][13]" /></td>
										<td class="numeric put_3_in"><input type="text" Name="gameResult[putt_3][14]" /></td>
										<td class="numeric put_3_in"><input type="text" Name="gameResult[putt_3][15]" /></td>
										<td class="numeric put_3_in"><input type="text" Name="gameResult[putt_3][16]" /></td>
										<td class="numeric put_3_in"><input type="text" Name="gameResult[putt_3][17]" /></td>
										<td class="numeric put_3_in"><input type="text" Name="gameResult[putt_3][18]" /></td>
										<td><input type="hidden" Name="gameResult[putt_3][19]" /></td>
										<td><input type="hidden" Name="gameResult[putt_3][20]" /></td>
									</tr>

									<tr>
										<td>TOT_PUTT</td>
										<td class="numeric tot_putt_out"><input type="text" Name="gameResult[tot_putt][0]" /></td>
										<td class="numeric tot_putt_out"><input type="text" Name="gameResult[tot_putt][1]" /></td>
										<td class="numeric tot_putt_out"><input type="text" Name="gameResult[tot_putt][2]" /></td>
										<td class="numeric tot_putt_out"><input type="text" Name="gameResult[tot_putt][3]" /></td>
										<td class="numeric tot_putt_out"><input type="text" Name="gameResult[tot_putt][4]" /></td>
										<td class="numeric tot_putt_out"><input type="text" Name="gameResult[tot_putt][5]" /></td>
										<td class="numeric tot_putt_out"><input type="text" Name="gameResult[tot_putt][6]" /></td>
										<td class="numeric tot_putt_out"><input type="text" Name="gameResult[tot_putt][7]" /></td>
										<td class="numeric tot_putt_out"><input type="text" Name="gameResult[tot_putt][8]" /></td>

										<td><input type="hidden" Name="gameResult[tot_putt][9]" /></td>

										<td class="numeric tot_putt_in"><input type="text" Name="gameResult[tot_putt][10]" /></td>
										<td class="numeric tot_putt_in"><input type="text" Name="gameResult[tot_putt][11]" /></td>
										<td class="numeric tot_putt_in"><input type="text" Name="gameResult[tot_putt][12]" /></td>
										<td class="numeric tot_putt_in"><input type="text" Name="gameResult[tot_putt][13]" /></td>
										<td class="numeric tot_putt_in"><input type="text" Name="gameResult[tot_putt][14]" /></td>
										<td class="numeric tot_putt_in"><input type="text" Name="gameResult[tot_putt][15]" /></td>
										<td class="numeric tot_putt_in"><input type="text" Name="gameResult[tot_putt][16]" /></td>
										<td class="numeric tot_putt_in"><input type="text" Name="gameResult[tot_putt][17]" /></td>
										<td class="numeric tot_putt_in"><input type="text" Name="gameResult[tot_putt][18]" /></td>
										<td><input type="hidden" Name="gameResult[tot_putt][19]" /></td>
										<td><input type="hidden" Name="gameResult[tot_putt][20]" /></td>
									</tr>

									<tr>
										<td>TOT_FT_MADE</td>
										<td class="numeric tot_ft_made_out"><input type="text" Name="gameResult[tot_ft_made][0]" /></td>
										<td class="numeric tot_ft_made_out"><input type="text" Name="gameResult[tot_ft_made][1]" /></td>
										<td class="numeric tot_ft_made_out"><input type="text" Name="gameResult[tot_ft_made][2]" /></td>
										<td class="numeric tot_ft_made_out"><input type="text" Name="gameResult[tot_ft_made][3]" /></td>
										<td class="numeric tot_ft_made_out"><input type="text" Name="gameResult[tot_ft_made][4]" /></td>
										<td class="numeric tot_ft_made_out"><input type="text" Name="gameResult[tot_ft_made][5]" /></td>
										<td class="numeric tot_ft_made_out"><input type="text" Name="gameResult[tot_ft_made][6]" /></td>
										<td class="numeric tot_ft_made_out"><input type="text" Name="gameResult[tot_ft_made][7]" /></td>
										<td class="numeric tot_ft_made_out"><input type="text" Name="gameResult[tot_ft_made][8]" /></td>

										<td><input type="hidden" Name="gameResult[tot_ft_made][9]" /></td>

										<td class="numeric tot_ft_made_in"><input type="text" Name="gameResult[tot_ft_made][10]" /></td>
										<td class="numeric tot_ft_made_in"><input type="numeric text" Name="gameResult[tot_ft_made][11]" /></td>
										<td class="numeric tot_ft_made_in"><input type="text" Name="gameResult[tot_ft_made][12]" /></td>
										<td class="numeric tot_ft_made_in"><input type="text" Name="gameResult[tot_ft_made][13]" /></td>
										<td class="numeric tot_ft_made_in"><input type="text" Name="gameResult[tot_ft_made][14]" /></td>
										<td class="numeric tot_ft_made_in"><input type="text" Name="gameResult[tot_ft_made][15]" /></td>
										<td class="numeric tot_ft_made_in"><input type="text" Name="gameResult[tot_ft_made][16]" /></td>
										<td class="numeric tot_ft_made_in"><input type="text" Name="gameResult[tot_ft_made][17]" /></td>
										<td class="numeric tot_ft_made_in"><input type="text" Name="gameResult[tot_ft_made][18]" /></td>
										<td><input type="hidden" Name="gameResult[tot_ft_made][19]" /></td>
										<td><input type="hidden" Name="gameResult[tot_ft_made][20]" /></td>
									</tr>

									<tr>
										<td>PUTT_OPP_&lt;5</td>
										<td class="numeric putt_opp_<5_out"><input type="text" Name="gameResult[putt_opp_<5][0]" /></td>
										<td class="numeric putt_opp_<5_out"><input type="text" Name="gameResult[putt_opp_<5][1]" /></td>
										<td class="numeric putt_opp_<5_out"><input type="text" Name="gameResult[putt_opp_<5][2]" /></td>
										<td class="numeric putt_opp_<5_out"><input type="text" Name="gameResult[putt_opp_<5][3]" /></td>
										<td class="numeric putt_opp_<5_out"><input type="text" Name="gameResult[putt_opp_<5][4]" /></td>
										<td class="numeric putt_opp_<5_out"><input type="text" Name="gameResult[putt_opp_<5][5]" /></td>
										<td class="numeric putt_opp_<5_out"><input type="text" Name="gameResult[putt_opp_<5][6]" /></td>
										<td class="numeric putt_opp_<5_out"><input type="text" Name="gameResult[putt_opp_<5][7]" /></td>
										<td class="numeric putt_opp_<5_out"><input type="text" Name="gameResult[putt_opp_<5][8]" /></td>

										<td><input type="hidden" Name="gameResult[putt_opp_<5][9]" /></td>

										<td class="numeric putt_opp_<5_in"><input type="text" Name="gameResult[putt_opp_<5][10]" /></td>
										<td class="numeric putt_opp_<5_in"><input type="text" Name="gameResult[putt_opp_<5][11]" /></td>
										<td class="numeric putt_opp_<5_in"><input type="text" Name="gameResult[putt_opp_<5][12]" /></td>
										<td class="numeric putt_opp_<5_in"><input type="text" Name="gameResult[putt_opp_<5][13]" /></td>
										<td class="numeric putt_opp_<5_in"><input type="text" Name="gameResult[putt_opp_<5][14]" /></td>
										<td class="numeric putt_opp_<5_in"><input type="text" Name="gameResult[putt_opp_<5][15]" /></td>
										<td class="numeric putt_opp_<5_in"><input type="text" Name="gameResult[putt_opp_<5][16]" /></td>
										<td class="numeric putt_opp_<5_in"><input type="text" Name="gameResult[putt_opp_<5][17]" /></td>
										<td class="numeric putt_opp_<5_in"><input type="text" Name="gameResult[putt_opp_<5][18]" /></td>
										<td><input type="hidden" Name="gameResult[putt_opp_<5][19]" /></td>
										<td><input type="hidden" Name="gameResult[putt_opp_<5][20]" /></td>
									</tr>

									<tr>
										<td>PUTT_MAKE_&lt;5</td>
										<td class="numeric putt_make_<5_out"><input type="text" Name="gameResult[putt_make_<5][0]" /></td>
										<td class="numeric putt_make_<5_out"><input type="text" Name="gameResult[putt_make_<5][1]" /></td>
										<td class="numeric putt_make_<5_out"><input type="text" Name="gameResult[putt_make_<5][2]" /></td>
										<td class="numeric putt_make_<5_out"><input type="text" Name="gameResult[putt_make_<5][3]" /></td>
										<td class="numeric putt_make_<5_out"><input type="text" Name="gameResult[putt_make_<5][4]" /></td>
										<td class="numeric putt_make_<5_out"><input type="text" Name="gameResult[putt_make_<5][5]" /></td>
										<td class="numeric putt_make_<5_out"><input type="text" Name="gameResult[putt_make_<5][6]" /></td>
										<td class="numeric putt_make_<5_out"><input type="text" Name="gameResult[putt_make_<5][7]" /></td>
										<td class="numeric putt_make_<5_out"><input type="text" Name="gameResult[putt_make_<5][8]" /></td>

										<td><input type="hidden" Name="gameResult[putt_make_<5][9]" /></td>

										<td class="numeric putt_make_<5_in"><input type="text" Name="gameResult[putt_make_<5][10]" /></td>
										<td class="numeric putt_make_<5_in"><input type="text" Name="gameResult[putt_make_<5][11]" /></td>
										<td class="numeric putt_make_<5_in"><input type="text" Name="gameResult[putt_make_<5][12]" /></td>
										<td class="numeric putt_make_<5_in"><input type="text" Name="gameResult[putt_make_<5][13]" /></td>
										<td class="numeric putt_make_<5_in"><input type="text" Name="gameResult[putt_make_<5][14]" /></td>
										<td class="numeric putt_make_<5_in"><input type="text" Name="gameResult[putt_make_<5][15]" /></td>
										<td class="numeric putt_make_<5_in"><input type="text" Name="gameResult[putt_make_<5][16]" /></td>
										<td class="numeric putt_make_<5_in"><input type="text" Name="gameResult[putt_make_<5][17]" /></td>
										<td class="numeric putt_make_<5_in"><input type="text" Name="gameResult[putt_make_<5][18]" /></td>
										<td><input type="hidden" Name="gameResult[putt_make_<5][19]" /></td>
										<td><input type="hidden" Name="gameResult[putt_make_<5][20]" /></td>
									</tr>

									<tr>
										<td>PUTT_OPP_5-9</td>
										<td class="numeric putt_opp_5-9_out"><input type="text" Name="gameResult[putt_opp_5-9][0]" /></td>
										<td class="numeric putt_opp_5-9_out"><input type="text" Name="gameResult[putt_opp_5-9][1]" /></td>
										<td class="numeric putt_opp_5-9_out"><input type="text" Name="gameResult[putt_opp_5-9][2]" /></td>
										<td class="numeric putt_opp_5-9_out"><input type="text" Name="gameResult[putt_opp_5-9][3]" /></td>
										<td class="numeric putt_opp_5-9_out"><input type="text" Name="gameResult[putt_opp_5-9][4]" /></td>
										<td class="numeric putt_opp_5-9_out"><input type="text" Name="gameResult[putt_opp_5-9][5]" /></td>
										<td class="numeric putt_opp_5-9_out"><input type="text" Name="gameResult[putt_opp_5-9][6]" /></td>
										<td class="numeric putt_opp_5-9_out"><input type="text" Name="gameResult[putt_opp_5-9][7]" /></td>
										<td class="numeric putt_opp_5-9_out"><input type="text" Name="gameResult[putt_opp_5-9][8]" /></td>

										<td><input type="hidden" Name="gameResult[putt_opp_5-9][9]" /></td>

										<td class="numeric putt_opp_5-9_in"><input type="text" Name="gameResult[putt_opp_5-9][10]" /></td>
										<td class="numeric putt_opp_5-9_in"><input type="text" Name="gameResult[putt_opp_5-9][11]" /></td>
										<td class="numeric putt_opp_5-9_in"><input type="text" Name="gameResult[putt_opp_5-9][12]" /></td>
										<td class="numeric putt_opp_5-9_in"><input type="text" Name="gameResult[putt_opp_5-9][13]" /></td>
										<td class="numeric putt_opp_5-9_in"><input type="text" Name="gameResult[putt_opp_5-9][14]" /></td>
										<td class="numeric putt_opp_5-9_in"><input type="text" Name="gameResult[putt_opp_5-9][15]" /></td>
										<td class="numeric putt_opp_5-9_in"><input type="text" Name="gameResult[putt_opp_5-9][16]" /></td>
										<td class="numeric putt_opp_5-9_in"><input type="text" Name="gameResult[putt_opp_5-9][17]" /></td>
										<td class="numeric putt_opp_5-9_in"><input type="text" Name="gameResult[putt_opp_5-9][18]" /></td>
										<td><input type="hidden" Name="gameResult[putt_opp_5-9][19]" /></td>
										<td><input type="hidden" Name="gameResult[putt_opp_5-9][20]" /></td>
									</tr>
									<tr>
										<td>PUTT_MAKE_5-9</td>
										<td class="numeric putt_make_5-9_out"><input type="text" Name="gameResult[putt_make_5-9][0]" /></td>
										<td class="numeric putt_make_5-9_out"><input type="text" Name="gameResult[putt_make_5-9][1]" /></td>
										<td class="numeric putt_make_5-9_out"><input type="text" Name="gameResult[putt_make_5-9][2]" /></td>
										<td class="numeric putt_make_5-9_out"><input type="text" Name="gameResult[putt_make_5-9][3]" /></td>
										<td class="numeric putt_make_5-9_out"><input type="text" Name="gameResult[putt_make_5-9][4]" /></td>
										<td class="numeric putt_make_5-9_out"><input type="text" Name="gameResult[putt_make_5-9][5]" /></td>
										<td class="numeric putt_make_5-9_out"><input type="text" Name="gameResult[putt_make_5-9][6]" /></td>
										<td class="numeric putt_make_5-9_out"><input type="text" Name="gameResult[putt_make_5-9][7]" /></td>
										<td class="numeric putt_make_5-9_out"><input type="text" Name="gameResult[putt_make_5-9][8]" /></td>

										<td><input type="hidden" Name="gameResult[putt_make_5-9][9]" /></td>

										<td class="numeric putt_make_5-9_in"><input type="text" Name="gameResult[putt_make_5-9][10]" /></td>
										<td class="numeric putt_make_5-9_in"><input type="text" Name="gameResult[putt_make_5-9][11]" /></td>
										<td class="numeric putt_make_5-9_in"><input type="text" Name="gameResult[putt_make_5-9][12]" /></td>
										<td class="numeric putt_make_5-9_in"><input type="text" Name="gameResult[putt_make_5-9][13]" /></td>
										<td class="numeric putt_make_5-9_in"><input type="text" Name="gameResult[putt_make_5-9][14]" /></td>
										<td class="numeric putt_make_5-9_in"><input type="text" Name="gameResult[putt_make_5-9][15]" /></td>
										<td class="numeric putt_make_5-9_in"><input type="text" Name="gameResult[putt_make_5-9][16]" /></td>
										<td class="numeric putt_make_5-9_in"><input type="text" Name="gameResult[putt_make_5-9][17]" /></td>
										<td class="numeric putt_make_5-9_in"><input type="text" Name="gameResult[putt_make_5-9][18]" /></td>
										<td><input type="hidden" Name="gameResult[putt_make_5-9][19]" /></td>
										<td><input type="hidden" Name="gameResult[putt_make_5-9][20]" /></td>
									</tr>

									<tr>
										<td>PUTT_OPP_10-19</td>
										<td class="numeric putt_opp_10-19_out"><input type="text" Name="gameResult[putt_opp_10-19][0]" /></td>
										<td class="numeric putt_opp_10-19_out"><input type="text" Name="gameResult[putt_opp_10-19][1]" /></td>
										<td class="numeric putt_opp_10-19_out"><input type="text" Name="gameResult[putt_opp_10-19][2]" /></td>
										<td class="numeric putt_opp_10-19_out"><input type="text" Name="gameResult[putt_opp_10-19][3]" /></td>
										<td class="numeric putt_opp_10-19_out"><input type="text" Name="gameResult[putt_opp_10-19][4]" /></td>
										<td class="numeric putt_opp_10-19_out"><input type="text" Name="gameResult[putt_opp_10-19][5]" /></td>
										<td class="numeric putt_opp_10-19_out"><input type="text" Name="gameResult[putt_opp_10-19][6]" /></td>
										<td class="numeric putt_opp_10-19_out"><input type="text" Name="gameResult[putt_opp_10-19][7]" /></td>
										<td class="numeric putt_opp_10-19_out"><input type="text" Name="gameResult[putt_opp_10-19][8]" /></td>

										<td><input type="hidden" Name="gameResult[putt_opp_10-19][9]" /></td>

										<td class="numeric putt_opp_10-19_in"><input type="text" Name="gameResult[putt_opp_10-19][10]" /></td>
										<td class="numeric putt_opp_10-19_in"><input type="text" Name="gameResult[putt_opp_10-19][11]" /></td>
										<td class="numeric putt_opp_10-19_in"><input type="text" Name="gameResult[putt_opp_10-19][12]" /></td>
										<td class="numeric putt_opp_10-19_in"><input type="text" Name="gameResult[putt_opp_10-19][13]" /></td>
										<td class="numeric putt_opp_10-19_in"><input type="text" Name="gameResult[putt_opp_10-19][14]" /></td>
										<td class="numeric putt_opp_10-19_in"><input type="text" Name="gameResult[putt_opp_10-19][15]" /></td>
										<td class="numeric putt_opp_10-19_in"><input type="text" Name="gameResult[putt_opp_10-19][16]" /></td>
										<td class="numeric putt_opp_10-19_in"><input type="text" Name="gameResult[putt_opp_10-19][17]" /></td>
										<td class="numeric putt_opp_10-19_in"><input type="text" Name="gameResult[putt_opp_10-19][18]" /></td>
										<td><input type="hidden" Name="gameResult[putt_opp_10-19][19]" /></td>
										<td><input type="hidden" Name="gameResult[putt_opp_10-19][20]" /></td>
									</tr>

									<tr>
										<td>PUTT_MAKE_10-19</td>
										<td class="numeric putt_make_10-19_out"><input type="text" Name="gameResult[putt_make_10-19][0]" /></td>
										<td class="numeric putt_make_10-19_out"><input type="text" Name="gameResult[putt_make_10-19][1]" /></td>
										<td class="numeric putt_make_10-19_out"><input type="text" Name="gameResult[putt_make_10-19][2]" /></td>
										<td class="numeric putt_make_10-19_out"><input type="text" Name="gameResult[putt_make_10-19][3]" /></td>
										<td class="numeric putt_make_10-19_out"><input type="text" Name="gameResult[putt_make_10-19][4]" /></td>
										<td class="numeric putt_make_10-19_out"><input type="text" Name="gameResult[putt_make_10-19][5]" /></td>
										<td class="numeric putt_make_10-19_out"><input type="text" Name="gameResult[putt_make_10-19][6]" /></td>
										<td class="numeric putt_make_10-19_out"><input type="text" Name="gameResult[putt_make_10-19][7]" /></td>
										<td class="numeric putt_make_10-19_out"><input type="text" Name="gameResult[putt_make_10-19][8]" /></td>

										<td><input type="hidden" Name="gameResult[putt_make_10-19][9]" /></td>

										<td class="numeric putt_make_10-19_in"><input type="text" Name="gameResult[putt_make_10-19][10]" /></td>
										<td class="numeric putt_make_10-19_in"><input type="text" Name="gameResult[putt_make_10-19][11]" /></td>
										<td class="numeric putt_make_10-19_in"><input type="text" Name="gameResult[putt_make_10-19][12]" /></td>
										<td class="numeric putt_make_10-19_in"><input type="text" Name="gameResult[putt_make_10-19][13]" /></td>
										<td class="numeric putt_make_10-19_in"><input type="text" Name="gameResult[putt_make_10-19][14]" /></td>
										<td class="numeric putt_make_10-19_in"><input type="text" Name="gameResult[putt_make_10-19][15]" /></td>
										<td class="numeric putt_make_10-19_in"><input type="text" Name="gameResult[putt_make_10-19][16]" /></td>
										<td class="numeric putt_make_10-19_in"><input type="text" Name="gameResult[putt_make_10-19][17]" /></td>
										<td class="numeric putt_make_10-19_in"><input type="text" Name="gameResult[putt_make_10-19][18]" /></td>
										<td><input type="hidden" Name="gameResult[putt_make_10-19][19]" /></td>
										<td><input type="hidden" Name="gameResult[putt_make_10-19][20]" /></td>
									</tr>

									<tr>
										<td>PUTT_OPP_20-29</td>
										<td class="numeric putt_opp_20-29_out"><input type="text" Name="gameResult[putt_opp_20-29][0]" /></td>
										<td class="numeric putt_opp_20-29_out"><input type="text" Name="gameResult[putt_opp_20-29][1]" /></td>
										<td class="numeric putt_opp_20-29_out"><input type="text" Name="gameResult[putt_opp_20-29][2]" /></td>
										<td class="numeric putt_opp_20-29_out"><input type="text" Name="gameResult[putt_opp_20-29][3]" /></td>
										<td class="numeric putt_opp_20-29_out"><input type="text" Name="gameResult[putt_opp_20-29][4]" /></td>
										<td class="numeric putt_opp_20-29_out"><input type="text" Name="gameResult[putt_opp_20-29][5]" /></td>
										<td class="numeric putt_opp_20-29_out"><input type="text" Name="gameResult[putt_opp_20-29][6]" /></td>
										<td class="numeric putt_opp_20-29_out"><input type="text" Name="gameResult[putt_opp_20-29][7]" /></td>
										<td class="numeric putt_opp_20-29_out"><input type="text" Name="gameResult[putt_opp_20-29][8]" /></td>

										<td><input type="hidden" Name="gameResult[putt_opp_20-29][9]" /></td>

										<td class="numeric putt_opp_20-29_in"><input type="text" Name="gameResult[putt_opp_20-29][10]" /></td>
										<td class="numeric putt_opp_20-29_in"><input type="text" Name="gameResult[putt_opp_20-29][11]" /></td>
										<td class="numeric putt_opp_20-29_in"><input type="text" Name="gameResult[putt_opp_20-29][12]" /></td>
										<td class="numeric putt_opp_20-29_in"><input type="text" Name="gameResult[putt_opp_20-29][13]" /></td>
										<td class="numeric putt_opp_20-29_in"><input type="text" Name="gameResult[putt_opp_20-29][14]" /></td>
										<td class="numeric putt_opp_20-29_in"><input type="text" Name="gameResult[putt_opp_20-29][15]" /></td>
										<td class="numeric putt_opp_20-29_in"><input type="text" Name="gameResult[putt_opp_20-29][16]" /></td>
										<td class="numeric putt_opp_20-29_in"><input type="text" Name="gameResult[putt_opp_20-29][17]" /></td>
										<td class="numeric putt_opp_20-29_in"><input type="text" Name="gameResult[putt_opp_20-29][18]" /></td>
										<td><input type="hidden" Name="gameResult[putt_opp_20-29][19]" /></td>
										<td><input type="hidden" Name="gameResult[putt_opp_20-29][20]" /></td>
									</tr>

									<tr>
										<td>PUTT_MAKE_20-29</td>
										<td class="numeric putt_make_20-29_out"><input type="text" Name="gameResult[putt_make_20-29][0]" /></td>
										<td class="numeric putt_make_20-29_out"><input type="text" Name="gameResult[putt_make_20-29][1]" /></td>
										<td class="numeric putt_make_20-29_out"><input type="text" Name="gameResult[putt_make_20-29][2]" /></td>
										<td class="numeric putt_make_20-29_out"><input type="text" Name="gameResult[putt_make_20-29][3]" /></td>
										<td class="numeric putt_make_20-29_out"><input type="text" Name="gameResult[putt_make_20-29][4]" /></td>
										<td class="numeric putt_make_20-29_out"><input type="text" Name="gameResult[putt_make_20-29][5]" /></td>
										<td class="numeric putt_make_20-29_out"><input type="text" Name="gameResult[putt_make_20-29][6]" /></td>
										<td class="numeric putt_make_20-29_out"><input type="text" Name="gameResult[putt_make_20-29][7]" /></td>
										<td class="numeric putt_make_20-29_out"><input type="text" Name="gameResult[putt_make_20-29][8]" /></td>

										<td><input type="hidden" Name="gameResult[putt_make_20-29][9]" /></td>

										<td class="numeric putt_make_20-29_in"><input type="text" Name="gameResult[putt_make_20-29][10]" /></td>
										<td class="numeric putt_make_20-29_in"><input type="text" Name="gameResult[putt_make_20-29][11]" /></td>
										<td class="numeric putt_make_20-29_in"><input type="text" Name="gameResult[putt_make_20-29][12]" /></td>
										<td class="numeric putt_make_20-29_in"><input type="text" Name="gameResult[putt_make_20-29][13]" /></td>
										<td class="numeric putt_make_20-29_in"><input type="text" Name="gameResult[putt_make_20-29][14]" /></td>
										<td class="numeric putt_make_20-29_in"><input type="text" Name="gameResult[putt_make_20-29][15]" /></td>
										<td class="numeric putt_make_20-29_in"><input type="text" Name="gameResult[putt_make_20-29][16]" /></td>
										<td class="numeric putt_make_20-29_in"><input type="text" Name="gameResult[putt_make_20-29][17]" /></td>
										<td class="numeric putt_make_20-29_in"><input type="text" Name="gameResult[putt_make_20-29][18]" /></td>
										<td><input type="hidden" Name="gameResult[putt_make_20-29][19]" /></td>
										<td><input type="hidden" Name="gameResult[putt_make_20-29][20]" /></td>
									</tr>
									<tr>
										<td>PUTT_OPP_30+</td>
										<td class="numeric putt_opp_30+_out"><input type="text" Name="gameResult[putt_opp_30+][0]" /></td>
										<td class="numeric putt_opp_30+_out"><input type="text" Name="gameResult[putt_opp_30+][1]" /></td>
										<td class="numeric putt_opp_30+_out"><input type="text" Name="gameResult[putt_opp_30+][2]" /></td>
										<td class="numeric putt_opp_30+_out"><input type="text" Name="gameResult[putt_opp_30+][3]" /></td>
										<td class="numeric putt_opp_30+_out"><input type="text" Name="gameResult[putt_opp_30+][4]" /></td>
										<td class="numeric putt_opp_30+_out"><input type="text" Name="gameResult[putt_opp_30+][5]" /></td>
										<td class="numeric putt_opp_30+_out"><input type="text" Name="gameResult[putt_opp_30+][6]" /></td>
										<td class="numeric putt_opp_30+_out"><input type="text" Name="gameResult[putt_opp_30+][7]" /></td>
										<td class="numeric putt_opp_30+_out"><input type="text" Name="gameResult[putt_opp_30+][8]" /></td>

										<td><input type="hidden" Name="gameResult[putt_opp_30+][9]" /></td>

										<td class="numeric putt_opp_30+_in"><input type="text" Name="gameResult[putt_opp_30+][10]" /></td>
										<td class="numeric putt_opp_30+_in"><input type="text" Name="gameResult[putt_opp_30+][11]" /></td>
										<td class="numeric putt_opp_30+_in"><input type="text" Name="gameResult[putt_opp_30+][12]" /></td>
										<td class="numeric putt_opp_30+_in"><input type="text" Name="gameResult[putt_opp_30+][13]" /></td>
										<td class="numeric putt_opp_30+_in"><input type="text" Name="gameResult[putt_opp_30+][14]" /></td>
										<td class="numeric putt_opp_30+_in"><input type="text" Name="gameResult[putt_opp_30+][15]" /></td>
										<td class="numeric putt_opp_30+_in"><input type="text" Name="gameResult[putt_opp_30+][16]" /></td>
										<td class="numeric putt_opp_30+_in"><input type="text" Name="gameResult[putt_opp_30+][17]" /></td>
										<td class="numeric putt_opp_30+_in"><input type="text" Name="gameResult[putt_opp_30+][18]" /></td>
										<td><input type="hidden" Name="gameResult[putt_opp_30+][19]" /></td>
										<td><input type="hidden" Name="gameResult[putt_opp_30+][20]" /></td>
									</tr>

									<tr>
										<td>PUTT_MAKE_30+</td>
										<td class="numeric putt_make_30+_out"><input type="text" Name="gameResult[putt_make_30+][0]" /></td>
										<td class="numeric putt_make_30+_out"><input type="text" Name="gameResult[putt_make_30+][1]" /></td>
										<td class="numeric putt_make_30+_out"><input type="text" Name="gameResult[putt_make_30+][2]" /></td>
										<td class="numeric putt_make_30+_out"><input type="text" Name="gameResult[putt_make_30+][3]" /></td>
										<td class="numeric putt_make_30+_out"><input type="text" Name="gameResult[putt_make_30+][4]" /></td>
										<td class="numeric putt_make_30+_out"><input type="text" Name="gameResult[putt_make_30+][5]" /></td>
										<td class="numeric putt_make_30+_out"><input type="text" Name="gameResult[putt_make_30+][6]" /></td>
										<td class="numeric putt_make_30+_out"><input type="text" Name="gameResult[putt_make_30+][7]" /></td>
										<td class="numeric putt_make_30+_out"><input type="text" Name="gameResult[putt_make_30+][8]" /></td>

										<td><input type="hidden" Name="gameResult[putt_make_30+][9]" /></td>

										<td class="numeric putt_make_30+_in"><input type="text" Name="gameResult[putt_make_30+][10]" /></td>
										<td class="numeric putt_make_30+_in"><input type="text" Name="gameResult[putt_make_30+][11]" /></td>
										<td class="numeric putt_make_30+_in"><input type="text" Name="gameResult[putt_make_30+][12]" /></td>
										<td class="numeric putt_make_30+_in"><input type="text" Name="gameResult[putt_make_30+][13]" /></td>
										<td class="numeric putt_make_30+_in"><input type="text" Name="gameResult[putt_make_30+][14]" /></td>
										<td class="numeric putt_make_30+_in"><input type="text" Name="gameResult[putt_make_30+][15]" /></td>
										<td class="numeric putt_make_30+_in"><input type="text" Name="gameResult[putt_make_30+][16]" /></td>
										<td class="numeric putt_make_30+_in"><input type="text" Name="gameResult[putt_make_30+][17]" /></td>
										<td class="numeric putt_make_30+_in"><input type="text" Name="gameResult[putt_make_30+][18]" /></td>
										<td><input type="hidden" Name="gameResult[putt_make_30+][19]" /></td>
										<td><input type="hidden" Name="gameResult[putt_make_30+][20]" /></td>
									</tr>

									<tr>
										<td>NOGIR_DIST_PUTT_1</td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input type="hidden" Name="gameResult[nogir_dist_putt_1][9]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input type="hidden" Name="gameResult[nogir_dist_putt_1][19]" /></td>
										<td><input type="hidden" Name="gameResult[nogir_dist_putt_1][20]" /></td>
									</tr>
									<tr>
										<td>NO_GIR</td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input type="hidden" Name="gameResult[no_gir][9]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input type="hidden" Name="gameResult[no_gir][19]" /></td>
										<td><input type="hidden" Name="gameResult[no_gir][20]" /></td>
									</tr>
									<tr>
										<td>AVG_DIST_HOL_NOGIR</td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input type="hidden" Name="gameResult[avg_dist_hol_nogir][9]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input type="hidden" Name="gameResult[avg_dist_hol_nogir][19]" /></td>
										<td><input type="hidden" Name="gameResult[avg_dist_hol_nogir][20]" /></td>
									</tr>
									<tr>
										<td>SCRAMBL_OPP</td>
										<td class="numeric scrambl_opp_out"><input type="text" Name="gameResult[scrambl_opp][0]" /></td>
										<td class="numeric scrambl_opp_out"><input type="text" Name="gameResult[scrambl_opp][1]" /></td>
										<td class="numeric scrambl_opp_out"><input type="text" Name="gameResult[scrambl_opp][2]" /></td>
										<td class="numeric scrambl_opp_out"><input type="text" Name="gameResult[scrambl_opp][3]" /></td>
										<td class="numeric scrambl_opp_out"><input type="text" Name="gameResult[scrambl_opp][4]" /></td>
										<td class="numeric scrambl_opp_out"><input type="text" Name="gameResult[scrambl_opp][5]" /></td>
										<td class="numeric scrambl_opp_out"><input type="text" Name="gameResult[scrambl_opp][6]" /></td>
										<td class="numeric scrambl_opp_out"><input type="text" Name="gameResult[scrambl_opp][7]" /></td>
										<td class="numeric scrambl_opp_out"><input type="text" Name="gameResult[scrambl_opp][8]" /></td>

										<td><input type="hidden" Name="gameResult[scrambl_opp][9]" /></td>

										<td class="numeric scrambl_opp_in"><input type="text" Name="gameResult[scrambl_opp][10]" /></td>
										<td class="numeric scrambl_opp_in"><input type="text" Name="gameResult[scrambl_opp][11]" /></td>
										<td class="numeric scrambl_opp_in"><input type="text" Name="gameResult[scrambl_opp][12]" /></td>
										<td class="numeric scrambl_opp_in"><input type="text" Name="gameResult[scrambl_opp][13]" /></td>
										<td class="numeric scrambl_opp_in"><input type="text" Name="gameResult[scrambl_opp][14]" /></td>
										<td class="numeric scrambl_opp_in"><input type="text" Name="gameResult[scrambl_opp][15]" /></td>
										<td class="numeric scrambl_opp_in"><input type="text" Name="gameResult[scrambl_opp][16]" /></td>
										<td class="numeric scrambl_opp_in"><input type="text" Name="gameResult[scrambl_opp][17]" /></td>
										<td class="numeric scrambl_opp_in"><input type="text" Name="gameResult[scrambl_opp][18]" /></td>
										<td><input type="hidden" Name="gameResult[scrambl_opp][19]" /></td>
										<td><input type="hidden" Name="gameResult[scrambl_opp][20]" /></td>
									</tr>

									<tr>
										<td>SCRAMBL_SAV</td>
										<td class="numeric scrambl_sav_out"><input type="text" Name="gameResult[scrambl_sav][0]" /></td>
										<td class="numeric scrambl_sav_out"><input type="text" Name="gameResult[scrambl_sav][1]" /></td>
										<td class="numeric scrambl_sav_out"><input type="text" Name="gameResult[scrambl_sav][2]" /></td>
										<td class="numeric scrambl_sav_out"><input type="text" Name="gameResult[scrambl_sav][3]" /></td>
										<td class="numeric scrambl_sav_out"><input type="text" Name="gameResult[scrambl_sav][4]" /></td>
										<td class="numeric scrambl_sav_out"><input type="text" Name="gameResult[scrambl_sav][5]" /></td>
										<td class="numeric scrambl_sav_out"><input type="text" Name="gameResult[scrambl_sav][6]" /></td>
										<td class="numeric scrambl_sav_out"><input type="text" Name="gameResult[scrambl_sav][7]" /></td>
										<td class="numeric scrambl_sav_out"><input type="text" Name="gameResult[scrambl_sav][8]" /></td>

										<td><input type="hidden" Name="gameResult[scrambl_sav][9]" /></td>

										<td class="numeric scrambl_sav_in"><input type="text" Name="gameResult[scrambl_sav][10]" /></td>
										<td class="numeric scrambl_sav_in"><input type="text" Name="gameResult[scrambl_sav][11]" /></td>
										<td class="numeric scrambl_sav_in"><input type="text" Name="gameResult[scrambl_sav][12]" /></td>
										<td class="numeric scrambl_sav_in"><input type="text" Name="gameResult[scrambl_sav][13]" /></td>
										<td class="numeric scrambl_sav_in"><input type="text" Name="gameResult[scrambl_sav][14]" /></td>
										<td class="numeric scrambl_sav_in"><input type="text" Name="gameResult[scrambl_sav][15]" /></td>
										<td class="numeric scrambl_sav_in"><input type="text" Name="gameResult[scrambl_sav][16]" /></td>
										<td class="numeric scrambl_sav_in"><input type="text" Name="gameResult[scrambl_sav][17]" /></td>
										<td class="numeric scrambl_sav_in"><input type="text" Name="gameResult[scrambl_sav][18]" /></td>
										<td><input type="hidden" Name="gameResult[scrambl_sav][19]" /></td>
										<td><input type="hidden" Name="gameResult[scrambl_sav][20]" /></td>
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
										<td><input type="hidden" Name="gameResult[scrambl%][9]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input type="hidden" Name="gameResult[scrambl%][19]" /></td>
										<td><input type="hidden" Name="gameResult[scrambl%][20]" /></td>
									</tr>
									<tr>
										<td>SAND_OPP</td>
										<td class="numeric sand_opp_out"><input type="text" Name="gameResult[sand_opp][0]" /></td>
										<td class="numeric sand_opp_out"><input type="text" Name="gameResult[sand_opp][1]" /></td>
										<td class="numeric sand_opp_out"><input type="text" Name="gameResult[sand_opp][2]" /></td>
										<td class="numeric sand_opp_out"><input type="text" Name="gameResult[sand_opp][3]" /></td>
										<td class="numeric sand_opp_out"><input type="text" Name="gameResult[sand_opp][4]" /></td>
										<td class="numeric sand_opp_out"><input type="text" Name="gameResult[sand_opp][5]" /></td>
										<td class="numeric sand_opp_out"><input type="text" Name="gameResult[sand_opp][6]" /></td>
										<td class="numeric sand_opp_out"><input type="text" Name="gameResult[sand_opp][7]" /></td>
										<td class="numeric sand_opp_out"><input type="text" Name="gameResult[sand_opp][8]" /></td>

										<td><input type="hidden" Name="gameResult[sand_opp][9]" /></td>

										<td class="numeric sand_opp_in"><input type="text" Name="gameResult[sand_opp][10]" /></td>
										<td class="numeric sand_opp_in"><input type="text" Name="gameResult[sand_opp][11]" /></td>
										<td class="numeric sand_opp_in"><input type="text" Name="gameResult[sand_opp][12]" /></td>
										<td class="numeric sand_opp_in"><input type="text" Name="gameResult[sand_opp][13]" /></td>
										<td class="numeric sand_opp_in"><input type="text" Name="gameResult[sand_opp][14]" /></td>
										<td class="numeric sand_opp_in"><input type="text" Name="gameResult[sand_opp][15]" /></td>
										<td class="numeric sand_opp_in"><input type="text" Name="gameResult[sand_opp][16]" /></td>
										<td class="numeric sand_opp_in"><input type="text" Name="gameResult[sand_opp][17]" /></td>
										<td class="numeric sand_opp_in"><input type="text" Name="gameResult[sand_opp][18]" /></td>
										<td><input type="hidden" Name="gameResult[sand_opp][19]" /></td>
										<td><input type="hidden" Name="gameResult[sand_opp][20]" /></td>
									</tr>
									<tr>
										<td>SAND_SAV</td>
										<td class="numeric sand_sav_out"><input type="text" Name="gameResult[sand_sav][0]" /></td>
										<td class="numeric sand_sav_out"><input type="text" Name="gameResult[sand_sav][1]" /></td>
										<td class="numeric sand_sav_out"><input type="text" Name="gameResult[sand_sav][2]" /></td>
										<td class="numeric sand_sav_out"><input type="text" Name="gameResult[sand_sav][3]" /></td>
										<td class="numeric sand_sav_out"><input type="text" Name="gameResult[sand_sav][4]" /></td>
										<td class="numeric sand_sav_out"><input type="text" Name="gameResult[sand_sav][5]" /></td>
										<td class="numeric sand_sav_out"><input type="text" Name="gameResult[sand_sav][6]" /></td>
										<td class="numeric sand_sav_out"><input type="text" Name="gameResult[sand_sav][7]" /></td>
										<td class="numeric sand_sav_out"><input type="text" Name="gameResult[sand_sav][8]" /></td>

										<td><input type="hidden" Name="gameResult[sand_sav][9]" /></td>

										<td class="numeric sand_sav_in"><input type="text" Name="gameResult[sand_sav][10]" /></td>
										<td class="numeric sand_sav_in"><input type="text" Name="gameResult[sand_sav][11]" /></td>
										<td class="numeric sand_sav_in"><input type="text" Name="gameResult[sand_sav][12]" /></td>
										<td class="numeric sand_sav_in"><input type="text" Name="gameResult[sand_sav][13]" /></td>
										<td class="numeric sand_sav_in"><input type="text" Name="gameResult[sand_sav][14]" /></td>
										<td class="numeric sand_sav_in"><input type="text" Name="gameResult[sand_sav][15]" /></td>
										<td class="numeric sand_sav_in"><input type="text" Name="gameResult[sand_sav][16]" /></td>
										<td class="numeric sand_sav_in"><input type="text" Name="gameResult[sand_sav][17]" /></td>
										<td class="numeric sand_sav_in"><input type="text" Name="gameResult[sand_sav][18]" /></td>
										<td><input type="hidden" Name="gameResult[sand_sav][19]" /></td>
										<td><input type="hidden" Name="gameResult[sand_sav][20]" /></td>
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
										<td><input type="hidden" Name="gameResult[sand%][9]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input type="hidden" Name="gameResult[sand%][19]" /></td>
										<td><input type="hidden" Name="gameResult[sand%][20]" /></td>
									</tr>
									<tr>
										<td>PENALTIES</td>
										<td class="numeric penalties_out"><input type="text" Name="gameResult[penalties][0]" /></td>
										<td class="numeric penalties_out"><input type="text" Name="gameResult[penalties][1]" /></td>
										<td class="numeric penalties_out"><input type="text" Name="gameResult[penalties][2]" /></td>
										<td class="numeric penalties_out"><input type="text" Name="gameResult[penalties][3]" /></td>
										<td class="numeric penalties_out"><input type="text" Name="gameResult[penalties][4]" /></td>
										<td class="numeric penalties_out"><input type="text" Name="gameResult[penalties][5]" /></td>
										<td class="numeric penalties_out"><input type="text" Name="gameResult[penalties][6]" /></td>
										<td class="numeric penalties_out"><input type="text" Name="gameResult[penalties][7]" /></td>
										<td class="numeric penalties_out"><input type="text" Name="gameResult[penalties][8]" /></td>

										<td><input type="hidden" Name="gameResult[penalties][9]" /></td>

										<td class="numeric penalties_in"><input type="text" Name="gameResult[penalties][10]" /></td>
										<td class="numeric penalties_in"><input type="text" Name="gameResult[penalties][11]" /></td>
										<td class="numeric penalties_in"><input type="text" Name="gameResult[penalties][12]" /></td>
										<td class="numeric penalties_in"><input type="text" Name="gameResult[penalties][13]" /></td>
										<td class="numeric penalties_in"><input type="text" Name="gameResult[penalties][14]" /></td>
										<td class="numeric penalties_in"><input type="text" Name="gameResult[penalties][15]" /></td>
										<td class="numeric penalties_in"><input type="text" Name="gameResult[penalties][16]" /></td>
										<td class="numeric penalties_in"><input type="text" Name="gameResult[penalties][17]" /></td>
										<td class="numeric penalties_in"><input type="text" Name="gameResult[penalties][18]" /></td>
										<td><input type="hidden" Name="gameResult[penalties][19]" /></td>
										<td><input type="hidden" Name="gameResult[penalties][20]" /></td>
									</tr>
									<tr>
										<td>PAR3</td>
										<td class="numeric par3_out"><input type="text" Name="gameResult[par3][0]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input type="hidden" Name="gameResult[par3][9]" /></td>
										<td class="numeric par3_in"><input type="text" Name="gameResult[par3][10]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input type="hidden" Name="gameResult[par3][19]" /></td>
										<td><input type="hidden" Name="gameResult[par3][20]" /></td>
									</tr>
									<tr>
										<td>PAR3STROKES</td>
										<td class="numeric par3strokes_out"><input type="text" Name="gameResult[par3strokes][0]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input type="hidden" Name="gameResult[par3strokes][9]" /></td>
										<td class="numeric par3strokes_in"><input type="text" Name="gameResult[par3strokes][10]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input type="hidden" Name="gameResult[par3strokes][19]" /></td>
										<td><input type="hidden" Name="gameResult[par3strokes][20]" /></td>
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
										<td><input type="hidden" Name="gameResult[par3strokes][9]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input type="hidden" Name="gameResult[par3strokes][19]" /></td>
										<td><input type="hidden" Name="gameResult[par3strokes][20]" /></td>
									</tr>
									<tr>
										<td>PAR4</td>
										<td class="numeric par4_out"><input type="text" Name="gameResult[par4][0]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input type="hidden" Name="gameResult[par4][9]" /></td>
										<td class="numeric par4_in"><input type="text" Name="gameResult[par4][10]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input type="hidden" Name="gameResult[par4][19]" /></td>
										<td><input type="hidden" Name="gameResult[par4][20]" /></td>
									</tr>
									<tr>
										<td>PAR4STROKES</td>
										<td class="numeric par4strokes_out"><input type="text" Name="gameResult[par4strokes][0]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input type="hidden" Name="gameResult[par4strokes][9]" /></td>
										<td class="numeric par4strokes_in"><input type="text" Name="gameResult[par4strokes][10]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input type="hidden" Name="gameResult[par4strokes][19]" /></td>
										<td><input type="hidden" Name="gameResult[par4strokes][20]" /></td>
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
										<td><input type="hidden" Name="gameResult[par4scor][9]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input type="hidden" Name="gameResult[par4scor][19]" /></td>
										<td><input type="hidden" Name="gameResult[par4scor][20]" /></td>
									</tr>
									<tr>
										<td>PAR5</td>
										<td class="numeric par5_out"><input type="text" Name="gameResult[par5][0]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input type="hidden" Name="gameResult[par5][9]" /></td>
										<td class="numeric par5_in"><input type="text" Name="gameResult[par5][10]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input type="hidden" Name="gameResult[par5][19]" /></td>
										<td><input type="hidden" Name="gameResult[par5][20]" /></td>
									</tr>
									<tr>
										<td>PAR5STROKES</td>
										<td class="numeric par5strokes_out"><input type="text" Name="gameResult[par5strokes][0]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input type="hidden" Name="gameResult[par5strokes][9]" /></td>
										<td class="numeric par5strokes_in"><input type="text" Name="gameResult[par5strokes][10]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input type="hidden" Name="gameResult[par5strokes][19]" /></td>
										<td><input type="hidden" Name="gameResult[par5strokes][20]" /></td>
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
										<td><input type="hidden" Name="gameResult[par5strokes][9]" /></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td class="black"></td>
										<td><input type="hidden" Name="gameResult[par5strokes][19]" /></td>
										<td><input type="hidden" Name="gameResult[par5strokes][20]" /></td>
									</tr>
									<tr>
										<td>EAGLE</td>
										<td class="numeric eagle_out"><input type="text" Name="gameResult[eagle][0]" /></td>
										<td class="numeric eagle_out"><input type="text" Name="gameResult[eagle][1]" /></td>
										<td class="numeric eagle_out"><input type="text" Name="gameResult[eagle][2]" /></td>
										<td class="numeric eagle_out"><input type="text" Name="gameResult[eagle][3]" /></td>
										<td class="numeric eagle_out"><input type="text" Name="gameResult[eagle][4]" /></td>
										<td class="numeric eagle_out"><input type="text" Name="gameResult[eagle][5]" /></td>
										<td class="numeric eagle_out"><input type="text" Name="gameResult[eagle][6]" /></td>
										<td class="numeric eagle_out"><input type="text" Name="gameResult[eagle][7]" /></td>
										<td class="numeric eagle_out"><input type="text" Name="gameResult[eagle][8]" /></td>

										<td><input type="hidden" Name="gameResult[eagle][9]" /></td>

										<td class="numeric eagle_in"><input type="text" Name="gameResult[eagle][10]" /></td>
										<td class="numeric eagle_in"><input type="text" Name="gameResult[eagle][11]" /></td>
										<td class="numeric eagle_in"><input type="text" Name="gameResult[eagle][12]" /></td>
										<td class="numeric eagle_in"><input type="text" Name="gameResult[eagle][13]" /></td>
										<td class="numeric eagle_in"><input type="text" Name="gameResult[eagle][14]" /></td>
										<td class="numeric eagle_in"><input type="text" Name="gameResult[eagle][15]" /></td>
										<td class="numeric eagle_in"><input type="text" Name="gameResult[eagle][16]" /></td>
										<td class="numeric eagle_in"><input type="text" Name="gameResult[eagle][17]" /></td>
										<td class="numeric eagle_in"><input type="text" Name="gameResult[eagle][18]" /></td>
										<td><input type="hidden" Name="gameResult[eagle][19]" /></td>
										<td><input type="hidden" Name="gameResult[eagle][20]" /></td>
									</tr>
									<tr>
										<td>BIRDIE</td>
										<td class="numeric birdie_out"><input type="text" Name="gameResult[birdie][0]" /></td>
										<td class="numeric birdie_out"><input type="text" Name="gameResult[birdie][1]" /></td>
										<td class="numeric birdie_out"><input type="text" Name="gameResult[birdie][2]" /></td>
										<td class="numeric birdie_out"><input type="text" Name="gameResult[birdie][3]" /></td>
										<td class="numeric birdie_out"><input type="text" Name="gameResult[birdie][4]" /></td>
										<td class="numeric birdie_out"><input type="text" Name="gameResult[birdie][5]" /></td>
										<td class="numeric birdie_out"><input type="text" Name="gameResult[birdie][6]" /></td>
										<td class="numeric birdie_out"><input type="text" Name="gameResult[birdie][7]" /></td>
										<td class="numeric birdie_out"><input type="text" Name="gameResult[birdie][8]" /></td>

										<td><input type="hidden" Name="gameResult[birdie][9]" /></td>
										
										<td class="numeric birdie_in"><input type="text" Name="gameResult[birdie][10]" /></td>
										<td class="numeric birdie_in"><input type="text" Name="gameResult[birdie][11]" /></td>
										<td class="numeric birdie_in"><input type="text" Name="gameResult[birdie][12]" /></td>
										<td class="numeric birdie_in"><input type="text" Name="gameResult[birdie][13]" /></td>
										<td class="numeric birdie_in"><input type="text" Name="gameResult[birdie][14]" /></td>
										<td class="numeric birdie_in"><input type="text" Name="gameResult[birdie][15]" /></td>
										<td class="numeric birdie_in"><input type="text" Name="gameResult[birdie][16]" /></td>
										<td class="numeric birdie_in"><input type="text" Name="gameResult[birdie][17]" /></td>
										<td class="numeric birdie_in"><input type="text" Name="gameResult[birdie][18]" /></td>
										<td><input type="hidden" Name="gameResult[birdie][19]" /></td>
										<td><input type="hidden" Name="gameResult[birdie][20]" /></td>
									</tr>
									<tr>
										<td>PAR</td>
										<td class="numeric par_out"><input type="text" Name="gameResult[par][0]" /></td>
										<td class="numeric par_out"><input type="text" Name="gameResult[par][1]" /></td>
										<td class="numeric par_out"><input type="text" Name="gameResult[par][2]" /></td>
										<td class="numeric par_out"><input type="text" Name="gameResult[par][3]" /></td>
										<td class="numeric par_out"><input type="text" Name="gameResult[par][4]" /></td>
										<td class="numeric par_out"><input type="text" Name="gameResult[par][5]" /></td>
										<td class="numeric par_out"><input type="text" Name="gameResult[par][6]" /></td>
										<td class="numeric par_out"><input type="text" Name="gameResult[par][7]" /></td>
										<td class="numeric par_out"><input type="text" Name="gameResult[par][8]" /></td>

										<td><input type="hidden" Name="gameResult[par][9]" /></td>

										<td class="numeric par_in"><input type="text" Name="gameResult[par][10]" /></td>
										<td class="numeric par_in"><input type="text" Name="gameResult[par][11]" /></td>
										<td class="numeric par_in"><input type="text" Name="gameResult[par][12]" /></td>
										<td class="numeric par_in"><input type="text" Name="gameResult[par][13]" /></td>
										<td class="numeric par_in"><input type="text" Name="gameResult[par][14]" /></td>
										<td class="numeric par_in"><input type="text" Name="gameResult[par][15]" /></td>
										<td class="numeric par_in"><input type="text" Name="gameResult[par][16]" /></td>
										<td class="numeric par_in"><input type="text" Name="gameResult[par][17]" /></td>
										<td class="numeric par_in"><input type="text" Name="gameResult[par][18]" /></td>
										<td><input type="hidden" Name="gameResult[par][19]" /></td>
										<td><input type="hidden" Name="gameResult[par][20]" /></td>
									</tr>
									<tr>
										<td>BOGEY</td>
										<td class="numeric bogey_out"><input type="text" Name="gameResult[bogey][0]" /></td>
										<td class="numeric bogey_out"><input type="text" Name="gameResult[bogey][1]" /></td>
										<td class="numeric bogey_out"><input type="text" Name="gameResult[bogey][2]" /></td>
										<td class="numeric bogey_out"><input type="text" Name="gameResult[bogey][3]" /></td>
										<td class="numeric bogey_out"><input type="text" Name="gameResult[bogey][4]" /></td>
										<td class="numeric bogey_out"><input type="text" Name="gameResult[bogey][5]" /></td>
										<td class="numeric bogey_out"><input type="text" Name="gameResult[bogey][6]" /></td>
										<td class="numeric bogey_out"><input type="text" Name="gameResult[bogey][7]" /></td>
										<td class="numeric bogey_out"><input type="text" Name="gameResult[bogey][8]" /></td>

										<td><input type="hidden" Name="gameResult[bogey][9]" /></td>

										<td class="numeric bogey_in"><input type="text" Name="gameResult[bogey][10]" /></td>
										<td class="numeric bogey_in"><input type="text" Name="gameResult[bogey][11]" /></td>
										<td class="numeric bogey_in"><input type="text" Name="gameResult[bogey][12]" /></td>
										<td class="numeric bogey_in"><input type="text" Name="gameResult[bogey][13]" /></td>
										<td class="numeric bogey_in"><input type="text" Name="gameResult[bogey][14]" /></td>
										<td class="numeric bogey_in"><input type="text" Name="gameResult[bogey][15]" /></td>
										<td class="numeric bogey_in"><input type="text" Name="gameResult[bogey][16]" /></td>
										<td class="numeric bogey_in"><input type="text" Name="gameResult[bogey][17]" /></td>
										<td class="numeric bogey_in"><input type="text" Name="gameResult[bogey][18]" /></td>
										<td><input type="hidden" Name="gameResult[bogey][19]" /></td>
										<td><input type="hidden" Name="gameResult[bogey][20]" /></td>
									</tr>
									<tr>
										<td>DBLBOGEY</td>
										<td class="numeric dblbogey_out"><input type="text" Name="gameResult[dblbogey][0]" /></td>
										<td class="numeric dblbogey_out"><input type="text" Name="gameResult[dblbogey][1]" /></td>
										<td class="numeric dblbogey_out"><input type="text" Name="gameResult[dblbogey][2]" /></td>
										<td class="numeric dblbogey_out"><input type="text" Name="gameResult[dblbogey][3]" /></td>
										<td class="numeric dblbogey_out"><input type="text" Name="gameResult[dblbogey][4]" /></td>
										<td class="numeric dblbogey_out"><input type="text" Name="gameResult[dblbogey][5]" /></td>
										<td class="numeric dblbogey_out"><input type="text" Name="gameResult[dblbogey][6]" /></td>
										<td class="numeric dblbogey_out"><input type="text" Name="gameResult[dblbogey][7]" /></td>
										<td class="numeric dblbogey_out"><input type="text" Name="gameResult[dblbogey][8]" /></td>

										<td><input type="hidden" Name="gameResult[dblbogey][9]" /></td>

										<td class="numeric dblbogey_in"><input type="text" Name="gameResult[dblbogey][10]" /></td>
										<td class="numeric dblbogey_in"><input type="text" Name="gameResult[dblbogey][11]" /></td>
										<td class="numeric dblbogey_in"><input type="text" Name="gameResult[dblbogey][12]" /></td>
										<td class="numeric dblbogey_in"><input type="text" Name="gameResult[dblbogey][13]" /></td>
										<td class="numeric dblbogey_in"><input type="text" Name="gameResult[dblbogey][14]" /></td>
										<td class="numeric dblbogey_in"><input type="text" Name="gameResult[dblbogey][15]" /></td>
										<td class="numeric dblbogey_in"><input type="text" Name="gameResult[dblbogey][16]" /></td>
										<td class="numeric dblbogey_in"><input type="text" Name="gameResult[dblbogey][17]" /></td>
										<td class="numeric dblbogey_in"><input type="text" Name="gameResult[dblbogey][18]" /></td>
										<td><input type="hidden" Name="gameResult[dblbogey][19]" /></td>
										<td><input type="hidden" Name="gameResult[dblbogey][20]" /></td>
									</tr>
									<tr>
										<td>OTHER</td>
										<td class="numeric other_out"><input type="text" Name="gameResult[other][0]" /></td>
										<td class="numeric other_out"><input type="text" Name="gameResult[other][1]" /></td>
										<td class="numeric other_out"><input type="text" Name="gameResult[other][2]" /></td>
										<td class="numeric other_out"><input type="text" Name="gameResult[other][3]" /></td>
										<td class="numeric other_out"><input type="text" Name="gameResult[other][4]" /></td>
										<td class="numeric other_out"><input type="text" Name="gameResult[other][5]" /></td>
										<td class="numeric other_out"><input type="text" Name="gameResult[other][6]" /></td>
										<td class="numeric other_out"><input type="text" Name="gameResult[other][7]" /></td>
										<td class="numeric other_out"><input type="text" Name="gameResult[other][8]" /></td>

										<td><input type="hidden" Name="gameResult[other][9]" /></td>

										<td class="numeric other_in"><input type="text" Name="gameResult[other][10]" /></td>
										<td class="numeric other_in"><input type="text" Name="gameResult[other][11]" /></td>
										<td class="numeric other_in"><input type="text" Name="gameResult[other][12]" /></td>
										<td class="numeric other_in"><input type="text" Name="gameResult[other][13]" /></td>
										<td class="numeric other_in"><input type="text" Name="gameResult[other][14]" /></td>
										<td class="numeric other_in"><input type="text" Name="gameResult[other][15]" /></td>
										<td class="numeric other_in"><input type="text" Name="gameResult[other][16]" /></td>
										<td class="numeric other_in"><input type="text" Name="gameResult[other][17]" /></td>
										<td class="numeric other_in"><input type="text" Name="gameResult[other][18]" /></td>
										<td><input type="hidden" Name="gameResult[other][19]" /></td>
										<td><input type="hidden" Name="gameResult[other][20]" /></td>
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
										<td><input type="hidden" Name="gameResult[played_holes][20]" /></td>
									</tr>
									<tr>
										<td colspan="22" style="background: #006400;color: #fff;font-weight: 700; text-align:center"><input type="submit" value="submit" name="submit"/></td>
									</tr>
								</form>
							</table>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
		
		<script type="text/javascript">
			$(document).ready(function() {
				//$(".hole_par_out, .hole_par_in, .score_out, .score_in, .fir_out, .fir_in, .gir_out, .gir_in, .put_1_out, .put_1_in, .putt_2_out, .putt_2_in, .put_3_out, .put_3_in, .tot_putt_out, .tot_putt_in, .tot_ft_made_out, .tot_ft_made_in, .putt_opp_<5_out, .putt_opp_<5_in, .putt_make_<5_out, .putt_make_<5_in, .putt_opp_5-9_out, .putt_opp_5-9_in, .putt_make_5-9_out, .putt_make_5-9_in, .putt_opp_10-19_out, .putt_opp_10-19_in, .putt_make_10-19_out, .putt_make_10-19_in, .putt_opp_20-29_out, .putt_opp_20-29_in, .putt_make_20-29_out, .putt_make_20-29_in, .putt_opp_30+_out, .putt_opp_30+_in, .putt_make_30+_out").keydown(function(event) {
				$(".numeric").keydown(function(e) 
				{
					if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 || (e.keyCode == 65 && e.ctrlKey === true) || (e.keyCode == 67 && e.ctrlKey === true) || (e.keyCode == 88 && e.ctrlKey === true) || (e.keyCode >= 35 && e.keyCode <= 39)) 
					{
			            return;
			        }
			        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) 
			        {
			            e.preventDefault();
			        }
				});

				function isInt(n){
			    	return Number(n) === n && n % 1 === 0;
				}

				
    			function CheckHolePair()
    			{
    				var inSum = 0;
					$('.hole_par_in').each(function(){
						var number = parseInt(this.value);
						if(isInt(number))
						{
                           inSum = inSum + number;
						}
					});
    			    $("#hole_par_in_sum").val(inSum);

    			    var outSum = 0;
					$('.hole_par_out').each(function(){
						var number = parseInt(this.value);
						if(isInt(number))
						{
                           outSum = outSum + number;
						}
					});

					$("#hole_par_out_sum").val(outSum);

					var totalSum = inSum+outSum;
					$("#hole_par_tot").val(totalSum);
    			}

    			$('.hole_par_in').on("change, keyup" , CheckHolePair);
    			$(".hole_par_out").on("change, keyup" ,CheckHolePair);

    			function CheckScore()
    			{
    				var inSum = 0;
					$('.score_in').each(function(){
						var number = parseInt(this.value);
						if(isInt(number))
						{
                           inSum = inSum + number;
						}
					});
    			    $("#score_in_sum").val(inSum);

    			    var outSum = 0;
					$('.score_out').each(function(){
						var number = parseInt(this.value);
						if(isInt(number))
						{
                           outSum = outSum + number;
						}
					});

					$("#score_out_sum").val(outSum);

					var totalSum = inSum+outSum;
					$("#score_tot").val(totalSum);
    			}

    			$('.score_in').on("change, keyup" , CheckScore);
    			$(".score_out").on("change, keyup" ,CheckScore);

    			function CheckFir()
    			{
    				var inSum = 0;
					$('.fir_in').each(function(){
						var number = parseInt(this.value);
						if(isInt(number))
						{
                           inSum = inSum + number;
						}
					});
    			    $("#fir_in_sum").val(inSum);

    			    var outSum = 0;
					$('.fir_out').each(function(){
						var number = parseInt(this.value);
						if(isInt(number))
						{
                           outSum = outSum + number;
						}
					});

					$("#fir_out_sum").val(outSum);

					var totalSum = inSum+outSum;
					$("#fir_tot").val(totalSum);
    			}

    			$('.fir_in').on("change, keyup" , CheckFir);
    			$(".fir_out").on("change, keyup" ,CheckFir);
    			function CheckGir()
    			{
    				var inSum = 0;
					$('.gir_in').each(function(){
						var number = parseInt(this.value);
						if(isInt(number))
						{
                           inSum = inSum + number;
						}
					});
    			    $("#gir_in_sum").val(inSum);

    			    var outSum = 0;
					$('.gir_out').each(function(){
						var number = parseInt(this.value);
						if(isInt(number))
						{
                           outSum = outSum + number;
						}
					});

					$("#gir_out_sum").val(outSum);

					var totalSum = inSum+outSum;
					$("#gir_tot").val(totalSum);
    			}

    			$('.gir_in').on("change, keyup" , CheckGir);
    			$(".gir_out").on("change, keyup" ,CheckGir);
    			function CheckPut1()
    			{
    				var inSum = 0;
					$('.put_1_in').each(function(){
						var number = parseInt(this.value);
						if(isInt(number))
						{
                           inSum = inSum + number;
						}
					});
    			    $("#put_1_in_sum").val(inSum);

    			    var outSum = 0;
					$('.put_1_out').each(function(){
						var number = parseInt(this.value);
						if(isInt(number))
						{
                           outSum = outSum + number;
						}
					});

					$("#put_1_out_sum").val(outSum);

					var totalSum = inSum+outSum;
					$("#put_1_tot").val(totalSum);
    			}

    			$('.put_1_in').on("change, keyup" , CheckPut1);
    			$(".put_1_out").on("change, keyup" ,CheckPut1);
    			function CheckPut2()
    			{
    				var inSum = 0;
					$('.put_2_in').each(function(){
						var number = parseInt(this.value);
						if(isInt(number))
						{
                           inSum = inSum + number;
						}
					});
    			    $("#put_2_in_sum").val(inSum);

    			    var outSum = 0;
					$('.put_2_out').each(function(){
						var number = parseInt(this.value);
						if(isInt(number))
						{
                           outSum = outSum + number;
						}
					});

					$("#put_2_out_sum").val(outSum);

					var totalSum = inSum+outSum;
					$("#put_2_tot").val(totalSum);
    			}

    			$('.put_2_in').on("change, keyup" , CheckPut2);
    			$(".put_2_out").on("change, keyup" ,CheckPut2);
    		});
		</script>
	</body>
</html>
@stop