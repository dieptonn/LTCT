<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/front-end/plugins/fontawesome/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Delivery</title>
</head>

<body>
    <style>
        .container{
            width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }
        .delivery-content-top-left{
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .delivery-content{
            display: flex;
        }
        .delivery-content-right{
            background-color: rgb(240, 240, 240);
            width: 30%;
            margin-left: 20px;
            padding: 10px;
        }
        input{
            margin-bottom: 10px;
            padding: 10px;
        }
        .name-phone{
            display: flex;
            justify-content: space-between;
            width: auto;
        }
        .name input{
            width: 350px;
        }
        .phone input{
            width: 300px;
        }
        .adress input{
            width: 100%;
        }
        .email input{
            width: 100%;
        }
        .delivery-content-left-phuongthucgiaohang input{
            width: 100%;
        }
        .delivery-content-left-ghichu input{
            width: 100%;
        }
        .order-center{
            margin-top: 20px;
            margin-bottom: 20px;
            border-top: 1px solid rgb(129, 134, 136);
            padding: 10px;
            border-bottom: 1px solid rgb(129, 134, 136);
        }
        .product-order{
            display: flex;
            margin-top: 10px;
            justify-content: space-between;
        }
        .order-center-left{
            display: flex;
        }
        .img-product{
            margin-right: 10px;
        }
        a{
            text-decoration: none;
            color: black;
        }
        .voucher{
            margin-bottom: 20px;
        }
        .voucher input{
            width: 100%;
            background-color: rgb(230, 234, 237) ;
        }
        .order-bottom{
            border-bottom: 1px solid rgb(129, 134, 136);
            padding-bottom:10px ;
        }
        .total-money{
            margin-top: 20px;
            font-weight: bold;
        }
        .flex{
            display: flex;
            justify-content: space-between;
        }

    </style>
    <section class="delivery">
        <div class="container">
            <div class="delivery-content">
                <div class="delivery-content-left ">
                    <div class="delivery-content-top-left">
                        <div class="delivery-content-left-thongtinkhachhang">
                            Th??ng tin kh??ch h??ng
                        </div>
                        <div class="delivery-content-left-login">
                            <p><span>???? ????ng k??? </span><button type="button" class="btn btn-success">????ng nh???p</button></p>
                        </div>
                    </div>
                    <div class="delivery-content-left-email">
                        <div class="email"><input type="email" name="email" value="Email Adress ( optional )"></div>
                        <div>
                            <div>
                                <input type="checkbox" name="luachon">
                                <label>T???o 1 t??i kho???n v???i SHOP c???a ch??ng t??i</label>
                            </div>
                            <div>
                                <input type="checkbox" name="luachon">
                                <label>I accept to receive shop updates, promotions and other marketing information from
                                    SHOP</label>
                                </div>
                            </div>
                    </div>
                    <div class="delivery-content-left-chitietgiaohang">
                        <div >
                            <div class="name-phone">
                                <div class="name"><input  type="text" name="name" id="" value="T??n ng?????i nh???n"></div>
                                <div class="phone"><input  type="tel" name="phone" id="" value="S??? ??i???n tho???i"> </div>
                                
                            </div>
                            <div class="adress">
                                <input type="text" name="adress" value="?????a ch???">

                            </div>
                            <div>
                                <select name="calc_shipping_provinces" required="">
                                    <option class="info-adress" value="">T???nh / Th??nh ph???</option>
                                </select>
                                <select name="calc_shipping_district" required="">
                                    <option class="info-adress" value="">Qu???n / Huy???n</option>
                                </select>
                                <select name="calc_shipping_district" required="">
                                    <option class="info-adress" value="">Ph?????ng / X??</option>
                                </select>
                                <input class="billing_address_1" name="" type="hidden" value="">
                                <input class="billing_address_2" name="" type="hidden" value="">
                                <input class="billing_address_2" name="" type="hidden" value="">
                            </div>
                            <div>
                                <input type="checkbox" id="luudiachi">
                                <label for="luudiachi">L??u ?????a ch??? m???i n??y v??o s??? ?????a ch??? c???a t??i</label>
                            </div>
                        </div>
                    </div>
                    <div class="delivery-content-left-phuongthucgiaohang">
                        <p>Ph?? v???n chuy???n : 30.000??</p>
                        <input type="text" name="" id="" value="Giao h??ng to??n qu???c">
                    </div>
                    <div class="delivery-content-left-chitietthanhtoan">
                        <p>Ph????ng th???c thanh to??n</p>
                        <input type="radio" name="checkout" id="thanhtoankhinhanhang">
                        <label for="thanhtoankhinhanhang">Thanh to??n khi nh???n h??ng</label>
                        <input type="radio" name="checkout" id="nganhangdientu">
                        <label for="nganhangdientu">Ng??n h??ng ??i???n t???</label>
                    </div>
                    <div class="delivery-content-left-ghichu">
                        <p>Th??ng tin kh??c</p>
                        <input type="text" value="????? l???i ghi ch?? cho ????n h??ng">
                    </div>
                    <div class="delivery-content-left-order">
                        <button type="button" class="btn btn-success">?????t h??ng</button>
                    </div>

                </div>
                <div class="delivery-content-right">
                    <h4 style="text-align: center;">Danh s??ch s???n ph???m</h4>
                    <div class="order-center">
                        <div class="product-order">
                            <div class="order-center-left">
                                <div class="img-product">
                                    <a href="#"><img src="img/sp1.jfif" alt="" width="60px" height="60px"></a>
                                </div>
                                <div class="info-product">
                                    <div>
                                        <div class="name-product">
                                            <a href="#">
                                                <p>T??n s???n ph???m </p>
                                            </a>
                                        </div>
                                        <div class="amount-product">
                                            <p>x1</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="order-center-right">
                                <p>200.000??</p>
                            </div>
                        </div>
                    </div>
                    <div class="voucher">
                        <input type="text" value="Nh???p m?? gi???m gi??">
                    </div>
                    <div class="order-bottom">
                        <div class="flex ">
                            <div>T???ng c??c m???c :</div>
                            <div> 200.000??</div>
                        </div>
                        <div class="flex">
                            <div>Ph?? v???n chuy???n :</div>
                            <div>30.000??</div>
                        </div>
                        
                    </div>
                    <div class="total-money flex">
                        <div>T???ng ti???n h??ng : </div>
                        <div>230.000??</div>
                    </div>
                </div>
            </div>

        </div>

    </section>
</body>

</html>