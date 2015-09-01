<div class="homepage-slider">
    <div id="hompage-slider_content" style="text-align: center; padding: 1px 0 30px; height: auto;">
    @foreach(horizontal_banner() as $banner)
        <a href="{{url($banner->url)}}">
            {{HTML::image(banner_image_url($banner->gambar),'banner',array('width'=>'100%'))}}
        </a>
    @endforeach
    </div>
</div>
<!-- BEGIN .featured-items -->
<div class="featured-items">
    <div class="main-title">
        <p class="custom-font-1">Produk Kita</p>
        <a href="{{url('produk')}}" class="view">Lihat produk yang lainnya</a>
    </div>

    <div class="items-wrapper">
        <div class="items">
        @foreach(list_product(8,@$category) as $key=>$myproduk)
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
                                        <a href="{{product_url($myproduk)}}" class="button-1 custom-font-1 trans-1"><span>Lihat</span></a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <a href="{{product_url($myproduk)}}">
                            {{HTML::image(product_image_url($myproduk->gambar1,'medium'),'produk',array('width'=>'214px','style'=>'left: 50%; margin-left: -107px; top: 50%; margin-top: -106px;'))}}
                        </a>
                    </div>
                </div>
                <h3><a href="{{product_url($myproduk)}}" class="custom-font-1">{{$myproduk->nama}}</a></h3>
                <p><b class="custom-font-1">{{price($myproduk->hargaJual)}}</b></p>
            </div>
        @endforeach
        </div>
    </div>

    <div class="clear"></div>

<!-- END .featured-items -->
</div>
<!-- BEGIN .homepage-about -->
<div class="homepage-about">
    <div class="main-title">
        <p class="custom-font-1">Promo</p>
    </div>

    <p class="caps">
        @foreach(vertical_banner() as $banner)
        <a href="{{url($banner->url)}}">
            <img src="{{banner_image_url($banner->gambar)}}"/>
        </a>
        @endforeach
    </p>

<!-- END .homepage-about -->
</div>

<!-- BEGIN .homepage-latest-news -->
<div class="homepage-latest-news">

    <div class="main-title">
        <p class="custom-font-1">Latest news</p>
        <a href="{{url('blog')}}" class="view">view all blog posts</a>
    </div>

    <div class="items">
        @foreach(recentBlog(null,3) as $key=>$blog)
        <div class="item">
            <div class="text">
                <h3><a href="{{blog_url($blog)}}" class="custom-font-1">{{$blog->judul}}</a></h3>
                <div class="title-legend">
                    <a href="{{blog_url($blog)}}" class="date">{{waktu($blog->updated_at)}}</a>
                </div>
                <p>{{short_description($blog->isi,130)}}. <a href="{{blog_url($blog)}}" class="more-link">Read more</a></p>
            </div>
        </div>
        @endforeach 
    </div>
<!-- END .homepage-latest-news -->
</div>

<!-- BEGIN .homepage-best-sellers -->
<div class="homepage-best-sellers">
    <div class="main-title">
        <p class="custom-font-1">Best sellers</p>
    </div>

    <div class="items">
        @foreach(best_seller(3) as $key=>$best)
        <div class="item">
            <div class="image-wrapper-1">
                <div class="image">
                    <div class="image-overlay-1 trans-1">
                        <table>
                            <tr>
                                <td>
                                    <a href="{{url(product_image_url($best->gambar1,'medium'))}}" class="button-2 trans-1"></a>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <a href="{{url(product_image_url($best->gambar1,'medium'))}}"><img src="{{url(product_image_url($best->gambar1,'medium'))}}" width="94px" height="94px" /></a>
                </div>
            </div>
            <div class="text">
                <p class="nr custom-font-1">{{$key+1}}</p>
                <small><b class="custom-font-1" style="font-size: 12px;">{{price($best->hargaJual)}}</b></small>
                <p class="more-link-wrapper"><a href="{{product_url($best)}}" class="more-link">Details</a></p>
            </div>
        </div>
        @endforeach
    </div>
<!-- END .homepage-best-sellers -->
</div>

<div class="clear"></div>
<br><br><br><br>