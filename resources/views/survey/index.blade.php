<x-app-layout>
    @if ($message = Session::get('success'))
    <div class="alert alert-success mt-2 alert-dismissible fade show d-flex align-items-center" role="alert">
        <p>{{ $message }}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="h1">Survey</h1>
                <p >If you've used our services and enjoyed it, please rate us!</p>
                <a href="{{route('survey.create')}}" class="btn btn-success m-3">Take a survey</a>

            </div>
            <div class="col align-self-center">
                        <div class="form-group">
                            <form method="GET" action="/search4">
                                <div class="input-group mt-3">
                                    <input class="form-control" name="search4" placeholder="Search..." value="{{ isset($search4) ? $search4 : ''}}">
                                    <button type="submit" class="btn btn-primary">search</button>
                                </div>
                            </form>
                        </div>
                    </div>

        </div>
        <table class="table mt-4 table-bordered table-hover">
        <thead>
            <tr class="row">
                <th class="col">ID</th>
                <th class="col">Customer ID</th>
                <th class="col">Solved Problem</th>
                <th class="col">Time Taken</th>
                <th class="col">Customer Satisfaction</th>
                <th class="col">Job Location</th>
                <th class="col">Suggestion</th>
                <th class="col">Date of Survey</th>
                <th class="col">Date of updated Survey</th>
                <th class="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($surveys as $survey)
                <tr class="row">
                    <td class="col">{{$survey->id}}</td>
                    <td class="col">{{$survey->customerID}}</td>
                    <td class="col">{{$survey->solve_problem}}</td>
                    <td class="col">{{$survey->time_taken}}</td>
                    <td class="col">{{$survey->customer_satisfaction}}</td>
                    <td class="col">{{$survey->job_location}}</td>
                    <td class="col">{{$survey->suggestion}}</td>
                    <td class="col">{{$survey->created_at}}</td>
                    <td class="col">{{$survey->updated_at}}</td>
                    <td class="col">
                        <form method="POST" action="{{route('survey.destroy', $survey->id)}}">
                        <a href="{{route('survey.show', $survey->id)}}" class="btn btn-info"><i class="fa-solid fa-eye"></i></a>
                        <a href="{{route('survey.edit', $survey->id)}}" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                            @csrf
                            @method("DELETE")
                            <button  type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$surveys->links()}}
    </div>
</x-app-layout>
