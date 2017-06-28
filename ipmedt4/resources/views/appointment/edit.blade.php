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
                    <form method="POST" action="/docter/{{$docter->id}}/patients/{{$patient->id}}/appointments">
                        {{csrf_field()}}
                        <div class="container">
                            <div class="row">
                                <div class="form-group">
                                    <h1 class="col-lg-offset-1">Consult van patient {{$patient->id}}</h1>
                                    <div class="col-lg-4 col-lg-offset-1">
                                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                            <label for="title">Stap in het proces:</label>
                                            <select id="title" class="form-control" name="title">
                                                <option value="Huisarts">De huisarts</option>
                                                <option value="Eerstehulp">De eerste hulp</option>
                                                <option value="Rontgenfoto">Röntgenfoto</option>
                                                <option value="Gipsen">Gipsen</option>
                                            </select>
                                            @if ($errors->has('title'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('title') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                                            <label for="date">Datum voor de afspraak:</label>
                                            <input class="form-control" type="date" id="date" name="date"/>
                                            @if ($errors->has('date'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('date') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                                            <label for="location">Locatie:</label>
                                            <select class="form-control" id="location" name="location">
                                                <option value="LUMC">LUMC</option>
                                                <option value="AMC">AMC</option>
                                                <option value="langeland">Langeland Ziekenhuis</option>
                                            </select>
                                            @if ($errors->has('location'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('location') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-lg-offset-1">
                                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                            <label for="description" class="form_tekst">Beschrijving
                                                (optioneel):</label>
                                            <textarea class="form-control" id="description" name="description"
                                                      rows="8" cols="50">{{$appointment->description}}</textarea>
                                            @if ($errors->has('description'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('description') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <br />
                                <input type="hidden" id="docter_id" name="docter_id" value="{{$docter->id}}">
                                <input type="hidden" id="patient_id" name="patient_id" value="{{$patient->id}}">
                                <button type="submit" class="btn btn-success" >Wijzig</button>
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