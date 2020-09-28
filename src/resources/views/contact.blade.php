<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <title>Contact Us</title>
</head>
<body>
<div style="width: 500px; margin: 0 auto; margin-top: 90px;">
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <h3>Contact Us</h3>
        @if(Session::has('message'))
            <div class="alert alert-success">
                {{ Session::get('message') }}
            </div>
        @endif
    <form action="{{ route('contact') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleformcontrolinput1">Your Name</label>
            <input type="text" class="form-control" name="name" id="exampleformcontrolinput1">
        </div>
        <div class="form-group">
            <label for="exampleformcontrolinput2">Your Email</label>
            <input type="email" class="form-control" name="email" id="exampleformcontrolinput2">
        </div>
        <div class="form-group">
            <label for="exampleformcontroltextarea1">Your Message</label>
            <textarea name="message" id="exampleformcontroltextarea1" cols="30" rows="3" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">submit</button>
    </form>
</div>

</body>
</html>
