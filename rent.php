<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choufli DAR</title>
    <title>Choufli DAR</title>
    <script src="rent.js"></script>
    <link href="map.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.fog.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>

    <nav class="navbar navbar-expand-lg ">


            <div class="container-fluid">
                <div class="d-flex ">
                    <a class="navbar-brand" href="acceuil.html"><img src="logo.png" id="logonav" height="55px"></a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="rentMouma.php">Rent</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="binome.php">Binome</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="proprietaire.html">Homesteads</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#help.html">Help</a>
                        </li>
                        <li class="nav-item tooltip-container" >
                        <span class="text">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"viewBox="0 0 95 114" class="svgIcon">
                          <rect fill="black" rx="28.5" height="57" width="57" x="19"></rect>
                          <path fill="black" d="M0 109.5C0 83.2665 21.2665 62 47.5 62V62C73.7335 62 95 83.2665 95 109.5V114H0V109.5Z"></path>
                        </svg>
                            <a class="nav-link" href="sign-in-sign_up.html">Log in</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


    </header>

    <main>
        <div class="container">
            <div class="row justify-content-center mt-3">
                <div class="col-md-6">
                    <select class="form-select custom-select" name="filterRegion" aria-label="Default select example" id="region">
                        <option  value="hammam sousse" >ESSTHS</option>
                        <option  value="hammam sousse" >ISITCOM</option>
                        <option  value="hammam sousse" >ISSIS</option>
                        <option  value="sahloul" >EPI</option><!--sahloul-->
                        <option  value="sahloul" >POLYTECHNIQUE</option><!--sahloul-->
                        <option  value="sahloul" >IHEC</option><!--sahloul-->
                        <option  value="taffela" >ISG</option><!--taffela-->
                        <option  value="taffela" >ISSAT</option><!--taffela-->
                        <option  value="cité erriadh" >PRISTINI</option>
                        <option  value="cité erriadh" >FDSEPS</option>
                        <option  value="sousse centre" >FMS</option>
                        <option  value="cité erriadh" >FLSHS</option>
                        <option  value="sousse centre" >ISFFS</option>
                        <option  value="cité erriadh" >ISTLS</option>
                        <option  value="sousse centre" >ISBAS</option>
                        <option  value="sahloul" >ESSTSS</option>
                        <option  value="sousse centre" >ISMS</option>
                        <option  value="cité erriadh" >ENISO</option>
                        <option  value="chatt mariem" >ISACM</option>
                        <option  value="cité erriadh" >ISET</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row" >
                <div class="col-md-6"  id="map-container">
                    <!--map    www.geodatos.net › en › coordinates  -->
                </div>
                <div class="col-md-6" id="houses-component" >   


                    <script>
                    $(document).ready(function(){
                        var map = L.map('map-container').setView([35.8617, 10.5967], 12);

                        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                        }).addTo(map);

                        function getHouses() {
                            const region = $('#region').val();
                    
                                $.ajax({
                                url: './getHouses.php',
                                type: 'GET',
                                method:'GET',
                                data: { filterRegion: region},
                                success: function(response) {
                                    console.log(response)
                                    $('#houses-component').empty();
                                    if (response !== 'empty') {
                                        response.forEach(function(house) {
                                            var houseHTML = `
                                            <div class="col-md-4 mb-4">
                                            <div class="desccard">
                                            <div class="card" style="background-color: #E8DCD6; color: #662F10;">
                                            <div class="houseicon">
                                            <svg viewBox="0 0 200 170" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 84.0247C0 87.888 3.25114 90.2232 7.27671 90.2232C9.76073 90.2232 11.7297 89.0968 13.4429 87.4863L97.0046 15.9341C97.9434 15.0481 98.9735 14.7253 100.084 14.7253C101.114 14.7253 102.057 15.0481 103.079 15.9341L186.557 87.4863C188.354 89.0968 190.323 90.2232 192.723 90.2232C196.745 90.2232 200 87.888 200 84.0247C200 81.6106 199.058 80.0824 197.432 78.7122L174.803 59.3491C170.363 55.5494 167.806 49.9974 167.806 44.1531V5.79327C167.806 2.25275 165.41 0 161.644 0H150.429C146.747 0 144.179 2.25275 144.179 5.79327C144.179 16.5362 131.572 22.3251 123.424 15.3233L110.272 4.02129C107.277 1.36676 103.595 0.0824182 100 0.0824182C96.4018 0.0824182 92.8073 1.37019 89.7242 4.02472L2.56804 78.7122C1.02648 80.0824 0 81.6106 0 84.0247ZM24.4858 151.552C24.4858 162.74 31.6785 169.262 43.7479 169.262H58.4256C69.4713 169.262 78.4256 160.307 78.4256 149.262V112.033C78.4256 108.331 81.0776 105.92 85.0155 105.92H115.24C119.178 105.92 121.746 108.331 121.746 112.033V149.262C121.746 160.307 130.7 169.262 141.746 169.262H156.336C168.405 169.262 175.514 162.74 175.514 151.552V101.907C175.514 96.0276 172.927 90.4461 168.441 86.646L102.824 31.0646C101.881 30.261 100.855 29.8592 99.8283 29.8592C98.8858 29.8592 97.9434 30.261 96.9169 31.147L31.4932 87.0514C27.0464 90.8512 24.4858 96.4072 24.4858 102.256V151.552Z" fill="#662F10"/>
                                            </svg>
                                            </div>
                                            <hr>
                                                <p class="card-text">
                                                    Price: ${house.prix}<br>
                                                    Rooms: ${house.nbchambre}<br>
                                                    Surface: ${house.surface}<br>
                                                    City: ${house.region}<br>
                                                    Description :${house.description}<br>
                                                    
                                                </p>
                                                <p id="homestead"></p>
                                                <button class="custom-button" >Plus d'info</button>
                                            </div>
                                            </div>
                                        </div> `;
                                        $('#houses-component').append(houseHTML);
                                        L.marker([house.lat, house.lng]).addTo(map);
                                    });
                                    } else if(response.message === 'empty') {
                                        alert('failed to load data')
                                       
                                    }
                                },
                                error: function(error) {
                                    console.log('Error fetching houses:', error);
                                }
                            });
                        }

                        getHouses();

                        $('#region').on('change', getHouses);
                    });

                    </script>  
                


                </div>

            </div>

        </div>
        </div>
        </div>

    </main>

    <footer>
        <div class="container">
            <hr class="custom-hr">
        </div>

        <div id="footer">
            <img src="logo.png" height="70px" width="143">
            <p>We're dedicated to simplifying the rental <br>
                process,connecting you with the perfect <br>
                property or roommate.Find your ideal <br>
                living situation effortlessly with us.
            </p>
        </div>
        <div id="footer">
            <p>
                Contact Us:
            </p>
            <div class="example-2">
                <div class="icon-content">
                    <a href="https://www.instagram.com/" aria-label="Instagram" data-social="instagram">
                        <div class="filled"></div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16" xml:space="preserve">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" fill="currentColor"></path>
                        </svg>
                    </a>
                    <div class="tooltip">Choufli_Dar</div>
                </div>
                <div class="icon-content">
                    <a href="mailto:youremail@example.com" aria-label="Email" data-social="email">
                        <div class="filled"></div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16" xml:space="preserve">

                            <path fill-rule="evenodd" d="M.143 3.138c-.126.061-.14.133-.14.318v8.108c0 .185.014.257.14.318.125.061.25.081.453.081h14.008c.203 0 .328-.02.453-.081.126-.061.141-.133.141-.318V3.456c0-.185-.015-.257-.141-.318-.125-.061-.25-.08-.453-.08H.596c-.203 0-.328.019-.453.08zM0 3.456l7.426 4.763a.998.998 0 0 0 1.148 0L16 3.456v8.107l-1.78-1.137a1.504 1.504 0 0 0-1.739 0L8 11.014l-4.481-2.877a1.504 1.504 0 0 0-1.738 0L0 11.563V3.456z" />

                        </svg>
                    </a>
                    <div class="tooltip">chouflidar@gmail.com</div>
                </div>

                <div class="icon-content">
                    <a href="https://www.facebook.com/" aria-label="Facebook" data-social="facebook">
                        <div class="filled"></div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16" xml:space="preserve">
                            <path d="M1 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h7.619V9.804H6.405V7.294h2.214V5.529c0-2.192 1.336-3.384 3.285-3.384.937 0 1.742.07 1.977.101v2.29h-1.355c-1.064 0-1.271.507-1.271 1.25v1.637h2.547l-.33 2.51H10.09V16H15a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1z"></path>
                        </svg>
                    </a>
                    <div class="tooltip">ChoufliDar</div>
                </div>
                <div class="icon-content">
                    <a href="https://wa.me/yourphonenumber" aria-label="WhatsApp" data-social="whatsapp">
                        <div class="filled"></div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16" xml:space="preserve">
                            <path d="M10.825 8.032l-.678-.339c-.129-.064-.248-.157-.347-.265-.135-.133-.224-.311-.245-.501-.02-.189.036-.375.147-.524.08-.112.174-.245.2-.384.027-.138.015-.303-.017-.45-.045-.23-.135-.43-.253-.614-.117-.184-.271-.347-.458-.513-.186-.166-.402-.291-.647-.392-.238-.097-.505-.158-.774-.158-.496 0-.975.139-1.378.4-.25.16-.479.371-.678.618-.204.255-.384.565-.523.898-.144.336-.236.675-.282 1.018-.057.417-.025.84.11 1.254.134.417.336.81.603 1.166.282.372.612.689.985.965.374.277.775.504 1.191.693.43.194.882.296 1.349.296.22 0 .433-.019.645-.056.213-.037.417-.092.614-.161.188-.076.367-.175.526-.299.159-.125.304-.282.43-.465.13-.189.23-.401.299-.63.068-.229.102-.466.102-.712 0-.256-.056-.51-.17-.755-.113-.244-.276-.471-.49-.676z" fill="currentColor"></path>
                        </svg>
                    </a>
                    <div class="tooltip">+21600000000</div>
                </div>


            </div>
        </div>
        <div id="footer">
            <ul>
                <li class="links">Rent</li>
                <li class="links">Homesteads</li>
                <li class="links">Binome</li>
                <li class="links">Help</li>
            </ul>
        </div>
        <div class="container">
            <hr class="custom-hr">
        </div>
    </footer>

</body>

</html>