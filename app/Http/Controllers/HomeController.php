<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Schedule;
use App\Referrals;
use Lava;
class HomeController extends Controller
{
  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Contracts\Support\Renderable
  */
  public function index()
  {
    $id = auth()->user()->id;
    $clients = User::whereId($id)->with(['referrals.patient','referralRequests.patient'])->first();

    $reasons = \Lava::DataTable();

    $reasons->addStringColumn('Reasons')
    ->addNumberColumn('Percent')
    ->addRow(array('Check Reviews', 5))
    ->addRow(array('Watch Trailers', 2))
    ->addRow(array('See Actors Other Work', 4))
    ->addRow(array('Settle Argument', 89));

    $linechart = \Lava::LineChart('LineIMDB', $reasons, [
      'width' => '100%',
      'legend' => [
          'position' => 'none'
      ]
    ]);
    $donutchart = \Lava::BarChart('IMDB', $reasons, [
      'width' => '100%',
      'legend' => [
          'position' => 'none'
      ]
    ]);
    $piechart = \Lava::PieChart('IMDB', $reasons, [
      'legend' => [
          'position' => 'none'
      ]
    ]);
    $piechart2 = \Lava::PieChart('IMDB2', $reasons, [
      'legend' => [
          'position' => 'none'
      ]
    ]);
    $piechart3 = \Lava::PieChart('IMDB3', $reasons, [
      'legend' => [
          'position' => 'none'
      ]
      ]);

    return view('home',compact('clients'));
  }
}
