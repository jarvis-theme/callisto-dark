<!-- BEGIN .catalog -->
<div class="catalog">
    <div class="main-title">
        @if(!empty($kategoridetail))
            <p>
                <a href="{{url('home')}}">Home</a>{{breadcrumbProduk(null,'; <span>/</span>',';', true, $kategoridetail)}}
            </p>
        @else
        <ul style="float:left" class="breadcurm">
            <li><a href="{{url('home')}}">Home</a></li>
            <li><a>/</a></li>
            <li><a>Produk</a></li>
        </ul>
        @endif
    </div>
    <!-- <div class="main-title"> -->
        <!-- <a href="#" class="grid-2">4 column view</a>
        <a href="#" class="grid-1">3 column view</a> -->
    <!-- </div> -->

    <form action="#" class="navigation">
        <label>Cari by Kategori:</label>
        <div class="category">
            <select onchange="if(this.options[this.selectedIndex].value != ''){window.top.location.href=this.options[this.selectedIndex].value}">
                <option>Semua produk</option>
                @foreach($kategori as $value)
                <option value="{{category_url($value)}}">{{$value->nama}}</option>
                @endforeach
            </select>
        </div>
        <!-- <label class="label-sort">Sort by:</label>
        <div class="sort">
            <select>
                <option>date added (newest first)</option>
                <option>date added (oldest first)</option>
                <option>popularity (most popular first)</option>
            </select>
        </div> -->
        <!-- <label class="total">97 items total</label> -->
    </form>

    <div class="items-wrapper">
        <div class="items">
            @foreach(list_product(null,@$category) as $myproduk)
            <div class="item-block-2">
                @if($myproduk->koleksiId != 0)
                <!-- <div class="item-tag tag-off custom-font-1">
                    <span>{{$myproduk->koleksi->nama}}</span>
                </div> -->
                @endif
                <div class="image-wrapper-3" style="position: relative;">
                    @if(is_outstok($myproduk))
                    {{is_outstok($myproduk)}}
                    @elseif(is_terlaris($myproduk))
                    {{is_terlaris($myproduk)}}
                    @elseif(is_produkbaru($myproduk))
                    {{is_produkbaru($myproduk)}}
                    @endif
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
                            {{HTML::image(product_image_url($myproduk->gambar1,'medium'),$myproduk->nama)}}
                        </a>
                    </div>
                </div>
                <h3><a href="{{product_url($myproduk)}}" class="custom-font-1">{{short_description($myproduk->nama, 90)}}</a></h3>
                <p><b class="custom-font-1">{{price($myproduk->hargaJual)}}</b></p>
            </div>
            @endforeach
        </div>
    </div>

    <div class="clear"></div>
    
    <div class="pages custom-font-1">
        {{list_product(null,@$category)->links()}}
    </div>

    <div class="clear"></div>
</div>
<!-- END .catalog -->
<br><br><br>