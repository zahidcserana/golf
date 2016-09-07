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
 	public function UpdateCourse($courseIdFromRoute, $editedData, $editedSummaryData)
 	{

		$decodedEditedSummaryData = json_decode($editedSummaryData);
		//dd($editedSummaryData->eagles[0]);

 	 	return DB::table($this->table)->where('id', $courseIdFromRoute)->update(['data'=> $editedData, 'summary_data'=> $editedSummaryData, 'par3_scoring'=>$decodedEditedSummaryData->par3_scoring[0], 'par4_scoring'=>$decodedEditedSummaryData->par4_scoring[0], 'par5_scoring'=>$decodedEditedSummaryData->par5_scoring[0], 'hash_par3'=>$decodedEditedSummaryData->hash_par3[0], 'hash_par4'=>$decodedEditedSummaryData->hash_par4[0], 'hash_par5'=>$decodedEditedSummaryData->hash_par5[0], 'eagles'=>$decodedEditedSummaryData->eagles[0], 'birdies'=>$decodedEditedSummaryData->birdies[0], 'pars'=>$decodedEditedSummaryData->pars[0], 'bogeys'=>$decodedEditedSummaryData->bogeys[0], 'dblbogeys'=>$decodedEditedSummaryData->dblbogeys[0], 'others'=>$decodedEditedSummaryData->others[0], 'fairways'=>$decodedEditedSummaryData->fairways[0], 'fir_percentage'=>$decodedEditedSummaryData->fir_percentage[0], 'greens'=>$decodedEditedSummaryData->greens[0], 'gir_percentage'=>$decodedEditedSummaryData->gir_percentage[0], 'played_holes_equation'=>$decodedEditedSummaryData->played_holes_equation[0], 'hole_rds_18'=>$decodedEditedSummaryData->hole_rds_18[0], 'scramble_opp_equation'=>$decodedEditedSummaryData->scramble_opp_equation[0], 'scramble_sav_equation'=>$decodedEditedSummaryData->scramble_sav_equation[0], 'scramble_percentage'=>$decodedEditedSummaryData->scramble_percentage[0], 'sand_opp_equation'=>$decodedEditedSummaryData->sand_opp_equation[0], 'sand_sav_equation'=>$decodedEditedSummaryData->sand_sav_equation[0], 'sand_sav_percentage'=>$decodedEditedSummaryData->sand_sav_percentage[0], 'missed_gir'=>$decodedEditedSummaryData->missed_gir[0], 'put_1_nogir'=>$decodedEditedSummaryData->put_1_nogir[0], 'avg_dist_chip'=>$decodedEditedSummaryData->avg_dist_chip[0], 'total_putts'=>$decodedEditedSummaryData->total_putts[0], 'putts_div_hole'=>$decodedEditedSummaryData->putts_div_hole[0], 'avg_score'=>$decodedEditedSummaryData->avg_score[0], 'putt_opp_5_equation'=>$decodedEditedSummaryData->putt_opp_5_equation[0], 'putt_opp_5_9_equation'=>$decodedEditedSummaryData->putt_opp_5_9_equation[0], 'putt_opp_10_19_equation'=>$decodedEditedSummaryData->putt_opp_10_19_equation[0], 'putt_opp_20_29_equation'=>$decodedEditedSummaryData->putt_opp_20_29_equation[0], 'putt_opp_30_equation'=>$decodedEditedSummaryData->putt_opp_30_equation[0], 'putt_make_5_equation'=>$decodedEditedSummaryData->putt_make_5_equation[0], 'putt_make_5_9_equation'=>$decodedEditedSummaryData->putt_make_5_9_equation[0], 'putt_make_10_19_equation'=>$decodedEditedSummaryData->putt_make_10_19_equation[0], 'putt_make_20_29_equation'=>$decodedEditedSummaryData->putt_make_20_29_equation[0], 'putt_make_30_equation'=>$decodedEditedSummaryData->putt_make_30_equation[0], 'make_percentage_5'=>$decodedEditedSummaryData->make_percentage_5[0], 'make_percentage_5_9'=>$decodedEditedSummaryData->make_percentage_5_9[0], 'make_percentage_10_19'=>$decodedEditedSummaryData->make_percentage_10_19[0], 'make_percentage_20_29'=>$decodedEditedSummaryData->make_percentage_20_29[0], 'make_percentage_30'=>$decodedEditedSummaryData->make_percentage_30[0]]);
 	}
}














































