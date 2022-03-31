<section id="kontak" class="kontak">
    <div class="container mb-5">
        <div class="row mt-5">
            <div class="col">
                <h1 class="judul">Testimoni</h1>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
        <!-- <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="alert alert-success alert-dismissible fade show"    role="alert">
                            Pesan anda <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                    </div>
                </div> -->
    <?php endif; ?>
</div>


<section id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card text-white bg-info mb-3 text-center">
                    <div class="card-body">
                        <h5 class="card-title">Kontak Kami</h5>
                        <p class="card-text">Rumah Sakit Ibu & Anak Catherine Booth Makassar</p>
                    </div>
                </div>
                <div class="card mb-3 maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.7403602441123!2d119.40874081400945!3d-5.145439696265966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbf1d546c60cf93%3A0x9a5dfef13882e68a!2sRumah+Sakit+Ibu+%26+Anak+Catherine+Booth!5e0!3m2!1sid!2sid!4v1560746062323!5m2!1sid!2sid" width="100%" height="350px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>


            <div class="col-lg-6">
                <?= form_open_multipart('kontak'); ?>
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control name-form" name="nama" id="nama" autofocus>
                    <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control name-form" name="email" id="email">
                    <small class="form-text text-danger"><?= form_error('email'); ?></small>
                </div>
                <div class="form-group">
                    <label for="notelp">No.Telepon</label>
                    <input type="text" class="form-control name-form" name="notlp" id="notelp">
                    <small class="form-text text-danger"><?= form_error('notlp'); ?></small>
                </div>
                <div class="form-group">
                    <label for="pesan">Pesan</label>
                    <textarea name="pesan" id="pesan" class="form-control name-form"></textarea>
                    <small class="form-text text-danger"><?= form_error('pesan'); ?></small>
                </div>
                <div class="form-group">
                    <label for="">Foto</label>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type=" submit" name="submit" class="btn btn-info btn-sub">Kirim Pesan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>