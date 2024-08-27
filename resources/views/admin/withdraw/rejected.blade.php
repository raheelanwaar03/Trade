@extends('admin.layout.app')

@section('content')
    <section class="dashboard-section">
        <div class="outer-container">
            <div class="dashboard-content">
                <div class="activites-content">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 column">
                            <div class="d-flex justify-content-around align-items-center single-item">
                                <a href="{{ route('Admin.Pending.Withdraws') }}"
                                    class="btn btn-warning text-white">Pending</a>
                                <a href="{{ route('Admin.Approved.Withdraw') }}" class="btn btn-success">Approved</a>
                                <a href="{{ route('Admin.Rejected.Withdraw') }}" class="btn btn-danger">Rejected</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-content">
                    <div class="title-box text-center">Rejected Withdraw Request</div>
                    <div class="dashboard-table">
                        <table id="example">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Number</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($withdraws as $item)
                                    <tr>
                                        <td>
                                            <div class="author-box">
                                                <div class="author-image"><img
                                                        src="{{ asset('assets/images/resource/author-2.png') }}"
                                                        style="height:45px;width:45px;">
                                                </div>
                                                <span class="name">{{ $item->title }}</span>
                                            </div>
                                        </td>
                                        <td>{{ $item->number }}</td>
                                        <td>{{ $item->amount }}</td>
                                        <td class="date">
                                            <img src="{{ asset('assets/images/icons/icon-46.svg') }}" height="20px"
                                                width="20px">
                                            {{ date('d-m-Y', strtotime($item->created_at)) }}
                                        </td>
                                        <td><span class="status-text pending">{{ $item->status }}</span></td>
                                        <td>
                                            <a href="{{ route('Admin.Approve.Withdraw', $item->id) }}"
                                                class="btn btn-sm btn-success">Approve</a>
                                            <a href="{{ route('Admin.Reject.Withdraw', $item->id) }}"
                                                class="btn btn-sm btn-danger">Reject</a>
                                        </td>
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
