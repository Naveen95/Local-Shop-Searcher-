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

class adminController extends Controller 
{

	public function index()
	{

		return view('admin_page.admin');
	}

	public function form(Request $request)
	{

		$post = $request->all();

		$val=\Validator::make($request->all(),

		[
		   'name' =>    'required',
		   'city' =>    'required',
		   'type' =>     'required',
		   'area' =>  'required',
		   'gender' =>    'required',
		   'address' => 'required',
		   'phone' => 'required',
		   'email' => 'required',
		   'latitude' =>     'required',
		   'longitude'=>         'required',
		   'overview' =>  'required',
		   'description' =>    'required',
		   'sauna' =>     'required',
		   'physiotherapist'=>         'required',
		   'shower' =>  'required',
		   'steam' =>    'required',
		   'washroom' =>     'required',
		   'ac'=>         'required',
		   'wifi' =>  'required',
		   'lc' =>     'required',
		   'parking'=>         'required',
		   'hs' =>  'required',

		]);

			if ($val ->fails()) 
				{
				
					return redirect()->back()->withErrors($val->errors());
					
				}



			else
			{



					$data =array(

					   'name' =>   $post['name'],
					   'sname' =>  str_replace(' ', '-', $post['name']),
					   'city' =>   $post['city'], 
					   'type' =>    $post['type'],	
					   'city_id' => $post['city'], 


					   'area' =>  $post['area'] ,					   				   
					   'gender' =>    $post['gender'] ,
					   'address' => $post['address'],
					   'phone' => $post['phone'],	
					   'email' => $post['email'],		
					   'latitude' =>     $post['latitude'] ,
					   'longitude'=>         $post['longitude'] ,
					   'overview' =>  $post['overview'] ,
					   'description' =>    $post['description'] ,
					   'sauna' =>     $post['sauna'] ,
					   'physiotherapist'=>   $post['physiotherapist'] ,
					   'shower' =>  $post['shower'] ,
					   'steam' =>    $post['steam'] ,
					   'washroom' =>     $post['washroom'] ,
					   'ac'=>         $post['ac'] ,
					   'wifi' =>  $post['wifi'] ,
					   'lc' =>     $post['lc'] ,
					   'parking'=> $post['parking'] ,
					   'hs' =>  $post['hs'] ,);

					 //var_dump($data);


					$updatedata = project::insert($data);

					if ($updatedata>0) 

					   {
                            return redirect('/');
	                   }

	                else
	                {

	                	return view("admin_page");
	                }

			}

   





	}
}

?>