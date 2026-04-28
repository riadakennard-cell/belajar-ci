<?= $this->extend('layout.php'); ?>
<?= $this->section('content'); ?>

<div class="pagetitle">
    <h1>Data Tables</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item active">Profile</li>
        </ol>
    </nav>
</div>

<section class="section">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Profile</h5>

            <h4>Profil Pengguna</h4>
            <ul>
                <li><b>Username:</b> <?= session()->get('username'); ?></li>
                <li><b>Role:</b> <?= session()->get('role'); ?></li>
                <li><b>Email:</b> <?= session()->get('email'); ?></li>
                <li><b>Waktu Login:</b> <?= session()->get('login_time'); ?></li>
                <li><b>Status Login:</b> <?= session()->get('isLoggedIn') ? 'Sudah Login' : 'Belum Login'; ?></li>
            </ul>

        </div>
    </div>
</section>

<?= $this->endSection(); ?>