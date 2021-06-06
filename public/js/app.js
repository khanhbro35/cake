$(function () {
    var dataRequest = [];

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

    /*-------------------
        Quantity change
    --------------------- */

    function total_price() {
        var total_price = 0.0;
        $('#shop_main').children().each(function (index, value) {
            total_price += parseFloat($(value).find('td.cart__price').text().split(' ')[1]);
        });
        return total_price;
    }

    var proQty = $('.pro-qty');
    proQty.prepend('<span class="dec qtybtn">-</span>');
    proQty.append('<span class="inc qtybtn">+</span>');
    proQty.on('click', '.qtybtn', function () {
        var $button = $(this);
        var oldValue = $button.parent().find('input').val() === '' ? 0 : $button.parent().find('input').val();
        if ($button.hasClass('inc')) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        $button.parent().find('input').val(newVal);
        var parentElment = $button.parents()[3];
        var price = $(parentElment).find('div.product__cart__item__text h5').text().split(' ')[1];
        $(parentElment).find('td.cart__price').text(`$ ${newVal * parseInt(price)}`)

        if (dataRequest.some(ele => ele.rowid == $(parentElment).data('rowid'))) {
            dataRequest = dataRequest.map(function (ele) {
                if (ele.rowid === $(parentElment).data('rowid')) {
                    ele.qty = parseInt(newVal);
                }
                return ele;
            });
        }
        else {
            dataRequest.push({
                'rowid': $(parentElment).data('rowid'),
                'qty': parseInt(newVal),
                'remove': false
            })
        }

        $('div.cart__total ul li:last-child>span').text(`$ ${total_price().toFixed(2)}`);
    });

    $('#shop_main').children().each(function(index, value){

        $(value).find('div.pro-qty input').on('change', function(e) {
           if(e.target.value === '')
           {
               $(value).find('td.cart__price').text(`$ 0`);
           }
           else
           {
               var price = $(value).find('div.product__cart__item__text h5').text().split(' ')[1];
               var total = parseInt(price) * parseInt(e.target.value);
               $(value).find('td.cart__price').text(`$ ${total}`);
           }

           if(dataRequest.some(ele => ele.rowid == $(value).data('rowid')))
           {
               dataRequest = dataRequest.map(function (ele) {
                  if(ele.rowid === $(value).data('rowid'))
                  {
                      ele.qty = parseInt(e.target.value);
                  }
                  return ele;
               });
           }
           else
           {
               dataRequest.push({
                   'rowid': $(value).data('rowid'),
                   'qty': parseInt(e.target.value),
                   'remove': false
               })
           }
            $('div.cart__total ul li:last-child>span').text(`$ ${total_price().toFixed(2)}`);
        });

        $(value).find('td.cart__close').click(function(e){
            var parentElement = $(e.currentTarget).parents()[0];
            $(parentElement).remove();

            if (dataRequest.some(ele => ele.rowid == $(parentElement).data('rowid'))) {
                dataRequest = dataRequest.map(function (ele) {
                    if (ele.rowid === $(parentElement).data('rowid')) {
                        ele.qty = 0;
                        ele.remove = true;
                    }
                    return ele;
                });
            }
            else {
                dataRequest.push({
                    'rowid': $(parentElement).data('rowid'),
                    'qty': 0,
                    'remove': true
                })
            }

            $('div.cart__total ul li:last-child>span').text(`$ ${total_price().toFixed(2)}`);
        });
    })

    $('div.continue__btn.update__btn').click(function(e){
        if(dataRequest.length > 0)
        {
            console.log(dataRequest);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                'type': 'post',
                'url':  'http://' + window.location.hostname + ':' + window.location.port + '/shopcart/updatecart',
                'data': { data: dataRequest},
                'success': function (data) {
                    console.log('thanh cong');
                    alert('update cart thanh cong');
                    if(confirm('ban muon tro ve trang home chu'))
                    {
                        window.location.replace('http://' + window.location.hostname + ':' + window.location.port + data);
                    }
                }
            })
            .fail(function (err) {
                console.log(err.responseText);
            });
        }
        else
        {
            alert('cart thi khong co thay roi gi');
        }
    });

})
