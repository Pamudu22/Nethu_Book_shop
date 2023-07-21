<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <?php
    if(isset($_SESSION['status']) && $_SESSION['status'] !=''){?>
    <script>
           swal({
            title: "<?php echo $_SESSION['status'];?>",
            text: "",
            icon: "<?php echo $_SESSION['status_code'];?>",
            button: "Done",
            });
     </script>
     <?php
        unset($_SESSION['status']);
    }
        ?>

            