@extends('backend.layouts.app')
@section('title', 'HSBLCO | Room')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add Room </h1>
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
            <form action="{{route('room.update', $edit->id)}}" method="post" class="row" enctype="multipart/form-data">
              @method('PUT')
              @csrf
              @else
              <form action="{{route('room.store')}}" method="post" class="row" enctype="multipart/form-data">
                @csrf
                @endif
                <div class="form-group col-4">
                  <label for="branch_id">Branch</label>
                  <select name="branch_id" id="branch_id" class="form-control" required>
                    <option value="">Select</option>
                    @foreach($branches as $branch)
                    <option value="{{ $branch->id }}" {{ isset($edit) && $edit->branch_id === $branch->id ? 'selected' : '' }}> {{ $branch->name }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group col-4">
                  <label for="name">Name</label>
                  <input type="text" id="name" name="name" required value="{{(isset($edit) ) ? ($edit->name) :('') ;  }}" class="form-control">
                  @error('name')
                  <span style="color: red">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group col-4">
                  <label for="price">Price</label>
                  <input type="price" id="price" name="price" required value="{{(isset($edit) ) ? ($edit->price) :('') ;  }}" class="form-control">
                  @error('price')
                  <span style="color: red">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group col-4">
                  <label for="size">Size</label>
                  <input type="size" id="size" name="size" required value="{{(isset($edit) ) ? ($edit->size) :('') ;  }}" class="form-control">
                  @error('size')
                  <span style="color: red">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group col-4">
                  <label for="view">View</label>
                  <input type="view" id="view" name="view" required value="{{(isset($edit) ) ? ($edit->view) :('') ;  }}" class="form-control">
                  @error('view')
                  <span style="color: red">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group col-4">
                  <label for="person">Person</label>
                  <input type="person" id="person" name="person" required value="{{(isset($edit) ) ? ($edit->person) :('') ;  }}" class="form-control">
                  @error('person')
                  <span style="color: red">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group col-4">
                  <label for="wifi">Wifi</label>
                  <select name="wifi" id="wifi" class="form-control" required>
                    <option value="Yes" {{ isset($edit) && $edit->wifi === 'Yes' ? 'selected' : '' }}>Yes</option>
                    <option value="No" {{ isset($edit) && $edit->wifi === 'No' ? 'selected' : '' }}>No</option>
                  </select>
                  @error('wifi')
                  <span style="color: red">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group col-4">
                  <label for="bed">Bed</label>
                  <input type="bed" id="bed" name="bed" required value="{{(isset($edit) ) ? ($edit->bed) :('') ;  }}" class="form-control">
                  @error('bed')
                  <span style="color: red">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group col-4">
                  <label for="breakfast">Breakfast</label>
                  <input type="breakfast" id="breakfast" name="breakfast" required value="{{(isset($edit) ) ? ($edit->breakfast) :('') ;  }}" class="form-control">
                  @error('breakfast')
                  <span style="color: red">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group col-4">
                  <label for="lunch">Lunch</label>
                  <input type="lunch" id="lunch" name="lunch" required value="{{(isset($edit) ) ? ($edit->lunch) :('') ;  }}" class="form-control">
                  @error('lunch')
                  <span style="color: red">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group col-4">
                  <label for="dinner">Dinner</label>
                  <input type="dinner" id="dinner" name="dinner" required value="{{(isset($edit) ) ? ($edit->dinner) :('') ;  }}" class="form-control">
                  @error('dinner')
                  <span style="color: red">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group col-4">
                  <label for="dress">Dress</label>
                  <input type="dress" id="dress" name="dress" required value="{{(isset($edit) ) ? ($edit->dress) :('') ;  }}" class="form-control">
                  @error('dress')
                  <span style="color: red">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group col-4">
                  <label for="terrace">Terrace</label>
                  <input type="terrace" id="terrace" name="terrace" required value="{{(isset($edit) ) ? ($edit->terrace) :('') ;  }}" class="form-control">
                  @error('terrace')
                  <span style="color: red">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group col-4">
                  <label for="tv">TV</label>
                  <select name="tv" id="tv" class="form-control" required>
                    <option value="yes" {{ isset($edit) && $edit->tv === 'Yes' ? 'selected' : '' }}>Yes</option>
                    <option value="no" {{ isset($edit) && $edit->tv === 'No' ? 'selected' : '' }}>No</option>
                  </select>
                  @error('tv')
                  <span style="color: red">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group col-4">
                  <label for="ac">Ac</label>
                  <select name="ac" id="ac" class="form-control" required>
                    <option value="yes" {{ isset($edit) && $edit->ac === 'Yes' ? 'selected' : '' }}>Yes</option>
                    <option value="no" {{ isset($edit) && $edit->ac === 'No' ? 'selected' : '' }}>No</option>
                  </select>
                  @error('ac')
                  <span style="color: red">{{ $message }}</span>
                  @enderror
                </div>


                <div class="form-group col-4">
                  <label for="featured_photo">Featured Photo</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="form-control" name="featured_photo" id="featured_photo" {{ (!isset($edit)  ? 'required' :'' ) }}>
                    </div>
                  </div>
                  @if(isset($edit))
                  <span>
                    <img style="height:30px; width: 50px; " src="{{asset('uploads/pictures/'.(isset($edit)  ? $edit->featured_photo :'' ) )}}" alt="Picture">
                  </span>
                  @endif
                  @error('featured_photo')
                  <span style="color: red">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group col-4">
                  <label for="type">Type</label>
                  <select name="type" id="type" class="form-control" required>
                    <option value="">Select</option>
                    <option value="accommodation" {{ isset($edit) && $edit->type === 'accommodation' ? 'selected' : '' }}>Accommodation</option>
                    <option value="restaurant" {{ isset($edit) && $edit->type === 'restaurant' ? 'selected' : '' }}>Restaurant</option>
                    <option value="recreation" {{ isset($edit) && $edit->type === 'recreation' ? 'selected' : '' }}>Recreation</option>
                    <option value="meeting" {{ isset($edit) && $edit->type === 'meeting' ? 'selected' : '' }}>Meeting</option>
                  </select>
                </div>

                <div class="form-group col-4">
                  <label for="details">Details</label>
                  <textarea name="details" required id="details" class="form-control" rows="2" placeholder="Enter ...">{{(isset($edit) ) ? ($edit->details) :('') ;  }}</textarea>
                </div>

                <div class="form-group col-8">
                  <label for="address"></label>
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