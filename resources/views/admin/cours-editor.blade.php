@extends('../layouts/admin')


@section('admin')



<form id="form-data" method="post">

  <textarea class="tinymce" id="texteditor" name="text" value="{{  old('text') }}"></textarea>
  <input type="submit" class="btn btn-primary"value="View Data">

</form>

{{-- prendre cette portion a partir du div --}}

<div class="card" >
  <div class="card-body">
    <div id="data-container">
    </div>  
  </div>
</div>

{{-- pFin de la portion --}}

<script>
  $(document).ready(function(){

$("#form-data").submit(function(e){

  var content = tinymce.get("texteditor").getContent();
  var a= "Recuperer ces valeurs pour insertion : ";


 

$("#data-container").html(content);

  return false;

});   
}); 



  
 
</script>
      
@endsection

  

