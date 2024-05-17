<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Item</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Update Item</h1>
        <form action="{{ route('item.update', $item->id) }}" method="POST">
            @csrf
            @method('PUT')
            <h3>Name</h3>
            <input type="text" name="name" class="form-control" placeholder="Write your item name" value = "{{$item->name}}">
            <h3>Description</h3>
            <textarea type="text" name="description" class="form-control" placeholder = "Write your item description">{{$item->description}}</textarea>
            <h3>Amount</h3>
            <input type="number" min="1" name="amount" class="form-control" placeholder="Write your item amount" value = "{{$item->amount}}">
            <button type="submit" class="btn btn-success mt-3">Update</button>
            <a href="{{route('item.index')}}" class="btn btn-secondary mt-3">Cancel</a>
        </form>
    </div>
</body>
</html>
