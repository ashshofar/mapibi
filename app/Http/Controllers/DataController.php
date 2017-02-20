<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Title;
use App\Data;

class DataController extends Controller
{

	public function getIndex($title_id)
	{
		$datas = Data::where('title_id', '=', $title_id)->get();
		if(!$datas){
			return redirect()->route('admin.title.index')->with(['fail' => 'Data Chart not Found!']);
		}
		return view('backend.data.index', ['datas' => $datas]);
	}
	

	public function getUpdate($data_id)
	{
		$datas = Data::find($data_id);
		if(!$datas){
			return redirect()->route('admin.data.index')->with(['fail' => 'Data Chart not Found!']);
		}
		return view('backend.data.edit', ['datas' => $datas]);
	}

	public function postUpdate(Request $request)
	{
		$this->validate($request, [
			'value' 	=> 'required|max:120',
		]);

		$title = Data::find($request['data_id']);
		$title->value = $request['value'];
		$title->update();

		return redirect()->route('admin.data.index', ['title_id' => $request['title_id']])->with(['success' => 'Data Chart information succesfully updated']); 
	}

}
?>