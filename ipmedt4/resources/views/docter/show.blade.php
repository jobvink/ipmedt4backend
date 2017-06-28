@extends('layouts.app')

@section('content')
    <div class="container-fluid" style="background: white">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Overzicht</h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-10 col-lg-offset-1">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-user"></i> Patienten
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table class="table table-striped table-bordered" id="mydata">
                                <thead>
                                <tr>
                                    <th>Naam</th>
                                    <th>Email</th>
                                    <th>Adres</th>
                                    <th>Actie</th>
                                </tr>

                                </thead>

                                <tbody>
                                    @foreach($patients as $patient)
                                        <tr>
                                            <td>{{$patient->name}}</td>
                                            <td>{{$patient->email}}</td>
                                            <td>{{$patient->address}}</td>
                                            <td><a href="/docter/{{$docter->id}}/patients/{{$patient->id}}/" class="btn btn-success">Details</a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>

            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->

@endsection

@section('footerscripts')
    <!-- jQuery -->
    <script src="/vendor/jquery/jquery.min.js"></script>

    <!-- Full Google Calendar - Calendar -->
    <script type="text/javascript" src="/js/fullcalendar.min.js"></script>
    <script type="text/javascript" src="/js/fullcalendar.js"></script>
    <script type="text/javascript" src="/js/calendar-custom.js"></script>
    <script type="text/javascript" src="/js/gcal.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>

    <!-- DataTable -->
    <script src="/js/jquery.js"></script>
    <script src="/js/jquery.dataTables.min.js"></script>
    <script src="/js/dataTables.bootstrap.min.js"></script>
    <script> $('#mydata').dataTable();</script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/js/sb-admin-2.js"></script>
@endsection