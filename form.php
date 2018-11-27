<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire Personnages</title>
</head>
<body>
    <main>
    <form action='form.php' method='get'>
        <h2>Perso 1</h2>
            <?php 
                require 'class/formCreate.php';
                $form1 = new formulaire(0);
                $form1->addI();
                $form1->echoForm();
                echo '<h2>Perso 2</h2>';
                $form2 = new formulaire(1);
                $form2->addI();
                $form2->echoForm();
            ?>
            <br>
            <input type="submit" name="submit">
        <?php 
            if(isset($_GET['submit'])){
            require 'class/persoForm.php';
                $perso[0] = new perso($_GET['name0'], $_GET['force0'], $_GET['forceMag0'], $_GET['armure0'], $_GET['vie0'], $_GET['soin0']);
                $perso[1] = new perso($_GET['name1'], $_GET['force1'], $_GET['forceMag1'], $_GET['armure1'], $_GET['vie1'], $_GET['soin1']);
                
                $nbPerso=rand(0,1);
                switch ($nbPerso){
                    case 0:
                        while($perso[0]->enVie() && $perso[1]->enVie()){
                        $perso[0]->randAtt($perso[1]);
                        $perso[1]->randAtt($perso[0]);
                        }
                        break;
                    case 1:
                        while($perso[1]->enVie() && $perso[0]-enVie()){
                        $perso[1]->randAtt($perso[0]);
                        $perso[0]->randAtt($perso[1]);
                        }
                        break;
                }
                
                
            }
        ?>
        </form>
    </main>
</body>
</html>



