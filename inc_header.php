<!DOCTYPE html>
<html lang="ko">
<!-- Youtube 왕초보 홈페이지만들기 < PHP회원사이트만들기 > 따라하기
https://www.youtube.com/watch?v=4CMzglPevp4&list=PLTb3qGCzYjS1sqYn00_g6t5W1Ikhn_dC4&index=2 -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
    crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" 
    crossorigin="anonymous"></script>
    <script src="js/member.js"></script>
</head>
<body>

<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <!-- <a href="/" class="d-flex align-items-center mt-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <img src="images/cat.png" alt="CAT LOGO" class="me-2" style="width:3rem" >
            <span class="fs-4">
                HELLO
            </span>
        </a>         -->
        <a href="/" class="d-flex align-items-center mt-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <img src="images/coffee.svg" alt="CAT LOGO" class="me-2" style="width:3rem" >
            <span class="fs-4">
                DAVID Coffee
            </span>
        </a>
    </header>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">    
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Features</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
                <li class="nav-item"><a class="nav-link disabled" aria-disabled="true">Disabled</a></li>
            </ul>
        </div>
    </nav>

</div>