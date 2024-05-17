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

            <h1 class="h1">Stock</h1>
            <a href="{{ route('item.create') }}" class="btn btn-success m-3">Add new spare parts</a>
        </div>
        <div class="col align-self-center">


                <div class="form-group">
                    <form methods="get" action="/search">
                        <div class="input-group">
                            <input class="form-control" name="search" placeholder="Search..." value="{{ isset($search) ? $search : ''}}">
                            <button type="submit" class="btn btn-primary">Search</button>
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
                <th class="col">Name</th>
                <th class="col">Description</th>
                <th class="col">Amount</th>
                <th class="col">Date of Support</th>
                <th class="col">Date of updated Support</th>
                <th class="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr class="row">
                    <td class="col">{{$item->id}}</td>
                    <td class="col">{{$item->name}}</td>
                    <td class="col">{{Str::words($item->description, 5, '...')}}</td>
                    <td class="col">{{$item->amount}}</td>
                    <td class="col">{{$item->created_at}}</td>
                    <td class="col">{{$item->updated_at}}</td>
                    <td class="col">
                        <form method="POST" action="{{route('item.destroy', $item->id)}}">
                            @csrf
                            @method("DELETE")
                            <a href="{{route('item.show', $item->id)}}" class="btn btn-info"><i class="fa-solid fa-eye"></i></a>
                            <a href="{{route('item.edit', $item->id)}}" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                            <button  type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $items->links() }}
</div>

</x-app-layout>
