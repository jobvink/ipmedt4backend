@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Afspraken</h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-calendar"></i>&nbsp;Nieuw onderzoek
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <form method="POST">
                        <div class="form-group">
                            <label for="type">Type:</label>
                            <select id="type" class="form-control" name="type">
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
                            <label for="beschrijving" class="form_tekst">Beschrijving
                                (optioneel):</label>
                            <textarea class="form-control" id="beschrijving" name="beschrijving"
                                      rows="8" cols="50" placeholder="Beschrijf hier ..."></textarea>
                        </div>
                        <input class="btn-default" type="file" id="file">
                        <br/>
                        <input class="btn btn-success" type="submit">
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