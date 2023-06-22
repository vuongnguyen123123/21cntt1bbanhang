@extends('admin.masters')
@section('css')
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<title>Banner</title>

<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
<link href="/source/assets/dest/css/styles1.css" rel="stylesheet" />
<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
@endsection

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Banner</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Tables</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    Thêm banner
                   </a>
            </div>
        </div>
        @if (session('success'))
		<div class="alert alert-success">
			{{session('success')}}
		</div>
        @endif
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Danh sách banner
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>stt</th>
                            <th>.</th>
                            <th>link</th>
                            <th>image</th>
                            <th>Edit</th>
                            <th>DEL</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>stt</th>
                            <th></th>
                            <th>link</th>
                            <th>image</th>
                            <th>Edit</th>
                            <th>DEL</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($banners as $item)
                        <tr>
                            <td>{{$item->id }}</td> 
                            <td>{{$item->link }}</td>
                          <td></td>
                           
                            <td><img src="/source/image/slide//{{$item->image }}" alt="{{$item->image }}" height="150" ></td>
                            <td><a href="{{route('admin.getBannerEdit',['id'=> $item->id ])}}" class="btn btn-success"><i class="fas fa-edit"></i></a></td>
                            <td><form action="{{route('admin.getBannerDelete',['id'=> $item->id ])}}" onclick="return confirm('bạn có muốn xóa banner {{$item->id}}');" method="post">
                     
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> </button>
                              </form> </td>
                        </tr>
                        @endforeach
                        
                       
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@include('admin.modal.banner_add')

@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="/source/assets/dest/js/scripts1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="/source/assets/dest/js/datatables-simple-demo.js"></script>
@endsection