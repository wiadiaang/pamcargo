function ada(){
        	console.log("a");
        	var divToPrint = document.getElementById('divToPrint');
				       var popupWin = window.open('', '_blank', 'width=2048,height=1000');
				       popupWin.document.open();
				       popupWin.document.title = "";
				       popupWin.document.write('<html><style media="print">'
       +'@page' 
    +'{'
        +'size: auto;'  
        +'margin: 2mm;'
    +'}'   
     +'</style><body>' + divToPrint.innerHTML + '</html>');
				       popupWin.document.close();  
        }

$("#schdule").addClass('current-menu-item');