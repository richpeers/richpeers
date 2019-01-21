<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Artisan Web</title>
    <meta name="Description" content="Web Development with a focus on quality.">

    <style>
        html, body {
            height: 100vh;
            margin: 0;
            overflow: hidden;
        }

        @font-face {
            font-family: 'Jura';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: local('Jura Light'), local('Jura-Light'), url(https://fonts.gstatic.com/s/jura/v10/z7NUdRfiaC4VVW9rRCti1w.woff) format('woff');
        }

        body {
            color: #e6f2ff;
            font-family: 'Jura', sans-serif;
            font-weight: 300;
            background: rgb(2, 0, 36);
            background: -moz-linear-gradient(180deg, rgba(2, 0, 36, 1) 0%, rgba(30, 87, 153, 1) 50%, rgba(30, 87, 153, 0.6334908963585435) 100%);
            background: -webkit-linear-gradient(180deg, rgba(2, 0, 36, 1) 0%, rgba(30, 87, 153, 1) 50%, rgba(30, 87, 153, 0.6334908963585435) 100%);
            background: linear-gradient(180deg, rgba(2, 0, 36, 1) 0%, rgba(30, 87, 153, 1) 50%, rgba(30, 87, 153, 0.6334908963585435) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#020024", endColorstr="#1e5799", GradientType=1);
        }

        .wrapper {
            height: 100vh;
            align-items: center;
            display: flex;
            justify-content: center;
            position: relative;
            min-height: 190px;
        }

        .content {
            text-align: center;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-animation: fadein 3s;
            -moz-animation: fadein 3s;
            -o-animation: fadein 3s;
            animation: fadein 3s;

        }

        @keyframes fadein {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @-moz-keyframes fadein {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @-webkit-keyframes fadein {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @-o-keyframes fadein {

        }

        h1 {
            font-size: 84px;
            font-weight: 300;
            margin: 0 0 30px 0;
            min-height: 115px;
        }

        a {
            color: #e6f2ff;
            padding: 6px 6px 0 6px;
            margin: 0 25px;
            text-decoration: none;
            opacity: 0.6;
            height: 45px;
            display: inline-block;
        }

        a:hover {
            opacity: 1;
        }

        .stars.large {
            height: 1px;
            width: 1px;
            background: transparent;
            box-shadow: 1188px 1283px #fff, 1368px 684px #fff, 1864px 752px #fff, 1043px 894px #fff, 33px 969px #fff, 778px 1545px #fff, 502px 1767px #fff, 1246px 417px #fff, 37px 1189px #fff;
            -webkit-animation: blink-large 5s infinite;
            animation: blink-large 5s infinite;
        }

        .stars.medium {
            height: 1px;
            width: 1px;
            background: transparent;
            box-shadow: 417px 781px #fff, 1451px 1976px #fff, 968px 912px #fff, 1406px 971px #fff, 1200px 1016px #fff, 618px 1276px #fff, 472px 1364px #fff, 760px 822px #fff, 1181px 919px #fff;
            -webkit-animation: blink-medium 4s infinite;
            animation: blink-medium 4s infinite;
        }

        .stars.small {
            height: 1px;
            width: 1px;
            background: transparent;
            box-shadow: 1489px 666px #fff, 34px 459px #fff, 1830px 101px #fff, 145px 1156px #fff, 1433px 263px #fff, 1294px 184px #fff, 894px 104px #fff, 507px 1015px #fff, 1778px 873px #fff;
            -webkit-animation: blink-small 3s infinite;
            animation: blink-small 3s infinite;
        }

        @-webkit-keyframes blink-large {
            0% {
                box-shadow: 1188px 1283px #fff, 1368px 684px #fff, 1864px 752px #fff, 1043px 894px #fff, 33px 969px #fff, 778px 1545px #fff, 502px 1767px #fff, 1246px 417px #fff, 37px 1189px #fff;
            }
            70% {
                box-shadow: 1188px 1283px transparent, 1368px 684px #fff, 1864px 752px transparent, 1043px 894px transparent, 33px 969px #fff, 778px 1545px #fff, 502px 1767px #fff, 1246px 417px #fff, 37px 1189px #fff;
            }
            100% {
                box-shadow: 1188px 1283px #fff, 1368px 684px #fff, 1864px 752px #fff, 1043px 894px #fff, 33px 969px #fff, 778px 1545px #fff, 502px 1767px #fff, 1246px 417px #fff, 37px 1189px #fff;
            }
        }

        @keyframes blink-large {
            0% {
                box-shadow: 1188px 1283px #fff, 1368px 684px #fff, 1864px 752px #fff, 1043px 894px #fff, 33px 969px #fff, 778px 1545px #fff, 502px 1767px #fff, 1246px 417px #fff, 37px 1189px #fff;
            }
            70% {
                box-shadow: 1188px 1283px transparent, 1368px 684px #fff, 1864px 752px transparent, 1043px 894px transparent, 33px 969px #fff, 778px 1545px #fff, 502px 1767px #fff, 1246px 417px #fff, 37px 1189px #fff;
            }
            100% {
                box-shadow: 1188px 1283px #fff, 1368px 684px #fff, 1864px 752px #fff, 1043px 894px #fff, 33px 969px #fff, 778px 1545px #fff, 502px 1767px #fff, 1246px 417px #fff, 37px 1189px #fff;
            }
        }

        @-webkit-keyframes blink-medium {
            0% {
                box-shadow: 417px 781px #fff, 1451px 1976px #fff, 968px 912px #fff, 1406px 971px #fff, 1200px 1016px #fff, 618px 1276px #fff, 472px 1364px #fff, 760px 822px #fff, 1181px 919px #fff;
            }
            70% {
                box-shadow: 417px 781px transparent, 1451px 1976px transparent, 968px 912px #fff, 1406px 971px #fff, 1200px 1016px transparent, 618px 1276px transparent, 472px 1364px transparent, 760px 822px #fff, 1181px 919px #fff;
            }
            100% {
                box-shadow: 417px 781px #fff, 1451px 1976px #fff, 968px 912px #fff, 1406px 971px #fff, 1200px 1016px #fff, 618px 1276px #fff, 472px 1364px #fff, 760px 822px #fff, 1181px 919px #fff;
            }
        }

        @keyframes blink-medium {
            0% {
                box-shadow: 417px 781px #fff, 1451px 1976px #fff, 968px 912px #fff, 1406px 971px #fff, 1200px 1016px #fff, 618px 1276px #fff, 472px 1364px #fff, 760px 822px #fff, 1181px 919px #fff;
            }
            70% {
                box-shadow: 417px 781px transparent, 1451px 1976px transparent, 968px 912px #fff, 1406px 971px #fff, 1200px 1016px transparent, 618px 1276px transparent, 472px 1364px transparent, 760px 822px #fff, 1181px 919px #fff;
            }
            100% {
                box-shadow: 417px 781px #fff, 1451px 1976px #fff, 968px 912px #fff, 1406px 971px #fff, 1200px 1016px #fff, 618px 1276px #fff, 472px 1364px #fff, 760px 822px #fff, 1181px 919px #fff;
            }
        }

        @-webkit-keyframes blink-small {
            0% {
                box-shadow: 1489px 666px #fff, 34px 459px #fff, 1830px 101px #fff, 145px 1156px #fff, 1433px 263px #fff, 1294px 184px #fff, 894px 104px #fff, 507px 1015px #fff, 1778px 873px #fff;
            }
            70% {
                box-shadow: 1489px 666px #fff, 34px 459px transparent, 1830px 101px transparent, 145px 1156px #fff, 1433px 263px transparent, 1294px 184px #fff, 894px 104px #fff, 507px 1015px #fff, 1778px 873px #fff;
            }
            100% {
                box-shadow: 1489px 666px #fff, 34px 459px #fff, 1830px 101px #fff, 145px 1156px #fff, 1433px 263px #fff, 1294px 184px #fff, 894px 104px #fff, 507px 1015px #fff, 1778px 873px #fff;
            }
        }

        @keyframes blink-small {
            0% {
                box-shadow: 1489px 666px #fff, 34px 459px #fff, 1830px 101px #fff, 145px 1156px #fff, 1433px 263px #fff, 1294px 184px #fff, 894px 104px #fff, 507px 1015px #fff, 1778px 873px #fff;
            }
            70% {
                box-shadow: 1489px 666px #fff, 34px 459px transparent, 1830px 101px transparent, 145px 1156px #fff, 1433px 263px transparent, 1294px 184px #fff, 894px 104px #fff, 507px 1015px #fff, 1778px 873px #fff;
            }
            100% {
                box-shadow: 1489px 666px #fff, 34px 459px #fff, 1830px 101px #fff, 145px 1156px #fff, 1433px 263px #fff, 1294px 184px #fff, 894px 104px #fff, 507px 1015px #fff, 1778px 873px #fff;
            }
        }


    </style>
</head>
<body>

<div class="stars small"></div>
<div class="stars medium"></div>
<div class="stars large"></div>

<div class="wrapper">
    <div class="content">

        <h1>Artisan Web</h1>

        <div>
            <a href="https://github.com/richpeers" title="GitHub" target="_blank" rel="noopener">
                <svg viewBox="0 0 496 512" width="34.125" height="39">
                    <path fill="currentColor"
                          d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z">
                    </path>
                </svg>
            </a>

            <a href="https://www.linkedin.com/in/richpeers/" title="LinkedIn" target="_blank" rel="noopener">
                <svg viewBox="0 0 448 512" width="34.125" height="39">
                    <path fill="currentColor"
                          d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z">
                    </path>
                </svg>
            </a>

            <a href="https://laravelphp.uk/" title="Slack" target="_blank" rel="noopener">
                <svg viewBox="0 0 448 512" width="34.125" height="39">
                    <path fill="currentColor"
                          d="M244.2 217.5l19.3 57.7-59.8 20-19.3-57.7 59.8-20zm41.4 243.7C131.6 507.4 65 471.6 18.8 317.6S8.4 97 162.4 50.8C316.4 4.6 383 40.4 429.2 194.4c46.2 154 10.4 220.6-143.6 266.8zM366.2 265c-3.9-12.2-17.2-18.6-29.4-14.7l-29 9.7-19.3-57.7 29-9.7c12.2-3.9 18.6-17.2 14.7-29.4-3.9-12.2-17.2-18.6-29.4-14.7l-29 9.7-10-30.1c-3.9-12.2-17.2-18.6-29.4-14.7-12.2 3.9-18.6 17.2-14.7 29.4l10 30.1-59.8 20.1-10-30.1c-3.9-12.2-17.2-18.6-29.4-14.7-12.2 3.9-18.6 17.2-14.7 29.4l10 30.1-29 9.7c-12.2 3.9-18.6 17.2-14.7 29.4 3.2 9.3 12.2 15.4 21.5 15.8 4.3.6 7.7-1 36.9-10.7l19.3 57.7-29 9.7c-12.2 3.9-18.6 17.2-14.7 29.4 3.2 9.3 12.2 15.4 21.5 15.8 4.3.6 7.7-1 36.9-10.7l10 30.1c3.7 10.8 15.8 18.6 29.4 14.7 12.2-3.9 18.6-17.2 14.7-29.4l-10-30.1 59.8-20.1 10 30.1c3.7 10.8 15.8 18.6 29.4 14.7 12.2-3.9 18.6-17.2 14.7-29.4l-10-30.1 29-9.7c12.2-4.2 18.6-17.5 14.7-29.6z">
                    </path>
                </svg>
            </a>
        </div>

    </div>
</div>

</body>
</html>
