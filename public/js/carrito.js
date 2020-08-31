toastr.options = {
    "closeButton": true,
    "preventDuplicates": true,
    "positionClass": "toast-top-right",
    "timeOut": 3000,
    "showDuration": 100
}

function name(dato) {
    toastr.success(dato);

}


function aggitem(id) {
    var cantidad = document.getElementsByName("contador" + id)[0].value;
    document.getElementById("cont" + id).style.borderBottom = 'rgb(29 181 2) 8px solid';
    cantidad = parseInt(cantidad, 10);
    if (isNaN(cantidad)) {
        document.getElementsByName("contador" + id)[0].value = 1;
        cantidad = 1;
    }

    if (cantidad > 30) {
        document.getElementsByName("contador" + id)[0].value = 30;
        cantidad = 30;
    }

    if (cantidad < 1) {
        document.getElementsByName("contador" + id)[0].value = 1;
        cantidad = 1;
    }


    $.ajax({
        url: 'aggitem?id=' + id + '&cant=' + cantidad,
        success: function(data) {
            document.getElementById('car-precio').innerHTML = Number.parseFloat(data).toFixed(2) + ' $';
            name("Se agrego su producto");
        }
    })

}


function brritem(id) {
    $.ajax({
        url: 'brritem?id=' + id,
        success: function(data) {
            document.getElementById('car-precio').innerHTML = Number.parseFloat(data).toFixed(2) + ' $';
            name("Se elimino un producto");
            verlista();
        }
    })
}

function verlista() {
    $.ajax({
        url: 'verlista',
        success: function(data) {

            html = '<table>';
            html += '<tr><th>Producto</th><th>Precio</th><th>Cantidad</th><th>Subtotal</th><th>Eliminar</th></tr>';
            for (let i in data['item']) {
                html += '<tr>';
                html += '<td> <p>' + data['item'][i]['nombre'] + '</p> </td>';
                html += '<td> <p>$ ' + data['item'][i]['precio'] + '</p> </td>';
                html += '<td> <p>' + data['item'][i]['cantidad'] + '</p> </td>';
                html += '<td> <p>$ ' + Number.parseFloat(data['item'][i]['subtotal']).toFixed(2) + '</p> </td>';
                html += "<td><button id='boton' class='btn btn-primary' onClick=brritem(";
                html += data['item'][i]['id'] + ")><i class='fas fa-times'></i></button></td>";
                html += '</tr>';
            }
            if (data['item'] != "") {
                html += "<tr ><td colspan='3' id='tot'>Total</td><td id='tot'>$ ";
                html += Number.parseFloat(data['total']).toFixed(2) + "</td><td id='tot'></td></tr>";
            }


            html += '</table>';
            if (data['item'] != "") {
                html += "<br><br><br><h4 style='text-align: left'> total: " + Number.parseFloat(data['total']).toFixed(2) + "</h4>";
                html += "<h4 style='text-align: left'> valor recargo: " + Number.parseFloat(data['total']).toFixed(2) + "</h4>";
                html += "<h4 style='text-align: left'> valor final: " + Number.parseFloat(data['total']).toFixed(2) + "</h4>";
            } else
                html += "<br><br><br><h3 style='text-align: center;font-family:Script MT'>Lista vacia</h3>";

            $('#tablaLista').html(html);

        }
    })


}
window.onload = function() {
    verlista();
}