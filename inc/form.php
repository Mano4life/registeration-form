<div class="container">
    <h1 class="title">Register</h1>
    <form method="post" action="" id="form">
        <div class="user-details">
            <div class="input-box">
                <span class="details">Full Name</span>
                <input type="text" placeholder="Enter Your Name" name="name" required />
            </div>
            <div class="input-box">
                <span class="details">Username</span>
                <input type="text" placeholder="Enter Your username" name="user-name" required />
            </div>
            <div class="input-box">
                <span class="details">Email</span>
                <input type="email" placeholder="Enter Your Email" name="email" required />
            </div>
            <div class="input-box">
                <span class="details">Phone Number</span>
                <input type="number" placeholder="Enter Your Number" name="phone" required />
            </div>
            <div class="input-box">
                <span class="details">Password</span>
                <input type="password" id="pass" placeholder="Enter Your Password" name="password" required />
            </div>
            <div class="input-box">
                <span class="details">Confirm Password</span>
                <input type="password" id="passConfirm" placeholder="Confirm Your Password" name="pass-confirm" required />
            </div>
        </div>
        <div class="gender-details">
            <input type="radio" name="gender" id="dot-1" value="Male" required />
            <input type="radio" name="gender" id="dot-2" value="Female" />
            <input type="radio" name="gender" id="dot-3" value="Prefer not to say" />
            <span class="gender-title">Gender</span>
            <div class="category">
                <label for="dot-1">
                    <span class="dot one"></span>
                    <span class="gender">Male</span>
                </label>
                <label for="dot-2">
                    <span class="dot two"></span>
                    <span class="gender">Female</span>
                </label>
                <label for="dot-3">
                    <span class="dot three"></span>
                    <span class="gender">Prefer not to say</span>
                </label>
            </div>
        </div>
        <div class="button">
            <button type="submit" id="btn" name="btn">Register</button>
        </div>
        <!-- add to database php ================================================================================= -->
        <?php include("add.php") ?>

    </form>

</div>