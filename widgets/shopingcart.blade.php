<a href="{{url('checkout')}}">Keranjang Anda: <b>{{Shpcart::cart()->total_items()}} items (Total: {{ price(Shpcart::cart()->total() )}})</b></a>