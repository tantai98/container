<!DOCTYPE html>
<html>
    <head>
        <title>404 Not Found</title>

        
        <style>
             @font-face{font-family:'Roboto';
                src:url('{!! asset('frontend/fonts/Roboto.eot') !!}');
                src:url('{!! asset('frontend/fonts/Roboto.eot?#iefix') !!}') format('embedded-opentype'),
                url('{!! asset('frontend/fonts/Roboto.woff2') !!}') format('woff2'),
                url('{!! asset('frontend/fonts/Roboto.woff') !!}') format('woff'),
                url('{!! asset('frontend/fonts/Roboto.ttf') !!}') format('truetype'),
                url('{!! asset('frontend/fonts/Roboto.svg#Roboto') !!}') format('svg');
            }
            @font-face{font-family:'OpenSansCondensed700';
                src:url('{!! asset('frontend/fonts/OpenSansCondensed700.eot') !!}');
                src:url('{!! asset('frontend/fonts/OpenSansCondensed700.eot?#iefix') !!}') format('embedded-opentype'),
                url('{!! asset('frontend/fonts/OpenSansCondensed700.woff2') !!}') format('woff2'),
                url('{!! asset('frontend/fonts/OpenSansCondensed700.woff') !!}') format('woff'),
                url('{!! asset('frontend/fonts/OpenSansCondensed700.ttf') !!}') format('truetype'),
                url('{!! asset('frontend/fonts/OpenSansCondensed700.svg#OpenSansCondensed700') !!}') format('svg');
            }
            @font-face{font-family:'RobotoBlack';
                src:url('{!! asset('frontend/fonts/Roboto-Black.eot') !!}');
                src:url('{!! asset('frontend/fonts/Roboto-Black.eot?#iefix') !!}') format('embedded-opentype'),
                url('{!! asset('frontend/fonts/Roboto-Black.woff2') !!}') format('woff2'),
                url('{!! asset('frontend/fonts/Roboto-Black.woff') !!}') format('woff'),
                url('{!! asset('frontend/fonts/Roboto-Black.ttf') !!}') format('truetype'),
                url('{!! asset('frontend/fonts/Roboto-Black.svg#Roboto-Black') !!}') format('svg');
            }
           
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-family: 'Roboto';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 9.5pt;
                margin-bottom: 40px;
                color: #404040;
                font-family: 'Roboto';
            }
            h1{
                font-weight: normal;
                font-size: 60pt;
                color: #000000;
                font-family: "OpenSansCondensed700";
                margin-bottom: 0px;
                margin-top: 0px;
            }
            @media (max-width: 768px){
                 .title {
                    font-size: 9.5pt;
                    margin-bottom: 40px;
                    color: #000000;
                }
            }
            .line{
                width: 25px;
                height: 5px;
                color: #3597D3;
                display: block;
                background-color: #3597D3;
                margin: 0 auto;
                margin-bottom: 15px;
            }
            a{
                text-decoration: none;
                color: blue;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <h1>404</h1>
                <span class="line"></span>
                <div class="title">Đường dẫn truy cập không tồn tại, về <a href="{{url('')}}">Trang chủ</a></div>
            </div>
        </div>
    </body>
</html>
