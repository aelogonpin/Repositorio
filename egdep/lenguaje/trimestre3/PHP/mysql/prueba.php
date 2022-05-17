<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Alumnos</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<!-- <div class="container-fluid">
    <div class="row">
        <div class="col-sm-auto bg-light sticky-top">
            <div class="d-flex flex-sm-column flex-row flex-nowrap bg-light align-items-center sticky-top">
                <a href="https://dev.to/" class="d-block p-3 link-dark text-decoration-none" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="100" height="100"
viewBox="0 0 100 100"
style=" fill:#000000;"><path d="M19.5,95c-3.584,0-6.5-2.916-6.5-6.5V50.822C12.507,50.939,11.503,47,11,47c-1.209,0-1.973,0.635-3,0 c-1.929-1.192-3-0.231-3-2.5v-8c0-2.332,1.259-4.497,3.287-5.65l40.5-23.038c0.978-0.556,2.089-0.85,3.214-0.85 s2.236,0.294,3.214,0.851l40.5,23.038C97.741,32.003,99,34.168,99,36.5v8c0,2.269-1.152,4.336-3.083,5.529 C94.891,50.664,93.709,51,92.501,51c-0.504,0-1.009-0.06-1.501-0.177V88.5c0,3.584-2.916,6.5-6.5,6.5H19.5z" opacity=".35"></path><path fill="#f2f2f2" d="M17.5,93c-3.584,0-6.5-2.916-6.5-6.5V48.822C10.507,48.939,10.003,49,9.5,49 c-1.209,0-2.391-0.336-3.418-0.971C4.152,46.836,3,44.769,3,42.5v-8c0-2.332,1.259-4.497,3.287-5.65l40.5-23.038 c0.978-0.556,2.089-0.85,3.214-0.85s2.236,0.294,3.214,0.851l40.5,23.038C95.741,30.003,97,32.168,97,34.5v8 c0,2.269-1.152,4.336-3.083,5.529C92.891,48.664,91.709,49,90.501,49c-0.504,0-1.009-0.06-1.501-0.177V86.5 c0,3.584-2.916,6.5-6.5,6.5H17.5z"></path><polygon fill="#d9eeff" points="90.5,34.5 50,11.462 9.5,34.5 9.5,42.5 17.5,38.5 17.5,86.5 82.5,86.5 82.5,38.5 90.5,42.5"></polygon><polygon fill="#ff7575" points="9.5,34.5 10,40.981 17.006,37.087 50,18.981 82.985,37.078 90,40.981 90.5,34.5 50,11.462"></polygon><polygon fill="none" stroke="#40396e" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3" points="90.5,34.5 50,11.462 9.5,34.5 9.5,42.5 17.5,38.5 17.5,86.5 82.5,86.5 82.5,38.5 90.5,42.5"></polygon><polygon fill="#40396e" points="16,41 17.044,37.069 50,19 82.985,37.078 84,41 50,22.506" opacity=".35"></polygon><rect width="62" height="10" x="19" y="75" fill="#70bfff" opacity=".35"></rect><rect width="26" height="35" x="37" y="50" fill="#ff7575"></rect><circle cx="56.5" cy="68.5" r="2.5" fill="#40396e"></circle></svg>
                <i class="bi-bootstrap fs-1"></i>
                </a>
                <ul class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center align-items-center">
                    <li class="nav-item">
                        <a href="" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="100" height="100"
