<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body{
        background-image: url("https://i.pinimg.com/originals/38/f4/0a/38f40af6a07e1d7907cd820cdf4e33e0.jpg");
        background-repeat: no-repeat;
         background-size: cover;
        color: darkorange;
    }
    /* .test{
    width: 80%;
    height: 50vh;
    background-color: white;
    color: black;
    opacity: 0.5;
    justify-content: center;

} */
/* .h1{
    position: absolute;
  margin-bottom: 50%;
  left: 50%;
} */
</style>
<body>
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">World Animal Protection</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                More
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Clothes</a></li>
                <li><a class="dropdown-item" href="#">Crypto</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Donate</a></li>
            </ul>
            </li>
        </ul>
        <form class="d-flex" action="recherche.php" method="GET">
        <input class="form-control me-2" type="text" name="search" placeholder="Recherche...">
        <button class="btn btn-dark" type="submit">Search</button>
    </form>
    <div id="autocompleteResults"></div>

<script>
    // JavaScript code for handling autocomplete
    const searchInput = document.getElementById('searchInput');
    const autocompleteResults = document.getElementById('autocompleteResults');

    searchInput.addEventListener('input', function() {
        const searchTerm = searchInput.value;
        if (searchTerm.length >= 2) {
            fetchAutocompleteResults(searchTerm);
        } else {
            autocompleteResults.innerHTML = '';
        }
    });

    function fetchAutocompleteResults(searchTerm) {
        fetch(`autocomplete.php?search=${encodeURIComponent(searchTerm)}`)
            .then(response => response.json())
            .then(data => {
                let resultsHtml = '';
                data.forEach(row => {
                    resultsHtml += `<div><a href='element.php?id=${row.id}'>${row.animal}</a></div>`;
                });
                autocompleteResults.innerHTML = resultsHtml;
            })
            .catch(error => {
                console.error('Error fetching autocomplete results:', error);
            });
    }
</script>
        </div>
    </div>
    </nav>
</header>
<br>
<br>
<br>
<main>
<div class="container text-center">
<div class="row">
    <div class="col">
      <br> <br> <br> <br> <br> <br> 
      <div class="card"> 
  <div class="card-body"> <br> <br>
    <h5 class="card-title">World Animal Protection</h5>
    <p class="card-text">Fighting the deadly exotic pet trade to keep wild animals where they belong - in the wild</p>
    <button type="button" class="btn btn-dark">Donate</button>
  <br> <br>
  </div>
</div>
    </div>
    <div class="col">
    </div>
    <div class="col">
    </div>
  </div>
</div>
</main> 

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>