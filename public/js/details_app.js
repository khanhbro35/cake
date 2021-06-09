$(function () {
    var proQty = $('.pro-qty');
    proQty.prepend('<span class="dec qtybtn">-</span>');
    proQty.append('<span class="inc qtybtn">+</span>');
    proQty.on('click', '.qtybtn', function () {
        var $button = $(this);
        var oldValue = $button.parent().find('input').val() == 0 ? 1 : $button.parent().find('input').val();
        if ($button.hasClass('inc')) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 1) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 1;
            }
        }
        $button.parent().find('input').val(newVal);
        var parentElment = $button.parents()[3];
        var price = parseInt($(parentElment).find('h5').text().split(' ')[1]) / parseInt(oldValue);
        $(parentElment).find('h5').text(`$ ${newVal * parseInt(price)}`)
    });

    $('a.primary-btn').click(function(){
        console.log(proQty.parent().find('input').val());
        console.log($(proQty.parents()[2]).data('id'));
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            'type': 'post',
            'url': 'http://' + window.location.hostname + ':' + window.location.port + '/shop_detail/addcart',
            'data': { 'code_cake': $(proQty.parents()[2]).data('id'), 'qty': proQty.parent().find('input').val()},
            'success': function (data) {
                console.log(data);
                if(data.success)
                {
                    $('div.cart__price>span').text('$' + data.total_price);
                    alert('add Cart thành công');
                    window.location.replace('http://' + window.location.hostname + ':' + window.location.port + '/shopcart');
                }
            }
        })
        .fail(function(err){
            console.log(err.responseText);
            alert('Lỗi add cart detail');
        });
    });
});
