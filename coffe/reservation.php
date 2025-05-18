<?php include 'back/header.php'; ?>

<div class="container py-5 mt-5">
    <h1 class="text-center mb-5">رزرو میز</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card reservation-card">
                <div class="card-body">
                    <form class="needs-validation" novalidate>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">نام و نام خانوادگی</label>
                                <input type="text" class="form-control" id="name" required>
                                <div class="invalid-feedback">لطفاً نام خود را وارد کنید</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label">شماره تماس</label>
                                <input type="tel" class="form-control" id="phone" required>
                                <div class="invalid-feedback">لطفاً شماره تماس را وارد کنید</div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="date" class="form-label">تاریخ</label>
                                <input type="date" class="form-control" id="date" required>
                                <div class="invalid-feedback">لطفاً تاریخ را انتخاب کنید</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="time" class="form-label">ساعت</label>
                                <input type="time" class="form-control" id="time" required>
                                <div class="invalid-feedback">لطفاً ساعت را انتخاب کنید</div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="guests" class="form-label">تعداد مهمان</label>
                                <select class="form-select" id="guests" required>
                                    <option value="">انتخاب کنید</option>
                                    <option value="1">1 نفر</option>
                                    <option value="2">2 نفر</option>
                                    <option value="3">3 نفر</option>
                                    <option value="4">4 نفر</option>
                                    <option value="5">5 نفر</option>
                                    <option value="6">6 نفر</option>
                                </select>
                                <div class="invalid-feedback">لطفاً تعداد مهمان را انتخاب کنید</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="occasion" class="form-label">مناسبت</label>
                                <select class="form-select" id="occasion">
                                    <option value="">انتخاب کنید</option>
                                    <option value="birthday">تولد</option>
                                    <option value="anniversary">سالگرد</option>
                                    <option value="business">ملاقات کاری</option>
                                    <option value="other">سایر</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="notes" class="form-label">توضیحات</label>
                            <textarea class="form-control" id="notes" rows="3"></textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">رزرو میز</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'back/footer.php'; ?> 