<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Résolution suite</title>
</head>

<body class="container-fluid bg-light d-flex justify-content-evenly align-items-center flex-column vh-100">
    <h1 class="d-flex justify-content-center align-items-center border-bottom border-info">Résolution d' une suite récurrente</h1>
    <form action="#" id="form" class="d-flex justify-content-center align-items-center flex-column fs-5">
        <p>Entrez les paramètres necessaires</p>
        <div class="d-flex justify-content-center align-items-center my-5">
            <div class="d-flex align-items-center justify-content-center h-25">$U_{n}$ = </div>
            <div class="d-flex align-items-center justify-content-start h-25 mx-2" style="width: 130px;">
                <!-- <label for=""></label> -->
                <input id="1" class="form-control" value="1" name="a" type="number"><span class="mx-1">*</span> $U_{n-1}$
            </div>
            <div class="d-flex align-items-center justify-content-center h-25">+</div>
            <div class="d-flex align-items-center justify-content-start h-25 mx-2" style="width: 130px;">
                <input id="2" class="form-control" value="1" name="b" type="number"><span class="mx-1">*</span> $U_{n-2}$
            </div>
        </div>
        <div class="d-flex align-items-center justify-content-start h-25 mr-2 my-1">
            $U_{0}$ <span class="mx-1">=</span> <input id="3" class="form-control w-25" value="1" name="u_0" type="number">
        </div>
        <div class="d-flex align-items-center justify-content-start h-25 mr-2 my-1">
            $U_{1}$ <span class="mx-1">=</span> <input id="4" class="form-control w-25" value="1" name="u_1" type="number">
        </div>
        <button type="submit" class="calcul btn btn-info my-3">Résoudre</button>
    </form>
    <div class="container"></div>
    <script>
        MathJax = {
            tex: {
                inlineMath: [
                    ['$', '$'],
                    ['\\(', '\\)']
                ]
            },
            svg: {
                fontCache: 'global'
            }
        };
    </script>
    <script type="text/javascript" id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-svg.js">
    </script>
    <script src="app.js"></script>
</body>

</html>