<?php require 'includes/topnav.php';
if ($_SESSION['user_type'] === "normal") {
    redirect("user.php");
}
?>

<main class="wrapper">
    <!-- Right side navigation -->
    <?php require 'includes/sidenav.php'?>
    <!--  End of Right side navigation -->

    <div class="content container-fluid mt-2">
        <!-- List OF ALL Members -->
        <div class="row">
            <div class="col "> <button class="btn btn-outline-success"> <span><i class="fas fa-user-plus"></i></span>
                    Add New Member</button></div>
        </div>
        <div class="row">

        </div>
    </div>
</main>


<script src="js/jquery-3.2.1.min.js"> </script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"> </script>
<script src="js/admin.js"> </script> <!-- Side Navigation Scripts -->
<script>
    $(document).ready(function() {
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
        });
    });
    document.querySelector('.content').addEventListener('click', function() {
        document.getElementById('sidebar').classList.remove('active');

    })
    document.querySelector('.navbar-nav').addEventListener('click', function() {
        document.getElementById('sidebar').classList.remove('active');

    })
</script>





</body>

</html>