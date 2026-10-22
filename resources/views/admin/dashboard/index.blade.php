@extends('admin.layout')

@section('content')
    <div class="page-header">
        <div>
            <h1 class="page-title">Dashboard</h1>
            <p class="page-subtitle">An easy way to manage sales with care and precision.</p>
        </div>
        <button class="btn-date-picker" type="button" id="date-picker-trigger">
            <i class="bi bi-calendar4-event"></i>
            <span id="selected-date-range">January 12, 2026 - January 23, 2026</span>
            <i class="bi bi-chevron-down ms-1"></i>
        </button>
    </div>

    <div class="row g-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Halaman Dashboard</h4>
                </div>

                <div class="card-body">
                    {{-- <p>HEllo</p> --}}
                    <img class="w-100 h-100" src="{{ asset('/assets/images/spanduk.jpeg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
