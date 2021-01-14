<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>

    <style>

        .azul{

         color:blue;
         font-size: 20px;
         font-weight: bold;
         margin-bottom: 10px;

        }

    </style>

</head>
<body>

  <h1 class="azul">Welcome Email</h1>
  <p><strong>Hola</strong> {{$contacto['name']}}</p>
  <p><strong>Correo:</strong> {{$contacto['email']}}</p>
  <p><strong>Mensaje:</strong> {{$contacto['mensaje']}}</p>
    
</body>
</html>


  
  

