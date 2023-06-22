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
<form action="{{route('admin.postCateEdit',['id'=> $cate->id ])}}" method="post" class="container" enctype="multipart/form-data">
    @csrf
    @method('PUT')
                <div class="mb-3 me-2 bp-4">
                          <label for="formGroupExampleInput2" class="form-label">Name </label>
                          <input name="name" type="text" class="form-control" id="formGroupExampleInput2" placeholder="name" value="{{ isset($cate)?$cate->name: "" }}">
                        </div>
                        @error('name')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
                      <div class="mb-3">
                          <label for="formGroupExampleInput" class="form-label" >description </label>
                          <input name="description" type="text" class="form-control" id="formGroupExampleInput" placeholder="description" value="{{ isset($cate)?$cate->description: "" }}">
                        </div>
                        @error('description')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
                        
                        
              
              
              
              <div class="form-group">
                  <label for="exampleFormControlFile1">Hình ảnh</label>
                  <input name="image" type="file" class="form-control-file" id="exampleFormControlFile1" value="{{ isset($cate)?$cate->image: "" }}">
                </div>
                @error('image')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
                        <button type="submit" class="btn btn-primary">Thêm vào</button>
              </div>
            </div>
            
            <!-- Modal footer -->
           
         
  </form>
@endsection