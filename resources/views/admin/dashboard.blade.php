@extends('admin.layout.app')

@section('content')
    <section class="dashboard-section">
        <div class="outer-container">
            <div class="dashboard-content">
                <div class="activites-content">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 column">
                            <a href="#" class="single-item">
                                <div class="icon-box"><img src="{{ asset('assets/images/team/users.png') }}" alt="users">
                                </div>
                                <span>All User</span>
                                <h2>{{ users() }}</h2>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 column">
                            <a href="#" class="single-item">
                                <div class="icon-box"><img src="{{ asset('assets/images/icons/deposit.png') }}"
                                        alt=""></div>
                                <span>Deposit</span>
                                <h2>{{ total_deposit() }}</h2>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 column">
                            <a href="#" class="single-item">
                                <div class="icon-box"><img src="{{ asset('assets/images/icons/withdraw.png') }}"
                                        alt=""></div>
                                <span>Withdraw</span>
                                <h2>{{ total_withdraw() }}</h2>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="table-content">
                    <div class="title-box text-center">All Users</div>
                    <div class="dashboard-table">
                        <table id="example">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Date</th>
                                    <th>Balance</th>
                                    <th>Plan</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>
                                            <div class="author-box">
                                                <div class="author-image"><img
                                                        src="{{ asset('assets/images/resource/author-5.png') }}"
                                                        alt="">
                                                </div>
                                                <span class="name">{{ $user->name }}</span>
                                            </div>
                                        </td>
                                        <td class="email">{{ $user->email }}</td>
                                        <td class="date"><img src="{{ asset('assets/images/icons/icon-46.svg') }}"
                                                alt=""> {{ date('d-m-Y', strtotime($user->created_at)) }}
                                        </td>
                                        <td>{{ $user->balance }}</td>
                                        <td>Real-state</td>
                                        <td><span class="status-text complete">Complete</span></td>
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
