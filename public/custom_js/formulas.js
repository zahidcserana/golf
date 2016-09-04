$(document).ready(function() {
	
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
			var number = GetNumericValue(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#hole_par_in_sum").val(inSum);

		var outSum = 0;
		$('.hole_par_out').each(function(){
			var number = GetNumericValue(this.value);
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
		var nonBlank = 0;
		$('.score_in').each(function(){
			var number = GetNumericValue(this.value);
			//if((this.value)!="")
				
			if(isInt(number))
			{
				nonBlank = nonBlank + 1; 
				inSum = inSum + number;
			}
		});
		$("#score_in_sum").val(inSum);

		var outSum = 0;
		$('.score_out').each(function(){
			var number = GetNumericValue(this.value);
			if(isInt(number))
			{
				nonBlank = nonBlank + 1;
				outSum = outSum + number;
			}
		});

		$("#score_out_sum").val(outSum);

		var totalSum = inSum+outSum;
		$("#score_tot").val(totalSum);
		$("#played_holes_tot").val(nonBlank);
		$("#played_holes_equation").val(nonBlank);
		if(nonBlank=='18')
			$("#hole_rds_18").val(1);
		else 
			$("#hole_rds_18").val("");
	}

	$('.score_in').on("change, keyup" , CheckScore);
	$(".score_out").on("change, keyup" ,CheckScore);

	function CheckFir()
	{
		var inSum = 0;
		$('.fir_in').each(function(){
			var number = GetNumericValue(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#fir_in_sum").val(inSum);

		var outSum = 0;
		$('.fir_out').each(function(){
			var number = GetNumericValue(this.value);
			if(isInt(number))
			{
			   outSum = outSum + number;
			}
		});

		$("#fir_out_sum").val(outSum);

		var totalSum = inSum+outSum;
		$("#fir_tot").val(totalSum);
		
		//$("#fir_percentage").val(document.getElementById("par5_tot").value);
		//document.getElementById("par5_tot").value
	}

	//$('.par4_in').on("change, keyup" , CheckFir);
	//$('.par4_out').on("change, keyup" , CheckFir);
	//$('#par5_tot').on("change, keyup" , CheckFir);
	//$('.par5_in').on("change, keyup" , CheckFir);
	//$('.par5_out').on("change, keyup" , CheckFir);
	$('.fir_in').on("change, keyup" , CheckFir);
	$(".fir_out").on("change, keyup" ,CheckFir);

	function CheckGir()
	{
		var inSum = 0;
		var countZeroGir = 0;
		$('.gir_in').each(function(){
			var number = GetNumericValue(this.value);
			if((this.value)=='0')
				countZeroGir = countZeroGir + 1;
			if(isInt(number))
			{
				//countGir = countGir + 1;
				inSum = inSum + number;
			}
		});
		$("#gir_in_sum").val(inSum);

		var outSum = 0;
		$('.gir_out').each(function(){
			var number = GetNumericValue(this.value);
			if((this.value)=='0')
				countZeroGir = countZeroGir + 1;
			if(isInt(number))
			{
				//countGir = countGir + 1;
				outSum = outSum + number;
			}
		});

		$("#gir_out_sum").val(outSum);

		var totalSum = inSum+outSum;
		$("#gir_tot").val(totalSum);
		$("#greens").val(totalSum);
		$("#no_gir_tot").val(countZeroGir);
		$("#missed_gir").val(countZeroGir);
	}

	$('.gir_in').on("change, keyup" , CheckGir);
	$(".gir_out").on("change, keyup" ,CheckGir);
	function CheckPutt1()
	{
		var inSum = 0;
		$('.putt_1_in').each(function(){
			var number = GetNumericValue(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#putt_1_in_sum").val(inSum);

		var outSum = 0;
		$('.putt_1_out').each(function(){
			var number = GetNumericValue(this.value);
			if(isInt(number))
			{
			   outSum = outSum + number;
			}
		});

		$("#putt_1_out_sum").val(outSum);

		var totalSum = inSum+outSum;
		$("#putt_1_tot").val(totalSum);
	}

	$('.putt_1_in').on("change, keyup" , CheckPutt1);
	$(".putt_1_out").on("change, keyup" ,CheckPutt1);
	function CheckPutt2()
	{
		var inSum = 0;
		$('.putt_2_in').each(function(){
			var number = GetNumericValue(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#putt_2_in_sum").val(inSum);

		var outSum = 0;
		$('.putt_2_out').each(function(){
			var number = GetNumericValue(this.value);
			if(isInt(number))
			{
			   outSum = outSum + number;
			}
		});

		$("#putt_2_out_sum").val(outSum);

		var totalSum = inSum+outSum;
		$("#putt_2_tot").val(totalSum);
	}

	$('.putt_2_in').on("change, keyup" , CheckPutt2);
	$(".putt_2_out").on("change, keyup" ,CheckPutt2);

	function CheckPutt3()
	{
		var inSum = 0;
		$('.putt_3_in').each(function(){
			var number = GetNumericValue(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#putt_3_in_sum").val(inSum);

		var outSum = 0;
		$('.putt_3_out').each(function(){
			var number = GetNumericValue(this.value);
			if(isInt(number))
			{
			   outSum = outSum + number;
			}
		});

		$("#putt_3_out_sum").val(outSum);

		var totalSum = inSum+outSum;
		$("#putt_3_tot").val(totalSum);
	}

	$('.putt_3_in').on("change, keyup" , CheckPutt3);
	$(".putt_3_out").on("change, keyup" ,CheckPutt3);


	function SandOpp()
	{
		var inSum = 0;
		$('.sand_opp_in').each(function(){
			var number = GetNumericValue(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#sand_opp_in_sum").val(inSum);

		var outSum = 0;
		$('.sand_opp_out').each(function(){
			var number = GetNumericValue(this.value);
			if(isInt(number))
			{
			   outSum = outSum + number;
			}
		});

		$("#sand_opp_out_sum").val(outSum);

		var totalSum = inSum+outSum;
		$("#sand_opp_tot").val(totalSum);
		$("#sand_opp_equation").val(totalSum);
	}

	$('.sand_opp_in').on("change, keyup" , SandOpp);
	$(".sand_opp_out").on("change, keyup" ,SandOpp);

	function SandSav()
	{
		var inSum = 0;
		$('.sand_sav_in').each(function(){
			var number = GetNumericValue(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#sand_sav_in_sum").val(inSum);

		var outSum = 0;
		$('.sand_sav_out').each(function(){
			var number = GetNumericValue(this.value);
			if(isInt(number))
			{
			   outSum = outSum + number;
			}
		});

		$("#sand_sav_out_sum").val(outSum);

		var totalSum = inSum+outSum;
		$("#sand_sav_tot").val(totalSum);
		$("#sand_sav_equation").val(totalSum);
		
	}

	$('.sand_sav_in').on("change, keyup" , SandSav);
	$(".sand_sav_out").on("change, keyup" ,SandSav);

	function Penalties()
	{
		var inSum = 0;
		$('.penalties_in').each(function(){
			var number = GetNumericValue(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#penalties_in_sum").val(inSum);

		var outSum = 0;
		$('.penalties_out').each(function(){
			var number = GetNumericValue(this.value);
			if(isInt(number))
			{
			   outSum = outSum + number;
			}
		});

		$("#penalties_out_sum").val(outSum);

		var totalSum = inSum+outSum;
		$("#penalties_tot").val(totalSum);
	}

	$('.penalties_in').on("change, keyup" , Penalties);
	$(".penalties_out").on("change, keyup" ,Penalties);

	function Par3()
	{
		var inSum = 0;
		$('.par3_in').each(function(){
			var number = GetNumericValue(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#par3_in_sum").val(inSum);

		var outSum = 0;
		$('.par3_out').each(function(){
			var number = GetNumericValue(this.value);
			if(isInt(number))
			{
			   outSum = outSum + number;
			}
		});

		$("#par3_out_sum").val(outSum);

		var totalSum = inSum+outSum;
		$("#par3_tot").val(totalSum);
		$("#hash_par3").val(totalSum);
	}

	$('.par3_in').on("change, keyup" , Par3);
	$(".par3_out").on("change, keyup" ,Par3);

	function PAR3STROKES()
	{
		var inSum = 0;
		$('.par3strokes_in').each(function(){
			var number = GetNumericValue(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#par3strokes_in_sum").val(inSum);

		var outSum = 0;
		$('.par3strokes_out').each(function(){
			var number = GetNumericValue(this.value);
			if(isInt(number))
			{
			   outSum = outSum + number;
			}
		});

		$("#par3strokes_out_sum").val(outSum);

		var totalSum = inSum+outSum;
		$("#par3strokes_tot").val(totalSum);

	}
	$('.par3strokes_in').on("change, keyup" , PAR3STROKES);
	$(".par3strokes_out").on("change, keyup" ,PAR3STROKES);



	function Par4()
	{
		var inSum = 0;
		$('.par4_in').each(function(){
			var number = GetNumericValue(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#par4_in_sum").val(inSum);

		var outSum = 0;
		$('.par4_out').each(function(){
			var number = GetNumericValue(this.value);
			if(isInt(number))
			{
			   outSum = outSum + number;
			}
		});

		$("#par4_out_sum").val(outSum);

		var totalSum = inSum+outSum;
		$("#par4_tot").val(totalSum);
		$("#hash_par4").val(totalSum);
		total_par4 = totalSum;
	}

	$('.par4_in').on("change, keyup" , Par4);
	$(".par4_out").on("change, keyup" ,Par4);

	function PAR4STROKES()
	{
		var inSum = 0;
		$('.par4strokes_in').each(function(){
			var number = GetNumericValue(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#par4strokes_in_sum").val(inSum);

		var outSum = 0;
		$('.par4strokes_out').each(function(){
			var number = GetNumericValue(this.value);
			if(isInt(number))
			{
			   outSum = outSum + number;
			}
		});

		$("#par4strokes_out_sum").val(outSum);

		var totalSum = inSum+outSum;
		$("#par4strokes_tot").val(totalSum);

	}		
	$('.par4strokes_in').on("change, keyup" , PAR4STROKES);
	$(".par4strokes_out").on("change, keyup" ,PAR4STROKES);

	function Par5()
	{
		var inSum = 0;
		$('.par5_in').each(function(){
			var number = GetNumericValue(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#par5_in_sum").val(inSum);

		var outSum = 0;
		$('.par5_out').each(function(){
			var number = GetNumericValue(this.value);
			if(isInt(number))
			{
			   outSum = outSum + number;
			}
		});

		$("#par5_out_sum").val(outSum);

		var totalSum = inSum+outSum;
		$("#par5_tot").val(totalSum);
		$("#hash_par5").val(document.getElementById("par5_tot").value);
		total_par4 = totalSum;
	}

	$('.par5_in').on("change, keyup" , Par5);
	$(".par5_out").on("change, keyup" ,Par5);

	function PAR5STROKES()
	{
		var inSum = 0;
		$('.par5strokes_in').each(function(){
			var number = GetNumericValue(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#par5strokes_in_sum").val(inSum);

		var outSum = 0;
		$('.par5strokes_out').each(function(){
			var number = GetNumericValue(this.value);
			if(isInt(number))
			{
			   outSum = outSum + number;
			}
		});

		$("#par5strokes_out_sum").val(outSum);

		var totalSum = inSum+outSum;
		$("#par5strokes_tot").val(totalSum);

	}
	$('.par5strokes_in').on("change, keyup" , PAR5STROKES);
	$(".par5strokes_out").on("change, keyup" ,PAR5STROKES);

	function EAGLE()
	{
		var inSum = 0;
		$('.eagle_in').each(function(){
			var number = GetNumericValue(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#eagle_in_sum").val(inSum);

		var outSum = 0;
		$('.eagle_out').each(function(){
			var number = GetNumericValue(this.value);
			if(isInt(number))
			{
			   outSum = outSum + number;
			}
		});

		$("#eagle_out_sum").val(outSum);

		var totalSum = inSum+outSum;
		$("#eagle_tot").val(totalSum);
		$("#eagles").val(totalSum);
	}

	$('.eagle_in').on("change, keyup" , EAGLE);
	$(".eagle_out").on("change, keyup" ,EAGLE);

	function BIRDIE()
	{
		var inSum = 0;
		$('.birdie_in').each(function(){
			var number = GetNumericValue(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#birdie_in_sum").val(inSum);

		var outSum = 0;
		$('.birdie_out').each(function(){
			var number = GetNumericValue(this.value);
			if(isInt(number))
			{
			   outSum = outSum + number;
			}
		});

		$("#birdie_out_sum").val(outSum);

		var totalSum = inSum+outSum;
		$("#birdie_tot").val(totalSum);
		$("#birdies").val(totalSum);
	}

	$('.birdie_in').on("change, keyup" , BIRDIE);
	$(".birdie_out").on("change, keyup" , BIRDIE);

	function PAR()
	{
		var inSum = 0;
		$('.par_in').each(function(){
			var number = GetNumericValue(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#par_in_sum").val(inSum);

		var outSum = 0;
		$('.par_out').each(function(){
			var number = GetNumericValue(this.value);
			if(isInt(number))
			{
			   outSum = outSum + number;
			}
		});

		$("#par_out_sum").val(outSum);

		var totalSum = inSum+outSum;
		$("#par_tot").val(totalSum);
		$("#pars").val(totalSum);
	}

	$('.par_in').on("change, keyup" , PAR);
	$(".par_out").on("change, keyup" ,PAR);

	function BOGEY()
	{
		var inSum = 0;
		$('.bogey_in').each(function(){
			var number = GetNumericValue(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#bogey_in_sum").val(inSum);

		var outSum = 0;
		$('.bogey_out').each(function(){
			var number = GetNumericValue(this.value);
			if(isInt(number))
			{
			   outSum = outSum + number;
			}
		});

		$("#bogey_out_sum").val(outSum);

		var totalSum = inSum+outSum;
		$("#bogey_tot").val(totalSum);
		$("#bogeys").val(totalSum);
	}

	$('.bogey_in').on("change, keyup" , BOGEY);
	$(".bogey_out").on("change, keyup" ,BOGEY);

	function DBLBOGEY()
	{
		var inSum = 0;
		$('.dblbogey_in').each(function(){
			var number = GetNumericValue(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#dblbogey_in_sum").val(inSum);

		var outSum = 0;
		$('.dblbogey_out').each(function(){
			var number = GetNumericValue(this.value);
			if(isInt(number))
			{
			   outSum = outSum + number;
			}
		});

		$("#dblbogey_out_sum").val(outSum);

		var totalSum = inSum+outSum;
		$("#dblbogey_tot").val(totalSum);
		$("#dblbogeys").val(totalSum);
	}

	$('.dblbogey_in').on("change, keyup" , DBLBOGEY);
	$(".dblbogey_out").on("change, keyup" ,DBLBOGEY);

	function OTHER()
	{
		var inSum = 0;
		$('.other_in').each(function(){
			var number = GetNumericValue(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#other_in_sum").val(inSum);

		var outSum = 0;
		$('.other_out').each(function(){
			var number = GetNumericValue(this.value);
			if(isInt(number))
			{
			   outSum = outSum + number;
			}
		});

		$("#other_out_sum").val(outSum);

		var totalSum = inSum+outSum;
		$("#other_tot").val(totalSum);
		$("#others").val(totalSum);
	}

	$('.other_in').on("change, keyup" , OTHER);
	$(".other_out").on("change, keyup" ,OTHER);

	function NogirDistPut1()
	{

	}

	function ParScoring()
	{
		var par3_tot = GetNumericValue(document.getElementById("par3_tot").value);
		var par4_tot = GetNumericValue(document.getElementById("par4_tot").value);
		var par5_tot = GetNumericValue(document.getElementById("par5_tot").value);

		var fir_tot = GetNumericValue(document.getElementById("fir_tot").value);
		var fairways = fir_tot;

		var par3strokes_tot = GetNumericValue(document.getElementById("par3strokes_tot").value);
		var par4strokes_tot = GetNumericValue(document.getElementById("par4strokes_tot").value);
		var par5strokes_tot = GetNumericValue(document.getElementById("par5strokes_tot").value);

		var par3_scoring = (par3strokes_tot / par3_tot).toFixed(2);
		var par4_scoring = (par4strokes_tot / par4_tot).toFixed(2);
		var par5_scoring = (par5strokes_tot / par5_tot).toFixed(2);
		
		$("#par3_scoring").val(par3_scoring);
		$("#par4_scoring").val(par4_scoring);
		$("#par5_scoring").val(par5_scoring);

		$("#fairways").val(fairways);
	}
	$('.par3_in').on("change, keyup" , ParScoring);
	$(".par3_out").on("change, keyup" ,ParScoring);
	$('.par4_in').on("change, keyup" , ParScoring);
	$(".par4_out").on("change, keyup" ,ParScoring);
	$('.par5_in').on("change, keyup" , ParScoring);
	$(".par5_out").on("change, keyup" ,ParScoring);

	$('.par3strokes_in').on("change, keyup" , ParScoring);
	$('.par3strokes_out').on("change, keyup" , ParScoring);
	$('.par4strokes_in').on("change, keyup" , ParScoring);
	$('.par4strokes_out').on("change, keyup" , ParScoring);
	$('.par5strokes_in').on("change, keyup" , ParScoring);
	$('.par5strokes_out').on("change, keyup" , ParScoring);

	$('.fir_in').on("change, keyup" , ParScoring);
	$('.fir_out').on("change, keyup" , ParScoring);

	function FirPercentage()
	{
		var fir_tot = GetNumericValue(document.getElementById("fir_tot").value);
		var fairways = fir_tot;
		var par4_tot = GetNumericValue(document.getElementById("par4_tot").value);
		var par5_tot = GetNumericValue(document.getElementById("par5_tot").value);
		var fir_percentage = (fairways / (par4_tot + par5_tot) * 100).toFixed(0);
		$("#fir_percentage").val(fir_percentage);
	}
	$('.par4_in').on("change, keyup" , FirPercentage);
	$(".par4_out").on("change, keyup" ,FirPercentage);
	$('.par5_in').on("change, keyup" , FirPercentage);
	$(".par5_out").on("change, keyup" ,FirPercentage);
	$('.fir_in').on("change, keyup" , FirPercentage);
	$('.fir_out').on("change, keyup" , FirPercentage);

	function GirPercentage()
	{
		var gir_tot = GetNumericValue(document.getElementById("gir_tot").value);
		var greens = gir_tot;
		var par3_tot = GetNumericValue(document.getElementById("par3_tot").value);
		var par4_tot = GetNumericValue(document.getElementById("par4_tot").value);
		var par5_tot = GetNumericValue(document.getElementById("par5_tot").value);
		var gir_percentage = (greens / ( par3_tot + par4_tot + par5_tot)*100).toFixed(0);
		$("#gir_percentage").val(gir_percentage);
	}
	$('.par3_in').on("change, keyup" , GirPercentage);
	$(".par3_out").on("change, keyup" ,GirPercentage);
	$('.par4_in').on("change, keyup" , GirPercentage);
	$(".par4_out").on("change, keyup" ,GirPercentage);
	$('.par5_in').on("change, keyup" , GirPercentage);
	$(".par5_out").on("change, keyup" ,GirPercentage);
	$('.gir_in').on("change, keyup" , GirPercentage);
	$('.gir_out').on("change, keyup" , GirPercentage);

	function ScramblePercentage()
	{
		var scrambl_opp_tot = GetNumericValue(document.getElementById("scrambl_opp_tot").value);
		var scrambl_sav_tot = GetNumericValue(document.getElementById("scrambl_sav_tot").value);
		var scramble_percentage = ((scrambl_sav_tot/scrambl_opp_tot)*100).toFixed(0);
		$("#scramble_percentage").val(scramble_percentage);
	}
	$('.scrambl_opp_in').on("change, keyup" , ScramblePercentage);
	$(".scrambl_opp_out").on("change, keyup" ,ScramblePercentage);
	$('.scrambl_sav_in').on("change, keyup" , ScramblePercentage);
	$(".scrambl_sav_out").on("change, keyup" ,ScramblePercentage);

	function SandSavPercentage()
	{
		var sand_opp_tot = GetNumericValue(document.getElementById("sand_opp_tot").value);
		var sand_sav_tot = GetNumericValue(document.getElementById("sand_sav_tot").value);
		var sand_sav_percentage = ((sand_sav_tot/sand_opp_tot)*100).toFixed(0);
		$("#sand_sav_percentage").val(sand_sav_percentage);
	}
	$('.sand_opp_in').on("change, keyup" , SandSavPercentage);
	$(".sand_opp_out").on("change, keyup" ,SandSavPercentage);
	$('.sand_sav_in').on("change, keyup" , SandSavPercentage);
	$(".sand_sav_out").on("change, keyup" ,SandSavPercentage);

	function PuttsDivHole()
	{
		var tot_putt_tot = GetNumericValue(document.getElementById("tot_putt_tot").value);
		var total_putts = tot_putt_tot;
		var played_holes_tot = GetNumericValue(document.getElementById("played_holes_tot").value);
		var played_holes = played_holes_tot;
		var putts_div_hole = (total_putts / played_holes).toFixed(2);
		$("#putts_div_hole").val(putts_div_hole);
	}
	$('.tot_putt_in').on("change, keyup" , PuttsDivHole);
	$('.tot_putt_out').on("change, keyup" , PuttsDivHole);
	$('.score_out').on("change, keyup" , PuttsDivHole);
	$('.score_in').on("change, keyup" , PuttsDivHole);

	function AvgScore()
	{
		var score_tot = GetNumericValue(document.getElementById("score_tot").value);
		var hole_rds_18 = GetNumericValue(document.getElementById("hole_rds_18").value);
		var avg_score = (score_tot / hole_rds_18).toFixed(2);
		$("#avg_score").val(avg_score);
	}
	$('.score_out').on("change, keyup" , AvgScore);
	$('.score_in').on("change, keyup" , AvgScore);

	function MakePercentage5()
	{
		var putt_make_5_tot = GetNumericValue(document.getElementById("putt_make_5_tot").value);
		var putt_opp_5_tot = GetNumericValue(document.getElementById("putt_opp_5_tot").value);
		var make_percentage_5 = ((putt_make_5_tot / putt_opp_5_tot)*100).toFixed(0);
		$("#make_percentage_5").val(make_percentage_5);
	}
	$('.putt_make_5_in').on("change, keyup" , MakePercentage5);
	$('.putt_make_5_out').on("change, keyup" , MakePercentage5);
	$('.putt_opp_5_out').on("change, keyup" , MakePercentage5);
	$('.putt_opp_5_in').on("change, keyup" , MakePercentage5);

	function MakePercentage5_9()
	{
		var putt_make_5_9_tot = GetNumericValue(document.getElementById("putt_make_5_9_tot").value);
		var putt_opp_5_9_tot = GetNumericValue(document.getElementById("putt_opp_5_9_tot").value);
		var make_percentage_5_9 = ((putt_make_5_9_tot / putt_opp_5_9_tot)*100).toFixed(0);
		$("#make_percentage_5_9").val(make_percentage_5_9);
	}
	$('.putt_make_5_9_in').on("change, keyup" , MakePercentage5_9);
	$('.putt_make_5_9_out').on("change, keyup" , MakePercentage5_9);
	$('.putt_opp_5_9_out').on("change, keyup" , MakePercentage5_9);
	$('.putt_opp_5_9_in').on("change, keyup" , MakePercentage5_9);

	function MakePercentage10_19()
	{
		var putt_make_10_19_tot = GetNumericValue(document.getElementById("putt_make_10_19_tot").value);
		var putt_opp_10_19_tot = GetNumericValue(document.getElementById("putt_opp_10_19_tot").value);
		var make_percentage_10_19 = ((putt_make_10_19_tot / putt_opp_10_19_tot)*100).toFixed(0);
		$("#make_percentage_10_19").val(make_percentage_10_19);
	}
	$('.putt_make_10_19_in').on("change, keyup" , MakePercentage10_19);
	$('.putt_make_10_19_out').on("change, keyup" , MakePercentage10_19);
	$('.putt_opp_10_19_out').on("change, keyup" , MakePercentage10_19);
	$('.putt_opp_10_19_in').on("change, keyup" , MakePercentage10_19);

	function MakePercentage20_29()
	{
		var putt_make_20_29_tot = GetNumericValue(document.getElementById("putt_make_20_29_tot").value);
		var putt_opp_20_29_tot = GetNumericValue(document.getElementById("putt_opp_20_29_tot").value);
		var make_percentage_20_29 = ((putt_make_20_29_tot / putt_opp_20_29_tot)*100).toFixed(0);
		$("#make_percentage_20_29").val(make_percentage_20_29);
	}
	$('.putt_make_20_29_in').on("change, keyup" , MakePercentage20_29);
	$('.putt_make_20_29_out').on("change, keyup" , MakePercentage20_29);
	$('.putt_opp_20_29_out').on("change, keyup" , MakePercentage20_29);
	$('.putt_opp_20_29_in').on("change, keyup" , MakePercentage20_29);

	function MakePercentage30()
	{
		var putt_make_30_tot = GetNumericValue(document.getElementById("putt_make_30_tot").value);
		var putt_opp_30_tot = GetNumericValue(document.getElementById("putt_opp_30_tot").value);
		var make_percentage_30 = ((putt_make_30_tot / putt_opp_30_tot)*100).toFixed(0);
		$("#make_percentage_30").val(make_percentage_30);
	}
	$('.putt_make_30_in').on("change, keyup" , MakePercentage30);
	$('.putt_make_30_out').on("change, keyup" , MakePercentage30);
	$('.putt_opp_30_out').on("change, keyup" , MakePercentage30);
	$('.putt_opp_30_in').on("change, keyup" , MakePercentage30);
	


	function CalculateGirDistPutt1Tot()
	{
		var girOutList = [];
		$('.gir_out').each(function(){
			girOutList.push( $(this).val() );
		});

		var put1OutList = [];
		$('.putt_1_out').each(function(){
			put1OutList.push( $(this).val() );
		});
		
		var girDtistriBuitionOut = 0;
		var totalGirOutHole = 0;
		for(var index=0;index<9;index++)
		{
			var girOutValue = girOutList[index];
			var putt1OutValue = put1OutList[index];

			if(girOutValue=="1" && jQuery.isNumeric(putt1OutValue))
				girDtistriBuitionOut = girDtistriBuitionOut + GetNumericValue(putt1OutValue);
			if(jQuery.isNumeric(girOutValue))
				totalGirOutHole = totalGirOutHole + GetNumericValue(girOutValue);
			
		}


		var girInList = [];
		$('.gir_in').each(function(){
			girInList.push( $(this).val() );
		});

		var put1InList = [];
		$('.putt_1_in').each(function(){
			put1InList.push( $(this).val() );
		});

		var girDtistriBuitionIn = 0;
		var totalGirInHole = 0;
		for(var index=0;index<9;index++)
		{
			var girInValue = girInList[index];
			var putt1InValue = put1InList[index];

			if(girInValue=="1" && jQuery.isNumeric(putt1InValue))
				girDtistriBuitionIn = girDtistriBuitionIn + GetNumericValue(putt1InValue);
				
			if(jQuery.isNumeric(girInValue))
				totalGirInHole = totalGirInHole + GetNumericValue(girInValue);
		}

		var girDtistriBuitionTot = girDtistriBuitionOut + girDtistriBuitionIn;

		//calculate 2nd one
		var averageGirOut;
		if(totalGirOutHole==0)
			averageGirOut = 0;
		else
			averageGirOut = Math.round( girDtistriBuitionOut * 10 /totalGirOutHole ) /10;

		var averageGirIn;
		if(totalGirInHole==0)
			averageGirIn = 0;
		else
			averageGirIn = Math.round( girDtistriBuitionIn * 10 /totalGirInHole ) /10;

		var totalGirHoleTot = totalGirInHole+totalGirOutHole;
		var averageGirTot;    				
		if(totalGirHoleTot==0)
			averageGirTot = 0;
		else
			averageGirTot = Math.round( girDtistriBuitionTot * 10 /totalGirHoleTot ) /10;

		$("#gir_dist_putt_1_out_sum").val(girDtistriBuitionOut);
		$("#gir_dist_putt_1_in_sum").val(girDtistriBuitionIn);
		$("#gir_dist_putt_1_tot").val(girDtistriBuitionTot);


		$("#avg_dist_hol_gir_out").val(averageGirOut);
		$("#avg_dist_hol_gir_in").val(averageGirIn);
		$("#avg_dist_hol_gir_tot").val(averageGirTot);

	}

	$('.gir_out').on("change, keyup" , CalculateGirDistPutt1Tot);
	$('.putt_1_out').on("change, keyup" , CalculateGirDistPutt1Tot);
	$('.gir_in').on("change, keyup" , CalculateGirDistPutt1Tot);
	$('.putt_1_in').on("change, keyup" , CalculateGirDistPutt1Tot);

	function CalculateDistAptPut1()
	{
		var put1OutList = [];
		$('.putt_1_out').each(function(){
			put1OutList.push( $(this).val() );
		});

		var put2OutList = [];
		$('.putt_2_out').each(function(){
			put2OutList.push( $(this).val() );
		});

		var put2OutSum = 0;
		for(var index=0;index<9;index++)
		{
			var putt1Out = put1OutList[index];
			var putt2Out = put2OutList[index];

			if( jQuery.isNumeric(putt1Out) && jQuery.isNumeric(putt2Out) )
			{
				if( GetNumericValue(putt1Out)>0 )
				{
					put2OutSum = put2OutSum + GetNumericValue(putt2Out);
				}
			}
		}

		var put1InList = [];
		$('.putt_1_in').each(function(){
			put1InList.push( $(this).val() );
		});

		var put2InList = [];
		$('.putt_2_in').each(function(){
			put2InList.push( $(this).val() );
		});

		var put2InSum = 0;
		for(var index=0;index<9;index++)
		{
			var putt1In = put1InList[index];
			var putt2In = put2InList[index];

			if( jQuery.isNumeric(putt1In) && jQuery.isNumeric(putt2In) )
			{
				if( GetNumericValue(putt1In)>0 )
				{
					put2InSum = put2InSum + GetNumericValue(putt2In);
				}
			}
		}

		var put2Sumtot = put2OutSum + put2InSum;
		$("#dist_aft_putt_1_out_sum").val(put2OutSum);
		$("#dist_aft_putt_1_in_sum").val(put2InSum);
		$("#dist_aft_putt_1_tot").val( put2Sumtot );

		/////////////check putt2 total number
		var numPut2Out = 0;
		var numPut2In = 0;
		for(var index=0;index<9;index++)
		{
			if( put2OutList[index].length>0 )
				numPut2Out++;
			if( put2InList[index].length>0 )
				numPut2In++;
		}

		var numPut2Tot = numPut2Out + numPut2In;
		$("#num_putt_2_out_sum").val(numPut2Out);
		$("#num_putt_2_in_sum").val(numPut2In);
		$("#num_putt_2_tot").val(numPut2Tot);

		////////////////check average
		var averagePut2Out;
		if(numPut2Out==0)
			averagePut2Out = 0;
		else
			averagePut2Out = Math.round( put2OutSum * 10 / numPut2Out) / 10;

		var averagePut2In;
		if(numPut2In==0)
			averagePut2In = 0;
		else
			averagePut2In = Math.round( put2InSum * 10 /numPut2In) / 10;

		var averagePut2Tot;
		if( numPut2Tot==0 )
			averagePut2Tot = 0;
		else
			averagePut2Tot = Math.round( put2Sumtot * 10 /numPut2Tot) / 10;

		$("#avg_dist_hole_putt1_out_sum").val(averagePut2Out);
		$("#avg_dist_hole_putt1_in_sum").val(averagePut2In);
		$("#avg_dist_hole_putt1_tot").val(averagePut2Tot);
	}

	$('.putt_1_out').on("change, keyup" , CalculateDistAptPut1);
	$('.putt_2_out').on("change, keyup" , CalculateDistAptPut1);
	$('.putt_1_in').on("change, keyup" , CalculateDistAptPut1);
	$('.putt_2_in').on("change, keyup" , CalculateDistAptPut1);

	function CountPutt3()
	{
		var numPut3Out = 0;
		$('.putt_3_out').each(function(){
			if( $(this).val().length != 0 )
				numPut3Out++;
		});	

		var numPut3In = 0;
		$('.putt_3_in').each(function(){
			if( $(this).val().length != 0 )
				numPut3In++;
		});	
		var numPut3Tot = numPut3Out+numPut3In;	
		$("#num_putt_3_out_sum").val(numPut3Out);
		$("#num_putt_3_in_sum").val(numPut3In);
		$("#num_putt_3_tot").val(numPut3Tot);

	}
	$('.putt_3_out').on("change, keyup" , CountPutt3);
	$('.putt_3_in').on("change, keyup" , CountPutt3);

	function CalculateAllPuttRows()
	{
		var put1OutList = [];
		$('.putt_1_out').each(function(){
			put1OutList.push( $(this).val() );
		});

		var put2OutList = [];
		$('.putt_2_out').each(function(){
			put2OutList.push( $(this).val() );
		});

		var put3OutList = [];
		$('.putt_3_out').each(function(){
			put3OutList.push( $(this).val() );
		});

		var totalPutToOutSum = 0;
		for(var index=0; index<9; index++)
		{
			var put1Out = put1OutList[index];
			var put2Out = put2OutList[index];
			var put3Out = put3OutList[index];

			var itemVal;
			if( put1Out == "" )
				itemVal = 0;
			else if( put2Out == "" )
				itemVal = 1;
			else if( put3Out == "" )
				itemVal = 2;
			else
				itemVal = 3;
			$("#tot_putt_out_"+index).val( itemVal );
			totalPutToOutSum = totalPutToOutSum + itemVal;
		}


		var put1InList = [];
		$('.putt_1_in').each(function(){
			put1InList.push( $(this).val() );
		});

		var put2InList = [];
		$('.putt_2_in').each(function(){
			put2InList.push( $(this).val() );
		});

		var put3InList = [];
		$('.putt_3_in').each(function(){
			put3InList.push( $(this).val() );
		});

		var totalPutTotInSum = 0;
		for(var index=0; index<9; index++)
		{
			var put1In = put1InList[index];
			var put2In = put2InList[index];
			var put3In = put3InList[index];

			var itemVal;
			if( put1In == "" )
				itemVal = 0;
			else if( put2In == "" )
				itemVal = 1;
			else if( put3In == "" )
				itemVal = 2;
			else
				itemVal = 3;
			$("#tot_putt_in_"+index).val(itemVal);
			totalPutTotInSum = totalPutTotInSum + itemVal;
		}

		var totalPutTotTot = totalPutToOutSum + totalPutTotInSum;
		
		$("#tot_putt_out_sum").val(totalPutToOutSum);
		$("#tot_putt_in_sum").val(totalPutTotInSum);
		$("#tot_putt_tot").val(totalPutTotTot);
		$("#total_putts").val(totalPutTotTot);
		/////////////tot_ft_made
		var totalFtMadeOutSum = 0;
		for(var index=0; index<9; index++)
		{
			var put1Out = put1OutList[index];
			var put2Out = put2OutList[index];
			var put3Out = put3OutList[index];

			var itemVal;
			if( put1Out == "" )
				itemVal = 0;
			else if( put2Out == "" )
				itemVal = GetNumericValue( put1Out );
			else if( put3Out == "" )
				itemVal = GetNumericValue( put2Out );
			else
				itemVal = GetNumericValue( put3Out );
			$("#tot_ft_made_out_"+index).val( itemVal );
			totalFtMadeOutSum = totalFtMadeOutSum + itemVal;
		}

		var totalFtMadeInSum = 0;
		for(var index=0; index<9; index++)
		{
			var put1In = put1InList[index];
			var put2In = put2InList[index];
			var put3In = put3InList[index];

			var itemVal;
			if( put1In == "" )
				itemVal = 0;
			else if( put2In == "" )
				itemVal = GetNumericValue( put1In);
			else if( put3In == "" )
				itemVal = GetNumericValue(put2In);
			else
				itemVal = GetNumericValue(put3In);
			$("#tot_ft_made_in_"+index).val(itemVal);
			totalFtMadeInSum = totalFtMadeInSum + itemVal;
		}
		var totalFtMadeTot = totalFtMadeInSum + totalFtMadeOutSum;
		$("#tot_ft_made_out_sum").val(totalFtMadeOutSum);
		$("#tot_ft_made_in_sum").val(totalFtMadeInSum);
		$("#tot_ft_made_tot").val(totalFtMadeTot);

		//////////////PUTT_OPP_<5
		var totalputOpp5OutSum = 0;
		for(var index=0; index<9; index++)
		{
			var put1Out = isNaN(put1OutList[index])?0:GetNumericValue(put1OutList[index]);
			var put2Out = isNaN(put2OutList[index])?0:GetNumericValue(put2OutList[index]);
			var put3Out = isNaN(put3OutList[index])?0:GetNumericValue(put3OutList[index]);

			var countItem = 0;
			if( put1Out>0  && put1Out<5 )
				countItem++;
			if( put2Out>0  && put2Out<5 )
				countItem++;
			if( put3Out>0  && put3Out<5 )
				countItem++;
			$("#putt_opp_5_out_"+index).val( countItem );
			totalputOpp5OutSum = totalputOpp5OutSum + countItem;
		}

		var totalputOpp5InSum = 0;
		for(var index=0; index<9; index++)
		{
			var put1In = isNaN(put1InList[index])?0:GetNumericValue(put1InList[index]);
			var put2In = isNaN(put2InList[index])?0:GetNumericValue(put2InList[index]);
			var put3In = isNaN(put3InList[index])?0:GetNumericValue(put3InList[index]);

			var countItem = 0;
			if( put1In>0  && put1In<5 )
				countItem++;
			if( put2In>0  && put2In<5 )
				countItem++;
			if( put3In>0  && put3In<5 )
				countItem++;
			$("#putt_opp_5_in_"+index).val( countItem );
			totalputOpp5InSum = totalputOpp5InSum + countItem;
		}
		var totalputOpp5Tot = totalputOpp5OutSum+totalputOpp5InSum;
		$("#putt_opp_5_out_sum").val(totalputOpp5OutSum);
		$("#putt_opp_5_in_sum").val(totalputOpp5InSum);
		$("#putt_opp_5_tot").val(totalputOpp5Tot);
		$("#putt_opp_5_equation").val(totalputOpp5Tot);
		
		/////PUTT_MAKE_<5
		
		var totalputMake5OutSum = 0;
		for(var index=0; index<9; index++)
		{
			var put1Out = isNaN(put1OutList[index])?0:GetNumericValue(put1OutList[index]);
			var put2Out = isNaN(put2OutList[index])?0:GetNumericValue(put2OutList[index]);
			var put3Out = isNaN(put3OutList[index])?0:GetNumericValue(put3OutList[index]);

			var calculatedValue;
			if(put1Out )
			{ 
				if(put2Out==0)
				{
					if( put1Out<5 )
						calculatedValue = 1;
					else 
						calculatedValue = 0;
				}
				else
				{
					if(put3Out==0)
					{
						if( put2Out<5 )
							calculatedValue = 1;
						else 
							calculatedValue = 0;
					}
					else
					{
						if( put3Out<5 )
							calculatedValue = 1;
						else 
							calculatedValue = 0;
					}
				}
			}
			else
				calculatedValue = 0;
			$("#putt_make_5_out_" + index).val(calculatedValue);
			totalputMake5OutSum = totalputMake5OutSum+calculatedValue
		}

		var totalputMake5InSum = 0;
		for(var index=0; index<9; index++)
		{
			var put1In = isNaN(put1InList[index])?0:GetNumericValue(put1InList[index]);
			var put2In = isNaN(put2InList[index])?0:GetNumericValue(put2InList[index]);
			var put3In = isNaN(put3InList[index])?0:GetNumericValue(put3InList[index]);

			var calculatedValue;
			if(put1In!=0 )
			{ 
				if( put2In==0)
				{
					if( put1In<5 )
						calculatedValue = 1;
					else 
						calculatedValue = 0;
				}
				else
				{
					if( put3In==0 )
					{
						if( put2In<5 )
							calculatedValue = 1;
						else 
							calculatedValue = 0;
					}
					else
					{
						if( put3In<5 )
							calculatedValue = 1;
						else 
							calculatedValue = 0;
					}
				}
			}
			else
				calculatedValue = 0;
			$("#putt_make_5_in_" + index).val(calculatedValue);
			totalputMake5InSum = totalputMake5InSum + calculatedValue
		}
		
		var totalputMake5Tot = totalputMake5OutSum + totalputMake5InSum;
		$("#putt_make_5_out_sum").val(totalputMake5OutSum);
		$("#putt_make_5_in_sum").val(totalputMake5InSum);
		$("#putt_make_5_tot").val(totalputMake5Tot);
		$("#putt_make_5_equation").val(totalputMake5Tot);

		////PUTT_OPP_5-9	
		var totalputOpp59OutSum = 0;
		for(var index=0; index<9; index++)
		{
			var put1Out = isNaN(put1OutList[index])?0:GetNumericValue(put1OutList[index]);
			var put2Out = isNaN(put2OutList[index])?0:GetNumericValue(put2OutList[index]);
			var put3Out = isNaN(put3OutList[index])?0:GetNumericValue(put3OutList[index]);

			var countItem = 0;
			if( put1Out>=5  && put1Out<10 )
				countItem++;
			if( put2Out>=5  && put2Out<10 )
				countItem++;
			if( put3Out>=5  && put3Out<10 )
				countItem++;
			$("#putt_opp_5_9_out_"+index).val( countItem );
			totalputOpp59OutSum = totalputOpp59OutSum + countItem;
		}

		var totalputOpp59InSum = 0;
		for(var index=0; index<9; index++)
		{
			var put1In = isNaN(put1InList[index])?0:GetNumericValue(put1InList[index]);
			var put2In = isNaN(put2InList[index])?0:GetNumericValue(put2InList[index]);
			var put3In = isNaN(put3InList[index])?0:GetNumericValue(put3InList[index]);

			var countItem = 0;
			if( put1In>=5 && put1In<10 )
				countItem++;
			if( put2In>=5 && put2In<10 )
				countItem++;
			if( put3In>=5 && put3In<10 )
				countItem++;

			totalputOpp59InSum = totalputOpp59InSum + countItem;
			$("#putt_opp_5_9_in_"+index).val( countItem );
		}
		var totalputOpp59Tot = totalputOpp59OutSum + totalputOpp59InSum;
		$("#putt_opp_5_9_out_sum").val(totalputOpp59OutSum);
		$("#putt_opp_5_9_in_sum").val(totalputOpp59InSum);
		$("#putt_opp_5_9_tot").val(totalputOpp59Tot);
		$("#putt_opp_5_9_equation").val(totalputOpp59Tot);

		///////PUTT_MAKE_5-9
		var totalputMake59OutSum = 0;
		for(var index=0; index<9; index++)
		{
			var put1Out = isNaN(put1OutList[index])?0:GetNumericValue(put1OutList[index]);
			var put2Out = isNaN(put2OutList[index])?0:GetNumericValue(put2OutList[index]);
			var put3Out = isNaN(put3OutList[index])?0:GetNumericValue(put3OutList[index]);

			var calculatedValue;
			if(put1Out!=0 )
			{ 
				if(put2Out==0)
				{
					if( put1Out>=5 && put1Out<10 )
						calculatedValue = 1;
					else 
						calculatedValue = 0;
				}
				else
				{
					if( put3Out==0)
					{
						if( put2Out>=5 && put2Out<10)
							calculatedValue = 1;
						else 
							calculatedValue = 0;
					}
					else
					{
						if( put3Out>=5 && put3Out<10)
							calculatedValue = 1;
						else 
							calculatedValue = 0;
					}
				}
			}
			else
				calculatedValue = 0;
			$("#putt_make_5_9_out_" + index).val(calculatedValue);
			totalputMake59OutSum = totalputMake59OutSum+calculatedValue
		}

		var totalputMake59InSum = 0;
		for(var index=0; index<9; index++)
		{
			var put1In = isNaN(put1InList[index])?0:GetNumericValue(put1InList[index]);
			var put2In = isNaN(put2InList[index])?0:GetNumericValue(put2InList[index]);
			var put3In = isNaN(put3InList[index])?0:GetNumericValue(put3InList[index]);

			var calculatedValue;
			if( put1In!=0 )
			{ 
				if( put2In==0)
				{
					if( put1In>=5 && put1In<10)
						calculatedValue = 1;
					else 
						calculatedValue = 0;
				}
				else
				{
					if( put3In==0 )
					{
						if( put2In >=5 && put2In<10  )
							calculatedValue = 1;
						else 
							calculatedValue = 0;
					}
					else
					{
						if( put3In>=5 && put3In<10 )
							calculatedValue = 1;
						else 
							calculatedValue = 0;
					}
				}
			}
			else
				calculatedValue = 0;
			$("#putt_make_5_9_in_" + index).val(calculatedValue);
			totalputMake59InSum = totalputMake59InSum + calculatedValue
		}
		var totalputMake59Tot = totalputMake59InSum + totalputMake59OutSum;
		$("#putt_make_5_9_out_sum").val(totalputMake59OutSum);
		$("#putt_make_5_9_in_sum").val(totalputMake59InSum);
		$("#putt_make_5_9_tot").val(totalputMake59Tot);
		$("#putt_make_5_9_equation").val(totalputMake59Tot);

		//PUTT_OPP_10-19
		debugger;
		var totalputOpp1019OutSum = 0;
		for(var index=0; index<9; index++)
		{
			var put1Out = isNaN(put1OutList[index])?0:GetNumericValue(put1OutList[index]);
			var put2Out = isNaN(put2OutList[index])?0:GetNumericValue(put2OutList[index]);
			var put3Out = isNaN(put3OutList[index])?0:GetNumericValue(put3OutList[index]);

			var countItem = 0;
			if( put1Out>=10  && put1Out<20 )
				countItem++;
			if( put2Out>=10  && put2Out<20 )
				countItem++;
			if( put3Out>=10  && put3Out<20 )
				countItem++;
			$("#putt_opp_10_19_out_"+index).val( countItem );
			totalputOpp1019OutSum = totalputOpp1019OutSum + countItem;
		}

		var totalputOpp1019InSum = 0;
		for(var index=0; index<9; index++)
		{
			var put1In = isNaN(put1InList[index])?0:GetNumericValue(put1InList[index]);
			var put2In = isNaN(put2InList[index])?0:GetNumericValue(put2InList[index]);
			var put3In = isNaN(put3InList[index])?0:GetNumericValue(put3InList[index]);

			var countItem = 0;
			if( put1In>=10 && put1In<20 )
				countItem++;
			if( put2In>=10 && put2In<20 )
				countItem++;
			if( put3In>=10 && put3In<20 )
				countItem++;

			totalputOpp1019InSum = totalputOpp1019InSum + countItem;
			$("#putt_opp_10_19_in_"+index).val( countItem );
		}
		var totalputOpp1019Tot = totalputOpp1019OutSum + totalputOpp1019InSum;
		$("#putt_opp_10_19_out_sum").val(totalputOpp1019OutSum);
		$("#putt_opp_10_19_in_sum").val(totalputOpp1019InSum);
		$("#putt_opp_10_19_tot").val(totalputOpp1019Tot);
		$("#putt_opp_10_19_equation").val(totalputOpp1019Tot);

		///////PUTT_MAKE_10-19
		var totalputMake1019OutSum = 0;
		for(var index=0; index<9; index++)
		{
			var put1Out = isNaN(put1OutList[index])?0:GetNumericValue(put1OutList[index]);
			var put2Out = isNaN(put2OutList[index])?0:GetNumericValue(put2OutList[index]);
			var put3Out = isNaN(put3OutList[index])?0:GetNumericValue(put3OutList[index]);

			var calculatedValue;
			if(put1Out!=0 )
			{ 
				if(put2Out==0)
				{
					if( put1Out>=10 && put1Out<20 )
						calculatedValue = 1;
					else 
						calculatedValue = 0;
				}
				else
				{
					if( put3Out==0)
					{
						if( put2Out>=10 && put2Out<20)
							calculatedValue = 1;
						else 
							calculatedValue = 0;
					}
					else
					{
						if( put3Out>=10 && put3Out<20)
							calculatedValue = 1;
						else 
							calculatedValue = 0;
					}
				}
			}
			else
				calculatedValue = 0;
			$("#putt_make_10_19_out_" + index).val(calculatedValue);
			totalputMake1019OutSum = totalputMake1019OutSum+calculatedValue
		}

		var totalputMake1019InSum = 0;
		for(var index=0; index<9; index++)
		{
			var put1In = isNaN(put1InList[index])?0:GetNumericValue(put1InList[index]);
			var put2In = isNaN(put2InList[index])?0:GetNumericValue(put2InList[index]);
			var put3In = isNaN(put3InList[index])?0:GetNumericValue(put3InList[index]);

			var calculatedValue;
			if( put1In!=0 )
			{ 
				if( put2In==0)
				{
					if( put1In>=10 && put1In<20)
						calculatedValue = 1;
					else 
						calculatedValue = 0;
				}
				else
				{
					if( put3In==0 )
					{
						if( put2In >=10 && put2In<20  )
							calculatedValue = 1;
						else 
							calculatedValue = 0;
					}
					else
					{
						if( put3In>=10 && put3In<20 )
							calculatedValue = 1;
						else 
							calculatedValue = 0;
					}
				}
			}
			else
				calculatedValue = 0;
			$("#putt_make_10_19_in_" + index).val(calculatedValue);
			totalputMake1019InSum = totalputMake1019InSum + calculatedValue
		}
		var totalputMake1019Tot = totalputMake1019InSum + totalputMake1019OutSum;
		$("#putt_make_10_19_out_sum").val(totalputMake1019OutSum);
		$("#putt_make_10_19_in_sum").val(totalputMake1019InSum);
		$("#putt_make_10_19_tot").val(totalputMake1019Tot);
		$("#putt_make_10_19_equation").val(totalputMake1019Tot);

		//////PUTT_OPP_20-29
		var totalputOpp2029OutSum = 0;
		for(var index=0; index<9; index++)
		{
			var put1Out = isNaN(put1OutList[index])?0:GetNumericValue(put1OutList[index]);
			var put2Out = isNaN(put2OutList[index])?0:GetNumericValue(put2OutList[index]);
			var put3Out = isNaN(put3OutList[index])?0:GetNumericValue(put3OutList[index]);

			var countItem = 0;
			if( put1Out>=20  && put1Out<30 )
				countItem++;
			if( put2Out>=20  && put2Out<30 )
				countItem++;
			if( put3Out>=20  && put3Out<30 )
				countItem++;
			$("#putt_opp_20_29_out_"+index).val( countItem );
			totalputOpp2029OutSum = totalputOpp2029OutSum + countItem;
		}

		var totalputOpp2029InSum = 0;
		for(var index=0; index<9; index++)
		{
			var put1In = isNaN(put1InList[index])?0:GetNumericValue(put1InList[index]);
			var put2In = isNaN(put2InList[index])?0:GetNumericValue(put2InList[index]);
			var put3In = isNaN(put3InList[index])?0:GetNumericValue(put3InList[index]);

			var countItem = 0;
			if( put1In>=20 && put1In<30 )
				countItem++;
			if( put2In>=20 && put2In<30 )
				countItem++;
			if( put3In>=20 && put3In<30 )
				countItem++;

			totalputOpp2029InSum = totalputOpp2029InSum + countItem;
			$("#putt_opp_20_29_in_"+index).val( countItem );
		}
		var totalputOpp2029Tot = totalputOpp2029OutSum + totalputOpp2029InSum;
		$("#putt_opp_20_29_out_sum").val(totalputOpp2029OutSum);
		$("#putt_opp_20_29_in_sum").val(totalputOpp2029InSum);
		$("#putt_opp_20_29_tot").val(totalputOpp2029Tot);
		$("#putt_opp_20_29_equation").val(totalputOpp2029Tot);

		////////////PUTT_MAKE_20-29
		var totalputMake2029OutSum = 0;
		for(var index=0; index<9; index++)
		{
			var put1Out = isNaN(put1OutList[index])?0:GetNumericValue(put1OutList[index]);
			var put2Out = isNaN(put2OutList[index])?0:GetNumericValue(put2OutList[index]);
			var put3Out = isNaN(put3OutList[index])?0:GetNumericValue(put3OutList[index]);

			var calculatedValue;
			if(put1Out!=0 )
			{ 
				if(put2Out==0)
				{
					if( put1Out>=20 && put1Out<30 )
						calculatedValue = 1;
					else 
						calculatedValue = 0;
				}
				else
				{
					if( put3Out==0)
					{
						if( put2Out>=20 && put2Out<30)
							calculatedValue = 1;
						else 
							calculatedValue = 0;
					}
					else
					{
						if( put3Out>=20 && put3Out<30)
							calculatedValue = 1;
						else 
							calculatedValue = 0;
					}
				}
			}
			else
				calculatedValue = 0;
			$("#putt_make_20_29_out_" + index).val(calculatedValue);
			totalputMake2029OutSum = totalputMake2029OutSum+calculatedValue
		}

		var totalputMake2029InSum = 0;
		for(var index=0; index<9; index++)
		{
			var put1In = isNaN(put1InList[index])?0:GetNumericValue(put1InList[index]);
			var put2In = isNaN(put2InList[index])?0:GetNumericValue(put2InList[index]);
			var put3In = isNaN(put3InList[index])?0:GetNumericValue(put3InList[index]);

			var calculatedValue;
			if( put1In!=0 )
			{ 
				if( put2In==0)
				{
					if( put1In>=20 && put1In<30)
						calculatedValue = 1;
					else 
						calculatedValue = 0;
				}
				else
				{
					if( put3In==0 )
					{
						if( put2In >=20 && put2In<30  )
							calculatedValue = 1;
						else 
							calculatedValue = 0;
					}
					else
					{
						if( put3In>=20 && put3In<30 )
							calculatedValue = 1;
						else 
							calculatedValue = 0;
					}
				}
			}
			else
				calculatedValue = 0;
			$("#putt_make_20_29_in_" + index).val(calculatedValue);
			totalputMake2029InSum = totalputMake2029InSum + calculatedValue
		}
		var totalputMake2029Tot = totalputMake2029InSum + totalputMake2029OutSum;
		$("#putt_make_20_29_out_sum").val(totalputMake2029OutSum);
		$("#putt_make_20_29_in_sum").val(totalputMake2029InSum);
		$("#putt_make_20_29_tot").val(totalputMake2029Tot);
		$("#putt_make_20_29_equation").val(totalputMake2029Tot);

		//////////PUTT_OPP_30+
		var totalputOpp30OutSum = 0;
		for(var index=0; index<9; index++)
		{
			var put1Out = isNaN(put1OutList[index])?0:GetNumericValue(put1OutList[index]);
			var put2Out = isNaN(put2OutList[index])?0:GetNumericValue(put2OutList[index]);
			var put3Out = isNaN(put3OutList[index])?0:GetNumericValue(put3OutList[index]);

			var countItem = 0;
			if( put1Out>=30 && put1Out<=100 )
				countItem++;
			if( put2Out>=30 && put2Out<=100)
				countItem++;
			if( put3Out>=30 && put3Out<=30 )
				countItem++;
			$("#putt_opp_30_out_"+index).val( countItem );
			totalputOpp30OutSum = totalputOpp30OutSum + countItem;
		}

		var totalputOpp30InSum = 0;
		for(var index=0; index<9; index++)
		{
			var put1In = isNaN(put1InList[index])?0:GetNumericValue(put1InList[index]);
			var put2In = isNaN(put2InList[index])?0:GetNumericValue(put2InList[index]);
			var put3In = isNaN(put3InList[index])?0:GetNumericValue(put3InList[index]);

			var countItem = 0;
			if( put1In>=30 && put1In<100 )
				countItem++;
			if( put2In>=30 && put2In<100 )
				countItem++;
			if( put3In>=30 && put3In<100 )
				countItem++;

			totalputOpp30InSum = totalputOpp30InSum + countItem;
			$("#putt_opp_30_in_"+index).val( countItem );
		}
		var totalputOpp30Tot = totalputOpp30OutSum + totalputOpp30InSum;
		$("#putt_opp_30_out_sum").val(totalputOpp30OutSum);
		$("#putt_opp_30_in_sum").val(totalputOpp30InSum);
		$("#putt_opp_30_tot").val(totalputOpp30Tot);
		$("#putt_opp_30_equation").val(totalputOpp30Tot);

		////PUTT_MAKE_30+
		var totalputMake30OutSum = 0;
		for(var index=0; index<9; index++)
		{
			var put1Out = isNaN(put1OutList[index])?0:GetNumericValue(put1OutList[index]);
			var put2Out = isNaN(put2OutList[index])?0:GetNumericValue(put2OutList[index]);
			var put3Out = isNaN(put3OutList[index])?0:GetNumericValue(put3OutList[index]);

			var calculatedValue;
			if(put1Out!=0 )
			{ 
				if(put2Out==0)
				{
					if( put1Out>=30 && put1Out<100 )
						calculatedValue = 1;
					else 
						calculatedValue = 0;
				}
				else
				{
					if( put3Out==0)
					{
						if( put2Out>=30 && put2Out<100)
							calculatedValue = 1;
						else 
							calculatedValue = 0;
					}
					else
					{
						if( put3Out>=30 && put3Out<100)
							calculatedValue = 1;
						else 
							calculatedValue = 0;
					}
				}
			}
			else
				calculatedValue = 0;
			$("#putt_make_30_out_" + index).val(calculatedValue);
			totalputMake30OutSum = totalputMake30OutSum+calculatedValue
		}

		var totalputMake30InSum = 0;
		for(var index=0; index<9; index++)
		{
			var put1In = isNaN(put1InList[index])?0:GetNumericValue(put1InList[index]);
			var put2In = isNaN(put2InList[index])?0:GetNumericValue(put2InList[index]);
			var put3In = isNaN(put3InList[index])?0:GetNumericValue(put3InList[index]);

			var calculatedValue;
			if( put1In!=0 )
			{ 
				if( put2In==0)
				{
					if( put1In>=30 && put1In<100)
						calculatedValue = 1;
					else  
						calculatedValue = 0;
				}
				else
				{
					if( put3In==0 )
					{
						if( put2In >=30 && put2In<100  )
							calculatedValue = 1;
						else 
							calculatedValue = 0;
					}
					else
					{
						if( put3In>=30 && put3In<100 )
							calculatedValue = 1;
						else 
							calculatedValue = 0;
					}
				}
			}
			else
				calculatedValue = 0;
			$("#putt_make_30_in_" + index).val(calculatedValue);
			totalputMake30InSum = totalputMake30InSum + calculatedValue
		}
		var totalputMake30InTot = totalputMake30InSum + totalputMake30OutSum;
		$("#putt_make_30_out_sum").val(totalputMake30OutSum);
		$("#putt_make_30_in_sum").val(totalputMake30InSum);
		$("#putt_make_30_tot").val(totalputMake30InTot);
		$("#putt_make_30_equation").val(totalputMake30InTot);		
	}

	$('.putt_1_out').on("change, keyup" , CalculateAllPuttRows);
	$('.putt_1_in').on("change, keyup" , CalculateAllPuttRows);
	$('.putt_2_out').on("change, keyup" , CalculateAllPuttRows);
	$('.putt_2_in').on("change, keyup" , CalculateAllPuttRows);
	$('.putt_3_out').on("change, keyup" , CalculateAllPuttRows);
	$('.putt_3_in').on("change, keyup" , CalculateAllPuttRows);


	function CalculateNoGirDistPutt1()
	{
		var girOutList = [];
		$('.gir_out').each(function(){
			girOutList.push( $(this).val() );
		});

		var put1OutList = [];
		$('.putt_1_out').each(function(){
			put1OutList.push( $(this).val() );
		});
		
		var girDtistriBuitionOut = 0;
		var totalGirOutHole = 0;
		for(var index=0;index<9;index++)
		{
			var girOutValue = girOutList[index];
			var putt1OutValue = put1OutList[index];

			if(jQuery.isNumeric(girOutValue) && GetNumericValue(girOutValue)==0 )
			{
				if( jQuery.isNumeric(putt1OutValue) )
					girDtistriBuitionOut = girDtistriBuitionOut + GetNumericValue(putt1OutValue);
				totalGirOutHole++;
			}
				
		}


		var girInList = [];
		$('.gir_in').each(function(){
			girInList.push( $(this).val() );
		});

		var put1InList = [];
		$('.putt_1_in').each(function(){
			put1InList.push( $(this).val() );
		});

		var girDtistriBuitionIn = 0;
		var totalGirInHole = 0;
		for(var index=0;index<9;index++)
		{
			var girInValue = girInList[index];
			var putt1InValue = put1InList[index];

			if(jQuery.isNumeric(girInValue) && GetNumericValue(girInValue)==0 )
			{
				if( jQuery.isNumeric(putt1InValue) )
					girDtistriBuitionIn = girDtistriBuitionIn + GetNumericValue(putt1InValue);
				totalGirInHole++;
			}
		}

		var girDtistriBuitionTot = girDtistriBuitionOut + girDtistriBuitionIn;
		$("#nogir_dist_putt_1_out_sum").val(girDtistriBuitionOut)
		$("#nogir_dist_putt_1_in_sum").val(girDtistriBuitionIn)
		$("#nogir_dist_putt_1_tot").val(girDtistriBuitionTot)
		///////////////////////////////////
		var totalGirHoleTot = totalGirOutHole + totalGirInHole;
		$("#no_gir_out_sum").val(totalGirOutHole);
		$("#no_gir_in_sum").val(totalGirInHole);
		$("#no_gir_tot").val(totalGirHoleTot);
		////////////
		var averageDistOutSum;
		if(totalGirOutHole==0)
			averageDistOutSum = 0;
		else
			averageDistOutSum = Math.round( girDtistriBuitionOut * 10 / totalGirOutHole) / 10;

		var averageDistInSum;
		if( totalGirInHole==0 )
			averageDistInSum = 0;
		else
			averageDistInSum = Math.round( girDtistriBuitionIn * 10 / totalGirInHole) / 10;

		var averageDistInTot;
		if(totalGirHoleTot==0)
			averageDistInTot = 0;
		else
			averageDistInTot = Math.round( totalGirHoleTot * 10 / totalGirHoleTot) / 10;

		$("#avg_dist_hol_nogir_out_sum").val(averageDistOutSum);
		$("#avg_dist_hol_nogir_in_sum").val(averageDistInSum);
		$("#avg_dist_hol_nogir_in_sum").val(averageDistInSum);
	}

	$('.gir_out').on("change, keyup" , CalculateNoGirDistPutt1);
	$('.putt_1_out').on("change, keyup" , CalculateNoGirDistPutt1);
	$('.gir_in').on("change, keyup" , CalculateNoGirDistPutt1);
	$('.putt_1_in').on("change, keyup" , CalculateNoGirDistPutt1);

	function CalculateScrambleRows()
	{
		var girOutList = [];
		$('.gir_out').each(function(){
			girOutList.push( $(this).val() );
		});

		var holePairOutList = []; 
		$('.hole_par_out').each(function(){
			holePairOutList.push( $(this).val() );
		});

		var scoreOutList = []; 
		$('.score_out').each(function(){
			scoreOutList.push( $(this).val() );
		});

		var oppositeValueSumOut = 0;
		var scramblSavOutSum = 0;
		for(var index=0;index<9;index++)
		{
			var girOutValue = girOutList[index];
			var opositeValue;
			if( !isNan(girOutValue) && GetNumericValue(girOutValue)==0 )
				opositeValue = 1;
			else 
				opositeValue = 0;
			$("#scrambl_opp_out_"+index).val(opositeValue);
			oppositeValueSumOut = oppositeValueSumOut + opositeValue;
			///////////////calculate scramblSavOut
			var scramblSavOut;
			if( opositeValue==1 )
			{
				var holePairOutValue = isNan(holePairOutList[index])?0:GetNumericValue(holePairOutList[index]);
				var scoreOutValue = isNan(scoreOutList[index])?0:GetNumericValue(scoreOutList[index]);
				
				scramblSavOut = (scoreOutValue<=holePairOutValue)?1:0;
				scramblSavOutSum = scramblSavOutSum  + scramblSavOut;
			}
			else
				scramblSavOut = "";
			$("#scrambl_sav_out_"+index).val(scramblSavOut);
		}

		var girInList = [];
		$('.gir_in').each(function(){
			girInList.push( $(this).val() );
		});

		var holePairInList = []; 
		$('.hole_par_in').each(function(){
			holePairInList.push( $(this).val() );
		});

		var scoreInList = []; 
		$('.score_in').each(function(){
			scoreInList.push( $(this).val() );
		});		

		var oppositeValueSumIn = 0;
		var scramblSavInSum = 0;
		for(var index=0;index<9;index++)
		{
			var girInValue = girInList[index];
			var opositeValue;
			if( !isNan(girInValue) && GetNumericValue(girInValue)==0 )
				opositeValue = 1;
			else 
				opositeValue = 0;

			oppositeValueSumIn = oppositeValueSumIn + opositeValue;
			$("#scrambl_opp_in_" + index).val(opositeValue);
			////////////////////////////
			var scramblSavIn;
			if( opositeValue==1 )
			{
				var holePairInValue = isNan(holePairInList[index])?0:GetNumericValue(holePairInList[index]);
				var scoreInValue = isNan(holePairInList[index])?0:GetNumericValue(holePairInList[index]);
				
				scramblSavIn = (scoreInValue<=holePairInValue)?1:0;
				scramblSavInSum = scramblSavInSum  + scramblSavIn;
			}
			else
				scramblSavIn = "";
			$("#scrambl_sav_in_"+index).val(scramblSavIn);
		}

		var oppositeValueSumTot = oppositeValueSumIn + oppositeValueSumOut;
		$("#scrambl_opp_out_sum").val(oppositeValueSumOut);
		$("#scrambl_opp_in_sum").val(oppositeValueSumIn);
		$("#scrambl_opp_tot").val(oppositeValueSumTot);
		$("#scramble_opp_equation").val(oppositeValueSumTot);

		var scramblSavInTot = scramblSavInSum + scramblSavOut;
		$("#scrambl_sav_out_sum").val(scramblSavOut);
		$("#scrambl_sav_in_sum").val(scramblSavInSum); 
		$("#scrambl_sav_tot").val(scramblSavInTot);
		$("#scramble_sav_equation").val(scramblSavInTot);
	}
	$('.gir_out').on("change, keyup" , CalculateScrambleRows);
	$('.gir_in').on("change, keyup" , CalculateScrambleRows);
});


function GetNumericValue(str)
{
	if(str.length==0)
		return 0;
	if(/^([0-9]+)$/.test(str))
		return parseInt(str);
	return parseFloat(str);
}
