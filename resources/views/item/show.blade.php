<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Item</title>
    <link rel="stylesheet" href="{{asset('build/assets/app-DQan_v0o.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>View your Item</h1>
            <h2>ID: </h2>
            <p>{{$item->id}}</p>
            <h2>Name: </h2>
            <p>{{$item->name}}</p>
            <h2>Description: </h2>
            <p>{{$item->description}}</p>
            <h2>Amount: </h2>
            <p>{{$item->amount}}</p>
            <h2>Created at</h2>
            <p>{{$item->created_at}}</p>
            <h2>Updated at</h2>
            <p>{{$item->updated_at}}</p>
            <form action="{{route('item.destroy', $item->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <div class="mt-4">
            <a href="{{route('item.edit', $item->id)}}" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
            <a href="{{route('item.index')}}" class="btn btn-secondary">Back</a>
                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            </form>
            </div>
    </div>
</body>
</html>
