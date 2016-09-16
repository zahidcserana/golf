<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use DB;
use Mockery\CountValidator\Exception;
use Validator;
class GolfCourse extends Model
{
    protected $table = 'golf_course';
	protected $fillable = ['id', 'users', 'data'];
	protected $primaryKey = 'id';
	public $timestamps = false;

	public function GetUserCourse($userId)
	{
		return DB::table($this->table)->where('user_id', $userId)->get();
	}
	public function GetCourse($courseId, $userId)
	{
		return DB::table($this->table)->where('id', $courseId)->where('user_id', $userId)->first();
	}
	public function GetList($userId, $number)
 	{
 	 	return DB::table($this->table)->where('user_id', $userId)->paginate($number);
 	}
 	public function CheckList($userId)
 	{
 	 	return DB::table($this->table)->where('user_id', $userId)->get();
 	}
 	public function DeleteCourse($courseId)
	{
		return DB::table($this->table)->where('id', $courseId)->delete();
	}
 	public function UpdateCourse($courseIdFromRoute, $editedData, $editedSummaryData, $editedLocation)
 	{

		$decodedEditedSummaryData = json_decode($editedSummaryData);
		$decodedEditedData = json_decode($editedData, true);
		//dd($editedSummaryData->eagles[0]);

 	 	return DB::table($this->table)->where('id', $courseIdFromRoute)->update(['data'=> $editedData, 'summary_data'=> $editedSummaryData, 'location'=> $editedLocation, 'par3_scoring'=>$decodedEditedSummaryData->par3_scoring[0], 'par4_scoring'=>$decodedEditedSummaryData->par4_scoring[0], 'par5_scoring'=>$decodedEditedSummaryData->par5_scoring[0], 'hash_par3'=>$decodedEditedSummaryData->hash_par3[0], 'hash_par4'=>$decodedEditedSummaryData->hash_par4[0], 'hash_par5'=>$decodedEditedSummaryData->hash_par5[0], 'eagles'=>$decodedEditedSummaryData->eagles[0], 'birdies'=>$decodedEditedSummaryData->birdies[0], 'pars'=>$decodedEditedSummaryData->pars[0], 'bogeys'=>$decodedEditedSummaryData->bogeys[0], 'dblbogeys'=>$decodedEditedSummaryData->dblbogeys[0], 'others'=>$decodedEditedSummaryData->others[0], 'fairways'=>$decodedEditedSummaryData->fairways[0], 'fir_percentage'=>$decodedEditedSummaryData->fir_percentage[0], 'greens'=>$decodedEditedSummaryData->greens[0], 'gir_percentage'=>$decodedEditedSummaryData->gir_percentage[0], 'played_holes_equation'=>$decodedEditedSummaryData->played_holes_equation[0], 'hole_rds_18'=>$decodedEditedSummaryData->hole_rds_18[0], 'scramble_opp_equation'=>$decodedEditedSummaryData->scramble_opp_equation[0], 'scramble_sav_equation'=>$decodedEditedSummaryData->scramble_sav_equation[0], 'scramble_percentage'=>$decodedEditedSummaryData->scramble_percentage[0], 'sand_opp_equation'=>$decodedEditedSummaryData->sand_opp_equation[0], 'sand_sav_equation'=>$decodedEditedSummaryData->sand_sav_equation[0], 'sand_sav_percentage'=>$decodedEditedSummaryData->sand_sav_percentage[0], 'missed_gir'=>$decodedEditedSummaryData->missed_gir[0], 'put_1_nogir'=>$decodedEditedSummaryData->put_1_nogir[0], 'avg_dist_chip'=>$decodedEditedSummaryData->avg_dist_chip[0], 'total_putts'=>$decodedEditedSummaryData->total_putts[0], 'putts_div_hole'=>$decodedEditedSummaryData->putts_div_hole[0], 'avg_score'=>$decodedEditedSummaryData->avg_score[0], 'putt_opp_5_equation'=>$decodedEditedSummaryData->putt_opp_5_equation[0], 'putt_opp_5_9_equation'=>$decodedEditedSummaryData->putt_opp_5_9_equation[0], 'putt_opp_10_19_equation'=>$decodedEditedSummaryData->putt_opp_10_19_equation[0], 'putt_opp_20_29_equation'=>$decodedEditedSummaryData->putt_opp_20_29_equation[0], 'putt_opp_30_equation'=>$decodedEditedSummaryData->putt_opp_30_equation[0], 'putt_make_5_equation'=>$decodedEditedSummaryData->putt_make_5_equation[0], 'putt_make_5_9_equation'=>$decodedEditedSummaryData->putt_make_5_9_equation[0], 'putt_make_10_19_equation'=>$decodedEditedSummaryData->putt_make_10_19_equation[0], 'putt_make_20_29_equation'=>$decodedEditedSummaryData->putt_make_20_29_equation[0], 'putt_make_30_equation'=>$decodedEditedSummaryData->putt_make_30_equation[0], 'make_percentage_5'=>$decodedEditedSummaryData->make_percentage_5[0], 'make_percentage_5_9'=>$decodedEditedSummaryData->make_percentage_5_9[0], 'make_percentage_10_19'=>$decodedEditedSummaryData->make_percentage_10_19[0], 'make_percentage_20_29'=>$decodedEditedSummaryData->make_percentage_20_29[0], 'make_percentage_30'=>$decodedEditedSummaryData->make_percentage_30[0],'par3_strokes_tot' => $decodedEditedData['par3strokes']['tot'],'par4_strokes_tot' => $decodedEditedData['par4strokes']['tot'],'par5_strokes_tot' => $decodedEditedData['par5strokes']['tot'],'par3_total' => $decodedEditedData['par3']['tot'],'par4_total' => $decodedEditedData['par4']['tot'],'par5_total' => $decodedEditedData['par5']['tot'] ]);
 	}
	
