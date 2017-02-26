<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Title;
use App\Data;

class AdminController extends Controller
{

	public function getLogin()
	{
		return view('backend.login');
	}

	public function postLogin(Request $request)
	{
		
		$this->validate($request, [
			'email' => 'required|email',
			'password' => 'required'
		]);

		
		if(!Auth::attempt(['email' => 'admin3@admin.com', 'password' => $request['password']])){
			return redirect()->back()->with(['fail' => 'Could not log you in']);
		}
		
		
		return redirect()->route('admin.title.index');
		
	}

	public function getLogout()
	{
		Auth::logout();
		return redirect()->route('index');
	}

}
?>