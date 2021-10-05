<?php 
    date_default_timezone_set("America/Santiago");

    // $fecha = date("d-m-Y G:i:s");
    $year = date("Y");
?>



<?php echo '
<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Your Website '.$year.'</div>
            <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
</footer>

';

?>