@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
  <title>Laravel Ajax Multiple Image Upload with Preview Example</title>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.form.min.js"></script>
  <style type="text/css">
    input[type=file]{
      display: inline;
    }

    #image_preview{
      border: 1px solid black;
      padding: 10px;
    }

    #image_preview img{
      width: 200px;
      padding: 5px;
    }
  </style>
</head>
<body>
<div class="container">
  <h1>Laravel Ajax Multiple Image Upload with Preview Example</h1>
  <form action="{{ route('images.upload') }}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <input type="file" id="uploadFile" name="uploadFile[]"/>
      <input type="submit" class="btn btn-success" name='submitImage' value="Upload Image"/>
  </form>
  <br/>
  <div id="image_preview"></div>
</div>
</body>
<script type="text/javascript">
  $("#uploadFile").change(function(){
     $('#image_preview').html("");
     var total_file=document.getElementById("uploadFile").files.length;
     for(var i=0;i<total_file;i++)
     {
      $('#image_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"'>");
     }
  });
  $('form').ajaxForm(function() 
   {
    alert("Uploaded SuccessFully");
   }); 
</script>

</html>
@stop