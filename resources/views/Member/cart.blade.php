@extends('Member.layouts')
@section('content')
<div class="cart_wrapper">
    @include('Member.components.cart_component')
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    function updateCart(event) {
        event.preventDefault();
        // alert(1);
        let url = $('.update-cart').data('url');
        let id = $(this).data('id');
        let qty = $(this).parents('tr').find('input.quantity').val();
        // alert(qty);
        $.ajax({
            type: 'GET',
            url: url,
            data: {
                id: id,
                quantity: qty,
            },
            success: function(data) {
                // console.log(data);
                if (data.code === 200) {
                    // alert(data.code === 200);
                    window.location.reload();
                    // $('.cart_wrapper').html(data.cart_component);
                    alert('Cập nhật thành công !!!');
                }
            },
            error: function() {}
        })
    }

    function delelteProCart(event) {
        event.preventDefault();
        let url = $('.del-cart').data('url');
        let id = $(this).data('id');
        $.ajax({
            type: "GET",
            url: url,
            data: {
                id: id,
            },
            success: function(data) {
                if (data.code === 200) {
                    window.location.reload();
                    // $('.cart_wrapper').html(data.cart_component);
                    alert('Xóa sản phẩm thành công !!!')
                }
            },
            error: function() {}
        })
    }
    $(function() {
        $(document).on('click', '.updateCartQuantity', updateCart);
        $(document).on('click', '.delProCart', delelteProCart);
    })
</script>
@endsection