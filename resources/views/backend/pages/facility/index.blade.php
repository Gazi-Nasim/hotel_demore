@extends('backend.layouts.app')
@section('title', 'HSBLCO | Facility')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add Facility </h1>
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
            <form action="{{route('facility.update', $edit->id)}}" method="post" class="row" enctype="multipart/form-data">
              @method('PUT')
              @csrf
              @else

              <form action="{{route('facility.store')}}" method="post" class="row" enctype="multipart/form-data">
                @csrf
                @endif
                <div class="form-group col-6">
                  <label for="branch_id">Branch</label>
                  <select name="branch_id" id="branch_id" class="form-control" required>
                    <option value="">Select</option>
                    @foreach($branches as $branch)
                    <option value="{{ $branch->id }}" {{ isset($edit) && $edit->branch_id === $branch->id ? 'selected' : '' }}> {{ $branch->name }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group col-6">
                  <label for="name">Name</label>
                  <input type="text" id="name" name="name" required value="{{(isset($edit) ) ? ($edit->name) :('') ;  }}" class="form-control">
                  @error('name')
                  <span style="color: red">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group col-6">
                  <label for="details">Details</label>
                  <textarea name="details" required id="details" class="form-control" rows="2" placeholder="Enter ...">{{(isset($edit) ) ? ($edit->details) :('') ;  }}</textarea>
                </div>

                <div class="form-group col-6">
                  <label for="icon">Photo</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="form-control" name="icon" id="icon" {{ (!isset($edit)  ? 'required' :'' ) }}>
                    </div>
                  </div>

                  @if(isset($edit))
                  <span>
                    <img style="height:30px; width: 50px; " src="{{asset('uploads/pictures/'.(isset($edit)  ? $edit->icon :'' ) )}}" alt="Picture">
                  </span>
                  @endif
                  @error('icon')
                  <span style="color: red">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group col-12">
                  <label for="address"></label>
                  <input type="submit" value="Save" class="btn btn-success btn-block">
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