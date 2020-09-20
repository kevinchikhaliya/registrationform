<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\details;
class userController extends Controller
{
    function add(Request $req){
         $detail=new details;
        $detail->name=$req->input('name');
        $detail->sid=$req->input('sid');
        $detail->email=$req->input('email');
        $detail->degreeprogram=$req->input('degreeprogram');
        $detail->skill=$req->input('skill');
        $detail->mobilenumber=$req->input('mobilenumber');
        $detail->date=$req->input('birthdate');
        $detail->address=$req->input('address');
        $detail->password=$req->input('password');
        $detail->save();
        echo 'Successful';
    }
}
