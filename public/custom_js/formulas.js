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
		var nonBlank = 0;
		$('.score_in').each(function(){
			var number = parseInt(this.value);
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
			var number = parseInt(this.value);
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
			var number = parseInt(this.value);
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
			var number = parseInt(this.value);
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
			var number = parseInt(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#putt_1_in_sum").val(inSum);

		var outSum = 0;
		$('.putt_1_out').each(function(){
			var number = parseInt(this.value);
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
			var number = parseInt(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#putt_2_in_sum").val(inSum);

		var outSum = 0;
		$('.putt_2_out').each(function(){
			var number = parseInt(this.value);
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
			var number = parseInt(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#putt_3_in_sum").val(inSum);

		var outSum = 0;
		$('.putt_3_out').each(function(){
			var number = parseInt(this.value);
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

	/*function TOT_PUTT()
	{
		var inSum = 0;
		$('.tot_putt_in').each(function(){
			var number = parseInt(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#tot_putt_in_sum").val(inSum);

		var outSum = 0;
		$('.tot_putt_out').each(function(){
			var number = parseInt(this.value);
			if(isInt(number))
			{
			   outSum = outSum + number;
			}
		});

		$("#tot_putt_out_sum").val(outSum);

		var totalSum = inSum+outSum;
		$("#tot_putt_tot").val(totalSum);
		$("#total_putts").val(totalSum);
	}

	$('.tot_putt_in').on("change, keyup" , TOT_PUTT);
	$(".tot_putt_out").on("change, keyup" ,TOT_PUTT);

	function TOT_FT_MADE()
	{
		var inSum = 0;
		$('.tot_ft_made_in').each(function(){
			var number = parseInt(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#tot_ft_made_in_sum").val(inSum);

		var outSum = 0;
		$('.tot_ft_made_out').each(function(){
			var number = parseInt(this.value);
			if(isInt(number))
			{
			   outSum = outSum + number;
			}
		});

		$("#tot_ft_made_out_sum").val(outSum);

		var totalSum = inSum+outSum;
		$("#tot_ft_made_tot").val(totalSum);
	}

	$('.tot_ft_made_in').on("change, keyup" , TOT_FT_MADE);
	$(".tot_ft_made_out").on("change, keyup" ,TOT_FT_MADE);

	function PUTT_OPP_5()
	{
		var inSum = 0;
		$('.putt_opp_5_in').each(function(){
			var number = parseInt(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#putt_opp_5_in_sum").val(inSum);

		var outSum = 0;
		$('.putt_opp_5_out').each(function(){
			var number = parseInt(this.value);
			if(isInt(number))
			{
			   outSum = outSum + number;
			}
		});

		$("#putt_opp_5_out_sum").val(outSum);

		var totalSum = inSum+outSum;
		$("#putt_opp_5_tot").val(totalSum);
		$("#putt_opp_5_equation").val(totalSum);
	}*/

	$('.putt_opp_5_in').on("change, keyup" , PUTT_OPP_5);
	$(".putt_opp_5_out").on("change, keyup" ,PUTT_OPP_5);

	function PUTT_MAKE_5()
	{
		var inSum = 0;
		$('.putt_make_5_in').each(function(){
			var number = parseInt(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#putt_make_5_in_sum").val(inSum);

		var outSum = 0;
		$('.putt_make_5_out').each(function(){
			var number = parseInt(this.value);
			if(isInt(number))
			{
			   outSum = outSum + number;
			}
		});

		$("#putt_make_5_out_sum").val(outSum);

		var totalSum = inSum+outSum;
		$("#putt_make_5_tot").val(totalSum);
		$("#putt_make_5_equation").val(totalSum);
	}

	$('.putt_make_5_in').on("change, keyup" , PUTT_MAKE_5);
	$(".putt_make_5_out").on("change, keyup" ,PUTT_MAKE_5);
	
	function Putt_Opp_5_9()
	{
		var inSum = 0;
		$('.putt_opp_5_9_in').each(function(){
			var number = parseInt(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#putt_opp_5_9_in_sum").val(inSum);

		var outSum = 0;
		$('.putt_opp_5_9_out').each(function(){
			var number = parseInt(this.value);
			if(isInt(number))
			{
			   outSum = outSum + number;
			}
		});

		$("#putt_opp_5_9_out_sum").val(outSum);

		var totalSum = inSum+outSum;
		$("#putt_opp_5_9_tot").val(totalSum);
		$("#putt_opp_5_9_equation").val(totalSum);
	}

	$('.putt_opp_5_9_in').on("change, keyup" , Putt_Opp_5_9);
	$(".putt_opp_5_9_out").on("change, keyup" ,Putt_Opp_5_9);

	function Putt_Make_5_9()
	{
		var inSum = 0;
		$('.putt_make_5_9_in').each(function(){
			var number = parseInt(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#putt_make_5_9_in_sum").val(inSum);

		var outSum = 0;
		$('.putt_make_5_9_out').each(function(){
			var number = parseInt(this.value);
			if(isInt(number))
			{
			   outSum = outSum + number;
			}
		});

		$("#putt_make_5_9_out_sum").val(outSum);

		var totalSum = inSum+outSum;
		$("#putt_make_5_9_tot").val(totalSum);
		$("#putt_make_5_9_equation").val(totalSum);
	}

	$('.putt_make_5_9_in').on("change, keyup" , Putt_Make_5_9);
	$(".putt_make_5_9_out").on("change, keyup" ,Putt_Make_5_9);

	function Putt_Opp_10_19()
	{
		var inSum = 0;
		$('.putt_opp_10_19_in').each(function(){
			var number = parseInt(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#putt_opp_10_19_in_sum").val(inSum);

		var outSum = 0;
		$('.putt_opp_10_19_out').each(function(){
			var number = parseInt(this.value);
			if(isInt(number))
			{
			   outSum = outSum + number;
			}
		});

		$("#putt_opp_10_19_out_sum").val(outSum);

		var totalSum = inSum+outSum;
		$("#putt_opp_10_19_tot").val(totalSum);
		$("#putt_opp_10_19_equation").val(totalSum);
	}

	$('.putt_opp_10_19_in').on("change, keyup" , Putt_Opp_10_19);
	$(".putt_opp_10_19_out").on("change, keyup" ,Putt_Opp_10_19);

	function Putt_Make_10_19()
	{
		var inSum = 0;
		$('.putt_make_10_19_in').each(function(){
			var number = parseInt(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#putt_make_10_19_in_sum").val(inSum);

		var outSum = 0;
		$('.putt_make_10_19_out').each(function(){
			var number = parseInt(this.value);
			if(isInt(number))
			{
			   outSum = outSum + number;
			}
		});

		$("#putt_make_10_19_out_sum").val(outSum);

		var totalSum = inSum+outSum;
		$("#putt_make_10_19_tot").val(totalSum);
		$("#putt_make_10_19_equation").val(totalSum);
	}

	$('.putt_make_10_19_in').on("change, keyup" , Putt_Make_10_19);
	$(".putt_make_10_19_out").on("change, keyup" ,Putt_Make_10_19);

	function Putt_Opp_20_29()
	{
		var inSum = 0;
		$('.putt_opp_20_29_in').each(function(){
			var number = parseInt(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#putt_opp_20_29_in_sum").val(inSum);

		var outSum = 0;
		$('.putt_opp_20_29_out').each(function(){
			var number = parseInt(this.value);
			if(isInt(number))
			{
			   outSum = outSum + number;
			}
		});

		$("#putt_opp_20_29_out_sum").val(outSum);

		var totalSum = inSum+outSum;
		$("#putt_opp_20_29_tot").val(totalSum);
		$("#putt_opp_20_29_equation").val(totalSum);
	}

	$('.putt_opp_20_29_in').on("change, keyup" , Putt_Opp_20_29);
	$(".putt_opp_20_29_out").on("change, keyup" ,Putt_Opp_20_29);

	function Putt_Make_20_29()
	{
		var inSum = 0;
		

		$('.putt_make_20_29_in').each(function(){

			var number = parseInt(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#putt_make_20_29_in_sum").val(inSum);

		var outSum = 0;
		$('.putt_make_20_29_out').each(function(){
			var number = parseInt(this.value);
			if(isInt(number))
			{
			   outSum = outSum + number;
			}
		});

		$("#putt_make_20_29_out_sum").val(outSum);

		var totalSum = inSum+outSum;
		$("#putt_make_20_29_tot").val(totalSum);
		$("#putt_make_20_29_equation").val(totalSum);
	}

	$('.putt_make_20_29_in').on("change, keyup" , Putt_Make_20_29);
	$(".putt_make_20_29_out").on("change, keyup" ,Putt_Make_20_29);

	function PUTT_OPP_30()
	{
		var inSum = 0;
		$('.putt_opp_30_in').each(function(){
			var number = parseInt(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#putt_opp_30_in_sum").val(inSum);

		var outSum = 0;
		$('.putt_opp_30_out').each(function(){
			var number = parseInt(this.value);
			if(isInt(number))
			{
			   outSum = outSum + number;
			}
		});

		$("#putt_opp_30_out_sum").val(outSum);

		var totalSum = inSum+outSum;
		$("#putt_opp_30_tot").val(totalSum);
		$("#putt_opp_30_equation").val(totalSum);
	}

	$('.putt_opp_30_in').on("change, keyup" , PUTT_OPP_30);
	$(".putt_opp_30_out").on("change, keyup" ,PUTT_OPP_30);

	function PUTT_Make_30()
	{
		var inSum = 0;
		$('.putt_make_30_in').each(function(){
			var number = parseInt(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#putt_make_30_in_sum").val(inSum);

		var outSum = 0;
		$('.putt_make_30_out').each(function(){
			var number = parseInt(this.value);
			if(isInt(number))
			{
			   outSum = outSum + number;
			}
		});

		$("#putt_make_30_out_sum").val(outSum);

		var totalSum = inSum+outSum;
		$("#putt_make_30_tot").val(totalSum);
		$("#putt_make_30_equation").val(totalSum);
	}

	$('.putt_make_30_in').on("change, keyup" , PUTT_Make_30);
	$(".putt_make_30_out").on("change, keyup" ,PUTT_Make_30);

	function ScrambleOpp()
	{
		var inSum = 0;
		$('.scrambl_opp_in').each(function(){
			var number = parseInt(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#scrambl_opp_in_sum").val(inSum);

		var outSum = 0;
		$('.scrambl_opp_out').each(function(){
			var number = parseInt(this.value);
			if(isInt(number))
			{
			   outSum = outSum + number;
			}
		});

		$("#scrambl_opp_out_sum").val(outSum);

		var totalSum = inSum+outSum;
		$("#scrambl_opp_tot").val(totalSum);
		$("#scramble_opp_equation").val(totalSum);

	}

	$('.scrambl_opp_in').on("change, keyup" , ScrambleOpp);
	$(".scrambl_opp_out").on("change, keyup" ,ScrambleOpp);

	function ScrambleSav()
	{
		var inSum = 0;
		$('.scrambl_sav_in').each(function(){
			var number = parseInt(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#scrambl_sav_in_sum").val(inSum);

		var outSum = 0;
		$('.scrambl_sav_out').each(function(){
			var number = parseInt(this.value);
			if(isInt(number))
			{
			   outSum = outSum + number;
			}
		});

		$("#scrambl_sav_out_sum").val(outSum);

		var totalSum = inSum+outSum;
		$("#scrambl_sav_tot").val(totalSum);
		$("#scramble_sav_equation").val(totalSum);
	}

	$('.scrambl_sav_in').on("change, keyup" , ScrambleSav);
	$(".scrambl_sav_out").on("change, keyup" ,ScrambleSav);

	function SandOpp()
	{
		var inSum = 0;
		$('.sand_opp_in').each(function(){
			var number = parseInt(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#sand_opp_in_sum").val(inSum);

		var outSum = 0;
		$('.sand_opp_out').each(function(){
			var number = parseInt(this.value);
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
			var number = parseInt(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#sand_sav_in_sum").val(inSum);

		var outSum = 0;
		$('.sand_sav_out').each(function(){
			var number = parseInt(this.value);
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
			var number = parseInt(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#penalties_in_sum").val(inSum);

		var outSum = 0;
		$('.penalties_out').each(function(){
			var number = parseInt(this.value);
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
			var number = parseInt(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#par3_in_sum").val(inSum);

		var outSum = 0;
		$('.par3_out').each(function(){
			var number = parseInt(this.value);
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
			var number = parseInt(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#par3strokes_in_sum").val(inSum);

		var outSum = 0;
		$('.par3strokes_out').each(function(){
			var number = parseInt(this.value);
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
			var number = parseInt(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#par4_in_sum").val(inSum);

		var outSum = 0;
		$('.par4_out').each(function(){
			var number = parseInt(this.value);
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
			var number = parseInt(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#par4strokes_in_sum").val(inSum);

		var outSum = 0;
		$('.par4strokes_out').each(function(){
			var number = parseInt(this.value);
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
			var number = parseInt(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#par5_in_sum").val(inSum);

		var outSum = 0;
		$('.par5_out').each(function(){
			var number = parseInt(this.value);
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
			var number = parseInt(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#par5strokes_in_sum").val(inSum);

		var outSum = 0;
		$('.par5strokes_out').each(function(){
			var number = parseInt(this.value);
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
			var number = parseInt(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#eagle_in_sum").val(inSum);

		var outSum = 0;
		$('.eagle_out').each(function(){
			var number = parseInt(this.value);
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
			var number = parseInt(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#birdie_in_sum").val(inSum);

		var outSum = 0;
		$('.birdie_out').each(function(){
			var number = parseInt(this.value);
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
			var number = parseInt(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#par_in_sum").val(inSum);

		var outSum = 0;
		$('.par_out').each(function(){
			var number = parseInt(this.value);
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
			var number = parseInt(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#bogey_in_sum").val(inSum);

		var outSum = 0;
		$('.bogey_out').each(function(){
			var number = parseInt(this.value);
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
			var number = parseInt(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#dblbogey_in_sum").val(inSum);

		var outSum = 0;
		$('.dblbogey_out').each(function(){
			var number = parseInt(this.value);
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
			var number = parseInt(this.value);
			if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#other_in_sum").val(inSum);

		var outSum = 0;
		$('.other_out').each(function(){
			var number = parseInt(this.value);
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
		var par3_tot = parseInt(document.getElementById("par3_tot").value);
		var par4_tot = parseInt(document.getElementById("par4_tot").value);
		var par5_tot = parseInt(document.getElementById("par5_tot").value);

		var fir_tot = parseInt(document.getElementById("fir_tot").value);
		var fairways = fir_tot;

		var par3strokes_tot = parseInt(document.getElementById("par3strokes_tot").value);
		var par4strokes_tot = parseInt(document.getElementById("par4strokes_tot").value);
		var par5strokes_tot = parseInt(document.getElementById("par5strokes_tot").value);

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
		var fir_tot = parseInt(document.getElementById("fir_tot").value);
		var fairways = fir_tot;
		var par4_tot = parseInt(document.getElementById("par4_tot").value);
		var par5_tot = parseInt(document.getElementById("par5_tot").value);
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
		var gir_tot = parseInt(document.getElementById("gir_tot").value);
		var greens = gir_tot;
		var par3_tot = parseInt(document.getElementById("par3_tot").value);
		var par4_tot = parseInt(document.getElementById("par4_tot").value);
		var par5_tot = parseInt(document.getElementById("par5_tot").value);
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
		var scrambl_opp_tot = parseInt(document.getElementById("scrambl_opp_tot").value);
		var scrambl_sav_tot = parseInt(document.getElementById("scrambl_sav_tot").value);
		var scramble_percentage = ((scrambl_sav_tot/scrambl_opp_tot)*100).toFixed(0);
		$("#scramble_percentage").val(scramble_percentage);
	}
	$('.scrambl_opp_in').on("change, keyup" , ScramblePercentage);
	$(".scrambl_opp_out").on("change, keyup" ,ScramblePercentage);
	$('.scrambl_sav_in').on("change, keyup" , ScramblePercentage);
	$(".scrambl_sav_out").on("change, keyup" ,ScramblePercentage);

	function SandSavPercentage()
	{
		var sand_opp_tot = parseInt(document.getElementById("sand_opp_tot").value);
		var sand_sav_tot = parseInt(document.getElementById("sand_sav_tot").value);
		var sand_sav_percentage = ((sand_sav_tot/sand_opp_tot)*100).toFixed(0);
		$("#sand_sav_percentage").val(sand_sav_percentage);
	}
	$('.sand_opp_in').on("change, keyup" , SandSavPercentage);
	$(".sand_opp_out").on("change, keyup" ,SandSavPercentage);
	$('.sand_sav_in').on("change, keyup" , SandSavPercentage);
	$(".sand_sav_out").on("change, keyup" ,SandSavPercentage);

	function PuttsDivHole()
	{
		var tot_putt_tot = parseInt(document.getElementById("tot_putt_tot").value);
		var total_putts = tot_putt_tot;
		var played_holes_tot = parseInt(document.getElementById("played_holes_tot").value);
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
		var score_tot = parseInt(document.getElementById("score_tot").value);
		var hole_rds_18 = parseInt(document.getElementById("hole_rds_18").value);
		var avg_score = (score_tot / hole_rds_18).toFixed(2);
		$("#avg_score").val(avg_score);
	}
	$('.score_out').on("change, keyup" , AvgScore);
	$('.score_in').on("change, keyup" , AvgScore);

	function MakePercentage5()
	{
		var putt_make_5_tot = parseInt(document.getElementById("putt_make_5_tot").value);
		var putt_opp_5_tot = parseInt(document.getElementById("putt_opp_5_tot").value);
		var make_percentage_5 = ((putt_make_5_tot / putt_opp_5_tot)*100).toFixed(0);
		$("#make_percentage_5").val(make_percentage_5);
	}
	$('.putt_make_5_in').on("change, keyup" , MakePercentage5);
	$('.putt_make_5_out').on("change, keyup" , MakePercentage5);
	$('.putt_opp_5_out').on("change, keyup" , MakePercentage5);
	$('.putt_opp_5_in').on("change, keyup" , MakePercentage5);

	function MakePercentage5_9()
	{
		var putt_make_5_9_tot = parseInt(document.getElementById("putt_make_5_9_tot").value);
		var putt_opp_5_9_tot = parseInt(document.getElementById("putt_opp_5_9_tot").value);
		var make_percentage_5_9 = ((putt_make_5_9_tot / putt_opp_5_9_tot)*100).toFixed(0);
		$("#make_percentage_5_9").val(make_percentage_5_9);
	}
	$('.putt_make_5_9_in').on("change, keyup" , MakePercentage5_9);
	$('.putt_make_5_9_out').on("change, keyup" , MakePercentage5_9);
	$('.putt_opp_5_9_out').on("change, keyup" , MakePercentage5_9);
	$('.putt_opp_5_9_in').on("change, keyup" , MakePercentage5_9);

	function MakePercentage10_19()
	{
		var putt_make_10_19_tot = parseInt(document.getElementById("putt_make_10_19_tot").value);
		var putt_opp_10_19_tot = parseInt(document.getElementById("putt_opp_10_19_tot").value);
		var make_percentage_10_19 = ((putt_make_10_19_tot / putt_opp_10_19_tot)*100).toFixed(0);
		$("#make_percentage_10_19").val(make_percentage_10_19);
	}
	$('.putt_make_10_19_in').on("change, keyup" , MakePercentage10_19);
	$('.putt_make_10_19_out').on("change, keyup" , MakePercentage10_19);
	$('.putt_opp_10_19_out').on("change, keyup" , MakePercentage10_19);
	$('.putt_opp_10_19_in').on("change, keyup" , MakePercentage10_19);

	function MakePercentage20_29()
	{
		var putt_make_20_29_tot = parseInt(document.getElementById("putt_make_20_29_tot").value);
		var putt_opp_20_29_tot = parseInt(document.getElementById("putt_opp_20_29_tot").value);
		var make_percentage_20_29 = ((putt_make_20_29_tot / putt_opp_20_29_tot)*100).toFixed(0);
		$("#make_percentage_20_29").val(make_percentage_20_29);
	}
	$('.putt_make_20_29_in').on("change, keyup" , MakePercentage20_29);
	$('.putt_make_20_29_out').on("change, keyup" , MakePercentage20_29);
	$('.putt_opp_20_29_out').on("change, keyup" , MakePercentage20_29);
	$('.putt_opp_20_29_in').on("change, keyup" , MakePercentage20_29);

	function MakePercentage30()
	{
		var putt_make_30_tot = parseInt(document.getElementById("putt_make_30_tot").value);
		var putt_opp_30_tot = parseInt(document.getElementById("putt_opp_30_tot").value);
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

			if(girOutValue=="1" && IsPositiveInteger(putt1OutValue))
			{
				girDtistriBuitionOut = girDtistriBuitionOut + parseInt(putt1OutValue);
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

			if(girInValue=="1" && IsPositiveInteger(putt1InValue))
			{
				girDtistriBuitionIn = girDtistriBuitionIn + parseInt(putt1InValue);
				totalGirInHole++;
			}
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

			if( IsPositiveInteger(putt1Out) && IsPositiveInteger(putt2Out) )
			{
				if( parseInt(putt1Out)>0 )
				{
					put2OutSum = put2OutSum + parseInt(putt2Out);
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

			if( IsPositiveInteger(putt1In) && IsPositiveInteger(putt2In) )
			{
				if( parseInt(putt1In)>0 )
				{
					put2InSum = put2InSum + parseInt(putt2In);
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
			averagePut2Out = put2OutSum/numPut2Out;

		var averagePut2In;
		if(numPut2In==0)
			averagePut2In = 0;
		else
			averagePut2In = put2InSum/numPut2In;

		var averagePut2Tot;
		if( numPut2Tot==0 )
			averagePut2Tot = 0;
		else
			averagePut2Tot = put2Sumtot/numPut2Tot;
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

	function CalculateTotPuttRow()
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
				itemVal = 1;
			else if( put3Out == "" )
				itemVal = 2;
			else
				itemVal = 3;
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
				itemVal = put1In;
			else if( put3In == "" )
				itemVal = put2In;
			else
				itemVal = put3In;
			$("#tot_ft_made_in"+index).val(itemVal);
			totalFtMadeInSum = totalFtMadeInSum + itemVal;
		}
		var totalFtMadeTot = totalFtMadeInSum + totalFtMadeOutSum;
		$("#tot_ft_made_out_sum").val(totalFtMadeOutSum);
		$("#tot_ft_made_in_sum").val(totalFtMadeInSum);
		$("#tot_putt_tot").val(totalFtMadeTot);

		//////////////PUTT_OPP_<5
		var totalputOpp5OutSum = 0;
		for(var index=0; index<9; index++)
		{
			var put1Out = put1OutList[index];
			var put2Out = put2OutList[index];
			var put3Out = put3OutList[index];

			var countItem = 0;
			if( put1Out!="" && !isNaN(put1Out) && parseInt(put1Out)>0  && parseInt(put1Out)<5 )
				countItem++;
			if( put2Out!="" && !isNaN(put2Out) && parseInt(put2Out)>0  && parseInt(put2Out)<5 )
				countItem++;
			if( put3Out!="" && !isNaN(put3Out) && parseInt(put3Out)>0  && parseInt(put3Out)<5 )
				countItem++;
			$("#putt_opp_5_out_"+index).val( itemVal );
			totalputOpp5OutSum = totalputOpp5OutSum + countItem;
		}

		var totalputOpp5InSum = 0;
		for(var index=0; index<9; index++)
		{
			var put1In = put1InList[index];
			var put2In = put2InList[index];
			var put3In = put3InList[index];

			var countItem = 0;
			if( put1In!="" && !isNaN(put1In) && parseInt(put1In)>0  && parseInt(put1In)<5 )
				countItem++;
			if( put2In!="" && !isNaN(put2In) && parseInt(put2In)>0  && parseInt(put2In)<5 )
				countItem++;
			if( put3In!="" && !isNaN(put3In) && parseInt(put3In)>0  && parseInt(put3In)<5 )
				countItem++;
			$("#putt_opp_5_out_"+index).val( itemVal );
			totalputOpp5InSum = totalputOpp5InSum + countItem;
		}
		var totalputOpp5Tot = totalputOpp5OutSum+totalputOpp5InSum;
		$("#putt_opp_5_out_sum").val(totalputOpp5OutSum);
		$("#putt_opp_5_in_sum").val(totalputOpp5InSum);
		$("#putt_opp_5_tot").val(totalputOpp5Tot);

		/////PUTT_MAKE_<5
		var totalputOpp5OutSum = 0;
		for(var index=0; index<9; index++)
		{
			var put1Out = put1OutList[index];
			var put2Out = put2OutList[index];
			var put3Out = put3OutList[index];

			var calculatedValue;
			if(put1Out.length>0 && put1Out!=0 && !isNaN(put1Out) )
			{ 
				if(put2Out=="0")
				{
					if( parseInt(put1Out)<5 )
						calculatedValue = 1;
					else 
						calculatedValue = 0;
				}
				else
				{
					if(put3Out=="0")
					{
						if( !isNaN(put2Out) && parseInt(put2Out)<5 )
							calculatedValue = 1;
						else 
							calculatedValue = 0;
					}
					else
					{
						if( !isNaN(put3Out) && parseInt(put3Out)<5 )
							calculatedValue = 1;
						else 
							calculatedValue = 0;
					}
				}
			}
			else
				calculatedValue = 0;
		}

		var totalputOpp5InSum = 0;
		for(var index=0; index<9; index++)
		{
			var put1In = put1InList[index];
			var put2In = put2InList[index];
			var put3In = put3InList[index];

			var countItem = 0;
			if( put1In!="" && !isNaN(put1In) && parseInt(put1In)>0  && parseInt(put1In)<5 )
				countItem++;
			if( put2In!="" && !isNaN(put2In) && parseInt(put2In)>0  && parseInt(put2In)<5 )
				countItem++;
			if( put3In!="" && !isNaN(put3In) && parseInt(put3In)>0  && parseInt(put3In)<5 )
				countItem++;
			$("#putt_opp_5_out_"+index).val( itemVal );
			totalputOpp5InSum = totalputOpp5InSum + countItem;
		}
		//
	}

	$('.putt_1_out').on("change, keyup" , CalculateTotPuttRow);
	$('.putt_1_in').on("change, keyup" , CalculateTotPuttRow);
	$('.putt_2_out').on("change, keyup" , CalculateTotPuttRow);
	$('.putt_2_in').on("change, keyup" , CalculateTotPuttRow);
	$('.putt_3_out').on("change, keyup" , CalculateTotPuttRow);
	$('.putt_3_in').on("change, keyup" , CalculateTotPuttRow);
});