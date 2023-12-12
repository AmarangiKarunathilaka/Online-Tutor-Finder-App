<!DOCTYPE html>
<html>

<head>
    <!-- Your head content goes here -->
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
        <p>We will send a link to your email. Use that to reset the password</p>
        <form action="{{route('forget.password.post')}}" method="POST">
            @csrf
            <div>
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control" name="studentEmail">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>
