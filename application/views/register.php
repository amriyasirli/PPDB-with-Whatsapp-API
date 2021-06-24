
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
            <h2>Form Pendaftaran Peserta Didik Baru</h2>
            <h4 class="text-left" >Data Pribadi.</h4>
        </div>
        <?= form_open_multipart('Register/add', 'class="php-email-form"');?>
            <div class="form-row">
                <div class="col-md-4 form-group">
                    <input type="text" name="nama_siswa" class="form-control" id="nama_siswa" placeholder="Nama Lengkap" data-rule="minlen:4" data-msg="Minimal 4 karakter">
                    <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                        <option value=""> - Jenis Kelamin - </option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                    <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" data-rule="minlen:4" data-msg="Minimal 4 karakter">
                    <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                    <input type="datetime" name="tanggal_lahir" class="form-control datepicker" id="date" placeholder="Tanggal Lahir" data-rule="minlen:4" data-msg="Minimal 4 karakter">
                    <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                    <select name="agama" id="agama" class="form-control">
                        <option value=""> - Agama - </option>
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
                    <input type="text" class="form-control" name="kewarganegaraan" id="kewarganegaraan" placeholder="Kewarganegaraan" data-rule="minlen:4" data-msg="Minimal 4 karakter">
                    <div class="validate"></div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 form-group">
                    <select name="siswa_provinsi" id="siswa_provinsi" class="form-control">
                        <option value=""> - Provinsi - </option>
                        <option value="Department 1">Department 1</option>
                        <option value="Department 2">Department 2</option>
                        <option value="Department 3">Department 3</option>
                    </select>
                    <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                    <select name="siswa_kabupaten" id="siswa_kabupaten" class="form-control">
                        <option value=""> - Kabupaten - </option>
                        <option value="Department 1">Department 1</option>
                        <option value="Department 2">Department 2</option>
                        <option value="Department 3">Department 3</option>
                    </select>
                    <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                    <select name="siswa_kecamatan" id="siswa_kecamatan" class="form-control">
                        <option value=""> - Kecamatan - </option>
                        <option value="Department 1">Department 1</option>
                        <option value="Department 2">Department 2</option>
                        <option value="Department 3">Department 3</option>
                    </select>
                    <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                    <input type="text" class="form-control" name="nik" id="nik" placeholder="Nomor Induk Kependudukan" data-rule="minlen:4" data-msg="Minimal 4 karakter">
                    <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                    <input type="text" class="form-control" name="nomor_whatsapp" id="nomor_whatsapp" placeholder="Nomor Whatsapp" data-rule="minlen:4" data-msg="Minimal 4 karakter">
                    <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="minlen:4" data-msg="Minimal 4 karakter">
                    <div class="validate"></div>
                </div>
            </div>           


            <!-- ======= Data Orang Tua ======= -->
            <div class="section-title">
                <h4 class="text-left" >Data Orang Tua.</h4>
            </div>
            <div class="form-row">
                <div class="col-md-4 form-group">
                    <input type="text" name="nama_ayah" class="form-control" id="nama_ayah" placeholder="Nama Ayah" data-rule="minlen:2" data-msg="Minimal 2 karakter">
                    <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                    <select name="pendidikan_ayah" id="pedidikan_ayah" class="form-control">
                        <option value=""> - Pendidikan Ayah - </option>
                        <option value="Department 1">Department 1</option>
                        <option value="Department 2">Department 2</option>
                        <option value="Department 3">Department 3</option>
                    </select>
                    <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                    <select name="pekerjaan_ayah" id="pekerjaan_ayah" class="form-control">
                        <option value=""> - Pekerjaan Ayah - </option>
                        <option value="Department 1">Department 1</option>
                        <option value="Department 2">Department 2</option>
                        <option value="Department 3">Department 3</option>
                    </select>
                    <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                    <input type="text" name="nama_ibu" class="form-control" id="nama_ibu" placeholder="Nama Ibu" data-rule="minlen:2" data-msg="Minimal 2 karakter">
                    <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                    <select name="pendidikan_ibu" id="pendidikan_ibu" class="form-control">
                        <option value=""> - Pendidikan Ibu - </option>
                        <option value="Department 1">Department 1</option>
                        <option value="Department 2">Department 2</option>
                        <option value="Department 3">Department 3</option>
                    </select>
                    <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                    <select name="pekerjaan_ibu" id="pekerjaan_ibu" class="form-control">
                        <option value=""> - Pekerjaan Ibu - </option>
                        <option value="Department 1">Department 1</option>
                        <option value="Department 2">Department 2</option>
                        <option value="Department 3">Department 3</option>
                    </select>
                    <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                    <input type="text" class="form-control" name="whatsapp_orangtua" id="whatsapp_orangtua" placeholder="Whatsapp Orang Tua" data-rule="minlen:4" data-msg="Minimal 4 karakter">
                    <div class="validate"></div>
                </div>
            </div>

            <!-- ======= Data Sekolah Asal ======= -->
            <div class="section-title">
                <h4 class="text-left" >Data Sekolah Asal.</h4>
            </div>
            
            <div class="form-row">
                <div class="col-md-4 form-group">
                    <input type="text" name="nama_sekolah" class="form-control" id="nama_sekolah" placeholder="Nama Sekolah Asal" data-rule="minlen:4" data-msg="Minimal 4 karakter">
                    <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                    <input type="number" name="tahun_lulus" class="form-control" id="tahun_lulus" placeholder="Tahun Lulus" data-rule="minlen:4" data-msg="Minimal 4 karakter">
                    <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                    <input type="text" name="rata_nilai" class="form-control" id="rata_nilai" placeholder="Rata Nilai Rapor" data-rule="minlen:2" data-msg="Minimal 2 karakter">
                    <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                    <select name="sekolah_provinsi" id="sekolah_provinsi" class="form-control">
                        <option value=""> - Provinsi - </option>
                        <option value="Department 1">Department 1</option>
                        <option value="Department 2">Department 2</option>
                        <option value="Department 3">Department 3</option>
                    </select>
                    <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                    <select name="sekolah_kabupaten" id="sekolah_kabupaten" class="form-control">
                        <option value=""> - Kabupaten - </option>
                        <option value="Department 1">Department 1</option>
                        <option value="Department 2">Department 2</option>
                        <option value="Department 3">Department 3</option>
                    </select>
                    <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                    <select name="sekolah_kecamatan" id="sekolah_kecamatan" class="form-control">
                        <option value=""> - Kecamatan - </option>
                        <option value="Department 1">Department 1</option>
                        <option value="Department 2">Department 2</option>
                        <option value="Department 3">Department 3</option>
                    </select>
                    <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                    <input type="number" name="kode_pos" class="form-control" id="kode_pos" placeholder="Kode Pos Sekolah" data-rule="minlen:4" data-msg="Minimal 4 karakter">
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
                    <input type="file" name="ijazah_terakhir" class="form-control" id="ijazah_terakhir" placeholder="Ijazah Terakhir" required>
                    <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                    <label>Raport (<small><i>pdf</i></small>)</label>
                    <input type="file" name="rapor" class="form-control" id="rapor" placeholder="Rapor" required>
                    <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                    <label>Kartu Keluarga (<small><i>pdf</i></small>)</label>
                    <input type="file" name="kartu_keluarga" class="form-control" id="kartu_keluarga" placeholder="Kartu Keluarga" required>
                    <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                    <label>Pas Foto (<small><i>jpg/png</i></small>)</label>
                    <input type="file" name="foto" class="form-control" id="foto" placeholder="Kartu Keluarga" required>
                    <div class="validate"></div>
                </div>
            </div>

            <!-- <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
            </div> -->

            <div class="text-center">
                <button type="submit">Simpan dan Kirim</button>
            </div>
        <?= form_close();?>

    </div>
</section>


</main><!-- End #main -->
