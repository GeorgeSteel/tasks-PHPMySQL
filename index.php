<?php include("db.php");?>
<?php include("include/header.php");?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
                <form action="save-task.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Task title" autofocus>
                    </div>
                    <div class="form-group">
                        <textarea name="description" rows="2" class="form-control" placeholder="Task Description"></textarea>
                    </div>
                    <input type="submit" value="Save Task" class="btn btn-success btn-block" name="save_task">
                </form>
            </div>
        </div>
    </div>
</div>  

<?php include("include/footer.php");?>