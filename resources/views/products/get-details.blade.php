


<div class="container">
    <div class="row">
        <div class="col">
          <h6>Nombre del producto {{$product->id}}</h6> {{$product->product_name}}
        </div>
        <div class="col">
        </div>
        <div class="col">
            <b>Ingresado el:</b> {{$product->created_at}}
        </div>
    </div>
    <br>
    <div class="row">
      <div class="col">
        <h6>Precio $</h6> {{$product->price}}
      </div>
      <div class="col">
        <h6>Cantidad</h6> {{$product->quantity}}
      </div>
    </div>
  </div>
