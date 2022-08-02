<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link rel="stylesheet" href=""> --}}

    <style>
        body{background: grey}
        .gird_item{
            border:1px solid black;
        }
        .container{
            display:grid;grid-template-columns: 20% 20% 20% 20%;
            justify-content: center;
        }
        .container2{
            display:grid;grid-template-columns: 20% 20% 20% 20%;
            justify-content: center;
        }
     
        .delete_input{background-color:grey;cursor: pointer;}
        .delete_input:hover{background-color:green;}
    </style>

</head>
<body>


<div style="text-align:center;">
    <h1>index blade</h1>

    <form method="POST">
        @csrf  
        @if(count($errors) >0) 
        <div style="background-color:red;border:3px solid black;color:white;width:21%;margin:auto;padding-top:5px;padding-bottom:5px;">
        {{-- @if($errors->first('name')) --}}
        @error('name')
        <span>{{$errors->first('name')}}</span>
        <br>
        @enderror
        {{-- @if($errors->first('email')) --}}
        @error('email')
        <span>{{$errors->first('email')}}</span>
        @enderror
        </div>
        <br>
    
        @endif
        <label>name</label><br>
        <input style="margin-bottom: 5px" type="text" name="name" id=""><br/>
        <label>email</label><br>

        <input style="margin-bottom:5px" type="text" name="email" id=""><br/>
      
        <input type="submit" >
    </form>

   

    @if(count($todos) > 0)
     <div style="margin-top:31px;" class="container" >
     <div class="gird_item">id</div>
     <div class="gird_item">name</div>
     <div class="gird_item">email</div>
     <div class="gird_item"></div>
    </div>
    <div class="container" >
    @foreach ($todos as $res)
    <div class="gird_item">{{$res->id}}</div>
    <div class="gird_item">{{$res->name}}</div>
    <div class="gird_item">{{$res->email}}</div>
    <div style="border:1px solid black;" class="container">
        <div style="background-color:red; ;border-radius:35px;margin-top:5px;margin-bottom:5px;margin-right:7px;">
            <form action="{{ route('destroy',$res->id) }}"  method="POST">
                @csrf
                <input class="delete_input" style="background-color:transparent;border:0px;color:white" type="submit" value="delete" >
            </form>
        </div>
        <div  style="background-color:green; ;border-radius:35px;margin-top:5px;margin-bottom:5px;margin-left:7px;">
            <a href="{{ route('edit',$res->id) }}">
            <button style="background-color:transparent;border:0px;color:white;cursor: pointer;">edit</button>   
            </a>         
        </div>
     
    </div>

    @endforeach
    </div>
    @else
    <h3>There are no users</h3>
    @endif   
</div>
</body>
<script>

</script>
</html>