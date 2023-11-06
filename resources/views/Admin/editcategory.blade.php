@extends('Admin.layouts')
@section('content')
<form method="POST" action="{{asset('category/update/'.$cate->id)}}">
    @csrf
    <div class="col-12">
        <label for="inputAddress2" class="form-label">Tên danh mục :</label>
        <input type="text" name="category_name" value="{{$cate->category_name}}" class="form-control">
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </div>
</form>
@endsection