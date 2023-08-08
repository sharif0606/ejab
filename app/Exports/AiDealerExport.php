<?php

namespace App\Exports;

use App\Models\AiDealer;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class AiDealerExport implements FromView
{
    private $condition=false;
    function __construct($condition=false){
        $this->condition=$condition;
    }
    public function view(): View
    {
        if($this->condition){
            $data=AiDealer::orderBy('id');
            foreach($this->condition as $f=>$v){
               $data= $data->where($f,$v);
            }
            $data= $data->get();
        }else{
            $data=AiDealer::all();
        }
        return view('aidealer.export', [
            'aidealer' => $data
        ]);
    }
    
}
