<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<h3>Profil Pengguna</h3>
<li>username:<?=($username)?></li>
<li>role:<?=($role)?></li>
<li>Email:<?=($email)?></li>
<li>Waktu Login:<?=($login_time)?></li>
<li>Status Login:<?=($status)?></li>

<?= $this->endSection() ?>