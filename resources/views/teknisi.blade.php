@extends('layouts.mainlayout')

@section('title', 'Dashboard')

@section('content')
    <h1>Welcome, {{Auth::user()->name}}!</h1>
    
    <div class="row mt-4">
        <div class="col-3">
            <div class="card-data going">
                <div class="row">
                    <div class="col-6">
                        <i class="bi bi-arrow-clockwise"></i>
                    </div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-count">{{$going_count}}</div>
                        <div class="card-desc">On Going</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card-data review">
                <div class="row">
                    <div class="col-6">
                        <i class="bi bi-award-fill"></i>
                    </div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-count">{{$review_count}}</div>
                        <div class="card-desc">On Review</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card-data completed">
                <div class="row">
                    <div class="col-6">
                        <i class="bi bi-check2-all"></i>
                    </div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-count">{{$completed_count}}</div>
                        <div class="card-desc">Completed</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card-data pending">
                <div class="row">
                    <div class="col-6">
                        <i class="bi bi-ticket-detailed-fill"></i>
                    </div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-count">{{$pending_count}}</div>
                        <div class="card-desc">Pending</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-3">
        <h3>Summary Tickets</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Lokasi</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="7" style="text-align: center;">No Data</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection