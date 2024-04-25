@extends('backend.layouts.app')
@section('title', 'HSBLCO | Resort')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add Branch Information </h1>
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
            <form action="{{route('branch.update', $edit->id)}}" method="post" class="row" enctype="multipart/form-data">
              @method('PUT')
              @csrf
              @else

              <form action="{{route('branch.store')}}" method="post" class="row" enctype="multipart/form-data">
                @csrf
                @endif
                <div class="form-group col-3">
                  <label for="name">Branch Name</label>
                  <input type="text" id="name" name="name" required value="{{(isset($edit) ) ? ($edit->name) :('') ;  }}" class="form-control">
                  @error('name')
                  <span style="color: red">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group col-3">
                  <label for="phone">Branch Phone</label>
                  <input type="text" id="phone" name="phone" required value="{{(isset($edit) ) ? ($edit->phone) :('') ;  }}" class="form-control">
                  @error('phone')
                  <span style="color: red">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group col-3">
                  <label for="email">E-mail</label>
                  <input type="email" id="email" name="email" required value="{{(isset($edit) ) ? ($edit->email) :('') ;  }}" class="form-control">
                  @error('email')
                  <span style="color: red">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group col-3">
                  <label for="map">Map</label>
                  <input type="text" id="map" name="map" required value="{{(isset($edit) ) ? ($edit->map) :('') ;  }}" class="form-control">
                  @error('map')
                  <span style="color: red">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group col-3">
                  <label for="contact_banner">Contact Banner</label>
                  <input type="text" id="contact_banner" name="contact_banner" required value="{{(isset($edit) ) ? ($edit->contact_banner) :('') ;  }}" class="form-control">
                  @error('contact_banner')
                  <span style="color: red">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group col-3">
                  <label for="feature_photo">Feature Photo</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" {{ (!isset($edit) ) ? ('require') :('') ; }} class="form-control" name="feature_photo" id="feature_photo">
                    </div>
                  </div>
                  @if(isset($edit))
                  <span>
                    <img style="height:30px; width: 50px;" src="{{ asset('uploads/pictures/' . (isset($edit) ? $edit->feature_photo : '') )}}" alt="Picture">
                  </span>
                  @endif
                </div>

                <div class="form-group col-3">
                  <label for="about_photo_1">About Photo 1</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" {{ (!isset($edit) ) ? ('require') :('') ; }} class="form-control" name="about_photo_1" id="about_photo_1">
                    </div>
                  </div>
                  @if(isset($edit))
                  <span>
                    <img style="height:30px; width: 50px;" src="{{ asset('uploads/pictures/' . (isset($edit) ? $edit->about_photo_1 : '') )}}" alt="Picture">
                  </span>
                  @endif
                </div>

                <div class="form-group col-3">
                  <label for="about_photo_2">About Photo 2</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="form-control" name="about_photo_2" {{ (!isset($edit) ) ? ('require') :('') ; }} id="about_photo_2">
                    </div>
                  </div>
                  @if(isset($edit))
                  <span>
                    <img style="height:30px; width: 50px; " src="{{asset('uploads/pictures/'.(isset($edit)  ? $edit->about_photo_2 :'') )}}" alt="Picture">
                  </span>
                  @endif
                </div>

                <div class="form-group col-3">
                  <label for="about_photo_3">About Photo 3</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="form-control" name="about_photo_3" {{ (!isset($edit) ) ? ('require') :('') ; }} id="about_photo_3">
                    </div>
                  </div>

                  @if(isset($edit))
                  <span>
                    <img style="height:30px; width: 50px; " src="{{asset('uploads/pictures/'.(isset($edit)  ? $edit->about_photo_3 :'' ) )}}" alt="Picture">
                  </span>
                  @endif
                </div>

                <div class="form-group col-3">
                  <label for="video">Video</label>
                  <input type="text" id="video" name="video" {{ (!isset($edit) ) ? ('require') :('') ; }} value="{{(isset($edit) ) ? ($edit->video) :('') ;  }}" class="form-control">
                  @if(isset($edit))
                  <span>
                    <video style="height:80px; width: 100px; " src="{{asset('uploads/videos/'.(isset($edit)  ? $edit->video :'' ) )}}"></video>
                  </span>
                  @endif
                  @error('video')
                  <span style="color: red">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group col-3">
                  <label for="address">Address</label>
                  <textarea name="address" required id="address" class="form-control" rows="2" placeholder="Enter ...">{{(isset($edit) ) ? ($edit->address) :('') ;  }}</textarea>
                </div>

                <div class="form-group col-3">
                  <label for="about_text">About</label>
                  <textarea name="about_text" required id="about_text" class="form-control" rows="2" placeholder="Enter ...">{{(isset($edit) ) ? ($edit->about_text) :('') ;  }}</textarea>
                </div>

                <div class="form-group col-3">
                  <label for="about_banner">About Banner</label>
                  <textarea name="about_banner" required id="about_banner" class="form-control" rows="2" placeholder="Enter ...">{{(isset($edit) ) ? ($edit->about_banner) :('') ;  }}</textarea>
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