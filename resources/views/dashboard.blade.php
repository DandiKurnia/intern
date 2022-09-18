@extends('layouts.partials.main')

@section('title', 'Dashboard')

@section('container')
<div class="row">
    <div class="col-xl-3 col-6">
        <div class="card card-stats mb-4 mb-xl-0 bg-info">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <a href="/stasiun">
                            <h5 class="card-title text-uppercase mb-2 text-white">Stasiun</h5>
                        </a>
                        <span class="h2 font-weight-bold text-white">{{ $stasiun }}</span>
                    </div>
                    <div class="col-auto">
                        <div class="icon">
                            <i class="menu-icon tf-icons bx bx-train text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-6">
        <div class="card card-stats mb-4 mb-xl-0 bg-info">
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-10 col-12">
                        <a href="/customer">
                            <h5 class="card-title text-uppercase mb-2 text-white">customer</h5>
                        </a>
                        <span class="h2 font-weight-bold text-white">{{ $customer }}</span>
                    </div>
                    <div class="col-xl-2 col-12">
                        <div class="icon">
                            <i class='bx bx-user text-white'></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-6">
        <div class="card card-stats mb-4 mb-xl-0 bg-info">
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-10 col-12">
                        <a href="/ticket">
                            <h5 class="card-title text-uppercase mb-2 text-white">Ticket</h5>
                        </a>
                        <span class="h2 font-weight-bold text-white">{{ $ticket }}</span>
                    </div>
                    <div class="col-xl-2 col-12">
                        <div class="icon">
                            <i class='bx bx-credit-card-front text-white'></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-6">
        <div class="card card-stats mb-4 mb-xl-0 bg-info">
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-10 col-12">
                        <a href="/data-center">
                            <h5 class="card-title text-uppercase mb-2 text-white">Center</h5>
                        </a>
                        <span class="h2 font-weight-bold text-white">{{ $center }}</span>
                    </div>
                    <div class="col-xl-2 col-12">
                        <div class="icon">
                            <i class='bx bx-data text-white'></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mt-4">
    <div class="col-xl-3 col-6">
        <div class="card card-stats mb-4 mb-xl-0 bg-info">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <a href="/service">
                            <h5 class="card-title text-uppercase mb-2 text-white">Service</h5>
                        </a>
                        <span class="h2 font-weight-bold text-white">{{ $service }}</span>
                    </div>
                    <div class="col-auto">
                        <div class="icon">
                            <i class="menu-icon tf-icons bx bx-station text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-6">
        <div class="card card-stats mb-4 mb-xl-0 bg-info">
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-10 col-12">
                        <a href="/perangkat">
                            <h5 class="card-title text-uppercase mb-2 text-white">Perangkat</h5>
                        </a>
                        <span class="h2 font-weight-bold text-white">{{ $perangkat }}</span>
                    </div>
                    <div class="col-xl-2 col-12">
                        <div class="icon">
                            <i class='bx bxs-devices text-white'></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-12">
        <div class="card">
                    <div class="card-header" style="background-color: #263238">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link text-white active"><i class="bi bi-card-heading mr-1"></i>Log
                                    Pengguna</a>
                            </li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body"
                        style="overflow-y: auto; max-height: 300px !important;height: 300px !important;">
                        <div class="tab-content p-0">
                            <div class="tab-pane active">
                                @foreach ($logs as $log)
                                    <div class="callout callout-info">
                                        <p>{{ $log['keterangan'] }}</p>
                                        <small>Pengubah : {{ $log['name'] }}<br>{{ $log['created_at'] }}</small>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div><!-- /.card-body -->
                </div>

    </div>
</div>
@endsection
