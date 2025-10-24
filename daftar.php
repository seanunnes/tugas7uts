<html>
<head>
    <title>::Data Registrasi::</title>
    <style type="text/css">
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-size: cover;
            background-image: url("https://cdn.arstechnica.net/wp-content/uploads/2023/06/bliss-update-1440x960.jpg");
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: white;
            border: 3px solid grey;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            max-width: 700px;
            width: 100%;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        .success-message {
            background-color: #d4edda;
            color: #155724;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #c3e6cb;
            border-radius: 5px;
            text-align: center;
            font-weight: bold;
        }
        .error-message {
            background-color: #f8d7da;
            color: #721c24;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #f5c6cb;
            border-radius: 5px;
            text-align: center;
            font-weight: bold;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f8f9fa;
        }
        .back-button {
            text-align: center;
            margin-top: 20px;
        }
        .back-button a {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
        .back-button a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Data Registrasi Pengguna</h1>

    <?php
    if (isset($_POST['submit'])) {
        $nama_depan = $_POST['nama_depan'];
        $nama_belakang = $_POST['nama_belakang'];
        $umur = (int)$_POST['umur'];
        $asal_kota = $_POST['asal_kota'];

        if ($umur < 10) {
            echo "<div class='error-message'>Error: Jumlah umur minimal adalah 10!</div>";
            echo "<div class='back-button'><a href='index.html'>Kembali ke Form Registrasi</a></div>";
            exit;
        }

        echo "<div class='success-message'>Registrasi Berhasil!</div>";
        echo "<table>";
        echo "<tr><th>No</th><th>Nama Lengkap</th><th>Umur</th><th>Asal Kota</th></tr>";

        for ($i = 1; $i <= $umur; $i++) {
            if ($i % 2 == 0) continue; 
            if ($i == 7 || $i == 13) continue; 
            echo "<tr>
                    <td>$i</td>
                    <td>".($nama_depan.' '.$nama_belakang)."</td>
                    <td>".$umur." tahun</td>
                    <td>".($asal_kota)."</td>
                 </tr>";
        }

        echo "</table>";
        echo "<div class='back-button'><a href='index.html'>Kembali ke Form Registrasi</a></div>";
    } else {
        echo "<div class='error-message'>Error: Data tidak ditemukan</div>";
        echo "<div class='back-button'><a href='index.html'>Kembali ke Form Registrasi</a></div>";
    }
    ?>
</div>
</body>
</html>
