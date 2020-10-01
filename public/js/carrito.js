window.onload = function() {
    verlista();
}

toastr.options = {
    "closeButton": true,
    "preventDuplicates": true,
    "positionClass": "toast-bottom-right",
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
    cantidad = Math.trunc(cantidad);
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

            html = '<table role=table>';
            html += '<tr role=row><th>Producto</th><th>Precio</th><th>Cantidad</th><th >Subtotal</th><th>Eliminar</th></tr><tbody role="rowgroup">';
            for (let i in data['item']) {
                html += '<tr role=row>';
                html += '<td role=cell><p>' + data['item'][i]['nombre'] + '</p> </td>';
                html += '<td role=cell> <p id=precio-tabla' + data['item'][i]['id'] + '>$ ' + data['item'][i]['precio'] + '</p> </td>';
                html += '<td role=cell>';
                html += "<button id='disminuir'  value='disminuir' onclick='contaDor(" + data['item'][i]['id'] + ", this.value)'><i class='fas fa-minus'></i></button>";
                html += "<input class='input-cantidad' onblur='contaDor(" + data['item'][i]['id'] + ",this.id)' id='cant" + data['item'][i]['id'] + "' type=text  value=" + data['item'][i]['cantidad'] + "></input>"
                html += "<button  id='aumentar' value='aumentar' onclick='contaDor(" + data['item'][i]['id'] + ", this.value)'><i class='fas fa-plus'></i></button>";
                html += '</td>';
                html += '<td role=cell> <p id=sub-tabla' + data['item'][i]['id'] + '>$ ' + Number.parseFloat(data['item'][i]['subtotal']).toFixed(2) + '</p> </td>';
                html += "<td role=cell><button id='boton' class='btn btn-primary' onClick=brritem(";
                html += data['item'][i]['id'] + ")><i class='fas fa-times'></i></button></td>";
                html += '</tr>';


            }
            if (data['item'] != "") {
                recargo = 1.50; //AQUI ESTA VALOR RECARGO EDITAR MAS TARDE
                vFinal = Number.parseFloat(data['total']) + parseFloat(recargo);
                html += "<tr role=row><td colspan='3' id='tot' role=cell>Total</td><td role=cell id='total-tabla'>$ ";
                html += Number.parseFloat(data['total']).toFixed(2) + "</td><td role=cell id='tot'></td></tr>";
                html += "<tr role=row><td colspan='3' id='tot' role=cell>Recargo</td><td role=cell id='recargo-tabla'>$ ";
                html += Number.parseFloat(recargo).toFixed(2) + "</td><td role=cell id='tot'></td></tr>";
                html += "<tr role=row><td colspan='3' id='tot' role=cell>Valor Final</td><td role=cell id='vfinal-tabla'>$ ";
                html += Number.parseFloat(vFinal).toFixed(2) + "</td><td role=cell id='tot'></td></tr>";
            }


            html += '</tbody></table> <br>';


            if (data['item'] != "") {
                html += "<div class='contenedor-modal'>"
                html += "<button type='button' class='btn btn-dark' data-toggle='modal' data-target='#miModal'>Realizar Pago</button> <br> <br>"

            } else
                html += "<br><br><br><h3 style='text-align: center;font-family:Script MT'>Lista vacia</h3>";

            $('#tablaLista').html(html);


        }
    })
}


function contaDor(id, name) {
    var regex = /\d+/g;

    num = $("#cant" + id).val();
    precio = document.getElementById("precio-tabla" + id).innerHTML;
    precio = precio.replace("$ ", "");

    recargo = document.getElementById("recargo-tabla").innerHTML;
    recargo = recargo.replace("$ ", "");
    num = Math.trunc(num);
    if (name == 'disminuir')
        num--;

    if (name == 'aumentar')
        num++;
    if (isNaN(num))
        num = 1;
    else
    if (num < 1)
        num = 1;
    else
    if (num > 29)
        num = 30;
    $("#cant" + id).val(num);
    precio = num * precio;
    $.ajax({
        url: 'aggitem?id=' + id + '&cant=' + num,
        success: function(data) {
            vFinal = parseFloat(recargo) + parseFloat(data);
            document.getElementById('car-precio').innerHTML = "$ " + Number.parseFloat(data).toFixed(2);
            document.getElementById('sub-tabla' + id).innerHTML = "$ " + Number.parseFloat(precio).toFixed(2);
            document.getElementById('total-tabla').innerHTML = "$ " + Number.parseFloat(data).toFixed(2);
            document.getElementById('vfinal-tabla').innerHTML = "$ " + Number.parseFloat(vFinal).toFixed(2);

        }
    })

}