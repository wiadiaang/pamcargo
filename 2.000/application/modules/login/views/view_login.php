<!DOCTYPE HTML>
<html>

    <head>

        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>

        <title>Help Desk</title>

        <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/image/favicon.png"/>
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/normal.css"/>
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/index.css"/>
        <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
        <script>

            $(document).ready(function(){

                $('.info').click(function(){
                    $(this).slideUp('fast');
                });

            });

        </script>

    </head>

    <body>

        <main>

            <section>

                <div class="box">

                    <div class="left">

                        <!-- <div class="text">Login User</div> -->
                        <img class="monoLogo" src="https://sms.rembon.co.id/help_desk/assets/image/logox.png"/>

                    </div>

                    <form class="signIn" action="<?php echo base_url(); ?>/login/Authentication/login" method="POST">

                        <div class="obj">

                            <label>Username</label>
                            <img src="<?php echo base_url();?>assets/image/new/email.png"/>
                            <input type="text" name="username" placeholder="Username" spellcheck="false" required/>

                        </div>

                        <div class="obj">

                            <label>Password</label>
                            <img src="<?php echo base_url();?>assets/image/new/password.png"/>
                            <input type="password" name="password" placeholder="Password" required/>

                        </div>

                        <?php if($this->session->flashdata('message')){ ?>
                        <div class="info">

                            <img class="warning" src="<?php echo base_url();?>assets/image/new/warning.png"/>
                            <span><?php echo $this->session->flashdata('message'); ?></span>

                        </div>
                        <?php } ?>

                        <input type="submit" value="Sign In"/>

                    </form>

                </div>

            </section>

            <div id='copyright'>&copy 2018 by Tegar Kurniawan</div>

        </main>

    </body>

</html>