<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</head>
<body>
   <div class="container">
    <div class="row">
        <div class="col"></div>
            <h1 class="bg-primary text-white py-4">Teams</h1>
    </div>

    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>

                        <th>ID</th>
                        <th>Name</th>
                        <th>Titles</th>
                        <th>City Name</th>
                        <th>Division Name</th>
                        <th>Conference Name</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($teams as $item)

                        <tr>
                            <td> {{$item->id}}</td>
                            <td> {{$item->name}}</td>
                            <td> {{$item->titles}}</td>
                            <td> {{$item->city_name}}</td>
                            <td> {{$item->nombre_division}}</td>
                            <td> {{$item->nombre_conferencia}}</td>
                            <td> Botones</td>


                        </tr>

                    @endforeach

                </tbody>
            </table>

        </div>
    </div>

   </div>
</body>
</html>