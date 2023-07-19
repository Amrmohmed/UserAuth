<?PHP include 'inc/header.php';     ?>
<?PHP include 'inc/nav.php';     ?>



<div class="container">
    <div class="row">
        <div class="col-8 mx-auto my-5">
            <h2 class="border p-2 my-2 text-center" style="background-color: burlywood;">Register</h2>

            <?php
            if (isset($_SESSION['errors'])) :
                foreach ($_SESSION['errors'] as $error) :  ?>
                    <div class=" alert alert-danger text-center">
                        <?php echo $error; ?>
                    </div>

            <?php endforeach;
                unset($_SESSION['errors']);
            endif;
            ?>

            <form action="handelers/handelRegister.php" method="post">
                <div class="mb-3">
                    <label>Full Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Email address</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group my-1 p-2">
                    <input type="submit" class="form-control" style="background-color:cornflowerblue"></input>
                </div>
            </form>
        </div>
    </div>
</div>


<?PHP include 'inc/footer.php';     ?>