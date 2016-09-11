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

class getCurrentController extends Controller 
{

	public function get()
	{

		echo \Auth::user()->id;
	}
}