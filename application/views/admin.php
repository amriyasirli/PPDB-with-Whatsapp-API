<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">
          <?= $this->session->flashdata('success')?>

        <!-- <div class="d-flex justify-content-between align-items-center">
          <h2>Inner Page</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Inner Page</li>
          </ol>
        </div> -->

      </div>
    </section><!-- End Breadcrumbs Section -->

    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
      <div class="container">

        <div class="section-title">
          <h2>Data Pendaftaran Peserta Didik Baru 2021/2022</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row">
          <div class="col-lg-2">
            <ul class="nav nav-tabs ">
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-0">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#tab-1">Siswa Mendaftar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-2">Siswa Lulus</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-3">Siswa Tidak Lulus</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-10 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane" id="tab-0">
                <div class="row">
                  <div class="col-lg-12 details order-2 order-lg-1">
                    <h3>Dashboard</h3>
                    
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="<?= base_url('assets/templates/')?>assets/img/departments-1.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-12 details order-2 order-lg-1">
                    <h3>Siswa Mendaftar</h3>
                    <div class="table-responsive">
                      <table id="example" class="table table-hover" style="width:100%">
                        <thead>
                          <tr>
                            <th width="200">No. Pendaftaran</th>
                            <th>Nama</th>
                            <th>Asal Sekolah</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                          foreach ($data_siswa as $siswa) :
                            $daftar = $this->db->where('pendaftaran_id_siswa', $siswa->id_siswa)->get('pendaftaran')->row();
                            $sekolah = $this->db->where('id_sekolah_asal', $siswa->id_siswa)->get('sekolah_asal')->row();
                          ?>
                          <tr>
                            <td><?= $daftar->nomor_pendaftaran ?></td>
                            <td><?= $siswa->nama_siswa ?></td>
                            <td><?= $sekolah->nama_sekolah ?></td>
                            <td>
                                <div class="dropdown open">
                                  <button class="btn btn-primary dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                      aria-expanded="false">
                                        Aksi
                                      </button>
                                  <div class="dropdown-menu" aria-labelledby="triggerId">
                                    <a style="color: #28a745" class="dropdown-item" href="<?= base_url('Siswa/detail/'.$siswa->id_siswa)?>"><i class="icofont-info-circle"></i> Lihat Detail</a>
                                    <a style="color: #6c757d" class="dropdown-item" href="<?= base_url('Siswa/update/'.$siswa->id_siswa)?>"><i class="icofont-edit"></i> Ubah</a>
                                    <a style="color: #dc3545" class="dropdown-item" href="<?= base_url('Siswa/delete/'.$siswa->id_siswa)?>"><i class="icofont-trash"></i> Hapus</a>
                                  </div>
                                </div>
                            </td>
                          </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-12 details order-2 order-lg-1">
    
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-2.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-12 details order-2 order-lg-1">
                    <h3>Impedit facilis occaecati odio neque aperiam sit</h3>
                            
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-3.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Departments Section -->

  </main><!-- End #main -->