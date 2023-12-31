<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Homepage</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
        <div class="container">
            <a class="navbar-brand" href="/">Politeknik Negeri Bengkalis | D-IV Keamanan Sistem Informasi</a>
        </div>
    </nav>

    <div class="container" style="margin-top: 150px">
          <div class="col-12 text-center">
            <h1 class="text-secondary">Selamat Datang!</h1>
            <h4 class="text-secondary">Di Website Prodi Keamanan Sistem Informasi</h4>
            <h6 class="mt-3">
                Silahkan
                <a href="{{ route('auth.login') }}" style="text-decoration: none">masuk</a>
                atau <a href="{{ route('auth.register') }}" style="text-decoration: none">
                daftar</a>
                jika anda belum punya akun</h6>
                <video src="Video.mp4" autoplay muted loop></video>
                
          </div>
          
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>