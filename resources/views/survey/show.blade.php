<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Survey</title>
    <link rel="stylesheet" href="{{asset('build/assets/app-DQan_v0o.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>View survey</h1>
        <h3>ID</h3>
            <p>{{$survey->id}}</p>
            <h3>Customer ID</h3>
            <p>{{$survey->customerID}}</p>
            <h3>Solved Problem</h3>
            <p>{{$survey->solve_problem}}</p>
            <h3>Time taken for job done</h3>
            <p>{{$survey->time_taken}}</p>
            <h3>Customer Satisfaction</h3>
            <p>{{$survey->customer_satisfaction}}</p>
            <h3>Location of business support jobs</h3>
            <p>{{$survey->job_location}}</p>
            <h3>Suggestion</h3>
            <p>{{$survey->suggestion}}</p>
            <h3>Created at</h3>
            <p>{{$survey->created_at}}</p>
            <h3>Updated at</h3>
            <p>{{$survey->updated_at}}</p>

            <form action="{{route('survey.destroy', $survey->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <div class="mt-4">
            <a href="{{route('survey.edit', $survey->id)}}" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
            <a href="{{route('survey.index')}}" class="btn btn-secondary">Back</a>
                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            </form>
            </div>
    </div>
</body>
</html>
