<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <title>Posts</title>
</head>

<body>
    <div class="container">

        <div class="card mt-5">
            <div class="card-header">
                <h2 class="text-center">{{ $post->title }}</h2>
            </div>
            <div class="card-body">
                <p>{{ $post->content }}</p>
                <img src="{{ asset('images/' . $post->image) }}" alt="{{ $post->title }}" width="100">
                <a href="{{ route('posts.index') }}" class="btn btn-success btn-sm mt-3">Back</a>
            </div>
        </div>
    </div>
</body>

</html>
