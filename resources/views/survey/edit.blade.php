<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Update your survey</title>
</head>
<body>
    <div class="container">
        <h1>Update your survey</h1>
        <form action="{{ route('survey.update', $survey->id) }}" method="POST">
            @csrf
            @method('PUT')
            <h3>Did I solve the problem that you faced successfully</h3>
            <select  name="solve_problem" class="form-control" required>
                <option value="{{$survey->solve_problem}}">{{$survey->solve_problem}}</option>
                <option value="1 (Very Satisfied)">1 (Very Satisfied)</option>
                <option value="2 (Satisfied)">2 (Satisfied)</option>
                <option value="3 (Neutral)">3 (Neutral)</option>
                <option value="4 (Not Satisfied)">4 (Not Satisfied)</option>
                <option value="5 (Terrible)">5 (Terrible)</option>
            </select>

            <h3>Did I take a long time for solving it</h3>
            <select type="select" name="time_taken" class="form-control" required>
                <option value="{{$survey->time_taken}}">{{$survey->time_taken}}</option>
                <option value="1 (Very Satisfied)">1 (Very Satisfied)</option>
                <option value="2 (Satisfied)">2 (Satisfied)</option>
                <option value="3 (Neutral)">3 (Neutral)</option>
                <option value="4 (Not Satisfied)">4 (Not Satisfied)</option>
                <option value="5 (Terrible)">5 (Terrible)</option>
            </select>

            <h3>How are you satisfied from our service</h3>
            <select type="select" name="customer_satisfaction" class="form-control"  required>
                <option value="{{$survey->customer_satisfaction}}">{{$survey->customer_satisfaction}}</option>
                <option value="1 (Very Satisfied)">1 (Very Satisfied)</option>
                <option value="2 (Satisfied)">2 (Satisfied)</option>
                <option value="3 (Neutral)">3 (Neutral)</option>
                <option value="4 (Not Satisfied)">4 (Not Satisfied)</option>
                <option value="5 (Terrible)">5 (Terrible)</option>
            </select>

            <h3>Was the job location suitable and near or far from you</h3>
            <select type="select" name="job_location" class="form-control"  required>
                <option value="{{$survey->job_location}}">{{$survey->job_location}}</option>
                <option value="1 (Very Satisfied)">1 (Very Satisfied)</option>
                <option value="2 (Satisfied)">2 (Satisfied)</option>
                <option value="3 (Neutral)">3 (Neutral)</option>
                <option value="4 (Not Satisfied)">4 (Not Satisfied)</option>
                <option value="5 (Terrible)">5 (Terrible)</option>
            </select>
            <h3>Do you have any suggestion for improving our services</h3>
            <textarea name="suggestion" class="form-control" cols="30" rows="10">{{$survey->suggestion}}</textarea>
            <button type="submit" class="btn btn-success mt-3">Submit</button>
            <a href="{{route('order.index')}}" class="btn btn-secondary mt-3">Cancel</a>
        </form>
    </div>
</body>
</html>
