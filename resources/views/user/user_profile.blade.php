<?php
  $asset = asset('/');
?>
@extends('user.master')
@section('content')

<h1 class="page-header">User profile</h1>

<div class="row">
	<div class="col-md-2">
		<a class="thumbnail">
			<img src="{{$asset}}image/{{$userProfile->photo}}" alt="...">
		</a>
	</div>
	<div class="col-md-10">
		<div class="table-responsive">
			<table class="table table-striped" id="user_profile_table">
				<tbody>
					<tr>
						<td>Name</td>
						<td>: Lorem ipsum</td>
					</tr>
					<tr>
						<td>Email</td>
						<td>: loremip@mail.com</td>
					</tr>
					<tr>
						<td>Join Date</td>
						<td>: 20-10-2016</td>
					</tr>
					<tr>
						<td>Address</td>
						<td>: 123, lorem ipsum, london, USA</td>
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
				<td><input id="par3_scoring" readonly="readonly" name="gameResult[par3_scoring][0]"></td>
				<td><input id="par4_scoring" readonly="readonly" name="gameResult[par4_scoring][0]"></td>
				<td><input id="par5_scoring" readonly="readonly" name="gameResult[par5_scoring][0]"></td>
				<td><input id="hash_par3" readonly="readonly" name="gameResult[hash_par3][0]"></td>
				<td><input id="hash_par4" readonly="readonly" name="gameResult[hash_par4][0]"></td>
				<td><input id="hash_par5" readonly="readonly" name="gameResult[hash_par5][0]"></td>
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
				<td><input id="eagles" readonly="readonly" name="gameResult[eagles][0]"></td>
				<td><input id="birdies" readonly="readonly" name="gameResult[birdies][0]"></td>
				<td><input id="pars" readonly="readonly" name="gameResult[pars][0]"></td>
				<td><input id="bogeys" readonly="readonly" name="gameResult[bogeys][0]"></td>
				<td><input id="dblbogeys" readonly="readonly" name="gameResult[dblbogeys][0]"></td>
				<td><input id="others" readonly="readonly" name="gameResult[others][0]"></td>
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
				<td><input id="fairways" readonly="readonly" name="gameResult[fairways][0]"></td>
				<td><input id="fir_percentage" readonly="readonly" name="gameResult[fir_percentage][0]"></td>
				<td><input id="greens" readonly="readonly" name="gameResult[greens][0]"></td>
				<td><input id="gir_percentage" readonly="readonly" name="gameResult[gir_percentage][0]"></td>
				<td><input id="played_holes_equation" readonly="readonly" name="gameResult[played_holes_equation][0]"></td>
				<td><input id="hole_rds_18" readonly="readonly" name="gameResult[hole_rds_18][0]"></td>
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
				<td><input id="scramble_opp_equation" readonly="readonly" name="gameResult[scramble_opp_equation][0]"></td>
				<td><input id="scramble_sav_equation" readonly="readonly" name="gameResult[scramble_sav_equation][0]"></td>
				<td><input id="scramble_percentage" readonly="readonly" name="gameResult[scramble_percentage][0]"></td>
				<td><input id="sand_opp_equation" readonly="readonly" name="gameResult[sand_opp_equation][0]"></td>
				<td><input id="sand_sav_equation" readonly="readonly" name="gameResult[sand_sav_equation][0]"></td>
				<td><input id="sand_sav_percentage" readonly="readonly" name="gameResult[sand_sav_percentage][0]"></td>
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
				<td><input id="missed_gir" readonly="readonly" name="gameResult[missed_gir][0]"></td>
				<td><input id="put_1_nogir" readonly="readonly" name="gameResult[put_1_nogir][0]"></td>
				<td><input id="avg_dist_chip" readonly="readonly" name="gameResult[avg_dist_chip][0]"></td>
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
				<td><input id="total_putts" readonly="readonly" name="gameResult[total_putts][0]"></td>
				<td><input id="putts_div_hole" readonly="readonly" name="gameResult[putts_div_hole][0]"></td>
				<td><input id="avg_score" readonly="readonly" name="gameResult[avg_score][0]"></td>
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
				<td><input id="putt_opp_5_equation" readonly="readonly" name="gameResult[putt_opp_5_equation][0]"></td>
				<td><input id="putt_opp_5_9_equation" readonly="readonly" name="gameResult[putt_opp_5_9_equation][0]"></td>
				<td><input id="putt_opp_10_19_equation" readonly="readonly" name="gameResult[putt_opp_10_19_equation][0]"></td>
				<td><input id="putt_opp_20_29_equation" readonly="readonly" name="gameResult[putt_opp_20_29_equation][0]"></td>
				<td><input id="putt_opp_30_equation" readonly="readonly" name="gameResult[putt_opp_30_equation][0]"></td>
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
				<td><input id="putt_make_5_equation" readonly="readonly" name="gameResult[putt_make_5_equation][0]"></td>
				<td><input id="putt_make_5_9_equation" readonly="readonly" name="gameResult[putt_make_5_9_equation][0]"></td>
				<td><input id="putt_make_10_19_equation" readonly="readonly" name="gameResult[putt_make_10_19_equation][0]"></td>
				<td><input id="putt_make_20_29_equation" readonly="readonly" name="gameResult[putt_make_20_29_equation][0]"></td>
				<td><input id="putt_make_30_equation" readonly="readonly" name="gameResult[putt_make_30_equation][0]"></td>
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
				<td><input id="make_percentage_5" readonly="readonly" name="gameResult[make_percentage_5][0]"></td>
				<td><input id="make_percentage_5_9" readonly="readonly" name="gameResult[make_percentage_5_9][0]"></td>
				<td><input id="make_percentage_10_19" readonly="readonly" name="gameResult[make_percentage_10_19][0]"></td>
				<td><input id="make_percentage_20_29" readonly="readonly" name="gameResult[make_percentage_20_29][0]"></td>
				<td><input id="make_percentage_30" readonly="readonly" name="gameResult[make_percentage_30][0]"></td>
				<td></td>
			</tr>
			<tr>
				<td colspan="6" style="background: #006400;color: #fff;font-weight: 700; text-align:center"><input type="submit" value="submit" name="submit"/></td>
			</tr>
		</table>
	</div>
</div>

@stop