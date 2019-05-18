@extends('layouts.app')


@section('title', 'Dashboard')

@push('css')
<script>var dataMonth = {!! json_encode($reservPerMonth) !!}</script>

@endpush


@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-25">
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c1">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="text">
                                    <h3><i class="zmdi zmdi-shopping-cart"></i> Item Count</h3>
                                    <h2>{{ $itemCount }}</h2>
                                    <a href="{{ route('item.create') }}"><span>Get More Items</span></a>
                                </div>
                            </div>
                            {{-- <div class="overview-chart">
                                <canvas id="widgetChart1"></canvas>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c2">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="text">
                                    <h3><i class="zmdi zmdi-shopping-cart"></i> Slider Count</h3>
                                    <h2>{{ $sliderCount }}</h2>
                                    <a href="{{ route('slider.create') }}">Get More Sliders</a>
                                </div>
                            </div>
                            {{-- <div class="overview-chart">
                                <canvas id="widgetChart2"></canvas>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c3">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">

                                <div class="text">
                                    <h3><i class="zmdi zmdi-calendar-note"></i> Reservation</h3>
                                    <h2>{{ $reservationFalse->count() }}</h2>
                                    <a href="{{ route('reservation.index') }}"><span>Confirm Reservation</span></a>
                                </div>
                            </div>
                            {{-- <div class="overview-chart">
                                <canvas id="widgetChart3"></canvas>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c4">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">

                                <div class="text">
                                    <h3><i class="zmdi zmdi-money"></i> Contact</h3>
                                    <h2>{{ $contactCount }}</h2>
                                    <a href="{{ route('contact.index') }}">Show More</a>
                                </div>
                            </div>
                            {{-- <div class="overview-chart">
                                <canvas id="widgetChart4"></canvas>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="au-card recent-report">
                        <div class="au-card-inner">
                            <h3 class="title-2">recent reports</h3>
                            <div class="chart-info">
                                <div class="chart-info__left">
                                    <div class="chart-note">
                                        <span class="dot dot--blue"></span>
                                        <span>Reservations</span>
                                    </div>
                                </div>
                                {{-- <div class="chart-info__right">
                                    <div class="chart-statis">
                                        <span class="index incre">
                                            <i class="zmdi zmdi-long-arrow-up"></i>25%</span>
                                        <span class="label">Reservations</span>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="recent-report__chart">
                                <canvas id="recent-rep-chart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@push('script')


@endpush
