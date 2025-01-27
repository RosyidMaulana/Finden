﻿@extends('admin.main')


@section('admin')


        <section class="content">
            <div class="container-fluid">
                <div class="block-header">
                    <h2>DASHBOARD</h2>
                </div>

                <!-- Widgets -->
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box-4 hover-zoom-effect">
                            <div class="icon">
                                <i class="material-icons col-indigo">playlist_add_check</i>
                            </div>
                            <div class="content">
                                <div class="text">KEHILANGAN ORANG</div>
                                <div
                                    class="number count-to"
                                    data-from="0"
                                    data-to="{{ $orang }}"
                                    data-speed="15"
                                    data-fresh-interval="20"
                                ></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box-4 hover-zoom-effect">
                            <div class="icon">
                                <i class="material-icons col-lime">playlist_add_check</i>
                            </div>
                            <div class="content">
                                <div class="text">KEHILANGAN HEWAN</div>
                                <div
                                    class="number count-to"
                                    data-from="0"
                                    data-to="{{ $hewan }}"
                                    data-speed="15"
                                    data-fresh-interval="20"
                                ></div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div
                            class="info-box-4 hover-zoom-effect"
                        >
                            <div class="icon">
                                <i class="material-icons col-blue">forum</i>
                            </div>
                            <div class="content">
                                <div class="text">TOTAL KOMENTAR</div>
                                <div
                                    class="number count-to"
                                    data-from="0"
                                    data-to="243"
                                    data-speed="1000"
                                    data-fresh-interval="20"
                                ></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box-4 hover-zoom-effect">
                            <div class="icon">
                                <i class="material-icons col-red">person_add</i>
                            </div>
                            <div class="content">
                                <div class="text">TOTAL PENGGUNA</div>
                                <div
                                    class="number count-to"
                                    data-from="0"
                                    data-to="{{ $user }}"
                                    data-speed="1000"
                                    data-fresh-interval="20"
                                ></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Widgets -->
                

                <div class="row clearfix">
                    <!-- Task Info -->
                    <div class="col-xs-15 col-sm-12 col-md-12 col-lg-15">
                        <div class="card">
                            <div class="header">
                                <h2>MISSING</h2>
                                <ul class="header-dropdown m-r--5">
                                    <li class="dropdown">
                                        <a
                                            href="javascript:void(0);"
                                            class="dropdown-toggle"
                                            data-toggle="dropdown"
                                            role="button"
                                            aria-haspopup="true"
                                            aria-expanded="false"
                                        >
                                            <i class="material-icons"
                                                >more_vert</i
                                            >
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li>
                                                <a href="javascript:void(0);"
                                                    >Action</a
                                                >
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"
                                                    >Another action</a
                                                >
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"
                                                    >Something else here</a
                                                >
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table
                                        class="table table-hover dashboard-task-infos"
                                    >
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Task</th>
                                                <th>Status</th>
                                                <th>Manager</th>
                                                <th>Progress</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Task A</td>
                                                <td>
                                                    <span class="label bg-green"
                                                        >Doing</span
                                                    >
                                                </td>
                                                <td>John Doe</td>
                                                <td>
                                                    <div class="progress">
                                                        <div
                                                            class="progress-bar bg-green"
                                                            role="progressbar"
                                                            aria-valuenow="62"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"
                                                            style="width: 62%"
                                                        ></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Task B</td>
                                                <td>
                                                    <span class="label bg-blue"
                                                        >To Do</span
                                                    >
                                                </td>
                                                <td>John Doe</td>
                                                <td>
                                                    <div class="progress">
                                                        <div
                                                            class="progress-bar bg-blue"
                                                            role="progressbar"
                                                            aria-valuenow="40"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"
                                                            style="width: 40%"
                                                        ></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Task C</td>
                                                <td>
                                                    <span
                                                        class="label bg-light-blue"
                                                        >On Hold</span
                                                    >
                                                </td>
                                                <td>John Doe</td>
                                                <td>
                                                    <div class="progress">
                                                        <div
                                                            class="progress-bar bg-light-blue"
                                                            role="progressbar"
                                                            aria-valuenow="72"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"
                                                            style="width: 72%"
                                                        ></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Task D</td>
                                                <td>
                                                    <span
                                                        class="label bg-orange"
                                                        >Wait Approvel</span
                                                    >
                                                </td>
                                                <td>John Doe</td>
                                                <td>
                                                    <div class="progress">
                                                        <div
                                                            class="progress-bar bg-orange"
                                                            role="progressbar"
                                                            aria-valuenow="95"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"
                                                            style="width: 95%"
                                                        ></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Task E</td>
                                                <td>
                                                    <span class="label bg-red"
                                                        >Suspended</span
                                                    >
                                                </td>
                                                <td>John Doe</td>
                                                <td>
                                                    <div class="progress">
                                                        <div
                                                            class="progress-bar bg-red"
                                                            role="progressbar"
                                                            aria-valuenow="87"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"
                                                            style="width: 87%"
                                                        ></div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
@endsection
