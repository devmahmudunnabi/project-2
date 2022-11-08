<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editproduct</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="col-md-8 offset-md-2">
        <form action="{{Route('updatedata',$products->id)}}" method="POST"> 
            @csrf
            <div class="form-group">
                <label for="">product name</label>
                <input value="{{$products->pname}}"  type="text" class="form-control mt-2" name="pname" placeholder="product name">
            </div>
            <div class="form-group">
                <label for="">product description</label>
                <input value="{{$products->pdesh}}" type="text" class="form-control mt-2" name="pdesh" placeholder="product name">
            </div>
            <div class="form-group">
                <label for="">catagori</label>
                <input value="{{$products->cat}}" type="text" class="form-control mt-2" name="cat" placeholder="catagori">
            </div>
            <div class="form-group">
                <label for="">Size catagori</label>
                <input value="{{$products->scat}}" type="text" class="form-control mt-2" name="scat" placeholder="Size catagori">
            </div>
            <div class="form-group">
                <label for="">product price</label>
                <input value="{{$products->price}}" type="number" class="form-control mt-2" name="price" placeholder="product price">
            </div>
            
            <select class="form-control mt-3" name="status" id="">
                <option value="0">----------select----------</option>
                <option value="1" @if($products->status==1) selected @endif >Active</option>
                <option value="2"@if($products->status==2) selected @endif >Inactive</option>
            </select>
            <button class="btn btn-success form-control mt-3">update data</button>
        </form>
  </div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/f1f4436fd5.js"></script>
</body>
</html>