<?php
if (isset($_GET['id'])) {
    $element_id = $_GET['id'];
    // Connexion à la base de données avec PDO
    $dsn = 'mysql:host=localhost;dbname=autocompletion';
    $username = 'root';
    $password = '123456789';

    try {
        $conn = new PDO($dsn, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Requête pour obtenir l'élément par son ID
        $element_query = "SELECT * FROM animaux WHERE id = :element_id";
        $stmt = $conn->prepare($element_query);
        $stmt->execute(['element_id' => $element_id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$result) {
            header("Location: recherche.php");
            exit();
        }
    } catch (PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage();
    }
} else {
    header("Location: recherche.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $result['animal']; ?></title>
</head>
<body>
    <h1><?php echo $result['animal']; ?></h1>
    <!-- Affichage d'informations supplémentaires sur l'élément au besoin -->
</body>
</html>