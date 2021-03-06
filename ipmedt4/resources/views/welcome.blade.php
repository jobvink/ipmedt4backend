@extends('layouts.welcomeapp')

@section('content')

        <!--paginainfo-->
        <div class="row info">
            <div class="col-lg-4 col-lg-offset-4">
                <img src="../../../img/life-technology-logo.png" class="img-responsive logo" alt="Life logo" height="auto" width="275">
            </div>
        </div>
        <div class="row info">
            <div class="col-md-4 col-xs-10 col-md-offset-4 col-xs-offset-1">
                <p>Welkom op het homescherm van Life Technology!
                    Op deze website vindt u meer informatie over het proces wat u meemaakt bij een gebroken been.
                    Het hoofdscherm toont een tijdlijn met alle stappen die u doorloop in het proces.
                    U kunt inloggen door middel van DigiD, die ervoor zorgt dat uw gegevens veilig zijn en uw privacy wordt gewaarborgd.
                    Na het inloggen ziet u uw persoonlijke tijdlijn waarin alle stappen plus uw persoonlijke afspraken.</p>
            </div>
        </div>

        <!--/pageinfo-->
        <!--timeline-->
        <div  class="row" style="margin-bottom: 10vh">
            <div class="col-lg-8 col-lg-offset-2">
                <ul class="timeline hometimeline">

                    <li class="begin_tijdlijn">
                        <div class="timeline-badge begin_timeline"><i><img class="Begin_icon" width="50px" height="50px" src="../../../img/broken-bone.png"/></i></div>
                    </li>


                    <li>
                        <!--deze stap in de timeline is afgerond-->
                        <div class="timeline-badge warning"><i><img width="25px" height="25px" src="../../../img/apotheek.svg"/></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">De huisarts</h4>
                                <p>
                                    <small class="text-muted">Duur: ongeveer 1 tot 2 uur</small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>
                                    U denkt dat je misschien iets gebroken hebt, maar u weet het nog niet zeker. Op dit moment is de beste optie om langs de huisarts te gaan.
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
                                        <p>De huisarts zal vragen wat er is gebeurd en zal u daarna controleren op een eventuele botbreuk.
                                            Mocht de huisarts concluderen dat u een botbreuk heeft, dan wordt u doorverwezen naar het ziekenhuis waar u een röntgenfoto krijgt bij de afdeling radiologie.
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
                        <div class="timeline-badge"><i><img width="25px" height="25px" src="../../../img/huisarts.svg"/></i></div>
                        <!--<div class="timeline-badge warning"><i class="fa fa-credit-card"></i></div>-->
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">De eerste hulp</h4>
                                <p>
                                    <small class="text-muted">Duur: ongeveer 1 tot 2 uur</small>
                                </p>
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
                                        <p>Bij de eerste hulp meldt u uw aan bij het loket en vervolgens neemt u plaats in de wachtkamer.
                                            Als u geroepen wordt ontmoet u een specialist op het gebied van botbreuken.
                                            Deze zal u vragen stellen hoe het gebeurd is en zal daarbij ook de bijbehorende controles uitvoeren.
                                            Als de specialist concludeert dat er een botbreuk is, wordt u doorverwezen naar de afdeling radiologie.
                                            Hier worden röntgenfoto’s gemaakt.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Sluit</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge warning"><i><img width="25px" height="25px" src="../../../img/apotheek.svg"/></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">Röntgenfoto</h4>
                                <p>
                                    <small class="text-muted">Duur: ongeveer 1 tot 2 uur</small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>
                                    Het maken van een röntgenfoto gebeurt op de afdeling radiologie.
                                    Als u aan de beurt bent, wordt u doorverwezen naar een speciale kamer. Hierin begeleidt de radioloog u door het proces.
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
                                            <p>U wordt verzocht om op een tafel te gaan liggen waarbij er onder het gebroken been een plaat wordt neergelegd.
                                                Als de foto wordt gemaakt dan dient u zo stil mogelijk te blijven liggen.
                                                Dit bevorderd de kwaliteit van de foto, zodat de radioloog een beter oordeel kan vellen.
                                                Na het maken van de röntgenfoto wordt u verzocht om weer plaats te nemen in de wachtkamer.
                                                Tijdens het wachten wordt de röntgenfoto ontwikkeld en wordt de foto door de specialist bekeken.
                                                Nadat de specialist de röntgenfoto heeft bekeken, wordt u meegenomen om de resultaten te bespreken.
                                                Uit dit gesprek komt voor hoe de botbreuk eruit ziet. Als de botbreuk stabiel gehouden kan worden met gips,
                                                dan wordt u verwezen naar de gipsafdeling. Soms staat de botbreuk verkeerd en moet deze goed gezet worden.
                                                Hierbij worden eerst de botten rechtgezet met de hand (=reponeren),
                                                om daarna alsnog naar de gipsafdeling verwezen te worden. Blijkt uit de foto dat de botbreuk instabiel is of dat er botten zijn verplaatst,
                                                dan komt er eerst een operatie aan te pas.
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
                        <div class="timeline-badge"><i><img width="25px" height="25px" src="../../../img/huisarts.svg"/></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">Gipsen</h4>
                                <p>
                                    <small class="text-muted">Duur: ongeveer 1 tot 2 uur</small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>
                                    U bent nu aangekomen bij de gipsafdeling en krijgt nu voor het eerst gips.
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
                                        <p>Bij de meeste breuken wordt er een kalk gipsspalk gegeven die u 1 a 2 weken moet hebben.
                                            De spalk zorgt ervoor dat het been ruimte heeft mocht hij gaan opzwellen.
                                            Bij een enkelfractuur krijgt u onderbeengips en bij een onderbeenfractuur krijgt u bovenbeengips.
                                            Met dit gips mag niet gelopen worden. Het gips proces ziet er als volgt uit:</p>

                                        <ul>
                                            <li>U krijgt eerst een kous aan;</li>
                                            <li>Er worden watten rondom uw been geplaatst beginnend bij de voet;</li>
                                            <li>De spalk wordt aangebracht en egaal over de been verdeeld.</li>
                                        </ul><br />

                                        <p>
                                            Na 1 of 2 weken wordt het gips vervangen door circulair kunststof gips.
                                            Dit proces is hetzelfde als de kalk gipsspalk alleen is de spalk vervangen door kunststof gips.
                                            Dit kan loopgips zijn, afhankelijk van de fractuur en stabiliteit.
                                            Loopgips wordt niet geplaatst als het gaat om een onderbeenfractuur.
                                            In de meeste gevallen wordt dit gips 6 weken gedragen.
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Sluit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Einde tijdlijn -->
                    <li class="einde_tijdlijn">
                        <div class="timeline-badge einde_timeline"><i><img class="Begin_icon" width="50px" height="50px" src="../../../img/bone.png"/></i></div>
                    </li>

                </ul>
            </div>
        </div>
        <!--/timeline-->
        <div class="row info" id="site-info">
            <div class="col-lg-2 col-lg-offset-2">
                <div class="card">
                    <img class="card-img-top info-img" src="../../../img/Red_cross.png" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title info-titel">De website</h4>
                        <p class="card-text info-text">Op deze website is er meer informatie te vinden over het proces van het breken van je been.
                            Ook kunt u uw afspraken en de extra informatie die u krijgt bijhouden en makkelijk op een tijdlijn zien.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-lg-offset-1">
                <div class="card">
                    <img class="card-img-top info-img" src="../../../img/patient.png" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title info-titel">Voor de patiënt</h4>
                        <p class="card-text info-text">U breekt uw been en wat dan? Op deze website kunt u uw eigen informatie vinden over uw eigen proces.
                            Na het inloggen (met DigID) kunt u al uw afspraken en toegevoegde consulten inzien.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-lg-offset-1">
                <div class="card">
                    <img class="card-img-top info-img" src="../../../img/dokter.png" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title info-titel">Voor de dokter</h4>
                        <p class="card-text info-text">Als dokter kunt u de afspraken van de patiënt bijhouden en makkelijk inzien.
                            Het invoeren van de afspraken en consulten voor de patiënt is zo makkelijk mogelijk gemaakt en kan voltooid worden binnen een minuut.</p>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('footerscripts')
    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

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