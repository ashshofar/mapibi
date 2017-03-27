<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;
use App\Bidanprov;

class BidanprovController extends Controller
{

	public function getIndex()
	{
		$datas = Bidanprov::all();
		
		$lava = new Lavacharts; // See note below for Laravel

		$popularity = $lava->DataTable();
		$data = Bidanprov::select("hckey as 0", "wilayah and bidan as 1","bidan as 2","penduduk as 3")
					->get()
					->toArray();

		$popularity->addStringColumn('Kode')
				   ->addStringColumn('Wilayah')	
		           ->addStringColumn('Jumlah Bidan')
		           ->addStringColumn('Jumlah Penduduk')
		           ->addRows($data);

		         
		$lava->GeoChart('Popularity', $popularity)
			 ->region('ID')
			 ->displayMode('regions')
			 ->resolution('provinces');

        //return view('backend.data.index', compact('lava'));

		return view('backend.bidanprov.index', ['lava' => $lava, 'datas' => $datas]);
	}
	

	public function getUpdate($bidanprov_id)
	{
		$datas = Bidanprov::find($bidanprov_id);
		if(!$datas){
			return redirect()->route('admin.bidanprov.index')->with(['fail' => 'Data Chart not Found!']);
		}
		return view('backend.bidanprov.edit', ['datas' => $datas]);
	}

	public function postUpdate(Request $request)
	{
		$title = Bidanprov::find($request['bidanprov_id']);
		$title->penduduk = $request['penduduk'];
		$title->bidan = $request['bidan'];
		$title->anggota = $request['anggota'];
		$title->sekolah = $request['sekolah'];
		$title->update();

		return redirect()->route('admin.bidanprov.index')->with(['success' => 'Data Chart information succesfully updated']); 
	}

}
?>