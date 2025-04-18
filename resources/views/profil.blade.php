<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coba coba saja</title>
    <!--Stylesheet-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <section id="header">
        <a href="#"><img src="img/bagitup.png" class= "logo" alt=""  ></a>
    <div>
        <ul id="navbar">
            <li><a class="active"href="index.html">Home</a></li>
            <li><a href="shop.html">Shop</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="contact.html">Contact</a></li>
            <input class="box" type="text" placeholder="search">
            <li><a href="glasses.html"><i class="fa-solid fa-magnifying-glass"></i> </a></li>
            <li><a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a></li>
            <li><a><i class="fa-solid fa-user"></i></a></li>
            <li><a><i class="fa-solid fa-right-from-bracket"></i></a></li>
        </ul>
    </div>
</section>
<div class="container mt-5">
        <h2 class="text-center">Profil Pengguna Aplikasi</h2>
        <div class="row mt-4">
            <!-- Foto Pengguna -->
            <div class="col-md-4 text-center">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Foto Pengguna</h5>
                        <img src="https://via.placeholder.com/150" alt="Foto Pengguna" class="img-thumbnail">
                        <input type="file" class="form-control mt-3" id="uploadPhoto">
                        <button class="btn btn-primary mt-3" id="btnChangePhoto">Ganti Foto</button>
                    </div>
                </div>
            </div>

            <!-- Kelola Pengguna -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Kelola Pengguna</h5>
                        <form id="userForm">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="name" value="Fauzan Falah">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" value="example@gmail.com">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Telepon</label>
                                <input type="text" class="form-control" id="phone" value="081234567890">
                            </div>
                            <div class="mb-3">
                                <label for="nik" class="form-label">NIK (KTP)</label>
                                <input type="text" class="form-control" id="nik" value="123141211">
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Alamat</label>
                                <textarea class="form-control" id="address" rows="2">uj harapan</textarea>
                            </div>
                            <button type="button" class="btn btn-primary" id="btnSaveProfile">Ubah Profil</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Ganti Password -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ganti Password</h5>
                        <form id="passwordForm">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" value="admin" >
                            </div>
                            <div class="mb-3">
                                <label for="newPassword" class="form-label">Password Baru</label>
                                <input type="password" class="form-control" id="newPassword" placeholder="Enter Your New Password">
                            </div>
                            <button type="button" class="btn btn-primary" id="btnChangePassword">Ubah Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('btnSaveProfile').addEventListener('click', () => {
            alert('Profil berhasil diperbarui!');
        });

        document.getElementById('btnChangePassword').addEventListener('click', () => {
            const newPassword = document.getElementById('newPassword').value;
            if (newPassword) {
                alert('Password berhasil diperbarui!');
            } else {
                alert('Harap masukkan password baru.');
            }
        });

        document.getElementById('btnChangePhoto').addEventListener('click', () => {
            const photoInput = document.getElementById('uploadPhoto');
            if (photoInput.files.length > 0) {
                alert('Foto berhasil diunggah!');
            } else {
                alert('Harap pilih foto terlebih dahulu.');
            }
        });
    </script>
</body>
</html>
