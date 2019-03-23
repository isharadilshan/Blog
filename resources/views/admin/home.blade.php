@extends('admin.layouts.app')
@section('content')
    <div class="page-container">
        <div class="main-content">
            <div class="container-fluid">
                <div class="breadcrumb-wrapper row">
                    <div class="col-12 col-lg-3 col-md-6">
                        <h4 class="page-title">Dashboard 2</h4>
                    </div>
                    <div class="col-12 col-lg-9 col-md-6">
                        <ol class="breadcrumb float-right">
                            <li><a href="index.html">Dashboard</a></li>
                            <li class="active"> / Dashboard 2</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="info-box bg-primary">
                            <div class="icon-box">
                                <i class="lni-home"></i>
                            </div>
                            <div class="info-box-content">
                                <h4 class="number">1125</h4>
                                <p class="info-text">All Properties</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="info-box bg-success">
                            <div class="icon-box">
                                <i class="lni-tag"></i>
                            </div>
                            <div class="info-box-content">
                                <h4 class="number">351</h4>
                                <p class="info-text">For Sale</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="info-box bg-info">
                            <div class="icon-box">
                                <i class="lni-cart"></i>
                            </div>
                            <div class="info-box-content">
                                <h4 class="number">774</h4>
                                <p class="info-text">For Rent</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="info-box bg-purple">
                            <div class="icon-box">
                                <i class="lni-wallet"></i>
                            </div>
                            <div class="info-box-content">
                                <h4 class="number">$49450</h4>
                                <p class="info-text">Total Revenue</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card bg-dark">
                            <div class="card-header">
                                <h5 class="card-title text-white">Business Overview</h5>
                                <div class="float-right">
                                    <ul class="list-inline d-none d-sm-block">
                                        <li>
                                            <span class="status bg-primary"></span>
                                            <span class="text-white text-semibold">Sales</span>
                                        </li>
                                        <li>
                                            <span class="status bg-success"></span>
                                            <span class="text-white text-semibold">Expense</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="morris-line-example" style="height: 300px"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-xs-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-xs-12">
                                <div class="card bg-dark">
                                    <div class="card-body">
                                        <h5 class="text-white card-title">Sales Details of Properties</h5>
                                        <div class="row">
                                            <div class="col-5 m-t-20">
                                                <h3 class="text-primary">$7492</h3>
                                                <p class="text-white text-white">July 2018</p>
                                                <b class="text-white">(149 Sales)</b>
                                            </div>
                                            <div class="col-7">
                                                <div id="sales1" class="text-right">
                                                    <div id="morris-bar-example" style="height: 130px"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-xs-12">
                                <div class="card bg-dark">
                                    <div class="card-body">
                                        <h5 class="text-white card-title">Rent Details of Properties</h5>
                                        <div class="row">
                                            <div class="col-5  m-t-20">
                                                <h3 class="text-white text-info">$1930</h3>
                                                <p class="text-white light_op_text">July 2018</p>
                                                <b class="text-white">(170 Rentals)</b>
                                            </div>
                                            <div class="col-7">
                                                <div id="morris-bar-stacked" style="height: 130px"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="properties">
                                    <div class="card bg-dark">
                                        <div class="card-header">
                                            <h4 class="text-white card-title">Recent properties</h4>
                                            <div class="card-toolbar">
                                                <ul>
                                                    <li>
                                                        <a class="text-white" href="#">
                                                            <i class="lni-more-alt"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-media">
                                                <li class="list-item">
                                                    <div class="client-item">
                                                        <div class="media-img">
                                                            <img src="assets/img/properties/img1.jpg" alt="">
                                                        </div>
                                                        <div class="info">
                                                            <h4 class="title text-semibold"><a href="#">795 Folsom Ave, Suite 600 San Francisco</a></h4>
                                                            <p class="m-0">20 July 2018, John Doe</p>
                                                            <div class="float-item">
                                                                <button class="btn btn-success">Rent</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-item">
                                                    <div class="client-item">
                                                        <div class="media-img">
                                                            <img src="assets/img/properties/img2.jpg" alt="">
                                                        </div>
                                                        <div class="info">
                                                            <h4 class="title text-semibold"><a href="#">795 Folsom Ave, Suite 600 San Francisco</a></h4>
                                                            <p class="m-0">17 July 2018, Venessa Fern</p>
                                                            <div class="float-item">
                                                                <button class="btn btn-common">Sale</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-item">
                                                    <div class="client-item">
                                                        <div class="media-img">
                                                            <img src="assets/img/properties/img3.jpg" alt="">
                                                        </div>
                                                        <div class="info">
                                                            <h4 class="title text-semibold"><a href="#">795 Folsom Ave, Suite 600 San Francisco</a></h4>
                                                            <p class="m-0">13 July 2018, Danielle M. Stong</p>
                                                            <div class="float-item">
                                                                <button class="btn btn-success">Rent</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-item">
                                                    <div class="client-item">
                                                        <div class="media-img">
                                                            <img src="assets/img/properties/img4.jpg" alt="">
                                                        </div>
                                                        <div class="info">
                                                            <h4 class="title text-semibold"><a href="#">795 Folsom Ave, Suite 600 San Francisco</a></h4>
                                                            <p class="m-0">09 July 2018, Ample</p>
                                                            <div class="float-item">
                                                                <button class="btn btn-common">Sale</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-xs-12">
                        <div class="card bg-dark">
                            <div class="profile-bg">
                                <div class="user-profile bg-dark">
                                    <figure class="profile-wall-img">
                                        <img class="img-fluid" src="assets/img/profile/user-bg.jpg" alt="User Wall">
                                    </figure>
                                    <div class="profile-body">
                                        <figure class="profile-user-avatar">
                                            <img src="assets/img/profile/user1.jpg" alt="User Wall">
                                        </figure>
                                        <h3 class="text-white profile-user-name m-0">Michael A. Franklin</h3>
                                        <small class="text-white profile-user-address">California, United States</small>
                                    </div>
                                    <form class="forms-profile">
                                        <h4 class="text-white text-center">Request Inquiry</h4>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Full Name*">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email ID*">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="exampleInputMobile" placeholder="Mobile number*">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" id="exampleTextarea1" rows="3"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-common">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12">
                        <div class="card bg-dark">
                            <div class="card-header">
                                <h4 class="card-title text-white">Property Overview</h4>
                            </div>
                            <div class="table-overflow">
                                <table class="table table-lg">
                                    <thead>
                                        <tr>
                                        <td class="text-white text-semibold">Order No.</td>
                                        <td class="text-white text-semibold">Customer</td>
                                        <td class="text-white text-semibold">Property</td>
                                        <td class="text-white text-semibold">Date</td>
                                        <td class="text-white text-semibold">Status</td>
                                        <td class="text-white text-semibold">Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="invoice.html">#ODN84952</a></td>
                                            <td>John Doe</td>
                                            <td>795 Folsom Ave, Suite 600 San Francisco</td>
                                            <td>25/07/2018</td>
                                            <td><a href="#" class="badge badge-success">Paid</a></td>
                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="javascript: void(0);" class="dropdown-toggle arrow-none" data-toggle="dropdown" aria-expanded="false"><i class="lni-more-alt"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="lni-pencil mr-2 text-gray"></i>Edit Contact</a>
                                                        <a class="dropdown-item" href="#"><i class="lni-trash mr-2 text-gray"></i>Remove</a>
                                                        <a class="dropdown-item" href="#"><i class="lni-envelope mr-2 text-gray"></i>Send Email</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="invoice.html">#ODN84952</a></td>
                                            <td>Venessa Fern</td>
                                            <td>795 Folsom Ave, Suite 600 San Francisco</td>
                                            <td>19/07/2018</td>
                                            <td><a href="#" class="badge badge-info">Pending</a></td>
                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="javascript: void(0);" class="dropdown-toggle arrow-none" data-toggle="dropdown" aria-expanded="false"><i class="lni-more-alt"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="lni-pencil mr-2 text-gray"></i>Edit Contact</a>
                                                        <a class="dropdown-item" href="#"><i class="lni-trash mr-2 text-gray"></i>Remove</a>
                                                        <a class="dropdown-item" href="#"><i class="lni-envelope mr-2 text-gray"></i>Send Email</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="invoice.html">#ODN84952</a></td>
                                            <td>John Doe</td>
                                            <td>795 Folsom Ave, Suite 600 San Francisco</td>
                                            <td>15/07/2018</td>
                                            <td><a href="#" class="badge badge-danger">Fuiled</a></td>
                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="javascript: void(0);" class="dropdown-toggle arrow-none" data-toggle="dropdown" aria-expanded="false"><i class="lni-more-alt"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="lni-pencil mr-2 text-gray"></i>Edit Contact</a>
                                                        <a class="dropdown-item" href="#"><i class="lni-trash mr-2 text-gray"></i>Remove</a>
                                                        <a class="dropdown-item" href="#"><i class="lni-envelope mr-2 text-gray"></i>Send Email</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="invoice.html">#ODN84952</a></td>
                                            <td>Ample</td>
                                            <td>795 Folsom Ave, Suite 600 San Francisco</td>
                                            <td>04/07/2018</td>
                                            <td><a href="#" class="badge badge-success">Paid</a></td>
                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="javascript: void(0);" class="dropdown-toggle arrow-none" data-toggle="dropdown" aria-expanded="false"><i class="lni-more-alt"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="lni-pencil mr-2 text-gray"></i>Edit Contact</a>
                                                        <a class="dropdown-item" href="#"><i class="lni-trash mr-2 text-gray"></i>Remove</a>
                                                        <a class="dropdown-item" href="#"><i class="lni-envelope mr-2 text-gray"></i>Send Email</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
@endsection