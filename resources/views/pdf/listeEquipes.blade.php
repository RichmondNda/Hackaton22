<!DOCTYPE html>
<html>
<head>
    <title>Liste des Equipes Inscrites</title>

    <style>
        .styled-table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            font-family: sans-serif;
            
            box-shadow: 0 0 20px rgba(59, 57, 57, 0.15);
        }

        .styled-table thead tr {
            background-color: black;
            color: #ffffff;
            text-align: left;
        }

        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
            text-align:left;
            
        }

        .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #0f0f0f;
        }

        .styled-table tbody tr.active-row {
            font-weight: bold;
            color: #031612;
        }

        /*
        les cadres oh
        */

        .business-3{
            padding: 30px 0px;
            display: table;   
        }

        .card{
            
            width: 31%; 
            
            display: inline-block;
            border-radius: 10px;
            bo
            margin: 0px 1%;
        }

        .card-div{
            padding: 10px;
        }
        .card-div-2{
            text-align: center;
        }
        .card-div-1{
            text-align: right;
        }


        /**/

        table, td{
            border: 1px solid black;
        }
        td{
            padding: 10px 20px;
        }
        
        .table{
            width: 100%;
            border-collapse:collapse;

        }
        
    </style>

</head>
<body>

    <div style="
            display:flex;
 
            width:100%;
            ">
        
        <div style=" width:48%; display:inline-block;" >
           
            <img alt="Logo de l'entreprise" src="{{asset('images/app/logoC2E-PhotoRoom.png')}}" style="height: 80px; width:130px" />
        
        </div>

        <div style=" width:48%;text-align:right; display:inline-block;" >
           
            <img alt="Logo de l'entreprise" src="{{asset('images/app/logoHackathon-PhotoRoom.png')}}" style="height: 100px; width:130px" />
        
        </div>


    </div>

    <div style="margin:30px 0px; text-align:center; width:100% ;">
       <span style="font-size:20px; font-weight:bold"> Liste des Equipes du {{$niveau}}  </span> 
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Nom de l'equipe</th>
                
                <th >participants</th>
            </tr>
        </thead>
       
        @foreach ($equipes as $equipe)
            <tr>
                <td>
                    {{$equipe->nom }}
                </td>
                <td>
                    @foreach ($equipe->participants as $participant )
                        <p style="margin: 0; text-transform: capitalize">
                            <span style="font-weight: bold;">
                                {{$participant->etudiant->matricule }}
                            </span>
                             |
                             {{$participant->etudiant->nom}}  {{$participant->etudiant->prenom}}
                        </p>
                    @endforeach
                </td>
            </tr>
        @endforeach

   </table>

    {{-- <div style="font-weight: bold; font-size:18px; margin:20px">
        Détails sur le contiditons d'acquisition
    </div>

    
    <table class="styled-table" style="width: 100%">
        <thead>
            <tr>
                <th>Description</th>
                
                <th style=" text-align:right;">Prix</th>
            </tr>
        </thead>
        <tbody>
          
            <tr>
                <td>
                    Dépot de garantie
                </td>
                
                <td style=" text-align:right;">
                     FCFA
                </td>
            </tr>
            
            

            <tr class="active-row">
                <td>
                    Mois d'avance 
                </td>
                
                <td style=" text-align:right;">
                    FCFA
                </td>
            </tr>

            <tr >
                <td>
                    Frais de dossier
                </td>
                
                <td  style=" text-align:right;">
                     FCFA
                </td>
            </tr>

            <tr class="active-row">
                <td>
                    Frais d'agence
                </td>
                
                <td  style=" text-align:right;">
                    FCFA
                </td>
            </tr>
            <tr >
                <td>
                    Droit d'enregistrement
                </td>
                
                <td  style=" text-align:right;">
                    FCFA
                </td>
            </tr>
            
                
            <!-- and so on... -->
        </tbody>
    </table>

    <div style="width: 40%; float: right">
        <table style="width: 100%">
            <tr style="padding: 10px;background: black; color:white; font-weight:bold; font-size:16px;">
                <td>
                    total HT
                </td>
                <td>
                    
                </td>
            </tr>
            <tr style="padding: 10px; font-weight:bold; font-size:16px;">
                <td>
                    TVA
                </td>
                <td>
                    %
                </td>
            </tr>
            <tr style="padding: 10px;background: black; color:white; font-weight:bold; font-size:16px;">
                <td>
                    total TTC
                </td>
                <td>
                     FCFA
                </td>
            </tr>
        </table>
        
    </div>  --}}

        
</body>
</html>