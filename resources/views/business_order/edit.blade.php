<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update support request</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Update support request</h1>
        <form action="{{ route('business_order.update', $businessOrder->id) }}" method="POST">
            @csrf
            @method('PUT')
            <h3>Company Name</h3>
            <input type="text" name="company_name" class="form-control" value="{{$businessOrder->company_name}}" required>

            <h3>Company Address</h3>
            <input type="text" name="company_address" class="form-control" value="{{$businessOrder->company_address}}" required>

            <h3>Issue Title</h3>
            <select name="title" class="form-control" required>
                <option value="{{$businessOrder->title}}">{{$businessOrder->title}}</option>
                <option value="Hardware issue">Hardware issue</option>
                <option value="Software issue">Software issue</option>
            </select>

            <h3>Description and Cost</h3>
            <select name="description_cost" class="form-control" required>
                <option value="Laptop Won’t Power On Cost: $125">Laptop Won’t Power On Cost: $125</option>
                <option value="Screen Flickering Cost: $350">Screen Flickering Cost: $350</option>
                <option value="Printer Paper Jam Error: $75">Printer Paper Jam Error Cost: $75</option>
                <option value="Keyboard Not Working Cost: $100">Keyboard Not Working Cost: $100</option>
                <option value="Apple MacBook Pro Overheating Cost: $550">Apple MacBook Pro Overheating Cost: $550</option>
                <option value="Password Recovery Cost: $100">Password Recovery Cost: $100</option>
                <option value="File Access Troubleshooting Cost: $150">File Access Troubleshooting Cost: $150</option>
                <option value="Data Recovery Services Cost: $300">Data Recovery Services Cost: $300</option>
                <option value="Online Meeting Assistance Cost: $70">Online Meeting Assistance Cost: $70</option>
                <option value="Software Installation Failures Cost: $125">Software Installation Failures Cost: $125</option>
            </select>
            <hr>

            <h3>Day of visit</h3>
            <select name="company_date" class="form-control">
                <option value="{{$businessOrder->company_date}}">{{$businessOrder->company_date}}</option>
                <option value="Sunday">Sunday</option>
                <option value="Monday">Monday</option>
                <option value="Tuesday">Tuesday</option>
                <option value="Wednesday">Wednesday</option>
                <option value="Thursday">Thursday</option>
            </select>
            <h3>Time</h3>
            <p>Write your suitable time from 8 AM to 2 PM</p>
            <input type="text" name="company_time" class="form-control" placeholder="Write you suitable time" value="{{$businessOrder->company_time}}" required >
            <button type="submit" class="btn btn-success mt-3">Update your request</button>
            <a href="{{route('business_order.index')}}" class="btn btn-secondary mt-3">Cancel</a>
        </form>
    </div>
</body>
</html>
