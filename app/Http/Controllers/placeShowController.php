<?php 
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\project;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;

class placeShowController extends Controller 
{

	public function showPlace($placename , $placeid)
	{
		$place_name = $placename;
		$place_id = $placeid;

		$project = new project();
		$place_details = $project::where('id',$place_id)
		->get();



		//var_dump($place_details);
		//$place['placename'] = $placename;
		//var_dump($place);
		return view('room-single' , ['place_details' => $place_details]);
	}

}

?>