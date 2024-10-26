<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="acceuil.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    	<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.fog.min.js"></script>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="rent.js"></script>
  <title>Choufli Dar</title>
</head>
<body>

<nav class="navbar navbar-expand-lg ">

          <div class="container-fluid">
            <div class="d-flex align-items-center">
              <a class="navbar-brand" href="acceuil.html"><img src="logo.png" id="logonav" height="55px" ></a>
          </div>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                
                  <ul class="navbar-nav ">
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
                      <li class="nav-item tooltip-container">
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
    <div id="background">
      <section class="s1">
        <div id="but">
    <button class="learn-more">
        <span class="circle" aria-hidden="true">
            <span class="icon arrow"></span>
        </span>
        <a href="rent.php"><span class="button-text">view map </span></a>
    </button>
    </div>
</section>

        <section class=s3>
            
            <?php include 'acceuilmouma.php'; ?>


        </section>
        <script>
  VANTA.FOG({
            el: "#background", // Target the div with ID "background"
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 200.00,
            minWidth: 200.00,
            highlightColor: 0xe0a271,
            midtoneColor: 0xe3c0a1,
            lowlightColor: 0xffefd5
        });
    </script>
        <footer >
            <div id="footer">
                <img src="logo.png" height="70px" width="143">
                <p>We're dedicated to simplifying the rental <br>
                    process,connecting you with the perfect <br>
                    property or roommate.Find your ideal <br>
                    living situation effortlessly with us.
                </p>
            </div> 
            <div id="footer">
                <h5>
                    Contact Us:
                </h5>
                <div class="example-2">
                    <div class="icon-content">
                      <a
                        href="https://www.instagram.com/"
                        aria-label="Instagram"
                        data-social="instagram"
                      >
                        <div class="filled"></div>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="16"
                          height="16"
                          fill="currentColor"
                          class="bi bi-instagram"
                          viewBox="0 0 16 16"
                          xml:space="preserve"
                        >
                          <path
                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"
                            fill="currentColor"
                          ></path>
                        </svg>
                      </a>
                      <div class="tooltip">Choufli_Dar</div>
                    </div>
                    <div class="icon-content">
                        <a href="mailto:youremail@example.com" aria-label="Email" data-social="email">
                            <div class="filled"></div>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                fill="currentColor"
                                class="bi bi-envelope"
                                viewBox="0 0 16 16"
                                xml:space="preserve"
                            >
                                <!-- Replace the content of the <path> tag with the SVG code for the email icon -->
                                    <path fill-rule="evenodd" d="M.143 3.138c-.126.061-.14.133-.14.318v8.108c0 .185.014.257.14.318.125.061.25.081.453.081h14.008c.203 0 .328-.02.453-.081.126-.061.141-.133.141-.318V3.456c0-.185-.015-.257-.141-.318-.125-.061-.25-.08-.453-.08H.596c-.203 0-.328.019-.453.08zM0 3.456l7.426 4.763a.998.998 0 0 0 1.148 0L16 3.456v8.107l-1.78-1.137a1.504 1.504 0 0 0-1.739 0L8 11.014l-4.481-2.877a1.504 1.504 0 0 0-1.738 0L0 11.563V3.456z"/>

                            </svg>
                        </a>
                        <div class="tooltip">chouflidar@gmail.com</div>
                    </div>
                    <div class="icon-content">
                        <a href="https://www.facebook.com/" aria-label="Facebook" data-social="facebook">
                            <div class="filled"></div>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                fill="currentColor"
                                class="bi bi-facebook"
                                viewBox="0 0 16 16"
                                xml:space="preserve"
                            >
                                <path
                                    d="M1 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h7.619V9.804H6.405V7.294h2.214V5.529c0-2.192 1.336-3.384 3.285-3.384.937 0 1.742.07 1.977.101v2.29h-1.355c-1.064 0-1.271.507-1.271 1.25v1.637h2.547l-.33 2.51H10.09V16H15a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1z"
                                ></path>
                            </svg>
                        </a>
                        <div class="tooltip">ChoufliDar</div>
                    </div>
                    <div class="icon-content">
                        <a href="https://wa.me/yourphonenumber" aria-label="WhatsApp" data-social="whatsapp">
                            <div class="filled"></div>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                fill="currentColor"
                                class="bi bi-whatsapp"
                                viewBox="0 0 16 16"
                                xml:space="preserve"
                            >
                                <path
                                    d="M10.825 8.032l-.678-.339c-.129-.064-.248-.157-.347-.265-.135-.133-.224-.311-.245-.501-.02-.189.036-.375.147-.524.08-.112.174-.245.2-.384.027-.138.015-.303-.017-.45-.045-.23-.135-.43-.253-.614-.117-.184-.271-.347-.458-.513-.186-.166-.402-.291-.647-.392-.238-.097-.505-.158-.774-.158-.496 0-.975.139-1.378.4-.25.16-.479.371-.678.618-.204.255-.384.565-.523.898-.144.336-.236.675-.282 1.018-.057.417-.025.84.11 1.254.134.417.336.81.603 1.166.282.372.612.689.985.965.374.277.775.504 1.191.693.43.194.882.296 1.349.296.22 0 .433-.019.645-.056.213-.037.417-.092.614-.161.188-.076.367-.175.526-.299.159-.125.304-.282.43-.465.13-.189.23-.401.299-.63.068-.229.102-.466.102-.712 0-.256-.056-.51-.17-.755-.113-.244-.276-.471-.49-.676z"
                                    fill="currentColor"
                                ></path>
                            </svg>
                        </a>
                        <div class="tooltip">+21622334499</div>
                    </div>
                    
                    
                </div>
            </div>
            <div id="footer">
                <h5>links:</h5>
                <ul>
                    <li class="links">Rent</li>
                    <li class="links">Homesteads</li>
                    <li class="links">Binome</li>
                    <li class="links">Help</li>
                </ul>
            </div>

        </footer>
        </div>  
</body>
</html>
</body>