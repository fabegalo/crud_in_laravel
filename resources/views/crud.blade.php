<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pacientes Covid-19</title>

        <style> 
            body {
                background:url(assets/background.jpg) no-repeat !important;
                background-size:cover;
            }
        </style>

        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="{{ asset('assets/js/app.js') }}" async defer></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </head>
    <body>

        <!-- Image and text -->
        <nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
            <img src="assets/covid-19.png" alt="" width="30" height="30" class="d-inline-block align-top">
            Home
            </a>
        </div>
        </nav>

        <div id="app" class="container p-5">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="inputNome" class="form-label">Nome do Paciente: </label>
                        <input v-model="nome" type="text" class="form-control" id="inputNome" placeholder="Ricardo Ribeiro">
                    </div>
                    <div class="mb-3">
                        <label for="inputIdade" class="form-label">Idade: </label>
                        <input v-model="idade" type="text" class="form-control" id="inputIdade" placeholder="22">
                    </div>

                    Teste Covid-19: 
                    <select v-model="teste" class="form-select" aria-label="Default select example">
                        <option value="S" >Positivo</option>
                        <option value="N">Negativo</option>
                    </select>

                    <div class="row p-3">
                        <button v-on:click="add" type="submit" class="btn btn-primary mb-3">Incluir</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>







