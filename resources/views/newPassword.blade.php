<head>

</head>
<body>
    <div>
        <div class="mt-5">
            @if($errors->any())
            <div class="col-12">
                @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            </div>
            @endif

            @if(session()->has('error'))
            <div class="alert alert-danger">{{session('error')}}</div>
            @endif

            @if(session()->has('success'))
            <div class="alert alert-success">{{session('success')}}</div>
            @endif

        </div>
        
    <form action="{{route('reset.password.post')}}" method="POST">
        @csrf
        <input type="hidden" name="token" hidden value="{{$token}}">

        <div>
            <label for="studentEmail" class="form-lable">Email Address</label>
            <input type="email" class="form-control" name="studentEmail" >
        </div>

        <div>
            <label for="password" class="form-lable">New Password</label>
            <input type="password" class="form-control" name="password">
        </div>

        <div>
            <label for="password_confirmation" class="form-lable">Confirm Password</label>
            <input type="password" class="form-control" name="password_confirmation">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</body>