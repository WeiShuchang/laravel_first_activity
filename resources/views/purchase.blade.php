@extends('layout.master')

@section('page_title', 'purchase')

@section('content')
        <div class="store-heading">
            <h1>XYZ Store</h1>
        </div>

    <div class="container">

        <div class="row">
            <div class="col-md-8">
                <div class="row">

                    <!--Bread Table-->
                    <div class="col-md-6 ">
                        <h3>Bread</h3>
                        <table class="table table-bordered table-hover table-dark small-table ">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($breadlist as $bread)
                                <tr>
                                    <th scope="col">{{$bread['name']}}</th>
                                    <th scope="col">{{$bread['price']}}</th>
                                </tr>
                             @endforeach
                            </tbody>
                        </table>

                    </div>
                    <!--Bread Table End-->

                    <!--Beverage Table-->
                    <div class="col-md-6 ">
                        <h3>Beverage</h3>
                        <table class="table table-bordered table-hover table-dark small-table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($bevlist as $bev)
                                <tr>
                                    <th scope="col">{{$bev['name']}}</th>
                                    <th scope="col">{{$bev['price']}}</th>
                                </tr>
                             @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!--Beverage Table End-->

                    <div class="row col-md-12">
                        <!--form for ordering-->
                        <form method="post" action="{{route('purchase.calculate')}}">
                            @csrf
                            <div class="form-group row">
                                <label for="bread" class="col-md-3 col-form-label ">Bread Name</label>
                                <div class="col-md-3">
                                    <select name="bread" id="" class="form-control">
                                    @foreach ($breadlist as $bread)
                                        <option value="{{$bread['name']}}">{{$bread['name']}}</option>
                                    @endforeach
                                    </select>
                                </div>

                                <label for="bread-quantity" class="col-md-3 col-form-label " >Quantity</label>
                                <div class="col-md-3">
        
                                    <input type="number" id="bread-quantity" name="bread_quantity" value ="1" min="1" max="10" class="form-control">
                                   
                                </div>

                                <label for="beverage" class="col-md-3 col-form-label ">Beverage</label>
                                <div class="col-md-3">
                                    <select name="beverage" id="" class="form-control">
                                    @foreach ($bevlist as $bev)
                                        <option value="{{$bev['name']}}">{{$bev['name']}}</option>
                                    @endforeach
                                    </select>
                                </div>

                                <label for="beverage-quantity" class="col-md-3 col-form-label ">Quantity</label>
                                <div class="col-md-3">
                                    <input type="number" id="beverage-quantity" name="beverage_quantity" value ="1" min="1" max="10" class="form-control">
                                </div>

                                <!--Customer Details-->
                                <h3 class="pb-3 pt-3">Customer Details</h3>

                                <label for="firstname" class="col-md-3 col-form-label">First Name</label>
                                <div class="col-md-3">
                                    <input type="text" name="firstname" id="firstname" class="form-control">
                                </div>

                                <label for="lastname" class="col-md-3 col-form-label">Last Name</label>
                                <div class="col-md-3">
                                    <input type="text" name="lastname" id="lastname" class="form-control">
                                </div>

                                <div class="col-md-9 pb-3">
                                </div>

                                <div class="col-md-3">
                                    <input type="submit" value="Submit" class="col-md-6 ">
                                </div>

                            </div>
                        </form>
                        <!--form for ordering end-->
                    </div>
                    
                </div>
            </div>


            <div class=" col-md-4">
                <h3 class="">Product Details</h3>
                    <div class="card col-md-12 table-responsive-sm">
                    @if($_POST)
                    
                        <div class="card-header">
                            <h5>{{$bread_choice['last_name']}}, {{$bread_choice['first_name']}}</h5>
                        </div>
                        <div class="card-body">
                            <table class="table ">
                                <thead>
                                    <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                    <tr>
                                
                                        <th scope="row">{{$bread_choice['bread_name']}}</th>
                                        <td>{{$bread_choice['bread_quantity']}}x</td>
                                        <td>₱{{$price_list['beverage_price']}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">{{$bread_choice['beverage_name']}}</th>
                                        <td>{{$bread_choice['beverage_quantity']}}x</td>
                                        <td>₱{{$price_list['bread_price']}}</td>
                                    </tr>
                                    <tr>
                                    <th scope="row" colspan="2">Total:</th>
                                    <td>₱{{$price_list['total']}}</td>
                                </tr>
                                </tbody>
                            </table>
                                
                        @else
                        <div class="card-header">
                            <h5>Lastname, Firstname</h5>
                        </div>
                        <div class="card-body">
                            <table class="table ">
                                <thead>
                                    <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Price</th>
                                    </tr>
                                </thead>
                                <tr>
                                    <th scope="row" colspan="2">Total:</th>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                            
                        @endif
                                    
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection