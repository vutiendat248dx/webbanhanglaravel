@extends('Admin.layouts')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card shadow mb-4">
                <div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush table-hover">
                            <thead>
                                <tr>
                                    <th>Mã đơn hàng</th>
                                    <th>Tên khách hàng</th>
                                    <th>Địa chỉ </th>
                                    <th>Số điện thoại </th>
                                    <th>Tổng tiền</th>
                                    <th>Phương thức thanh toán</th>
                                    <th> Trạng thái</th>
                                    <th>Hành động</th>
                                </tr>
                                @foreach($list as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->fullname}}</td>
                                    <td>{{$item->address}}</td>
                                    <td>{{$item->phonenumber}}</td>
                                    <td>{{$item->bill}}</td>

                                    @if($item->payment_method == 0)
                                    <td>@php echo 'Thanh toán COD' @endphp</td>
                                    @else
                                    <td>@php echo 'Thanh toán Banking' @endphp</td>
                                    @endif
                                    <td><select class="form-select updatestatus" name="status" aria-label="Default select example">
                                            <option selected>{{$item->status}}</option>
                                            <option value="1">Đã nhận đơn hàng</option>
                                            <option value="2">Đang vận chuyển</option>
                                            <option value="3">Nhận hàng </option>
                                        </select>
                                    </td>
                                    <td class="text-right">
                                        <a href="{{asset('/admin/orderdetails/'.$item->id)}}">Chi tiết đơn hàng</a>
                                    </td>
                                </tr>
                                @endforeach
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $(document).on('click', 'updatestatus', function(e) {
            e.preventDefault();
            let i = $(this).val();
            alert(i);
        })
    })
</script>
@endsection