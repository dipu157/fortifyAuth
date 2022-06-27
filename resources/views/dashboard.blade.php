@extends('layouts.master')

@section('content')

<!---- Dashboard Start --->
            <div class="page-wrapper">
                <style>
                .batch-d{
                margin-top: 10px;
                }
                </style>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-12 batch-d d-flex">
                            <div class="card card-inverse card-info d-flex" style="flex: 1 1 100%;">
                                <div class="card-body" style="position: relative;">
                                    <div class="d-flex">
                                        <div class="m-r-20 align-self-center">
                                            <h1 class="text-white"><i class="fa fa-user float-right"></i></h1>
                                        </div>
                                        <div class="mr-auto">
                                            <h4 class="card-title">Total <br /> Customer</h4>
                                        </div>
                                        <h2 class="font-light text-white">
                                        
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 batch-d">
                            <div class="card card-inverse card-success">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="m-r-20 align-self-center">
                                        <h1 class="text-white"><i class="fa fa-medkit float-right"></i></h1></div>
                                        <div>
                                            <h4 class="card-title">TOTAL MEDICINE</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 align-self-center">
                                        <h2 class="font-light text-white"></h2> </div>
                                        <div class="col-8 p-t-10 p-b-20 text-right">
                                            <div class="spark-count" style="height:50px"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 batch-d">
                            <div class="card card-inverse card-danger">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="m-r-20 align-self-center">
                                        <h1 class="text-white"><i class="fa fa-handshake-o float-right"></i></h1></div>
                                        <div>
                                            <h4 class="card-title">TOTAL SUPPLIER</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 align-self-center">
                                        <h2 class="font-light text-white"></h2> </div>
                                        <div class="col-8 p-t-10 p-b-20 text-right">
                                            <div class="spark-count" style="height:50px"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 batch-d">
                            <div class="card card-inverse card-primary">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="m-r-20 align-self-center">
                                        <h1 class="text-white"><i class="fa fa-pencil-square-o float-right"></i></h1></div>
                                        <div>
                                            <h4 class="card-title">SALES TODAY</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 align-self-center">
                                        <h2 class="font-light text-white"></h2> </div>
                                        <div class="col-8 p-t-10 p-b-20 text-right">
                                            <div class="spark-count" style="height:50px"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Row -->
                    <div class="row">
                        <!-- Column -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="d-flex flex-row">
                                    <div class="p-10 bg-info">
                                    <h5 class="text-white box m-b-0"><i class="ti-wallet"></i></h5></div>
                                    <div class="align-self-center m-l-20">
                                        <h5 class="text-muted m-b-0"><a href="#">Create Invoice</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="d-flex flex-row">
                                    <div class="p-10 bg-success">
                                    <h5 class="text-white box m-b-0"><i class="ti-wallet"></i></h5></div>
                                    <div class="align-self-center m-l-20">
                                        <h5 class="text-muted m-b-0"><a href="#">Add Medicine</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="d-flex flex-row">
                                    <div class="p-10 bg-success">
                                    <h5 class="text-white box m-b-0"><i class="ti-wallet"></i></h5></div>
                                    <div class="align-self-center m-l-20">
                                        <h5 class="text-muted m-b-0"><a href="#">Add Purchase</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="d-flex flex-row">
                                    <div class="p-10 bg-inverse">
                                    <h5 class="text-white box m-b-0"><i class="ti-wallet"></i></h5></div>
                                    <div class="align-self-center m-l-20">
                                        <h5 class="text-muted m-b-0"><a href="#">Add Supplier</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="d-flex flex-row">
                                    <div class="p-10 bg-primary">
                                    <h5 class="text-white box m-b-0"><i class="ti-wallet"></i></h5></div>
                                    <div class="align-self-center m-l-20">
                                        <h5 class="text-muted m-b-0"><a href="#">Add Customer</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="d-flex flex-row">
                                    <div class="p-10 bg-info">
                                    <h5 class="text-white box m-b-0"><i class="ti-wallet"></i></h5></div>
                                    <div class="align-self-center m-l-20">
                                        <h5 class="text-muted m-b-0"><a href="#">Sales Report</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="d-flex flex-row">
                                    <div class="p-10 bg-success">
                                    <h5 class="text-white box m-b-0"><i class="ti-wallet"></i></h5></div>
                                    <div class="align-self-center m-l-20">
                                        <h5 class="text-muted m-b-0"><a href="#">Purchase Report</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="d-flex flex-row">
                                    <div class="p-10 bg-inverse">
                                    <h5 class="text-white box m-b-0"><i class="ti-wallet"></i></h5></div>
                                    <div class="align-self-center m-l-20">
                                        <h5 class="text-muted m-b-0"><a href="#">Out Of Stock</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <!-- Column -->
                    </div>
                    
                </div>
                <footer class="footer"> © Developed By @ Dipu </footer>
            </div>
            <!---- Dashboard End --->

@endsection