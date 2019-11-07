<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Manel Gavaldà</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            padding: 0 25px;
            text-decoration: none;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        /* Social Icons */

        .social-icons {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .social-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            width: 80px;
            height: 80px;
            margin: 0 0.5rem;
            border-radius: 50%;
            cursor: pointer;
            font-family: "Helvetica Neue", "Helvetica", "Arial", sans-serif;
            font-size: 2.5rem;
            text-decoration: none;
            transition: all 0.15s ease;
        }
        .social-icon:hover {
            color: #fff;
        }
        .social-icon:hover .tooltip {
            visibility: visible;
            opacity: 1;
            -webkit-transform: translate(-50%, -150%);
                  transform: translate(-50%, -150%);
        }
        .social-icon:active {
            box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.5) inset;
        }
        .social-icon--linkedin {
            background: #006599;
            color: #fff;
        }
        .social-icon--linkedin .tooltip {
            background: #006599;
            color: currentColor;
        }
        .social-icon--linkedin .tooltip:after {
            border-top-color: #006599;
        }
        .social-icon--github {
            background: #4284c0;
            color: #fff;
        }
        .social-icon--github .tooltip {
            background: #4284c0;
            color: currentColor;
        }
        .social-icon--github .tooltip:after {
            border-top-color: #4284c0;
        }
        .social-icon i {
            position: relative;
            top: 1px;
        }

        /* Tooltips */
        .tooltip {
            display: block;
            position: absolute;
            top: 0;
            left: 50%;
            padding: 0.8rem 1rem;
            border-radius: 40px;
            font-size: 0.8rem;
            font-weight: bold;
            opacity: 0;
            pointer-events: none;
            text-transform: uppercase;
            -webkit-transform: translate(-50%, -100%);
                  transform: translate(-50%, -100%);
            transition: all 0.3s ease;
            z-index: 1;
        }
        .tooltip:after {
            display: block;
            position: absolute;
            bottom: 1px;
            left: 50%;
            width: 0;
            height: 0;
            content: "";
            border: solid;
            border-width: 10px 10px 0 10px;
            border-color: transparent;
            -webkit-transform: translate(-50%, 100%);
                  transform: translate(-50%, 100%);
        }

    </style>
</head>
<body>
<div class="flex-center full-height">
    <div class="content">
        <div class="title">
            Manel Gavaldà
        </div>

        <h2 class="m-b-md">Laravel Developer</h2>

        <div class="social-icons">
            <a href="https://www.github.com/manelgavalda" class="social-icon social-icon--github" target="_blank">
                <i class="fab fa-github"></i>
                <div class="tooltip">Github</div>
            </a>
            <a href="https://linkedin.com/in/manel-gavald%C3%A0-andreu-410b72117" class="social-icon social-icon--linkedin" target="_blank">
                <i class="fab fa-linkedin-in"></i>
                <div class="tooltip">LinkedIn</div>
            </a>
        </div>
    </div>
</div>
</body>
</html>
