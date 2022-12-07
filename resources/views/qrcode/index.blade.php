<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container d-flex flex-column align-items-center justify-content-center">
        <H1>Welcome to our QR Code Generator</H1>

        <label for="" class="form-label">In this input , type the content of your QR Code , either it's a link ,
            message or a
            text</label>
        <form action="{{ Route('generate') }}" method="POST">
            <textarea class="form-control mt-4 mb-4 d-inline-block" placeholder="Leave a comment here" id="floatingTextarea"
                name="content"></textarea>
            @csrf
            <input type="submit" value="Generate QR code" class="btn btn-success">
        </form>
    </div>
</body>

</html>
