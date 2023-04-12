<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon"
        href="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/c7156d1c-515c-4a5d-ab77-a856fedda897/df9vcl7-240c5bdf-61ca-4bb1-ad65-cfa7886a2a77.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2M3MTU2ZDFjLTUxNWMtNGE1ZC1hYjc3LWE4NTZmZWRkYTg5N1wvZGY5dmNsNy0yNDBjNWJkZi02MWNhLTRiYjEtYWQ2NS1jZmE3ODg2YTJhNzcucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.G8bqhWb8ZjSqVVwU-ogS_nR7P8sMu5VZrbI0m61O1KY"
        type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Form</title>
</head>
<style type="text/css">
.form {
    padding-left: 40px;
}
</style>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ade8f4; border: solid #00b4d8 2px">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/c7156d1c-515c-4a5d-ab77-a856fedda897/df9vcl7-240c5bdf-61ca-4bb1-ad65-cfa7886a2a77.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2M3MTU2ZDFjLTUxNWMtNGE1ZC1hYjc3LWE4NTZmZWRkYTg5N1wvZGY5dmNsNy0yNDBjNWJkZi02MWNhLTRiYjEtYWQ2NS1jZmE3ODg2YTJhNzcucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.G8bqhWb8ZjSqVVwU-ogS_nR7P8sMu5VZrbI0m61O1KY"
                        alt="" width="35" height="30">
                </a>

                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                        <div class="navbar-nav mx-auto">
                            <a class="nav-item nav-link" href="/" style="color: #0077b6">HOME</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header><br>
    <div class="row">
        <form action="/welcome" method="post" class="form">
            @csrf
            <h2>Buat Account Baru!</h2>
            <label>First Name :</label><br /><br />
            <input type="text" name="firstname" required /><br /><br />
            <label>Last Name :</label><br /><br />
            <input type="text" name="lastname" required /><br /><br />
            <label>Gender :</label><br /><br />
            <input name="gender" type="radio" value="male" />Male<br />
            <input name="gender" type="radio" value="female" />Female<br />
            <input name="gender" type="radio" value="other" />Other<br /><br />
            <label>Nationality :</label><br /><br />
            <select name="bahasa" required>
                <option value="Indonesia">Indonesia</option>
                <option value="Inggris">Inggris</option>
                <option value="India">India</option>
                <option value="Japan">Japan</option>
                <option value="Philipina">Philipina</option>
                <option value="Malaysia">Malaysia</option>
            </select><br /><br />
            <label>Language Spoken :</label><br /><br />
            <input type="checkbox" name="spoken" />Bahasa Indonesia<br />
            <input type="checkbox" name="spoken" />English<br />
            <input type="checkbox" name="spoken" />Other<br /><br />
            <label>Bio :</label><br /><br />
            <textarea name="pesan" rows="16" cols="36" required></textarea><br /><br />
            <button>Sign Up</button>
        </form>
    </div>
</body>

</html>