 	public function GetState($userId)
 	{
		$query = "select * from golf_course where user_id = ?";
		$rowList = DB::select($query, [$userId]);
		$varriableList = array('par3_scoring' , 'par4_scoring', 'par5_scoring', 'hash_par3', 'hash_par4', 'hash_par5', 'eagles', 'birdies', 'pars', 'bogeys', 'dblbogeys', 'others', 'fairways', 'fir_percentage', 'greens', 'gir_percentage', 'played_holes_equation', 'hole_rds_18', 'scramble_opp_equation', 'scramble_sav_equation', 'scramble_percentage', 'sand_opp_equation', 'sand_sav_equation', 'sand_sav_percentage', 'missed_gir', 'put_1_nogir', 'avg_dist_chip', 'total_putts', 'putts_div_hole', 'avg_score', 'putt_opp_5_equation', 'putt_opp_5_9_equation', 'putt_opp_10_19_equation','putt_opp_20_29_equation', 'putt_opp_30_equation', 'putt_make_5_equation', 'putt_make_5_9_equation', 'putt_make_10_19_equation', 'putt_make_20_29_equation', 'putt_make_30_equation', 'make_percentage_5', 'make_percentage_5_9', 'make_percentage_10_19', 'make_percentage_20_29', 'make_percentage_30', 'par3_strokes_tot', 'par4_strokes_tot', 'par5_strokes_tot', 'par3_total', 'par4_total', 'par5_total' );
		
		$statAverage = array();
		
		foreach($varriableList as $aVarriable)
		{
			$statAverage[$aVarriable]=array('sum'=>0,'count'=>0);
		}
		foreach($rowList as $row)
		{
			foreach($varriableList as $aVarriable)
			{
				$str = $row->$aVarriable;
				$str = trim(str_replace('%','',$str));
				if( strlen($str)>0 && is_numeric($str) )
				{
					$numericValue = is_int($str)?intval($str):floatval($str);
					$statAverage[$aVarriable]['sum'] += $numericValue;
					$statAverage[$aVarriable]['count']++;
				}
			}
		}
		
		foreach($statAverage as $key=>&$aStat )
		{
			if($key=='par3_scoring' )
			{
				if($statAverage['par3_total']['sum']!=0)
					$aStat['avg'] = round( $statAverage['par3_strokes_tot']['sum'] / $statAverage['par3_total']['sum'], 2);
				else
					$aStat['avg'] = "";
			}
			else if($key=='par4_scoring' )
			{
				if($statAverage['par4_total']['sum']!=0)
					$aStat['avg'] = round( $statAverage['par4_strokes_tot']['sum'] / $statAverage['par4_total']['sum'], 2);
				else
					$aStat['avg'] = "";
			}
			else if($key=='par5_scoring' )
			{
				if($statAverage['par5_total']['sum']!=0)
					$aStat['avg'] = round( $statAverage['par5_strokes_tot']['sum'] / $statAverage['par5_total']['sum'], 2);
				else
					$aStat['avg'] = "";
			}
			else if($key=='fir_percentage' )
			{
				if($statAverage['hash_par4']['sum'] + $statAverage['hash_par5']['sum']!=0)
					$aStat['avg'] = round( $statAverage['fairways']['sum'] * 100 / ( $statAverage['hash_par4']['sum'] + 	$statAverage['hash_par5']['sum']), 2);
				else
					$aStat['avg'] = "";
			}
			else if($key=='gir_percentage')
			{
				if($statAverage['hash_par3']['sum']+$statAverage['hash_par4']['sum'] + $statAverage['hash_par5']['sum']!=0)
					$aStat['avg'] = round( $statAverage['greens']['sum'] * 100 / ( $statAverage['hash_par3']['sum']+$statAverage['hash_par4']['sum'] + $statAverage['hash_par5']['sum']), 2);
				else
					$aStat['avg'] = "";
			}
			else if($key=='scramble_percentage' )
			{
				if($statAverage['scramble_opp_equation']['sum']!=0)
					$aStat['avg'] = round( $statAverage['scramble_sav_equation']['sum'] * 100 / $statAverage['scramble_opp_equation']['sum'], 2);
				else
					$aStat['avg'] = "";
			}
			else if($key=='sand_sav_percentage' )
			{
				if($statAverage['sand_opp_equation']['sum']!=0)
					$aStat['avg'] = round( $statAverage['sand_sav_equation']['sum'] * 100 / $statAverage['sand_opp_equation']['sum'], 2);
				else
					$aStat['avg'] = "";
			}
			else if($key=='avg_dist_chip' )
			{
				if($statAverage['missed_gir']['sum']!=0)
					$aStat['avg'] = round( $statAverage['put_1_nogir']['sum'] * 100 / $statAverage['missed_gir']['sum'], 2);
				else
					$aStat['avg'] = "";
			}
			else if($key=='avg_score')
			{
				if($statAverage['played_holes_equation']['sum']!=0)
					$aStat['avg'] = round( $statAverage['total_putts']['sum'] * 100 / $statAverage['played_holes_equation']['sum'], 2);
				else
					$aStat['avg'] =  "";
			}
			else if($key=='make_percentage_5')
			{
				if($statAverage['putt_opp_5_equation']['sum']!=0)
					$aStat['avg'] = round( $statAverage['putt_make_5_equation']['sum'] * 100 / $statAverage['putt_opp_5_equation']['sum'], 2);
				else
					$aStat['avg'] =  "";
			}
			else if($key=='make_percentage_5_9')
			{
				if($statAverage['putt_opp_5_9_equation']['sum']!=0)
					$aStat['avg'] = round( $statAverage['putt_make_5_9_equation']['sum'] * 100 / $statAverage['putt_opp_5_9_equation']['sum'], 2);
				else
					$aStat['avg'] =  "";
			}
			else if($key=='make_percentage_10_19' )
			{
				if($statAverage['putt_opp_10_19_equation']['sum']!=0)
					$aStat['avg'] = round( $statAverage['putt_make_10_19_equation']['sum'] * 100 / $statAverage['putt_opp_10_19_equation']['sum'], 2);
				else
					$aStat['avg'] =  "";
			}
			else if($key=='make_percentage_20_29' )
			{
				if($statAverage['putt_opp_20_29_equation']['sum']!=0)
					$aStat['avg'] = round( $statAverage['putt_make_20_29_equation']['sum'] * 100 / $statAverage['putt_opp_20_29_equation']['sum'], 2);
				else
					$aStat['avg'] =  "";
			}
			else if($key=='make_percentage_30' )
			{
				if($statAverage['putt_opp_30_equation']['sum']!=0)
					$aStat['avg'] = round( $statAverage['putt_make_30_equation']['sum'] * 100 / $statAverage['putt_opp_30_equation']['sum'], 2);
				else
					$aStat['avg'] =  "";
			}
			else if($aStat['count']!=0)
				$aStat['avg'] = $aStat['sum'];
			
			else
				$aStat['avg'] = "";
		}
		
		return $statAverage;

 	}
}
