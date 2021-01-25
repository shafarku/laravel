<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hallo Sayang</title>
    <style type="text/css">
    body {
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background: #000;
    }

    h1 {
        margin: 0;
        padding: 0;
        color: #111;
        font-size: 16em;
    }

    h1 span {
        display: table-cell;
        margin: 0;
        padding: ;
        animation: animate 2s linear infinite;
    }

    h1 span:nth-child(1) {
        animation-delay: 0s;
    }

    h1 span:nth-child(2) {
        animation-delay: 0.25s;
    }

    h1 span:nth-child(3) {
        animation-delay: 0.5s;
    }

    h1 span:nth-child(4) {
        animation-delay: 0.75s;
    }

    h1 span:nth-child(5) {
        animation-delay: 1s;
    }

    h1 span:nth-child(6) {
        animation-delay: 1.25s;
    }

    h1 span:nth-child(7) {
        animation-delay: 1.5s;
    }

    h1 span:nth-child(8) {
        animation-delay: 1.75s;
    }

    @keyframes animate {

        0%,
        100% {
            color: #fff;
            filter: blur(2px);
            text-shadow:
                0 0 10px #00b3ff,
                0 0 20px #00b3ff,
                0 0 40px #00b3ff,
                0 0 80px #00b3ff,
                0 0 120px #00b3ff,
                0 0 200px #00b3ff,
                0 0 300px #00b3ff,
                0 0 400px #00b3ff;
        }

        10%,
        90% {
            color: #111;
            filter: blur(0px);
            text-shadow: none;
        }

    }
    </style>

</head>

<body>
    <h1>
        <span>I</span>
        <span>L</span>
        <span>O</span>
        <span>V</span>
        <span>E</span>
        <span>Y</span>
        <span>O</span>
        <span>U</span>
    </h1>

</body>

</html>