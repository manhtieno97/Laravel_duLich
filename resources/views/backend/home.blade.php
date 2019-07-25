
@extends('backend.layout.master')
@section('title','Trang quản trị')
@section('content')
<header class="content__title">
    <h1>Dashboard</h1>
    <small>Welcome to the unique SuperAdmin web app experience!</small>
</header>

<div class="row quick-stats">
    <div class="col-sm-6 col-md-3">
        <div class="quick-stats__item">
            <div class="quick-stats__info">
                <h2>987,459</h2>
                <small>Total Leads Recieved</small>
            </div>

            <div class="quick-stats__chart peity-bar">6,4,8,6,5,6,7,8,3,5,9</div>
        </div>
    </div>

    <div class="col-sm-6 col-md-3">
        <div class="quick-stats__item">
            <div class="quick-stats__info">
                <h2>356,785K</h2>
                <small>Total Website Clicks</small>
            </div>

            <div class="quick-stats__chart peity-bar">4,7,6,2,5,3,8,6,6,4,8</div>
        </div>
    </div>

    <div class="col-sm-6 col-md-3">
        <div class="quick-stats__item">
            <div class="quick-stats__info">
                <h2>$58,778</h2>
                <small>Total Sales Orders</small>
            </div>

            <div class="quick-stats__chart peity-bar">9,4,6,5,6,4,5,7,9,3,6</div>
        </div>
    </div>

    <div class="col-sm-6 col-md-3">
        <div class="quick-stats__item">
            <div class="quick-stats__info">
                <h2>214</h2>
                <small>Total Support Tickets</small>
            </div>

            <div class="quick-stats__chart peity-bar">5,6,3,9,7,5,4,6,5,6,4</div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Sales Statistics</h4>
                <h6 class="card-subtitle">Vestibulum purus quam scelerisque, mollis nonummy metus</h6>

                <div class="flot-chart flot-curved-line"></div>
                <div class="flot-chart-legends flot-chart-legends--curved"></div>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Growth Rate</h4>
                <h6 class="card-subtitle">Commodo luctus nisi erat porttitor ligula eget lacinia odio semnec</h6>

                <div class="flot-chart flot-line"></div>
                <div class="flot-chart-legends flot-chart-legends--line"></div>
            </div>
        </div>
    </div>
</div>


@stop