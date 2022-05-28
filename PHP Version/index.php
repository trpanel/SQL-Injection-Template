<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--===== CSS =====-->
        <link rel="stylesheet" href="style.css">

        <title>Login - TR Panel</title>
    </head>
    <body>
        <div class="l-form">
            <form action="backend.php" class="form" method="post">
                <h1 class="form__title">TR Panel</h1>
                <?php if(isset($_GET['error'])){ ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <br>
                <?php if(isset($_GET['success'])){ ?>
                    <p class="success"><?php echo $_GET['success']; ?></p>
                <?php } ?>
                <div class="form__div">
                    <input type="text" class="form__input" name="email" placeholder=" ">
                    <label for="" class="form__label">Email</label>
                </div>
                <div class="form__div">
                    <input type="password" class="form__input" name="password" placeholder=" ">
                    <label for="" class="form__label">Password</label>
                </div>
                <input type="submit" class="form__button" value="Sign In">
            </form>
        </div>
        <?php if(isset($_GET['pass_query'])){ ?>
                    <p class="pass_query"><?php echo $_GET['pass_query']; ?></p>
                <?php } ?>
    </body>
</html>

<?php
