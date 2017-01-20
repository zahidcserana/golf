$(document).ready(function() {
	
	$(".numeric").on("change, keyup" ,function(e) 
	{
		var currentInputValue = $(this).val();
		currentInputValue = currentInputValue.replace(/[^0-9.]/g,'');
		$(this).val(currentInputValue);
	});

	function isInt(n){
		return Number(n) === n && n % 1 === 0;
	}

	function CheckHolePairLength(e)
	{
		/*var charKeyCode = e.keyCode || e.which;
		
		if (navigator.userAgent.match(/Android/i)) {
			var charKeyCode = e.keyCode || e.which;
			if (charKeyCode == 0 || charKeyCode == 229) { 
				charKeyCode = e.key.charCodeAt(0);
		}
		
		if ($.inArray(charKeyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 || (charKeyCode == 65 && e.ctrlKey === true) || (charKeyCode == 67 && e.ctrlKey === true) || (charKeyCode == 88 && e.ctrlKey === true) || (charKeyCode >= 35 && charKeyCode <= 39)) 
		{
			return true;
		}
		var curVal = $(this).val();
		if( curVal.length==1 )
		{
			if ((e.shiftKey || (charKeyCode < 48 || charKeyCode > 57)) && (charKeyCode < 96 || charKeyCode > 105)) 
			{
				return false;
			}
			else
			{

				$(this).val("");
				return true;
			}
		}
		else
			return true;*/
		var currentInputValue = $(this).val();
		currentInputValue = currentInputValue.replace(/[^0-9.]/g,'');
		if(currentInputValue.length>1)
			currentInputValue = currentInputValue.substr(0,1);
		$(this).val(currentInputValue);
	} 
	$('.hole_par_in').on("change, keyup"  , CheckHolePairLength);
	$(".hole_par_out").on("change, keyup"  ,CheckHolePairLength);
	
	$(".penalties_out").on("change, keyup" ,CheckHolePairLength);
	$(".penalties_in").on("change, keyup" ,CheckHolePairLength);
	
	function CheckHolePair()
	{
		var inSum = 0;
		$('.hole_par_in').each(function(){
			var number = GetNumericValue(this.value);
			//if(isInt(number))
			   inSum = inSum + number;
		});
		$("#hole_par_in_sum").val(inSum);

		var outSum = 0;
		$('.hole_par_out').each(function(){
			
			var number = GetNumericValue(this.value);
			outSum = outSum + number;
		});

		$("#hole_par_out_sum").val(outSum);

		var totalSum = inSum+outSum;
		$("#hole_par_tot").val(totalSum);
	}

	$('.hole_par_in').on("change, keyup" , CheckHolePair);
	$(".hole_par_out").on("change, keyup" ,CheckHolePair);

	function CheckScoreLength(e)
	{
		/*var charKeyCode = e.keyCode || e.which;
		
		if (navigator.userAgent.match(/Android/i)) {
			var charKeyCode = e.keyCode || e.which;
			if (charKeyCode == 0 || charKeyCode == 229) { 
				charKeyCode = e.key.charCodeAt(0);
		}
		
		if ($.inArray(charKeyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 || (charKeyCode == 65 && e.ctrlKey === true) || (charKeyCode == 67 && e.ctrlKey === true) || (charKeyCode == 88 && e.ctrlKey === true) || (charKeyCode >= 35 && charKeyCode <= 39)) 
		{
			return true;
		}
		var curVal = $(this).val();
		if( curVal.length==2 )
		{
			if ((e.shiftKey || (charKeyCode < 48 || charKeyCode > 57)) && (charKeyCode < 96 || charKeyCode > 105)) 
			{
				return false;
			}
			else
			{
				$(this).val(curVal.substring(1))
				return true;
			}
		}
		else
			return true;*/
		var currentInputValue = $(this).val();
		currentInputValue = currentInputValue.replace(/[^0-9.]/g,'');
		if(currentInputValue.length>2)
			currentInputValue = currentInputValue.substr(0,2);
		$(this).val(currentInputValue);

	} 
	$('.score_in').on("change, keyup"  , CheckScoreLength);
	$(".score_out").on("change, keyup" ,CheckScoreLength);
	

	function CheckScore()
	{
		var inSum = 0;
		var nonBlank = 0;
		$('.score_in').each(function(){
			var number = GetNumericValue(this.value);
			//if((this.value)!="")
				
			//if(isInt(number))
				if(number>0)
					nonBlank = nonBlank + 1; 
				inSum = inSum + number;
		});
		$("#score_in_sum").val(inSum);

		var outSum = 0;
		$('.score_out').each(function(){
			var number = GetNumericValue(this.value);
			//document.write(number);
			//if(isInt(number))
				if(number>0)
					nonBlank = nonBlank + 1;
				outSum = outSum + number;
		});

		$("#score_out_sum").val(outSum);

		var totalSum = inSum+outSum;
		var score_tot = totalSum;
		$("#score_tot").val(totalSum);
		$("#played_holes_tot").val(nonBlank);
		//document.write(nonBlank);
		$("#played_holes_equation").val(nonBlank);
		if(nonBlank =='18')
		{
			var hole_rds_18 = 1;
			$("#hole_rds_18").val(1);
		}
		else
		{ 
			var hole_rds_18 = "";
			$("#hole_rds_18").val("");
		}

		if(hole_rds_18==0)
			$("#avg_score").val("");
		else
		{
			var avg_score = ((score_tot / hole_rds_18)).toFixed(2);
			$("#avg_score").val(avg_score);
		}
	}

	$('.score_in').on("change, keyup" , CheckScore);
	$(".score_out").on("change, keyup" ,CheckScore);

	
	function CheckFirAndGir()
	{
		var currentInputValue = $(this).val();
		currentInputValue = currentInputValue.replace(/[^0-1]/g,'');
		if(currentInputValue.length>1)
			currentInputValue = currentInputValue.substr(0,1);
		$(this).val(currentInputValue);
	}
	
	$('.fir_out').on("change, keyup" , CheckFirAndGir);
	$(".fir_in").on("change, keyup" ,CheckFirAndGir);
	$('.gir_out').on("change, keyup" , CheckFirAndGir);
	$(".gir_in").on("change, keyup" ,CheckFirAndGir);
	$(".gir_in").on("change, keyup" ,CheckFirAndGir);
	$(".sand_opp_out").on("change, keyup" ,CheckFirAndGir);
	$(".sand_opp_in").on("change, keyup" ,CheckFirAndGir);
	
	function CheckPutt1()
	{
		var inSum = 0;
		$('.putt_1_in').each(function(){
			var number = GetNumericValue(this.value);
			//if(isInt(number))
			{
			   inSum = inSum + number;
			}
		});
		$("#putt_1_in_sum").val(inSum);

		var outSum = 0;
		$('.putt_1_out').each(function(){
			var number = GetNumericValue(this.value);
			//if(isInt(number))
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
			//if(isInt(number))
			   inSum = inSum + number;
		});
		$("#putt_2_in_sum").val(inSum);

		var outSum = 0;
		$('.putt_2_out').each(function(){
			var number = GetNumericValue(this.value);
			//if(isInt(number))
			   outSum = outSum + number;
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
			//if(isInt(number))
			   inSum = inSum + number;
		});
		$("#putt_3_in_sum").val(inSum);

		var outSum = 0;
		$('.putt_3_out').each(function(){
			var number = GetNumericValue(this.value);
			//if(isInt(number))
			   outSum = outSum + number;
		});

		$("#putt_3_out_sum").val(outSum);

		var totalSum = inSum+outSum;
		$("#putt_3_tot").val(totalSum);
	}

	$('.putt_3_in').on("change, keyup" , CheckPutt3);
	$(".putt_3_out").on("change, keyup" ,CheckPutt3);

	function Penalties()
	{
		var inSum = 0;
		$('.penalties_in').each(function(){
			var number = GetNumericValue(this.value);
			//if(isInt(number))
			   inSum = inSum + number;
		});
		$("#penalties_in_sum").val(inSum);

		var outSum = 0;
		$('.penalties_out').each(function(){
			var number = GetNumericValue(this.value);
			//if(isInt(number))
			   outSum = outSum + number;
		});

		$("#penalties_out_sum").val(outSum);

		var totalSum = inSum+outSum;
		$("#penalties_tot").val(totalSum);
	}

	$('.penalties_in').on("change, keyup" , Penalties);
	$(".penalties_out").on("change, keyup" ,Penalties);



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
			averageGirOut = Math.round( girDtistriBuitionOut * 100 /totalGirOutHole ) /100;

		var averageGirIn;
		if(totalGirInHole==0)
			averageGirIn = 0;
		else
			averageGirIn = Math.round( girDtistriBuitionIn * 100 /totalGirInHole ) /100;

		var totalGirHoleTot = totalGirInHole+totalGirOutHole;
		var averageGirTot;    				
		if(totalGirHoleTot==0)
			averageGirTot = 0;
		else
			averageGirTot = Math.round( girDtistriBuitionTot * 100 /totalGirHoleTot ) /100;

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
			averagePut2Out = ( put2OutSum  / numPut2Out).toFixed(2);

		var averagePut2In;
		if(numPut2In==0)
			averagePut2In = 0;
		else
			averagePut2In = ( put2InSum  / numPut2In).toFixed(2);

		var averagePut2Tot;
		if( numPut2Tot==0 )
			averagePut2Tot = 0;
		else
			averagePut2Tot = ( put2Sumtot / numPut2Tot).toFixed(2);

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

	
		var nonBlank = 0;
		$('.score_in').each(function(){
			var number = GetNumericValue(this.value);
				if(number>0)
					nonBlank = nonBlank + 1; 
		});

		var outSum = 0;
		$('.score_out').each(function(){
			var number = GetNumericValue(this.value);
				if(number>0)
					nonBlank = nonBlank + 1;
	
		});
		
		var played_holes_tot = nonBlank;
		if(played_holes_tot==0)
			$("#putts_div_hole").val(0);
		else
		{
			
			$("#putts_div_hole").val((totalPutTotTot/played_holes_tot).toFixed(2));
		}

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

		if(totalputOpp5Tot==0)
			$("#make_percentage_5").val("");
		else
		{
			var make_percentage_5 = ((totalputMake5Tot / totalputOpp5Tot*100).toFixed(2)+ "%");
			$("#make_percentage_5").val(make_percentage_5);
		}
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

		if(totalputOpp59Tot==0)
			$("#make_percentage_5_9").val("");
		else
		{
			var make_percentage_5_9 = ((totalputMake59Tot / totalputOpp59Tot*100).toFixed(2) + "%");
			$("#make_percentage_5_9").val(make_percentage_5_9);
		}

		//PUTT_OPP_10-19
		//debugger;
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

		if(totalputOpp1019Tot==0)
			$("#make_percentage_10_19").val("");
		else
		{
			var make_percentage_10_19 = ((totalputMake1019Tot / totalputOpp1019Tot*100).toFixed(2) + "%");
			$("#make_percentage_10_19").val(make_percentage_10_19);
		}
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

		if(totalputOpp2029Tot==0)
			$("#make_percentage_20_29").val("");
		else
		{
			var make_percentage_20_29 = ((totalputMake2029Tot / totalputOpp2029Tot*100).toFixed(2)+ "%");
			$("#make_percentage_20_29").val(make_percentage_20_29);
		}

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

		if(totalputOpp30Tot==0)
			$("#make_percentage_30").val("");
		else
		{
			var make_percentage_30 = ((totalputMake30InTot / totalputOpp30Tot*100).toFixed(2)+ "%");
			$("#make_percentage_30").val(make_percentage_30);	
		}
	}

	$('.putt_1_out').on("change, keyup" , CalculateAllPuttRows);
	$('.putt_1_in').on("change, keyup" , CalculateAllPuttRows);
	$('.putt_2_out').on("change, keyup" , CalculateAllPuttRows);
	$('.putt_2_in').on("change, keyup" , CalculateAllPuttRows);
	$('.putt_3_out').on("change, keyup" , CalculateAllPuttRows);
	$('.putt_3_in').on("change, keyup" , CalculateAllPuttRows);
	$('.score_out').on("change, keyup" , CalculateAllPuttRows);
	$('.score_in').on("change, keyup" , CalculateAllPuttRows);


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
		$("#nogir_dist_putt_1_out_sum").val(girDtistriBuitionOut);
		$("#nogir_dist_putt_1_in_sum").val(girDtistriBuitionIn);
		$("#nogir_dist_putt_1_tot").val(girDtistriBuitionTot);
		$("#put_1_nogir").val(girDtistriBuitionTot);

		var countZeroGir = 0;
		$('.gir_in').each(function(){
			var number = GetNumericValue(this.value);
			if((this.value)=='0')
				countZeroGir = countZeroGir + 1;
		});

		$('.gir_out').each(function(){
			var number = GetNumericValue(this.value);
			if((this.value)=='0')
				countZeroGir = countZeroGir + 1;
		});
		
		var missedGir = countZeroGir;
		if(missedGir==0)
			$("#avg_dist_chip").val("");
		else
			$("#avg_dist_chip").val((girDtistriBuitionTot/missedGir).toFixed(2));
		/*var missedGir = GetNumericValue(document.getElementById("missed_gir").value);
		if(missedGir==0)
			$("#avg_dist_chip").val("");
		else
			$("#avg_dist_chip").val((girDtistriBuitionTot/missedGir).toFixed(2));;*/

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
			averageDistOutSum = Math.round( girDtistriBuitionOut * 100 / totalGirOutHole) / 100;

		var averageDistInSum;
		if( totalGirInHole==0 )
			averageDistInSum = 0;
		else
			averageDistInSum = Math.round( girDtistriBuitionIn * 100 / totalGirInHole) / 100;

		var averageDistTot;
		if(totalGirHoleTot==0)
			averageDistTot = 0;
		else
			averageDistTot = Math.round( girDtistriBuitionTot * 100 / totalGirHoleTot) / 100;
		$("#avg_dist_hol_nogir_out_sum").val(averageDistOutSum);
		$("#avg_dist_hol_nogir_in_sum").val(averageDistInSum);
		$("#avg_dist_hol_nogir_tot").val(averageDistTot);
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
		
		//debugger;
		var oppositeValueSumOut = 0;
		var scramblSavOutSum = 0;
		for(var index=0;index<9;index++)
		{
			var girOutValue = girOutList[index];
			var opositeValue;
			if( !isNaN(girOutValue) && GetNumericValue(girOutValue)==0 )
				opositeValue = 1;
			else 
				opositeValue = 0;

			$("#scrambl_opp_out_"+index).val(opositeValue);
			oppositeValueSumOut = oppositeValueSumOut + opositeValue;
			///////////////calculate scramblSavOut
			var scramblSavOut;
			if( opositeValue==1 )
			{
				var holePairOutValue = isNaN(holePairOutList[index])?0:GetNumericValue(holePairOutList[index]);
				var scoreOutValue = isNaN(scoreOutList[index])?0:GetNumericValue(scoreOutList[index]);
				
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
		//debugger;
		for(var index=0;index<9;index++)
		{
			var girInValue = girInList[index];
			var opositeValue;
			if( !isNaN(girInValue) && GetNumericValue(girInValue)==0 )
				opositeValue = 1;
			else 
				opositeValue = 0;

			oppositeValueSumIn = oppositeValueSumIn + opositeValue;
			$("#scrambl_opp_in_" + index).val(opositeValue);
			////////////////////////////
			var scramblSavIn;
			if( opositeValue==1 )
			{
				var holePairInValue = isNaN(holePairInList[index])?0:GetNumericValue(holePairInList[index]);
				var scoreInValue = isNaN(scoreInList[index])?0:GetNumericValue(scoreInList[index]);
				
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

		var scramblSavInTot = scramblSavInSum + scramblSavOutSum;
		$("#scrambl_sav_out_sum").val(scramblSavOutSum);
		$("#scrambl_sav_in_sum").val(scramblSavInSum); 
		$("#scrambl_sav_tot").val(scramblSavInTot);
		$("#scramble_sav_equation").val(scramblSavInTot);

		if(oppositeValueSumTot==0)
			$("#scramble_percentage").val("");
		else
			$("#scramble_percentage").val((scramblSavInTot/oppositeValueSumTot*100).toFixed(2) + "%");

		if(oppositeValueSumOut==0)
			$("#scrambl_percentage_out_sum").val(0+"%");
		else
			$("#scrambl_percentage_out_sum").val((scramblSavOutSum/oppositeValueSumOut*100).toFixed(0) + "%");

		if(oppositeValueSumIn==0)
			$("#scrambl_percentage_in_sum").val(0+"%");
		else
			$("#scrambl_percentage_in_sum").val((scramblSavInSum/oppositeValueSumIn*100).toFixed(0) + "%");
		if(oppositeValueSumTot==0)
			$("#scrambl_percentage_sum").val(0+"%");
		else
			$("#scrambl_percentage_sum").val((scramblSavInTot/oppositeValueSumTot*100).toFixed(0) + "%");
	}
	$('.hole_par_out').on("change, keyup" , CalculateScrambleRows);
	$('.hole_par_in').on("change, keyup" , CalculateScrambleRows);
	$('.score_in').on("change, keyup" , CalculateScrambleRows);
	$('.score_out').on("change, keyup" , CalculateScrambleRows);
	$('.gir_out').on("change, keyup" , CalculateScrambleRows);
	$('.gir_in').on("change, keyup" , CalculateScrambleRows);

	function CalculateSandRows()
	{
		//debugger;
		var sandOppInSum = 0;
		$('.sand_opp_in').each(function(){
			var number = GetNumericValue(this.value);
			//if(isInt(number))
			   sandOppInSum = sandOppInSum + number;
		});
		$("#sand_opp_in_sum").val(sandOppInSum);

		var sandOppOutSum = 0;
		$('.sand_opp_out').each(function(){
			var number = GetNumericValue(this.value);
			//if(isInt(number))
			   sandOppOutSum = sandOppOutSum + number;
		});

		$("#sand_opp_out_sum").val(sandOppOutSum);

		var totalSandOppSum = sandOppInSum + sandOppOutSum;
		$("#sand_opp_tot").val(totalSandOppSum);
		$("#sand_opp_equation").val(totalSandOppSum);

		var sandOppOutList = [];
		$('.sand_opp_out').each(function(){
			sandOppOutList.push( $(this).val() );
		});

		var holePairOutList = []; 
		$('.hole_par_out').each(function(){
			holePairOutList.push( $(this).val() );
		});

		var scoreOutList = []; 
		$('.score_out').each(function(){
			scoreOutList.push( $(this).val() );
		});

		var sandSavOutSum=0;
		for(var index=0;index<9;index++)
		{
			var sandSavOut;
			
			if( sandOppOutList[index]==1 )
			{
				var holePairOutValue = isNaN(holePairOutList[index])?0:GetNumericValue(holePairOutList[index]);
				var scoreOutValue = isNaN(scoreOutList[index])?0:GetNumericValue(scoreOutList[index]);
				sandSavOut = (scoreOutValue<=holePairOutValue)?1:0;
				sandSavOutSum = sandSavOutSum  + sandSavOut;
			}
			else
				sandSavOut = "";
			$("#sand_sav_out_"  + index).val(sandSavOut);
		}
		$("#sand_sav_out_sum").val(sandSavOutSum);


		var sandOppInList = [];
		$('.sand_opp_in').each(function(){
			sandOppInList.push( $(this).val() );
		});

		var holePairInList = []; 
		$('.hole_par_in').each(function(){
			holePairInList.push( $(this).val() );
		});

		var scoreInList = []; 
		$('.score_in').each(function(){
			scoreInList.push( $(this).val() );
		});
		var sandSavInSum=0;
		//debugger;
		for(var index=0;index<9;index++)
		{
			var sandSavIn;
			
			if( sandOppInList[index]==1 )
			{
				var holePairInValue = isNaN(holePairInList[index])?0:GetNumericValue(holePairInList[index]);
				var scoreInValue = isNaN(scoreInList[index])?0:GetNumericValue(scoreInList[index]);
				sandSavIn = (scoreInValue<=holePairInValue)?1:0;
				sandSavInSum = sandSavInSum  + sandSavIn;
			}
			else
				sandSavIn = "";
			$("#sand_sav_in_"  + index).val(sandSavIn);

		}
		$("#sand_sav_in_sum").val(sandSavInSum);
		var sandSavSum = sandSavOutSum + sandSavInSum;
		$("#sand_sav_tot").val(sandSavSum);
		$("#sand_sav_equation").val(sandSavSum);

		if(totalSandOppSum==0)
			$("#sand_sav_percentage").val("");
		else
		{
			var sand_sav_percentage = ((sandSavSum / totalSandOppSum * 100).toFixed(2) +"%");
			$("#sand_sav_percentage").val(sand_sav_percentage);
		}

		if(sandOppOutSum==0)
			$("#sand_percentage_out_sum").val(0+"%");
		else
			$("#sand_percentage_out_sum").val((sandSavOutSum/sandOppOutSum*100).toFixed(0) + '%');

		if(sandOppInSum==0)
			$("#sand_percentage_in_sum").val(0+"%");
		else
			$("#sand_percentage_in_sum").val((sandSavInSum/sandOppInSum*100).toFixed(0) + '%');

		if(totalSandOppSum==0)
			$("#sand_percentage_sum").val(0+"%");
		else
			$("#sand_percentage_sum").val((sandSavSum/totalSandOppSum*100).toFixed(0) + '%');
	}

	$('.sand_opp_in').on("change, keyup" , CalculateSandRows);
	$(".sand_opp_out").on("change, keyup" ,CalculateSandRows);
	$('.hole_par_in').on("change, keyup" , CalculateSandRows);
	$(".hole_par_out").on("change, keyup" ,CalculateSandRows);
	$('.score_out').on("change, keyup" , CalculateSandRows);
	$(".score_in").on("change, keyup" ,CalculateSandRows);
	//$('.sand_opp_in').on("change, keyup" , CalculateSandRows);
	//$(".sand_opp_out").on("change, keyup" ,CalculateSandRows);

	function CalculateAllParStrokesAndParScors()
	{
		////////////
		var firInSum = 0;
		$('.fir_in').each(function(){
			var number = GetNumericValue(this.value);
			//if(isInt(number))
			   firInSum = firInSum + number;
		});
		$("#fir_in_sum").val(firInSum);

		var firOutSum = 0;
		$('.fir_out').each(function(){
			var number = GetNumericValue(this.value);
			//if(isInt(number))
			   firOutSum = firOutSum + number;
		});

		$("#fir_out_sum").val(firOutSum);

		var firTotalSum = firInSum+firOutSum;
		var fir_tot = firTotalSum;
		$("#fir_tot").val(fir_tot);


		
		var fairways = fir_tot;
		if(fairways==0)
			$("#fairways").val("0");
		else
			$("#fairways").val(fairways);
		//////////
		var girInSum = 0;
		var countZeroGir = 0;
		$('.gir_in').each(function(){
			var number = GetNumericValue(this.value);
			if((this.value)=='0')
				countZeroGir = countZeroGir + 1;
			//if(isInt(number))
				//countGir = countGir + 1;
				girInSum = girInSum + number;
		});
		$("#gir_in_sum").val(girInSum);

		var girOutSum = 0;
		$('.gir_out').each(function(){
			var number = GetNumericValue(this.value);
			if((this.value)=='0')
				countZeroGir = countZeroGir + 1;
			//if(isInt(number))
				//countGir = countGir + 1;
				girOutSum = girOutSum + number;
		});

		$("#gir_out_sum").val(girOutSum);

		var girTotalSum = girInSum+girOutSum;
		$("#gir_tot").val(girTotalSum);
		var greens = girTotalSum;
		$("#greens").val(greens);
		$("#no_gir_tot").val(countZeroGir);
		$("#missed_gir").val(countZeroGir);

		///////////
		var holePairOutList = []; 
		$('.hole_par_out').each(function(){
			holePairOutList.push( $(this).val() );
		});
		var par3Out=0;
		for(var index=0; index<9; index++)
		{
			if( holePairOutList[index]==3 )
			{
				par3Out = par3Out + 1;
			}
		}
		$("#par3_out").val(par3Out);
		$("#par3_out_sum").val(par3Out);

		var holePairInList = []; 
		$('.hole_par_in').each(function(){
			holePairInList.push( $(this).val() );
		});
		var par3In=0;
		for(var index=0; index<9; index++)
		{
			if( holePairInList[index]==3 )
			{
				par3In = par3In + 1;
			}
		}
		$("#par3_in").val(par3In);
		$("#par3_in_sum").val(par3In);
		totalPar3 = par3Out + par3In;
		par3_tot = totalPar3;
		$("#par3_tot").val(totalPar3);
		$("#hash_par3").val(totalPar3);

		var scoreOutList = []; 
		$('.score_out').each(function(){
			scoreOutList.push( $(this).val() );
		});

		var sumOutFromScoreForPar3Strokes = 0;
		for(var index=0;index<9;index++)
		{
			var holePairOutValue = holePairOutList[index];
			var scoreOutValue = scoreOutList[index];

			if(jQuery.isNumeric(holePairOutValue) && GetNumericValue(holePairOutValue)==3 )
			{
				if( jQuery.isNumeric(scoreOutValue) )
					sumOutFromScoreForPar3Strokes = sumOutFromScoreForPar3Strokes + GetNumericValue(scoreOutValue);
			}
		}
		$("#par3strokes_out").val(sumOutFromScoreForPar3Strokes);
		$("#par3strokes_out_sum").val(sumOutFromScoreForPar3Strokes);

		var scoreInList = []; 
		$('.score_in').each(function(){
			scoreInList.push( $(this).val() );
		});

		var sumInFromScoreForPar3Strokes = 0;
		for(var index=0;index<9;index++)
		{
			var holePairinValue = holePairInList[index];
			var scoreInValue = scoreInList[index];

			if(jQuery.isNumeric(holePairinValue) && GetNumericValue(holePairinValue)==3 )
			{
				if( jQuery.isNumeric(scoreInValue) )
					sumInFromScoreForPar3Strokes = sumInFromScoreForPar3Strokes + GetNumericValue(scoreInValue);
			}
		}
		$("#par3strokes_in").val(sumInFromScoreForPar3Strokes);
		$("#par3strokes_in_sum").val(sumInFromScoreForPar3Strokes);
		var par3StrokesTot = sumOutFromScoreForPar3Strokes + sumInFromScoreForPar3Strokes;
		$("#par3strokes_tot").val(par3StrokesTot);

		var sumOutFromScoreForPar3StrokesForPar3Scor = isNaN(sumOutFromScoreForPar3Strokes)?0:GetNumericValue(sumOutFromScoreForPar3Strokes);
		var par3OutForPar3Scor = GetNumericValue(par3Out);
		if(par3OutForPar3Scor==0)
			$("#par3_score_out_sum").val(0);
		else
		$("#par3_score_out_sum").val(sumOutFromScoreForPar3StrokesForPar3Scor/par3OutForPar3Scor);

		var sumInFromScoreForPar3StrokesForPar3Scor = isNaN(sumInFromScoreForPar3Strokes)?0:GetNumericValue(sumInFromScoreForPar3Strokes);
		var par3InForPar3Scor = GetNumericValue(par3In);
		if(par3InForPar3Scor == 0)
			$("#par3_score_in_sum").val(0);
		else
			$("#par3_score_in_sum").val(sumInFromScoreForPar3StrokesForPar3Scor/par3InForPar3Scor);

		var par3StrokesTotForPar3Scor = isNaN(par3StrokesTot)?0:GetNumericValue(par3StrokesTot);
		var totalPar3ForPar3Scor = GetNumericValue(totalPar3);
		if(par3_score_tot == 0 || totalPar3ForPar3Scor==0)
			$("#par3_score_tot").val(0);
		else
			$("#par3_score_tot").val(par3StrokesTotForPar3Scor/totalPar3ForPar3Scor);

		if(totalPar3==0)
			$("#par3_scoring").val("");
		else
		{	
			var par3_scoring = (par3StrokesTot / totalPar3).toFixed(2);
			$("#par3_scoring").val(par3_scoring);
		}

		var par4Out=0;
		for(var index=0; index<9; index++)
		{
			if( holePairOutList[index]==4 )
			{
				par4Out = par4Out + 1;
			}
		}
		$("#par4_out").val(par4Out);
		$("#par4_out_sum").val(par4Out);

		var par4In=0;
		for(var index=0; index<9; index++)
		{
			if( holePairInList[index]==4 )
			{
				par4In = par4In + 1;
			}
		}
		$("#par4_in").val(par4In);
		$("#par4_in_sum").val(par4In);
		totalPar4 = par4Out + par4In;
		var par4_tot = totalPar4;
		$("#par4_tot").val(totalPar4);
		$("#hash_par4").val(totalPar4);

		var sumOutFromScoreForPar4Strokes = 0;
		for(var index=0;index<9;index++)
		{
			var holePairOutValue = holePairOutList[index];
			var scoreOutValue = scoreOutList[index];

			if(jQuery.isNumeric(holePairOutValue) && GetNumericValue(holePairOutValue)==4 )
			{
				if( jQuery.isNumeric(scoreOutValue) )
					sumOutFromScoreForPar4Strokes = sumOutFromScoreForPar4Strokes + GetNumericValue(scoreOutValue);
			}
		}
		$("#par4strokes_out").val(sumOutFromScoreForPar4Strokes);
		$("#par4strokes_out_sum").val(sumOutFromScoreForPar4Strokes);

		var sumInFromScoreForPar4Strokes = 0;
		for(var index=0;index<9;index++)
		{
			var holePairinValue = holePairInList[index];
			var scoreInValue = scoreInList[index];

			if(jQuery.isNumeric(holePairinValue) && GetNumericValue(holePairinValue)==4 )
			{
				if( jQuery.isNumeric(scoreInValue) )
					sumInFromScoreForPar4Strokes = sumInFromScoreForPar4Strokes + GetNumericValue(scoreInValue);
			}
		}
		$("#par4strokes_in").val(sumInFromScoreForPar4Strokes);
		$("#par4strokes_in_sum").val(sumInFromScoreForPar4Strokes);
		var par4StrokesTot = sumOutFromScoreForPar4Strokes + sumInFromScoreForPar4Strokes;
		$("#par4strokes_tot").val(par4StrokesTot);

		var sumOutFromScoreForPar4StrokesForPar4Scor = isNaN(sumOutFromScoreForPar4Strokes)?0:GetNumericValue(sumOutFromScoreForPar4Strokes);
		var par4OutForPar4Scor = GetNumericValue(par4Out);
		if(par4OutForPar4Scor==0)
			$("#par4_score_out_sum").val(0);
		else
			$("#par4_score_out_sum").val(sumOutFromScoreForPar4StrokesForPar4Scor/par4OutForPar4Scor);

		var sumInFromScoreForPar4StrokesForPar4Scor = isNaN(sumInFromScoreForPar4Strokes)?0:GetNumericValue(sumInFromScoreForPar4Strokes);
		var par4InForPar4Scor = GetNumericValue(par4In);
		if(par4InForPar4Scor == 0)
			$("#par4_score_in_sum").val(0);
		else
			$("#par4_score_in_sum").val(sumInFromScoreForPar4StrokesForPar4Scor/par4InForPar4Scor);

		var par4StrokesTotForPar4Scor = isNaN(par4StrokesTot)?0:GetNumericValue(par4StrokesTot);
		var totalPar4ForPar4Scor = GetNumericValue(totalPar4);
		if(par4_score_tot == 0 || totalPar4ForPar4Scor==0)
			$("#par4_score_tot").val(0);
		else
			$("#par4_score_tot").val(par4StrokesTotForPar4Scor/totalPar4ForPar4Scor);

		if(totalPar4==0)
			$("#par4_scoring").val("");
		else
		{	
			var par4_scoring = (par4StrokesTot / totalPar4).toFixed(2);
			$("#par4_scoring").val(par4_scoring);
		}

		var par5Out=0;
		for(var index=0; index<9; index++)
		{
			if( holePairOutList[index]==5 )
			{
				par5Out = par5Out + 1;
			}
		}
		$("#par5_out").val(par5Out);
		$("#par5_out_sum").val(par5Out);

		var par5In = 0;
		for(var index=0; index<9; index++)
		{
			if( holePairInList[index]==5 )
			{
				par5In = par5In + 1;
			}
		}
		$("#par5_in").val(par5In);
		$("#par5_in_sum").val(par5In);
		totalPar5 = par5Out + par5In;
		var par5_tot = totalPar5;
		$("#par5_tot").val(totalPar5);
		$("#hash_par5").val(totalPar5);

		var sumOutFromScoreForPar5Strokes = 0;
		//var totalGirInHole = 0;
		for(var index=0;index<9;index++)
		{
			var holePairOutValue = holePairOutList[index];
			var scoreOutValue = scoreOutList[index];

			if(jQuery.isNumeric(holePairOutValue) && GetNumericValue(holePairOutValue)==5 )
			{
				if( jQuery.isNumeric(scoreOutValue) )
					sumOutFromScoreForPar5Strokes = sumOutFromScoreForPar5Strokes + GetNumericValue(scoreOutValue);
			}
		}
		$("#par5strokes_out").val(sumOutFromScoreForPar5Strokes);
		$("#par5strokes_out_sum").val(sumOutFromScoreForPar5Strokes);

		var sumInFromScoreForPar5Strokes = 0;
		for(var index=0;index<9;index++)
		{
			var holePairinValue = holePairInList[index];
			var scoreInValue = scoreInList[index];

			if(jQuery.isNumeric(holePairinValue) && GetNumericValue(holePairinValue)==5 )
			{
				if( jQuery.isNumeric(scoreInValue) )
					sumInFromScoreForPar5Strokes = sumInFromScoreForPar5Strokes + GetNumericValue(scoreInValue);
			}
		}
		$("#par5strokes_in").val(sumInFromScoreForPar5Strokes);
		$("#par5strokes_in_sum").val(sumInFromScoreForPar5Strokes);
		var par5StrokesTot = sumOutFromScoreForPar5Strokes + sumInFromScoreForPar5Strokes;
		$("#par5strokes_tot").val(par5StrokesTot);

		var sumOutFromScoreForPar5StrokesForPar5Scor = isNaN(sumOutFromScoreForPar5Strokes)?0:GetNumericValue(sumOutFromScoreForPar5Strokes);
		var par5OutForPar5Scor = GetNumericValue(par5Out);
		if(par5OutForPar5Scor==0)
			$("#par5_score_out_sum").val(0);
		else
			$("#par5_score_out_sum").val(sumOutFromScoreForPar5StrokesForPar5Scor/par5OutForPar5Scor);

		var sumInFromScoreForPar5StrokesForPar5Scor = isNaN(sumInFromScoreForPar5Strokes)?0:GetNumericValue(sumInFromScoreForPar5Strokes);
		var par5InForPar5Scor = GetNumericValue(par5In);
		if(par5InForPar5Scor == 0)
			$("#par5_score_in_sum").val(0);
		else
			$("#par5_score_in_sum").val(sumInFromScoreForPar5StrokesForPar5Scor/par5InForPar5Scor);

		var par5StrokesTotForPar5Scor = isNaN(par5StrokesTot)?0:GetNumericValue(par5StrokesTot);
		var totalPar5ForPar5Scor = GetNumericValue(totalPar5);
		if(par5_score_tot == 0 || totalPar5ForPar5Scor==0)
			$("#par5_score_tot").val(0);
		else
			$("#par5_score_tot").val(par5StrokesTotForPar5Scor/totalPar5ForPar5Scor);

		if(totalPar5==0)
			$("#par5_scoring").val("");
		else
		{	
			var par5_scoring = (par5StrokesTot / totalPar5).toFixed(2);
			$("#par5_scoring").val(par5_scoring);
		}

		if(( par3_tot + par4_tot + par5_tot)==0)
			$("#gir_percentage").val("");
		else
		{
			var gir_percentage = ((greens / ( par3_tot + par4_tot + par5_tot)*100).toFixed(2)+ "%");
			$("#gir_percentage").val(gir_percentage);
		}

		if((par4_tot + par5_tot)==0)
			$("#fir_percentage").val("");
		else
		{
			var fir_percentage = ((fairways / (par4_tot + par5_tot) * 100).toFixed(2) + "%");
			$("#fir_percentage").val(fir_percentage);
		}

	}
	$('.hole_par_in').on("change, keyup" , CalculateAllParStrokesAndParScors);
	$(".hole_par_out").on("change, keyup" ,CalculateAllParStrokesAndParScors);
	$('.score_in').on("change, keyup" , CalculateAllParStrokesAndParScors);
	$(".score_out").on("change, keyup" ,CalculateAllParStrokesAndParScors);
	$('.gir_in').on("change, keyup" , CalculateAllParStrokesAndParScors);
	$(".gir_out").on("change, keyup" ,CalculateAllParStrokesAndParScors);
	$('.fir_in').on("change, keyup" , CalculateAllParStrokesAndParScors);
	$(".fir_out").on("change, keyup" ,CalculateAllParStrokesAndParScors);

	function CalculateEagle()
	{
		var holePairOutList = []; 
		$('.hole_par_out').each(function(){
			holePairOutList.push( $(this).val() );
		});
		
		var scoreOutList = []; 
		$('.score_out').each(function(){
			scoreOutList.push( $(this).val() );
		});

		var eagleOutSum=0;
		for(var index=0; index<9; index++)
		{
			
			var holePairOutValue = holePairOutList[index];
			var scoreOutValue = scoreOutList[index];
			var opositeValue;
			if( !isNaN(holePairOutValue) && GetNumericValue(holePairOutValue)==0 ) 
				opositeValue = 0;
			else if(GetNumericValue(scoreOutValue)==(GetNumericValue(holePairOutValue)-2)) 
				opositeValue = 1;
			else
				opositeValue = 0;
			$("#eagle_out_" + index).val(opositeValue);
			eagleOutSum = eagleOutSum + opositeValue;
			$("#eagle_out_sum").val(eagleOutSum);
	
		}

		var holePairInList = []; 
		$('.hole_par_in').each(function(){
			holePairInList.push( $(this).val() );
		});
		
		var scoreInList = []; 
		$('.score_in').each(function(){
			scoreInList.push( $(this).val() );
		});

		var eagleInSum=0;
		for(var index=0; index<9; index++)
		{
			
			var holePairInValue = holePairInList[index];
			var scoreInValue = scoreInList[index];
			var opositeValue;
			if( !isNaN(holePairInValue) && GetNumericValue(holePairInValue)==0 ) 
				opositeValue = 0;
			else if(GetNumericValue(scoreInValue)==(GetNumericValue(holePairInValue)-2)) 
				opositeValue = 1;
			else
				opositeValue = 0;
			$("#eagle_in_" + index).val(opositeValue);
			eagleInSum = eagleInSum + opositeValue;
			$("#eagle_in_sum").val(eagleInSum);
		}
		var eagleTot = eagleOutSum + eagleInSum;
		$("#eagle_tot").val(eagleTot);
		$("#eagles").val(eagleTot);
	}
	$('.hole_par_in').on("change, keyup" , CalculateEagle);
	$(".hole_par_out").on("change, keyup" ,CalculateEagle);
	$('.score_in').on("change, keyup" , CalculateEagle);
	$(".score_out").on("change, keyup" ,CalculateEagle);

	function CalculateBirdie()
	{
		var holePairOutList = []; 
		$('.hole_par_out').each(function(){
			holePairOutList.push( $(this).val() );
		});
		
		var scoreOutList = []; 
		$('.score_out').each(function(){
			scoreOutList.push( $(this).val() );
		});

		var birdieOutSum=0;
		for(var index=0; index<9; index++)
		{
			
			var holePairOutValue = holePairOutList[index];
			var scoreOutValue = scoreOutList[index];
			var opositeValue;
			if( !isNaN(holePairOutValue) && GetNumericValue(holePairOutValue)==0 ) 
				opositeValue = 0;
			else if(GetNumericValue(scoreOutValue)==(GetNumericValue(holePairOutValue)-1)) 
				opositeValue = 1;
			else
				opositeValue = 0;
			$("#birdie_out_" + index).val(opositeValue);
			birdieOutSum = birdieOutSum + opositeValue;
			$("#birdie_out_sum").val(birdieOutSum);
	
		}

		var holePairInList = []; 
		$('.hole_par_in').each(function(){
			holePairInList.push( $(this).val() );
		});
		
		var scoreInList = []; 
		$('.score_in').each(function(){
			scoreInList.push( $(this).val() );
		});

		var birdieInSum=0;
		for(var index=0; index<9; index++)
		{
			
			var holePairInValue = holePairInList[index];
			var scoreInValue = scoreInList[index];
			var opositeValue;
			if( !isNaN(holePairInValue) && GetNumericValue(holePairInValue)==0 ) 
				opositeValue = 0;
			else if(GetNumericValue(scoreInValue)==(GetNumericValue(holePairInValue)-1)) 
				opositeValue = 1;
			else
				opositeValue = 0;
			$("#birdie_in_" + index).val(opositeValue);
			birdieInSum = birdieInSum + opositeValue;
			$("#birdie_in_sum").val(birdieInSum);
		}
		var birdieTot = birdieOutSum + birdieInSum;
		$("#birdie_tot").val(birdieTot);
		$("#birdies").val(birdieTot);
	}
	$('.hole_par_in').on("change, keyup" , CalculateBirdie);
	$(".hole_par_out").on("change, keyup" ,CalculateBirdie);
	$('.score_in').on("change, keyup" , CalculateBirdie);
	$(".score_out").on("change, keyup" ,CalculateBirdie);


	function CalculatePar()
	{
		var holePairOutList = []; 
		$('.hole_par_out').each(function(){
			holePairOutList.push( $(this).val() );
		});
		
		var scoreOutList = []; 
		$('.score_out').each(function(){
			scoreOutList.push( $(this).val() );
		});

		var parOutSum=0;
		for(var index=0; index<9; index++)
		{
			
			var holePairOutValue = holePairOutList[index];
			var scoreOutValue = scoreOutList[index];
			var opositeValue;
			if( !isNaN(holePairOutValue) && GetNumericValue(holePairOutValue)==0 ) 
				opositeValue = 0;
			else if(GetNumericValue(scoreOutValue)==GetNumericValue(holePairOutValue)) 
				opositeValue = 1;
			else
				opositeValue = 0;
			$("#par_out_" + index).val(opositeValue);
			parOutSum = parOutSum + opositeValue;
			$("#par_out_sum").val(parOutSum);
	
		}

		var holePairInList = []; 
		$('.hole_par_in').each(function(){
			holePairInList.push( $(this).val() );
		});
		
		var scoreInList = []; 
		$('.score_in').each(function(){
			scoreInList.push( $(this).val() );
		});

		var parInSum=0;
		for(var index=0; index<9; index++)
		{
			
			var holePairInValue = holePairInList[index];
			var scoreInValue = scoreInList[index];
			var opositeValue;
			if( !isNaN(holePairInValue) && GetNumericValue(holePairInValue)==0 ) 
				opositeValue = 0;
			else if(GetNumericValue(scoreInValue)==GetNumericValue(holePairInValue)) 
				opositeValue = 1;
			else
				opositeValue = 0;
			$("#par_in_" + index).val(opositeValue);
			parInSum = parInSum + opositeValue;
			$("#par_in_sum").val(parInSum);
		}
		var parTot = parOutSum +parInSum;
		$("#par_tot").val(parTot);
		$("#pars").val(parTot);
	}
	$('.hole_par_in').on("change, keyup" , CalculatePar);
	$(".hole_par_out").on("change, keyup" ,CalculatePar);
	$('.score_in').on("change, keyup" , CalculatePar);
	$(".score_out").on("change, keyup" ,CalculatePar);


	function CalculateBogey()
	{
		var holePairOutList = []; 
		$('.hole_par_out').each(function(){
			holePairOutList.push( $(this).val() );
		});
		
		var scoreOutList = []; 
		$('.score_out').each(function(){
			scoreOutList.push( $(this).val() );
		});

		var bogeyOutSum=0;
		for(var index=0; index<9; index++)
		{
			
			var holePairOutValue = holePairOutList[index];
			var scoreOutValue = scoreOutList[index];
			var opositeValue;
			if( !isNaN(holePairOutValue) && GetNumericValue(holePairOutValue)==0 ) 
				opositeValue = 0;
			else if(GetNumericValue(scoreOutValue)==(GetNumericValue(holePairOutValue)+1)) 
				opositeValue = 1;
			else
				opositeValue = 0;
			$("#bogey_out_" + index).val(opositeValue);
			bogeyOutSum = bogeyOutSum + opositeValue;
			$("#bogey_out_sum").val(bogeyOutSum);
	
		}

		var holePairInList = []; 
		$('.hole_par_in').each(function(){
			holePairInList.push( $(this).val() );
		});
		
		var scoreInList = []; 
		$('.score_in').each(function(){
			scoreInList.push( $(this).val() );
		});

		var bogeyInSum=0;
		for(var index=0; index<9; index++)
		{
			
			var holePairInValue = holePairInList[index];
			var scoreInValue = scoreInList[index];
			var opositeValue;
			if( !isNaN(holePairInValue) && GetNumericValue(holePairInValue)==0 ) 
				opositeValue = 0;
			else if(GetNumericValue(scoreInValue)==(GetNumericValue(holePairInValue)+1)) 
				opositeValue = 1;
			else
				opositeValue = 0;
			$("#bogey_in_" + index).val(opositeValue);
			bogeyInSum = bogeyInSum + opositeValue;
			$("#bogey_in_sum").val(bogeyInSum);
		}
		var bogeyTot = bogeyOutSum + bogeyInSum;
		$("#bogey_tot").val(bogeyTot);
		$("#bogeys").val(bogeyTot);
	}
	$('.hole_par_in').on("change, keyup" , CalculateBogey);
	$(".hole_par_out").on("change, keyup" ,CalculateBogey);
	$('.score_in').on("change, keyup" , CalculateBogey);
	$(".score_out").on("change, keyup" ,CalculateBogey);

	function CalculateDblBogey()
	{
		var holePairOutList = []; 
		$('.hole_par_out').each(function(){
			holePairOutList.push( $(this).val() );
		});
		
		var scoreOutList = []; 
		$('.score_out').each(function(){
			scoreOutList.push( $(this).val() );
		});

		var dblbogeyOutSum=0;
		for(var index=0; index<9; index++)
		{
			
			var holePairOutValue = holePairOutList[index];
			var scoreOutValue = scoreOutList[index];
			var opositeValue;
			if( !isNaN(holePairOutValue) && GetNumericValue(holePairOutValue)==0 ) 
				opositeValue = 0;
			else if(GetNumericValue(scoreOutValue)==(GetNumericValue(holePairOutValue)+2)) 
				opositeValue = 1;
			else
				opositeValue = 0;
			$("#dblbogey_out_" + index).val(opositeValue);
			dblbogeyOutSum = dblbogeyOutSum + opositeValue;
			$("#dblbogey_out_sum").val(dblbogeyOutSum);
	
		}

		var holePairInList = []; 
		$('.hole_par_in').each(function(){
			holePairInList.push( $(this).val() );
		});
		
		var scoreInList = []; 
		$('.score_in').each(function(){
			scoreInList.push( $(this).val() );
		});

		var dblbogeyInSum=0;
		for(var index=0; index<9; index++)
		{
			
			var holePairInValue = holePairInList[index];
			var scoreInValue = scoreInList[index];
			var opositeValue;
			if( !isNaN(holePairInValue) && GetNumericValue(holePairInValue)==0 ) 
				opositeValue = 0;
			else if(GetNumericValue(scoreInValue)==(GetNumericValue(holePairInValue)+2)) 
				opositeValue = 1;
			else
				opositeValue = 0;
			$("#dblbogey_in_" + index).val(opositeValue);
			dblbogeyInSum = dblbogeyInSum + opositeValue;
			$("#dblbogey_in_sum").val(dblbogeyInSum);
		}
		var dblbogeyTot = dblbogeyOutSum + dblbogeyInSum;
		$("#dblbogey_tot").val(dblbogeyTot);
		$("#dblbogeys").val(dblbogeyTot);
	}
	$('.hole_par_in').on("change, keyup" , CalculateDblBogey);
	$(".hole_par_out").on("change, keyup" ,CalculateDblBogey);
	$('.score_in').on("change, keyup" , CalculateDblBogey);
	$(".score_out").on("change, keyup" ,CalculateDblBogey);


	function CalculatOther()
	{
		var holePairOutList = []; 
		$('.hole_par_out').each(function(){
			holePairOutList.push( $(this).val() );
		});
		
		var scoreOutList = []; 
		$('.score_out').each(function(){
			scoreOutList.push( $(this).val() );
		});

		var otherOutSum=0;
		for(var index=0; index<9; index++)
		{
			
			var holePairOutValue = holePairOutList[index];
			var scoreOutValue = scoreOutList[index];
			var opositeValue;
			if( !isNaN(holePairOutValue) && GetNumericValue(holePairOutValue)==0 ) 
				opositeValue = 0;
			else if(GetNumericValue(scoreOutValue)>=(GetNumericValue(holePairOutValue)+3)) 
				opositeValue = 1;
			else
				opositeValue = 0;
			$("#other_out_" + index).val(opositeValue);
			otherOutSum = otherOutSum + opositeValue;
			$("#other_out_sum").val(otherOutSum);
	
		}

		var holePairInList = []; 
		$('.hole_par_in').each(function(){
			holePairInList.push( $(this).val() );
		});
		
		var scoreInList = []; 
		$('.score_in').each(function(){
			scoreInList.push( $(this).val() );
		});

		var otherInSum=0;
		for(var index=0; index<9; index++)
		{
			
			var holePairInValue = holePairInList[index];
			var scoreInValue = scoreInList[index];
			var opositeValue;
			if( !isNaN(holePairInValue) && GetNumericValue(holePairInValue)==0 ) 
				opositeValue = 0;
			else if(GetNumericValue(scoreInValue)>=(GetNumericValue(holePairInValue)+3)) 
				opositeValue = 1;
			else
				opositeValue = 0;
			$("#other_in_" + index).val(opositeValue);
			otherInSum = otherInSum + opositeValue;
			$("#other_in_sum").val(otherInSum);
		}
		var otherTot = otherOutSum + otherInSum;
		$("#other_tot").val(otherTot);
		$("#others").val(otherTot);
	}
	$('.hole_par_in').on("change, keyup" , CalculatOther);
	$(".hole_par_out").on("change, keyup" ,CalculatOther);
	$('.score_in').on("change, keyup" , CalculatOther);
	$(".score_out").on("change, keyup" ,CalculatOther);
});

String.prototype.endWith = function(suffix) {
    return this.indexOf(suffix, this.length - suffix.length) !== -1;
};

function GetNumericValue(str)
{
	if((typeof str === 'string' || str instanceof String) && str.endWith("."))
		str = str.replace('.','');
	
	if(str.length==0)
		return 0;
	if(/^([0-9]+)$/.test(str))
		return parseInt(str);
	return parseFloat(str);
}



