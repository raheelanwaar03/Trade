@extends('admin.layout.app')

@section('content')
    <section class="dashboard-section">
        <div class="outer-container">
            <div class="dashboard-content">
                <div class="table-content">
                    <div class="title-box">All Deposit Requests</div>
                    <div class="dashboard-table">
                        <table id="example">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Account_Num</th>
                                    <th>Amount</th>
                                    <th>TID</th>
                                    <th>Proof</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($deposits as $item)
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
                                        <td>{{ $item->account_num }}</td>
                                        <td>{{ $item->amount }}</td>
                                        <td>{{ $item->tid }}</td>
                                        <td>
                                            <img src="{{ asset('deposit/' . $item->img) }}" class="img-fluid image-zoom-sm"
                                                style="height: 80px;width:80px;border-radius:50px">
                                        </td>
                                        <td class="date">
                                            <img src="{{ asset('assets/images/icons/icon-46.svg') }}" height="20px"
                                                width="20px">
                                            {{ date('d-m-Y', strtotime($item->created_at)) }}
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-warning text-white">Edit</a>
                                            <a href="#" class="btn btn-sm btn-success">Approve</a>
                                            <a href="#" class="btn btn-sm btn-danger">Reject</a>
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