viewBox="0 0 100 100"
style=" fill:#000000;"><path d="M82.047,94.126c-3.179-0.073-6.167-1.436-8.351-3.834L56.753,71.684 c-4.408,2.152-9.269,3.275-14.272,3.275c-8.755,0-16.949-3.373-23.073-9.498c-6.15-6.149-9.538-14.327-9.538-23.026 s3.388-16.877,9.539-23.027c6.149-6.15,14.327-9.538,23.026-9.538s16.877,3.388,23.027,9.539 c9.916,9.915,12.252,25.023,6.223,37.346l18.607,16.941c2.398,2.185,3.761,5.173,3.836,8.415c0.076,3.24-1.146,6.288-3.439,8.581 c-2.216,2.217-5.164,3.439-8.3,3.439C82.274,94.131,82.161,94.13,82.047,94.126z" opacity=".35"></path><path fill="#f2f2f2" d="M80.047,92.126c-3.179-0.073-6.167-1.436-8.351-3.834L54.753,69.684 c-4.408,2.152-9.269,3.275-14.272,3.275c-8.755,0-16.949-3.373-23.073-9.498c-6.15-6.149-9.538-14.327-9.538-23.026 s3.388-16.877,9.539-23.027c6.149-6.15,14.327-9.538,23.026-9.538s16.877,3.388,23.027,9.539 c9.916,9.915,12.252,25.023,6.223,37.346l18.607,16.941c2.398,2.185,3.761,5.173,3.836,8.415c0.076,3.24-1.146,6.288-3.439,8.581 c-2.216,2.217-5.164,3.439-8.3,3.439C80.274,92.131,80.161,92.13,80.047,92.126z"></path><path fill="#707cc0" d="M84.094,84.094L84.094,84.094c-2.118,2.118-5.576,2.037-7.592-0.178L47.855,52.451l4.596-4.596 l31.465,28.647C86.131,78.518,86.212,81.976,84.094,84.094z"></path><circle cx="39.839" cy="39.839" r="25.47" fill="#70bfff"></circle><path fill="#40396e" d="M80.388,87.131c-0.054,0-0.108,0-0.163-0.002c-1.862-0.043-3.578-0.825-4.833-2.203l-19.64-21.572 c-10.798,7.225-25.532,5.852-34.81-3.428c-5.207-5.206-8.074-12.128-8.074-19.491s2.867-14.285,8.074-19.491 c5.206-5.207,12.128-8.074,19.492-8.074s14.286,2.867,19.492,8.074c9.278,9.277,10.651,24.011,3.427,34.809l21.572,19.641l0,0 c1.377,1.255,2.16,2.971,2.204,4.833s-0.658,3.612-1.975,4.929C83.876,86.433,82.189,87.131,80.388,87.131z M55.97,59.864 c0.409,0,0.815,0.167,1.11,0.49l20.532,22.552c0.696,0.765,1.65,1.2,2.684,1.224c1.054,0.042,2.006-0.365,2.738-1.097 s1.121-1.703,1.097-2.737s-0.459-1.988-1.224-2.685L60.354,57.079c-0.57-0.52-0.654-1.386-0.194-2.005 c7.213-9.693,6.201-23.454-2.355-32.01c-4.64-4.64-10.809-7.195-17.371-7.195s-12.73,2.556-17.371,7.195 c-4.64,4.64-7.195,10.809-7.195,17.37s2.555,12.73,7.195,17.37c8.556,8.555,22.318,9.568,32.011,2.356 C55.343,59.962,55.657,59.864,55.97,59.864z"></path><path fill="#d9eeff" d="M20.369,41.935c-0.829,0-1.5-0.672-1.5-1.5c0-5.761,2.244-11.177,6.317-15.249 c1.485-1.485,3.163-2.739,4.987-3.729c0.729-0.395,1.639-0.124,2.033,0.604c0.395,0.728,0.125,1.639-0.604,2.033 c-1.569,0.852-3.015,1.933-4.295,3.213c-3.507,3.507-5.438,8.169-5.438,13.128C21.869,41.263,21.198,41.935,20.369,41.935z"></path></svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://dev.to/codeply/#" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="100" height="100"
viewBox="0 0 100 100"
style=" fill:#000000;"><path d="M23.5,93C14.248,93,7,83.556,7,71.5c0-3.584,2.916-6.5,6.5-6.5H19V28c0-9.374,6.729-17,15-17h45.5	C88.481,11,95,20.042,95,32.5c0,3.584-2.916,6.5-6.5,6.5h-8.56l-0.001,37c0.001,4.367-1.452,8.517-4.091,11.683	C73.033,91.062,69.057,93,64.94,93H23.5z" opacity=".35"></path><path fill="#f2f2f2" d="M21.5,91C12.248,91,5,81.556,5,69.5c0-3.584,2.916-6.5,6.5-6.5H17V26c0-9.374,6.729-17,15-17h45.5	C86.481,9,93,18.042,93,30.5c0,3.584-2.916,6.5-6.5,6.5h-8.56l-0.001,37c0.001,4.367-1.452,8.517-4.091,11.683	C71.033,89.062,67.057,91,62.94,91H21.5z"></path><path fill="#d9eeff" d="M77.44,15.5H32c-4.694,0-8.5,4.701-8.5,10.5v11.5V43v26.5h-13c0,8.008,4.5,15,10,15h41.44	c4.694,0,8.5-4.701,8.5-10.5v-9v-5.5V41v-4.5v-6H85.5C85.5,22.492,82.94,15.5,77.44,15.5z"></path><path fill="#40396e" d="M85,30.5H69.94c0-7.207,2.865-13.5,7.56-13.5	S85,23.293,85,30.5z" opacity=".35"></path><path fill="#40396e" d="M65.94,81c-4.585,0-8.312-6.005-8.484-13H23v3h31.5	c0.483,6.558,4.075,12,8.44,12c1.715,0,3.306-0.849,4.641-2.266C67.05,80.905,66.502,81,65.94,81z" opacity=".35"></path><path fill="#40396e" d="M77.5,14H32c-5.514,0-10,5.383-10,12v42H11.5c-0.829,0-1.5,0.672-1.5,1.5	C10,78.598,15.159,86,21.5,86h41.44c5.514,0,10-5.383,9.999-12l0.001-42H86.5c0.828,0,1.5-0.671,1.5-1.5	C88,20.939,83.584,14,77.5,14z M71.44,29c-0.828,0-1.5,0.671-1.5,1.5V74c0,4.963-3.141,9-7,9H21.5c-4.21,0-7.939-5.453-8.442-12	H23.5c0.829,0,1.5-0.672,1.5-1.5V26c0-4.962,3.14-9,7-9h45.5c3.993,0,7.069,5.062,7.458,12H71.44z"></path><path fill="#70bfff" d="M59,32H35c-0.828,0-1.5-0.672-1.5-1.5S34.172,29,35,29h24c0.828,0,1.5,0.672,1.5,1.5S59.828,32,59,32	z"></path><path fill="#70bfff" d="M57.5,41H35c-0.828,0-1.5-0.672-1.5-1.5S34.172,38,35,38h22.5c0.828,0,1.5,0.672,1.5,1.5	S58.328,41,57.5,41z"></path><path fill="#70bfff" d="M57.5,59H35c-0.828,0-1.5-0.672-1.5-1.5S34.172,56,35,56h22.5c0.828,0,1.5,0.672,1.5,1.5	S58.328,59,57.5,59z"></path><path fill="#70bfff" d="M61,50H35c-0.828,0-1.5-0.672-1.5-1.5S34.172,47,35,47h26c0.828,0,1.5,0.672,1.5,1.5S61.828,50,61,50	z"></path></svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://dev.to/codeply/#" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Orders"></a>
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="100" height="100"
viewBox="0 0 100 100"
style=" fill:#000000;"><circle cx="52" cy="52" r="44" opacity=".35"></circle><circle cx="50" cy="50" r="44" fill="#f2f2f2"></circle><path fill="#f2f2f2" d="M50,91C27.393,91,9,72.607,9,50S27.393,9,50,9s41,18.393,41,41S72.607,91,50,91z"></path><circle cx="50.026" cy="50.026" r="38.026" fill="#96c362"></circle><circle cx="50" cy="50" r="37.5" fill="none" stroke="#40396e" stroke-miterlimit="10" stroke-width="3"></circle><line x1="30" x2="70" y1="50" y2="50" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="6"></line><line x1="50" x2="50" y1="30" y2="70" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="6"></line></svg>
                    </li>


                    </a>
                    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
                        <li><a class="dropdown-item" href="../proyecto-final/main.html">Inicio</a></li>
                        <li><a class="dropdown-item" href="https://dev.to/codeply/#">Settings</a></li>
                        <li><a class="dropdown-item" href="https://dev.to/codeply/#">Profile</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm p-3 min-vh-100"> -->
            <!-- content -->
         <!--</div>
    </div>
