<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class ReportsReferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('reports_references')->insert([
        ['report' => "Urinalysis Report",'view'=>'urinalysis','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['report' => "Physical Exam Result",'view'=>'physical','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['report' => "Fecalysis Report",'view'=>'fecalysis','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['report' => "Chest Xray Result",'view'=>'chest','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['report' => "CBC",'view'=>'cbc','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]
      ]);
    }
}
