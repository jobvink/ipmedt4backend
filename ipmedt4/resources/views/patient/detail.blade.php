@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Patient</h1>
        </div>
        <!-- /.col-lg-12 -->

    </div>
    <!-- /.row -->
    <div class="jumbotron">
        <div class="container">
            <div class="col-lg-3">
                <img src="{{asset('/img/placeholder.png')}}" alt="user profile" class="img-thumbnail">
            </div>
            <div class="col-lg-9">
                <h1>{{$patient->name}}</h1>
                <hr style="border: solid 1px lightgray; ">
                <table class="table">
                    <tbody>
                    <tr>
                        <th>Naam:</th>
                        <td>{{$patient->name}}</td>
                    </tr>
                    <tr>
                        <th>Geboorte Datum:</th>
                        <td>{{$patient->birthday}}</td>
                    </tr>
                    <tr>
                        <th>Adres:</th>
                        <td>{{$patient->address}}</td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td>{{$patient->email}}</td>
                    </tr>
                    </tbody>
                </table>
                <br>
                <a href="appointments/create" class="btn btn-success">Nieuwe afspraak</a>
                <a href="consults/create" class="btn btn-success">Nieuw consult</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 no-padding">
            <div class="col-lg-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapse1"><i class="fa fa-clock-o fa-fw">
                                </i>
                                Tijdlijn
                                <i class="fa fa-caret-down"></i>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="timeline">
                                <li>
                                    <!--deze stap in de timeline is afgerond-->
                                    <div class="timeline-badge success"><i class="fa fa-check"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">De huisarts</h4>
                                            <p>
                                                <small class="text-muted"><i class="fa fa-clock-o"></i> ~ 1 tot 2 uur</small>
                                            </p>
                                        </div>
                                        <div class="timeline-body">
                                            <p>
                                                Je denkt dat je misschien iets gebroken hebt, maar je weet het nog niet zeker. Op dit moment is de beste optie om langs de huisarts te gaan.
                                            </p>
                                        </div>
                                        <div>
                                            <br>
                                            <button type="button" class="btn btn-success test" data-toggle="modal" data-target="#huisarts">Lees meer</button>
                                            <button class="btn btn-danger disabled" type="button">verwijderen</button>
                                            <button class="btn btn-info disabled">wijzig</button>
                                        </div>
                                    </div>
                                    <!-- pop-up 1 met extra informatie over de huisarts -->
                                    <div id="huisarts" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <!-- Kruis butten sluiten pop-up -->
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h3 class="modal-title">De huisarts</h3>
                                                </div>
                                                <div class="modal-body">
                                                    <p>De huisarts zal vragen wat er is gebeurd en zal je daarna controleren op een eventuele
                                                        botbreuk. Mocht de huisarts concluderen dat je een botbreuk hebt, dan wordt je doorverwezen
                                                        naar het ziekenhuis waar je een röntgenfoto krijgt bij de afdeling radiologie.
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <!-- sluit butten sluiten pop-up -->
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Sluit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge"><i><img width="25px" height="25px" src="{{asset('/img/huisarts.svg')}}"/></i></div>
                                    <!--<div class="timeline-badge warning"><i class="fa fa-credit-card"></i></div>-->
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">De eerste hulp</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>
                                                Deze stap is voor patiënten die niet eerst naar de huisarts zijn geweest, maar meteen naar de eerste hulp.
                                            </p>
                                            <br>
                                            <button type="button" class="btn btn-success test" data-toggle="modal" data-target="#eersteHulp">Lees meer</button>
                                            <button type="button" class="btn btn-danger">verwijderen</button>
                                            <button class="btn btn-info">wijzig</button>
                                        </div>
                                    </div>
                                    <!-- Modal -->
                                    <div id="eersteHulp" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h3 class="modal-title">De eerste hulp</h3>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Bij de eerste hulp meld jij je aan bij het loket en vervolgens neem je plaats in de
                                                        wachtkamer. Als je geroepen wordt ontmoet je een specialist op het gebied van botbreuken.
                                                        Deze zal je vragen stellen van hoe het gebeurd is en zal daarbij ook de bijbehorende
                                                        controles uitvoeren. Als de specialist concludeert dat er een botbreuk is, word je
                                                        doorverwezen naar de afdeling radiologie. Hier worden röntgenfoto’s gemaakt.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Sluit</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge warning"><i><img width="25px" height="25px" src="{{asset('/img/apotheek.svg')}}"/></i></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Röntgenfoto</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>
                                                Het maken van een röntgenfoto gebeurt op de afdeling radiologie. Als je aan de beurt bent, wordt je verwezen naar een speciale kamer. Hierin begeleidt de radioloog jouw door het proces.
                                            </p>
                                            <br>
                                            <button type="button" class="btn btn-success test" data-toggle="modal" data-target="#foto">Lees meer</button>
                                        </div>
                                        <!-- Modal -->
                                        <div id="foto" class="modal fade" role="dialog">
                                            <div class="modal-dialog">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h3 class="modal-title">Röntgenfoto</h3>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Je wordt verzocht om op een tafel te gaan liggen waarbij er onder het gebroken been een plaat
                                                            wordt neergelegd. Als de foto wordt gemaakt dan dien je zo stil mogelijk te blijven liggen.
                                                            Dit bevorderd de kwaliteit van de foto, zodat de radioloog een beter oordeel kan vellen.
                                                            Na het maken van de röntgenfoto wordt je verzocht om weer plaats te nemen in de wachtkamer.
                                                            Tijdens het wachten wordt de röntgenfoto ontwikkeld en wordt de foto door de specialist
                                                            bekeken.
                                                            Nadat de specialist de röntgenfoto heeft bekeken, wordt je meegenomen om de resultaten te
                                                            bespreken. Uit dit gesprek komt voor hoe de botbreuk eruit ziet. Als de botbreuk stabiel
                                                            gehouden kan worden met gips, dan wordt je verwezen naar de gipsafdeling. Soms staat de
                                                            botbreuk verkeerd en moet deze goed gezet worden. Hierbij worden eerst de botten rechtgezet
                                                            met de hand (=reponeren), om daarna alsnog naar de gipsafdeling verwezen te worden.
                                                            Blijkt uit de foto dat de botbreuk instabiel is of dat er botten zijn verplaatst, dan komt
                                                            er eerst een operatie aan te pas.
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Sluit</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Gipsen</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>
                                                Je bent nu aangekomen bij de gipsafdeling en krijgt nu voor het eerst gips.
                                            </p>
                                            <br>
                                            <button type="button" class="btn btn-success test" data-toggle="modal" data-target="#gipsen">Lees meer</button>
                                        </div>
                                    </div>
                                    <!-- Modal -->
                                    <div id="gipsen" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h3 class="modal-title">Gipsen</h3>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Bij de meeste breuken wordt er een kalk gipsspalk gegeven die je 1 a 2 weken moet hebben. De
                                                        spalk zorgt ervoor dat het been ruimte heeft mocht hij gaan opzwellen. Bij een enkelfractuur
                                                        krijg je onderbeengips en bij een onderbeenfractuur krijg je bovenbeengips. Met dit gips mag
                                                        niet gelopen worden. Het gips proces ziet er als volgt uit:
                                                    <ul>
                                                        <li>Je krijgt eerst een kous aan.</li>
                                                        <li>Er worden watten rondom je been geplaatst beginnend bij de voet.</li>
                                                        <li>De spalk wordt aangebracht en egaal over de been verdeeld</li>
                                                    </ul>
                                                    <p>
                                                        Na 1 of 2 weken wordt het gips vervangen door circulair kunststof gips. Dit proces is
                                                        hetzelfde als de kalk gipsspalk alleen is de spalk vervangen door kunststof gips. Dit kan
                                                        loopgips zijn, afhankelijk van de fractuur en stabiliteit. Loopgips wordt niet geplaatst als
                                                        het gaat om een onderbeenfractuur. In de meeste gevallen zal je 6 weken dit gips moeten
                                                        dragen.
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Sluit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapse1"><i class="fa fa-clock-o fa-fw">
                                </i>
                                Tijdlijn
                                <i class="fa fa-caret-down"></i>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="timeline">
                                <li>
                                    <!--deze stap in de timeline is afgerond-->
                                    <div class="timeline-badge success"><i class="fa fa-check"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">De huisarts</h4>
                                            <p>
                                                <small class="text-muted"><i class="fa fa-clock-o"></i> ~ 1 tot 2 uur</small>
                                            </p>
                                        </div>
                                        <div class="timeline-body">
                                            <p>
                                                Je denkt dat je misschien iets gebroken hebt, maar je weet het nog niet zeker. Op dit moment is de beste optie om langs de huisarts te gaan.
                                            </p>
                                        </div>
                                        <div>
                                            <br>
                                            <button type="button" class="btn btn-success test" data-toggle="modal" data-target="#huisarts">Lees meer</button>
                                        </div>
                                    </div>
                                    <!-- pop-up 1 met extra informatie over de huisarts -->
                                    <div id="huisarts" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <!-- Kruis butten sluiten pop-up -->
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h3 class="modal-title">De huisarts</h3>
                                                </div>
                                                <div class="modal-body">
                                                    <p>De huisarts zal vragen wat er is gebeurd en zal je daarna controleren op een eventuele
                                                        botbreuk. Mocht de huisarts concluderen dat je een botbreuk hebt, dan wordt je doorverwezen
                                                        naar het ziekenhuis waar je een röntgenfoto krijgt bij de afdeling radiologie.
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <!-- sluit butten sluiten pop-up -->
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Sluit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge"><i><img width="25px" height="25px" src="{{asset('/img/huisarts.svg')}}"/></i></div>
                                    <!--<div class="timeline-badge warning"><i class="fa fa-credit-card"></i></div>-->
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">De eerste hulp</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>
                                                Deze stap is voor patiënten die niet eerst naar de huisarts zijn geweest, maar meteen naar de eerste hulp.
                                            </p>
                                            <br>
                                            <button type="button" class="btn btn-success test" data-toggle="modal" data-target="#eersteHulp">Lees meer</button>
                                        </div>
                                    </div>
                                    <!-- Modal -->
                                    <div id="eersteHulp" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h3 class="modal-title">De eerste hulp</h3>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Bij de eerste hulp meld jij je aan bij het loket en vervolgens neem je plaats in de
                                                        wachtkamer. Als je geroepen wordt ontmoet je een specialist op het gebied van botbreuken.
                                                        Deze zal je vragen stellen van hoe het gebeurd is en zal daarbij ook de bijbehorende
                                                        controles uitvoeren. Als de specialist concludeert dat er een botbreuk is, word je
                                                        doorverwezen naar de afdeling radiologie. Hier worden röntgenfoto’s gemaakt.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Sluit</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge warning"><i><img width="25px" height="25px" src="{{asset('/img/apotheek.svg')}}"/></i></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Röntgenfoto</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>
                                                Het maken van een röntgenfoto gebeurt op de afdeling radiologie. Als je aan de beurt bent, wordt je verwezen naar een speciale kamer. Hierin begeleidt de radioloog jouw door het proces.
                                            </p>
                                            <br>
                                            <button type="button" class="btn btn-success test" data-toggle="modal" data-target="#foto">Lees meer</button>
                                        </div>
                                        <!-- Modal -->
                                        <div id="foto" class="modal fade" role="dialog">
                                            <div class="modal-dialog">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h3 class="modal-title">Röntgenfoto</h3>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Je wordt verzocht om op een tafel te gaan liggen waarbij er onder het gebroken been een plaat
                                                            wordt neergelegd. Als de foto wordt gemaakt dan dien je zo stil mogelijk te blijven liggen.
                                                            Dit bevorderd de kwaliteit van de foto, zodat de radioloog een beter oordeel kan vellen.
                                                            Na het maken van de röntgenfoto wordt je verzocht om weer plaats te nemen in de wachtkamer.
                                                            Tijdens het wachten wordt de röntgenfoto ontwikkeld en wordt de foto door de specialist
                                                            bekeken.
                                                            Nadat de specialist de röntgenfoto heeft bekeken, wordt je meegenomen om de resultaten te
                                                            bespreken. Uit dit gesprek komt voor hoe de botbreuk eruit ziet. Als de botbreuk stabiel
                                                            gehouden kan worden met gips, dan wordt je verwezen naar de gipsafdeling. Soms staat de
                                                            botbreuk verkeerd en moet deze goed gezet worden. Hierbij worden eerst de botten rechtgezet
                                                            met de hand (=reponeren), om daarna alsnog naar de gipsafdeling verwezen te worden.
                                                            Blijkt uit de foto dat de botbreuk instabiel is of dat er botten zijn verplaatst, dan komt
                                                            er eerst een operatie aan te pas.
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Sluit</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Gipsen</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>
                                                Je bent nu aangekomen bij de gipsafdeling en krijgt nu voor het eerst gips.
                                            </p>
                                            <br>
                                            <button type="button" class="btn btn-success test" data-toggle="modal" data-target="#gipsen">Lees meer</button>
                                        </div>
                                    </div>
                                    <!-- Modal -->
                                    <div id="gipsen" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h3 class="modal-title">Gipsen</h3>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Bij de meeste breuken wordt er een kalk gipsspalk gegeven die je 1 a 2 weken moet hebben. De
                                                        spalk zorgt ervoor dat het been ruimte heeft mocht hij gaan opzwellen. Bij een enkelfractuur
                                                        krijg je onderbeengips en bij een onderbeenfractuur krijg je bovenbeengips. Met dit gips mag
                                                        niet gelopen worden. Het gips proces ziet er als volgt uit:
                                                    <ul>
                                                        <li>Je krijgt eerst een kous aan.</li>
                                                        <li>Er worden watten rondom je been geplaatst beginnend bij de voet.</li>
                                                        <li>De spalk wordt aangebracht en egaal over de been verdeeld</li>
                                                    </ul>
                                                    <p>
                                                        Na 1 of 2 weken wordt het gips vervangen door circulair kunststof gips. Dit proces is
                                                        hetzelfde als de kalk gipsspalk alleen is de spalk vervangen door kunststof gips. Dit kan
                                                        loopgips zijn, afhankelijk van de fractuur en stabiliteit. Loopgips wordt niet geplaatst als
                                                        het gaat om een onderbeenfractuur. In de meeste gevallen zal je 6 weken dit gips moeten
                                                        dragen.
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Sluit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 no-padding">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-star"></i>&nbsp;Uitgevoerd onderzoek
                    </div>
                    <div class="panel-body">
                        @foreach($consults as $consult)
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h2 class="panel-title">{{$consult->type}}</h2>
                                </div>
                                <div class="panel-body">
                                    <p>
                                        <small class="text-muted">
                                            <i class="fa fa-clock-o"></i>&nbsp;{{$consult->date}}
                                        </small>
                                    </p>
                                    <p>{{$consult->description}}</p>
                                    <br>
                                    <ul class="list-inline">
                                        <li>
                                        <a href="{{$consult->id}}/edit" class="btn btn-info">Wijzigen</a>
                                        </li>
                                        <li>
                                            <form class="form-inline" method="POST" action="/docter/{{$docter->id}}/patients/{{$patient->id}}/consults/{{$consult->id}}">
                                        {{method_field('DELETE')}}
                                        {{csrf_field()}}
                                        <button type="submit" class="btn btn-danger">verwijder</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footerscripts')

    <!-- jQuery -->
    <script src="{{asset('/vendor/jquery/jquery.min.js')}}"></script>

    <!-- Full Google Calendar - Calendar -->
    <script type="text/javascript" src="{{asset('/js/fullcalendar.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/fullcalendar.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/calendar-custom.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/gcal.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/main.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('/vendor/metisMenu/metisMenu.min.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{asset('/js/sb-admin-2.js')}}"></script>

@endsection