</div> -->

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-auto bg-light sticky-top">
            <div class="d-flex flex-sm-column flex-row flex-nowrap bg-light align-items-center sticky-top">
                <a href="../proyecto-final/main.html" class="d-block p-3 link-dark text-decoration-none" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="100" height="100"
viewBox="0 0 100 100"
style=" fill:#000000;"><path d="M19.5,95c-3.584,0-6.5-2.916-6.5-6.5V50.822C12.507,50.939,11.503,47,11,47c-1.209,0-1.973,0.635-3,0 c-1.929-1.192-3-0.231-3-2.5v-8c0-2.332,1.259-4.497,3.287-5.65l40.5-23.038c0.978-0.556,2.089-0.85,3.214-0.85 s2.236,0.294,3.214,0.851l40.5,23.038C97.741,32.003,99,34.168,99,36.5v8c0,2.269-1.152,4.336-3.083,5.529 C94.891,50.664,93.709,51,92.501,51c-0.504,0-1.009-0.06-1.501-0.177V88.5c0,3.584-2.916,6.5-6.5,6.5H19.5z" opacity=".35"></path><path fill="#f2f2f2" d="M17.5,93c-3.584,0-6.5-2.916-6.5-6.5V48.822C10.507,48.939,10.003,49,9.5,49 c-1.209,0-2.391-0.336-3.418-0.971C4.152,46.836,3,44.769,3,42.5v-8c0-2.332,1.259-4.497,3.287-5.65l40.5-23.038 c0.978-0.556,2.089-0.85,3.214-0.85s2.236,0.294,3.214,0.851l40.5,23.038C95.741,30.003,97,32.168,97,34.5v8 c0,2.269-1.152,4.336-3.083,5.529C92.891,48.664,91.709,49,90.501,49c-0.504,0-1.009-0.06-1.501-0.177V86.5 c0,3.584-2.916,6.5-6.5,6.5H17.5z"></path><polygon fill="#d9eeff" points="90.5,34.5 50,11.462 9.5,34.5 9.5,42.5 17.5,38.5 17.5,86.5 82.5,86.5 82.5,38.5 90.5,42.5"></polygon><polygon fill="#ff7575" points="9.5,34.5 10,40.981 17.006,37.087 50,18.981 82.985,37.078 90,40.981 90.5,34.5 50,11.462"></polygon><polygon fill="none" stroke="#40396e" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3" points="90.5,34.5 50,11.462 9.5,34.5 9.5,42.5 17.5,38.5 17.5,86.5 82.5,86.5 82.5,38.5 90.5,42.5"></polygon><polygon fill="#40396e" points="16,41 17.044,37.069 50,19 82.985,37.078 84,41 50,22.506" opacity=".35"></polygon><rect width="62" height="10" x="19" y="75" fill="#70bfff" opacity=".35"></rect><rect width="26" height="35" x="37" y="50" fill="#ff7575"></rect><circle cx="56.5" cy="68.5" r="2.5" fill="#40396e"></circle></svg>
                </a>

                <ul class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center align-items-center">
                    <li class="nav-item">
                        <a href="../proyecto-final/insertar.php" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="100" height="100"
