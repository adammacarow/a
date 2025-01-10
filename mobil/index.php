<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mobil</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Daftar Mobil</h1>
  </header>
  
  <main>
    <div class="car-list">
      <?php
        // Data mobil
        $cars = [
          ["name" => "Civic", "brand" => "Honda", "description" => "Mobil sedan dengan performa tinggi."],
          ["name" => "Fortuner", "brand" => "Toyota", "description" => "SUV tangguh untuk semua medan."],
          ["name" => "Model 3", "brand" => "Tesla", "description" => "Mobil listrik dengan teknologi canggih."],
          ["name" => "Accord", "brand" => "Honda", "description" => "Mobil premium yang nyaman untuk keluarga."],
        ];

        // Loop untuk menampilkan data mobil
        foreach ($cars as $car) {
          echo "
          <div class='car-item'>
            <h2>{$car['name']} ({$car['brand']})</h2>
            <p>{$car['description']}</p>
            <button class='details-button' onclick='showDetails(\"{$car['name']}\")'>Lihat Detail</button>
          </div>
          ";
        }
      ?>
    </div>
  </main>
  
  <footer>
    <p>&copy; 2025 MobilKu</p>
  </footer>

  <script src="script.js"></script>
</body>
</html>
