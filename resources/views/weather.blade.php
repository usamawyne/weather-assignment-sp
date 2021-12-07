<html>

<head>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:300);

        $morro: #aacbe6;
        $cayucos: #9cd0ff;
        $bahamas: #3cc0fe;
        $capetown: #27a5fd;
        $cabo: #0066ff;
        $reynisfjara: #34373e;
        $svalbard: #d2e9fa;

        $bahamasAlpha: rgba($bahamas, 0.7);
        $caboAlpha: rgba($cabo, 0.6);

        $capetownShadow: rgba($capetown, 0.4);

        $widgetHeight: 400px;
        $pictoBackdropDiameter: $widgetHeight * 1.4;
        $pictoFrameDiameter: $pictoBackdropDiameter * .6;
        $pictoCloudBigDiameter: $pictoFrameDiameter * .65;
        $pictoCloudSmallDiameter: $pictoCloudBigDiameter * .7;
        $pictoCloudFillSize: $pictoCloudSmallDiameter * .7;
        $iconCloudBigDiameter: 36px;
        $iconCloudSmallDiameter: $iconCloudBigDiameter * .65;
        $iconCloudFillSize: $iconCloudSmallDiameter * .7;

        *,
        *:after,
        *:before {
            box-sizing: border-box;
        }

        body {
            background: #CEF;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 98vh;
        }

        .widget {
            background: linear-gradient(to bottom right, $bahamas 20%, $cabo);
            width: 900px;
            height: $widgetHeight;
            border-radius: 6px;
            box-shadow: 0px 60px 80px -20px $capetownShadow;
            position: relative;
            overflow: hidden;
        }

        .pictoBackdrop {
            position: absolute;
            height: $pictoBackdropDiameter;
            width: $pictoBackdropDiameter;
            border-radius: 50%;
            background: linear-gradient(160deg, $bahamasAlpha 40%, $caboAlpha);
            right: -40px;
            top: -90px;
        }

        .pictoFrame {
            position: absolute;
            background: $reynisfjara;
            border-radius: 50%;
            box-shadow: 0px 50px 60px -20px $cabo;
            height: $pictoFrameDiameter;
            width: $pictoFrameDiameter;
            right: 80px;
            top: 25px;
        }

        .pictoCloudBig {
            position: absolute;
            border-radius: 50%;
            background: $morro;
            box-shadow: 20px 20px 80px -20px $morro;
            height: $pictoCloudBigDiameter;
            width: $pictoCloudBigDiameter;
            top: 80px;
            right: 160px;
        }

        .pictoCloudFill {
            position: absolute;
            background: $morro;
            box-shadow: 0px 20px 80px -20px $morro;
            height: $pictoCloudFillSize;
            width: $pictoCloudFillSize;
            top: 191px;
            right: 265px;
        }

        .pictoCloudSmall {
            position: absolute;
            border-radius: 50%;
            background: $svalbard;
            height: $pictoCloudSmallDiameter;
            width: $pictoCloudSmallDiameter;
            top: 146px;
            right: 282px;
        }

        .iconCloudBig {
            position: absolute;
            border-radius: 50%;
            background: $cayucos;
            height: $iconCloudBigDiameter;
            width: $iconCloudBigDiameter;
            top: 200px;
            left: 80px;
        }

        .iconCloudSmall {
            position: absolute;
            border-radius: 50%;
            height: $iconCloudSmallDiameter;
            width: $iconCloudSmallDiameter;
            background: $svalbard;
            top: 213px;
            left: 70px;
        }

        .iconCloudFill {
            position: absolute;
            height: $iconCloudFillSize;
            width: $iconCloudFillSize;
            background: $cayucos;
            top: 220px;
            left: 80px;
        }

        .details {
            font-family: Roboto, sans-serif;
            display: flex;
            flex-direction: column;
            margin-top: 30px;
            margin-left: 60px;
        }

        .temperature {
            color: white;
            font-weight: 300;
            font-size: 10em;
        }

        .summary {
            color: $svalbard;
            font-size: 2em;
            font-weight: 300;
            width: 260px;
            margin-top: -16px;
            padding-bottom: 16px;
            border-bottom: 2px solid $cayucos;
            margin-left: 8px;
        }

        .summaryText {
            margin: 0;
            margin-left: 56px;
        }

        .precipitation,
        .wind {
            color: $svalbard;
            font-size: 1.6em;
            font-weight: 300;
            margin-left: 8px;
        }

        .precipitation {
            margin-top: 16px;
        }

        .wind {
            margin-top: 4px;
        }
    </style>
</head>

<body>
    <form action="/" method="get">
        <label for="longitude">Longitude:</label>
        <input class="form-control" type="number" step="0.0001" id="longitude" name="longitude"><br><br>
        <label for="latitude">Latitude:</label>
        <input class="form-control" type="number" step="0.0001" id="latitude" name="latitude"><br><br>
        <input type="submit" value="Submit">
    </form>
    <div class="box">
        <div class="container">
            <div class="widget">
                <div class="details">
                    <div class="temperature">{{$info->main->temp ?? '-'}}</div>
                    <div class="summary">
                        <p class="summaryText">{{$info->name ?? '-'}}</p>
                    </div>
                    <div class="precipitation">Wind: {{$info->wind->speed ?? '-'}}mph</div>
                    <div class="wind">Humidity: {{$info->main->humidity ?? '-'}}%</div>
                </div>
                <div class="pictoBackdrop"></div>
                <div class="pictoFrame"></div>
                <div class="pictoCloudBig"></div>
                <div class="pictoCloudFill"></div>
                <div class="pictoCloudSmall"></div>
                <div class="iconCloudBig"></div>
                <div class="iconCloudFill"></div>
                <div class="iconCloudSmall"></div>
            </div>
        </div>
    </div>

</body>

</html>