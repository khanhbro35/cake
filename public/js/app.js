$(function () {
    $('div.cart_add').click(function (e) {
        e.preventDefault();
        $.ajax({
            'method': 'get',
            'url': $(this).children('a')[0].href
            }
        )
        .done(function (data) {
            console.log('Them thanh cong', data);

            if(parseInt(data) > 0)
            {
                $('div.cart__price>span').text('$' + data);
            }
        })
        .fail(function () {
            console.log('Them that bai');
        });
    });
})
