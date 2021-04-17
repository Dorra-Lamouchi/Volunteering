@extends('layouts.app')


@section('content')
<div>  

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <title>AboutUs</title>
     </head>
          <body>
          <div >

          <img  src="images/volunteer.jpg" style="margin:0;padding:0;position: relative;height: 80%;width: 100%;" />
   
              
                 <br><br><br>
                 <br><br><br>


           <div class="row">
               <div class="col-lg-8" style="padding-right:50px; padding-left:100px;">
               
                  <div style="background-color:black;">
                  <p style="color: white;"><strong>Qui sommes nous ?</strong><br>
                  Nous sommes une équipe d'étudiants ingénieurs de 
                  l'Institut supérieur des sciences appliquées de Sousse motivés, engagés qui veulent faire 
                  un changement positif dans leur entourage et croient que s'engager dans des activités  
                  du développement communautaire aide les citoyens à démontrer leur 
                  responsabilité sociale et d'améliorer eux-mêmes grâce à la participation, le leadership et l'action. 
                  </p>
                  </div>
               </div>

                    <div class="col">
                     <img  src="images/we.jpg" style="margin:0;padding:0;position: relative;height: 60%;width: 100%;" />
                    </div>

                </div>
          </div>          
    </body>
</html>

@endsection
</div>