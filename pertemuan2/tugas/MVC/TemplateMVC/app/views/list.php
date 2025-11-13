<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pengguna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Daftar Pengguna</h1>
            <a href="<?= BASEURL; ?>user/create" class="btn btn-primary">Tambah User</a>
        </div>
        <table class="user-table table table-striped">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Loop untuk menampilkan setiap pengguna -->
                <?php
                // mendukung baik $users (variabel diekstrak) maupun $data['users']
                $listUsers = isset($users) ? $users : (isset($data['users']) ? $data['users'] : []);
                if (!empty($listUsers)) :
                    foreach ($listUsers as $user) : ?>
                        <tr>
                            <td><?= htmlspecialchars($user['name']); ?></td>
                            <td><?= htmlspecialchars($user['email']); ?></td>
                            <td>
                                <a href="<?= BASEURL; ?>user/detail/<?= htmlspecialchars($user['id']); ?>" class="btn btn-sm btn-info">Detail</a>
                                <a href="<?= BASEURL; ?>user/edit/<?= htmlspecialchars($user['id']); ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="<?= BASEURL; ?>user/delete/<?= htmlspecialchars($user['id']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus user ini?');">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach;
                else : ?>
                    <tr>
                        <td colspan="3">Tidak ada data pengguna.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>