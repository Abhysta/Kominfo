<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <div class="footer-legal text-center">
        <div
            class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

            <div class="d-flex flex-column align-items-center align-items-lg-start">
                <div class="copyright">
                    Didesain Oleh : <strong><span>Dinas Komunikasi dan Informatika Kab. Purbalingga</span></strong>
                </div>
                <div class="credits">
                    Designed by <a href="https://uad.ac.id/id/profile-uad/">Cah Magang UAD</a>
                </div>
            </div>

            <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            </div>

        </div>
    </div>

</footer><!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="<?= base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url()?>assets/vendor/aos/aos.js"></script>
<script src="<?= base_url()?>assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?= base_url()?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?= base_url()?>assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?= base_url()?>assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="<?= base_url()?>assets/js/main.js"></script>

<script>
(function() {
    const form = document.querySelector('#formvalid');
    const checkboxes = form.querySelectorAll('input[type=checkbox]');
    const checkboxLength = checkboxes.length;
    const firstCheckbox = checkboxLength > 0 ? checkboxes[0] : null;

    function init() {
        if (firstCheckbox) {
            for (let i = 0; i < checkboxLength; i++) {
                checkboxes[i].addEventListener('change', checkValidity);
            }

            checkValidity();
        }
    }

    function isChecked() {
        for (let i = 0; i < checkboxLength; i++) {
            if (checkboxes[i].checked) return true;
        }

        return false;
    }

    function checkValidity() {
        const errorMessage = !isChecked() ? 'Centang salah satu kotak ini jika Anda ingin melanjutkan' : '';
        firstCheckbox.setCustomValidity(errorMessage);
    }

    init();
})();
</script>

<script>
window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function() {
        $(this).remove();
    });
}, 3000)
</script>

</body>

</html>