

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <form method = "post" action="{{route('store')}}" >
        
        {{ csrf_field() }} 
        
        <input type="text" name="enterprise" value = "" placeholder ="Empresa" class = "forms-this-1" required>
        <input type="text" name="name" value = "" placeholder ="Nombre" class = "forms-this-1" required>
        <input type="text" name="model" value = "" placeholder ="Modelo" class = "forms-this-1" required>
        <input type="text" name="failure" value = "" placeholder ="Fallo" class = "forms-this-1" required>
        <input type="text" name="cause" value = "" placeholder ="Causa" class = "forms-this-1" required>
        <input type="text" name="solution" value = "" placeholder ="Solución" class = "forms-this-1" required>   
        <input type="number" name="workforce" value = "" placeholder ="Mano de obra" class = "forms-this-1" required>
        <input type="number" name="total" value = "" placeholder ="Total" class = "forms-this-1" required>   
        <input type="submit" value="Crear" name = "" class = "forms-this-1"> 
</form>    
    </body>
</html>