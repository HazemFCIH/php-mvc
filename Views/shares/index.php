<div>
    <div class="row mb-5">
        <div class="col-md-6-offset-6">
    <a href="<?php ROOT_URL?>/shares/create" class="btn btn-success btn-share">
        Share Something
    </a>
    <!-- /.btn btn-success btn-share -->
        </div>
        <!-- /.col-md-6-offset-6 -->
    </div>
    <!-- /.row -->
    <div class="row text-start">
    <?php foreach ($viewmodel as $item) : ?>
    <div class="col-md-6">
    <div class="card bg-light">
        <div class="card-header">
            <h3><?php echo $item['title'];
                ?></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <small><?php echo $item['created_at'];?></small>
            <hr>
            <p><?php echo $item['body']; ?></p>
            <br>
            <a href="<?php echo $item['link'];?>" class="btn btn-primary" target="_blank">Go to Website</a>
            <!-- /.btn btn-default -->

        </div>
        <!-- /.card-body -->


    </div>
        <!-- /.card -->
    </div>
        <!-- /.col-md-6 -->

    <?php endforeach; ?>
    </div>
    <!-- /.row -->
</div>
