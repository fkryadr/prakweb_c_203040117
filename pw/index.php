<?php
    include 'php/admin.php';
    $produk = query("SELECT * FROM buku")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Latihan Prakweb</title>
</head>
<body>
	<?php foreach ($buku as $buk) : ?>
        </p>
    <?php endforeach; ?>
</body>
</html>