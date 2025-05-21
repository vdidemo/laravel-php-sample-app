<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="w-50 border border-1 border-primary mx-auto mt-5 p-3 rounded shadow-md">
         <form action="{{url('send-mail')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="email">Send To</label>
                <input type="email" name="email" id="email" class="form-control"> <!-- Changed to email -->
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="body">Content</label>
                <input type="text" name="body" id="body" class="form-control"> <!-- Changed to body -->
            </div>
            <button type="submit" class="btn btn-primary mt-3">Send</button>
        </form>
    </div>
</body>
</html>