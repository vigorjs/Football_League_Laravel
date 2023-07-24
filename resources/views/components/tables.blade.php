<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">{{$tablename}}</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            {{-- @foreach ($data as data) --}}
                <tr>
                    <td>{{--$loop->iteration--}}{{$nomer}}</td>
                    <td>{{--data->name--}}{{$name}}</td>
                    <td>{{--data->email--}}{{$email}}</td>
                    <td>
                        <a href="" class="btn btn-primary"><i class="fas fa-pen"></i>Edit</a>
                        <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Hapus</a>
                    </td>
                </tr>
            {{-- @endforeach --}}
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
