<div class="row text-start">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                Register
            </h3>
            <!-- /.card-title -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
                <div class="form-group">
                    <label for="name">User Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                    <!-- /#title.form-control -->
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" id="email" class="form-control">
                    <!-- /#title.form-control -->
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                    <!-- /#title.form-control -->
                </div>
                <!-- /.form-group -->
                <br>
                <input type="submit" value="Submit" name="submit" class="btn btn-primary">
<!--                <a href="--><?php //echo ROOT_URL?><!--/shares" class="btn btn-danger">Cancel</a>-->
                <!-- /.btn btn-danger -->
                <!-- /.btn btn-primary -->
            </form>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.col-md-6 -->
