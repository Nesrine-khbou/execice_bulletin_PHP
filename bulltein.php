<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Bulletins</title>
</head>
<body>
    <?php
        $tab=["Ali"=>["PHP"=>[15,15,18],"REACT"=>[12,11,13],"NODEJS"=>[11,10,14],"JAVA"=>[15,16,17]],
        "Sami"=>["PHP"=>[17,15,19],"REACT"=>[15,14,15],"NODEJS"=>[17,18,19],"JAVA"=>[15,16,20]],
        "Mohamed"=>["PHP"=>[12,15,12],"REACT"=>[14,11,13],"NODEJS"=>[11,10,12],"JAVA"=>[10,13,11]],
        "Omar"=>["PHP"=>[9,7,6],"REACT"=>[10,10,11],"NODEJS"=>[11,12,13],"JAVA"=>[9,9,10]]];

        function moyenneMatiere($name,$matiere){
            global $tab;
            $moyenneMat=($tab[$name][$matiere][0]+$tab[$name][$matiere][1]+($tab[$name][$matiere][2])*2)/4;
            return $moyenneMat;
        }
        function moyenneGenerale($name){
            $moyGen=(moyenneMatiere($name,"PHP")+moyenneMatiere($name,"REACT")+moyenneMatiere($name,"NODEJS")+moyenneMatiere($name,"JAVA"))/4;
            return $moyGen;
        }
        function Mention($etud){
            if(moyenneGenerale($etud)>=16){
                return "Tres Bien";
            }
            elseif(moyenneGenerale($etud)>=14){
                return "Bien";
            }
            elseif(moyenneGenerale($etud)>=12){
                return "Assez Bien";
            }
            elseif(moyenneGenerale($etud)>=10){
                return "Passable";
            }
            else{
                return "Non Admis";
            }
        }
        

        echo "<h1><center>Liste Des Bulletins De Notes Des Etudiants</center></h1>";

        function AfficheBulletin($etud){
            global $tab;
            echo 
"            <table>
                <tr>
                    <th class=\"blue\" class=\"left\" colspan=\"5\">Etudiant : $etud</th>
                </tr>
                <tr>
                    <th class=\"left\">Matiere</th>
                    <th>Note TP</th>
                    <th>Note DS</th>
                    <th>Note Examen</th>
                    <th>Moyenne Matiere</th>
                </tr>
                <tr>
                    <th class=\"left\">PHP</th>
                    <th>".$tab[$etud]["PHP"][0]."</th>
                    <th>".$tab[$etud]["PHP"][1]."</th>
                    <th>".$tab[$etud]["PHP"][2]."</th>
                    <th>".moyenneMatiere($etud,"PHP")."</th>
                </tr>
                <tr>
                    <th class=\"left\">REACT</th>
                    <th>".$tab[$etud]["REACT"][0]."</th>
                    <th>".$tab[$etud]["REACT"][1]."</th>
                    <th>".$tab[$etud]["REACT"][2]."</th>
                    <th>".moyenneMatiere($etud,"REACT")."</th>
                </tr>
                <tr>
                    <th class=\"left\">NODEJS</th>
                    <th>".$tab[$etud]["NODEJS"][0]."</th>
                    <th>".$tab[$etud]["NODEJS"][1]."</th>
                    <th>".$tab[$etud]["NODEJS"][2]."</th>
                    <th>".moyenneMatiere($etud,"NODEJS")."</th>
                </tr>
                <tr>
                    <th class=\"left\">JAVA</th>
                    <th>".$tab[$etud]["JAVA"][0]."</th>
                    <th>".$tab[$etud]["JAVA"][1]."</th>
                    <th>".$tab[$etud]["JAVA"][2]."</th>
                    <th>".moyenneMatiere($etud,"JAVA")."</th>
                </tr>


                <tr>
                <th  class=\"blue\" class=\"left\" colspan=\"5\">  Moyenne Generale =  ".moyenneGenerale($etud)." </br> </br> Mention : ".Mention($etud)." </th>     
                </tr>
                
            </table>";
        }

        AfficheBulletin("Ali");
        echo "<br>";
        AfficheBulletin("Sami");
        echo "<br>";
        AfficheBulletin("Mohamed");
        echo "<br>";
        AfficheBulletin("Omar");
    
    ?>
</body>
</html>