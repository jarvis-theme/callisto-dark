<div class="homepage-slider">
    <div id="hompage-slider_content" style="text-align: center; padding: 1px 0 30px; height: auto;">
    @foreach(horizontal_banner() as $banner)
        <a href="{{URL::to($banner->url)}}">{{HTML::image(banner_image_url($banner->gambar))}}</a>
    @endforeach
<!-- END .message-welcome -->
    </div>
</div>
<!-- BEGIN .featured-items -->
<div class="featured-items">

    <div class="main-title">
        <p class="custom-font-1">Produk Kita</p>
        <a href="{{URL::to('produk')}}" class="view">Lihat produk yang lainnya</a>
    </div>

    <div class="items-wrapper">
        <div class="items">

            @foreach($produk as $key=>$myproduk)
                <div class="item-block-1">
                    <div class="image-wrapper-3" style="position: relative;">
                        {{is_terlaris($myproduk)}}
                        {{is_produkbaru($myproduk)}}
                        {{is_outstok($myproduk)}}
                        <div class="image">
                            <div class="image-overlay-1 trans-1">
                                <table>
                                    <tr>
                                        <td>
                                            <a href="{{slugProduk($myproduk)}}" class="button-1 custom-font-1 trans-1"><span>Lihat</span></a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <a href="{{slugProduk($myproduk)}}">
                                {{HTML::image(product_image_url($myproduk->gambar1),'',array('width'=>'214','style'=>'left: 50%; margin-left: -107px; top: 50%; margin-top: -106px;'))}}
                            </a>
                        </div>
                    </div>
                    <h3><a href="{{slugProduk($myproduk)}}" class="custom-font-1">{{$myproduk->nama}}</a></h3>
                    <p><b class="custom-font-1">{{jadiRupiah($myproduk->hargaJual)}}</b></p>
                </div>
            @endforeach

        </div>
    </div>

    <div class="clear"></div>

<!-- END .featured-items -->
</div>
<br><br><br>