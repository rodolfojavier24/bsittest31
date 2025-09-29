<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{

    public function userinfo(){
    	return view("doro_view");
    } 

    public function listuser(){
    	$income = 1000;
    	$expense = 580;
    	$profit = $income - $expense;
    	return view("list_user",['prof_data' => $profit]);
    }

    public function listadmin(){
    	return view("admin",['page_tile' => 'ADMIN LIST']);
    }
}
