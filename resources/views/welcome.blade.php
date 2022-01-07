<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>STC Mailer</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <!-- Font Awesome -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
    />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="align-items-center d-flex modal">

<div class="container shadow p-3 mb-5 rounded">
    <form action="{{ url('sendmail') }}" method="POST">

        <div class="row">
            <div class="col-sm-2">
                <div class="form-floating mb-3">
                    <select class="form-select" aria-label=".form-select-lg example">
                        <option selected>Civilité</option>
                        <option value="MONSIEUR ">MONSIEUR</option>
                        <option value="MADAME">MADAME</option>
                    </select>
                    <label for="floatingSelect">Sélectionner civilité</label>
                </div>
            </div>

            <div class="col-sm-5">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="nom" placeholder="Nom">
                    <label for="nom">Nom</label>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="form-floating">

                    <input type="text" class="form-control" id="prenom" placeholder="Prénom">
                    <label for="prenom">Prénom</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-floating">

                    <input type="email" class="form-control" id="mail" placeholder="mail">
                    <label for="mail">Email</label>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-floating">
                    <input type="date" class="form-control datepicker" id="dateRDV"/>
                    <label for="dateRDV" class="form-label">Selectionner date</label>

                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-floating">
                    <input type="time" class="form-control datepicker" id="timeRDV"/>
                    <label for="timeRDV" class="form-label">Selectionner l'heure</label>


                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 mt-3">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="adresse" placeholder="Adresse">
                    <label for="adresse">Adresse</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-floating">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <label for="floatingSelect">Works with selects</label>
                </div>
            </div>
        </div>
        <div class="row mt-3">
           <div class="col-sm-12">
               <button type="submit" class="btn btn-success btn-lg w-100">Envoyer</button>
           </div>
        </div>
    </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment-with-locales.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<script
    src="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="/js/app.js"></script>
</body>
</html>
