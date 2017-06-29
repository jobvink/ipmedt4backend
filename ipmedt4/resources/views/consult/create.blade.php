@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <a href="/docter/{{$docter->id}}/patients/{{$patient->id}}/" class="btn btn-danger" style="margin-top: 1rem"><i class="fa fa-caret-left"></i>&nbsp;Terug</a>
            <h1 class="page-header" style="margin-top: 10px">Consult</h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-calendar"></i>&nbsp;Nieuw onderzoek
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <form method="POST" action="/docter/{{$docter->id}}/patients/{{$patient->id}}/consults">
                        {{csrf_field()}}
                        <div class="form-group{{ $errors->has('consultant') ? ' has-error' : '' }}">
                            <label for="consultant">Consultant:</label>
                            <input class="form-control" type="text" id="consultant" name="consultant">
                            @if ($errors->has('consultant'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('consultant') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                            <label for="type">Type:</label>
                            <select id="type" class="form-control" name="type">
                                <option value="Huisarts">De huisarts</option>
                                <option value="eerste_hulp">De eerste hulp</option>
                                <option value="rontgenfoto">Röntgenfoto</option>
                                <option value="gipse">Gipsen</option>
                            </select>
                            @if ($errors->has('type'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('type') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('appointment_id') ? ' has-error' : '' }}">
                            <label for="appointment_id">Datum voor de afspraak:</label>
                            <select id="appointment_id" class="form-control" name="appointment_id">
                                @foreach($patient->appointments as $appointment)
                                    @if(count($appointment->consult) == 0)
                                    <option value="{{$appointment->id}}">{{$appointment->title}}&nbsp;:&nbsp;{{$appointment->date}}</option>
                                    @endif
                                @endforeach
                            </select>
                            @if ($errors->has('appointment_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('appointment_id') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="form_tekst">Beschrijving
                                (optioneel):</label>
                            <textarea class="form-control" id="description" name="description"
                                      rows="8" cols="50" placeholder="Beschrijf hier ..."></textarea>
                            @if ($errors->has('description'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                        </div>
                        <input type="hidden" id="docter_id" name="docter_id" value="{{$docter->id}}">
                        <input type="hidden" id="patient_id" name="patient_id" value="{{$patient->id}}">
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