<?php 
namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use App\project;
use Illuminate\Contracts\Auth\User;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Auth;
use Crypt;
use Illuminate\Pagination\LengthAwarePaginator;

class indexSearchController extends Controller 
{

	public function indexSearch(Request $request)
	{

		$post = $request->all();
		$val = \Validator::make($request->all(),

		[
		   'city' =>    'required',


		]);

		if ($val ->fails()) 
				{
				
					return redirect()->back()->withErrors($val->errors());
					
				}

				else{


					$data =array(

				   'city' => $post['city'] ,
				   'city_id' => $post['city'],
				   'area' => $post['area'],
				   'type'=>  $post['type'],
				   );

					$project = new project();

					 

					
					if(($post['city'] != NULL) && ($post['area'] == NULL) && ($post['type'] == NULL))
					{
					$result = $project::
                    where('city', $post['city'])
                    ->orWhere('area',$post['area'])
                    ->get();



                    return View('category-list')->with('result', $result);
                }


                if(($post['city'] != NULL) && ($post['area'] !== NULL) && ($post['type'] == NULL))
					{
					$result = $project::
                    where('city', $post['city'])
                    ->Where('area',$post['area']) 
                    ->Where('city_id',$post['city'])
                    ->get();
                    



                    return View('category-list')->with('result', $result);
                }



				}


	}


		
	

	}

?>