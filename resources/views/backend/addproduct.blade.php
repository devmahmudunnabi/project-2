<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addproduct</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
  <div class="col-md-8 offset-md-2">
        <form action="{{Route('productstore')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">product name</label>
                <input type="text" class="form-control" name="pname" placeholder="product name">
            </div>
            <div class="form-group">
                <label for="">product description</label>
                <input type="text" class="form-control" name="pdesh" placeholder="product name">
            </div>
            <div class="form-group">
                <label for="">catagori</label>
                <input type="text" class="form-control" name="cat" placeholder="catagori">
            </div>
            <div class="form-group">
                <label for="">Size catagori</label>
                <input type="text" class="form-control" name="scat" placeholder="Size catagori">
            </div>
            <div class="form-group">
                <label for="">product price</label>
                <input type="number" class="form-control" name="price" placeholder="product price">
            </div>
            
            <select class="form-control mt-3" name="status" id="">
                <option value="0">----------select----------</option>
                <option value="1">Active</option>
                <option value="2">Inactive</option>
            </select>
            <button class="btn btn-success form-control mt-3">save</button>
        </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.1.js"integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>