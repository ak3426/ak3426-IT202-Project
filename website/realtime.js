function getRealTime() {
//Arghavan  Katebi-12/03/2025-IT202:Internet Applications-Section003-Phase 5 Assignment/ak3426@njit.edu//
 // retrieve the DOM objects to place the content
 var domcandletypes = document.getElementById("candletypecount");

 var domcandles = document.getElementById("candlecount");

 var domwholepricetotal = document.getElementById("wholepricetotal");

 var domlistpricetotal = document.getElementById("listpricetotal");

 // send the GET request to realtime.php to retrieve the data using XMLHttpRequest

 var request = new XMLHttpRequest();

 request.open("GET", "realtime.php", true);

 request.onreadystatechange = function() {
     if (request.readyState == 4 && request.status == 200) {

         // parse the XML document to get each data element

         var xmldoc = request.responseXML;

         var xmlcandletypes = xmldoc.getElementsByTagName("candletypes")[0];

         var candletypes = xmlcandletypes.childNodes[0].nodeValue;

         var xmlcandles = xmldoc.getElementsByTagName("candles")[0];

         var candles = xmlcandles.childNodes[0].nodeValue;

         var xmlwholepricetotal = xmldoc.getElementsByTagName("wholepricetotal")[0];

         var wholepricetotal = xmlwholepricetotal.childNodes[0].nodeValue;

         var xmllistpricetotal = xmldoc.getElementsByTagName("listpricetotal")[0];

         var listpricetotal = xmllistpricetotal.childNodes[0].nodeValue;

         domcandletypes.innerHTML = candletypes;

         domcandles.innerHTML = candles;

         domwholepricetotal.innerHTML = wholepricetotal;

         domlistpricetotal.innerHTML = listpricetotal;

     }

 };

 request.send();

}