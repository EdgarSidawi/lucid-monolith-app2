<!-- <!DOCTYPE html>
<html>

<head>
    <title>App2</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html,
        body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato', 'Helvetica';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="content">
            <div class="title">Laravel • Lucid for App 2</div>
        </div>
    </div>
</body>

</html> -->

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>App2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>
    <div class="container">

        <form action="submit" method="POST">
            @csrf
            <div class="mb-3 form-group">
                <label for="sportName" class="form-label">Name of Sport</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
                <!-- @error('name') -->
                <div id="emailHelp" class="form-text text-danger">
                    <!-- {{ $message }}. -->
                </div>
                <!-- @enderror -->
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
        <br><br>
        <!-- @foreach($data as $item)
        <li>{{$item->name}}</li>
        @endforeach -->
    </div>


</body>

</html>