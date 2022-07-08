<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        h2{
            margin:0px 0px 30px 0px;
            text-align:center;
        }
        .form-group{
            margin:30px;
        }
    </style>

    <title>Daftar Suplier</title>
  </head>
  <body>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <h2>Form Kelola Data Users</h2>

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Form Data Users</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">

        <!-- ini untuk ngatur hidden field nya -->
        <?php
            $hidden = ['users_edit'=> $users_edit->id];
        ?>
        <?php echo form_open('users/save', '', $hidden)?>
        <div class="form-group row">
                <label for="id" class="col-4 col-form-label">ID</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-card"></i>
                    </div>
                    </div> 
                    <input id="id" name="id" value="<?=$users_edit->id?>" placeholder="Masukkan ID" type="text" class="form-control">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="username" class="col-4 col-form-label">Username</label> 
                <div class="col-8">
                <input id="username" name="username" value="<?=$users_edit->username?>" placeholder="Masukkan Username" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="Password" class="col-4 col-form-label">Password</label> 
                <div class="col-8">
                <input id="Password" name="Password" value="<?=$users_edit->password?>" placeholder="Masukkan Password" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label> 
                <div class="col-8">
                <input id="email" name="email" value="<?=$users_edit->email?>" placeholder="Masukkan Email" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="created_at" class="col-4 col-form-label">Created At</label> 
                <div class="col-8">
                <input id="created_at" name="created_at" value="<?=$users_edit->created_at?>" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="last_login" class="col-4 col-form-label">Last Login</label> 
                <div class="col-8">
                <input id="last_login" name="last_login" value="<?=$users_edit->last_login?>" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="status" class="col-4 col-form-label">Status</label> 
                <div class="col-8">
                <input id="status" name="status" value="<?=$users_edit->status?>" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="role" class="col-4 col-form-label">Role</label> 
                <div class="col-8">
                <input id="role" name="role" value="<?=$users_edit->role?>" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        <?php echo form_close()?>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->