<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <h3 class="mb-4">Profil Pengguna</h3>
    <div class="card">
        <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item">
                    <strong>Username:</strong> <?= esc($username) ?>
                </li>
                <li class="list-group-item">
                    <strong>Role:</strong> <?= esc($role) ?>
                </li>
                <li class="list-group-item">
                    <strong>Email:</strong> <?= esc($email) ?>
                </li>
                <li class="list-group-item">
                    <strong>Waktu Login:</strong> <?= esc($login_time) ?>
                </li>
                <li class="list-group-item">
                    <strong>Status Login:</strong> <?= esc($status) ?>
                </li>
            </ul>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
