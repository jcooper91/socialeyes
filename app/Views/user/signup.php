<!DOCTYPE html>
<html lang="en" class="home">
    <head>
        <?php echo view("widgets/head"); ?>
        <link href="<?= base_url('themes/css/signup.css'); ?>" rel="stylesheet" type="text/css" />
    </head>
    <body id="signup-body">
        <div class="signup-container">
            <h1 class="center-align">social<i class="far fa-eye"></i> eyes</h1>
            <h5 class="center-align">Please register your details for socialeyes</h5>
            <form id="signup-form" method="post" action="<?=base_url("user/signup");?>">
                <div class="input-field">
                    <label for="firstname">Firstname</label>
                    <input type="text" id="firstname" name="firstname">
                </div>
                <div class="input-field">
                    <label for="lastname">Lastname</label>
                    <input type="text" id="lastname" name="lastname">
                </div>
                <div class="input-field">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username">
                </div>
                <div class="input-field">
                    <label for="email">Email (Use this to login in)</label>
                    <input type="text" id="email" name="email">
                </div>
                <div class="input-field">
                    <label for="pssword">Password</label>
                    <input type="text" id="password" name="password">
                </div>
                <div class="input-field">
                    <label for="confirm_pssword">Confirm Password</label>
                    <input type="text" id="confirm_pssword" name="confirm_pssword">
                </div>
                <input type="hidden" name="action" value="signup" />
                 <button class="btn waves-effect waves-light" type="submit">Submit</button>
            </form>
            <p><small>Already have an account? Login <a href="<?=base_url('login')?>">here</a></small></p>
        </div>
    </body>
</html>