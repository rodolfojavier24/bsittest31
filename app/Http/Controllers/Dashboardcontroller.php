<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboardcontroller extends Controller
{
    //
    public function viewdashboard(){
    	return view("dashboard_view",['page_tile' => 'DASHBOARD']);
    }

    public function viewreports(){
    	return view("reports_page",['page_tile' => 'REPORTS']);
    }

}
