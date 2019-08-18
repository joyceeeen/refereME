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
    if(auth()->user()->user_type == 3){
      return redirect('/admin');
    }

    $id = auth()->user()->id;
    $clients = User::whereId($id)->with(['referrals.patient','referralRequests.patient'])->first();
    $top10 = Referrals::selectRaw("disease_id,count(id) as count")->with('disease')->groupBy('disease_id')->orderBy('count','DESC')->limit(10)->get();
    $breakDown = Referrals::selectRaw("ceil(level) as priority, count(id) as count")->groupBy('priority')->orderBy('count','desc')->get();
    $specialization = User::selectRaw("specialization,count(id) as count")->groupBy('specialization')->orderBy('count','DESC')->limit(5)->get();

    $doctorCount = User::where('user_type',1)->count();
    $hospitalCount = User::where('user_type',2)->count();

    $top10Chart = \Lava::DataTable()->addStringColumn('Disease')->addNumberColumn('Count');
    $doctorVhospital = \Lava::DataTable()->addStringColumn('User Type')->addNumberColumn('Count')->addRow(['Doctor',$doctorCount])->addRow(['Hospital',$hospitalCount]);
    $topSpecialization = \Lava::DataTable()->addStringColumn('Specialization')->addNumberColumn('Count');
    $breakDownChart =  \Lava::DataTable()->addStringColumn('Priority Level')->addNumberColumn('Count');

    foreach ($top10 as $key => $value) {
      $top10Chart->addRow([$value->disease->title,$value->count]);
    }


    foreach ($specialization as $key => $value) {
      $topSpecialization->addRow([$value->specialization,$value->count]);
    }

    foreach ($breakDown as $key => $value) {
      $breakDownChart->addRow([$value->priority,$value->count]);
    }

    // $linechart = \Lava::LineChart('LineIMDB', $reasons, [
    //   'width' => '100%',
    //   'legend' => [
    //       'position' => 'none'
    //   ]
    // ]);
    $donutchart = \Lava::BarChart('Disease', $top10Chart, [
      'width' => '100%',
      'legend' => [
          'position' => 'none'
      ]
    ]);
    $piechart = \Lava::PieChart('doctorVhospital', $doctorVhospital, [
      'legend' => [
          'position' => 'none'
      ]
    ]);
    $piechart2 = \Lava::PieChart('specialization', $topSpecialization, [
      'legend' => [
          'position' => 'none'
      ]
    ]);
    $piechart3 = \Lava::PieChart('priority', $breakDownChart, [
      'legend' => [
          'position' => 'none'
      ]
      ]);

    return view('home',compact('clients'));
  }
}
