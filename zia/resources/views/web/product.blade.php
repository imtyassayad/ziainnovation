<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>{{$name}}</title>

    <style>
        ::-webkit-scrollbar{
            display: none;
        }
        .top{
            width: 100%;
            height: 40px;
            background-color: #000;
            padding: 5px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 2;

        }
    </style>
</head>
<body>
    <div class="top">
        <h5 class="text-light">Demo Product</h5>
        <h5 class="text-light">Call for more info - 8070101017</h5>
    </div>
    <div class="enquiry">

    </div>
    <div class="embed-responsive embed-responsive-16by9" style="margin-top: 40px">
        <iframe class="embed-responsive-item" src="{{'https://'.$name.'.ziainnovation.com'}}" allowfullscreen></iframe>
      </div>
</body>
</html>
