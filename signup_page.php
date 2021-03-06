
<?php include ('dbconfig.php');?>
 

 <?php include ('components/head.php');?>
 
 

<style>
    :root {
    --orange: #F3971A;
    --cream: #FFDA47;
    --brown: #783505;
    --box-shadow: 0 .5rem 1 rem rgba(0, 1, 1, 0.1);
    --border: .2rem 1 solid rgba(0, 0, 0, .1);
    --outline: .1rem 1 rem rgba(0, 0, 0, .1);
    --outline-hover: .2rem solid #783505;
}

* {
    font-family: sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    transition: all .2s linear;
}

html {
    overflow-x: hidden;
    scroll-behavior: smooth;
    scroll-padding-top: 7rem;
}

body {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: brown;
    padding: 30px;
    background: linear-gradient(#fff, #fff, var(--cream));
}

.heads {
    position: fixed;
    font-weight: bolder;
    color: var(--brown);
    font-size: 30px;
    top: 0;
    padding-top: 2rem;
}

.container {
    position: relative;
    max-width: 850px;
    width: 100%;
    background: #fff;
    padding: 40px 30px;
    box-shadow: 0 5px 10px var(--brown);
    perspective: 2700px;
    border-radius: 5px;
}

.container .cover {
    position: absolute;
    top: 0;
    left: 50%;
    height: 100%;
    width: 50%;
    z-index: 100;
    transition: all 1s ease;
    transform-origin: left;
    transform-style: preserve-3d;
    border-radius: 5px;
}

.container .cover::before {
    content: '';
    position: absolute;
    height: 100%;
    width: 100%;
    background: var(--orange);
    opacity: .2;
    z-index: 100;
}


/* .container .cover::after {
        content: '';
        position: absolute;
        height: 100%;
        width: 100%;
        background: brown;
        opacity: 0.5;
        z-index: 100;
        transform: rotateY(180deg);
    } */

.container #flip:checked~.cover {
    transform: rotateY(-180deg);
}

.container .cover img {
    position: absolute;
    height: 100%;
    width: 100%;
    object-fit: cover;
    z-index: 1;
    border-radius: 5px 0 5px 5px;
    /* backface-visibility: hidden; */
}

.container.cover .text span {
    position: absolute;
    height: 100%;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    z-index: 9991111111111111111110;
}

.container .content {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.container.form {
    height: 100%;
    width: 100%;
    background: #fff;
}

.content .login_form,
.content .signup_form {
    border-radius: 10px;
}

form .content .title {
    font-size: 24px;
    color: var(--brown);
    font-weight: bold;
    position: relative;
}

form .content .title:before {
    content: '';
    position: absolute;
    left: 0;
    height: .2rem;
    width: 2.4rem;
    background: var(--orange);
    border-radius: 20%;
}

form .content .input_boxes {
    margin-top: 30px;
}

form .content .input_box {
    height: 50px;
    width: 100%;
    display: flex;
    align-items: center;
    position: relative;
    margin: 10px 0;
}

.content .input_box input {
    outline: none;
    border: none;
    padding: 0 30px;
    font-size: 16px;
    font-weight: 500;
    border-bottom: 2px solid var(--cream);
    transition: all .4s ease;
    height: 70%;
    width: 100%;
}

.content .input_box input[type=submit] {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    align-self: center;
}

.content .input_box input:focus,
.content .input_box input:valid {
    border-color: var(--brown);
}

.content .input_box i {
    position: absolute;
    color: black;
    font-size: 17px;
}

.content .input_boxes a {
    color: var(--brown);
}

.content .input_boxes a:hover {
    text-decoration: 1px dashed var(--brown);
}

form .content .text {
    font-size: 14px;
    font-weight: 500;
    color: var(--orange);
}

form .content .text a {
    text-decoration: none;
}

form .content .text a:hover {
    text-decoration: underline;
}

form .content .submit_button input {
    background: var(--cream);
    color: var(--brown);
    height: 100%;
    border-radius: 5px;
    padding: 10px;
    border: none;
    cursor: pointer;
    transition: all 0.4s ease;
    width: 100%;
    margin-top: 1.5rem;
}

form .content .submit_button input:hover {
    background-color: var(--brown);
    color: var(--cream);
    font-weight: bolder;
    /* deeep */
}

form .content label {
    color: var(--brown);
}

form .content label:hover {
    color: var(--outline-hover)
}

.text_signup,
.text_login {
    margin-top: 25px;
    text-align: center;
    color: var(--orange);
}

.container #flip {
    display: none;
}

@media (max-width:730px) {
    .container .cover {
        display: none;
    }
    .content .login_form,
    .content .signup_form {
        width: 100%;
    }
    .content .signup_form {
        display: none;
    }
    .container #flip:checked~form .signup_form {
        display: block;
        color: #783505;
        align-items: center;
        justify-content: center;
    }
    .container #flip:checked~form .login_form {
        display: none;
    }
}
</style>


<div class="heads">KofCity Bakery</div>
    <div class="container">

        <input type="checkbox" id="flip">
        <div class="cover">

            <img src="pic/bumasg.jpg" alt="">

        </div>
        <form method="post" action="signup_page.php">
            <div class="content">
                <div class="login_form">
                    <div class="title">Login</div>
                    <div class="input_boxes">
                    <?php include('errors.php'); ?>

                        <div class="input_box">
                            <i class="fa fa-envelope"></i>
                            <input type="text" type="username" name="username"  placeholder="Email" required>
                        </div>
                        <div class="input_box">
                            <i class="fa fa-lock"></i>
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <div class="ftext"><a href="#">Forget Password?</a></div>
                        <button type="submit" class="btn" name="login_user">Login</button>
                       
                        <div class="text_login">Don't have an account? <label for="flip">SignUp</label></div>
                    </div>
                </div>
                <br>
        </form>

     

        <form method="post" action="signup_page.php">


            <div class="signup_form">
                <div class="title">SignUp</div>
                <div class="input_boxes">
                <?php include('errors.php'); ?>
                    <div class="input_box">
                        <i class="fa fa-user"></i>
                        <input type="username" name="username" value="<?php echo $username; ?>">
                    </div>
                    <div class="input_box">
                        <i class="fa fa-envelope"></i>
                        <input type="email" name="email" value="<?php echo $email; ?>">
                    </div>
                    <div class="input_box">
                        <i class="fa fa-lock"></i>
                        <input type="password" name="password_1">
                    </div>
                    <div class="input_box">
                        <i class="fa fa-lock"></i>
                        <input type="password" name="password_2">
                    </div>
                    <div class="input-group">
                <button type="submit" class="btn" name="reg_user">Register</button>
                </div>
                    <div class="text_signup">Already have an account?<label for="flip">Login</label></div>
                </div>
            </div>
            </div>


        </form>
    </div>