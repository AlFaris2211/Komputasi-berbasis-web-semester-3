<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $gender = htmlspecialchars($_POST["gender"]);
    $birthdate = htmlspecialchars($_POST["birthdate"]);
    $hobbies = isset($_POST["hobby"]) ? implode(", ", array_map('htmlspecialchars', $_POST["hobby"])) : "Tidak ada";

    // Menampilkan hasil
    ?>
    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hasil Formulir</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body {
                background-color: #f8f9fa;
            }
            .result-container {
                max-width: 600px;
                margin: 50px auto;
                padding: 20px;
                background-color: white;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="result-container">
                <h2 class="text-center mb-4">Hasil Formulir</h2>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Informasi Kontak</h5>
                        <p class="card-text"><strong>Nama:</strong> <?php echo $name; ?></p>
                        <p class="card-text"><strong>Email:</strong> <?php echo $email; ?></p>
                        <p class="card-text"><strong>Jenis Kelamin:</strong> <?php echo $gender; ?></p>
                        <p class="card-text"><strong>Tanggal Lahir:</strong> <?php echo $birthdate; ?></p>
                        <p class="card-text"><strong>Hobi:</strong> <?php echo $hobbies; ?></p>
                    </div>
                </div>
                <div class="mt-4 text-center">
                    <a href="index.php" class="btn btn-primary">Kembali ke Formulir</a>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
    <?php
} else {
    echo "Akses langsung ke halaman ini tidak diizinkan.";
}
?>