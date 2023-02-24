@extends('environment.master')
@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <div class="text-end">
                    <button type="button" class="btn btn-success" data-toggle="basic" data-action="{{ route('coupon.import.modal', $campaign->id) }}">
                        <i class="fal fa-plus"></i>
                        <span class="d-none d-lg-inline border-start ms-2 ps-2">Kupon Ekle</span>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Kod</th>
                        <th scope="col">Başlangıç Tarihi</th>
                        <th scope="col">Bitiş Tarihi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($campaign->campaignCoupons as $coupons)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $coupons->coupon->code }}</td>
                        <td>{{ date_format(date_create($coupons->coupon->start_date),'d/m/Y') }}</td>
                        <td>{{ date_format(date_create($coupons->coupon->end_date),'d/m/Y') }}</td>
                    </tr>
                    @empty
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
