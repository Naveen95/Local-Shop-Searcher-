<?php 
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\orders;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;

class OrdersController extends Controller 
{

	public function pastOrders()
	{

		$orders = new orders();



		$order_details = $orders::
		where('user_id','=',Auth::user()->id)
		->get();
		//var_dump($order_details);

		return view('past_orders', ['order_details' => $order_details]);
	}

	public function upcomingOrders()
	{

		$orders = new orders();



		$order_details = $orders::
		where('order_date','>',date('d'))
		->get();
		
		return view('upcomingorders' , ['order_details' => $order_details]);


	}
	

}

?>