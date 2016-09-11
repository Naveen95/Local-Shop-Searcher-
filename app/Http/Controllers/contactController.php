<?php 
namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use Illuminate\Contracts\Auth\User;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Auth;
use Crypt;

class contactController extends Controller 
{

	public function index()
	{

		return view('contact');
	}

	public function form(Request $request)
	{

		$post = $request->all();

		$val=\Validator::make($request->all(),

		[
		   'name' =>    'required',
		   'subject' =>     'required',
		   'email'=>         'required',
		   'message' =>  'required',

		]);

			if ($val ->fails()) 
				{
				
					return redirect()->back()->withErrors($val->errors());
					
				}

			else
			{

					$data =array(

				   'name' => $post['name'] ,
				   'subject' => $post['subject'],
				   'email' => $post['email'],
				   'message' => $post['message'],);


					$updatedata = DB::table('contact')->insert($data);

					if ($updatedata>0) 

					   {
                            return redirect('/');
	                   }

	                else
	                {

	                	return view("contact");
	                }

			}

   





	}
}

?>