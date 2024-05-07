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
          <a href="{{route('products.index')}}" class="btn btn-dark">Back</a>
       </div>
       </div>

      <div class="row d-flex justify-content-center">
        <div class="co-md-10">
          <div class="card border-0 shadow-lg my-3">
            <div class="card-header bg-dark text-white text-center">
              <h3>Create Product</h3>
            </div>
            <form enctype="multipart/from-data" action="{{route('products.store')}}" method="post">
              @csrf
            <div class="card-body">
              <div class="mb-3 text-center">
                <label class="form-label h4">Name</label>
                <input value="{{old('name')}}" type="text" class=" @error('name') is-Invalid @enderror form-control form-control-lg form-control" 
                placeholder="Name"
                name="name">
                @error('name')
                    <p class="Invalid-feedback">{{$message}}</p>
                @enderror
              </div>
              <div class="mb-3 text-center">
                <label class="form-label h4">Sku</label>
                <input value="{{old('Sku')}}"  type="text" class=" @error('Sku') is-Invalid @enderror  form-control form-control-lg" 
                placeholder="Sku"
                name="Sku">
                @error('Sku')
                <p class="Invalid-feedback">{{$message}}</p>
            @enderror
              </div>
              <div class="mb-3 text-center">
                <label class="form-label h4">Price</label>
                <input value="{{old('Price')}}"  type="text" class="@error('Price') is-Invalid @enderror   form-control form-control-lg" 
                placeholder="Price"
                name="Price">
                @error('Price')
                <p class="Invalid-feedback">{{$message}}</p>
            @enderror
              </div>
              <div class="mb-3 text-center">
                <label class="form-label h4">Description</label>
                <textarea class="form-control" name="description" cols="30" rows="5" placeholder="Content Description"></textarea>
              </div>
              <div class="mb-3 text-center">
                <label class="form-label h4">Image</label>
                <input type="file" class="form-control form-control-lg" 
                name="img" placeholder="image">
              </div>
              <div class="d-grid">
                <button class="btn btn-lg btn-primary">Submit</button>
              </div>
            </div>
          </form>
          </div>
        </div>

      </div>
    </div>
    
  </body>
</html>