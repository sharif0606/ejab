<?php

namespace App\Exports;

use App\Models\Cattle;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class CattleExport implements FromView
{
    private $condition=false;
    function __construct($condition=false){
        $this->condition=$condition;
    }
    public function view(): View
    {
        if($this->condition){
            $data=Cattle::orderBy('id');
            foreach($this->condition as $f=>$v){
               $data= $data->where($f,$v);
            }
            $data= $data->get();
        }else{
            $data=Cattle::all();
        }
        return view('cattle.export', [
            'cattle' => $data
        ]);
    }
    
}
