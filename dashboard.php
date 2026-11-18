<div class="row mt-4">
    <div class="col-md-12">
        <div class="card shadow-sm border-0 border-start border-primary border-4">
            <div class="card-body p-4">
                <?php
                $namaPengguna = trim((string)($_SESSION['nama'] ?? ''));
                $rolePengguna = trim((string)($_SESSION['role'] ?? ''));
                ?>
                <h4 class="mb-2">
                    Selamat Datang, <?= htmlspecialchars($namaPengguna !== '' ? $namaPengguna : 'Pengguna', ENT_QUOTES, 'UTF-8'); ?>!
                </h4>
                <p class="text-muted mb-0">
                    Saat ini Anda mengakses sistem dengan hak akses sebagai
                    <strong><?= htmlspecialchars($rolePengguna !== '' ? $rolePengguna : 'Admin', ENT_QUOTES, 'UTF-8'); ?></strong>.
                </p>
            </div>
        </div>
    </div>
</div>      