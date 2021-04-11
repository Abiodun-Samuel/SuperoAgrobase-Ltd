<div class="col-lg-2 col-md-4 col-sm-6 xs">
    <div class="card m-2">
        <div class="product-box">
            <img src="{{ url('images/products/' . $product . '.jpg') }}" class="card-img-top"
                alt="{{ $product }}">
            <div class="card-body">

                <div class="form-inline">
                    <input class="mr-2" type="checkbox" name="{{ $product }}" id="{{ $product }}">
                    <label for="{{ $product }}"> {{ $product }} </label>
                </div>

                <div class="form-inline my-2">
                    <label for="">Type:</label>
                    <select class="mx-1" id="quantity" name="quantity_measure">
                        <option value="kg">lorem</option>
                        <option value="Big">xyz</option>
                        <option value="Big">xyz</option>
                        <option value="Big">xyz</option>
                        <option value="Size">qwert</option>
                        <option value="quantity">sdrt</option>
                    </select>
                </div>

                <div class="form-inline my-2">
                    <input type="number" name="quantity_no" id="quantity">
                    <select class="mx-2" id="quantity" name="quantity_measure">
                        <option value="kg">kg</option>
                        <option value="Big">Bag</option>
                        <option value="Size">Size</option>
                        <option value="quantity">Quantity</option>
                    </select>
                </div>
            </div>
        </div>

    </div>

</div>
