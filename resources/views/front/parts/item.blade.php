<div class="item">
    <div class="thumb">
        <div class="hover-content">
            <ul>
                <li><a href="{{ route('front.products_single', $product->id) }}"><i class="fa fa-eye"></i></a></li>
                <li><a href="{{ route('front.products_single', $product->id) }}"><i class="fa fa-star"></i></a></li>
                <li><a href="{{ route('front.products_single', $product->id) }}"><i class="fa fa-shopping-cart"></i></a></li>
            </ul>
        </div>
        <img src="{{ asset('images/'.$product->image->path) }}" alt="">
    </div>
    <div class="down-content">
        <h4><a href="{{ route('front.products_single', $product->id) }}">{{ $product->trans_name }}</a></h4>
        <span>${{ $product->price }}</span>
        <ul class="stars">
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
        </ul>
    </div>
</div>
