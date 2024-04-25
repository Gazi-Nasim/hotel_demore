@extends('backend.layouts.app')
@section('title', 'HSBLCO | Main Address')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add Main Address </h1>
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
      <div class="col-12">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">General</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>

          <div class="card-body">
            @include('backend.layouts.messages')
            @if(isset($edit))
            <form action="{{route('main_address.update', $edit->id)}}" method="post" class="row" enctype="multipart/form-data">
              @method('PUT')
              @csrf
              @else

              <form action="{{route('main_address.store')}}" method="post" class="row" enctype="multipart/form-data">
                @csrf
                @endif

                <div class="form-group col-6">
                  <label for="title">Title</label>
                  <input type="text" id="title" name="title" required value="{{(isset($edit) ) ? ($edit->title) :('') ;  }}" class="form-control">
                  @error('title')
                  <span style="color: red">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group col-6">
                  <label for="phone">Phone</label>
                  <input type="text" id="phone" name="phone" required value="{{(isset($edit) ) ? ($edit->phone) :('') ;  }}" class="form-control">
                  @error('phone')
                  <span style="color: red">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group col-6">
                  <label for="address">Address</label>
                  <textarea name="address" required id="address" class="form-control" rows="2" placeholder="Enter ...">{{(isset($edit) ) ? ($edit->address) :('') ;  }}</textarea>
                </div>

                <div class="form-group col-6">
                  <label for="address">Save</label>
                  <input type="submit" value="Action" class="btn btn-success btn-block">
                </div>
              </form>

          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection