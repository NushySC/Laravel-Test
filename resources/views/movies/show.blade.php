<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie detail with AJAX</title>
</head>
<body>

    <h1></h1>

    <div class="content"></div>

    <script>
    
fetch('/api/movie/{{ $id }}', {
    method: 'GET'
})
.then((response) => {
    return response.json();
})
.then((json) => {
    console.log(json);

    // document.querySelector('.content').innerHTML = json;
    document.querySelector('h1').innerHTML = json.name;
});
    
    </script>
    
</body>
</html>