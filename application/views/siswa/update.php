
  <main id="main">

<!-- ======= Registrasi Siswa Baru ======= -->
<section class="appointment section-bg">
<br>
<br>
<br>
<br>
    <div class="container">
        <!-- ======= Data Diri ======= -->
        <div class="section-title">
            <h2>Update Data Peserta Didik</h2>
            <h4 class="text-left" >Data Pribadi.</h4>
        </div>
        <?= form_open_multipart('Siswa/update_aksi/'.$siswa->id_siswa, 'class="php-email-form"');?>
            <div class="form-row">
                <div class="col-md-4 form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" name="nama_siswa" class="form-control" id="nama_siswa" value="<?= $siswa->nama_siswa; ?>" data-rule="minlen:4" data-msg="Minimal 4 karakter">
                    <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                    <label for="">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                        <option value="<?= $siswa->jenis_kelamin; ?>"> <?= $siswa->jenis_kelamin; ?> </option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                    <label for="">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" value="<?= $siswa->tempat_lahir; ?>" data-rule="minlen:4" data-msg="Minimal 4 karakter">
                    <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                    <label for="">Tanggal Lahir</label>
                    <input type="datetime" name="tanggal_lahir" class="form-control datepicker" id="date" value="<?= $siswa->tanggal_lahir; ?>" data-rule="minlen:4" data-msg="Minimal 4 karakter">
                    <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                    <label for="">Agama</label>
                    <select name="agama" id="agama" class="form-control">
                        <option value="<?= $siswa->agama; ?>"> <?= $siswa->agama; ?> </option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Khatolik">Khatolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Konghucu">Konghucu</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                    <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                    <label for="">Nomor Induk Kependudukan</label>
                    <input type="text" class="form-control" name="nik" id="nik" value="<?= $siswa->nik; ?>" data-rule="minlen:4" data-msg="Minimal 4 karakter">
                    <div class="validate"></div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 form-group">
                    <label for="">WhatsApp</label>
                    <input type="text" class="form-control" name="nomor_whatsapp" id="nomor_whatsapp" value="<?= $siswa->nomor_whatsapp; ?>" data-rule="minlen:4" data-msg="Minimal 4 karakter">
                    <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                    <label for="">E-mail</label>
                    <input type="email" class="form-control" name="email" id="email" value="<?= $siswa->email; ?>" data-rule="minlen:4" data-msg="Minimal 4 karakter">
                    <div class="validate"></div>
                </div>
                <div class="col-md-12 form-group">
                    <label for="">Alamat</label>
                    <textarea name="alamat_siswa" class="form-control" id="" cols="50" rows="3"><?= $siswa->alamat; ?></textarea>
                    <div class="validate"></div>
                </div>
            </div>           


            <!-- ======= Data Orang Tua ======= -->
            <div class="section-title">
                <h4 class="text-left" >Data Orang Tua.</h4>
            </div>
            <div class="form-row">
                <div class="col-md-4 form-group">
                    <label for="">Nama Ayah</label>
                    <input type="text" name="nama_ayah" class="form-control" id="nama_ayah" value="<?= $OrangTua->nama_ayah; ?>" data-rule="minlen:2" data-msg="Minimal 2 karakter">
                    <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                    <label for="">Pendidikan Ayah</label>
                    <select name="pendidikan_ayah" id="pedidikan_ayah" class="form-control">
                        <option value="<?= $OrangTua->pendidikan_ayah; ?>"> <?= $OrangTua->pendidikan_ayah; ?> </option>
                        <option value="Tidak Sekolah">Tidak Sekolah</option>
                        <option value="SD/MI Sederajat">SD/MI Sederajat</option>
                        <option value="SMP/Mts Sederajat">SMP/Mts Sederajat</option>
                        <option value="SMA/MA Sederajat">SMA/MA Sederajat</option>
                        <option value="Diploma I (D1)">Diploma I (D1)</option>
                        <option value="Diploma II (D2)">Diploma II (D2)</option>
                        <option value="Diploma III (D3)">Diploma III (D3)</option>
                        <option value="Strata I(S1)/Diploma IV(D4)">Strata I(S1)/Diploma IV(D4)</option>
                        <option value="Strata 2(S2)">Strata 2(S2)</option>
                        <option value="Strata 3(S3)">Strata 3(S3)</option>
                    </select>
                    <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                    <label for="">Pekerjaan Ayah</label>
                    <select name="pekerjaan_ayah" id="pekerjaan_ayah" class="form-control">
                        <option value="<?= $OrangTua->pekerjaan_ayah; ?>"> <?= $OrangTua->pekerjaan_ayah; ?> </option>
                        <option value="Mengurus Rumah Tangga">Mengurus Rumah Tangga</option>
                        <option value="Pegawai Negeri Sipil (PNS)">Pegawai Negeri Sipil (PNS)</option>
                        <option value="Pegawai Swasta">Pegawai Swasta</option>
                        <option value="TNI/Polri">TNI/Polri</option>
                        <option value="Karyawan">Karyawan</option>
                        <option value="Wiraswasta">Wiraswasta</option>
                        <option value="Pedagang">Pedagang</option>
                        <option value="Petani">Petani</option>
                        <option value="Buruh">Buruh</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                    <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                    <label for="">Nama Ibu</label>
                    <input type="text" name="nama_ibu" class="form-control" id="nama_ibu" value="<?= $OrangTua->nama_ibu; ?>" data-rule="minlen:2" data-msg="Minimal 2 karakter">
                    <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                    <label for="">Pendidikan Ibu</label>
                    <select name="pendidikan_ibu" id="pendidikan_ibu" class="form-control">
                        <option value="<?= $OrangTua->pendidikan_ibu; ?>"> <?= $OrangTua->pendidikan_ibu; ?> </option>
                        <option value="Tidak Sekolah">Tidak Sekolah</option>
                        <option value="SD/MI Sederajat">SD/MI Sederajat</option>
                        <option value="SMP/Mts Sederajat">SMP/Mts Sederajat</option>
                        <option value="SMA/MA Sederajat">SMA/MA Sederajat</option>
                        <option value="Diploma I (D1)">Diploma I (D1)</option>
                        <option value="Diploma II (D2)">Diploma II (D2)</option>
                        <option value="Diploma III (D3)">Diploma III (D3)</option>
                        <option value="Strata I(S1)/Diploma IV(D4)">Strata I(S1)/Diploma IV(D4)</option>
                        <option value="Strata 2(S2)">Strata 2(S2)</option>
                        <option value="Strata 3(S3)">Strata 3(S3)</option>
                    </select>
                    <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                    <label for="">Pekerjaan Ibu</label>
                    <select name="pekerjaan_ibu" id="pekerjaan_ibu" class="form-control">
                        <option value="<?= $OrangTua->pekerjaan_ibu; ?>"> <?= $OrangTua->pekerjaan_ibu; ?> </option>
                        <option value="Mengurus Rumah Tangga">Mengurus Rumah Tangga</option>
                        <option value="Pegawai Negeri Sipil (PNS)">Pegawai Negeri Sipil (PNS)</option>
                        <option value="Pegawai Swasta">Pegawai Swasta</option>
                        <option value="TNI/Polri">TNI/Polri</option>
                        <option value="Karyawan">Karyawan</option>
                        <option value="Wiraswasta">Wiraswasta</option>
                        <option value="Pedagang">Pedagang</option>
                        <option value="Petani">Petani</option>
                        <option value="Buruh">Buruh</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                    <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                    <label for="">WhatsApp Orang Tua</label>
                    <input type="text" class="form-control" name="whatsapp_orangtua" id="whatsapp_orangtua" value="<?= $OrangTua->whatsapp_orangtua; ?>" data-rule="minlen:4" data-msg="Minimal 4 karakter">
                    <div class="validate"></div>
                </div>
            </div>

            <!-- ======= Data Sekolah Asal ======= -->
            <div class="section-title">
                <h4 class="text-left" >Data Sekolah Asal.</h4>
            </div>
            
            <div class="form-row">
                <div class="col-md-4 form-group">
                    <label for="">Nama Sekolah Asal</label>
                    <input type="text" name="nama_sekolah" class="form-control" id="nama_sekolah" value="<?= $sekolah->nama_sekolah; ?>" data-rule="minlen:4" data-msg="Minimal 4 karakter">
                    <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                    <label for="">Tahun Lulus</label>
                    <input type="number" name="tahun_lulus" class="form-control" id="tahun_lulus" value="<?= $sekolah->tahun_lulus; ?>" data-rule="minlen:4" data-msg="Minimal 4 karakter">
                    <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                    <label for="">Rata-rata Nilai Rapor</label>
                    <input type="text" name="rata_nilai" class="form-control" id="rata_nilai" value="<?= $sekolah->rata_nilai; ?>" data-rule="minlen:2" data-msg="Minimal 2 karakter">
                    <div class="validate"></div>
                </div>
                <div class="col-md-12 form-group">
                    <label for="">Alamat Sekolah</label>
                    <textarea name="alamat_sekolah" class="form-control" id="" cols="50" rows="3"><?= $sekolah->alamat_sekolah; ?></textarea>
                    <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                    <label for="">Kode Pos</label>
                    <input type="number" name="kode_pos" class="form-control" id="kode_pos" value="<?= $sekolah->kode_pos; ?>" data-rule="minlen:4" data-msg="Minimal 4 karakter">
                    <div class="validate"></div>
                </div>
            </div>

            <!-- ======= Upload File ======= -->
            <div class="section-title">
                <h4 class="text-left" >Upload Berkas.</h4>
            </div>
            
            <div class="form-row">
                <div class="col-md-4 form-group">
                    <label>Ijazah Terakhir (<small><i>pdf</i></small>)</label>
                    <?php if($file->ijazah_terakhir != null){?>
                        <a href="<?= base_url('assets/file/'.$file->ijazah_terakhir)?>" class="text-success" target="_blank"><?= $file->ijazah_terakhir ?> <i class="icofont-check"></i></a>
                    <?php }if($file->ijazah_terakhir == null){?>
                        <h6 class="text-danger">Belum Ada File ! <i class="icofont-close-circled"></i></h6>
                    <?php }?>
                    <input type="file" name="ijazah_terakhir" class="form-control" id="ijazah_terakhir" value="Ijazah Terakhir">
                    <small id="helpId" class="form-text text-muted">Klik file untuk download !</small>
                </div>
                <div class="col-md-4 form-group">
                    <label>Raport (<small><i>pdf</i></small>)</label>
                    <?php if($file->rapor != null){?>
                        <a href="<?= base_url('assets/file/'.$file->rapor)?>" class="text-success" target="_blank"><?= $file->rapor ?> <i class="icofont-check"></i></a>
                    <?php }if($file->rapor == null){?>
                        <h6 class="text-danger">Belum Ada File ! <i class="icofont-close-circled"></i></h6>
                    <?php }?>
                    <input type="file" name="rapor" class="form-control" id="rapor" value="Rapor">
                    <small id="helpId" class="form-text text-muted">Klik file untuk download !</small>
                </div>
                <div class="col-md-4 form-group">
                    <label>Kartu Keluarga (<small><i>pdf</i></small>)</label>
                    <?php if($file->kartu_keluarga != null){?>
                        <a href="<?= base_url('assets/file/'.$file->kartu_keluarga)?>" class="text-success" target="_blank"><?= $file->kartu_keluarga ?> <i class="icofont-check"></i></a>
                    <?php }if($file->kartu_keluarga == null){?>
                        <h6 class="text-danger">Belum Ada File ! <i class="icofont-close-circled"></i></h6>
                    <?php }?>
                    <input type="file" name="kartu_keluarga" class="form-control" id="kartu_keluarga" value="Kartu Keluarga">
                    <small id="helpId" class="form-text text-muted">Klik file untuk download !</small>
                </div>
                <div class="col-md-4 form-group">
                    <label>Pas Foto (<small><i>jpg/png</i></small>)</label>
                    <?php if($file->foto != null){?>
                        <a href="<?= base_url('assets/file/'.$file->foto)?>" class="text-success" target="_blank"><?= $file->foto ?> <i class="icofont-check"></i></a>
                    <?php }if($file->foto == null){?>
                        <h6 class="text-danger">Belum Ada File ! <i class="icofont-close-circled"></i></h6>
                    <?php }?>
                    <input type="file" name="foto" class="form-control" id="foto" value="Kartu Keluarga">
                    <small id="helpId" class="form-text text-muted">Klik file untuk download !</small>
                </div>
            </div>

            <!-- <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
            </div> -->

            <div class="text-center">
                <button type="submit">Simpan Perubahan</button>
            </div>
        <?= form_close();?>

    </div>
</section>


</main><!-- End #main -->


