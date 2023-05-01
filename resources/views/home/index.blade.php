<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Home Page</title>
</head>

<body>
   <nav>
    <label class="logo">My Lame Blogs</label>
    <ul>
        <li>
            <a class="btn btn-warning" href="">Home </a>
        </li>
        <li>
            <a class="btn btn-secondary" href=""> Contact</a>
        </li>
        <li>
            <a class="btn btn-primary" href="{{route('register')}}">Register </a>
        </li>
        <li>
            <a class="btn btn-success" href="{{route('login')}}"> Login</a>
        </li>
    </ul>
   </nav>



   <div class="blog">
        <label>
            <h3>Habibur</h3>
        </label>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores voluptatum iure nesciunt autem temporibus illo. Deserunt soluta nihil quibusdam est inventore accusantium dolores tenetur commodi, id eos consequatur, ducimus perspiciatis dolor possimus corporis magni quasi eum hic. Delectus, omnis perferendis!</p>
        <img src="img1.webp" height="500px" width="100%" />
   </div>


</body>

</html>