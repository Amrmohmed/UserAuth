<?PHP include 'inc/header.php';     ?>
<?PHP include 'inc/nav.php';     ?>


<div class="continer">
    <div class="row">
        <div class="col-8 mx-auto my-5 bordee p-2">
            <h2 class="border p-2 bg-success p-2"> Nmae : <?php echo $_SESSION['auth'][0] ?></h2>
            <h2 class="border p-2 bg-primary p-2 "> Email : <?php echo $_SESSION['auth'][1] ?></h2>
        </div>
    </div>
</div>
s
<?PHP include 'inc/footer.php';     ?>