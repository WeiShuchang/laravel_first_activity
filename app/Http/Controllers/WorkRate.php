<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkRate extends Controller
{

    public function Viewworkrate(){
        
        return view("workrate");
    }

    public function Calcworkrate(){

        $values = [
            'hours-worked'=> request()->get('hours-worked'),
            'hourly-rate'=> request()->get('hourly-rate'),
            'firstname'=> request()->get('firstname'),
            'lastname'=> request()->get('lastname'),
        ];

        if ($values['hours-worked'] <= 40) {
            $grossPay = $values['hours-worked'] * $values['hourly-rate'];
        } else {
            $grossPay = (40 * $values['hourly-rate']) + (($values['hours-worked'] - 40) * $values['hourly-rate'] * 1.5);
        }

        if ($grossPay > 10000) {
            $withholding = $grossPay * 0.28;   
            $netPay = $grossPay - $withholding; 
        } elseif ($grossPay <= 10000 && $grossPay > 6000) {
            $withholding = $grossPay * 0.21;   
            $netPay = $grossPay - $withholding; 
        } else {
            $withholding = $grossPay * 0.10;   
            $netPay = $grossPay - $withholding; 
        }

        $calculated_data = [
            'gross-pay'=> $grossPay,
            'net-pay'=> $netPay,
        ];

        return view("workrate", compact('values','calculated_data'));
    }
}
