<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <!-- Menampilkan nama pengguna dengan sanitasi HTML -->
        <?php if (!empty($user)) : ?>
            <h1>Selamat Datang, <?= htmlspecialchars($user['name']); ?></h1>
            <p>Email: <?= htmlspecialchars($user['email']); ?></p>

            <p>
                <a href="<?= BASEURL; ?>user/edit/<?= htmlspecialchars($user['id']); ?>" class="btn btn-warning">Edit</a>
                <a href="<?= BASEURL; ?>user/delete/<?= htmlspecialchars($user['id']); ?>" class="btn btn-danger" onclick="return confirm('Hapus user ini?');">Hapus</a>
            </p>
        <?php else : ?>
            <div>Tidak ditemukan pengguna.</div>
        <?php endif; ?>

        <!-- Link untuk kembali ke halaman daftar pengguna -->
        <a href="<?= BASEURL; ?>user" class="btn btn-secondary">Kembali ke Daftar</a>
    </div>
</body>
</html>