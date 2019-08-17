<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DiseasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('diseases')->insert([
        ['title'=>'Dengue','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['title'=>'Tuberculosis','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['title'=>'Diabetes mellitus','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['title'=>'Hemorrhagic Stroke','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['title'=>'Preterm Birth Complications','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['title'=>'Chronic obstructive pulmonary disease','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['title'=>'Ischemic Stroke','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['title'=>'Iron-Deficiency Anemia','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['title'=>'Asthma','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['title'=>'Diarrheal diseases','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['title'=>'Hypertensive Heart Disease','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['title'=>'Neonatal encephalopathy due to birth asphyxia and trauma','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['title'=>'Neonatal sepsis and other neonatal infections','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['title'=>'Typhoid Fever','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['title'=>'Peptic ulcer disease','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['title'=>'Measles','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['title'=>'Rheumatic Heart Disease','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['title'=>'Trichuriasis','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['title'=>'Falls','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['title'=>'Lower Respiratory Infections','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['title'=>'Congenital Heart Anomalies','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['title'=>'Breast Cancer','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['title'=>'Colon and rectum cancer','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['title'=>'Ischemic Heart Disease','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['title'=>'Low Back Pain','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['title'=>'Major Depressive Disorder','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['title'=>'Tracheal, bronchus, and lung cancer','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['title'=>'Migraine','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['title'=>'Neck Pain','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['title'=>'Anxiety Disorders','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['title'=>'Schizophrenia','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['title'=>'HIV/AIDS resulting in other diseases','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['title'=>'Chronic kidney disease,','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['title'=>'Epilepsy','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['title'=>'Leukemia','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['title'=>'Uncorrected refractive error','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['title'=>'Protein-energy malnutrition','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['title'=>'Bipolar Disorder','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['title'=>'Dysthymia','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]
      ]);
    }
}
