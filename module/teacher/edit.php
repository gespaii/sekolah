<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Guru</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href=".">Home</a></li>
              <li class="breadcrumb-item active">Edit Guru</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                <div class="card-header row">
                    <div class="card-title h3 col-8">Edit Guru</div>
                    <div class="col-4">
                        <a href="?m=teacher" class="btn btn-large btn-info" style="float: right;"> <i class="fas fa-undo"></i>&nbsp; Kembali</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <?php
                include_once('config.php');
                $id = $_GET['id'];
                $sql = "SELECT * FROM teachers WHERE id = '$id'"; 
                $result = mysqli_query($config, $sql);
                $row = mysqli_fetch_assoc($result);
                ?>
                <div class="card-body">
                    <form action="?m=teacher&s=update" method="post">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <from class="input-group-text"><i class="fas fa-copy"></i></span>
                            </div>
                            <input type="text" name="teacher" class="form-control" value="<?= $row['teacher'] ?>" placeholder="Nama Guru" required autofocus>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <from class="input-group-text"><i class="fas fa-user-clock"></i></span>
                            </div>
                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                            <input type="text" name="hours" class="form-control" value="<?= $row['hours'] ?>" placeholder="Jam Guru" maxlength="2" required>
                        </div>
                        <div class="input-group mb-3">
                                <input type="submit" name="update" class="btn btn-md btn-primary" value="Update">&nbsp;
                                <input type="reset" class="btn btn-md btn-warning">
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->

        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->