<div id="body-content">
    <section id="page" class="container">
        <section class="row">
            <form class="form-horizontal formulaire" method="POST">
                <fieldset>
                    <legend>Login</legend>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="email">Email</label>  
                        <div class="col-md-4">
                            <input id="email" name="email" type="text" placeholder="Enter your email ..." class="form-control input-md" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="password">Password</label>
                        <div class="col-md-4">
                            <input id="password" name="password" type="password" placeholder="Enter your password ..." class="form-control input-md" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="submit"></label>
                        <div class="col-md-4">
                            <button id="submit" class="btn btn-success">Login</button>
                        </div>
                    </div>

                </fieldset>
            </form>
        </section>
       <button class="btn log btn-lg" id="button-signup" style="width:auto;" onclick="window.location.href='register'">Not registered yet ?</button>
        <section>
            <?php 
            if (isset($error)) {
                echo $error;
            }
            if (isset($success)) {
                echo $success;
            }
            ?>
        </section>
    </section>
</div>