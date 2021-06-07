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
                    alert('update cart thanh công');
                    // if(confirm('bạn muốn trở về trang chủ'))
                    // {
                    //     window.location.replace('http://' + window.location.hostname + ':' + window.location.port + data);
                    // }
                }
            })
            .fail(function (err) {
                console.log(err.responseText);
                alert('Update cart thất bại');
            });
        }
        else
        {
            alert('cart thi khong co thay roi gi');
        }
    });

    $('ul.list').children().each(function (index, value) {
        $(value).click(function(){
            $.ajax({
                'type': 'get',
                'url': 'http://' + window.location.hostname + ':' + window.location.port + `/shop/${$(this).data('value')}`
            })
            .done(function (data) {

                // console.log(data.data);
                // console.log(data.links);
                $('div.row#cake_product').empty();
                data.data.map(function (value) {
                    var divMain = $('<div></div>');
                    divMain.addClass('col-lg-3 col-md-6 col-sm-6');
                    var productItem = $('<div></div>');
                    productItem.addClass('product__item');
                    var subProductItem = $('<div></div>')
                    subProductItem.addClass('product__item__pic set-bg');
                    subProductItem.attr('data-setbg', 'http://' + window.location.host  + '/img/shop/' + value.img);
                    subProductItem.css('background-image', 'url(' + 'http://' + window.location.host  + '/img/shop/' + value.img + ')');
                    var productLabel = $('<div></div>');
                    productLabel.addClass('product__label');
                    productLabel.append($('<span></span>').text(value.type_name));
                    subProductItem.append(productLabel);
                    productItem.append(subProductItem);
                    var productItemText = $('<div></div>');
                    productItemText.addClass('product__item__text');
                    productItemText.append($('<h6></h6>').append($('<a></a>').attr('href', 'http://' + window.location.hostname + ':' + window.location.port + `/shop_detail/${value.code_cake}`).text(value.name)));
                    var productPrice = $('<div></div>').addClass('product__item__price').text('$ ' + value.price);
                    var addCart = $('<div></div>').addClass('cart_add');
                    addCart.append($('<a></a>').attr('href', 'http://' + window.location.hostname + ':' + window.location.port + `/shopcart/addcart/${value.code_cake}`).text('Add to cart'));
                    addCart.click(function(e){
                        e.preventDefault();
                        $.ajax({
                            'method': 'get',
                            'url': $(this).children('a')[0].href
                        })
                        .done(function (data) {
                            console.log('Them thanh cong', data);

                            if (parseInt(data) > 0) {
                                $('div.cart__price>span').text('$' + data);
                            }
                        })
                        .fail(function () {
                            console.log('Them that bai');
                        });
                    });
                    productItemText.append(productPrice);
                    productItemText.append(addCart);
                    productItem.append(productItemText);
                    divMain.append(productItem);
                    $('div.row#cake_product').append(divMain);
                    return value;
                });

                $('ul.pagination').empty();
                let move = ["&laquo; Previous", "Next &raquo;"];
                data.links.map(function (value) {
                    var liNum = $('<li></li>');
                    liNum.addClass('page-item');
                    if(!isNaN(parseInt(value.label)))
                    {
                        if(value.active)
                        {
                            liNum.addClass('active');
                            liNum.append($('<span></span>').addClass('page-link').text(value.label));
                        }
                        else
                        {

                            liNum.append($('<a></a>').addClass('page-link').attr('href', value.url).text(value.label));
                        }
                    }
                    else
                    {
                        if (value.url === null) {
                            liNum.addClass('disabled');
                            if(value.label === move[0])
                            {
                                liNum.append($('<span></span>').addClass('page-link').text('<'));
                            }
                            else
                            {
                                liNum.append($('<span></span>').addClass('page-link').text('>'));
                            }
                        }
                        else {

                            liNum.append($('<a></a>').addClass('page-link').attr('href', value.url).text('>'));
                        }
                    }
                    $('ul.pagination').append(liNum);
                    return value;
                });
            })
            .fail(function (err) {
                console.log(err.responseText);
            });
        });

    });

})
