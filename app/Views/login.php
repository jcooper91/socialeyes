<!DOCTYPE html>
<html lang="en" class="home">
    <head>
        <?php echo view("widgets/head"); ?>
        <link href="<?= base_url('themes/css/login.css'); ?>" rel="stylesheet" type="text/css" />
    </head>
    <body id="login-body">
        <div class="login-container">
            <form>
                <div class="input-field">
                    <label for="email">Email</label>
                    <input type="text" id="email">
                </div>
                <div class="input-field">
                    <label for="pssword">Password</label>
                    <input type="text" id="email">
                </div>
                 <button class="btn waves-effect waves-light" type="submit" name="action">Submit</button>
            </form>
            <p><small>Not singed up? Create a user <a href="<?=base_url('user/signup')?>">here</a></small></p>
        </div>
    </body>
</html>