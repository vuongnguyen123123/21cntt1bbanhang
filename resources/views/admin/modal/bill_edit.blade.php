@extends('admin.masters')
@section('css')
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<title>Tables - SB Admin</title>
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
<link href="/source/assets/dest/css/styles1.css" rel="stylesheet" />
<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

@endsection
@section('content')
<form action="{{route('admin.postBillEdit',['id'=> $bill->id ])}}" method="post" class="container" enctype="multipart/form-data">
    @csrf
    @method('PUT')

                <div class="mb-3 me-2  bp-5">
                  <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Name </label>
                    <input name="name" type="text" class="form-control" id="formGroupExampleInput2" value="{{$bill->customer->name}}" disabled="" >
                  </div>
                  
        <div class="mb-3">
          <label for="formGroupExampleInput2" class="form-label">total </label>
          <input name="name" type="text" class="form-control" id="formGroupExampleInput2" value="{{$bill->total}}"disabled="" >
        </div>
       
     
                        <div>
                          <label for="formGroupExampleInput2" class="form-label">tình trạng đơn hàng </label>
                          
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" name="status" type="radio"  id="inlineRadio1" value="0" {{$bill->status=='0'?"checked":""}}>
                            <label class="form-check-label" for="inlineRadio1"> <span class="badge badge-info">đơn hàng mới </span></label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" name="status" type="radio"  id="inlineRadio2" value="1" {{$bill->status=='1'?"checked":""}}>
                            <label class="form-check-label" for="inlineRadio2">
                              <span class="badge badge-warning">đang giao</span>


                            </label>
                          </div>

                          <div class="form-check form-check-inline">
                            <input class="form-check-input" name="status" type="radio"  id="inlineRadio2" value="2" {{$bill->status=='2'?"checked":""}}>
                            <label class="form-check-label" for="inlineRadio2">
                              <span class="badge badge-success">đã giao</span>


                            </label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" name="status" type="radio"  id="inlineRadio2" value="3" {{$bill->status=='3'?"checked":""}}>
                            <label class="form-check-label" for="inlineRadio2">
                              <span class="badge badge-danger">đã hủy</span>


                            </label>
                          </div>
                         
                        </div>
                      
                     
                        <button type="submit" class="btn btn-primary">Thêm vào</button>
                
            </div>
            
            <!-- Modal footer -->
           
         
  </form>
@endsection