<?php namespace App\Http\Controllers;

use Input;
use Redirect;
use App\Artikel;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ArtikelController extends Controller {


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$limit = 10;
		$data = Artikel::orderBy('id', 'DESC')->paginate($limit);
		return view('artikel.index')
				->with('artikel',$data)
				->with('limit',$limit);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('artikel.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		Artikel::create( $input );
 
		return Redirect::to('artikel')->with('message', 'Artikel created');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$data = Artikel::find($id);
        return response()->json($data);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$data['artikel'] = Artikel::find($id);
		//print_r($artikel).'<br>';
		return view('artikel.edit', $data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$artikel = Artikel::find($id);
		$input = array_except(Input::all(), '_method');
		$artikel->update($input);
		return Redirect::to('artikel')->with('message', 'Artikel updated.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$data = Artikel::find($id);
        if ($data->delete()) {
            return Redirect::to('artikel')->with('message', 'Artikel berhasil dihapus.');
        }
	}

	public function search()
	{
		$limit = 10;
		$keyword = Input::get('keyword');
	    $searchResult = Artikel::where('judul', 'LIKE', '%'.$keyword.'%')->paginate($limit);
	    return View('artikel.index')
	            ->with('keyword', $keyword)
	            ->with('artikel', $searchResult)
	            ->with('limit', $limit);
	}

}
