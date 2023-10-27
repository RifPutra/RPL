<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>My Laundry - Login</title>
    <style>

    </style>
</head>

<body>
    <div class="container" style="padding-bottom: 30px; padding-top:5px; background-color: #1F4172;">
        <div class="container">
            <center>
                <h1 style="color: white; margin-top: 2rem; font-weight: bold;">LOGIN</h1>

            </center>
            <br>
            <div class="row">
                <div class="col-sm-4" style="border-radius: 40px 0 0 40px; padding: 30px 30px 30px 9px; background-color: white;">
                    <img src="<?= base_url() ?>assets/img/logo87.png" alt="" style="width: 110%; height: auto;">
                </div>
                <div class="col-sm-8" style="border-radius: 0 40px 40px 0; padding-bottom: 30px; padding-top:30px; background-color:#FDF0F0;">
                    <?php
                    if ($this->session->flashdata('success_register') != '') {
                        echo '<div class="alert alert-success" role="alert">';
                        echo $this->session->flashdata('success_register');
                        echo '</div>';
                    }
                    ?>
                    <form action="<?php echo base_url(); ?>login/proses_login" method="post" style="margin: 5rem 3rem 0 3rem ;">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nomor Telepon</label>
                            <input type="number" class="form-control" name="telepon" id="telepon" aria-describedby="emailHelp" placeholder="Masukan Nomor Telepon Anda ...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        </div>
                        <br>
                        <p class="text-center" style="color: black;">Belum punya akun? <a href="<?php echo base_url('register'); ?>" style="color: #1F4172;">Daftar Sekarang</a></p>

                        <button type="submit" class="btn btn-info btn-block" style="background-color: #1F4172;">Login</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>