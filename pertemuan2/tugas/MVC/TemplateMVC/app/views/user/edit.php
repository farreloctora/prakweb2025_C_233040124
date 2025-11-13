<?php
?>

<div class="container mt-4">
    <h1><?= $data['judul'] ?? 'Edit User'; ?></h1>

    <?php if (!empty($user)) : ?>
        <form action="<?= BASEURL; ?>user/update" method="post">
            <input type="hidden" name="id" value="<?= htmlspecialchars($user['id']); ?>">
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" name="name" id="name" class="form-control" value="<?= htmlspecialchars($user['name']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="<?= htmlspecialchars($user['email']); ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="<?= BASEURL; ?>user" class="btn btn-secondary">Batal</a>
        </form>
    <?php else : ?>
        <div>Tidak ditemukan pengguna.</div>
    <?php endif; ?>
</div>
