<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>body{background: grey}</style>
</head>
<body style="text-align:center;">
<h1>edit user</h1>
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

</body>
</html>