viewBox="0 0 100 100"
style=" fill:#000000;"><circle cx="52" cy="52" r="44" opacity=".35"></circle><circle cx="50" cy="50" r="44" fill="#f2f2f2"></circle><path fill="#f2f2f2" d="M50,91C27.393,91,9,72.607,9,50S27.393,9,50,9s41,18.393,41,41S72.607,91,50,91z"></path><circle cx="50.026" cy="50.026" r="38.026" fill="#96c362"></circle><circle cx="50" cy="50" r="37.5" fill="none" stroke="#40396e" stroke-miterlimit="10" stroke-width="3"></circle><line x1="30" x2="70" y1="50" y2="50" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="6"></line><line x1="50" x2="50" y1="30" y2="70" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="6"></line></svg>
                        </a>
                    </li>
                    <li>
                        <a href="http://localhost/PHP/mysql/prueba.php" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="100" height="100"
viewBox="0 0 100 100"
style=" fill:#000000;"><path d="M82.047,94.126c-3.179-0.073-6.167-1.436-8.351-3.834L56.753,71.684 c-4.408,2.152-9.269,3.275-14.272,3.275c-8.755,0-16.949-3.373-23.073-9.498c-6.15-6.149-9.538-14.327-9.538-23.026 s3.388-16.877,9.539-23.027c6.149-6.15,14.327-9.538,23.026-9.538s16.877,3.388,23.027,9.539 c9.916,9.915,12.252,25.023,6.223,37.346l18.607,16.941c2.398,2.185,3.761,5.173,3.836,8.415c0.076,3.24-1.146,6.288-3.439,8.581 c-2.216,2.217-5.164,3.439-8.3,3.439C82.274,94.131,82.161,94.13,82.047,94.126z" opacity=".35"></path><path fill="#f2f2f2" d="M80.047,92.126c-3.179-0.073-6.167-1.436-8.351-3.834L54.753,69.684 c-4.408,2.152-9.269,3.275-14.272,3.275c-8.755,0-16.949-3.373-23.073-9.498c-6.15-6.149-9.538-14.327-9.538-23.026 s3.388-16.877,9.539-23.027c6.149-6.15,14.327-9.538,23.026-9.538s16.877,3.388,23.027,9.539 c9.916,9.915,12.252,25.023,6.223,37.346l18.607,16.941c2.398,2.185,3.761,5.173,3.836,8.415c0.076,3.24-1.146,6.288-3.439,8.581 c-2.216,2.217-5.164,3.439-8.3,3.439C80.274,92.131,80.161,92.13,80.047,92.126z"></path><path fill="#707cc0" d="M84.094,84.094L84.094,84.094c-2.118,2.118-5.576,2.037-7.592-0.178L47.855,52.451l4.596-4.596 l31.465,28.647C86.131,78.518,86.212,81.976,84.094,84.094z"></path><circle cx="39.839" cy="39.839" r="25.47" fill="#70bfff"></circle><path fill="#40396e" d="M80.388,87.131c-0.054,0-0.108,0-0.163-0.002c-1.862-0.043-3.578-0.825-4.833-2.203l-19.64-21.572 c-10.798,7.225-25.532,5.852-34.81-3.428c-5.207-5.206-8.074-12.128-8.074-19.491s2.867-14.285,8.074-19.491 c5.206-5.207,12.128-8.074,19.492-8.074s14.286,2.867,19.492,8.074c9.278,9.277,10.651,24.011,3.427,34.809l21.572,19.641l0,0 c1.377,1.255,2.16,2.971,2.204,4.833s-0.658,3.612-1.975,4.929C83.876,86.433,82.189,87.131,80.388,87.131z M55.97,59.864 c0.409,0,0.815,0.167,1.11,0.49l20.532,22.552c0.696,0.765,1.65,1.2,2.684,1.224c1.054,0.042,2.006-0.365,2.738-1.097 s1.121-1.703,1.097-2.737s-0.459-1.988-1.224-2.685L60.354,57.079c-0.57-0.52-0.654-1.386-0.194-2.005 c7.213-9.693,6.201-23.454-2.355-32.01c-4.64-4.64-10.809-7.195-17.371-7.195s-12.73,2.556-17.371,7.195 c-4.64,4.64-7.195,10.809-7.195,17.37s2.555,12.73,7.195,17.37c8.556,8.555,22.318,9.568,32.011,2.356 C55.343,59.962,55.657,59.864,55.97,59.864z"></path><path fill="#d9eeff" d="M20.369,41.935c-0.829,0-1.5-0.672-1.5-1.5c0-5.761,2.244-11.177,6.317-15.249 c1.485-1.485,3.163-2.739,4.987-3.729c0.729-0.395,1.639-0.124,2.033,0.604c0.395,0.728,0.125,1.639-0.604,2.033 c-1.569,0.852-3.015,1.933-4.295,3.213c-3.507,3.507-5.438,8.169-5.438,13.128C21.869,41.263,21.198,41.935,20.369,41.935z"></path></svg>
                        </a>
                    </li>
                    <li>
                        <a href="join.php" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Orders">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="100" height="100"
