@extends('backend.layouts.app')
@section('title', 'HSBLCO | General Information')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add General Information </h1>
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
            <form action="{{route('general.update', $edit->id)}}" method="post" class="row" enctype="multipart/form-data">
              @method('PUT')
              @csrf
              @else
              <form action="{{route('general.store')}}" method="post" class="row" enctype="multipart/form-data">
                @csrf
                @endif
                <div class="form-group col-4">
                  <label for="name">Company Name</label>
                  <input type="text" id="name" name="name" required value="{{ isset($edit) ? $edit->name : (old('name') ? old('name') : '') }}" class="form-control">
                  @error('name')
                  <span style="color: red">{{ $message  }}</span>
                  @enderror


                </div>
                {{--{{$data}}--}}
                <div class="form-group col-4">
                  <label for="about_short">Short About</label>
                  <input type="text" id="about_short" name="about_short" required value="{{ old('about_short', isset($edit) ? $edit->about_short : '') }}" class="form-control">
                  @error('about_short')
                  <span style="color: red">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group col-4">
                  <label for="reservation">Reservation</label>
                  <input type="text" required id="reservation" name="reservation" {{ (!isset($edit) ) ? ('require') :('') ; }} value="{{ old('reservation', isset($edit) ? $edit->reservation : '') }}" class="form-control">
                  @error('reservation')
                  <span style="color: red">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group col-4">
                  <label for="whatsapp">Whatsapp</label>
                  <input type="text" required id="whatsapp" name="whatsapp" {{ (!isset($edit) ) ? ('require') :('') ; }} value="{{ old('whatsapp', isset($edit) ? $edit->whatsapp : '') }}" class="form-control">
                  @error('whatsapp')
                  <span style="color: red">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group col-4">
                  <label for="fb">Facebook</label>
                  <input type="text" required id="fb" name="fb" {{ (!isset($edit) ) ? ('require') :('') ; }} value="{{ old('fb', isset($edit) ? $edit->fb : '') }}" class="form-control">
                  @error('fb')
                  <span style="color: red">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group col-4">
                  <label for="youtube">Youtube</label>
                  <input type="text" required id="youtube" name="youtube" {{ (!isset($edit) ) ? ('require') :('') ; }} value="{{ old('youtube', isset($edit) ? $edit->youtube : '')}}" class="form-control">
                  @error('youtube')
                  <span style="color: red">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group col-4">
                  <label for="instagram">Instagram</label>
                  <input type="text" required id="instagram" name="instagram" {{ (!isset($edit) ) ? ('require') :('') ; }} value="{{ old('instagram', isset($edit) ? $edit->instagram : '')}}" class="form-control">
                  @error('instagram')
                  <span style="color: red">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group col-4">
                  <label for="twitter">Twitter</label>
                  <input type="text" required id="twitter" name="twitter" {{ (!isset($edit) ) ? ('require') :('') ; }} value="{{ old('twitter', isset($edit) ? $edit->twitter : '')}}" class="form-control">
                  @error('twitter')
                  <span style="color: red">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group col-4">
                  <label for="pinterest">Pinterest</label>
                  <input type="text" required id="pinterest" name="pinterest" {{ (!isset($edit) ) ? ('require') :('') ; }} value="{{ old('pinterest', isset($edit) ? $edit->pinterest : '')}}" class="form-control">
                  @error('pinterest')
                  <span style="color: red">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group col-4">
                  <label for="logo">Logo</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="form-control" name="logo" id="logo" {{ (!isset($edit) ) ? ('require') :('') ; }}>
                    </div>
                  </div>
                  <span>
                    <img style="height:30px; width: 50px; " src="{{ asset('uploads/pictures/' . (isset($edit) ? $edit->logo : '')) }}" alt="Picture">
                  </span>
                </div>

                <div class="form-group col-4">
                  <label for="about_full">Details About</label>
                  <textarea name="about_full" required id="about_full" class="form-control" rows="2" placeholder="Enter ...">{{ old('about_full', isset($edit) ? $edit->about_full : '')}}</textarea>
                </div>

                <div class="form-group col-4">
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