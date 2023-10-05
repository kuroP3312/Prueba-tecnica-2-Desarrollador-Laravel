<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            <label for="product_name">Titulo</label>
            <input type="text" class="form-control" name="product_name" value="{{$product->product_name}}" id="product_name" required>
        </div>
        <div class="form-group">
            <label for="price">Precio $</label>
            <input type="text" class="form-control" name="price" value="{{$product->price}}" id="price" onkeypress="return ((event.charCode >= 48 && event.charCode <= 57)|| event.charCode == 46)" required>
        </div>
        <div class="form-group">
            <label for="quantity">Existencias</label>
            <input type="number" class="form-control" name="quantity" value="{{$product->quantity}}" id="quantity" required>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" id="btnSave" class="btn btn-primary">Guardar</button>
    </div>
</div>
