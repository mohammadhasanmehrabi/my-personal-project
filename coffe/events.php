<?php include 'back/header.php'; ?>

<div class="container py-5 mt-5">
    <h1 class="text-center mb-5">رویدادهای آینده</h1>

    <div class="row">
        <!-- Event 1 -->
        <div class="col-md-6 mb-4">
            <div class="card event-card h-100">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="assets/images/events/coffee-tasting.jpg" class="img-fluid rounded-start h-100" alt="Coffee Tasting">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">جشنواره قهوه</h5>
                            <p class="card-text">
                                <i class="far fa-calendar-alt me-2"></i>
                                15 خرداد 1403
                            </p>
                            <p class="card-text">
                                <i class="far fa-clock me-2"></i>
                                18:00 - 21:00
                            </p>
                            <p class="card-text">تجربه طعم‌های مختلف قهوه از سراسر جهان</p>
                            <a href="#" class="btn btn-primary">جزئیات بیشتر</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Event 2 -->
        <div class="col-md-6 mb-4">
            <div class="card event-card h-100">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="assets/images/events/live-music.jpg" class="img-fluid rounded-start h-100" alt="Live Music">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">کنسرت موسیقی زنده</h5>
                            <p class="card-text">
                                <i class="far fa-calendar-alt me-2"></i>
                                20 خرداد 1403
                            </p>
                            <p class="card-text">
                                <i class="far fa-clock me-2"></i>
                                20:00 - 23:00
                            </p>
                            <p class="card-text">اجرای موسیقی زنده با گروه محلی</p>
                            <a href="#" class="btn btn-primary">جزئیات بیشتر</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Event 3 -->
        <div class="col-md-6 mb-4">
            <div class="card event-card h-100">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="assets/images/events/workshop.jpg" class="img-fluid rounded-start h-100" alt="Workshop">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">کارگاه آموزش قهوه</h5>
                            <p class="card-text">
                                <i class="far fa-calendar-alt me-2"></i>
                                25 خرداد 1403
                            </p>
                            <p class="card-text">
                                <i class="far fa-clock me-2"></i>
                                16:00 - 19:00
                            </p>
                            <p class="card-text">آموزش تخصصی دم کردن قهوه</p>
                            <a href="#" class="btn btn-primary">جزئیات بیشتر</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.event-card {
    transition: transform 0.3s, box-shadow 0.3s;
    box-shadow: 0 4px 8px rgba(0,0,0,0.08);
    border: none;
}
.event-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Set event name in modal
    document.querySelectorAll('.event-card button[data-bs-toggle="modal"]').forEach(btn => {
        btn.addEventListener('click', function() {
            const eventName = this.closest('.card-body').querySelector('.card-title').textContent;
            document.getElementById('eventName').value = eventName;
        });
    });
    // Bootstrap validation
    var forms = document.querySelectorAll('.needs-validation');
    Array.prototype.slice.call(forms).forEach(function(form) {
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });
});
</script>

<?php include 'back/footer.php'; ?> 