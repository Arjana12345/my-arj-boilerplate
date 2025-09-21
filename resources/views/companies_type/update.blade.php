<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create Companies Type</h1>
    @if($errors->any())
        <ul>
        @foreach($errors->all() as $error)
            {{$error}}
        @endforeach 
    @endif
    </ul>
    <form method="post" action="{{ route('companies_type.update_store', ['company_data' => $company_data]) }}">
        @csrf
        @method('put')
        <input type="text" name="name" placeholder="Name" value="{{$company_data->name}}">
        <input type="text" name="description" placeholder="Description" value="{{$company_data->description}}">
        <input type="submit" name="Submit">
    </form>
</body>
</html>