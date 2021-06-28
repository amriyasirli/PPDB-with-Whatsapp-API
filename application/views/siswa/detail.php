<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->

    <br>
    <br>
    <br>
    <section class="inner-page">
        <div class="container">
            <div class="section-title">
                <h2>Data Siswa</h2>
            </div>
            <div class="row">
                <div class="text-center col-md-3">
                    <img src="<?= base_url('assets/file/'.$file->foto)?>" class="shadow-lg p-0 mb-3 bg-white rounded-circle circle-border" width="130" height="130" alt=""><br>
                    <a class="btn btn-sm btn-outline-secondary mb-5" href="<?= base_url('Siswa/update/'.$siswa->id_siswa)?>" role="button"><i class="icofont-edit"></i> Ubah Data</a>
                </div>
                <div class="col-lg-4">
                    <table class="">
                        <tr>
                            <td width="110">Nama</td>
                            <td class="text-primary">: <?= $siswa->nama_siswa?></td>
                        </tr>
                        <tr>
                            <td class="pt-4" width="110">No. Registrasi</td>
                            <td class="pt-4">: <?= $pendaftaran->nomor_pendaftaran?></td>
                        </tr>
                        <tr>
                            <td class="pt-4" width="110">Jenis Kelamin</td>
                            <td class="pt-4">: <?= $siswa->jenis_kelamin?></td>
                        </tr>
                    </table>
                </div>
                <div class="col-lg-5">
                    <table class="">
                        <tr>
                            <td width="110">Tanggal Lahir</td>
                            <td>: <?= $siswa->tanggal_lahir?></td>
                        </tr>
                        <tr>
                            <td class="pt-4" width="110">Sekolah Asal</td>
                            <td class="pt-4">: <?= $sekolah->nama_sekolah?></td>
                        </tr>
                        <tr>
                            <td class="pt-4" width="110">Terdaftar</td>
                            <td class="pt-4">: <i><?= $pendaftaran->tanggal_pendaftaran?></i></td>
                        </tr>
                    </table>
                </div>
            </div>
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Data Pribadi</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Sekolah Asal</a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Orang Tua</a>
                    <a class="nav-item nav-link" id="nav-file-tab" data-toggle="tab" href="#nav-file" role="tab" aria-controls="nav-file" aria-selected="false">Dokumen Pendukung</a>
                </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="container mt-3 tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <table class="">
                            <tr>
                                <td width="120">Nama</td>
                                <td class="text-primary">: <?= $siswa->nama_siswa?></td>
                            </tr>
                            <tr>
                                <td class="pt-4" width="120">ID (<i>Username</i>)</td>
                                <td class="pt-4">: <?= $siswa->id_siswa?></td>
                            </tr>
                            <tr>
                                <td class="pt-4" width="120">No. Registrasi</td>
                                <td class="pt-4">: <?= $pendaftaran->nomor_pendaftaran?></td>
                            </tr>
                            <tr>
                                <td class="pt-4" width="120">Jenis Kelamin</td>
                                <td class="pt-4">: <?= $siswa->jenis_kelamin?></td>
                            </tr>
                            <tr>
                                <td class="pt-4" width="120">Tempat Lahir</td>
                                <td class="pt-4">: <?= $siswa->tempat_lahir?></td>
                            </tr>
                            <tr>
                                <td class="pt-4" width="120">Tanggal Lahir</td>
                                <td class="pt-4">: <?= $siswa->tanggal_lahir?></td>
                            </tr>
                            <tr>
                                <td class="pt-4" width="120">Agama</td>
                                <td class="pt-4">: <?= $siswa->agama?></td>
                            </tr>
                            <tr>
                                <td class="pt-4" width="120">Alamat</td>
                                <td class="pt-4">: <?= $siswa->alamat?></td>
                            </tr>
                            <tr>
                                <td class="pt-4" width="120">Nomor NIK</td>
                                <td class="pt-4">: <?= $siswa->nik?></td>
                            </tr>
                            <tr>
                                <td class="pt-4" width="120"><i>WhatsApp</i></td>
                                <td class="pt-4 text-success">: <i class="icofont-whatsapp"></i> <?= $siswa->nomor_whatsapp?></td>
                            </tr>
                            <tr>
                                <td class="pt-4" width="120"><i>E-mail</i></td>
                                <td class="pt-4">: <?= $siswa->email?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="container mt-3 tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <table class="">
                            <tr>
                                <td width="120">Sekolah Asal</td>
                                <td class="text-primary">: <?= $sekolah->nama_sekolah?></td>
                            </tr>
                            <tr>
                                <td class="pt-4" width="120">Tahun Lulus</td>
                                <td class="pt-4">: <?= $sekolah->tahun_lulus?></td>
                            </tr>
                            <tr>
                                <td class="pt-4" width="120">Alamat Sekolah</td>
                                <td class="pt-4">: <?= $sekolah->alamat_sekolah?></td>
                            </tr>
                            <tr>
                                <td class="pt-4" width="120">Kode Pos</td>
                                <td class="pt-4">: <?= $sekolah->kode_pos?></td>
                            </tr>
                            <tr>
                                <td class="pt-4" width="120">Rata-Rata Nilai</td>
                                <td class="pt-4">: <?= $sekolah->rata_nilai?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="container mt-3 tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <table class="">
                            <tr>
                                <td width="180">Nama Ayah</td>
                                <td class="text-primary">: <?= $OrangTua->nama_ayah?></td>
                            </tr>
                            <tr>
                                <td class="pt-4" width="180">Pendidikan Ayah</td>
                                <td class="pt-4">: <?= $OrangTua->pendidikan_ayah?></td>
                            </tr>
                            <tr>
                                <td class="pt-4" width="180">Pekerjaan Ayah</td>
                                <td class="pt-4">: <?= $OrangTua->pekerjaan_ayah?></td>
                            </tr>
                            <tr>
                                <td class="pt-4" width="180">Nama Ibu</td>
                                <td class="text-primary pt-4">: <?= $OrangTua->nama_ibu?></td>
                            </tr>
                            <tr>
                                <td class="pt-4" width="180">Pendidikan Ibu</td>
                                <td class="pt-4">: <?= $OrangTua->pendidikan_ibu?></td>
                            </tr>
                            <tr>
                                <td class="pt-4" width="180">Pekerjaan Ibu</td>
                                <td class="pt-4">: <?= $OrangTua->pekerjaan_ibu?></td>
                            </tr>
                            <tr>
                                <td class="pt-4" width="180">WhatsApp OrangTua</td>
                                <td class="pt-4">: <?= $OrangTua->whatsapp_orangtua?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="container mt-3 tab-pane fade" id="nav-file" role="tabpanel" aria-labelledby="nav-file-tab">
                        <table class="">
                            <tr>
                                <td width="120">Ijazah Terakhir</td>
                                <?php if($file->ijazah_terakhir != null){?>
                                    <td>: <a href="<?= base_url('assets/file/'.$file->ijazah_terakhir)?>" class="text-success" target="_blank"><i>Download </i><i class="icofont-check"></a></td>
                                <?php }if($file->ijazah_terakhir == null){?>
                                    <td class="text-danger">: <i>Belum Upload </i><i class="icofont-close-circled"></i></td>
                                <?php }?>
                            </tr>
                            <tr>
                                <td class="pt-4" width="120">Rapor</td>
                                <?php if($file->rapor != null){?>
                                    <td class="pt-4">: <a href="<?= base_url('assets/file/'.$file->rapor)?>" class="text-success" target="_blank"><i>Download </i><i class="icofont-check"></a></td>
                                <?php }if($file->rapor == null){?>
                                    <td class="text-danger pt-4">: <i>Belum Upload </i><i class="icofont-close-circled"></i></td>
                                <?php }?>
                            </tr>
                            <tr>
                                <td class="pt-4" width="120">Kartu Keluarga</td>
                                <?php if($file->kartu_keluarga != null){?>
                                    <td class="pt-4">: <a href="<?= base_url('assets/file/'.$file->kartu_keluarga)?>" class="text-success" target="_blank"><i>Download </i><i class="icofont-check"></a></td>
                                <?php }if($file->kartu_keluarga == null){?>
                                    <td class="text-danger pt-4">: <i>Belum Upload </i><i class="icofont-close-circled"></i></td>
                                <?php }?>
                            </tr>
                            <tr>
                                <td class="pt-4" width="120">Pas Foto</td>
                                <?php if($file->foto != null){?>
                                    <td class="pt-4">: <a href="<?= base_url('assets/file/'.$file->foto)?>" class="text-success" target="_blank"><i>Download </i><i class="icofont-check"></a></td>
                                <?php }if($file->foto == null){?>
                                    <td class="text-danger pt-4">: <i>Belum Upload </i><i class="icofont-close-circled"></i></td>
                                <?php }?>
                            </tr>
                        </table>
                    </div>
                </div>
        </div>  
    </section>

  </main><!-- End #main -->