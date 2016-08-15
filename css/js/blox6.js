$( document ).ready(function() {
    $(".pais").change(function () {
        alert("The text has been changed.");
    });
    
    $( ".elegir" ).click(function () {
    
     $('.elegir').closest('tr').next().slideToggle('panel');
       
    });
     event.preventDefault();

    
});

function showCity(str) {
    console.log($(str).attr('data-pais'));

    console.log(str);
    
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","dblistaciudadesajax.php?q="+ str,true);
        xmlhttp.send();
    }
}


function showCine(str) {
    if (str == "") {
        document.getElementById("txtCine").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtCine").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","dblistacinesajax.php?q="+ str,true);
        xmlhttp.send();
    }
}

function showTandas(str) {
    if (str == "") {
        document.getElementById("txtTandas").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtTandas").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","dblistatandasajax.php?q="+ str,true);
        xmlhttp.send();
    }
}
function showTotal() {
  
    var tipoBoleto = +$("#tipo").val();
    var cantidad = +$("#cantidad").val();
    var precioBoleto = 0; 
    var total;
    if ( tipoBoleto == 1) {
       precioBoleto = 9;     
   } 
    if ( tipoBoleto == 0) {
       precioBoleto = 7;     
   } 
    
   total = precioBoleto * cantidad; 
    $( "#txtTotal" ).val(total);
     
}


