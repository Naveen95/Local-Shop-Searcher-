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

class personalInfoController extends Controller 
{


	Public function showPage()
	{

		$user_details = DB::table('users')
		->where('id',Auth::user()->id)
		->get();

		return view('personal_info')->with('user_details',$user_details);
	}


	public function form(Request $request)
	{

		$post = $request->all();

		$val=\Validator::make($request->all(),

		[
		   
		   'city' =>    'required',
		   'phone' =>     'required',
		   'area' =>  'required',
		   'email' =>    'required',


		]);

			if ($val ->fails()) 
				{
				
					return redirect()->back()->withErrors($val->errors());
					
				}



			else
			{



					$data =array(

					   
					   'city' =>   $post['city'], 
					   'phone' =>    $post['phone'],	
					   'email' => $post['email'], 


					   'area' =>  $post['area'] ,);				   				   



					$updatedata = DB::table('users')
					->where('id','=',\Auth::user()->id)
					->update($data);

					if ($updatedata>0) 

					   {
                            return view('/home');
	                   }

	                else
	                {

	                	return view('/personal_info');
	                }

			}

   





	}
}

?>