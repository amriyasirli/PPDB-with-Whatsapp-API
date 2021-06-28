<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->

    <br>
    <br>
    <br>
    <section class="inner-page">
      <div class="container">
        <div class="alert alert-success text-center">
            <h2>Pendaftaran Berhasil !!!</h2>
            <p><?= $this->session->flashdata('success')?></p>
            <div class="justify-content">
              <a href="<?= base_url('')?>" class="btn btn-outline-info"><i class="icofont-home"></i> Halaman Utaman</a>
              <a href="#" class="btn btn-success" role="button"><i class="icofont-whatsapp"></i> Kirim Bukti Pendaftaran</a>
            </div>
          </div>
    </section>

  </main><!-- End #main -->