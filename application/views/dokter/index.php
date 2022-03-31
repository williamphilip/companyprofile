<!-- Dokter -->
<section id="dokter" class="dokter">
    <div class="container mb-5">
        <div class="row mt-5">
            <div class="col">
                <h1 class="judul">Dokter</h1>
            </div>
        </div>
    </div>
</section>
<!-- akhir dokter -->

<!-- jadwal dokter -->
<section id="doctor-schedule" class="doctor-schedule">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="nav flex-column nav-pills sticky-top" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active menu-bar" id="v-pills-DokterAnak-tab" data-toggle="pill" href="#v-pills-DokterAnak" role="tab" aria-controls="v-pills-DokterAnak" aria-selected="true">Anak</a>
                    <a class="nav-link menu-bar" id="v-pills-DokterKandungan-tab" data-toggle="pill" href="#v-pills-DokterKandungan" role="tab" aria-controls="v-pills-DokterKandungan" aria-selected="false">Kandungan</a>
                    <a class="nav-link menu-bar" id="v-pills-DokterTHT-tab" data-toggle="pill" href="#v-pills-DokterTHT" role="tab" aria-controls="v-pills-DokterTHT" aria-selected="false">THT</a>
                    <a class="nav-link menu-bar" id="v-pills-DokterBedahAnak-tab" data-toggle="pill" href="#v-pills-DokterBedahAnak" role="tab" aria-controls="v-pills-DokterBedahAnak" aria-selected="false">Bedah Anak</a>
                    <a class="nav-link menu-bar" id="v-pills-DokterBedahUmum-tab" data-toggle="pill" href="#v-pills-DokterBedahUmum" role="tab" aria-controls="v-pills-DokterBedahUmum" aria-selected="false">Bedah Umum</a>
                    <a class="nav-link menu-bar" id="v-pills-DokterPenyakitDalam-tab" data-toggle="pill" href="#v-pills-DokterPenyakitDalam" role="tab" aria-controls="v-pills-DokterPenyakitDalam" aria-selected="false">Penyakit Dalam</a>
                    <a class="nav-link menu-bar" id="v-pills-DokterGigi-tab" data-toggle="pill" href="#v-pills-DokterGigi" role="tab" aria-controls="v-pills-DokterGigi" aria-selected="false">Gigi</a>
                    <a class="nav-link menu-bar" id="v-pills-DokterPatologiAnatomi-tab" data-toggle="pill" href="#v-pills-DokterPatologiAnatomi" role="tab" aria-controls="v-pills-DokterPatologiAnatomi" aria-selected="false">Patologi
                        Anatomi</a>
                    <a class="nav-link menu-bar" id="v-pills-DokterPatologiKlinis-tab" data-toggle="pill" href="#v-pills-DokterPatologiKlinis" role="tab" aria-controls="v-pills-DokterPatologiKlinis" aria-selected="false">Patologi
                        Klinis</a>
                    <a class="nav-link menu-bar" id="v-pills-DokterRadiologi-tab" data-toggle="pill" href="#v-pills-DokterRadiologi" role="tab" aria-controls="v-pills-DokterRadiologi" aria-selected="false">Radiologi</a>
                    <a class="nav-link menu-bar" id="v-pills-DokterUmum-tab" data-toggle="pill" href="#v-pills-DokterUmum" role="tab" aria-controls="v-pills-DokterUmum" aria-selected="false">Umum</a>
                    <a class="nav-link menu-bar" id="v-pills-DokterAnastesi-tab" data-toggle="pill" href="#v-pills-DokterAnastesi" role="tab" aria-controls="v-pills-DokterAnastesi" aria-selected="false">Anastesi</a>
                    <a class="nav-link menu-bar" id="v-pills-DokterKulitKelamin-tab" data-toggle="pill" href="#v-pills-DokterKulitKelamin" role="tab" aria-controls="v-pills-DokterKulitKelamin" aria-selected="false">Kulit & Kelamin</a>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-DokterAnak" role="tabpanel" aria-labelledby="v-pills-DokterAnak-tab">
                        <div class="col-sm-12">
                            <h4>Dokter Anak</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-3 text-center mb-3">
                                <img src="<?= base_url(); ?>assets/img/lisal.png" class="rounded-circle" width="100" alt="lisal">
                                <h6 class="nama-dokter">Prof.Dr. J.S.Lisal, Sp.A,Sp.GK(k)</h6>
                                <a href="#" class="btn btn-outline-info tombol2" data-toggle="modal" data-target="#infoDokterAnakSatuModalCenter">Info
                                    Dokter</a>
                            </div>
                            <div class="col-md-9">
                                <div class="col-sm-12 text-center mb-4">Jadwal Praktek</div>
                                <div class="row text-center">
                                    <div class="col-sm">
                                        <p class="day">Senin</p>
                                        <p class="time">08.00-13.00</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Selasa</p>
                                        <p class="time">08.00-13.00</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Rabu</p>
                                        <p class="time">08.00-13.00</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Kamis</p>
                                        <p class="time">08.00-13.00</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Jumat</p>
                                        <p class="time">08.00-13.00</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Sabtu</p>
                                        <p class="time">-----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Minggu</p>
                                        <p class="time">-----</p>
                                    </div>
                                </div>
                            </div>
                            <!-- box -->
                            <div class="modal fade" id="infoDokterAnakSatuModalCenter" tabindex="-1" role="dialog" aria-labelledby="infoDokterAnakSatuModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="infoDokterAnakSatuModalCenterTitle">INFO
                                                DOKTER</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <small>Nama Dokter</small><br>
                                                    <b>Prof.Dr. J.S.Lisal, Sp.A, Sp.GK(k)</b><br>
                                                    <small>Spesialis</small><br>
                                                    <b>ANAK & Gizi Klinik</b>
                                                </div>
                                                <div class="col-sm-3 text-center">
                                                    <img src="<?= base_url(); ?>assets/img/lisal.png" alt="lisal" class="img-thumbnail" width="100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- akhir box -->
                            <div class="col-md-3 text-center mb-3">
                                <img src="<?= base_url(); ?>assets/img/yulius.png" class="rounded-circle" width="100" alt="lisal">
                                <h6 class="nama-dokter">dr. Yulius Patimang, Sp.A, Sp.JP</h6>
                                <a href="#" class="btn btn-outline-info tombol2" data-toggle="modal" data-target="#infoDokterAnakDuaModalCenter">Info
                                    Dokter</a>
                            </div>
                            <div class="col-md-9">
                                <div class="col-sm-12 text-center mb-4">Jadwal Praktek</div>
                                <div class="row text-center">
                                    <div class="col-sm">
                                        <p class="day">Senin</p>
                                        <p><b>*</b></p>
                                        <p class="time">17.00-21.00</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Selasa</p>
                                        <p><b>*</b></p>
                                        <p class="time">17.00-21.00</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Rabu</p>
                                        <p><b>*</b></p>
                                        <p class="time">17.00-21.00</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Kamis</p>
                                        <p><b>*</b></p>
                                        <p class="time">17.00-21.00</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Jumat</p>
                                        <p class="time">08.00-14.00</p>
                                        <p class="time">17.00-21.00</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Sabtu</p>
                                        <p class="time">08.00-14.00</p>
                                        <p><b>*</b></p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Minggu</p>
                                        <p><b>*</b></p>
                                        <p class="time">-----</p>
                                    </div>
                                </div>
                            </div>
                            <!-- box -->
                            <div class="modal fade" id="infoDokterAnakDuaModalCenter" tabindex="-1" role="dialog" aria-labelledby="infoDokterAnakDuaModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="infoDokterAnakDuaModalCenterTitle">INFO
                                                DOKTER</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <small>Nama Dokter</small><br>
                                                    <b>dr. Yulius Patimang, Sp.A, Sp.JP</b><br>
                                                    <small>Spesialis</small><br>
                                                    <b>ANAK & Jantung,Paru Anak </b>
                                                </div>
                                                <div class="col-sm-3 text-center">
                                                    <img src="<?= base_url(); ?>assets/img/yulius.png" alt="yulius" class="img-thumbnail" width="100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- akhir box -->
                            <div class="col-md-3 text-center mb-3">
                                <img src="<?= base_url(); ?>assets/img/budi.png" class="rounded-circle" width="100" alt="budi">
                                <h6 class="nama-dokter">dr. Setia Budi.S, Sp.A(k)</h6>
                                <a href="#" class="btn btn-outline-info tombol2" data-toggle="modal" data-target="#infoDokterAnakTigaModalCenter">Info
                                    Dokter</a>
                            </div>
                            <div class="col-md-9">
                                <div class="col-sm-12 text-center mb-4">Jadwal Praktek</div>
                                <div class="row text-center">
                                    <div class="col-sm">
                                        <p class="day">Senin</p>
                                        <p><b>*</b></p>
                                        <p class="time">-----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Selasa</p>
                                        <p><b>*</b></p>
                                        <p class="time">-----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Rabu</p>
                                        <p><b>*</b></p>
                                        <p class="time">-----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Kamis</p>
                                        <p class="time">08.00-14.00</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Jumat</p>
                                        <p><b>*</b></p>
                                        <p class="time">-----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Sabtu</p>
                                        <p class="time">08.00-14.00</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Minggu</p>
                                        <p><b>*</b></p>
                                        <p class="time">-----</p>
                                    </div>
                                </div>
                            </div>
                            <!-- box -->
                            <div class="modal fade" id="infoDokterAnakTigaModalCenter" tabindex="-1" role="dialog" aria-labelledby="infoDokterAnakTigaModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="infoDokterAnakTigaModalCenterTitle">INFO
                                                DOKTER</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <small>Nama Dokter</small><br>
                                                    <b>dr. Setia Budi Salekede, Sp.A(k)</b><br>
                                                    <small>Spesialis</small><br>
                                                    <b>ANAK & Pencernaan Anak</b>
                                                </div>
                                                <div class="col-sm-3 text-center">
                                                    <img src="<?= base_url(); ?>assets/img/budi.png" alt="budi" class="img-thumbnail" width="100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- akhir box -->
                            <div class="col-md-3 text-center mb-3">
                                <img src="<?= base_url(); ?>assets/img/robert.png" class="rounded-circle" width="100" alt="robert">
                                <h6 class="nama-dokter">dr. Tauran J. Robert, Sp.A</h6>
                                <a href="#" class="btn btn-outline-info tombol2" data-toggle="modal" data-target="#infoDokterAnakEmpatModalCenter">Info
                                    Dokter</a>
                            </div>
                            <div class="col-md-9">
                                <div class="col-sm-12 text-center mb-4">Jadwal Praktek</div>
                                <div class="row text-center">
                                    <div class="col-sm">
                                        <p class="day">Senin</p>
                                        <p class="time">08.00-14.00</p>
                                        <p><b>*</b></p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Selasa</p>
                                        <p class="time">08.00-14.00</p>
                                        <p><b>*</b></p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Rabu</p>
                                        <p><b>*</b></p>
                                        <p class="time">-----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Kamis</p>
                                        <p><b>*</b></p>
                                        <p class="time">-----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Jumat</p>
                                        <p><b>*</b></p>
                                        <p class="time">-----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Sabtu</p>
                                        <p class="time">17.00-21.00</p>
                                        <p><b>*</b></p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Minggu</p>
                                        <p class="time">08.00-14.00</p>
                                        <p class="time">17.00-21.00</p>
                                    </div>
                                </div>
                            </div>
                            <!-- box -->
                            <div class="modal fade" id="infoDokterAnakEmpatModalCenter" tabindex="-1" role="dialog" aria-labelledby="infoDokterAnakEmpatModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="infoDokterAnakEmpatModalCenterTitle">INFO
                                                DOKTER</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <small>Nama Dokter</small><br>
                                                    <b>dr. Tauran J.Robert, Sp.A</b><br>
                                                    <small>Spesialis</small><br>
                                                    <b>ANAK</b>
                                                </div>
                                                <div class="col-sm-3 text-center">
                                                    <img src="<?= base_url(); ?>assets/img/robert.png" alt="robert" class="img-thumbnail" width="100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- akhir box -->
                            <div class="col-md-3 text-center mb-3">
                                <img src="<?= base_url(); ?>assets/img/irvan.png" class="rounded-circle" width="100" alt="irvan">
                                <h6 class="nama-dokter">dr. Irvan Auwriadharma, Sp.A, M.Kes</h6>
                                <a href="#" class="btn btn-outline-info tombol2" data-toggle="modal" data-target="#infoDokterAnakLimaModalCenter">Info
                                    Dokter</a>
                            </div>
                            <div class="col-md-9">
                                <div class="col-sm-12 text-center mb-4">Jadwal Praktek</div>
                                <div class="row text-center">
                                    <div class="col-sm">
                                        <p class="day">Senin</p>
                                        <p><b>*</b></p>
                                        <p class="time">-----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Selasa</p>
                                        <p><b>*</b></p>
                                        <p class="time">-----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Rabu</p>
                                        <p class="time">08.00-14.00</p>
                                        <p><b>*</b></p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Kamis</p>
                                        <p><b>*</b></p>
                                        <p class="time">-----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Jumat</p>
                                        <p><b>*</b></p>
                                        <p class="time">-----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Sabtu</p>
                                        <p><b>*</b></p>
                                        <p class="time">-----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Minggu</p>
                                        <p><b>*</b></p>
                                        <p class="time">-----</p>
                                    </div>
                                </div>
                            </div>
                            <!-- box -->
                            <div class="modal fade" id="infoDokterAnakLimaModalCenter" tabindex="-1" role="dialog" aria-labelledby="infoDokterAnakLimaModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="infoDokterAnakLimaModalCenterTitle">INFO
                                                DOKTER</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <small>Nama Dokter</small><br>
                                                    <b>dr. Irvan Auwriadharma, Sp.A, M.Kes</b><br>
                                                    <small>Spesialis</small><br>
                                                    <b>ANAK</b>
                                                </div>
                                                <div class="col-sm-3 text-center">
                                                    <img src="<?= base_url(); ?>assets/img/irvan.png" alt="irvan" class="img-thumbnail" width="100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- akhir box -->
                            <div class="col-md-3 text-center mb-3">
                                <img src="<?= base_url(); ?>assets/img/dr.wanty.png" class="rounded-circle" width="100" alt="wanty">
                                <h6 class="nama-dokter">dr. Wanty Sahli, Sp.A</h6>
                                <a href="#" class="btn btn-outline-info tombol2" data-toggle="modal" data-target="#infoDokterAnakEnamModalCenter">Info
                                    Dokter</a>
                            </div>
                            <div class="col-md-9">
                                <div class="col-sm-12 text-center mb-4">Jadwal Praktek</div>
                                <div class="row text-center">
                                    <div class="col-sm">
                                        <p class="day">Senin</p>
                                        <p class="time">-----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Selasa</p>
                                        <p class="time">-----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Rabu</p>
                                        <p class="time">-----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Kamis</p>
                                        <p class="time">-----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Jumat</p>
                                        <p class="time">-----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Sabtu</p>
                                        <p class="time">-----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Minggu</p>
                                        <p class="time">-----</p>
                                    </div>
                                </div>
                            </div>
                            <!-- box -->
                            <div class="modal fade" id="infoDokterAnakEnamModalCenter" tabindex="-1" role="dialog" aria-labelledby="infoDokterAnakEnamModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="infoDokterAnakEnamModalCenterTitle">INFO
                                                DOKTER</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <small>Nama Dokter</small><br>
                                                    <b>dr. Wanty Sahli, Sp.A</b><br>
                                                    <small>Spesialis</small><br>
                                                    <b>ANAK</b>
                                                </div>
                                                <div class="col-sm-3 text-center">
                                                    <img src="<?= base_url(); ?>assets/img/dr.wanty.png" alt="wanty" class="img-thumbnail" width="100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- akhir box -->
                            <div class="col-md-3 text-center mb-3">
                                <img src="<?= base_url(); ?>assets/img/dokter-nellie.png" class="rounded-circle" width="100" alt="nellie">
                                <h6 class="nama-dokter">dr. Nellie Rasjid, Sp.A, M.Kes<b>*</b></h6>
                                <a href="#" class="btn btn-outline-info tombol2" data-toggle="modal" data-target="#infoDokterAnakTujuhModalCenter">Info
                                    Dokter</a>
                            </div>
                            <div class="col-md-9">
                                <div class="col-sm-12 text-center mb-4">Jadwal Praktek</div>
                                <div class="row text-center">
                                    <div class="col-sm">
                                        <p class="day">Senin</p>
                                        <p><b>*</b></p>
                                        <p class="time">-----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Selasa</p>
                                        <p><b>*</b></p>
                                        <p class="time">-----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Rabu</p>
                                        <p><b>*</b></p>
                                        <p class="time">-----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Kamis</p>
                                        <p><b>*</b></p>
                                        <p class="time">-----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Jumat</p>
                                        <p><b>*</b></p>
                                        <p class="time">-----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Sabtu</p>
                                        <p><b>*</b></p>
                                        <p class="time">-----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Minggu</p>
                                        <p><b>*</b></p>
                                        <p class="time">-----</p>
                                    </div>
                                </div>
                            </div>
                            <!-- box -->
                            <div class="modal fade" id="infoDokterAnakTujuhModalCenter" tabindex="-1" role="dialog" aria-labelledby="infoDokterAnakTujuhModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="infoDokterAnakTujuhModalCenterTitle">INFO
                                                DOKTER</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <small>Nama Dokter</small><br>
                                                    <b>dr. Nellie Rasjid, Sp.A, M.Kes</b><br>
                                                    <small>Spesialis</small><br>
                                                    <b>ANAK</b>
                                                </div>
                                                <div class="col-sm-3 text-center">
                                                    <img src="<?= base_url(); ?>assets/img/dokter-nellie.png" alt="nellie" class="img-thumbnail" width="100">
                                                </div>
                                                <div class="col-sm-12">
                                                    <h4 class="praktek text-center">Tentang Dokter</h4>
                                                </div>
                                                <div class="col-sm-12">
                                                    <p>
                                                        <strong>Riwayat Pendidikan :</strong>
                                                    </p>
                                                    <ul>
                                                        <li><b>SD</b> : SD Timor II, Makassar</li>
                                                        <li><b>SMP</b> : SMP Negeri V, Makassar</li>
                                                        <li><b>SMA</b> : SMA Negeri II, Makassar</li>
                                                        <li><b>Fakultas Kedokteran</b> : Fakultas Kedikteran
                                                            Universitas
                                                            Hasanuddin (FK- UNHAS)</li>
                                                        <li><b>Peserta Program Pendidikan Dokter Spesialis Ilmu
                                                                Kesehatan Anak</b> : FK-UNHAS</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- akhir box -->
                            <div class="col-md-3 text-center mb-3">
                                <img src="<?= base_url(); ?>assets/img/dr.ninny.png" class="rounded-circle" width="100" alt="ninny">
                                <h6 class="nama-dokter">dr. Ninny M.Pelupessy, Sp.A</h6>
                                <a href="#" class="btn btn-outline-info tombol2" data-toggle="modal" data-target="#infoDokterAnakDelapanModalCenter">Info
                                    Dokter</a>
                            </div>
                            <div class="col-md-9">
                                <div class="col-sm-12 text-center mb-4">Jadwal Praktek</div>
                                <div class="row text-center">
                                    <div class="col-sm">
                                        <p class="day">Senin</p>
                                        <p class="time">-----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Selasa</p>
                                        <p class="time">-----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Rabu</p>
                                        <p class="time">-----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Kamis</p>
                                        <p class="time">-----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Jumat</p>
                                        <p class="time">-----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Sabtu</p>
                                        <p class="time">-----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Minggu</p>
                                        <p class="time">-----</p>
                                    </div>
                                </div>
                            </div>
                            <!-- box -->
                            <div class="modal fade" id="infoDokterAnakDelapanModalCenter" tabindex="-1" role="dialog" aria-labelledby="infoDokterAnakDelapanModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="infoDokterAnakDelapanModalCenterTitle">INFO
                                                DOKTER</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <small>Nama Dokter</small><br>
                                                    <b>dr. Ninny M.Pelupessy, Sp.A</b><br>
                                                    <small>Spesialis</small><br>
                                                    <b>ANAK</b>
                                                </div>
                                                <div class="col-sm-3 text-center">
                                                    <img src="<?= base_url(); ?>assets/img/dr.ninny.png" alt="ninny" class="img-thumbnail" width="100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- akhir box -->
                        </div>
                        <div class="row text-center mt-4">
                            <div class="col-sm-12">
                                <p class="catatan">*Catatan : Tanda (*) Jadwal Praktek On-Call dan Poli Perjanjian</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-DokterKandungan" role="tabpanel" aria-labelledby="v-pills-DokterKandungan-tab">
                        <h4>Dokter Kandungan</h4>
                        <div class="row">
                            <div class="col-md-3 text-center mb-3">
                                <img src="<?= base_url(); ?>assets/img/poppy.png" class="rounded-circle" width="100" alt="poppy">
                                <h6 class="nama-dokter">dr. Suzana J.M.Siegers, Sp.OG</h6>
                                <a href="#" class="btn btn-outline-info tombol2" data-toggle="modal" data-target="#infoDokterKandunganSatuModalCenter">Info
                                    Dokter</a>
                            </div>
                            <div class="col-md-9">
                                <div class="col-sm-12 text-center mb-4">Jadwal Praktek</div>
                                <div class="row text-center">
                                    <div class="col-sm">
                                        <p class="day">Senin</p>
                                        <p><b>*</b></p>
                                        <p class="time">17.00-20.00</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Selasa</p>
                                        <p><b>*</b></p>
                                        <p class="time">17.00-20.00</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Rabu</p>
                                        <p><b>*</b></p>
                                        <p class="time">17.00-20.00</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Kamis</p>
                                        <p><b>*</b></p>
                                        <p class="time">17.00-20.00</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Jumat</p>
                                        <p><b>*</b></p>
                                        <p class="time">17.00-20.00</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Sabtu</p>
                                        <p><b>*</b></p>
                                        <p class="time">17.00-20.00</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Minggu</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                </div>
                            </div>
                            <!-- box -->
                            <div class="modal fade" id="infoDokterKandunganSatuModalCenter" tabindex="-1" role="dialog" aria-labelledby="infoDokterKandunganSatuModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="infoDokterKandunganSatuModalCenterTitle">INFO
                                                DOKTER</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <small>Nama Dokter</small><br>
                                                    <b>dr. Suzana J.M.Siegers, Sp.OG</b><br>
                                                    <small>Spesialis</small><br>
                                                    <b>Kandungan</b>
                                                </div>
                                                <div class="col-sm-3 text-center">
                                                    <img src="<?= base_url(); ?>assets/img/poppy.png" alt="poppy" class="img-thumbnail" width="100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- akhir box -->
                            <div class="col-md-3 text-center mb-3">
                                <img src="<?= base_url(); ?>assets/img/dr.rudy.png" class="rounded-circle" width="100" alt="rudy">
                                <h6 class="nama-dokter">dr. Rudy B.Leonardi, Sp.OG</h6>
                                <a href="#" class="btn btn-outline-info tombol2" data-toggle="modal" data-target="#infoDokterKandunganDuaModalCenter">Info
                                    Dokter</a>
                            </div>
                            <div class="col-md-9">
                                <div class="col-sm-12 text-center mb-4">Jadwal Praktek</div>
                                <div class="row text-center">
                                    <div class="col-sm">
                                        <p class="day">Senin</p>
                                        <p class="time">----</p>
                                        <p><b>*</b></p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Selasa</p>
                                        <p class="time">----</p>
                                        <p><b>*</b></p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Rabu</p>
                                        <p class="time">----</p>
                                        <p><b>*</b></p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Kamis</p>
                                        <p class="time">----</p>
                                        <p><b>*</b></p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Jumat</p>
                                        <p class="time">----</p>
                                        <p><b>*</b></p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Sabtu</p>
                                        <p class="time">----</p>
                                        <p><b>*</b></p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Minggu</p>
                                        <p class="time">----</p>
                                        <p><b>*</b></p>
                                    </div>
                                </div>
                            </div>
                            <!-- box -->
                            <div class="modal fade" id="infoDokterKandunganDuaModalCenter" tabindex="-1" role="dialog" aria-labelledby="infoDokterKandunganDuaModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="infoDokterKandunganDuaModalCenterTitle">INFO
                                                DOKTER</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <small>Nama Dokter</small><br>
                                                    <b>dr. Rudy B.Leonardi, Sp.OG</b><br>
                                                    <small>Spesialis</small><br>
                                                    <b>Kandungan</b>
                                                </div>
                                                <div class="col-sm-3 text-center">
                                                    <img src="<?= base_url(); ?>assets/img/dr.rudy.png" alt="rudy" class="img-thumbnail" width="100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- akhir box -->
                            <div class="col-md-3 text-center mb-3">
                                <img src="<?= base_url(); ?>assets/img/dr.eddy tiro.png" class="rounded-circle" width="100" alt="edditiro">
                                <h6 class="nama-dokter">dr. Eddy Tiro, Sp.OG</h6>
                                <a href="#" class="btn btn-outline-info tombol2" data-toggle="modal" data-target="#infoDokterKandunganTigaModalCenter">Info
                                    Dokter</a>
                            </div>
                            <div class="col-md-9">
                                <div class="col-sm-12 text-center mb-4">Jadwal Praktek</div>
                                <div class="row text-center">
                                    <div class="col-sm">
                                        <p class="day">Senin</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Selasa</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Rabu</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Kamis</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Jumat</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Sabtu</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Minggu</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                </div>
                            </div>
                            <!-- box -->
                            <div class="modal fade" id="infoDokterKandunganTigaModalCenter" tabindex="-1" role="dialog" aria-labelledby="infoDokterKandunganTigaModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="infoDokterKandunganTigaModalCenterTitle">INFO
                                                DOKTER</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <small>Nama Dokter</small><br>
                                                    <b>dr. Eddy Tiro, Sp.OG</b><br>
                                                    <small>Spesialis</small><br>
                                                    <b>Kandungan</b>
                                                </div>
                                                <div class="col-sm-3 text-center">
                                                    <img src="<?= base_url(); ?>assets/img/dr.eddy tiro.png" alt="edditiro" class="img-thumbnail" width="100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- akhir box -->
                            <div class="col-md-3 text-center mb-3">
                                <img src="<?= base_url(); ?>assets/img/aman.png" class="rounded-circle" width="100" alt="aman">
                                <h6 class="nama-dokter">Dr.dr. Abadi Aman, Sp.OG</h6>
                                <a href="#" class="btn btn-outline-info tombol2" data-toggle="modal" data-target="#infoDokterKandunganEmpatModalCenter">Info
                                    Dokter</a>
                            </div>
                            <div class="col-md-9">
                                <div class="col-sm-12 text-center mb-4">Jadwal Praktek</div>
                                <div class="row text-center">
                                    <div class="col-sm">
                                        <p class="day">Senin</p>
                                        <p class="time">08.00-10.00</p>
                                        <p><b>*</b></p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Selasa</p>
                                        <p class="time">08.00-10.00</p>
                                        <p><b>*</b></p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Rabu</p>
                                        <p class="time">08.00-10.00</p>
                                        <p><b>*</b></p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Kamis</p>
                                        <p class="time">08.00-10.00</p>
                                        <p><b>*</b></p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Jumat</p>
                                        <p class="time">08.00-10.00</p>
                                        <p><b>*</b></p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Sabtu</p>
                                        <p class="time">08.00-10.00</p>
                                        <p><b>*</b></p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Minggu</p>
                                        <p class="time">----</p>
                                        <p><b>*</b></p>
                                    </div>
                                </div>
                            </div>
                            <!-- box -->
                            <div class="modal fade" id="infoDokterKandunganEmpatModalCenter" tabindex="-1" role="dialog" aria-labelledby="infoDokterKandunganEmpatModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="infoDokterKandunganEmpatModalCenterTitle">INFO
                                                DOKTER</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <small>Nama Dokter</small><br>
                                                    <b>Dr.dr. Abadi Aman, Sp.OG</b><br>
                                                    <small>Spesialis</small><br>
                                                    <b>Kandungan</b>
                                                </div>
                                                <div class="col-sm-3 text-center">
                                                    <img src="<?= base_url(); ?>assets/img/aman.png" alt="aman" class="img-thumbnail" width="100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- akhir box -->
                            <div class="col-md-3 text-center mb-3">
                                <img src="<?= base_url(); ?>assets/img/eddy.png" class="rounded-circle" width="100" alt="eddihartono">
                                <h6 class="nama-dokter">dr. Eddy Hartono, Sp.OG(k)</h6>
                                <a href="#" class="btn btn-outline-info tombol2" data-toggle="modal" data-target="#infoDokterKandunganLimaModalCenter">Info
                                    Dokter</a>
                            </div>
                            <div class="col-md-9">
                                <div class="col-sm-12 text-center mb-4">Jadwal Dokter</div>
                                <div class="row text-center">
                                    <div class="col-sm">
                                        <p class="day">Senin</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Selasa</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Rabu</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Kamis</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Jumat</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Sabtu</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Minggu</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                </div>
                            </div>
                            <!-- box -->
                            <div class="modal fade" id="infoDokterKandunganLimaModalCenter" tabindex="-1" role="dialog" aria-labelledby="infoDokterKandunganLimaModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="infoDokterKandunganLimaModalCenterTitle">INFO
                                                DOKTER</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <small>Nama Dokter</small><br>
                                                    <b>dr. Eddy Hartono, Sp.OG(k)</b><br>
                                                    <small>Spesialis</small><br>
                                                    <b>Kandungan</b>
                                                </div>
                                                <div class="col-sm-3 text-center">
                                                    <img src="<?= base_url(); ?>assets/img/eddy.png" alt="eddihartono" class="img-thumbnail" width="100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- akhir box -->
                            <div class="col-md-3 text-center mb-3">
                                <img src="<?= base_url(); ?>assets/img/dr.johnsen.png" class="rounded-circle" width="100" alt="johnsen">
                                <h6 class="nama-dokter">dr. Johnsen Mailoa, Sp.OG</h6>
                                <a href="#" class="btn btn-outline-info tombol2" data-toggle="modal" data-target="#infoDokterKandunganEnamModalCenter">Info
                                    Dokter</a>
                            </div>
                            <div class="col-md-9">
                                <div class="col-sm-12 text-center mb-4">Jadwal Dokter</div>
                                <div class="row text-center">
                                    <div class="col-sm">
                                        <p class="day">Senin</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Selasa</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Rabu</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Kamis</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Jumat</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Sabtu</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Minggu</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                </div>
                            </div>
                            <!-- box -->
                            <div class="modal fade" id="infoDokterKandunganEnamModalCenter" tabindex="-1" role="dialog" aria-labelledby="infoDokterKandunganEnamModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="infoDokterKandunganEnamModalCenterTitle">INFO
                                                DOKTER</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <small>Nama Dokter</small><br>
                                                    <b>dr. Johnsen Mailoa, Sp.OG</b><br>
                                                    <small>Spesialis</small><br>
                                                    <b>Kandungan</b>
                                                </div>
                                                <div class="col-sm-3 text-center">
                                                    <img src="<?= base_url(); ?>assets/img/dr.johnsen.png" alt="johnsen" class="img-thumbnail" width="100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- akhir box -->
                            <div class="col-md-3 text-center mb-3">
                                <img src="<?= base_url(); ?>assets/img/elisabeth.png" class="rounded-circle" width="100" alt="elisabeth">
                                <h6 class="nama-dokter">Dr. dr. Elizabeth C.Jusuf, M.Kes, Sp.OG(k)</h6>
                                <a href="#" class="btn btn-outline-info tombol2" data-toggle="modal" data-target="#infoDokterKandunganTujuhModalCenter">Info
                                    Dokter</a>
                            </div>
                            <div class="col-md-9">
                                <div class="col-sm-12 text-center mb-4">Jadwal Praktek</div>
                                <div class="row text-center">
                                    <div class="col-sm">
                                        <p class="day">Senin</p>
                                        <p class="time">10.00-12.00</p>
                                        <p class="time">17.00-21.00</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Selasa</p>
                                        <p class="time">17.00-21.00</p>
                                        <p><b>*</b></p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Rabu</p>
                                        <p class="time">17.00-21.00</p>
                                        <p><b>*</b></p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Kamis</p>
                                        <p class="time">10.00-12.00</p>
                                        <p class="time">17.00-21.00</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Jumat</p>
                                        <p class="time">17.00-21.00</p>
                                        <p><b>*</b></p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Sabtu</p>
                                        <p class="time">10.00-12.00</p>
                                        <p class="time">17.00-21.00</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Minggu</p>
                                        <p class="time">----</p>
                                        <p><b>*</b></p>
                                    </div>
                                </div>
                            </div>
                            <!-- box -->
                            <div class="modal fade" id="infoDokterKandunganTujuhModalCenter" tabindex="-1" role="dialog" aria-labelledby="infoDokterKandunganTujuhModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="infoDokterKandunganTujuhModalCenterTitle">INFO
                                                DOKTER</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <small>Nama Dokter</small><br>
                                                    <b>Dr. dr. Elizabeth C.Jusuf, M.Kes, Sp.OG(k)</b><br>
                                                    <small>Spesialis</small><br>
                                                    <b>Kandungan</b>
                                                </div>
                                                <div class="col-sm-3 text-center">
                                                    <img src="<?= base_url(); ?>assets/img/elisabeth.png" alt="elisabeth" class="img-thumbnail" width="100">
                                                </div>
                                                <div class="col-sm-12">
                                                    <h4 class="praktek text-center">Tentang Dokter</h4>
                                                </div>
                                                <div class="col-sm-12">
                                                    <p>
                                                        <strong>Riwayat Pendidikan :</strong>
                                                    </p>
                                                    <ul>
                                                        <li><b>SD :</b> SD St. Joseph Katolik Rajawali, Makassar(1983)</li>
                                                        <li><b>SMP :</b> SMP Katolik Rajawali, Makassar(1989)</li>
                                                        <li><b>SMA :</b> SMA Negeri 1, Makassar(1992)</li>
                                                        <li><b>S1 :</b> Fak.Kedokteran Universitas Hasanuddin, Makassar(1995)</li>
                                                        <li><b>Spesialis :</b> PPDS-1 Spesialis Obstetri & Ginekologi Fak.Kedokteran UNHAS, Makassar(2005)</li>
                                                        <li><b>S2 :</b> S2 Biomedik Combined Degree Pasca Sarjana UNHAS, Makassar(2005)</li>
                                                        <li><b>S3 :</b> Ilmu Kedokteran Doktoral Pasca Sarjana UNHAS, Makassar(2011)</li>
                                                        <li><b>Konsultan :</b> PPDS-2 Konsultan Obstetri & Ginekologi Sosial (K-Obgnisos) Jonglosemar Universitas Gajah Mada, Yogyakarta(2013)</li>
                                                    </ul>
                                                    <p>
                                                        <strong>Riwayat Pekerjaan :</strong>
                                                    </p>
                                                    <ul>
                                                        <li>Dokter Umum/UGD RS. Graha Juanda Bekasi(2002)</li>
                                                        <li>Dokter PTT Puskesmas Tapalang Kab. Mamuju(2002 - 2004)</li>
                                                        <li>Dokter Obgin BLU RS. Wahidin Sudirohusodo Makassar(2010 - Sekarang)</li>
                                                        <li>Dokter Obgin RS. Wahidin Sudirohusodo Makassar(2011 - Sekarang)</li>
                                                        <li>Dokter Obgin RS. Siloam Makassar(2012 - Sekarang)</li>
                                                        <li>Anggota Tim Audit Maternal Perinatal BLU RS. Wahidin Sudirohusodo Makassar(2014 - Sekarang)</li>
                                                        <li>Dokter Obgin RSIA Catherine Booth Makassar(2019 - Sekarang)</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- akhir box -->
                            <div class="col-md-3 text-center mb-3">
                                <img src="<?= base_url(); ?>assets/img/dr.meggy.png" class="rounded-circle" width="100" alt="maggy">
                                <h6 class="nama-dokter">dr. Margaretha J.Wewengkang, Sp.OG</h6>
                                <a href="#" class="btn btn-outline-info tombol2" data-toggle="modal" data-target="#infoDokterKandunganDelapanModalCenter">Info
                                    Dokter</a>
                            </div>
                            <div class="col-md-9">
                                <div class="col-sm-12 text-center mb-4">Jadwal Dokter</div>
                                <div class="row text-center">
                                    <div class="col-sm">
                                        <p class="day">Senin</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Selasa</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Rabu</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Kamis</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Jumat</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Sabtu</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Minggu</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                </div>
                            </div>
                            <!-- box -->
                            <div class="modal fade" id="infoDokterKandunganDelapanModalCenter" tabindex="-1" role="dialog" aria-labelledby="infoDokterKandunganDelapanModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="infoDokterKandunganDelapanModalCenterTitle">INFO
                                                DOKTER</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <small>Nama Dokter</small><br>
                                                    <b>dr. Margaretha J.Wewengkang, Sp.OG</b><br>
                                                    <small>Spesialis</small><br>
                                                    <b>Kandungan</b>
                                                </div>
                                                <div class="col-sm-3 text-center">
                                                    <img src="<?= base_url(); ?>assets/img/dr.meggy.png" alt="maggy" class="img-thumbnail" width="100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- akhir box -->
                            <div class="col-md-3 text-center mb-3">
                                <img src="<?= base_url(); ?>assets/img/dr.ellen.png" class="rounded-circle" width="100" alt="ellen">
                                <h6 class="nama-dokter">dr. Ellen Wewengkang, Sp.OG</h6>
                                <a href="#" class="btn btn-outline-info tombol2" data-toggle="modal" data-target="#infoDokterKandunganSepuluhModalCenter">Info
                                    Dokter</a>
                            </div>
                            <div class="col-md-9">
                                <div class="col-sm-12 text-center mb-4">Jadwal Dokter</div>
                                <div class="row text-center">
                                    <div class="col-sm">
                                        <p class="day">Senin</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Selasa</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Rabu</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Kamis</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Jumat</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Sabtu</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Minggu</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                </div>
                            </div>
                            <!-- box -->
                            <div class="modal fade" id="infoDokterKandunganSepuluhModalCenter" tabindex="-1" role="dialog" aria-labelledby="infoDokterKandunganSepuluhModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="infoDokterKandunganSepuluhModalCenterTitle">INFO
                                                DOKTER</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <small>Nama Dokter</small><br>
                                                    <b>dr. Ellen Wewengkang, Sp.OG</b><br>
                                                    <small>Spesialis</small><br>
                                                    <b>Kandungan</b>
                                                </div>
                                                <div class="col-sm-3 text-center">
                                                    <img src="<?= base_url(); ?>assets/img/dr.ellen.png" alt="ellen" class="img-thumbnail" width="100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- akhir box -->
                        </div>
                        <div class="row text-center mt-4">
                            <div class="col-sm-12">
                                <p class="catatan">*Catatan : Tanda (*) Jadwal Praktek On-Call dan Poli Perjanjian</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-DokterTHT" role="tabpanel" aria-labelledby="v-pills-DokterTHT-tab">
                        <h4>Dokter THT</h4>
                        <div class="row">
                            <div class="col-md-3 text-center mb-3">
                                <img src="<?= base_url(); ?>assets/img/dr.linda.png" class="rounded-circle" width="100" alt="linda">
                                <h6 class="nama-dokter">dr. Linda Kodrat, Sp.THT</h6>
                                <a href="#" class="btn btn-outline-info tombol2" data-toggle="modal" data-target="#infoDokterTHTSatuModalCenter">Info
                                    Dokter</a>
                            </div>
                            <div class="col-md-9">
                                <div class="col-sm-12 text-center mb-4">Jadwal Praktek</div>
                                <div class="row text-center">
                                    <div class="col-sm">
                                        <p class="day">Senin</p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Selasa</p>
                                        <p class="time">11.00-13.00</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Rabu</p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Kamis</p>
                                        <p class="time">11.00-13.00</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Jumat</p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Sabtu</p>
                                        <p class="time">11.00-13.00</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Minggu</p>
                                        <p class="time">----</p>
                                    </div>
                                </div>
                            </div>
                            <!-- box -->
                            <div class="modal fade" id="infoDokterTHTSatuModalCenter" tabindex="-1" role="dialog" aria-labelledby="infoDokterTHTSatuModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="infoDokterTHTSatuModalCenterTitle">INFO
                                                DOKTER</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <small>Nama Dokter</small><br>
                                                    <b>dr. Linda Kodrat, Sp.THT</b><br>
                                                    <small>Spesialis</small><br>
                                                    <b>THT</b>
                                                </div>
                                                <div class="col-sm-3 text-center">
                                                    <img src="<?= base_url(); ?>assets/img/dr.linda.png" alt="linda" class="img-thumbnail" width="100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- akhir box -->
                            <div class="col-md-3 text-center mb-3">
                                <img src="<?= base_url(); ?>assets/img/dr.nova.png" class="rounded-circle" width="100" alt="nova">
                                <h6 class="nama-dokter">dr. Nova A.L. Pieter, Sp.THT-KL</h6>
                                <a href="#" class="btn btn-outline-info tombol2" data-toggle="modal" data-target="#infoDokterTHTDuaModalCenter">Info
                                    Dokter</a>
                            </div>
                            <div class="col-md-9">
                                <div class="col-sm-12 text-center mb-4">Jadwal Praktek</div>
                                <div class="row text-center">
                                    <div class="col-sm">
                                        <p class="day">Senin</p>
                                        <p class="time">10.00-11.00</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Selasa</p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Rabu</p>
                                        <p class="time">10.00-11.00</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Kamis</p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Jumat</p>
                                        <p class="time">10.00-11.00</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Sabtu</p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Minggu</p>
                                        <p class="time">----</p>
                                    </div>
                                </div>
                            </div>
                            <!-- box -->
                            <div class="modal fade" id="infoDokterTHTDuaModalCenter" tabindex="-1" role="dialog" aria-labelledby="infoDokterTHTDuaModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="infoDokterTHTDuaModalCenterTitle">INFO
                                                DOKTER</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <small>Nama Dokter</small><br>
                                                    <b>dr. Nova A.L. Pieter, Sp.THT-KL</b><br>
                                                    <small>Spesialis</small><br>
                                                    <b>THT</b>
                                                </div>
                                                <div class="col-sm-3 text-center">
                                                    <img src="<?= base_url(); ?>assets/img/dr.nova.png" alt="nova" class="img-thumbnail" width="100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- akhir box -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-DokterBedahAnak" role="tabpanel" aria-labelledby="v-pills-DokterBedahAnak-tab">
                        <h4>Dokter Bedah Anak</h4>
                        <div class="row">
                            <div class="col-md-3 text-center mb-3">
                                <img src="<?= base_url(); ?>assets/img/prof.farid.png" class="rounded-circle" width="100" alt="farid">
                                <h6 class="nama-dokter">Prof.Dr.dr. Farid N Mantu, Sp.BA</h6>
                                <a href="#" class="btn btn-outline-info tombol2" data-toggle="modal" data-target="#infoDokterBedahAnakModalCenter">Info
                                    Dokter</a>
                            </div>
                            <div class="col-md-9">
                                <div class="col-sm-12 text-center mb-4">Jadwal Praktek</div>
                                <div class="row text-center">
                                    <div class="col-sm">
                                        <p class="day">Senin</p>
                                        <p class="time">----</p>
                                        <p><b>*</b></p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Selasa</p>
                                        <p class="time">----</p>
                                        <p><b>*</b></p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Rabu</p>
                                        <p class="time">----</p>
                                        <p><b>*</b></p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Kamis</p>
                                        <p class="time">----</p>
                                        <p><b>*</b></p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Jumat</p>
                                        <p class="time">----</p>
                                        <p><b>*</b></p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Sabtu</p>
                                        <p class="time">----</p>
                                        <p><b>*</b></p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Minggu</p>
                                        <p class="time">----</p>
                                        <p><b>*</b></p>
                                    </div>
                                </div>
                            </div>
                            <!-- box -->
                            <div class="modal fade" id="infoDokterBedahAnakModalCenter" tabindex="-1" role="dialog" aria-labelledby="infoDokterBedahAnakModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="infoDokterBedahAnakModalCenterTitle">INFO
                                                DOKTER</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <small>Nama Dokter</small><br>
                                                    <b>Prof.Dr. Farid N Mantu, Sp.BA</b><br>
                                                    <small>Spesialis</small><br>
                                                    <b>Bedah Anak</b>
                                                </div>
                                                <div class="col-sm-3 text-center">
                                                    <img src="<?= base_url(); ?>assets/img/prof.farid.png" alt="farid" class="img-thumbnail" width="100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- akhirbox -->
                        </div>
                        <div class="row text-center mt-4">
                            <div class="col-sm-12">
                                <p class="catatan">*Catatan : Tanda (*) On-Call</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-DokterBedahUmum" role="tabpanel" aria-labelledby="v-pills-DokterBedahUmum-tab">
                        <h4>Dokter Bedah Umum</h4>
                        <div class="row">
                            <div class="col-md-3 text-center mb-3">
                                <img src="<?= base_url(); ?>assets/img/dr.tri.png" class="rounded-circle" width="100" alt="tri">
                                <h6 class="nama-dokter">dr. Triwahjudi R Karjosukarso, Sp.B,MARS</h6>
                                <a href="#" class="btn btn-outline-info tombol2" data-toggle="modal" data-target="#infoDokterBedahUmumModalCenter">Info
                                    Dokter</a>
                            </div>
                            <div class="col-md-9">
                                <div class="col-sm-12 text-center mb-4">Jadwal Praktek</div>
                                <div class="row text-center">
                                    <div class="col-sm">
                                        <p class="day">Senin</p>
                                        <p class="time">----</p>
                                        <p><b>*</b></p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Selasa</p>
                                        <p class="time">----</p>
                                        <p><b>*</b></p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Rabu</p>
                                        <p class="time">----</p>
                                        <p><b>*</b></p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Kamis</p>
                                        <p class="time">----</p>
                                        <p><b>*</b></p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Jumat</p>
                                        <p class="time">----</p>
                                        <p><b>*</b></p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Sabtu</p>
                                        <p class="time">----</p>
                                        <p><b>*</b></p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Minggu</p>
                                        <p class="time">----</p>
                                        <p><b>*</b></p>
                                    </div>
                                </div>
                            </div>
                            <!-- box -->
                            <div class="modal fade" id="infoDokterBedahUmumModalCenter" tabindex="-1" role="dialog" aria-labelledby="infoDokterBedahUmumModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="infoDokterBedahUmumModalCenterTitle">INFO
                                                DOKTER</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <small>Nama Dokter</small><br>
                                                    <b>dr. Triwahjudi R Karjosukarso, Sp.B,MARS</b><br>
                                                    <small>Spesialis</small><br>
                                                    <b>Bedah Umum</b>
                                                </div>
                                                <div class="col-sm-3 text-center">
                                                    <img src="<?= base_url(); ?>assets/img/dr.tri.png" alt="tri" class="img-thumbnail" width="100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- akhir box -->
                        </div>
                        <div class="row text-center mt-4">
                            <div class="col-sm-12">
                                <p class="catatan">*Catatan : Tanda (*) On-Call</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-DokterPenyakitDalam" role="tabpanel" aria-labelledby="v-pills-DokterPenyakitDalam-tab">
                        <h4>Dokter Penyakit Dalam</h4>
                        <div class="row">
                            <div class="col-md-3 text-center mb-3">
                                <img src="<?= base_url(); ?>assets/img/direkturnew.png" class="rounded-circle" width="100" alt="enrico">
                                <h6 class="nama-dokter">dr. Enrico Marentek, Sp.PD</h6>
                                <a href="#" class="btn btn-outline-info tombol2" data-toggle="modal" data-target="#infoDokterPenyakitDalamModalCenter">Info
                                    Dokter</a>
                            </div>
                            <div class="col-md-9">
                                <div class="col-sm-12 text-center mb-4">Jadwal Praktek</div>
                                <div class="row text-center">
                                    <div class="col-sm">
                                        <p class="day">Senin</p>
                                        <p><b>*</b></p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Selasa</p>
                                        <p><b>*</b></p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Rabu</p>
                                        <p><b>*</b></p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Kamis</p>
                                        <p><b>*</b></p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Jumat</p>
                                        <p><b>*</b></p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Sabtu</p>
                                        <p><b>*</b></p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Minggu</p>
                                        <p><b>*</b></p>
                                    </div>
                                </div>
                            </div>
                            <!-- box -->
                            <div class="modal fade" id="infoDokterPenyakitDalamModalCenter" tabindex="-1" role="dialog" aria-labelledby="infoDokterPenyakitDalamModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="infoDokterPenyakitDalamModalCenterTitle">INFO
                                                DOKTER</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <small>Nama Dokter</small><br>
                                                    <b>dr. Enrico Marentek, Sp.PD</b><br>
                                                    <small>Spesialis</small><br>
                                                    <b>Penyakit Dalam</b>
                                                </div>
                                                <div class="col-sm-3 text-center">
                                                    <img src="<?= base_url(); ?>assets/img/direkturnew.png" alt="enrico" class="img-thumbnail" width="100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- akhir box -->
                        </div>
                        <div class="row text-center mt-4">
                            <div class="col-sm-12">
                                <p class="catatan">*Catatan : Tanda (*) On-Call</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-DokterGigi" role="tabpanel" aria-labelledby="v-pills-DokterGigi-tab">
                        <h4>Dokter Gigi</h4>
                        <div class="row">
                            <div class="col-md-3 text-center mb-3">
                                <img src="<?= base_url(); ?>assets/img/ike.png" class="rounded-circle" width="100" alt="maria">
                                <h6 class="nama-dokter">drg. Maria M.I Handajani</h6>
                                <a href="#" class="btn btn-outline-info tombol2" data-toggle="modal" data-target="#infoDokterGigiSatuModalCenter">Info
                                    Dokter</a>
                            </div>
                            <div class="col-md-9">
                                <div class="col-sm-12 text-center mb-4">Jadwal Praktek</div>
                                <div class="row text-center">
                                    <div class="col-sm">
                                        <p class="day">Senin</p>
                                        <p class="time">17.00-20.00</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Selasa</p>
                                        <p class="time">17.00-20.00</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Rabu</p>
                                        <p class="time">17.00-20.00</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Kamis</p>
                                        <p class="time">17.00-20.00</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Jumat</p>
                                        <p class="time">17.00-20.00</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Sabtu</p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Minggu</p>
                                        <p class="time">----</p>
                                    </div>
                                </div>
                            </div>
                            <!-- box -->
                            <div class="modal fade" id="infoDokterGigiSatuModalCenter" tabindex="-1" role="dialog" aria-labelledby="infoDokterGigiSatuModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="infoDokterGigiSatuModalCenterTitle">INFO
                                                DOKTER</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <small>Nama Dokter</small><br>
                                                    <b>drg. Maria M.I Handajani</b><br>
                                                    <small>Spesialis</small><br>
                                                    <b>Gigi</b>
                                                </div>
                                                <div class="col-sm-3 text-center">
                                                    <img src="<?= base_url(); ?>assets/img/ike.png" alt="maria" class="img-thumbnail" width="100">
                                                </div>
                                                <div class="col-sm-12">
                                                    <h4 class="praktek text-center">Tentang Dokter</h4>
                                                </div>
                                                <div class="col-sm-12">
                                                    <p>
                                                        <strong>Riwayat Pendidikan :</strong>
                                                    </p>
                                                    <ul>
                                                        <li><b>SD</b> : SD Katolik Rogojampi (1967)</li>
                                                        <li><b>SMP</b> : SMP Katolik Rogojampi (1970)</li>
                                                        <li><b>SMA</b> : SMA Katolik Jember (1973)</li>
                                                        <li><b>Fakultas Kedokteran Gigi</b> : Fakultas Kedokteran
                                                            Gigi Universitas Hasanuddin Makassar (1981)</li>
                                                    </ul>
                                                    <p>
                                                        <strong>Riwayat Pekerjaan :</strong>
                                                    </p>
                                                    <ul>
                                                        <li>Poli Gigi RSU Dadi Makassar (April 1982 - Februari
                                                            1993)</li>
                                                        <li>RS Wahidin Sudirohusodo Makassar (Maret 1993 - Februari
                                                            2015)</li>
                                                        <li>RSIA Catherine Booth Makassar (1985 - Sekarang)</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- akhir box -->
                            <div class="col-md-3 text-center mb-3">
                                <img src="<?= base_url(); ?>assets/img/patricia.png" class="rounded-circle" width="100" alt="patricia">
                                <h6 class="nama-dokter">drg. Patricia Iskandar, Sp.Ort</h6>
                                <a href="#" class="btn btn-outline-info tombol2" data-toggle="modal" data-target="#infoDokterGigiDuaModalCenter">Info
                                    Dokter</a>
                            </div>
                            <div class="col-md-9">
                                <div class="col-sm-12 text-center mb-4">Jadwal Dokter</div>
                                <div class="row text-center">
                                    <div class="col-sm">
                                        <p class="day">Senin</p>
                                        <p class="time">09.00-12.00</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Selasa</p>
                                        <p class="time">09.00-12.00</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Rabu</p>
                                        <p class="time">09.00-12.00</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Kamis</p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Jumat</p>
                                        <p class="time">09.00-12.00</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Sabtu</p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Minggu</p>
                                        <p class="time">----</p>
                                    </div>
                                </div>
                            </div>
                            <!-- box -->
                            <div class="modal fade" id="infoDokterGigiDuaModalCenter" tabindex="-1" role="dialog" aria-labelledby="infoDokterGigiDuaModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="infoDokterGigiDuaModalCenterTitle">INFO
                                                DOKTER</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <small>Nama Dokter</small><br>
                                                    <b>drg. Patricia Iskandar, Sp.Ort</b><br>
                                                    <small>Spesialis</small><br>
                                                    <b>Gigi</b>
                                                </div>
                                                <div class="col-sm-3 text-center">
                                                    <img src="<?= base_url(); ?>assets/img/patricia.png" alt="patricia" class="img-thumbnail" width="100">
                                                </div>
                                                <div class="col-sm-12">
                                                    <h4 class="praktek text-center">Tentang Dokter</h4>
                                                </div>
                                                <div class="col-sm-12">
                                                    <p>
                                                        <strong>Riwayat Pendidikan :</strong>
                                                    </p>
                                                    <ul>
                                                        <li><b>SD</b> : SD Advent, Makassar (1988-1994)</li>
                                                        <li><b>SLTP</b> : SLTP Advent, Makassar (1994-1997)</li>
                                                        <li><b>SMU</b> : SMU Negeri I, Makassar (1997-2000)</li>
                                                        <li><b>Fakultas Kedokteran Gigi</b> :
                                                            <ul>
                                                                <li>Universitas Hasanuddin Makassar Ditamatkan
                                                                    sebagai Sarjana Kedokteran Gigi (2000-2004)</li>
                                                                <li>Universitas Hasanuddin Makassar Ditamatkan
                                                                    sebagai Dokter Gigi (2004-2006)</li>
                                                            </ul>
                                                        </li>
                                                        <li><b>Pendidikan Dokter Gigi Spesialis Ortodonsia</b> :
                                                            Fakultas Kedokteran Gigi, Universitas Indonesia,
                                                            Jakarta Ditamatkan sebagai Ortodonsis</li>
                                                    </ul>
                                                    <p>
                                                        <strong>Riwayat Pekerjaan :</strong>
                                                    </p>
                                                    <ul>
                                                        <li>Puskesmas Tamamaung, Makassar, Sebagai dokter gigi
                                                            magang (Januari-Februari 2007)</li>
                                                        <li>RSIA Catherine Booth, Makassar, Sebagai Dokter Gigi
                                                            (Januari - Juli 2007)</li>
                                                        <li>Klinik Dent Smile, Jakarta, Sebagai Dokter Gigi (April
                                                            2008 - September 2011)</li>
                                                        <li>Klinik CHS, Jakarta, Sebagai orthodontist (Maret -
                                                            Agustus 2011)</li>
                                                        <li>RSIA Catherine Booth, Makassar, sebagai orthodontist
                                                            (Oktober 2011 - Sekarang)</li>
                                                        <li>Siloam Hospital, Makassar, sebagai orthodontist
                                                            (September 2012 - Sekarang)</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- akhir box -->
                            <div class="col-md-3 text-center mb-3">
                                <img src="<?= base_url(); ?>assets/img/rian.png" class="rounded-circle" width="100" alt="rian">
                                <h6 class="nama-dokter">drg. Rian</h6>
                                <a href="#" class="btn btn-outline-info tombol2" data-toggle="modal" data-target="#infoDokterGigiTigaModalCenter">Info
                                    Dokter</a>
                            </div>
                            <div class="col-md-9">
                                <div class="col-sm-12 text-center mb-4">Jadwal Dokter</div>
                                <div class="row text-center">
                                    <div class="col-sm">
                                        <p class="day">Senin</p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Selasa</p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Rabu</p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Kamis</p>
                                        <p class="time">09.00-12.00</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Jumat</p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Sabtu</p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Minggu</p>
                                        <p class="time">----</p>
                                    </div>
                                </div>
                            </div>
                            <!-- box -->
                            <div class="modal fade" id="infoDokterGigiTigaModalCenter" tabindex="-1" role="dialog" aria-labelledby="infoDokterGigiTigaModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="infoDokterGigiTigaModalCenterTitle">INFO
                                                DOKTER</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <small>Nama Dokter</small><br>
                                                    <b>drg. Rian</b><br>
                                                    <small>Spesialis</small><br>
                                                    <b>Gigi</b>
                                                </div>
                                                <div class="col-sm-3 text-center">
                                                    <img src="<?= base_url(); ?>assets/img/rian.png" alt="rian" class="img-thumbnail" width="100">
                                                </div>
                                                <div class="col-sm-12">
                                                    <h4 class="praktek text-center">Tentang Dokter</h4>
                                                </div>
                                                <div class="col-sm-12">
                                                    <p>
                                                        <strong>Riwayat Pendidikan :</strong>
                                                    </p>
                                                    <ul>
                                                        <li><b>SD</b> : SD Advent, Makassar (1997)</li>
                                                        <li><b>SLTP</b> : SLTP Advent, Makassar (2000)</li>
                                                        <li><b>SMU</b> : SMU Negeri I, Makassar (2003)</li>
                                                        <li><b>Perguruan Tinggi</b> : Universitas Hasanuddin,
                                                            Makassar (2011)</li>
                                                    </ul>
                                                    <p>
                                                        <strong>Riwayat Pekerjaan :</strong>
                                                    </p>
                                                    <ul>
                                                        <li>Dokter Gigi PTT Puskesmas Batu Sura, Kecamatan Rembon,
                                                            Kabupaten Tana Toraja, Sulawesi Selatan (2012-2013)</li>
                                                        <li>RSIA Catherine Booth, Makassar (2014-Sekarang)</li>
                                                        <li>Siloam Hospital, Makassar (2014 - Sekarang)</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- akhir box -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-DokterPatologiAnatomi" role="tabpanel" aria-labelledby="v-pills-DokterPatologiAnatomi-tab">
                        <h4>Dokter Patologi Anatomi</h4>
                        <div class="row">
                            <div class="col-md-3 text-center mb-3">
                                <img src="<?= base_url(); ?>assets/img/anna2.png" class="rounded-circle" width="100" alt="anna">
                                <h6 class="nama-dokter">dr. Anna M Tjoanto, Sp.PA</h6>
                                <a href="#" class="btn btn-outline-info tombol2" data-toggle="modal" data-target="#infoDokterPatologiAnatomiModalCenter">Info
                                    Dokter</a>
                            </div>
                            <div class="col-md-9">
                                <div class="col-sm-12 text-center mb-4">Jadwal Dokter</div>
                                <div class="row text-center">
                                    <div class="col-sm">
                                        <p class="day">Senin</p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Selasa</p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Rabu</p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Kamis</p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Jumat</p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Sabtu</p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Minggu</p>
                                        <p class="time">----</p>
                                    </div>
                                </div>
                            </div>
                            <!-- box -->
                            <div class="modal fade" id="infoDokterPatologiAnatomiModalCenter" tabindex="-1" role="dialog" aria-labelledby="infoDokterPatologiAnatomiModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="infoDokterPatologiAnatomiModalCenterTitle">INFO
                                                DOKTER</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <small>Nama Dokter</small><br>
                                                    <b>dr. Anna M Tjoanto, Sp.PA</b><br>
                                                    <small>Spesialis</small><br>
                                                    <b>Patologi Anatomi</b>
                                                </div>
                                                <div class="col-sm-3 text-center">
                                                    <img src="<?= base_url(); ?>assets/img/anna2.png" alt="anna" class="img-thumbnail" width="100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- akhir box -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-DokterRadiologi" role="tabpanel" aria-labelledby="v-pills-DokterRadiologi-tab">
                        <h4>Dokter Radiologi</h4>
                        <div class="row">
                            <div class="col-md-3 text-center mb-3">
                                <img src="<?= base_url(); ?>assets/img/dr.hendra.png" class="rounded-circle" width="100" alt="hendra">
                                <h6 class="nama-dokter">dr. Andi Hendra Y, Sp.Rad, M.Kes</h6>
                                <a href="#" class="btn btn-outline-info tombol2" data-toggle="modal" data-target="#infoDokterRadiologiModalCenter">Info
                                    Dokter</a>
                            </div>
                            <div class="col-md-9">
                                <div class="col-sm-12 text-center mb-4">Jadwal Praktek</div>
                                <div class="row text-center">
                                    <div class="col-sm">
                                        <p class="day">Senin</p>
                                        <p><b>*</b></p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Selasa</p>
                                        <p><b>*</b></p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Rabu</p>
                                        <p><b>*</b></p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Kamis</p>
                                        <p><b>*</b></p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Jumat</p>
                                        <p><b>*</b></p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Sabtu</p>
                                        <p><b>*</b></p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Minggu</p>
                                        <p><b>*</b></p>
                                    </div>
                                </div>
                            </div>
                            <!-- box -->
                            <div class="modal fade" id="infoDokterRadiologiModalCenter" tabindex="-1" role="dialog" aria-labelledby="infoDokterRadiologiModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="infoDokterRadiologiModalCenterTitle">INFO
                                                DOKTER</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <small>Nama Dokter</small><br>
                                                    <b>dr. Andi Hendra Y, Sp.Rad,M.Kes</b><br>
                                                    <small>Spesialis</small><br>
                                                    <b>Radiologi</b>
                                                </div>
                                                <div class="col-sm-3 text-center">
                                                    <img src="<?= base_url(); ?>assets/img/dr.hendra.png" alt="hendra" class="img-thumbnail" width="100">
                                                </div>
                                                <div class="col-sm-12">
                                                    <h4 class="praktek text-center">Tentang Dokter</h4>
                                                </div>
                                                <div class="col-sm-12">
                                                    <p>
                                                        <strong>Riwayat Pendidikan :</strong>
                                                    </p>
                                                    <ul>
                                                        <li><b>SD</b> : SD Inpres Sambung Jawa III Makassar, Lulus (1982)</li>
                                                        <li><b>SMP</b> : SMPN Kampiri Kab.Wajo Sulsel, Lulus (1991)</li>
                                                        <li><b>SMA</b> : SMAN 3 Makassar, Lulus (1994)</li>
                                                        <li><b>Perguruan Tinggi</b> : Fakultas Kedokteran UNHAS Makassar, Lulus (1999)</li>
                                                        <li><b>Profesi Dokter</b> : Fakultas Kedokteran UNHAS Makassar, Lulus (2001)</li>
                                                        <li><b>PPDS</b> : Radiologi dan ilmu Biomedik Fakultas Kedokteran Makassar, Lulus (2016)</li>
                                                    </ul>
                                                    <p>
                                                        <strong>Riwayat Pekerjaan :</strong>
                                                    </p>
                                                    <ul>
                                                        <li>Dokter PKM Lara Kab.Mamuju Sulsel (2002 - 2004)</li>
                                                        <li>Dokter Medeks Visi Medika Medco Jakarta (2004 - 2005)</li>
                                                        <li>Dokter Poliklinik Pertamina Upms 3 Jakarta (2005 - 2010)</li>
                                                        <li>Dokter Umum Kontrak RSU.Sayang Rakyat Sulsel (2010 - 2011)</li>
                                                        <li>Staf Dosen Yayasan FK-UNISMUH Makassar (2011 - Sekarang)</li>
                                                        <li>Dokter Spesialis Radiologi RSUD Banggai Laut Sulteng (2017)</li>
                                                        <li>Dokter Spesialis Radiologi RSIA Bahagia (2017 - Sekarang)</li>
                                                        <li>Dokter Spesialis Radiologi RSAL Jala Ammari (2017 - Sekarang)</li>
                                                        <li>Dokter Spesialis Radiologi non PNS RSUD Sayang Rakyat (2018 - Sekarang)</li>
                                                        <li>Staf Dosen Luar Biasa FK- UNIBOS Makassar (2018 - Sekarang)</li>
                                                        <li>Dokter Spesialis Radiologi RSIA Catherine Booth Makassar (2019 - Sekarang)</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- akhir box -->
                        </div>
                        <div class="row text-center mt-4">
                            <div class="col-sm-12">
                                <p class="catatan">*Catatan : Tanda (*) On-Call</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-DokterUmum" role="tabpanel" aria-labelledby="v-pills-DokterUmum-tab">
                        <h4>Dokter Umum</h4>
                        <div class="row">
                            <div class="col-md-3 text-center mb-3">
                                <img src="<?= base_url(); ?>assets/img/dr.natalia.png" class="rounded-circle" width="100" alt="natalia">
                                <h6 class="nama-dokter">dr. Natalia Palullungan</h6>
                                <a href="#" class="btn btn-outline-info tombol2" data-toggle="modal" data-target="#infoDokterUmumSatuModalCenter">Info
                                    Dokter</a>
                            </div>
                            <div class="col-md-9">
                                <div class="col-sm-12 text-center mb-4">Jadwal Dokter</div>
                                <div class="row text-center">
                                    <div class="col-sm">
                                        <p class="day">Senin</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Selasa</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Rabu</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Kamis</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Jumat</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Sabtu</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Minggu</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                </div>
                            </div>
                            <!-- box -->
                            <div class="modal fade" id="infoDokterUmumSatuModalCenter" tabindex="-1" role="dialog" aria-labelledby="infoDokterUmumSatuCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="infoDokterUmumSatuModalCenterTitle">INFO
                                                DOKTER</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <small>Nama Dokter</small><br>
                                                    <b>dr. Natalia Palullungan</b><br>
                                                    <small>Klinik</small><br>
                                                    <b>Umum</b>
                                                </div>
                                                <div class="col-sm-3 text-center">
                                                    <img src="<?= base_url(); ?>assets/img/dr.natalia.png" alt="natalia" class="img-thumbnail" width="100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- akhir box -->
                            <div class="col-md-3 text-center mb-3">
                                <img src="<?= base_url(); ?>assets/img/dr.lilian.png" class="rounded-circle" width="100" alt="lilian">
                                <h6 class="nama-dokter">dr. Lilian Ishak</h6>
                                <a href="#" class="btn btn-outline-info tombol2" data-toggle="modal" data-target="#infoDokterUmumDuaModalCenter">Info
                                    Dokter</a>
                            </div>
                            <div class="col-md-9">
                                <div class="col-sm-12 text-center mb-4">Jadwal Dokter</div>
                                <div class="row text-center">
                                    <div class="col-sm">
                                        <p class="day">Senin</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Selasa</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Rabu</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Kamis</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Jumat</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Sabtu</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Minggu</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                </div>
                            </div>
                            <!-- box -->
                            <div class="modal fade" id="infoDokterUmumDuaModalCenter" tabindex="-1" role="dialog" aria-labelledby="infoDokterUmumDuaModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="infoDokterUmumDuaModalCenterTitle">INFO
                                                DOKTER</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <small>Nama Dokter</small><br>
                                                    <b>dr. Lilian Ishak</b><br>
                                                    <small>Klinik</small><br>
                                                    <b>Umum</b>
                                                </div>
                                                <div class="col-sm-3 text-center">
                                                    <img src="<?= base_url(); ?>assets/img/dr.lilian.png" alt="lilian" class="img-thumbnail" width="100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- akhir box -->
                            <div class="col-md-3 text-center mb-3">
                                <img src="<?= base_url(); ?>assets/img/dr.catherine.png" class="rounded-circle" width="100" alt="catherine">
                                <h6 class="nama-dokter">dr. Catherine Jim</h6>
                                <a href="#" class="btn btn-outline-info tombol2" data-toggle="modal" data-target="#infoDokterUmumTigaModalCenter">Info
                                    Dokter</a>
                            </div>
                            <div class="col-md-9">
                                <div class="col-sm-12 text-center mb-4">Jadwal Dokter</div>
                                <div class="row text-center">
                                    <div class="col-sm">
                                        <p class="day">Senin</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Selasa</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Rabu</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Kamis</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Jumat</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Sabtu</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Minggu</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                </div>
                            </div>
                            <!-- box -->
                            <div class="modal fade" id="infoDokterUmumTigaModalCenter" tabindex="-1" role="dialog" aria-labelledby="infoDokterUmumTigaModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="infoDokterUmumTigaModalCenterTitle">INFO
                                                DOKTER</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <small>Nama Dokter</small><br>
                                                    <b>dr. Catherine Jim</b><br>
                                                    <small>Klinik</small><br>
                                                    <b>Umum</b>
                                                </div>
                                                <div class="col-sm-3 text-center">
                                                    <img src="<?= base_url(); ?>assets/img/dr.catherine.png" alt="catherine" class="img-thumbnail" width="100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- akhir box -->
                            <div class="col-md-3 text-center mb-3">
                                <img src="<?= base_url(); ?>assets/img/dr.yessy.png" class="rounded-circle" width="100" alt="yessi">
                                <h6 class="nama-dokter">dr. Yessi Novianti Lagasih</h6>
                                <a href="#" class="btn btn-outline-info tombol2" data-toggle="modal" data-target="#infoDokterUmumEmpatModalCenter">Info
                                    Dokter</a>
                            </div>
                            <div class="col-md-9">
                                <div class="col-sm-12 text-center mb-4">Jadwal Dokter</div>
                                <div class="row text-center">
                                    <div class="col-sm">
                                        <p class="day">Senin</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Selasa</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Rabu</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Kamis</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Jumat</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Sabtu</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Minggu</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                </div>
                            </div>
                            <!-- box -->
                            <div class="modal fade" id="infoDokterUmumEmpatModalCenter" tabindex="-1" role="dialog" aria-labelledby="infoDokterUmumEmpatModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="infoDokterUmumEmpatModalCenterTitle">INFO
                                                DOKTER</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <small>Nama Dokter</small><br>
                                                    <b>dr. Yessi Novianti Lagasih</b><br>
                                                    <small>Klinik</small><br>
                                                    <b>Umum</b>
                                                </div>
                                                <div class="col-sm-3 text-center">
                                                    <img src="<?= base_url(); ?>assets/img/dr.yessy.png" alt="yessi" class="img-thumbnail" width="100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- akhir box -->
                            <div class="col-md-3 text-center mb-3">
                                <img src="<?= base_url(); ?>assets/img/wiiliam.png" class="rounded-circle" width="100" alt="william">
                                <h6 class="nama-dokter">dr. William J.K Jasmin</h6>
                                <a href="#" class="btn btn-outline-info tombol2" data-toggle="modal" data-target="#infoDokterUmumLimaModalCenter">Info
                                    Dokter</a>
                            </div>
                            <div class="col-md-9">
                                <div class="col-sm-12 text-center mb-4">Jadwal Dokter</div>
                                <div class="row text-center">
                                    <div class="col-sm">
                                        <p class="day">Senin</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Selasa</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Rabu</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Kamis</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Jumat</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Sabtu</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Minggu</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                </div>
                            </div>
                            <!-- box -->
                            <div class="modal fade" id="infoDokterUmumLimaModalCenter" tabindex="-1" role="dialog" aria-labelledby="infoDokterUmumLimaModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="infoDokterUmumLimaModalCenterTitle">INFO
                                                DOKTER</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <small>Nama Dokter</small><br>
                                                    <b>dr. William J.K.Jasmin</b><br>
                                                    <small>Klinik</small><br>
                                                    <b>Umum</b>
                                                </div>
                                                <div class="col-sm-3 text-center">
                                                    <img src="<?= base_url(); ?>assets/img/wiiliam.png" alt="william" class="img-thumbnail" width="100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- akhir box -->
                        </div>
                        <div class="row text-center mt-4">
                            <div class="col-sm-12">
                                <p class="catatan">*Catatan : Tanda (*) On-Call</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-DokterAnastesi" role="tabpanel" aria-labelledby="v-pills-DokterAnastesi-tab">
                        <h4>Dokter Anastesi</h4>
                        <div class="row">
                            <div class="col-md-3 text-center mb-3">
                                <img src="<?= base_url(); ?>assets/img/dr.madonna.png" class="rounded-circle" width="100" alt="madonna">
                                <h6 class="nama-dokter">dr. Madonna, Sp.An</h6>
                                <a href="#" class="btn btn-outline-info tombol2" data-toggle="modal" data-target="#infoDokterAnastesiModalCenter">Info
                                    Dokter</a>
                            </div>
                            <div class="col-md-9">
                                <div class="col-sm-12 text-center mb-4">Jadwal Praktek</div>
                                <div class="row text-center">
                                    <div class="col-sm">
                                        <p class="day">Senin</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Selasa</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Rabu</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Kamis</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Jumat</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Sabtu</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Minggu</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                </div>
                            </div>
                            <!-- box -->
                            <div class="modal fade" id="infoDokterAnastesiModalCenter" tabindex="-1" role="dialog" aria-labelledby="infoDokterAnastesiModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="infoDokterAnastesiModalCenterTitle">INFO
                                                DOKTER</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <small>Nama Dokter</small><br>
                                                    <b>dr. Madonna, Sp.An</b><br>
                                                    <small>Spesialis</small><br>
                                                    <b>Anestesi</b>
                                                </div>
                                                <div class="col-sm-3 text-center">
                                                    <img src="<?= base_url(); ?>assets/img/dr.madonna.png" alt="madonna" class="img-thumbnail" width="100">
                                                </div>
                                                <div class="col-sm-12">
                                                    <h4 class="praktek text-center">Tentang Dokter</h4>
                                                </div>
                                                <div class="col-sm-12">
                                                    <p>
                                                        <strong>Riwayat Pendidikan :</strong>
                                                    </p>
                                                    <ul>
                                                        <li><b>Pendidikan Dokter :</b> Fakultas Kedokteran Universitas Hasanuddin, Makassar (2001)</li>
                                                        <li><b>Spesialis Anestesi :</b> Fakultas Kedokteran Universitas Hasanuddin, Makassar (2013)</li>
                                                        <li>Palliative Care Workshop on Pain Symptom Management, Kuala Lumpur Malaysia (2014)</li>
                                                        <li>CBT (Cognitive Behavioral Therapy) Selayang Hospital, Kuala Lumpur Malaysia (2015)</li>
                                                        <li>Pain Camp diselenggarakan oleh Association of South-East Asian Pain Societies (ASEAPS) Myanmar (2017)</li>
                                                        <li>Fellowship in Clinical Pain Management, Siriraj Hospital, Mahidol University Bangkok, Thailand (2018) diakui oleh by World Federation of Societies of Anaesthesiologists (WFSA) dan International Association of The Study of Pain (IASP)</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 text-center mb-3">
                                <img src="<?= base_url(); ?>assets/img/no.png" class="rounded-circle" width="100" alt="borahima">
                                <h6 class="nama-dokter">dr. Syafri K Arif, Sp.An,KIC</h6>
                                <a href="#" class="btn btn-outline-info tombol2" data-toggle="modal" data-target="#infoDokterAnastesiThreeModalCenter">Info
                                    Dokter</a>
                            </div>
                            <div class="col-md-9">
                                <div class="col-sm-12 text-center mb-4">Jadwal Praktek</div>
                                <div class="row text-center">
                                    <div class="col-sm">
                                        <p class="day">Senin</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Selasa</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Rabu</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Kamis</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Jumat</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Sabtu</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Minggu</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                </div>
                            </div>
                            <!-- box -->
                            <div class="modal fade" id="infoDokterAnastesiThreeModalCenter" tabindex="-1" role="dialog" aria-labelledby="infoDokterAnastesiThreeModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="infoDokterAnastesiThreeModalCenterTitle">INFO
                                                DOKTER</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <small>Nama Dokter</small><br>
                                                    <b>dr. Syafri K Arif, Sp.An,KIC</b><br>
                                                    <small>Spesialis</small><br>
                                                    <b>Anestesi</b>
                                                </div>
                                                <div class="col-sm-3 text-center">
                                                    <img src="<?= base_url(); ?>assets/img/no.png" alt="borahima" class="img-thumbnail" width="100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- akhirbox -->
                            <div class="row text-center mt-4">
                                <div class="col-sm-12">
                                    <p class="catatan">*Catatan : Tanda (*) On-Call</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-DokterKulitKelamin" role="tabpanel" aria-labelledby="v-pills-DokterKulitKelamin-tab">
                        <h4>Dokter Kulit & Kelamin</h4>
                        <div class="row">
                            <div class="col-md-3 text-center mb-3">
                                <img src="<?= base_url(); ?>assets/img/no.png" class="rounded-circle" width="100" alt="helena">
                                <h6 class="nama-dokter">dr. Helena Kendengan, Sp.KK</h6>
                                <a href="#" class="btn btn-outline-info tombol2" data-toggle="modal" data-target="#infoDokterKulitKelaminModalCenter">Info
                                    Dokter</a>
                            </div>
                            <div class="col-md-9">
                                <div class="col-sm-12 text-center mb-4">Jadwal Praktek</div>
                                <div class="row text-center">
                                    <div class="col-sm">
                                        <p class="day">Senin</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Selasa</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Rabu</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Kamis</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Jumat</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Sabtu</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="day">Minggu</p>
                                        <p><b>*</b></p>
                                        <p class="time">----</p>
                                    </div>
                                </div>
                            </div>
                            <!-- box -->
                            <div class="modal fade" id="infoDokterKulitKelaminModalCenter" tabindex="-1" role="dialog" aria-labelledby="infoDokterKulitKelaminModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="infoDokterKulitKelaminModalCenterTitle">INFO
                                                DOKTER</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <small>Nama Dokter</small><br>
                                                    <b>dr. Helena Kendengan, Sp.KK</b><br>
                                                    <small>Spesialis</small><br>
                                                    <b>Kulit & Kelamin</b>
                                                </div>
                                                <div class="col-sm-3 text-center">
                                                    <img src="<?= base_url(); ?>assets/img/no.png" alt="helena" class="img-thumbnail" width="100">
                                                </div>
                                                <div class="col-sm-12">
                                                    <h4 class="praktek text-center">Tentang Dokter</h4>
                                                </div>
                                                <div class="col-sm-12">
                                                    <p>
                                                        <strong>Riwayat Pendidikan :</strong>
                                                    </p>
                                                    <ul>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- akhirbox -->
                        </div>
                    </div>
                </div>
</section>
<!-- Akhir jadwal dokter -->