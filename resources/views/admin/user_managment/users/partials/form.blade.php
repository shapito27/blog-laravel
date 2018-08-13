@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<label for="">Имя</label>
<input type="text" class="form-control" name="name" placeholder="Name of user" value="@if(old('name')){{old('name')}}@else{{$user->name or ""}}@endif" required>

<label for="">E-mail</label>
<input type="email" class="form-control" name="email" placeholder="E-mail of user" value="@if(old('email')){{old('email')}}@else{{$user->email or ""}}@endif" required>

<label for="">Password</label>
<input type="password" class="form-control" name="password" placeholder="password of user">

<label for="">Зassword confirmation</label>
<input type="password" class="form-control" name="password_confirmation" placeholder="password confirmation of user" >

<hr>

<input type="submit" class="btn btn-primary" value="Save">