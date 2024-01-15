<?= $this->include('partial/header2') ?>
<link rel="stylesheet" type="text/css" href="css/create.css">
<div class="container mt-3">
    <center>
        <h1>Setting Your Account</h1>
    </center>
    <div class="formbold-form-wrapper">
        <form action="https://formbold.com/s/FORM_ID" method="POST">
            <div class="formbold-input-wrapp formbold-mb-3">
                <label for="email" class="formbold-form-label"> Email</label>
                <div>
                    <input type="text" name="email" id="email" placeholder="abcde@gmail.com" class="formbold-form-input " />
                </div>
            </div>

            <div class="formbold-mb-3">
                <label for="username" class="formbold-form-label ">Username</label>
                <div>
                    <input type="text" name="username" id="username" placeholder="Username" class="formbold-form-input " />
                </div>
            </div>

            <div class="formbold-mb-3">
                <label for="name" class="formbold-form-label">Full Name</label>
                <div>
                    <input type="text" name="name" id="name" placeholder="Full name" class="formbold-form-input " />
                </div>
            </div>

            <div class="formbold-mb-3">
                <label for="city" class="formbold-form-label">City</label>
                <div>
                    <input type="text" name="city" id="city" placeholder="City" class="formbold-form-input " />
                </div>
            </div>

            <div class="formbold-mb-3">
                <label for="upload" class="formbold-form-label">
                    Upload New Photo Profile
                </label>
                <input type="file" name="upload" id="upload" class="formbold-form-input formbold-form-file" />
            </div>

            <div class="formbold-mb-3">
                <label for="city" class="formbold-form-label">Current Password</label>
                <div>
                    <input type="password" name="cpassword" id="cpassword" placeholder="Current password" class="formbold-form-input " />
                </div>
            </div>

            <div class="formbold-mb-3">
                <label for="city" class="formbold-form-label">New Password</label>
                <div>
                    <input type="password" name="npassword" id="npassword" placeholder="New Password" class="formbold-form-input " />
                </div>
            </div>

            <div class="formbold-mb-3">
                <label for="city" class="formbold-form-label">Confirm New Password</label>
                <div>
                    <input type="password" name="fpassword" id="fpassword" placeholder="Conform new password" class="formbold-form-input " />
                </div>
            </div>

            <button class="formbold-btn">Save</button>
        </form>
    </div>
</div>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
</style>
<?= $this->include('partial/latest') ?>
<?= $this->include('partial/footer') ?>