viewBox="0 0 100 100"
style=" fill:#000000;"><path d="M23.5,93C14.248,93,7,83.556,7,71.5c0-3.584,2.916-6.5,6.5-6.5H19V28c0-9.374,6.729-17,15-17h45.5	C88.481,11,95,20.042,95,32.5c0,3.584-2.916,6.5-6.5,6.5h-8.56l-0.001,37c0.001,4.367-1.452,8.517-4.091,11.683	C73.033,91.062,69.057,93,64.94,93H23.5z" opacity=".35"></path><path fill="#f2f2f2" d="M21.5,91C12.248,91,5,81.556,5,69.5c0-3.584,2.916-6.5,6.5-6.5H17V26c0-9.374,6.729-17,15-17h45.5	C86.481,9,93,18.042,93,30.5c0,3.584-2.916,6.5-6.5,6.5h-8.56l-0.001,37c0.001,4.367-1.452,8.517-4.091,11.683	C71.033,89.062,67.057,91,62.94,91H21.5z"></path><path fill="#d9eeff" d="M77.44,15.5H32c-4.694,0-8.5,4.701-8.5,10.5v11.5V43v26.5h-13c0,8.008,4.5,15,10,15h41.44	c4.694,0,8.5-4.701,8.5-10.5v-9v-5.5V41v-4.5v-6H85.5C85.5,22.492,82.94,15.5,77.44,15.5z"></path><path fill="#40396e" d="M85,30.5H69.94c0-7.207,2.865-13.5,7.56-13.5	S85,23.293,85,30.5z" opacity=".35"></path><path fill="#40396e" d="M65.94,81c-4.585,0-8.312-6.005-8.484-13H23v3h31.5	c0.483,6.558,4.075,12,8.44,12c1.715,0,3.306-0.849,4.641-2.266C67.05,80.905,66.502,81,65.94,81z" opacity=".35"></path><path fill="#40396e" d="M77.5,14H32c-5.514,0-10,5.383-10,12v42H11.5c-0.829,0-1.5,0.672-1.5,1.5	C10,78.598,15.159,86,21.5,86h41.44c5.514,0,10-5.383,9.999-12l0.001-42H86.5c0.828,0,1.5-0.671,1.5-1.5	C88,20.939,83.584,14,77.5,14z M71.44,29c-0.828,0-1.5,0.671-1.5,1.5V74c0,4.963-3.141,9-7,9H21.5c-4.21,0-7.939-5.453-8.442-12	H23.5c0.829,0,1.5-0.672,1.5-1.5V26c0-4.962,3.14-9,7-9h45.5c3.993,0,7.069,5.062,7.458,12H71.44z"></path><path fill="#70bfff" d="M59,32H35c-0.828,0-1.5-0.672-1.5-1.5S34.172,29,35,29h24c0.828,0,1.5,0.672,1.5,1.5S59.828,32,59,32	z"></path><path fill="#70bfff" d="M57.5,41H35c-0.828,0-1.5-0.672-1.5-1.5S34.172,38,35,38h22.5c0.828,0,1.5,0.672,1.5,1.5	S58.328,41,57.5,41z"></path><path fill="#70bfff" d="M57.5,59H35c-0.828,0-1.5-0.672-1.5-1.5S34.172,56,35,56h22.5c0.828,0,1.5,0.672,1.5,1.5	S58.328,59,57.5,59z"></path><path fill="#70bfff" d="M61,50H35c-0.828,0-1.5-0.672-1.5-1.5S34.172,47,35,47h26c0.828,0,1.5,0.672,1.5,1.5S61.828,50,61,50	z"></path></svg>
                        </a>
                    </li>
                    <br><br><br>
                </ul>
                <div class="dropdown">
                    <a href="https://dev.to/codeply/#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="100" height="100"
