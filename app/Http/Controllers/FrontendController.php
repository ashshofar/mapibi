<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;
use App\Title;
use App\Data;

class FrontendController extends Controller
{

	public function getIndex()
	{
		$titles = Title::all();
		return view('frontend.index', ['titles' => $titles]);
	}

	public function getData($title_id)
	{
		$datas = Data::where('title_id', '=', $title_id)->get();
		if(!$datas){
			return redirect()->route('frontend.index')->with(['fail' => 'Data Chart not Found!']);
		}

		$lava = new Lavacharts; // See note below for Laravel

		$popularity = $lava->DataTable();
		$data = Data::select("hckey as 0", "wilayah as 1","value as 2")
					->where('title_id', '=', $title_id)
					->get()
					->toArray();

		$popularity->addStringColumn('Kode')
				   ->addStringColumn('Wilayah')	
		           ->addNumberColumn('Jumlah')
		           ->addRows($data);

		         
		$lava->GeoChart('Popularity', $popularity)
			 ->region('ID')
			 ->displayMode('regions')
			 ->resolution('provinces');

        //return view('backend.data.index', compact('lava'));

		$title = Title::find($title_id);

		return view('frontend.data', ['lava' => $lava, 'datas' => $datas, 'title' => $title]);
	}
}
?>