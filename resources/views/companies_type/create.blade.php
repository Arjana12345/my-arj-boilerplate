<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create Companies Type</h1>
    <form method="post" action="{{ route('companies_type.store') }}">
        @csrf
        @method('post')
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="description" placeholder="Description">
        <input type="submit" name="Submit">
    </form>
</body>
</html>