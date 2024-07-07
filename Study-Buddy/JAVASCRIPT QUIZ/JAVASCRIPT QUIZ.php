<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="custom.css" />
</head>

<body>
    <section class="main">

        <div class="container">
            <div class="col">
                <h3 id="questionBox">
                    1) Lorem ipsum dolor sit amet, consectetur adipisicing elit Debitis?
                </h3>
            </div>
            <div class="col box">
                <input name="option" type="radio" id="first" value="a" required>
                <label for="first">Testing 1</label>
            </div>
            <div class="col box">
                <input name="option" type="radio" id="second" value="b" required>
                <label for="second">Testing 2</label>
            </div>
            <div class="col box">
                <input name="option" type="radio" id="third" value="c" required>
                <label for="third">Testing 3</label>
            </div>
            <div class="col box">
                <input name="option" type="radio" id="fourth" value="d" required>
                <label for="fourth">Testing 4</label>
            </div>
            <button id="submit">Submit</button>
        </div>

    </section>
    <script src="app.js"></script>
</body>

</html>