<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function breadlist(){
        $breadlist = [
            ['id'=>1,'name'=>'Pandesal','price'=>10.00],
            ['id'=>2,'name'=>'SpanishBread','price'=>15.00],
            ['id'=>3,'name'=>'Ensaymada','price'=>30.00],
            ['id'=>4,'name'=>'CassavaCake','price'=>75.00],
        ];
        return $breadlist;

    }

    public function Index(){
        $breadlist = [
            ['id'=>1,'name'=>'Pandesal','price'=>10.00],
            ['id'=>2,'name'=>'SpanishBread','price'=>15.00],
            ['id'=>3,'name'=>'Ensaymada','price'=>30.00],
            ['id'=>4,'name'=>'CassavaCake','price'=>75.00],
        ];

        $bevlist = [
            ['id'=>1,'name'=>'Soda','price'=>10.00],
            ['id'=>2,'name'=>'Coke','price'=>12.00],
            ['id'=>3,'name'=>'Sprite','price'=>15.00],
            ['id'=>4,'name'=>'C2','price'=>17.00],
        ];


        return view("purchase",['breadlist'=>$breadlist,'bevlist'=>$bevlist]);
    }

    public function Calculate(){

            $breadprice = 0;
            $beverageprice = 0;

            $breadlist = [
                ['id'=>1,'name'=>'Pandesal','price'=>10.00],
                ['id'=>2,'name'=>'SpanishBread','price'=>15.00],
                ['id'=>3,'name'=>'Ensaymada','price'=>30.00],
                ['id'=>4,'name'=>'CassavaCake','price'=>75.00],
            ];

            $bevlist = [
                ['id'=>1,'name'=>'Soda','price'=>10.00],
                ['id'=>2,'name'=>'Coke','price'=>12.00],
                ['id'=>3,'name'=>'Sprite','price'=>15.00],
                ['id'=>4,'name'=>'C2','price'=>17.00],
            ];
 
            $bread_choice = [
                'bread_name'=> request()->get('bread'),
                'bread_quantity'=> request()->get('bread_quantity'),
                'beverage_name'=> request()->get('beverage'),
                'beverage_quantity'=> request()->get('beverage_quantity'),
                'first_name'=> request()->get('firstname'),
                'last_name'=> request()->get('lastname'),
            ];

            if($bread_choice['bread_name'] == "Pandesal"){
                $breadprice = 10;
            }elseif($bread_choice['bread_name'] == "SpanishBread"){
                $breadprice = 15;
            }elseif($bread_choice['bread_name'] == "Ensaymada"){
                $breadprice = 30;
            }elseif($bread_choice['bread_name'] == "CassavaCake"){
                $breadprice = 75;
            }

            if($bread_choice['beverage_name'] == "Soda"){
                $beverageprice = 10;
            }elseif($bread_choice['beverage_name'] == "Coke"){
                $beverageprice = 12;
            }elseif($bread_choice['beverage_name'] == "Sprite"){
                $beverageprice = 15;
            }elseif($bread_choice['beverage_name'] == "C2"){
                $beverageprice = 17;
            }

            $breadprice = $breadprice * $bread_choice['bread_quantity'];
            $beverageprice = $beverageprice * $bread_choice['beverage_quantity'];
            $total = $breadprice + $beverageprice;

            $price_list = [
                'bread_price'=>$breadprice,
                'beverage_price'=>$beverageprice, 
                'total'=>$total
            ];

            return view('purchase', compact('breadlist','bevlist','bread_choice','price_list'));

    }



}
