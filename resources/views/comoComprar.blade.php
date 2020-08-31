@extends('layouts.estruc')
@section('titulo', 'Como Comprar')


@section('link')
<style>
    #precio1{
        display: none;
    }
</style>
@endsection
@section('contenido')
<div class="container text-center bg-light" id="contenido">
<br><br><br><br>

<button onclick="ejecutaAlerta()">muestra mensaje</button>

 

<br><br>

</div>

@endsection
@section('script')


<script type="text/javascript">


   
function ejecutaAlerta() 
{
    //toastr.success('Have fun storming the castle!', 'Miracle Max Says')
    
    toastr.success('We do have the Kapua suite available.', 'Turtle Bay Resort', {timeOut: 2000});
    //toastr.remove();
    toastr.options.preventDuplicates = true;
    toastr.options.showEasing = 'swing';
}
</script>
@endsection