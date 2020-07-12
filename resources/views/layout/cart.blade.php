<form method="post" action="{{route('cart-store')}}" class="form-inline">
    @csrf
    <input type="hidden" name="product_id" value="{{$pro->id}}">

    <button type="submit" class="btn-primary"><i class="fa fa-shopping-cart" style="color: yellow"></i> Add to Cart</button>

</form>
