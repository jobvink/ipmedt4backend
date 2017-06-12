function equalHeight(group) {    
    var tallest = 0;    
    group.each(function() {       
        var thisHeight = $(this).height();       
        if(thisHeight > tallest) {          
            tallest = thisHeight;       
        }    
    });    
    group.each(function() { $(this).height(tallest); });
} 

$(document).ready(function() {   
    equalHeight($(".thumbnail")); 


    
    
    
  var table = $('#mydata').DataTable( {"language":
                {
                    "sEmptyTable":   	"Er zijn geen articlen om weer te geven",
                    "sInfo":         	"Artikelen _START_ tot _END_ van _TOTAL_.",
                    "sInfoEmpty":    	"0 van 0 tot 0 regels",
                    "sInfoFiltered": 	"(gefilterd tot _MAX_ regels)",
                    "sInfoPostFix":  	"",
                    "sInfoThousands":  	".",
                    "sLengthMenu":   	"_MENU_ regels",
                    "sLoadingRecords": 	"Wordt geladen...",
                    "sProcessing":   	"Een moment geduld...",
                    "sFirst":    		"Eerste",
                    "sPrevious": 		"Vorige",
                    "sNext":     		"Volgende",
                    "sLast":     		"Laatste",
                    "sSearch":       	"Zoeken",
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


                },

               

            });
 
// #myInput is a <input type="text"> element
$('#myInput').on( 'keyup', function () {
    table.search( this.value ).draw();
} );
});