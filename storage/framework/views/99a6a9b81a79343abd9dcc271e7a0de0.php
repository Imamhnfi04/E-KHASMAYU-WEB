

<?php $__env->startSection('content'); ?>
<section id="toko" class="toko">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Toko</h2>
            <p>Our Great Toko</p>
        </div>
        <div class="row" data-aos="fade-left">
            <div class="col-lg-3 col-md-6">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                    <div class="pic"><img src="<?php echo e(asset('assets/img/team/team-1.jpg')); ?>" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4>Toko 1</h4>
                        <span>Oleh-Oleh Manisan</span>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tambahkan modifikasi serupa untuk elemen toko lainnya -->
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\e-khasmayu\E-KHASMAYU-WEB\resources\views/toko/toko1.blade.php ENDPATH**/ ?>