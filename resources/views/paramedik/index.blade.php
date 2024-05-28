@include('layouts.header')
@include('layouts.sidebar')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard Paramedik</h1>
          </div>
          <div class="col-sm-6">
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

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

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
          <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>nama</th>
          <th>gender</th>
          <th>temp_lahir</th>
          <th>tgl_lahir</th>
          <th>kategori</th>
          <th>telpon</th>
          <th>alamat</th>
          <th>unit_kerja_id</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody> 
        @foreach ($list_paramedik as $paramedik )
        <tr>
          <td></td>
          <td>{{ $paramedik->nama}}</td>
          <td>{{ $paramedik->gender }}</td>
          <td>{{ $paramedik->temp_lahir }}</td>
          <td>{{ $paramedik->tgl_lahir }}</td>
          <td>{{ $paramedik->kategori }}</td>
          <td>{{ $paramedik->telpon }}</td>
          <td>{{ $paramedik->alamat }}</td>
          <td>{{ $paramedik->unit_kerja_id }}</td>

          <td>        
          <a href=""><button class="btn btn-success">Detail</button></a>
        <a href=""><button class="btn btn-success">Edit</button></a>
        <a href=""><button class="btn btn-success">Hapus</button></a></td>
        </tr>
        @endforeach
        <!-- Add more rows if needed -->
      </tbody>
    </table>
  </div>
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

  @include('layouts.footer')