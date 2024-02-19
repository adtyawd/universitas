<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Random Number Animation</title>
  <style>
    body {
        background-image: url('{{ asset('main_assets/assets/background.gif') }}');
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .ctr {
        text-align: center;
        background-color: rgba(17, 15, 66, 0.8);
        padding: 0 50px 50px 50px;
        box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.9); /* Menambahkan bayangan */
        width: 100%;
        height: 100%
    }

    .randomNumberContainer {
      text-align: center;
      padding: 20px;
      display: inline-block;
      margin: 10px;
      background-image: url('{{ asset('main_assets/assets/item_sphere.png') }}');
      background-size: cover;
    }

    .randomNumber {
      font: 1000 80px system-ui;
      padding: 20px;
      display: inline-block;
      width: 80px;
      color: rgb(248, 0, 0);
      height: 80px;
      line-height: 60px;
      overflow: hidden;
    }

    .digit {
      transition: transform 0.1s ease-out;
    }

    .controls {
      margin-top: 20px;
    }

    button {
      font-size: 16px;
      padding: 10px 20px;
    }

/* CSS */
    .button-77 {
    align-items: center;
    appearance: none;
    background-clip: padding-box;
    background-color: initial;
    background-image: none;
    border-style: none;
    box-sizing: border-box;
    color: #fff;
    cursor: pointer;
    display: inline-block;
    flex-direction: row;
    flex-shrink: 0;
    font-family: Eina01,sans-serif;
    font-size: 16px;
    font-weight: 800;
    justify-content: center;
    line-height: 24px;
    margin: 0;
    min-height: 64px;
    outline: none;
    overflow: visible;
    padding: 19px 26px;
    pointer-events: auto;
    position: relative;
    text-align: center;
    text-decoration: none;
    text-transform: none;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    vertical-align: middle;
    width: auto;
    word-break: keep-all;
    z-index: 0;
    }

    @media (min-width: 768px) {
    .button-77 {
        padding: 19px 32px;
    }
    }

    .button-77:before,
    .button-77:after {
    border-radius: 80px;
    }

    .button-77:before {
    background-color: rgba(249, 58, 19, .32);
    content: "";
    display: block;
    height: 100%;
    left: 0;
    overflow: hidden;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: -2;
    }

    .button-77:after {
    background-color: initial;
    background-image: linear-gradient(92.83deg, #ff7426 0, #f93a13 100%);
    bottom: 4px;
    content: "";
    display: block;
    left: 4px;
    overflow: hidden;
    position: absolute;
    right: 4px;
    top: 4px;
    transition: all 100ms ease-out;
    z-index: -1;
    }

    .button-77:hover:not(:disabled):after {
    bottom: 0;
    left: 0;
    right: 0;
    top: 0;
    transition-timing-function: ease-in;
    }

    .button-77:active:not(:disabled) {
    color: #ccc;
    }

    .button-77:active:not(:disabled):after {
    background-image: linear-gradient(0deg, rgba(0, 0, 0, .2), rgba(0, 0, 0, .2)), linear-gradient(92.83deg, #ff7426 0, #f93a13 100%);
    bottom: 4px;
    left: 4px;
    right: 4px;
    top: 4px;
    }

    .button-77:disabled {
    cursor: default;
    opacity: .24;
    }
  </style>
</head>
<body>
  <div class="ctr">
    <div class="logo">
        <img width="500px" src="{{ asset('own_assets/images/logo.png') }}" alt="">
    </div>
    <h1 style="color: white; font-size: 100px" id="greet"></h1>

  </div>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script>

    setInterval(() => {
        $.ajax({
            url: '/monitor/check',
            method: 'GET',
            success: function (response) {
                if(response.status == 1){
                    $("#greet").text(response.data);
                }
                // else if(response.status == 2){
                //     setInterval(() => {
                //         $("#greet").text("acara");
                //     }, 5000);
                // }
            },
            error: function (response) {
                console.log(response.message);
            }
        })
    }, 3000);

  </script>
</body>
</html>
