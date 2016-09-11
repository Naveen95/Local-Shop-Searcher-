<?php 
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Auth;

class signUpController extends Controller 
{

	public function check()
	{

		if (\Auth::user()) {
			return view('personal_info');
		}

		elseif(\Auth::guest()){

			return view('signup');
		}
	}
}

?>