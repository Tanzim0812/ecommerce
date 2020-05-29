@extends('layouts.app')
@section('content')
    <div class="row animated fadeInUp">




        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
        <!--TABS WITH TABLET-->
        <div class="col-sm-12 col-md-8">
            <div class="tabs mt-none">
                <!-- Tabs Header -->
                <ul class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#home" data-toggle="tab">Employees</a></li>

                </ul>
                <!-- Tabs Content -->
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="home">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Olivia Liang</td>
                                    <td>Support Engineer</td>
                                    <td>Singapore</td>
                                    <td>34</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
