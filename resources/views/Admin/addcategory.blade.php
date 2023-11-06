@extends('Admin.layouts')
@section('content')
<form method="POST" action="{{route('addcategory')}}">
    @csrf
    <div class="col-6">
        <label for="inputCategoryName" class="form-label">Tên Danh Mục : </label>
        <input type="text" name="category_name" style="margin-bottom: 15px;" class="form-control" id="inputAddress" placeholder="Yêu cầu nhập...">
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Thêm danh mục</button>
    </div>
</form>
@endsection