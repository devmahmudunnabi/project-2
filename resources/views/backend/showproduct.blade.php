<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addproduct</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <div class="col-md-8 offset-md-2">
    <a  class="btn btn-primary mt-3" href="{{Route('addproduct')}}">Add Product</a>
        <table class="table table-hover">
        <thead>
            <tr>
                <th>sl no </th>
                <th>Product name</th>
                <th>Product description</th>
                <th>Category</th>
                <th>Sub catagory</th>
                <th>price</th>
                <th>status</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @php
              $serial = 0;
            @endphp
            @foreach ($products as $data)
                <tr>
                    <td>{{ $serial +=1 }}</td>
                    <td>{{$data->pname}}</td>
                    <td>{{$data->pdesh}}</td>
                    <td>{{$data->cat}}</td>
                    <td>{{$data->scat}}</td>
                    <td>{{$data->price}}</td>
                    <td>
                        @if($data->status==1)
                            <a class="btn btn-success btn-sm" href="{{Route('status',$data->id)}}"><i class="fa-solid fa-check"></i></a>
                        @else
                        <a class="btn btn-danger btn-sm" href="{{Route('status',$data->id)}}"><i class="fa-solid fa-check"></i></a>
                        @endif                          
                    </td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="{{Route('editproduct',$data->id)}}"><i class="fa-regular fa-pen-to-square"></i></a>
                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete{{$data->id}}"><i class="fa-solid fa-trash"></i></button>
                    </td>
                </tr>
                     <!-- Modal -->
                    <div class="modal fade" id="delete{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Model</h1>
                        </div>
                        <div class="modal-body">
                           Are you sure delete this data
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <a  href="{{Route('delete',$data->id)}}" type="button" class="btn btn-danger">Save changes</a>
                        </div>
                        </div>
                    </div>
                    </div>

            @endforeach
        </tbody>
        </table>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.1.js"integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/fontawesome.min.js" integrity="sha512-j3gF1rYV2kvAKJ0Jo5CdgLgSYS7QYmBVVUjduXdoeBkc4NFV4aSRTi+Rodkiy9ht7ZYEwF+s09S43Z1Y+ujUkA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>