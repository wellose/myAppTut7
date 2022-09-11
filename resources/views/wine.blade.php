<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"	crossorigin="anonymomous">

    <title>Wines</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>

        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand text-white" href="Index.php">My Study Plan</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page" href="Index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="#" data-bs-toggle="modal" data-bs-target="#registrationModal">Registration</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="Wines.php">Wines</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

          <div class="hero-image">
            <!-- <img src="image_1_KIT502.jpg" width="600" height="500"> -->
            <div class="hero-text" >
              <h1> Wine Regions of Australia (in 2019) </h1>
              <p></p>
            </div>

          </div>

        <div class="container">
            <h2 class="mt-5">Total Producing Area: 146,128 ha</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Region</th>
                    </tr>
                <tbody>


                </tbody>

            </table>

            <div class="row">
                <div class="col">
                    <h2 class="mt-5">Wite Varieties</h2>

                    <table class="table table-striped">
                        <tr>
                            <th>Grape</th>
                            <th>Area Ha</th>
                            <th>Percentage</th>
                        </tr>
                        <tr>
                            <td>Chardonnay</td>
                            <td>21,442</td>
                            <td>15%</td>
                        </tr>
                        <tr>
                            <td>Sauvignon Blanc</td>
                            <td>6,100</td>
                            <td>4%</td>
                        </tr>
                        <tr>
                            <td>Semillon</td>
                            <td>4,570</td>
                            <td>3%</td>
                        </tr>
                        <tr>
                            <td>Pinto Grigio/Gris</td>
                            <td>3,731</td>
                            <td>2.6%</td>
                        </tr>
                        <tr>
                            <td>Riesling</td>
                            <td>3,157</td>
                            <td>2%</td>
                        </tr>
                    </table>
                </div>
                <div class="col">
                    <h2 class="mt-5">Red Varieties</h2>

                    <table class="table table-striped">
                        <tr>
                            <th>Grape</th>
                            <th>Area Ha</th>
                            <th>Percentage</th>
                        </tr>
                        <tr>
                            <td>Shiraz</td>
                            <td>39,900</td>
                            <td>27%</td>
                        </tr>
                        <tr>
                            <td>Cabernet Sauvignon</td>
                            <td>24,682</td>
                            <td>17%</td>
                        </tr>
                        <tr>
                            <td>Merlot</td>
                            <td>8,477</td>
                            <td>6%</td>
                        </tr>
                        <tr>
                            <td>Pinot Noir</td>
                            <td>4,948</td>
                            <td>3%</td>
                        </tr>
                        <tr>
                            <td>Grenache</td>
                            <td>1,507</td>
                            <td>1%</td>
                        </tr>
                    </table>
                </div>
            </div>




        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>
