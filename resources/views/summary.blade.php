@extends('layouts.mainlayout')

@section('title', 'Summary Ticket')

@section('content')
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