@extends('admin.layout.app')

@section('content')
    <section class="dashboard-section">
        <div class="outer-container">
            <div class="dashboard-content">
                <div class="table-content">
                    <div class="title-box text-center">Sold Plans and Thier Buyer <a
                            href="{{ route('Admin.Give.Plans.Reward') }}" class="btn btn-warning">Give Reward</a></div>
                    <div class="dashboard-table">
                        <table id="example">
                            <thead>
                                <tr>
                                    <th>Plan Name</th>
                                    <th>Investment</th>
                                    <th>Percentage</th>
                                    <th>Daily Profit</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($soldPlans as $item)
                                    <tr>
                                        <td>{{ $item->plan_name }}</td>
                                        <td>{{ $item->amount }}</td>
                                        <td>{{ $item->percentage }}%</td>
                                        <td>{{ $item->daily_profit }}%</td>
                                        <td class="date">
                                            <img src="{{ asset('assets/images/icons/icon-46.svg') }}" height="20px"
                                                width="20px">
                                            {{ date('d-m-Y', strtotime($item->created_at)) }}
                                        </td>
                                        {{-- <td><span class="status-text pending">{{ $item->status }}</span></td> --}}
                                        {{-- <td>
                                            <a href="{{ route('Admin.Edit.Deposit', $item->id) }}"
                                                class="btn btn-sm btn-warning text-white">Edit</a>
                                            <a href="{{ route('Admin.Approve.Deposit', $item->id) }}"
                                                class="btn btn-sm btn-success">Approve</a>
                                            <a href="{{ route('Admin.Reject.Deposit', $item->id) }}"
                                                class="btn btn-sm btn-danger">Reject</a>
                                        </td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/data-table.js') }}"></script>
    <script src="{{ asset('assets/js/datatable.js') }}"></script>
@endsection
