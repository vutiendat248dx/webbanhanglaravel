@extends('Admin.layouts')
@section('content')
<form method="POST" action="{{route('addproduct')}}" enctype="multipart/form-data">
    @csrf
    <div class="col-6">
        <label class="form-label">Tên Sản Phẩm : </label>
        <input type="text" name="name" style="margin-bottom: 15px;" class="form-control" id="inputAddress" placeholder="Yêu cầu nhập...">
    </div>

    <div class="col-6">
        <label class="form-label">Danh mục : </label>
        <div>
            <select name="cate_id" class="form-select" aria-label="Default select example">
                <option selected></option>
                @foreach($list as $item)
                <option value="{{$item->id}}">{{$item->category_name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-6">
        <label class="form-label">Đơn giá : </label>
        <input type="text" name="price" style="margin-bottom: 15px;" class="form-control" placeholder="Yêu cầu nhập...">
    </div>
    <div class="col-6">
        <label class="form-label">Số lượng : </label>
        <input type="text" name="amounts" style="margin-bottom: 15px;" class="form-control" placeholder="Yêu cầu nhập...">
    </div>
    <div class="col-6">
        <label class="form-label">Hình ảnh chính : </label>
        <input type="file" name="images" style="margin-bottom: 15px;" class="form-control" placeholder="Yêu cầu nhập...">
    </div>
    <div class="col-6">
        <label class="form-label">Mô tả : </label>
        <input type="text" name="description" style="margin-bottom: 15px;" class="form-control" placeholder="Yêu cầu nhập...">
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Thêm danh mục</button>
    </div>
</form>
@endsection