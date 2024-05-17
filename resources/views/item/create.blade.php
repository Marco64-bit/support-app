<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a new Item</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Create a new Item</h1>
        <form action="{{ route('item.store') }}" method="POST">
            @csrf
            <h3>Name</h3>
            <input type="text" name="name" class="form-control" placeholder="Write your Item Name">
            <h3>Description</h3>
            <textarea type="text" name="description" class="form-control" placeholder = "Write your Item description"></textarea>
            <h3>Amount of the item</h3>
            <input type="number" min="1" name="amount" class="form-control" placeholder="Write your Item description">
            <button type="submit" class="btn btn-success mt-3">Create</button>
            <a href="{{route('order.index')}}" class="btn btn-secondary mt-3">Cancel</a>
        </form>
    </div>
</body>
</html>
