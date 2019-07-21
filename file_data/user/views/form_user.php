<div style="margin-top: 50px; background-color: white; width: 80px; height: 80px; padding: 20px; padding-left: 25px; margin-bottom: -50px; margin-left: 15px; box-shadow: 0px 0px 10px gray; position: relative;"> <h2><i class="fa fa-user"></i></h2> </div>
<div class="page-header">
    <div class="page-title">
        <div style="margin-left: 100px; font-weight: bold; font-size: 20px; padding-top: 10px">Data User</div>
        <ol class="breadcrumb" style="padding-top: 10px; text-align: right; padding-left: 100px; text-align: right;">
            <li><a href="admin.php">Dashboard</a></li>
            <li>Master Data</li>
            <li class="active">Tambah Data User</li>
            
        </ol>
    </div>
</div>
<div class="breadcrumbs" >
  <div class="content mt-3" style="margin-left: -5px; width: 102%">
    <div class="card">
      <div class="card-header">
        <strong>Form</strong> Tambah Data User
      </div>
      <div class="card-body card-block">
        <form action="?target=user&action=input" method="post" enctype="multipart/form-data" class="form-horizontal">
          <input type="hidden" name="id_user">

          <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Username</label></div>
            <div class="col-9 col-md-6"><input type="text" name="username" placeholder="Username" class="form-control"></div>
          </div>

          <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Password</label></div>
            <div class="col-9 col-md-6"><input type="password" name="password" placeholder="Password" class="form-control"></div>
          </div> 

          <div class="row form-group">
            <div class="col col-md-3"><label for="select" class="form-control-label">level</label></div>
            <div class="col-9 col-md-6">
              <select name="level" id="select" class="form-control">
                <option value="">
                    pilih Level
                </option>
                <option value="admin">
                    admin
                </option>
                <option value="staff">
                    staff
                </option>
            </select>
            </div>  
          </div>        

          <button type="submit" class="btn btn-success" style="border-radius: 5px"> <i class="fa fa-check-square-o"></i> Simpan </button>
          <a href="?target=user" class="btn btn-danger" style="border-radius: 5px"> <i class="fa fa-arrow-circle-left"></i> Kembali</a>

        </form>
      </div>
    </div>
  </div>
</div>