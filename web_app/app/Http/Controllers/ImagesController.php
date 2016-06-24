<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Image;
use Storage;

class ImagesController extends Controller
{

	protected $image;
    public function __construct(Image $image)
    {
        $this->middleware('auth');
        $this->image = $image;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$images = $this->image->get();
        return view('images/index', compact('images'));
    }

    public function store(Request $request){
    	$file = $request->file('image');
        $name = $this->generateRandomString();
        return redirect('image');
    }

    public function generateRandomString() {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < 6; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}
}
