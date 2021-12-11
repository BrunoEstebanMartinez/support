<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel = "stylesheet" type = "text/css" href = "{{asset('global.css')}}">
    <title>Document</title>
</head>
<body>
    <div class = "form-modify">
        <p class = "tittle-form">L A T E: SUPPORT</p>
    
        <form method = "post" class="formed" action=" {{ route('phone.update', $phone->id_phone) }}">
       {{ csrf_field() }} 
       <input type="hidden" name = "_method" value = "PATCH">
        <input type="text" name="enterprise" value = "{{$phone->enterprise}}" placeholder ="Empresa" class = "forms-this-1" required>
        <input type="text" name="name" value = "{{$phone->name}}" placeholder ="Nombre" class = "forms-this-1" required>
        <input type="text" name="model" value = "{{$phone->model}}" placeholder ="Modelo" class = "forms-this-1" required>
        <input type="text" name="failure" value = "{{$phone->failure}}" placeholder ="Fallo" class = "forms-this-1" required>
        <input type="text" name="cause" value = "{{$phone->cause}}" placeholder ="Causa" class = "forms-this-1" required>
        <input type="text" name="solution" value = "{{$phone->solution}}" placeholder ="Solución" class = "forms-this-1" required>   
        <input type="number" name="workforce" value = "{{$phone->workforce}}" placeholder ="Mano de obra" class = "forms-this-1" required>
        <input type="number" name="total" value = "{{$phone->total}}" placeholder ="Total" class = "forms-this-1" required>
       <input type="submit" value="Modificar" class = "forms-this-1" required>

    </form>
    </div>
    <div class="form-present-1">
    <lottie-player
   
    class = "anim-1" 
    src="https://assets8.lottiefiles.com/packages/lf20_ror7n0mv.json"  
    background="transparent"  
    speed="1"  
    style="width: 450px; height: 450px;"    
    autoplay>
</lottie-player>
    </div>
</body>
</html>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>