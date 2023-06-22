@extends('layouts.app')



<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>blog</title>
    <style>
       
        /* body {
            background-color: #8EC5FC;
            background-image: linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);
            overflow-x: hidden;


        } */
        .Cap{
            color: rgb(98, 76, 228);
            font-weight: bold;
            font-family: "Gill Sans", sans-serif;
        }

      
        
        .rectangle {
           
            width: 300px;
            height: 400px;
            background-color: #e0e0e0;
            border-radius: 10px;
            padding:15px;
            
           
        }


        .all{
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }
    </style>
</head>
@section('content')

<body>
  

    <div class="all">

        <div class="rectangle">
            <p class="Cap">-nom</p>
            <p>Elham amaadour</p>
            <p class="Cap">-Adresse</p>
            <p>HAY ASSAKA AGADIR</p>
            <p class="Cap">-Date de naissance</p>
            <p>13/03/2003</p>
        </div>
        <div class="rectangle">
            <p class="Cap">-Formation</p>
            <p>+Baccalauréat en science physique : Lycée Mohamed Derfoufi </p>
            <p>+cycle préparatoire
                école polytechnique -Universiapolis </p>
            <p>+génie informatique</p>
        </div>
        <div class="rectangle">
            <p class="Cap">-LANGUES</p>
            <p>+arabe : Langue maternelle </p>
            <p>+Français : Courant</p>
            <p>+ Anglais : Courant</p>
        </div>


    </div>
    

    


    

     

</body>

</html>

@endsection
