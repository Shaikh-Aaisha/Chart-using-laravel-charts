<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
class UserController extends Controller
{
    public function bar()
    {
        $chart_options = [
            'chart_title' => 'Users by days',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\User',
            'group_by_field' => 'created_at',
            'group_by_period' => 'day',
            'chart_type' => 'bar',
        ];
        $chart1 = new LaravelChart($chart_options);

        return view('home', compact('chart1'));
    }
    public function line()
    {
        $chart_options = [
            'chart_title' => 'Users by Months',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\User',
            'group_by_field' => 'created_at',
            'group_by_period' => 'month',
            'chart_type' => 'line',
        ];
        $chart1 = new LaravelChart($chart_options);

        return view('line', compact('chart1'));
    }
    public function pie()
    {
        $chart_options = [
            'chart_title' => 'Users by Years',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\User',
            'group_by_field' => 'created_at',
            'group_by_period' => 'year',
            'chart_type' => 'pie',
        ];
        $chart1 = new LaravelChart($chart_options);

        return view('pie', compact('chart1'));
    }
}
