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

    <!-- DataTable -->
    <script src="/js/jquery.js"></script>
    <script src="/js/jquery.dataTables.min.js"></script>
    <script src="/js/dataTables.bootstrap.min.js"></script>
    <script> $('#mydata').dataTable(
        {"language":
            {
                "sEmptyTable":   	"Er zijn geen articlen om weer te geven",
                "sInfo":         	"Articlen _START_ tot _END_ van _TOTAL_.",
                "sInfoEmpty":    	"0 van 0 tot 0 regels",
                "sInfoFiltered": 	"(gefilterd tot _MAX_ regels)",
                "sInfoPostFix":  	"",
                "sInfoThousands":  	".",
                "sLengthMenu":   	"_MENU_ regels",
                "sLoadingRecords": 	"Wordt geladen...",
                "sProcessing":   	"Een moment geduld...",
                "sSearch":       	"zoeken",
                "sZeroRecords":  	"Geen articlen gevonden.",
                "oPaginate": {
                    "sFirst":    	"Eerste",
                    "sPrevious": 	"Vorige",
                    "sNext":     	"Volgende",
                    "sLast":     	"Laatste"
                },
                "oAria": {
                    "sSortAscending":  ": aktivieren, um Spalte aufsteigend zu sortieren",
                    "sSortDescending": ": aktivieren, um Spalte absteigend zu sortieren"
                }
            }
        });</script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/js/sb-admin-2.js"></script>
@endsection