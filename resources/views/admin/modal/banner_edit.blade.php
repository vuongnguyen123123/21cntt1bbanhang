@extends('admin.masters')
@section('css')
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<title>Tables - SB Admin</title>
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
<link href="/source/assets/dest/css/styles1.css" rel="stylesheet" />
<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
@endsection
@section('content')
<form action="{{route('admin.postBannerEdit',['id'=> $Slide->id ])}}" method="post" class="container" enctype="multipart/form-data">
    @csrf
    @method('PUT')
                <div class="mb-3 me-2 bp-4">
                          <label for="formGroupExampleInput2" class="form-label">link </label>
                          <input name="link" type="text" class="form-control" id="formGroupExampleInput2" placeholder="name" value="{{ isset($Slide)?$Slide->link: "" }}">
                        </div>
                        @error('link')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
                      
                        
                        
              
              
              
              <div class="form-group">
                  <label for="exampleFormControlFile1">Hình ảnh</label>
                  <input name="image" type="file" class="form-control-file" id="exampleFormControlFile1" value="{{ isset($Slide)?$Slide->image: "" }}">
                </div>
                @error('image')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
                        <button type="submit" class="btn btn-primary">Thêm vào</button>
                
            </div>
            
            <!-- Modal footer -->
           
         
  </form>
@endsection