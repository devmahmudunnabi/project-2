<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>addproduct</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <div class="container">
    <div class="row">
    <div class="col-md-4">
                <div class="form-group">
                    <label for="">Fast Name</label>
                    <input type="text" class="fname form-control">
                </div>
                <div class="form-group">
                    <label for="">Last Name</label>
                    <input type="text" class=" lname form-control">
                </div>
                <div class="form-group">
                    <label for="">NID</label>
                    <input type="number" class="nid form-control" >
                </div>
                <div class="form-group">
                    <label for="">Address</label>
                    <textarea class="address form-control"cols="30" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="number" class="phone form-control" name="" >
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="email form-control" >
                </div>
                
                <select class="status form-control mt-3" >
                    <option value="0">----------select----------</option>
                    <option value="1">Active</option>   
                    <option value="2">Inactive</option>
                </select>
                <button class="btn btn-success form-control mt-3 addemployee">save</button>
        </div>
        <div class="col-md-8">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>SL no</th>
                        <th>Fast Name</th>
                        <th>Last Name</th>
                        <th>NID</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="all_data">
                    <tr>
                        
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
  </div>
  

  <script src="https://code.jquery.com/jquery-3.6.1.js"integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/regular.min.js" integrity="sha512-Kcbb5bDGCQQwo67YHS9uDvRmyrNEqHLPA1Kmn0eqrritqGDp3OpkBGvHk36GNEH44MtWM1L5k3i9MSQPMkNIuA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script>
        jQuery(document).ready(function(){
            show();
            jQuery(document).on("click",".btndelete",function(){
                alert("ok")
            });
            function show(){
                $.ajax({
                    url:'showemployee',
                    type:'get',
                    dataType:'JSON',
                    success:function(result){
                        if(result["status"]=="404"){
                            alert("Data not Found")
                        }
                        else if(result["status"]=="success"){
                            var data="";
                            $.each(result.employee,function(key,item){ 
                                  data+='<tr>\
                                  <td>'+item.id+'</td>\
                                  <td>'+item.fname+'</td>\
                                  <td>'+item.lname+'</td>\
                                  <td>'+item.nid+'</td>\
                                  <td>'+item.address+'</td>\
                                  <td>'+item.phone+'</td>\
                                  <td>'+item.email+'</td>\
                                  <td>'+item.status+'</td>\
                                  <td><button  value="'+item.id+'" class="btnedit btn btn-success btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>\
                                  <button value="'+item.id+'" class="btndelete btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>\
                                  </td>\
                                  </tr>';
                            });
                            jQuery(".all_data").html(data);
                        }
                    } 
                });
            }
          jQuery(".addemployee").click(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
             var fname=jQuery(".fname").val();
             var lname=jQuery(".lname").val();
             var nid=jQuery(".nid").val();
             var address=jQuery(".address").val();
             var phone=jQuery(".phone").val();
             var email=jQuery(".email").val();
             var status=jQuery(".status").val();
                $.ajax({
                    url:'employeestore',
                    type:"POST",
                    dataType:'JSON',
                    data:{
                        fname:fname,
                        lname:lname,
                        nid:nid,
                        address:address,
                        phone:phone,
                        email:email,
                        status:status
                    },
                    success:function(response){
                       if(response["massage"]=="success"){
                        show();
                        alert("Data submit");
                       }
                       else{
                        alert("Error : 404 Data not submit");
                       }
                    }
                });
          });
        });
 </script> 
</body>
</html>