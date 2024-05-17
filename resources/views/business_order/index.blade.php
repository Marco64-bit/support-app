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

        <h1 class="h1">Business Support Requests</h1>
        <a href="{{ route('business_order.create') }}" class="btn btn-success m-3">Add new request</a>
    </div>
    <div class="col align-self-center">


            <div class="form-group">
                <form method="Get" action="/search3">
                    <div class="input-group">
                        <input class="form-control" name="search3" placeholder="Search..." value="{{ isset($search3) ? $search3 : ''}}">
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
            <th class="col">Company Name</th>
            <th class="col">Company Address</th>
            <th class="col">Title</th>
            <th class="col">Description Cost</th>
            <th class="col">Company Date</th>
            <th class="col">Time of visit</th>
            <th class="col">Date of Request</th>
            <th class="col">Date of updated Request</th>
            <th class="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($business_orders as $business_order)
            <tr class="row">
                <td class="col">{{$business_order->id}}</td>
                <td class="col">{{$business_order->customerID}}</td>
                <td class="col">{{$business_order->company_name}}</td>
                <td class="col">{{Str::words($business_order->company_address, 5, '...')}}</td>
                <td class="col">{{$business_order->title}}</td>
                <td class="col">{{$business_order->description_cost}}</td>

                <td class="col">{{$business_order->company_date}}</td>
                <td class="col">{{$business_order->company_time}}</td>
                <td class="col">{{$business_order->created_at}}</td>
                <td class="col">{{$business_order->updated_at}}</td>
                <td class="col">
                    <form method="POST" action="{{route('business_order.destroy', $business_order->id)}}">
                    <a href="{{route('business_order.show', $business_order->id)}}" class="btn btn-info"><i class="fa-solid fa-eye"></i></a>
                    <a href="{{route('business_order.edit', $business_order->id)}}" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                        @csrf
                        @method("DELETE")
                        <button  type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{$business_orders->links()}}
</div>
</x-app-layout>
