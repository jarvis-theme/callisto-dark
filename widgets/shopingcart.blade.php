<a href="{{URL::to('checkout')}}">Keranjang Anda: <b>{{Shpcart::cart()->total_items()}} items (Total: {{ jadiRupiah(Shpcart::cart()->total() )}})</b></a>