<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class siteController extends Controller
{
    //
    function index(){
    	echo "This is test by sagaar";
    }
    function show($id){
    	return $id;
    }
    function kanxo(){
    	return view('index');
    }
}
