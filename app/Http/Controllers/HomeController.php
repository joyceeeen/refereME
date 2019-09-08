<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Schedule;
use App\Referrals;
use Lava;
use Carbon\Carbon;
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
  public function index(Request $request)
  {

    if(auth()->user()->user_type == 3){
      return redirect('/admin');
    }
    $year = Carbon::now()->year;
    $top10 = null;

    if($request->month || $request->user){

      if($request->month && !$request->user){
        $top10 = Referrals::selectRaw("disease_id,count(id) as count,doctor_id")->whereMonth('created_at',$request->month)->whereYear('created_at',$year)->with('disease')->groupBy('disease_id')->orderBy('count','DESC')->limit(10)->get();
      }else if($request->user && !$request->month){
        $top10 = Referrals::selectRaw("disease_id,count(id) as count,doctor_id")->whereHas('referredTo',function($query) use($request){
          $query->where('user_type',$request->user);
        })->with(['referredTo','disease'])->groupBy('disease_id')->orderBy('count','DESC')->limit(10)->get();
      }else{
        $top10 = Referrals::selectRaw("disease_id,count(id) as count,doctor_id")->whereHas('referredTo',function($query) use($request){
          $query->where('user_type',$request->user);
        })->whereMonth('created_at',$request->month)->whereYear('created_at',$year)->with('disease')->groupBy('disease_id')->orderBy('count','DESC')->limit(10)->get();
      }
    }
    else{
      $top10 = Referrals::selectRaw("disease_id,count(id) as count")->with('disease')->groupBy('disease_id')->orderBy('count','DESC')->limit(10)->get();
    }

    $id = auth()->user()->id;
    $clients = User::whereId($id)->with(['referrals.patient','referralRequests.patient'])->first();

    $breakDown = null;
    $specialization = null;
    $top5Hospitals = null;
    if($request->breakdown_month){
      $breakDown = Referrals::selectRaw("ceil(level) as priority, count(id) as count")->whereMonth('created_at',$request->breakdown_month)->whereYear('created_at',$year)->groupBy('priority')->orderBy('count','desc')->get();
    }else{
      $breakDown = Referrals::selectRaw("ceil(level) as priority, count(id) as count")->groupBy('priority')->orderBy('count','desc')->get();
    }

    if($request->specialization_month){
      $specialization = User::selectRaw("specialization,count(id) as count")->whereMonth('created_at',$request->specialization_month)->whereYear('created_at',$year)->groupBy('specialization')->orderBy('count','DESC')->limit(5)->get();

    }else{
      $specialization = User::selectRaw("specialization,count(id) as count")->groupBy('specialization')->orderBy('count','DESC')->limit(5)->get();

    }

    if($request->top5_month){
      $top5Hospitals = User::where('user_type',2)->whereMonth('created_at',$request->top5_month)->whereYear('created_at',$year)->whereHas('hospital')->with('hospital')->withCount("referralRequests")->orderBy('referral_requests_count','desc')->limit(5)->get();
    }else{
      $top5Hospitals = User::where('user_type',2)->whereHas('hospital')->with('hospital')->withCount("referralRequests")->orderBy('referral_requests_count','desc')->limit(5)->get();
    }


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
    $donutchart = \Lava::ColumnChart('Disease', $top10Chart, [
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
