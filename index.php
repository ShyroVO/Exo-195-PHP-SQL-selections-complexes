<?php

/**
 * Utilisez la base de données que vous avez utilisé dans l'exo 194.
 * Utilisez aussi le CSS que vous avez écris ( div contenant l'utilisateur ).
 * Pour chaque sélection, vous utiliserez un div par utilisateur:
 * ex:  <div class="classe-css-utilisateur">
 *          utilisateur 1, données ( nom, prenom, etc ... )
 *      </div>
 *      <div class="classe-css-utilisateur">
 *          utilisateur 2, données ( nom, prenom, etc ... )
 *      </div>
 *
 * -- Sélections complexes --
 * Une seule requête est permise pour chaque point de l'exo.
 */

// TODO Commencez par créer votre objet de connexion à la base de données, vous pouvez aussi utiliser l'objet statique ou autre qu'on a créé ensemble.

try {
    $user = 'root';

    $pdo = new PDO("mysql:host=localhost;dbname=table_test_php;charset=utf8", $user , '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

/* 1. Sélectionnez et affichez tous les utilisateurs dont le nom est 'Conor' */
// TODO votre code ici.
    $nomDoe = $pdo->prepare("SELECT * from table_test_php.user WHERE nom='Doe'");
    $state = $nomDoe->execute();
    if ($state){
        foreach ($nomDoe->fetchAll() as $user){
            echo "id: ".$user['id'].' nom, prenom: '.$user['nom']." ". $user['prenom'].'<br>';
        }
    }
    echo '<hr>';

/* 2. Sélectionnez et affichez tous les utilisateurs dont le prénom est différent de 'John' */
// TODO Votre code ici.
    $nomDoe = $pdo->prepare("SELECT * from table_test_php.user WHERE nom !='Doe'");
    $state = $nomDoe->execute();
    if ($state){
        foreach ($nomDoe->fetchAll() as $user){
            echo "id: ".$user['id'].' nom, prenom: '.$user['nom']." ". $user['prenom'].'<br>';
        }
    }
    echo '<hr>';

/* 3. Sélectionnez et affichez tous les utilisateurs dont l'id est plus petit ou égal à 2 */
// TODO Votre code ici.
    $nomDoe = $pdo->prepare("SELECT * from table_test_php.user WHERE id <= 2");
    $state = $nomDoe->execute();
    if ($state){
        foreach ($nomDoe->fetchAll() as $user){
            echo "id: ".$user['id'].' nom, prenom: '.$user['nom']." ". $user['prenom'].'<br>';
        }
    }
    echo '<hr>';

/* 4. Sélectionnez et affichez tous les utilisateurs dont l'id est plus grand ou égal à 2 */
// TODO Votre code ici.
    $nomDoe = $pdo->prepare("SELECT * from table_test_php.user WHERE id >= 2");
    $state = $nomDoe->execute();
    if ($state){
        foreach ($nomDoe->fetchAll() as $user){
            echo "id: ".$user['id'].' nom, prenom: '.$user['nom']." ". $user['prenom'].'<br>';
        }
    }
    echo '<hr>';

/* 5. Sélectionnez et affichez tous les utilisateurs dont l'id est égal à 1 */
// TODO Votre code ici.
    $nomDoe = $pdo->prepare("SELECT * from table_test_php.user WHERE id = 1");
    $state = $nomDoe->execute();
    if ($state){
        foreach ($nomDoe->fetchAll() as $user){
            echo "id: ".$user['id'].' nom, prenom: '.$user['nom']." ". $user['prenom'].'<br>';
        }
    }
    echo '<hr>';

/* 6. Sélectionnez et affichez tous les utilisateurs dont l'id est plus grand que 1 ET le nom est égal à 'Doe' */
// TODO Votre code ici.
    $nomDoe = $pdo->prepare("SELECT * from table_test_php.user WHERE id >1 AND nom = 'Doe'");
    $state = $nomDoe->execute();
    if ($state){
        foreach ($nomDoe->fetchAll() as $user){
            echo "id: ".$user['id'].' nom, prenom: '.$user['nom']." ". $user['prenom'].'<br>';
        }
    }
    echo '<hr>';

/* 7. Sélectionnez et affichez tous les utilisateurs dont le nom est 'Doe' ET le prénom est 'John'*/
// TODO Votre code ici.
    $nomDoe = $pdo->prepare("SELECT * from table_test_php.user WHERE prenom='John' AND nom = 'Doe'");
    $state = $nomDoe->execute();
    if ($state){
        foreach ($nomDoe->fetchAll() as $user){
            echo "id: ".$user['id'].' nom, prenom: '.$user['nom']." ". $user['prenom'].'<br>';
        }
    }
    echo '<hr>';

/* 8. Sélectionnez et affichez tous les utilisateurs dont le nom est 'Conor' OU le prénom est 'Jane' */
// TODO Votre code ici.
    $nomDoe = $pdo->prepare("SELECT * from table_test_php.user WHERE prenom='Jane' OR nom = 'Conor'");
    $state = $nomDoe->execute();
    if ($state){
        foreach ($nomDoe->fetchAll() as $user){
            echo "id: ".$user['id'].' nom, prenom: '.$user['nom']." ". $user['prenom'].'<br>';
        }
    }
    echo '<hr>';

/* 9. Sélectionnez et affichez tous les utilisateurs en limitant les réultats à 2 résultats */
// TODO Votre code ici.
    $nomDoe = $pdo->prepare("SELECT * from table_test_php.user LIMIT 2");
    $state = $nomDoe->execute();
    if ($state){
        foreach ($nomDoe->fetchAll() as $user){
            echo "id: ".$user['id'].' nom, prenom: '.$user['nom']." ". $user['prenom'].'<br>';
        }
    }
    echo '<hr>';

/* 10. Sélectionnez et affichez tous les utilisateurs par ordre croissant, en limitant le résultat à 1 seul enregistrement */
// TODO Votre code ici.
    $nomDoe = $pdo->prepare("SELECT * from table_test_php.user ORDER BY id DESC LIMIT 1");
    $state = $nomDoe->execute();
    if ($state){
        foreach ($nomDoe->fetchAll() as $user){
            echo "id: ".$user['id'].' nom, prenom: '.$user['nom']." ". $user['prenom'].'<br>';
        }
    }
    echo '<hr>';

/* 11. Sélectionnez et affichez tous les utilisateurs dont le nom commence par C, fini par r et contient 5 caractères ( voir LIKE )*/
// TODO Votre code ici.
    $nomDoe = $pdo->prepare("SELECT * from table_test_php.user WHERE  nom LIKE 'C___r'");
    $state = $nomDoe->execute();
    if ($state){
        foreach ($nomDoe->fetchAll() as $user){
            echo "id: ".$user['id'].' nom, prenom: '.$user['nom']." ". $user['prenom'].'<br>';
        }
    }
    echo '<hr>';

/* 12. Sélectionnez et affichez tous les utilisateurs dont le nom contient au moins un 'e' */
// TODO Votre code ici.
    $nomDoe = $pdo->prepare("SELECT * from table_test_php.user WHERE nom LIKE '%e%'");
    $state = $nomDoe->execute();
    if ($state){
        foreach ($nomDoe->fetchAll() as $user){
            echo "id: ".$user['id'].' nom, prenom: '.$user['nom']." ". $user['prenom'].'<br>';
        }
    }
    echo '<hr>';

/* 13. Sélectionnez et affichez tous les utilisateurs dont le prénom est ( IN ) (John, Sarah) ... voir IN , pas OR '' */
// TODO Votre code ici.
    $nomDoe = $pdo->prepare("SELECT * from table_test_php.user WHERE prenom IN ('John','Sarah')");
    $state = $nomDoe->execute();
    if ($state){
        foreach ($nomDoe->fetchAll() as $user){
            echo "id: ".$user['id'].' nom, prenom: '.$user['nom']." ". $user['prenom'].'<br>';
        }
    }
    echo '<hr>';

/* 14. Sélectionnez et affichez tous les utilisateurs dont l'id est situé entre 2 et 4 */
// TODO Votre code ici.
    $nomDoe = $pdo->prepare("SELECT * from table_test_php.user WHERE id BETWEEN 2 AND 4");
    $state = $nomDoe->execute();
    if ($state){
        foreach ($nomDoe->fetchAll() as $user){
            echo "id: ".$user['id'].' nom, prenom: '.$user['nom']." ". $user['prenom'].'<br>';
        }
    }
    echo '<hr>';


}
catch (PDOException $exception) { 
    echo $exception->getMessage();
}