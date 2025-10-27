<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
        $liststudent = DB::table("student")->orderBy("last_name","ASC")->get();
       // $liststudent = DB::table("student")->where('last_name','like','%de%')->orderBy('last_name','ASC')->get();
       // $liststudent = DB::table("student")->where('id',2)->first();
        //print_r($liststudent->first_name.' '.$liststudent->last_name);die();
        // select * from student where id=1;
        // SELECT * FROM student WHERE last_name LIKE "%de%";
       // print_r($liststudent[1]->first_name);die;
        foreach ($liststudent as $key => $value) {
           print_r($value->last_name.", ".$value->first_name);
           echo "\n";
        } die;
    	return view("admin",[
              'page_tile' => 'ADMIN LISTS',
               "students" => $liststudent]);
    }
    public function addstudent(){
        /*
        $insertedID =  DB::table("student")->insert([
              "first_name" => "John Gil",
              "last_name" => "cagalitan",
              "middle_name" => "PapaTroll",
              "age" => 53,
              "gender" => "lesbian"
          ]);
          print_r($insertedID);
          */
          $update = DB::table("student")->where('id',6)->update([
            "middle_name" => "PogiPapaTroll"
          ]);
         // DB::table("student")->where('id',5)->delete();
    }
}
