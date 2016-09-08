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
		//dd($editedSummaryData->eagles[0]);

 	 	return DB::table($this->table)->where('id', $courseIdFromRoute)->update(['data'=> $editedData, 'summary_data'=> $editedSummaryData, 'location'=> $editedLocation, 'par3_scoring'=>$decodedEditedSummaryData->par3_scoring[0], 'par4_scoring'=>$decodedEditedSummaryData->par4_scoring[0], 'par5_scoring'=>$decodedEditedSummaryData->par5_scoring[0], 'hash_par3'=>$decodedEditedSummaryData->hash_par3[0], 'hash_par4'=>$decodedEditedSummaryData->hash_par4[0], 'hash_par5'=>$decodedEditedSummaryData->hash_par5[0], 'eagles'=>$decodedEditedSummaryData->eagles[0], 'birdies'=>$decodedEditedSummaryData->birdies[0], 'pars'=>$decodedEditedSummaryData->pars[0], 'bogeys'=>$decodedEditedSummaryData->bogeys[0], 'dblbogeys'=>$decodedEditedSummaryData->dblbogeys[0], 'others'=>$decodedEditedSummaryData->others[0], 'fairways'=>$decodedEditedSummaryData->fairways[0], 'fir_percentage'=>$decodedEditedSummaryData->fir_percentage[0], 'greens'=>$decodedEditedSummaryData->greens[0], 'gir_percentage'=>$decodedEditedSummaryData->gir_percentage[0], 'played_holes_equation'=>$decodedEditedSummaryData->played_holes_equation[0], 'hole_rds_18'=>$decodedEditedSummaryData->hole_rds_18[0], 'scramble_opp_equation'=>$decodedEditedSummaryData->scramble_opp_equation[0], 'scramble_sav_equation'=>$decodedEditedSummaryData->scramble_sav_equation[0], 'scramble_percentage'=>$decodedEditedSummaryData->scramble_percentage[0], 'sand_opp_equation'=>$decodedEditedSummaryData->sand_opp_equation[0], 'sand_sav_equation'=>$decodedEditedSummaryData->sand_sav_equation[0], 'sand_sav_percentage'=>$decodedEditedSummaryData->sand_sav_percentage[0], 'missed_gir'=>$decodedEditedSummaryData->missed_gir[0], 'put_1_nogir'=>$decodedEditedSummaryData->put_1_nogir[0], 'avg_dist_chip'=>$decodedEditedSummaryData->avg_dist_chip[0], 'total_putts'=>$decodedEditedSummaryData->total_putts[0], 'putts_div_hole'=>$decodedEditedSummaryData->putts_div_hole[0], 'avg_score'=>$decodedEditedSummaryData->avg_score[0], 'putt_opp_5_equation'=>$decodedEditedSummaryData->putt_opp_5_equation[0], 'putt_opp_5_9_equation'=>$decodedEditedSummaryData->putt_opp_5_9_equation[0], 'putt_opp_10_19_equation'=>$decodedEditedSummaryData->putt_opp_10_19_equation[0], 'putt_opp_20_29_equation'=>$decodedEditedSummaryData->putt_opp_20_29_equation[0], 'putt_opp_30_equation'=>$decodedEditedSummaryData->putt_opp_30_equation[0], 'putt_make_5_equation'=>$decodedEditedSummaryData->putt_make_5_equation[0], 'putt_make_5_9_equation'=>$decodedEditedSummaryData->putt_make_5_9_equation[0], 'putt_make_10_19_equation'=>$decodedEditedSummaryData->putt_make_10_19_equation[0], 'putt_make_20_29_equation'=>$decodedEditedSummaryData->putt_make_20_29_equation[0], 'putt_make_30_equation'=>$decodedEditedSummaryData->putt_make_30_equation[0], 'make_percentage_5'=>$decodedEditedSummaryData->make_percentage_5[0], 'make_percentage_5_9'=>$decodedEditedSummaryData->make_percentage_5_9[0], 'make_percentage_10_19'=>$decodedEditedSummaryData->make_percentage_10_19[0], 'make_percentage_20_29'=>$decodedEditedSummaryData->make_percentage_20_29[0], 'make_percentage_30'=>$decodedEditedSummaryData->make_percentage_30[0]]);
 	}
 	public function GetState($userId)
 	{
 		/*$query = "SELECT avg(par3_scoring) as avg_par3_scoring,
		avg(par4_scoring) as avg_par4_scoring,
		avg(par5_scoring) as avg_par5_scoring,
		avg(hash_par3) as avg_hash_par3,
		avg(hash_par4) as avg_hash_par4,
		avg(hash_par5) as avg_hash_par5,
		avg(eagles) as avg_eagles,
		avg(birdies) as avg_birdies,
		avg(pars) as avg_pars,
		avg(bogeys) as avg_bogeys,
		avg(dblbogeys) as avg_dblbogeys,
		avg(others) as avg_others,
		avg(fairways) as avg_fairways,
		avg(fir_percentage) as avg_fir_percentage,
		avg(greens) as avg_greens,
		avg(gir_percentage) as avg_gir_percentage,
		avg(played_holes_equation) as avg_played_holes_equation,
		avg(hole_rds_18) as avg_hole_rds_18,
		avg(scramble_opp_equation) as avg_scramble_opp_equation,
		avg(scramble_sav_equation) as avg_scramble_sav_equation,
		avg(scramble_percentage) as avg_scramble_percentage,
		avg(sand_opp_equation) as avg_sand_opp_equation,
		avg(sand_sav_equation) as avg_sand_sav_equation,
		avg(sand_sav_percentage) as avg_sand_sav_percentage,
		avg(missed_gir) as avg_missed_gir,
		avg(put_1_nogir) as avg_put_1_nogir,
		avg(avg_dist_chip) as avg_avg_dist_chip,
		avg(total_putts) as avg_total_putts,
		avg(putts_div_hole) as avg_putts_div_hole,
		avg(avg_score) as avg_avg_score,
		avg(putt_opp_5_equation) as avg_putt_opp_5_equation,
		avg(putt_opp_5_9_equation) as avg_putt_opp_5_9_equation,
		avg(putt_opp_10_19_equation) as avg_putt_opp_10_19_equation,
		avg(putt_opp_20_29_equation) as avg_putt_opp_20_29_equation,
		avg(putt_opp_30_equation) as avg_putt_opp_30_equation,
		avg(putt_make_5_equation) as avg_putt_make_5_equation,
		avg(putt_make_5_9_equation) as avg_putt_make_5_9_equation,
		avg(putt_make_10_19_equation) as avg_putt_make_10_19_equation,
		avg(putt_make_20_29_equation) as avg_putt_make_20_29_equation,
		avg(putt_make_30_equation) as avg_putt_make_30_equation,
		avg(make_percentage_5) as avg_make_percentage_5,
		avg(make_percentage_5_9) as avg_make_percentage_5_9,
		avg(make_percentage_10_19) as avg_make_percentage_10_19,
		avg(make_percentage_20_29) as avg_make_percentage_20_29,
		avg(make_percentage_30) as avg_make_percentage_30 FROM golf_course where user_id = ?";
		$rowList = DB::select($query, [$userId]);*/
		$query = "select * from golf_course where user_id = ?";
		$rowList = DB::select($query, [$userId]);
		$varriableList = array('par3_scoring' , 'par4_scoring', 'par5_scoring', 'hash_par3', 'hash_par4', 'hash_par5', 'eagles', 'birdies', 'pars', 'bogeys', 'dblbogeys', 'others', 'fairways', 'fir_percentage', 'greens', 'gir_percentage', 'played_holes_equation', 'hole_rds_18', 'scramble_opp_equation', 'scramble_sav_equation', 'scramble_percentage', 'sand_opp_equation', 'sand_sav_equation', 'sand_sav_percentage', 'missed_gir', 'put_1_nogir', 'avg_dist_chip', 'total_putts', 'putts_div_hole', 'avg_score', 'putt_opp_5_equation', 'putt_opp_5_9_equation', 'putt_opp_10_19_equation','putt_opp_20_29_equation', 'putt_opp_30_equation', 'putt_make_5_equation', 'putt_make_5_9_equation', 'putt_make_10_19_equation', 'putt_make_20_29_equation', 'putt_make_30_equation', 'make_percentage_5', 'make_percentage_5_9', 'make_percentage_10_19', 'make_percentage_20_29', 'make_percentage_30' );
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
		foreach($statAverage as &$aStat )
		{
			if($aStat['count']!=0)
				$aStat['avg'] = round($aStat['sum']/$aStat['count']);
			else
				$aStat['avg'] = "";
		}
		return $statAverage;

 	}
}














































