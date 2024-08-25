@extends('user.layout.app')

@section('content')
    <section class="dashboard-section">
        <div class="outer-container">
            <div class="dashboard-content">
                <div class="activites-content">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 column">
                            <a href="#" class="single-item">
                                <div class="icon-box"><img src="{{ asset('assets/images/icons/wallet.png') }}" alt="">
                                </div>
                                <span>Wallet</span>
                                <h2>567</h2>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 column">
                            <a href="#" class="single-item">
                                <div class="icon-box"><img src="{{ asset('assets/images/icons/deposit.png') }}"
                                        alt=""></div>
                                <span>Deposit</span>
                                <h2>567</h2>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 column">
                            <a href="#" class="single-item">
                                <div class="icon-box"><img src="{{ asset('assets/images/icons/withdraw.png') }}"
                                        alt=""></div>
                                <span>Withdraw</span>
                                <h2>567</h2>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="table-content">
                    <div class="title-box">Transaction History</div>
                    <div class="dashboard-table">
                        <table id="example">
                            <thead>
                                <tr>
                                    <th>User Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Spent</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#089078</td>
                                    <td>
                                        <div class="author-box">
                                            <div class="author-image"><img
                                                    src="{{ asset('assets/images/resource/author-5.png') }}" alt="">
                                            </div>
                                            <span class="name">Esther Howard</span>
                                        </div>
                                    </td>
                                    <td class="email">test@email.com</td>
                                    <td class="date"><img src="{{ asset('assets/images/icons/icon-46.svg') }}"
                                            alt=""> 12 Dec,
                                        2020
                                    </td>
                                    <td><span class="status-text complete">Complete</span></td>
                                    <td>$345.14</td>
                                </tr>
                                <tr>
                                    <td>#089078</td>
                                    <td>
                                        <div class="author-box">
                                            <div class="author-image"><img
                                                    src="{{ asset('assets/images/resource/author-6.png') }}" alt="">
                                            </div>
                                            <span class="name">James Mullican</span>
                                        </div>
                                    </td>
                                    <td class="email">test@email.com</td>
                                    <td class="date"><img src="{{ asset('assets/images/icons/icon-46.svg') }}"
                                            alt=""> 10 Dec,
                                        2020
                                    </td>
                                    <td><span class="status-text pending">Pending</span></td>
                                    <td>$247.14</td>
                                </tr>
                                <tr>
                                    <td>#089078</td>
                                    <td>
                                        <div class="author-box">
                                            <div class="author-image"><img
                                                    src="{{ asset('assets/images/resource/author-7.png') }}" alt="">
                                            </div>
                                            <span class="name">Robert Bacins</span>
                                        </div>
                                    </td>
                                    <td class="email">test@email.com</td>
                                    <td class="date"><img src="{{ asset('assets/images/icons/icon-46.svg') }}"
                                            alt=""> 09 Dec,
                                        2020
                                    </td>
                                    <td><span class="status-text complete">Complete</span></td>
                                    <td>$4573.14</td>
                                </tr>
                                <tr>
                                    <td>#089078</td>
                                    <td>
                                        <div class="author-box">
                                            <div class="author-image"><img
                                                    src="{{ asset('assets/images/resource/author-8.png') }}" alt="">
                                            </div>
                                            <span class="name">Bethany Jackson</span>
                                        </div>
                                    </td>
                                    <td class="email">test@email.com</td>
                                    <td class="date"><img src="{{ asset('assets/images/icons/icon-46.svg') }}"
                                            alt=""> 10 Dec,
                                        2020
                                    </td>
                                    <td><span class="status-text complete">Complete</span></td>
                                    <td>$564.14</td>
                                </tr>
                                <tr>
                                    <td>#089078</td>
                                    <td>
                                        <div class="author-box">
                                            <div class="author-image"><img
                                                    src="{{ asset('assets/images/resource/author-9.png') }}"
                                                    alt=""></div>
                                            <span class="name">Anne Jacob</span>
                                        </div>
                                    </td>
                                    <td class="email">test@email.com</td>
                                    <td class="date"><img src="{{ asset('assets/images/icons/icon-46.svg') }}"
                                            alt=""> 10 Dec,
                                        2020
                                    </td>
                                    <td><span class="status-text complete">Complete</span></td>
                                    <td>$8462.14</td>
                                </tr>
                                <tr>
                                    <td>#089078</td>
                                    <td>
                                        <div class="author-box">
                                            <div class="author-image"><img
                                                    src="{{ asset('assets/images/resource/author-10.png') }}"
                                                    alt=""></div>
                                            <span class="name">Bethany jackson</span>
                                        </div>
                                    </td>
                                    <td class="email">test@email.com</td>
                                    <td class="date"><img src="{{ asset('assets/images/icons/icon-46.svg') }}"
                                            alt=""> 10 Dec,
                                        2020
                                    </td>
                                    <td><span class="status-text pending">Pending</span></td>
                                    <td>$346.14</td>
                                </tr>
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
