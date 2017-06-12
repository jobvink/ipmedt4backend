@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Afspraak</h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-calendar"></i>&nbsp;Nieuwe afspraak
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <form method="POST">
                        <div class="container">
                            <div class="row">
                                <div class="form-group">
                                    <h1 class="col-lg-offset-1">Consult van patient(variabel)</h1>
                                    <div class="col-lg-4 col-lg-offset-1">
                                        <div class="form-group">
                                            <label for="stap_proces">Stap in het proces:</label>
                                            <select id="stap_proces" class="form-control" name="stap_proces">
                                                <option value="Huisarts">De huisarts</option>
                                                <option value="eerste_hulp">De eerste hulp</option>
                                                <option value="rontgenfoto">Röntgenfoto</option>
                                                <option value="gipse">Gipsen</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="datum">Datum voor de afspraak:</label>
                                            <input class="form-control" type="date" id="datum" name="datum"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="locatie">Locatie:</label>
                                            <select class="form-control" id="locatie" name="locatie">
                                                <option value="LUMC">LUMC</option>
                                                <option value="AMC">AMC</option>
                                                <option value="langeland">Langeland Ziekenhuis</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-lg-offset-1">
                                        <div class="form-group">
                                            <label for="beschrijving" class="form_tekst">Beschrijving
                                                (optioneel):</label>
                                            <textarea class="form-control" id="beschrijving" name="beschrijving"
                                                      rows="8" cols="50" placeholder="Beschrijf hier ..."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <br />
                                <input type="submit" class="col-lg-offset-1 btn btn-success">
                            </div></div>
                    </form>
                </div>
                <!-- /.panel-body -->
            </div>
        </div>

    </div>
@endsection

@section('footerscripts')

    <!-- jQuery -->
    <script src="{{asset('/vendor/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('/vendor/metisMenu/metisMenu.min.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{asset('/js/sb-admin-2.js')}}"></script>
@endsection