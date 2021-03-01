<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Carbon\Carbon;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cuaca = 'https://ibnux.github.io/BMKG-importer/cuaca/501512.json';
        $gempa = 'https://data.bmkg.go.id/DataMKG/TEWS/autogempa.xml';
        $bmkg = json_decode(file_get_contents($cuaca), true);


        $xmlString = file_get_contents($gempa);
        $xmlObject = simplexml_load_string($xmlString);

        $json = json_encode($xmlObject);
        $geo = json_decode($json, true);
        $geo1 = $geo['gempa'];
        // dd($geo1);
        $hari = Carbon::now();
        $data = Post::with('category', 'user')->latest()->paginate(6);
        return view('pages.home', compact('data', 'hari', 'bmkg', 'geo1'));
    }
}
