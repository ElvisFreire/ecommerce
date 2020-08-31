<button id="boton" class="btn btn-primary" onClick=" brritem(
                        {{$valor['id']}}
                    )"><i class="fa fa-minus-circle" > </i></button>


    @extends('layouts.estruc')
@section('titulo', 'productos')


@section('link')
@endsection
@section('contenido')
<div class="container  bg-light" id="contenido">

    <table >
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Subtotal</th>
            <th>Eliminar</th>
        </tr>
    @if($lista['item'] != NULL)
    @foreach($lista['item'] as $valor)
        <tr>
            <td><p>{{$valor['nombre']}}</p> </td>
            <td><p>{{$valor['precio']}}</p></td>
            <td><p>{{$valor['cantidad']}}</p></td>
            <td><p>{{$valor['subtotal']}}</p></td>
            <td><button id="boton" class="btn btn-primary" onClick=" brritem(
                {{$valor['id']}}
            )"><i class="fas fa-times"></i></button>
            </td>
        </tr>
    @endforeach
    @endif
    </table>
</div>

@endsection
@section('script')

@endsection




                html += '<td><p>' + data['item'][i]['precio'] + '</p></td>';
                html += '<td><p>' + data['item'][i]['cantidad'] + '</p></td>';
                html += '<td><p>' + data['item'][i]['subtotal'] + '</p></td>';
                html += "<td><button id='boton' class='btn btn-primary' onClick=";
                html += "'brritem(" + data['item'][i]['id'] + "')>";
                html += "<i class = 'fas fa-times' > </i></button>";
                html += '</td></tr>';