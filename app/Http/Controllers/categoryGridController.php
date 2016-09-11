<?php 
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Auth;

class categoryGridController extends Controller 
{

	public function index()
	{

		return view('category-grid');
	}
}

?>