viewBox="0 0 100 100"
style=" fill:#000000;"><path d="M47.5,100c-3.245,0-6.015-2.426-6.443-5.643l-0.684-5.129c-2.237-0.696-4.401-1.592-6.476-2.683 l-4.112,3.145c-1.12,0.86-2.525,1.337-3.946,1.337c-1.736,0-3.368-0.675-4.596-1.903l-6.366-6.365 c-2.295-2.293-2.539-5.968-0.566-8.546l3.143-4.111c-1.091-2.075-1.987-4.238-2.683-6.476l-5.131-0.684 C6.426,62.515,4,59.745,4,56.5v-9c0-3.245,2.426-6.015,5.643-6.443l5.129-0.684c0.696-2.237,1.592-4.401,2.683-6.476l-3.145-4.112 c-1.972-2.577-1.728-6.251,0.569-8.546l6.362-6.362c1.226-1.227,2.859-1.904,4.596-1.904c1.419,0,2.821,0.475,3.948,1.336 l4.113,3.145c2.075-1.09,4.239-1.987,6.476-2.683l0.684-5.131C41.485,6.426,44.255,4,47.5,4h9c3.245,0,6.015,2.426,6.443,5.643 l0.684,5.129c2.237,0.696,4.401,1.592,6.476,2.683l4.112-3.145c1.13-0.863,2.531-1.336,3.948-1.336 c1.737,0,3.37,0.677,4.598,1.906l6.362,6.362c2.295,2.293,2.539,5.968,0.566,8.546l-3.143,4.111 c1.09,2.075,1.987,4.239,2.683,6.476l5.131,0.684C97.574,41.485,100,44.255,100,47.5v9c0,3.245-2.426,6.015-5.643,6.443 l-5.129,0.684c-0.696,2.237-1.592,4.4-2.683,6.476l3.145,4.112c1.972,2.577,1.728,6.251-0.569,8.546l-6.362,6.362 c-1.223,1.227-2.857,1.904-4.597,1.904c-1.42,0-2.824-0.476-3.953-1.341l-4.107-3.141c-2.075,1.09-4.239,1.987-6.476,2.683 l-0.684,5.131C62.515,97.574,59.745,100,56.5,100H47.5z" opacity=".35"></path><path fill="#f2f2f2" d="M45.5,98c-3.245,0-6.015-2.426-6.443-5.643l-0.684-5.129c-2.237-0.696-4.401-1.592-6.476-2.683 l-4.112,3.145c-1.12,0.86-2.525,1.337-3.946,1.337c-1.736,0-3.368-0.675-4.596-1.903l-6.366-6.365 c-2.295-2.293-2.539-5.968-0.566-8.546l3.143-4.111c-1.091-2.075-1.987-4.238-2.683-6.476l-5.131-0.684 C4.426,60.515,2,57.745,2,54.5v-9c0-3.245,2.426-6.015,5.643-6.443l5.129-0.684c0.696-2.237,1.592-4.401,2.683-6.476l-3.145-4.112 c-1.972-2.577-1.728-6.251,0.569-8.546l6.362-6.362c1.226-1.227,2.859-1.904,4.596-1.904c1.419,0,2.821,0.475,3.948,1.336 l4.113,3.145c2.075-1.09,4.239-1.987,6.476-2.683l0.684-5.131C39.485,4.426,42.255,2,45.5,2h9c3.245,0,6.015,2.426,6.443,5.643 l0.684,5.129c2.237,0.696,4.401,1.592,6.476,2.683l4.112-3.145c1.13-0.863,2.531-1.336,3.948-1.336 c1.737,0,3.37,0.677,4.598,1.906l6.362,6.362c2.295,2.293,2.539,5.968,0.566,8.546l-3.143,4.111 c1.09,2.075,1.987,4.239,2.683,6.476l5.131,0.684C95.574,39.485,98,42.255,98,45.5v9c0,3.245-2.426,6.015-5.643,6.443 l-5.129,0.684c-0.696,2.237-1.592,4.4-2.683,6.476l3.145,4.112c1.972,2.577,1.728,6.251-0.569,8.546l-6.362,6.362 c-1.223,1.227-2.857,1.904-4.597,1.904c-1.42,0-2.824-0.476-3.953-1.341l-4.107-3.141c-2.075,1.09-4.239,1.987-6.476,2.683 l-0.684,5.131C60.515,95.574,57.745,98,54.5,98H45.5z"></path><path fill="#9aa2e6" d="M81.979,55.769c-0.839,4.679-2.675,9.009-5.287,12.763l5.835,7.63l-6.364,6.364l-7.63-5.835 c-3.754,2.612-8.085,4.448-12.763,5.287L54.5,91.5h-9l-1.269-9.521c-4.679-0.839-9.009-2.675-12.763-5.287l-7.63,5.835 l-6.364-6.364l5.835-7.63c-2.612-3.754-4.448-8.085-5.287-12.763L8.5,54.5v-9l9.521-1.269c0.839-4.679,2.675-9.009,5.287-12.763 l-5.835-7.63l6.364-6.364l7.63,5.835c3.754-2.612,8.085-4.448,12.763-5.287L45.5,8.5h9l1.269,9.521 c4.679,0.839,9.009,2.675,12.763,5.287l7.63-5.835l6.364,6.364l-5.835,7.63c2.612,3.754,4.448,8.085,5.287,12.763L91.5,45.5v9 L81.979,55.769z M50,35.5c-8.008,0-14.5,6.492-14.5,14.5S41.992,64.5,50,64.5S64.5,58.008,64.5,50S58.008,35.5,50,35.5z"></path><path fill="none" stroke="#40396e" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3" d="M81.979,55.769c-0.839,4.679-2.675,9.009-5.287,12.763l5.835,7.63l-6.364,6.364l-7.63-5.835c-3.754,2.612-8.085,4.448-12.763,5.287 L54.5,91.5h-9l-1.269-9.521c-4.679-0.839-9.009-2.675-12.763-5.287l-7.63,5.835l-6.364-6.364l5.835-7.63 c-2.612-3.754-4.448-8.085-5.287-12.763L8.5,54.5v-9l9.521-1.269c0.839-4.679,2.675-9.009,5.287-12.763l-5.835-7.63l6.364-6.364 l7.63,5.835c3.754-2.612,8.085-4.448,12.763-5.287L45.5,8.5h9l1.269,9.521c4.679,0.839,9.009,2.675,12.763,5.287l7.63-5.835 l6.364,6.364l-5.835,7.63c2.612,3.754,4.448,8.085,5.287,12.763L91.5,45.5v9L81.979,55.769z M81.979,55.769 c-0.839,4.679-2.675,9.009-5.287,12.763l5.835,7.63l-6.364,6.364l-7.63-5.835c-3.754,2.612-8.085,4.448-12.763,5.287L54.5,91.5h-9 l-1.269-9.521c-4.679-0.839-9.009-2.675-12.763-5.287l-7.63,5.835l-6.364-6.364l5.835-7.63c-2.612-3.754-4.448-8.085-5.287-12.763 L8.5,54.5v-9l9.521-1.269c0.839-4.679,2.675-9.009,5.287-12.763l-5.835-7.63l6.364-6.364l7.63,5.835 c3.754-2.612,8.085-4.448,12.763-5.287L45.5,8.5h9l1.269,9.521c4.679,0.839,9.009,2.675,12.763,5.287l7.63-5.835l6.364,6.364 l-5.835,7.63c2.612,3.754,4.448,8.085,5.287,12.763L91.5,45.5v9L81.979,55.769z M50,35.5c-8.008,0-14.5,6.492-14.5,14.5 S41.992,64.5,50,64.5S64.5,58.008,64.5,50S58.008,35.5,50,35.5z"></path><path fill="none" stroke="#40396e" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3" d="M50,35.5c-8.008,0-14.5,6.492-14.5,14.5S41.992,64.5,50,64.5S64.5,58.008,64.5,50S58.008,35.5,50,35.5z"></path><path fill="none" stroke="#40396e" stroke-miterlimit="10" d="M50,35.5c-8.008,0-14.5,6.492-14.5,14.5S41.992,64.5,50,64.5 S64.5,58.008,64.5,50S58.008,35.5,50,35.5z"></path></svg>
                    </a>
                    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
                        <li><a class="dropdown-item" href="http://localhost/PHP/mysql/prueba.php">Actualizar</a></li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm p-2 min-vh-100">
            <!-- content -->
            <div class="container">
        <h2>CONSULTA</h2>
        <?php
            $conexion = mysqli_connect("localhost", "root", "Eloyto11", "bd_php") 
                            or die("Problemas de conexión");
            
            $sql = "SELECT  a.nombre, a.dni, a.correo
             FROM usuarios a";

            $registros = mysqli_query($conexion, $sql) 
                            or die("Problema en la consulta: " . mysqli_error($conexion));
            
            echo "<table class='table table-striped'>";
            echo "<thead><th>Nombre</th><th>DNI</th><th>Correo</th></thead>";                        
            while ($reg=mysqli_fetch_array($registros)) {
                echo "<tr>";
                
                echo "<td>" . $reg['nombre'] . "</td>";
                echo "<td>" . $reg['dni'] . "</td>";
                echo "<td>" . $reg['correo'] . "</td>";

                
                echo "</tr>";
            }

            echo "</table>";

            mysqli_close($conexion);
        ?>



<h2>CONSULTA 2</h2>
        <?php
            $conexion = mysqli_connect("localhost", "root", "Eloyto11", "bd_php") 
                            or die("Problemas de conexión");
            
            $sql = "SELECT b.id,b.dni,b.nombrecoche, b.precio
             FROM coche b";

            $registros = mysqli_query($conexion, $sql) 
                            or die("Problema en la consulta: " . mysqli_error($conexion));
            
            echo "<table class='table table-striped'>";
            echo "<thead><th>ID</th><th>DNI</th><th>Modelo</th><th>Precio del vehiculo personal</th></thead>";                        
            while ($reg=mysqli_fetch_array($registros)) {
                echo "<tr>";

                echo "<td>" . $reg['id'] . "</td>";
                echo "<td>" . $reg['dni'] . "</td>";
                echo "<td>" . $reg['nombrecoche'] . "</td>";
                echo "<td>" . $reg['precio'] . "</td>";

                
                echo "</tr>";
            }

            echo "</table>";

            mysqli_close($conexion);
        ?>







    </div>
        </div>
    </div>
</div>







   
    


    </div>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>