<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View support request</title>
    <link rel="stylesheet" href="{{asset('build/assets/app-DQan_v0o.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>View support request</h1>
            <h3>ID</h3>
            <p>{{$order->id}}</p>
            <h3>Customer ID</h3>
            <p>{{$order->customerID}}</p>
            <h3>Title</h3>
            <p>{{$order->title}}</p>
            <h3>Description and Cost</h3>
            <p>{{$order->description_cost}}</p>
            <h3>Home Address</h3>
            <p>{{$order->home_address}}</p>
            <h3>Day of visit</h3>
            <p>{{$order->home_date}}</p>
            <h3>Time of visit</h3>
            <p>{{$order->home_time}}</p>
            <h3>Created at</h3>
            <p>{{$order->created_at}}</p>
            <h3>Updated at</h3>
            <p>{{$order->updated_at}}</p>

            <form action="{{route('order.destroy', $order->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <div class="mt-4">
            <a href="{{route('order.edit', $order->id)}}" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
            <a href="{{route('order.index')}}" class="btn btn-secondary">Back</a>
                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            </form>
            </div>
    </div>
</body>
</html>
