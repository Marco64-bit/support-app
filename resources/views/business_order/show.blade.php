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
        <h1>View Business Request</h1>
            <h3>ID</h3>
            <p>{{$businessOrder->id}}</p>
            <h3>Business Customer ID</h3>
            <p>{{$businessOrder->customerID}}</p>
            <h3>Company Name</h3>
            <p>{{$businessOrder->company_name}}</p>
            <h3>Company Address</h3>
            <p>{{$businessOrder->company_address}}</p>
            <h3>Title</h3>
            <p>{{$businessOrder->title}}</p>
            <h3>Description and Cost</h3>
            <p>{{$businessOrder->description_cost}}</p>
            <h3>Day of visit</h3>
            <p>{{$businessOrder->company_date}}</p>
            <h3>Time of visit</h3>
            <p>{{$businessOrder->company_time}}</p>
            <h3>Created at</h3>
            <p>{{$businessOrder->created_at}}</p>
            <h3>Updated at</h3>
            <p>{{$businessOrder->updated_at}}</p>

            <form action="{{route('business_order.destroy', $businessOrder->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <div class="mt-4">
            <a href="{{route('business_order.edit', $businessOrder->id)}}" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
            <a href="{{route('order.index')}}" class="btn btn-secondary">Back</a>
                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            </form>
            </div>
    </div>
</body>
</html>
