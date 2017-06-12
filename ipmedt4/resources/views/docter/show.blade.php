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
                                    <th>Woonplaats</th>
                                    <th>Adres</th>
                                    <th>Mobiel</th>
                                </tr>

                                </thead>

                                <tbody>
                                    <tr><td>Rik</td><td>Rikwolk@gmail.com</td><td>Benthuizen</td><td>Christinastaat 77</td><td>0611708685</td></tr>
                                    <tr><td>Job</td><td>Rikwolk@gmail.com</td><td>Benthuizen</td><td>Christinastaat 77</td><td>0611708685</td></tr>
                                    <tr><td>Julia</td><td>Rikwolk@gmail.com</td><td>Benthuizen</td><td>Christinastaat 77</td><td>0611708685</td></tr>
                                    <tr><td>Tim</td><td>Rikwolk@gmail.com</td><td>Benthuizen</td><td>Christinastaat 77</td><td>0611708685</td></tr>
                                    <tr><td>Jeroen</td><td>Rikwolk@gmail.com</td><td>Benthuizen</td><td>Christinastaat 77</td><td>0611708685</td></tr>
                                    <tr><td>Robbertert</td><td>Rikwolk@gmail.com</td><td>Benthuizen</td><td>Christinastaat 77</td><td>0611708685</td></tr>
                                    <tr><td>Bert</td><td>Rikwolk@gmail.com</td><td>Benthuizen</td><td>Christinastaat 77</td><td>0611708685</td></tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>

            </div>
            <div class="col-lg-10 col-lg-offset-1">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-calendar"></i> Agenda
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="calendar"></div>
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
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Full Google Calendar - Calendar -->
    <script type="text/javascript" src="assets/fullcalendar.min.js"></script>
    <script type="text/javascript" src="assets/fullcalendar.js"></script>
    <script type="text/javascript" src="assets/calendar-custom.js"></script>
    <script type="text/javascript" src="assets/gcal.js"></script>
    <script type="text/javascript" src="assets/main.js"></script>

    <!-- DataTable -->
    <script src="assets/jquery.js"></script>
    <script src="assets/jquery.dataTables.min.js"></script>
    <script src="assets/dataTables.bootstrap.min.js"></script>
    <script> $('#mydata').dataTable();</script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
@endsection