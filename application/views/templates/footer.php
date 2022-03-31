<!-- footer -->
<div class="container-fluid top-footer justify-content-center d-flex">
    <div class="container">
        <div class="row justify-content-center d-flex">
            <div class="col-md-4">
                <h4 class="title-footer-top">Kontak Kami</h4>
                <p class="text-footer-top">Jl. Arief Rate 15 Makassar 90113, Sulawesi Selatan, Indonesia</p>
            </div>
            <div class="col-md-4">
                <h4 class="title-footer-top">Hubungi</h4>
                <p class="text-footer-top">Telepon: (+62-411) 873803 & (+62-411) 852344</p>
                <p class="text-footer-top">Fax: (+62-411) 858607</p>
            </div>
            <div class="col-md-4">
                <h4 class="title-footer-top">Media Sosial</h4>
                <p class="text-footer-top">Email: rsiacatherinebooth@gmail.com</p>
                <div class="a-footer">
                    <a href="https://www.instagram.com/rsiacatherinebooth/" target="_blank"><i class="fab fa-instagram">
                            rsiacatherinebooth</i></a>
                </div>
                <div class="a-footer">
                    <a href="https://www.facebook.com/rsiacatherinebooth/" target="_blank"><i class="fab fa-facebook"> rsiacatherinebooth</i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bottom-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="pull-left">© <?= date('M Y'); ?>  IT Catherine Booth Makassar All Rights Reserved. </p>
            </div>
        </div>
    </div>
</div>
<!-- akhir footer -->

<script src="<?= base_url(); ?>assets/js/jquery-3.4.1.min.js"></script>
<script src="<?= base_url(); ?>assets/js/popper.min.js"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/js/sweetalert2.all.min.js"></script>
<script src="<?= base_url(); ?>assets/js/myscript.js"></script>
<script src="<?= base_url(); ?>assets/js/lightbox-plus-jquery.min.js"></script>
<script>
    // image choose file
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
</script>
</body>

</html>