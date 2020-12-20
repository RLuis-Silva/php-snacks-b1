<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
        conosciamo nella documentazione) che:
        1. name sia più lungo di 3 caratteri
        2. che mail contenga un punto e una chiocciola
        3. e che age sia un numero
        
        Se tutto è ok, stampare "Accesso riuscito", altrimenti "Accesso negato"
     -->
    <title>Php snacks</title>
</head>
<body>
    <h1>Php snacks b1</h1>

    <?php
        $nomi = [];
        $mails=[];

        // esempio stringa queryURL: [...]?name=luis&mail=prova@gmail.com&age=21

        // controllo parametri 'name', 'mail', 'age' vuoti
        if( (empty($_GET['name']) ) || ( empty($_GET['mail']) ) || ( empty($_GET['age']) ) ){
            echo "Accesso negato: parametri non inseriti";
        }
        // controllo lunghezza 'name'
        else if( strlen($_GET['name']) <= 3  ){
            echo "Accesso negato: lunghezza inferiore/uguale a 3 caratteri";
        }
        // controllo 'mail': deve contenere "@" e "." | restitusice un numero della posizione carattere, altrimenti false
        else if( (strpos($_GET['mail'], "@") === false) || (strpos($_GET['mail'], ".") === false) ){
            echo "Accesso negato: simboli @ e punto non presenti contemporaneamente";
        }
        // controllo eta': 'eta' deve essere di tipo int| restituisce true se valore è numerico, altrimenti false
        else if( !(is_numeric($_GET['age'])) ){
            echo "Accesso negato: età non valida";
        }
        else{
            echo "Accesso riuscito";
        }
    ?>
</body>
</html>