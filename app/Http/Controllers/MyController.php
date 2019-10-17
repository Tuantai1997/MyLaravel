<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
class MyController extends Controller
{
   public function Hello(){
   	echo "HelloWorld";
   }

   public function Myname($name){
   	echo "<h1>My name is $name</h1>";
   	return redirect()->route('MyRoute');
   }

   public function GetURL(Request $request){
   		//return $request->url();
   	if($request->is('My*'))
   		echo "Co My";
   	else
   		echo "Khong co My";
   // 	if($request->isMethod('post')){
   // 		echo "phuong thuc get";
   // 	}
   // 	else
   // 		echo "khong phai phuong thuc get";
   // }
}
}