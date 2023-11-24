<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Selamat Datang</title>

    <!-- Tautan ke Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />

    <style>
        body {
            background-image: url('./assets/Cover.png');
            background-size: cover;
            /* Agar gambar mencakup seluruh latar belakang */
            background-position: center;
            /* Pusatkan gambar latar belakang */
            background-repeat: no-repeat;
            /* Hindari pengulangan gambar latar belakang */
            background-attachment: fixed;
            /* Tetapkan latar belakang agar tetap di tempat ketika menggulir */
            color: white;
            /* Ganti warna teks agar sesuai dengan gambar latar belakang */
        }

        .container {
            background-color: rgba(0, 0, 0, 0.5);
            /* Atur warna latar belakang konten agar lebih mudah dibaca */
            padding: 20px;
            /* Tambahkan padding agar konten tidak menempel pada tepi */
            border-radius: 10px;
            /* Tambahkan border-radius untuk tampilan yang lebih estetis */
            margin-top: 50px;
            /* Sesuaikan margin atas agar tampilan lebih baik */
        }
    </style>
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="text-center">
            <h1>Selamat Datang! di Media Ilmu Book Store</h1>
            <p class="lead">Silakan pilih peran Anda untuk login:</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-4">
                <button class="btn btn-primary btn-block mb-3" onclick="login('User')">
                    Login sebagai User
                </button>
            </div>
            <div class="col-md-4">
                <button class="btn btn-success btn-block" onclick="login('Admin')">
                    Login sebagai Admin
                </button>
            </div>
        </div>
    </div>

    <!-- Tautan ke Bootstrap JavaScript dan Popper.js (opsional, tapi dibutuhkan untuk beberapa komponen Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script>
        function login(role) {
            // Lakukan aksi login di sini sesuai dengan peran yang dipilih
            console.log("Anda login sebagai " + role);
            // Redirect atau lakukan tindakan lain sesuai kebutuhan
            // Misalnya, untuk redirect, Anda bisa menggunakan window.location.href
            if (role === 'User') {
                window.location.href = "<?= base_url('./login') ?>";
            } else if (role === 'Admin') {
                window.location.href = "<?= base_url('./login2') ?>";
            }
        }
    </script>
</body>

</html>