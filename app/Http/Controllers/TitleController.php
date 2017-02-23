<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Title;
use App\Data;

class TitleController extends Controller
{

	public function getIndex()
	{
		$titles = Title::all();
		return view('backend.title.index', ['titles' => $titles]);
	}

	public function getCreate()
	{
		return view('backend.title.create');
	}

	public function postCreate(Request $request)
	{
		$this->validate($request, [
			'title' 		=> 'required|max:120|unique:titles',
			'description'	=> 'required'
		]);

		$title = new Title();
		$title->title = $request['title'];
		$title->description = $request['description'];
		$title->save();

		$data = new Data();
		$data->title_id = $title->id;
		$data->hckey = 'id-ac';
		$data->wilayah = 'Aceh';
		$data->value = '0';
		$data->save();

		$data = new Data();
		$data->title_id = $title->id;
		$data->hckey = 'id-ki';
		$data->wilayah = 'Kalimantan Timur';
		$data->value = '0';
		$data->save();

		$data = new Data();
		$data->title_id = $title->id;
		$data->hckey = 'id-jt';
		$data->wilayah = 'Jawa Tengah';
		$data->value = '0';
		$data->save();

		$data = new Data();
		$data->title_id = $title->id;
		$data->hckey = 'id-be';
		$data->wilayah = 'Bengkulu';
		$data->value = '0';
		$data->save();

		$data = new Data();
		$data->title_id = $title->id;
		$data->hckey = 'id-bt';
		$data->wilayah = 'Banten';
		$data->value = '0';
		$data->save();

		$data = new Data();
		$data->title_id = $title->id;
		$data->hckey = 'id-kb';
		$data->wilayah = 'Kalimantan Barat';
		$data->value = '0';
		$data->save();

		$data = new Data();
		$data->title_id = $title->id;
		$data->hckey = 'id-bb';
		$data->wilayah = 'Bangka Belitung';
		$data->value = '0';
		$data->save();

		$data = new Data();
		$data->title_id = $title->id;
		$data->hckey = 'id-ba';
		$data->wilayah = 'Bali';
		$data->value = '0';
		$data->save();

		$data = new Data();
		$data->title_id = $title->id;
		$data->hckey = 'id-ji';
		$data->wilayah = 'Jawa Timur';
		$data->value = '0';
		$data->save();

		$data = new Data();
		$data->title_id = $title->id;
		$data->hckey = 'id-ks';
		$data->wilayah = 'Kalimantan Selatan';
		$data->value = '0';
		$data->save();

		$data = new Data();
		$data->title_id = $title->id;
		$data->hckey = 'id-nt';
		$data->wilayah = 'Nusa Tenggara Timur';
		$data->value = '0';
		$data->save();

		$data = new Data();
		$data->title_id = $title->id;
		$data->hckey = 'id-sn';
		$data->wilayah = 'Sulawesi Selatan';
		$data->value = '0';
		$data->save();

		$data = new Data();
		$data->title_id = $title->id;
		$data->hckey = 'id-kr';
		$data->wilayah = 'Kepulauan Riau';
		$data->value = '0';
		$data->save();

		$data = new Data();
		$data->title_id = $title->id;
		$data->hckey = 'id-pb';
		$data->wilayah = 'Papua Barat';
		$data->value = '0';
		$data->save();

		$data = new Data();
		$data->title_id = $title->id;
		$data->hckey = 'id-su';
		$data->wilayah = 'Sumatera Utara';
		$data->value = '0';
		$data->save();

		$data = new Data();
		$data->title_id = $title->id;
		$data->hckey = 'id-ri';
		$data->wilayah = 'Riau';
		$data->value = '0';
		$data->save();

		$data = new Data();
		$data->title_id = $title->id;
		$data->hckey = 'id-sa';
		$data->wilayah = 'Sulawesi Utara';
		$data->value = '0';
		$data->save();

		$data = new Data();
		$data->title_id = $title->id;
		$data->hckey = 'id-mu';
		$data->wilayah = 'Maluku Utara';
		$data->value = '0';
		$data->save();

		$data = new Data();
		$data->title_id = $title->id;
		$data->hckey = 'id-sb';
		$data->wilayah = 'Sumatera Barat';
		$data->value = '0';
		$data->save();

		$data = new Data();
		$data->title_id = $title->id;
		$data->hckey = 'id-ma';
		$data->wilayah = 'Maluku';
		$data->value = '0';
		$data->save();

		$data = new Data();
		$data->title_id = $title->id;
		$data->hckey = 'id-nb';
		$data->wilayah = 'Nusa Tenggara Barat';
		$data->value = '0';
		$data->save();

		$data = new Data();
		$data->title_id = $title->id;
		$data->hckey = 'id-sg';
		$data->wilayah = 'Sulawesi Tenggara';
		$data->value = '0';
		$data->save();

		$data = new Data();
		$data->title_id = $title->id;
		$data->hckey = 'id-st';
		$data->wilayah = 'Sulawesi Tengah';
		$data->value = '0';
		$data->save();

		$data = new Data();
		$data->title_id = $title->id;
		$data->hckey = 'id-pa';
		$data->wilayah = 'Papua';
		$data->value = '0';
		$data->save();

		$data = new Data();
		$data->title_id = $title->id;
		$data->hckey = 'id-jb';
		$data->wilayah = 'Jawa Barat';
		$data->value = '0';
		$data->save();

		$data = new Data();
		$data->title_id = $title->id;
		$data->hckey = 'id-la';
		$data->wilayah = 'Lampung';
		$data->value = '0';
		$data->save();

		$data = new Data();
		$data->title_id = $title->id;
		$data->hckey = 'id-jk';
		$data->wilayah = 'Jakarta';
		$data->value = '0';
		$data->save();

		$data = new Data();
		$data->title_id = $title->id;
		$data->hckey = 'id-go';
		$data->wilayah = 'Gorontalo';
		$data->value = '0';
		$data->save();

		$data = new Data();
		$data->title_id = $title->id;
		$data->hckey = 'id-yo';
		$data->wilayah = 'Yogyakarta';
		$data->value = '0';
		$data->save();

		$data = new Data();
		$data->title_id = $title->id;
		$data->hckey = 'id-kt';
		$data->wilayah = 'Kalimantan Tengah';
		$data->value = '0';
		$data->save();

		$data = new Data();
		$data->title_id = $title->id;
		$data->hckey = 'id-ss';
		$data->wilayah = 'Sumatera Selatan';
		$data->value = '0';
		$data->save();

		$data = new Data();
		$data->title_id = $title->id;
		$data->hckey = 'id-sr';
		$data->wilayah = 'Sulawei Barat';
		$data->value = '0';
		$data->save();

		$data = new Data();
		$data->title_id = $title->id;
		$data->hckey = 'id-ja';
		$data->wilayah = 'Jambi';
		$data->value = '0';
		$data->save();

		$data = new Data();
		$data->title_id = $title->id;
		$data->hckey = 'id-ku';
		$data->wilayah = 'Kalimantan Utara';
		$data->value = '0';
		$data->save();

		return redirect()->route('admin.title.index')->with(['success' => 'Chart succesfully created!']);
	}

	public function getUpdate($title_id)
	{
		$title = Title::find($title_id);
		if(!$title){
			return redirect()->route('admin.title.index')->with(['fail' => 'Chart not Found!']);
		}
		return view('backend.title.edit', ['title' => $title]);
	}

	public function postUpdate(Request $request)
	{
		$this->validate($request, [
			'title' 		=> 'required|max:120',
			'description'	=> 'required'
		]);

		$title = Title::find($request['title_id']);
		$title->title = $request['title'];
		$title->description = $request['description'];
		$title->update();

		return redirect()->route('admin.title.index')->with(['success' => 'Chart information succesfully updated']); 
	}

	public function getDelete($title_id)
	{
		$title = Title::find($title_id);
		if(!$title){
			return redirect()->route('admin.title.index')->with(['fail' => 'Chart not Found!']);
		}
		$title->delete();

		$data = Data::where('title_id', '=', $title_id);
		$data->delete();
		
		return redirect()->route('admin.title.index')->with(['success' => 'Chart succesfully deleted']);

	}

}
?>