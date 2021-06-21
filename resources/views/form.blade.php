<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row ">
            <div class="col-4">
                <form action="/form" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">{{__('content.name')}}</label>
                        <input type="text" class="form-control form-control-sm" name="name" id="name" aria-describedby="helpId" placeholder="{{__('content.name')}}...">
                        @error('name')
                                <small id="helpId" class="form-text text-muted">{{__("content.$message") }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">{{__('content.address')}}</label>
                        <input type="text" class="form-control form-control-sm" name="address" id="address" aria-describedby="helpId" placeholder="{{__('content.address')}}...">
                    </div>
                    <div class="form-group">
                        <label for="">{{__('content.email address')}}</label>
                        <input type="text" class="form-control form-control-sm" name="email" id="email" aria-describedby="helpId" placeholder="{{__('content.email address')}}...">
                        @error('email')
                                <small id="helpId" class="form-text text-muted">{{__("content.$message")}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">{{__('content.content')}}</label>
                        <textarea id="content" class="form-control" name="content" rows="3" placeholder="{{__('content.content')}}..."></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
