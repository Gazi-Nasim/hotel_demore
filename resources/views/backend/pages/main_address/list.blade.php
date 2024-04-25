@extends('backend.layouts.app')
@section('title', 'HSBLCO | Main Address List')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Main Address List </h1>
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
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- /.card -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
              @include('backend.layouts.messages')
              <table id="example1" class="table table-bordered table-striped ">
                <thead>
                  <tr>
                    <th>Title</th>
                    <th>Phone</th>
                    <th>Address</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $tData)
                  <tr>
                    <td>{{$tData->title ?? ''}}</td>
                    <td>{{$tData->phone ?? ''}}</td>
                    <td>{{$tData->address ?? ''}}</td>

                    <td>
                      <a href="{{ route('main_address.edit', $tData->id) }}" style='float: left;' class="btn btn-primary"><i class="fas fa-pen-square"></i></a>
                      @if(Auth::guard('web')->user()->name != $tData->name)
                      <form action="{{ route('main_address.destroy', $tData->id) }}" style='float: left;' class="left" method="post">
                        @method('Delete')
                        @csrf
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="fas fa-trash-alt"></i></button>
                      </form>
                      @endif
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection