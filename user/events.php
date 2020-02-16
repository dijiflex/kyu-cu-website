<?php require 'includes/topnav.php';
if ($_SESSION['user_type'] === "normal") {
    redirect("user.php");
}
?>

<main class="wrapper">
    <!-- Right side navigation -->
    <?php require 'includes/sidenav.php'?>
    <!--  End of Right side navigation -->

    <div class="content container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col">
                        <form id="eventpost" class="logform px-2 " action="includes/register.inc.php" method="POST">

                            <div class="img-div">

                                <h4 class=" text-center">Register Event Here</h4>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail">Event Name</label>
                                <input type="text" class="form-control form-control-sm" id="eventname"
                                    aria-describedby="emailHelp" placeholder="" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail">Event Date</label>
                                <input type="date" class="form-control form-control-sm" id="eventdate"
                                    aria-describedby="emailHelp" placeholder="" name="date" required>
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Enter Event Description</label>
                                <textarea class="form-control"  name="eventdesc" form-control-sm" id="eventdesc"
                                    required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Enter Event Poster </label>
                                <input type="file" name="eventimage" class="form-control form-control-sm" id="eventimage"
                                    required>
                            </div>
                            <button id="submitReg" type="submit" class="btn btn-success d-flex mx-auto "
                                name="event-submit">Post</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
            To be the source of true light shinning in the University and to the entire globe for God's Glory.
            </div>

        </div>
    </div>
</main>








<script src="js/lib/jquery-3.2.1.min.js"> </script>
<script src="js/lib/popper.min.js">
</script>
<script src="js/lib/bootstrap.min.js"> </script>

<script src="js/app/event.js"> </script> 
 <!-- Side Navigation Scripts -->
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