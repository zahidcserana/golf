<?php
$gameResults = json_decode($gameResult, true);
?>
<html>
	<head>
		<style>
			input{border:0px solid #000; margin:0; background:transparent; width:100%}
			table tr td{border-right:1px solid #000; border-bottom:1px solid #000;width: 30px;}
			table{background: #fff none repeat scroll 0 0;
				border-left: 1px solid #000;
				border-top: 1px solid #000;}
				table tr:nth-child(even){background:#ccc;}
				table tr:nth-child(odd){background:#eee;}
		</style>
	</head>
	<body>

		<table cellpadding="0"; cellspacing="0">
			<tr>
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
				<td>{{$gameResults['hole_pair'][0]}}</td>
				<td>{{$gameResults['hole_pair'][1]}}</td>
				<td>{{$gameResults['hole_pair'][2]}}</td>
				<td>{{$gameResults['hole_pair'][3]}}</td>
				<td>{{$gameResults['hole_pair'][4]}}</td>
				<td>{{$gameResults['hole_pair'][5]}}</td>
				<td>{{$gameResults['hole_pair'][6]}}</td>
				<td>{{$gameResults['hole_pair'][7]}}</td>
				<td>{{$gameResults['hole_pair'][8]}}</td>
				
			</tr>
			
			</tr>
			
		</table>
	</body>
</html>