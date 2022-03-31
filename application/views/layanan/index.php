<!-- Layanan -->
<section id="rinap" class="rinap">
    <div class="container mb-5">
        <div class="row mt-5">
            <div class="col">
                <h1 class="judul">Layanan</h1>
            </div>
        </div>
    </div>
</section>

<section id="rawatinap" class="rawatinap">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="nav  sticky-top flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link service-bar active menu-bar " id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Rawat Inap</a>
                    <a class="nav-link menu-bar" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Rawat Jalan</a>
                    <a class="nav-link menu-bar" id="v-pills-pkhusus-tab" data-toggle="pill" href="#v-pills-pkhusus" role="tab" aria-controls="v-pills-pkhusus" aria-selected="false">Pelayanan Khusus</a>
                    <a class="nav-link menu-bar" id="v-pills-unggulan-tab" data-toggle="pill" href="#v-pills-unggulan" role="tab" aria-controls="v-pills-unggulan" aria-selected="false">Pelayanan Unggulan</a>
                    <a class="nav-link menu-bar" id="v-pills-pastoral-tab" data-toggle="pill" href="#v-pills-pastoral" role="tab" aria-controls="v-pills-pastoral" aria-selected="false">Pelayanan Pastoral</a>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <h1>Rawat Inap</h1>
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active room-service mb-1" id="nav-vvip-tab" data-toggle="tab" href="#nav-vvip" role="tab" aria-controls="nav-vvip" aria-selected="true">Kelas VVIP</a>
                                <a class="nav-item nav-link room-service" id="nav-vipa-tab" data-toggle="tab" href="#nav-vipa" role="tab" aria-controls="nav-vipa" aria-selected="false">Kelas VIP A</a>
                                <a class="nav-item nav-link room-service" id="nav-vipb-tab" data-toggle="tab" href="#nav-vipb" role="tab" aria-controls="nav-vipb" aria-selected="false">Kelas VIP B</a>
                                <a class="nav-item nav-link room-service" id="nav-klas1-tab" data-toggle="tab" href="#nav-klas1" role="tab" aria-controls="nav-klas1" aria-selected="false">Kelas I</a>
                                <a class="nav-item nav-link room-service" id="nav-klas2-tab" data-toggle="tab" href="#nav-klas2" role="tab" aria-controls="nav-klas2" aria-selected="false">Kelas II</a>
                                <a class="nav-item nav-link room-service" id="nav-klas3-tab" data-toggle="tab" href="#nav-klas3" role="tab" aria-controls="nav-klas3" aria-selected="false">Kelas III</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-vvip" role="tabpanel" aria-labelledby="nav-vvip-tab">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <img src="<?= base_url(); ?>assets/img/VVIPClass.png" class="" width="100%" alt="Vvip">
                                        <p>Fasilitas Kamar&nbsp;:</p>
                                        <ul>
                                            <li>Ruang keluarga / Tamu</li>
                                            <li>1 tempat tidur elektrik dengan remote control</li>
                                            <li>1 tempat tidur penunggu</li>
                                            <li>TV</li>
                                            <li>AC</li>
                                            <li>Kulkas</li>
                                            <li>Dispenser</li>
                                            <li>Telepon</li>
                                            <li>1 Set Sofa</li>
                                            <li>1 Set Meja Makan</li>
                                            <li>1 Bed set Kabinet</li>
                                            <li>lemari Pakaian</li>
                                            <li>Kamar Mandi</li>
                                            <li>Fasilitas Lain :
                                                <ul>
                                                    <li>Welcome Fruit</li>
                                                    <li>Air mineral, Coffee & Tea set</li>
                                                    <li>Perlengkapan Mandi</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-vipa" role="tabpanel" aria-labelledby="nav-vipa-tab">
                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <img src="<?= base_url(); ?>assets/img/VIPAClass.png" width="100%" alt="Vip a">
                                        <p>Fasilitas Kamar&nbsp;:</p>
                                        <ul>
                                            <li>1 tempat tidur elektrik dengan remote control</li>
                                            <li>1 tempat tidur penunggu</li>
                                            <li>TV</li>
                                            <li>AC</li>
                                            <li>Kulkas</li>
                                            <li>Dispenser</li>
                                            <li>Telepon</li>
                                            <li>1 Set Meja Makan</li>
                                            <li>1 Bed set Kabinet</li>
                                            <li>Lemari Pakaian</li>
                                            <li>Kamar Mandi</li>
                                            <li>Fasilitas Lain :
                                                <ul>
                                                    <li>Welcome Fruit</li>
                                                    <li>Air Mineral, Coffee & Tea set</li>
                                                    <li>Perlengkapan Mandi</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-vipb" role="tabpanel" aria-labelledby="nav-vipb-tab">
                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <img src="<?= base_url(); ?>assets/img/VIPBClass.png" width="100%" alt="Vip b">
                                        <p>Fasilitas Kamar&nbsp;:</p>
                                        <ul>
                                            <li>1 tempat tidur elektrik dengan remote control</li>
                                            <li>1 tempat tidur penunggu</li>
                                            <li>TV</li>
                                            <li>AC</li>
                                            <li>Kulkas</li>
                                            <li>Dispenser</li>
                                            <li>Telepon</li>
                                            <li>Kamar Mandi</li>
                                            <li>1 Bed set Kabinet</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-klas1" role="tabpanel" aria-labelledby="nav-klas1-tab">
                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <img src="<?= base_url(); ?>assets/img/Class1.png" width="100%" alt="kelas 1">
                                        <p>Fasilitas Kamar&nbsp;:</p>
                                        <ul>
                                            <li>1 tempat tidur elektrik dengan remote control</li>
                                            <li>TV</li>
                                            <li>AC</li>
                                            <li>Kulkas</li>
                                            <li>Telepon</li>
                                            <li>Kamar Mandi</li>
                                            <li>1 Bed set Kabinet</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-klas2" role="tabpanel" aria-labelledby="nav-klas2-tab">
                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <img src="<?= base_url(); ?>assets/img/Class2.png" width="100%" alt="kelas 2">
                                        <p>Fasilitas Kamar&nbsp;:</p>
                                        <ul>
                                            <li>3 tempat tidur</li>
                                            <li>AC</li>
                                            <li>Televisi</li>
                                            <li>Telepon</li>
                                            <li>Kamar Mandi</li>
                                            <li>3 Bed set Kabinet</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-klas3" role="tabpanel" aria-labelledby="nav-klas3-tab">
                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <img src="<?= base_url(); ?>assets/img/Class3.png" width="100%" alt="kelas 3">
                                        <p>Fasilitas Kamar&nbsp;:</p>
                                        <ul>
                                            <li>4 tempat tidur</li>
                                            <li>AC</li>
                                            <li>Telepon</li>
                                            <li>Kamar Mandi</li>
                                            <li>4 Bed set Kabinet</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <h1>Rawat Jalan</h1>
                        <div class="accordion" id="Rpoliklinik">
                            <div class="card">
                                <div class="card-header" id="headingPoliUmum">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link poli-button ml-auto" type="button" data-toggle="collapse" data-target="#poliklinik" aria-expanded="true" aria-controls="poliklinik">
                                            Poliklinik Umum
                                        </button>
                                    </h2>
                                </div>
                                <div id="poliklinik" class="collapse show" aria-labelledby="headingPoliUmum" data-parent="#Rpoliklinik">
                                    <div class="card-body">
                                        <ul>
                                            <li>Dokter Gigi</li>
                                            <li>Dokter Umum</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingPoliSpesialis">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Poliklinik Spesialis
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingPoliSpesialis" data-parent="#Rpoliklinik">
                                    <div class="card-body">
                                        <ul>
                                            <li>Anak</li>
                                            <li>Kebidanan & Kandungan</li>
                                            <li>THT</li>
                                            <li>Bedah Anak</li>
                                            <li>Bedah Umum</li>
                                            <li>Penyakit Dalam</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingPenunjangMedis">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Penunjang Medis
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingPenunjangMedis" data-parent="#Rpoliklinik">
                                    <div class="card-body">
                                        <ul>
                                            <li>Laboratorium Klinik
                                                <ul>
                                                    <li>Hematologi</li>
                                                    <li>Kimia Darah</li>
                                                    <li>Imunologi & Serologi</li>
                                                    <li>Urinalisis</li>
                                                </ul>
                                            </li>
                                            <li>Radiologi Klinik
                                                <ul>
                                                    <li>Rontgen</li>
                                                    <li>USG Abdomen</li>
                                                    <li>USG Kandungan</li>
                                                    <li>ECHO</li>
                                                </ul>
                                            </li>
                                            <li>EKG</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-pkhusus" role="tabpanel" aria-labelledby="v-pills-pkhusus-tab">
                        <h1>Pelayanan Khusus</h1>
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingSix">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                            Neonatal Intensive Care Unit (NICU)
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseSix" class="collapse show" aria-labelledby="headingSix" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>
                                            <img src="<?= base_url(); ?>assets/img/nicu.png" width="100%" alt="NICU">
                                        </p>
                                        <ul>Definisi
                                            <p style="padding-left:30px;">Unit Perawatan intensif untuk bayi baru lahir yang memerlukan perawatan khusus</p>
                                        </ul>
                                        <ul>Ruang Lingkup
                                            <p style="padding-left:30px;">Asuhan Neonatal dengan ketergantungan tinggi</p>
                                        </ul>
                                        <ul>Pelayanan NICU yang dilakukan meliputi :
                                            <ul>
                                                <li>Pasien dengan resiko gagal nafas dan memerlukan bantuan
                                                    ventilasi mekanik</li>
                                                <li>Pasien kejang berlanjut</li>
                                                <li>Berat badan rendah</li>
                                                <li>Fototerapi Bayi</li>
                                            </ul>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingEight">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                                            Pediatric Intensive Care Unit (PICU)
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseEight" class="collapse show" aria-labelledby="headingEight" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>Definisi
                                            <p style="padding-left:30px;">Unit Perawatan intensif untuk bayi baru lahir yang memerlukan perawatan khusus</p>
                                        </ul>
                                        <ul>Ruang Lingkup
                                            <p style="padding-left:30px;">...</p>
                                        </ul>
                                        <ul>Pelayanan PICU yang dilakukan meliputi :
                                            <ul>
                                                <li>Pasien dengan resiko gagal nafas dan memerlukan bantuan
                                                    ventilasi mekanik</li>
                                                <li>Pasien kejang berlanjut</li>
                                                <li>...</li>
                                            </ul>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Kamar Bersalin
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>Definisi
                                            <p style="padding-left:30px;">Sebuah unit layanan pada rumah sakit yang berfungsi sebagai ruang persalinan selama 24 Jam</p>
                                        </ul>
                                        <ul>Ruang Lingkup
                                            <p style="padding-left:30px;">Melayani ibu bersalin normal maupun patologis</p>
                                        </ul>
                                        <ul>Fasilitas Kamar Bersalin :
                                            <ul>
                                                <li>Box Bayi</li>
                                                <li>Timbangan Bayi</li>
                                                <li>Box Bayi untuk mengantar bayi ke ruang perawatan</li>
                                                <li>Foto Bayi</li>
                                            </ul>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Kamar Bedah
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>
                                            <img src="<?= base_url(); ?>assets/img/bedah.png" width="100%" alt="NICU">
                                        </p>
                                        <ul>Definisi
                                            <p style="padding-left:30px;">Suatu Unit Khusus di Rumah Sakit yang berfungsi sebagai daerah pelayanan kritis yang mengutamakan aspek hirarki zonasi sterilitas</p>
                                        </ul>
                                        <ul>Ruang Lingkup
                                            <p style="padding-left:30px;">Pelayanan Bedah yang di laksanakan di Instalasi kamar bedah Rumah Sakit</p>
                                        </ul>
                                        <ul>Pelayanan Pembedahan yang dapat dilakukan meliputi :
                                            <ul>
                                                <li>Bedah Umum</li>
                                                <li>Bedah Obgyn</li>
                                                <li>Bedah THT</li>
                                                <li>Bedah Tumor</li>
                                            </ul>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Pijat Bayi
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>Definisi
                                            <p style="padding-left:30px;">...</p>
                                        </ul>
                                        <ul>Ruang Lingkup
                                            <p style="padding-left:30px;">...</p>
                                        </ul>
                                        <ul>Pelayanan Pijat Bayi yang dapat dilakukan meliputi :
                                            <ul>
                                                <li>...</li>
                                                <li>...</li>
                                                <li>...</li>
                                                <li>...</li>
                                            </ul>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Senam Hamil
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>Definisi
                                            <p style="padding-left:30px;">...</p>
                                        </ul>
                                        <ul>Ruang Lingkup
                                            <p style="padding-left:30px;">...</p>
                                        </ul>
                                        <ul>Pelayanan Senam Hamil yang dilakukan meliputi :
                                            <ul>
                                                <li>...</li>
                                                <li>...</li>
                                                <li>...</li>
                                                <li>...</li>
                                            </ul>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFive">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            Home Care
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>Definisi
                                            <p style="padding-left:30px;">...</p>
                                        </ul>
                                        <ul>Ruang Lingkup
                                            <p style="padding-left:30px;">...</p>
                                        </ul>
                                        <ul>Pelayanan Home Care yang dilakukan meliputi :
                                            <ul>
                                                <li>...</li>
                                                <li>...</li>
                                                <li>...</li>
                                                <li>...</li>
                                            </ul>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-unggulan" role="tabpanel" aria-labelledby="v-pills-unggulan-tab">
                        <h1>Unggulan</h1>
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Laparoskopi
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>Definisi
                                            <p style="padding-left:30px;">Laparoskopi atau operasi lubang kunci adalah prosedur bedah minimal invasif yang dilakukan dengan membuat sayatan kecil di dinding perut, dan dilakukan dengan bantuan alat berbentuk tabung tipis bernama laparoskop, alat ini dilengkapi dengan kamera dan cahaya diujungnya.</p>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Pain Management Clinic (Manajemen Nyeri)
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>
                                        <img src="<?= base_url(); ?>assets/img/web poli nyeri.png" width="100%" alt="nyeri">
                                        </p>
                                        <ul>Definisi
                                            <p style="padding-left:30px;">Manajemen Nyeri suatu kumpulan prosedur medis yang bertujuan untuk meredakan dan menghilangkan nyeri pada pasien yang muncul akibat rusaknya jaringan tubuh, serta dapat menimbulkan dampak secara fisik dan emosi.</p>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-pastoral" role="tabpanel" aria-labelledby="v-pills-pastoral-tab">
                        <h1>Pastoral</h1>
                        <div class="card">
                            <div class="card-header" id="headingTwoPastoral">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Pastoral
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwoPastoral" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>
                                        <img src="<?= base_url(); ?>assets/img/pastoral.png" width="100%" alt="pastoral">
                                    </p>
                                    <ul>Definisi
                                        <p style="padding-left:30px;">Pelayanan bantuan rohani bagi pasien dan keluarganya dalam menghadapi sakit yang dideritanya serta diharapkan dapat menciptakan loyalitas pasien untuk komunitas agama.</p>
                                    </ul>
                                    <ul>Ruang Lingkup
                                        <ul>
                                            <li>Pelayanan Kerohanian pemeluk agama Islam</li>
                                            <li>Pelayanan Kerohanian pemeluk agama Kristen Protestan</li>
                                            <li>Pelayanan Kerohanian pemeluk agama Kristen Katolik</li>
                                            <li>Pelayanan Kerohanian pemeluk agama Hindu</li>
                                            <li>Pelayanan Kerohanian pemeluk agama Budha</li>
                                            <li>Pelayanan Kerohanian pemeluk agama Konghuchu</li>
                                        </ul>
                                    </ul>
                                    <ul>Pelayanan Pastoral yang dilakukan meliputi :
                                        <ul>
                                            <li>Berdoa diruangan dimana pasien dirawat dan membutuhkan pelayanan pastoral.</li>
                                            <li>Siaran doa dan renungan Pagi dan Malam melalui pelayanan pastoral RSIA Catherine Booth untuk pemeluk agama Kristen dan Katolik </li>
                                            <li>Mempersiapkan ruangan khusus untuk pemeluk agama Islam jika ingin melakukan sholat baik pagi, sore dan subuh</li>
                                        </ul>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>