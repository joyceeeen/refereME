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
    $top5Hospitals = User::where('user_type',2)->with('hospital')->withCount("referralRequests")->orderBy('referral_requests_count','desc')->limit(5)->get();

    $top10Chart = \Lava::DataTable()->addStringColumn('Disease')->addNumberColumn('Count');
    $hospitals = \Lava::DataTable()->addStringColumn('Hospital')->addNumberColumn('Count');
    $topSpecialization = \Lava::DataTable()->addStringColumn('Specialization')->addNumberColumn('Count');
    $breakDownChart =  \Lava::DataTable()->addStringColumn('Priority Level')->addNumberColumn('Count');

    foreach ($top10 as $key => $value) {
      $top10Chart->addRow([$value->disease->title,$value->count]);
    }


    foreach ($top5Hospitals as $key => $value) {
      $hospitals->addRow([$value->hospital->hospital_name,$value->referral_requests_count]);
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
    $piechart = \Lava::PieChart('doctorVhospital', $hospitals, [
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
