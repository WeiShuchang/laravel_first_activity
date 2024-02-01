<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Page</title>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</head>
<body>
    <style>
        .store-heading{
            display: flex;
            justify-content: center;
        }





        .main-card{
            width: 90%;
        }
    </style>

        <!--navbar-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light" >
                <a class="navbar-brand" href="/">Demo Systems - Maron</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/purchase-test">Purchase</a>
                        </li>
                    </ul>
                </div>
            </nav>
        <!--navbar-end-->

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
                                <tr>
                                    <th scope="row">Pandesal</th>
                                    <td>5.00</td>
                                </tr>
                                <tr>
                                    <th scope="row">Ensaymada</th>
                                    <td>20.00</td>
                                </tr>
                                <tr>
                                    <th scope="row">Spanish Bread</th>
                                    <td>10.00</td>
                                </tr>
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
                                <tr>
                                    <th scope="row">Soda</th>
                                    <td>10.00</td>
                                </tr>
                                <tr>
                                    <th scope="row">Coke</th>
                                    <td>10.00</td>
                                </tr>
                                <tr>
                                    <th scope="row">Sprite</th>
                                    <td>15.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--Beverage Table End-->

                    <div class="row col-md-12">
                        <!--form for ordering-->
                        <form>
                            <div class="form-group row">
                                <label for="bread" class="col-md-3 col-form-label ">Bread Name</label>
                                <div class="col-md-3">
                                    <select name="bread" id="" class="form-control">
                                        <option value="5">Pandesal</option>
                                        <option value="20">Ensaymada</option>
                                        <option value="10">Spanish Bread</option>
                                    </select>
                                </div>

                                <label for="bread-quantity" class="col-md-3 col-form-label " >Quantity</label>
                                <div class="col-md-3">
                                    <input type="number" id="bread-quantity" name="bread-quantity" value ="1" min="1" max="10" class="form-control">
                                </div>

                                <label for="beverage" class="col-md-3 col-form-label ">Beverage</label>
                                <div class="col-md-3">
                                    <select name="bread" id="" class="form-control">
                                        <option value="10">Soda</option>
                                        <option value="10">Coke</option>
                                        <option value="15">Sprite</option>
                                    </select>
                                </div>

                                <label for="beverage-quantity" class="col-md-3 col-form-label ">Quantity</label>
                                <div class="col-md-3">
                                    <input type="number" id="beverage-quantity" name="beverage-quantity" value ="1" min="1" max="10" class="form-control">
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
                                <tbody>
                                    <tr>
                                        <th scope="row">Spanish Bread</th>
                                        <td>2x</td>
                                        <td>20.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Cassava Cake</th>
                                        <td>1x</td>
                                        <td>75.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Ensaymada</th>
                                        <td>3x</td>
                                        <td>60.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" colspan="2">Total</th>
                                        <td>155.00</td>
                                    </tr>
                                </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>