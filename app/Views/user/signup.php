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
                    <input type="text" id="firstname" name="firstname" placeholder="Firtname">
                </div>
                <div class="input-field">
                    <input type="text" id="lastname" name="lastname">
                </div>
                <div class="input-field">
                    <input type="text" id="username" name="username">
                </div>
                <div class="input-field">
                    <input type="text" id="email" name="email">
                </div>
                <div class="input-field">
                    <input type="password" id="password" name="password">
                </div>
                <div class="input-field">
                    <input type="password" id="confirm_pssword" name="confirm_pssword">
                </div>
                <input type="hidden" name="action" value="signup" />
                 <button class="btn waves-effect waves-light" type="submit">Submit</button>
            </form>
            <p><small>Already have an account? Login <a href="<?=base_url('login')?>">here</a></small></p>
        </div>
    </body>
</html>