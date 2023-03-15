<h1>Laravel Chart using <b>laravel-charts Library</b></h1>

## About

"php": "^7.4|^8.0"<br>
"laravel": "9"<br>
Library<br>
"name": "laraveldaily/laravel-charts"<br>
"version": "0.1.29"<br>

## Steps

1- Add laravel-charts using composer to your project<br><br>
&nbsp;&nbsp;composer require laraveldaily/laravel-charts<br><br>
2- Connect your project to database<br><br>
3- Create a controller<br><br>
&nbsp;&nbsp;php artisan make:controller UserController<br><br>
4- In this controller define a function and into that function create an object of LaravelChart class<br><br>
&nbsp;&nbsp;$chart1 = new LaravelChart($chart_options)<br><br>
&nbsp;&nbsp;and import the class<br><br>
&nbsp;&nbsp;use LaravelDaily\LaravelCharts\Classes\LaravelChart;<br><br>
5- Create a view<br><br>
&nbsp;&nbsp;To render the chart in your view, add the required CDN and boilerplate code in your blade file<br><br>
&nbsp;&nbsp;{!! $chart1->renderChartJsLibrary() !!}<br><br>
&nbsp;&nbsp;{!! $chart1->renderJs() !!}<br><br>

<b>These are the steps.If you want to make different charts in your project select your respective option while making chart.</b><br><br>

&nbsp;&nbsp;'chart_type' => 'pie'<br><br>
&nbsp;&nbsp;'chart_type' => 'line'<br><br>
&nbsp;&nbsp;'chart_type' => 'bar'<br><br>
