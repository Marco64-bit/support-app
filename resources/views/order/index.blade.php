<x-app-layout>
<div class="container">

    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-2 alert-dismissible fade show d-flex align-items-center" role="alert">
            <p>{{ $message }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif


    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="h1">Support Requests</h1>
                <a href="{{ route('order.create') }}" class="btn btn-success m-3">Add new request</a>
            </div>
            <div class="col align-self-center">

                    <div class="form-group">
                        <form methods="get" action="/search2">
                            <div class="input-group">
                                <input class="form-control" name="search2" placeholder="Search..." value="{{ isset($search2) ? $search2 : ''}}">
                                <button type="submit" class="btn btn-primary">search</button>
                            </div>
                        </form>
                    </div>

            </div>
        </div>
    </div>
    <table class="table table-bordered table-hover">
        <thead>
            <tr class="row">
                <th class="col">ID</th>
                <th class="col">Customer ID</th>
                <th class="col">Title</th>
                <th class="col">Description</th>
                <th class="col">Home Address</th>
                <th class="col">Day of visit</th>
                <th class="col">Time of visit</th>
                <th class="col">Date of Request</th>
                <th class="col">Date of updated Request</th>
                <th class="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr class="row">
                    <td class="col">{{$order->id}}</td>
                    <td class="col">{{$order->customerID}}</td>
                    <td class="col">{{$order->title}}</td>
                    <td class="col">{{Str::words($order->description_cost, 5, '...')}}</td>
                    <td class="col">{{$order->home_address}}</td>
                    <td class="col">{{$order->home_date}}</td>
                    <td class="col">{{$order->home_time}}</td>
                    <td class="col">{{$order->created_at}}</td>
                    <td class="col">{{$order->updated_at}}</td>
                    <td class="col">
                        <form method="POST" action="{{route('order.destroy', $order->id)}}">
                        <a href="{{route('order.show', $order->id)}}" class="btn btn-info"><i class="fa-solid fa-eye"></i></a>
                        <a href="{{route('order.edit', $order->id)}}" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                            @csrf
                            @method("DELETE")
                            <button  type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$orders->links()}}
</div>

</x-app-layout>
