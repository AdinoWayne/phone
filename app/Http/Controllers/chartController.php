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
	public function index()
	{
		$chart = Charts::multi('bar', 'material')
        // Setup the chart settings
		->title("My Cool Chart")
        // A dimension of 0 means it will take 100% of the space
        ->dimensions(0, 400) // Width x Height
        // This defines a preset of colors already done:)
        ->template("material")
        // You could always set them manually
        // ->colors(['#2196F3', '#F44336', '#FFC107'])
        // Setup the diferent datasets (this is a multi chart)
        ->dataset('Element 1', [5,20,100])
        ->dataset('Element 2', [15,30,80])
        ->dataset('Element 3', [25,10,40])
        // Setup what the values mean
        ->labels(['One', 'Two', 'Three']);

        return view('test', ['chart' => $chart]);
    }
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
    	$chart =Charts::database($users , 'area' ,'highcharts')
    	->title('Monthly Money')
    	->elementLabel('Total Money')
    	->dimensions(1000 ,500)
    	->responsive(false)
    	->groupByMonth(date('Y') ,true);
    	return view('admin.report.chart', compact('chart'));
    }
}
