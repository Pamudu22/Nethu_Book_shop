<?php

    

    if (isset($_SESSION['message'])){
        ?><div class="alert alert-warning alert-dismissible fade show" role="alert" style="width: 50%; text-align: center; margin-left:25%;margin-top:20px;">
        <strong>Hey!</strong> <?= $_SESSION['message']?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        <?php 
    }
    unset($_SESSION['message']);
    if (isset($_SESSION['msg'])){
        ?><div class="alert alert-warning alert-dismissible fade show" role="alert" style="width: 50%; text-align: center; margin-left:25%;margin-top:20px;">
        <strong>Hey!</strong> <?= $_SESSION['msg']?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        <?php
    }
    unset($_SESSION['msg']);

    if (isset($_SESSION['otp'])){

          ?><div aria-live="polite" aria-atomic="true" class="bg-dark position-relative bd-example-toasts">
        <div class="toast-container position-absolute p-3" id="toastPlacement">
          <div class="toast">
            <div class="toast-header">
              <img src="..." class="rounded me-2" alt="...">
              <strong class="me-auto">Your OTP is</strong>
              <small></small>
            </div>
            <div class="toast-body">
            <? $_SESSION['otpcd'];?>
            </div>
          </div>
        </div>
      </div><?php
      }
     

?>