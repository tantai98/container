 <span><span>{!! $order->fullname !!}</span> thân mến,</span>
    <p>Hệ thống nhận ra bạn là khách hàng quen thuộc của Linhhandmade. Với chương trình tích điểm chúng tôi đang có Đơn hàng này của bạn sẽ được áp dụng giảm giá.</p>
<table>
    <tr>
        <td>Tổng đơn hàng</td>
        <td>{!! number_format((int)$order->total,0,'','.') !!}đ</td>
    </tr>
    <tr>
        <td>Giảm</td>
        <td>10%</td>
    </tr>
    <tr>
        <td><span>Cần thanh toán</span></td>
        <td><span>{!! number_format((int)$order->total,0,'','.') !!}</span></td>
    </tr>
</table>
<!-- button  -->
<button title = "Close (Esc)" class="t-btn-hide btn btn-black no-margin-bottom btn-small font-weight-400 t-xd-pu mfp-close">Đóng lại</button>
<!-- end button  -->