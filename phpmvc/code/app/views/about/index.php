<div class="container">
    <section class="about-section text-center">
        <h1 class="mt-4">About Me</h1>
        <img src="<?= BASEURL; ?>/img/profile.jpg" alt="Foto <?= htmlspecialchars($data['nama']); ?>" width="200" class="rounded-circle shadow mb-3">
        <p>Halo, nama saya <?= htmlspecialchars($data['nama']); ?>, umur saya <?= htmlspecialchars($data['umur']); ?> tahun, saya adalah seorang <?= htmlspecialchars($data['pekerjaan']); ?>.</p>
    </section>
</div>
