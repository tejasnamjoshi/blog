<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class="d-flex justify-content-center">
        <div>
            <form action="/contact" method="POST">
                @csrf

                <div class="form-group">
                    <label for="email">Email address</label>
                    <input name="email" type="text" class="form-control" id="email" placeholder="Email Address">
                    @error('email')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <button class="btn btn-primary btn-block">Submit</button>
            </form>

            @if (session('message'))
            <div class="text-success">
                {{ session('message') }}
            </div>
            @endif
        </div>
    </div>
</body>

</html>