<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use ConsoleTVs\Charts\Facades\Charts;
use App\User;
use App\dOrders;
use DB;
class chartController extends Controller
{
    public function getChart()
    {
    	$users = User::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))->get();
    	$chart =Charts::database($users , 'bar' ,'highcharts')
    	->title('Monthly new Users')
    	->elementLabel('Total Users')
    	->dimensions(1000 ,500)
    	->responsive(false)
    	->groupByMonth(date('Y') ,true);
    	return view('admin.report.chart', compact('chart'));
    }
    public function getChart1()
    {
    	$users = dOrders::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))
    	->get();
        die(var_dump($users));
    	$chart =Charts::database($users , 'area' ,'highcharts')
    	->title('Monthly Money')
    	->elementLabel('Total Money')
    	->dimensions(1000 ,500)
    	->responsive(false)
    	->groupByMonth(date('Y') ,true);
    	return view('admin.report.chart', compact('chart'));
    }
}
