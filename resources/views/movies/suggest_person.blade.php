<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Suggest a person</title>

    <style>
        body {
            min-height: 100vh;
            margin: 0;
            display: flex;
        }
        body > * {
            flex: 1;
            padding: 2em;
        }
        .form {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-end;
        }
        .form input {
            font-size: 1.2em;
            padding: 0.5em;
            border-radius: 0.25em;
            border: 1px solid silver;
        }
    </style>
</head>
<body>

    <div class="form">

        <label for="">Type and ye shall receive</label><br>
        <input type="text" id="suggest_person">

    </div>

    <div class="suggestions">



    </div>

    <script>

    let input = document.getElementById('suggest_person');
    input.addEventListener('keyup', () => {
        fetch('/api/person/suggest?s=' + encodeURIComponent(input.value), {
            method: 'GET'
        })
        .then((response) => {
            return response.json();
        })
        .then((json) => {
            let container = document.querySelector('.suggestions');
            container.innerHTML = '';

            json.forEach((item) => {

                let div = document.createElement('div');
                div.innerHTML = item.fullname;
                container.appendChild(div);
            });
            console.log(json);
        });
    });

    </script>
    
</body>
</html>