<div>
    {{-- สร้าง  UI --}}
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Edit User </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
                <form wire:submit.prevent="insert" wire:ignore.self class="form-horizontal">
                <div class="form-group">
                    <label for="inputName">Name</label>
                    <input type="text" wire:model="name" id="inputName" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" wire:model="email" id="inputEmail" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" wire:model="password" id="inputPassword" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="inputPhoto">Photo</label>
                    <input type="file" wire:model="photo" id="inputPhoto" class="form-control">
                  </div>

                  <div class="col-12">
                    <a href="#" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Submit" class="btn btn-success float-right">
                  </div>
                </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
    </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
