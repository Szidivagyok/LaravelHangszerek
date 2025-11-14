<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Instrument;

class InstrumentSeeder extends Seeder {
    public function run(): void {
        $filePath = database_path('csv/instruments.csv');
        $data=[];
        if(($h=fopen($filePath,'r'))!==false){
            $header=fgetcsv($h,0,';');
            while(($cols=fgetcsv($h,0,';'))!==false){
                if(count($cols)==count($header)){
                    $item=array_combine($header,$cols);
                    unset($item['id']);
                    $data[]=$item;
                }
            }
            fclose($h);
        }
        foreach($data as $r){ Instrument::create($r); }
    }
}