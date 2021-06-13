<div class="row text-start">

<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            Share Something
        </h3>
        <!-- /.card-title -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
            <div class="form-group">
                <label for="title">Share Title</label>
                <input type="text" name="title" id="title" class="form-control">
                <!-- /#title.form-control -->
            </div>
            <!-- /.form-group -->
            <div class="form-group">
                <label for="body">Description</label>
                <textarea  name="body" id="body" class="form-control"></textarea>
                <!-- /#title.form-control -->
            </div>
            <!-- /.form-group -->
            <div class="form-group">
                <label for="link">Share Link</label>
                <input type="text" name="link" id="link" class="form-control">
                <!-- /#title.form-control -->
            </div>
            <!-- /.form-group -->
            <br>
            <input type="submit" value="Submit" name="submit" class="btn btn-primary">
            <a href="<?php echo ROOT_URL?>/shares" class="btn btn-danger">Cancel</a>
            <!-- /.btn btn-danger -->
            <!-- /.btn btn-primary -->
        </form>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
    </div>
    <!-- /.col-md-6 -->
