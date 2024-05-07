<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Laravel 11 CRUD Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="bg-dark py-3">
      
      <h3 class="text-white text-center">Simple Laravel 11 CRUD Application</h3>

    </div>
    <div class="container">
      <div class="row justify-content-center mt-4">
        <div class="col-md-10 d-flex justify-content-end">
          <a href="{{route('products.create')}}" class="btn btn-dark">Create</a>
          </div>
     </div>

      <div class="row d-flex justify-content-center">
        <div class="co-md-10">
            @if (session::has('success'))
            <div class="co-md-10 mt-4"> 
            <div class="alert alert-success">
              {{session::get('success')}}
            </div>
            </div>
            @endif
        </div>

        <div class="co-md-10">
          <div class="card border-0 shadow-lg my-3">
            <div class="card-header bg-dark text-white text-center">
              <h3 class="text-white" >Products</h3>
            </div>
            <div class="card-body">
              <table class="table">
                <tr>
                <th>ID</th>
                <th></th>
                <th>Name</th>
                <th>Sku</th>
                <th>Price</th>
                <th>Created at</th>
                <th>Action</th>
                </tr>

                @if($products->isNotEmpty())
                @foreach ($products as $product)
                <tr>
                  <td>{{$product ->id}}</td>
                  <td>
                    @if($product->image != "")
                    <img: width="50" src="{{asset('uploads/products/'.$product->image)}}">
                    @endif
                  </td>
                  <td>{{$product ->Name}}</td>
                  <td>{{$product ->Sku}}</td>
                  <td>${{$product ->Price}}</td>
                  <td>{{\Carbon\Carbon::parse($product ->created_at)->format('d M,Y') }}</td>
                  <td>
                    <a href="#" class="btn btn-dark">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                @endforeach
                
              </table>
            </div>
          </div>
        </div>

      </div>
    </div>
    
  </body>
</html>