<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CNS Benchmarks</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <style>
        .notification{
            background: red;
            padding: 12px;
            color: white;
            border-radius: 12px;
            display: none;
        }
        .status{
            background: black;
            padding: 12px;
            color: white;
            border-radius: 12px;
            display: none;
        }
        .state{
            background: black;
            padding: 12px;
            color: white;
            border-radius: 12px;
            display: none;
        }
       
        .table-center{
            margin-left: auto;
            margin-right: auto;
        }
    </style>
<div class="uk-position-center">
    <button style="display: none;" class="uk-button uk-button-default uk-border-pill modallumini" href="#modallumini" uk-toggle>Full Screen Modal</button>  
</div>
<div id="modallumini" class="uk-modal-full " uk-modal>
    <div class="uk-modal-dialog uk-flex uk-flex-center uk-flex-middle uk-background-secondary" uk-height-viewport>
            <a href="javascript:void(0)" class="uk-modal-close-full" type="button" onclick="redirect()" uk-close></a>
            <div class="uk-width-xxlarge uk-padding-large uk-card uk-card-default uk-card-body uk-box-shadow-large">
                <section id="level1next" class="mt-5">
                    <div class="d-flex justify-content-center">
                        <div class="text-white text-center">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                <section class="d-flex justify-content-center mb-4">
                                    <ul class="nav nav-pills mx-auto page-tabs" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link skewX-tab text-center trial1 text-white active" type="button">Trial 1</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link skewX-tab trial2 text-center" type="button">Trial 2</button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link skewX-tab trial3 text-center" type="button">Trial 3</button>
                                        </li>
                                    </ul>
                                </section>
                                    <h2 class="fs-2 fw-bold mx-3 text-white">Level:<span id="attemptlevel" class="mx-2">1</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="d-flex justify-content-center block-width">
                            <div class="anim-slide-fade-in">
                                <div class="css-1qvtbrk e19owgy78">
                                    <div class="css-1qvtbrk e19owgy78">
                                        <div class="css-hvbk5q eut2yre0 boxHere">
                                            <div>
                                                <div class="css-lxtdud eut2yre1 child1"></div>
                                                <div class="css-lxtdud eut2yre1 child2"></div>
                                                <div class="css-lxtdud eut2yre1 child3"></div>
                                            </div>
                                            <div>
                                                <div class="css-lxtdud eut2yre1 child4"></div>
                                                <div class="css-lxtdud eut2yre1 child5"></div>
                                                <div class="css-lxtdud eut2yre1 child6"></div>
                                            </div>
                                            <div>
                                                <div class="css-lxtdud eut2yre1 child7"></div>
                                                <div class="css-lxtdud eut2yre1 child8"></div>
                                                <div class="css-lxtdud eut2yre1 child9"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                </p>
            </div>
        </div>
    </div>

    <style>
        .eut2yre1{
            width: 132px;
            height: 132px;
            border-width: 8.25px;
            border-radius: 16.5px;
        }
        .white-back{
            background-color: white !important;
        }
        .red-back{
            background-color: red !important;
        }
        .hide-white-back{
            background-color: black !important;
        }
        #information-popup{
            display: none;
        }
        #result-popup{
            display: none;
        }
        #retry-popup{
            display: none;
        }
        .fa-info-circle{
            cursor: pointer;
        }
        .fa-save{
            cursor: pointer;
        }
        .justify-content-center{
            justify-content: center!important;
        }
        .d-flex{
            display: flex;
        }
        .text-white{
            color: #fff!important;
        }
        .text-center{
            text-align: center!important;
        }
        .row{
            --bs-gutter-x: 1.5rem;
            --bs-gutter-y: 0;
            display: flex;
            flex-wrap: wrap;
            margin-top: calc(var(--bs-gutter-y) * -1);
            margin-right: calc(var(--bs-gutter-x)/-2);
            margin-left: calc(var(--bs-gutter-x)/-2);
        }
        @media (min-width: 768px){
            .col-md-12 {
                flex: 0 0 auto;
                width: 100%;
            }
        }
        .mb-4{
            margin-bottom: 1.5rem!important;
        }
        .mx-auto{
            margin-right: auto!important;
            margin-left: auto!important;
        }
        .nav{
            display: flex;
            flex-wrap: wrap;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
        }
        .model-bgdark, .page-tabs .nav-item .nav-link.active, .table.table-dark{
            background-color: #263036!important;
        }
        .page-tabs .nav-item .nav-link{
            border: 2px solid #263036!important;
        }
        .nav-pills .nav-link{
            border-radius: 0.25rem;
        }
        [type=button]:not(:disabled), [type=reset]:not(:disabled), [type=submit]:not(:disabled), button:not(:disabled){
            cursor: pointer;
        }
        .skewX-tab{
            height: 45px;
            width: 141px;
            margin-right: 3px;
            transform: skewX(-0.035turn);
        }
        .nav-link{
            display: block;
            padding: 0.5rem 1rem;
            text-decoration: none;
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out;
        }
        @media (min-width: 1200px){
            .fs-2 {
                font-size: 2rem!important;
            }
        }
        .mx-3{
            margin-right: 1rem!important;
            margin-left: 1rem!important;
        }
        .mt-4{
            margin-top: 1.5rem!important;
        }
        @media (min-width: 1400px){
            .container, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
                max-width: 1320px;
            }
        }
        .container, .container-fluid, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl{
            width: 100%;
            padding-right: var(--bs-gutter-x,.75rem);
            padding-left: var(--bs-gutter-x,.75rem);
            margin-right: auto;
            margin-left: auto;
        }
        .block-width{
            flex-direction: row;
            flex-wrap: wrap;
            width: 75%;
            margin: 0 auto;
        }
        .my-4{
            margin-top: 1.5rem!important;
            margin-bottom: 1.5rem!important;
        }
      
        .modal-open .modal{
            overflow-x: hidden;
            overflow-y: auto;
        }
        .modal{
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1050;
            width: 100%;
            height: 100%;
            outline: 0;
        }
        .fade{
            transition: opacity .15s linear;
        }
        .modal.show .modal-dialog{
            transform: none;
        }
        .modal.fade .modal-dialog{
            transition: transform .3s ease-out;
        }
        @media (min-width: 576px){
            .modal-dialog-centered {
                min-height: calc(100% - 3.5rem);
            }
        }
        @media (min-width: 576px){
            .modal-dialog {
                max-width: 500px;
                margin: 1.75rem auto;
            }
        }
        .modal-dialog-centered{
            display: flex;
            align-items: center;
        }
        .modal-dialog{
            position: relative;
            width: auto;
            pointer-events: none;
        }
        .modal-content{
            background-color: #20272c!important;
            border-radius: 20px!important;
            position: relative;
            display: flex;
            flex-direction: column;
            width: 100%;
            pointer-events: auto;
            background-clip: padding-box;
            border: 1px solid rgba(0,0,0,.2);
            outline: 0;
        }
        .modal-body{
            position: relative;
            flex: 1 1 auto;
            padding: 1rem;
        }
        @media (min-width: 1200px){
            .fs-1 {
                font-size: 2.5rem!important;
            }
        }
        .px-3{
            padding-right: 1rem!important;
            padding-left: 1rem!important;
        }
        .mx-3{
            margin-right: 1rem!important;
            margin-left: 1rem!important;
        }
        .btn-danger{
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn{
            display: inline-block;
            font-weight: 400;
            line-height: 1.5;
            text-align: center;
            text-decoration: none;
            vertical-align: middle;
            cursor: pointer;
            -moz-user-select: none;
            user-select: none;
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            border-radius: 0.25rem;
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }
        .mx-2{
            margin-right: 0.5rem!important;
            margin-left: 0.5rem!important;
        }
        img, svg{
            vertical-align: middle;
        }
        .btn-success{
            color: #fff;
            background-color: #198754;
            border-color: #198754;
        }
        #staticBackdrop{
            display: none;
        }
        .font-forty{
            font-size: 40px;
        }
        .tosoon{
            display: none;
        }
        .uk-width-xxlarge{
            border-radius: 20px;
            background: grey;
            width: 900px !important;
        }
        .save{
            display: none;
        }
        .css-1gr1qbh .anim-slide-fade-in {
            animation-name: slideFadeIn;
            animation-duration: 0.5s;
            animation-timing-function: ease-out;
        }
        .css-aix2he {
            position: relative;
            cursor: pointer;
            color: white;
            user-select: none;
            overflow: hidden;
            text-align: center;
        }
        .css-dd6wi1 {
            font-size: 28px;
            margin: 0px 15px;
        }
        .css-yuq7ce {
            margin-right: 10px;
            opacity: 0.6;
        }
        .css-1qvtbrk + .css-1qvtbrk {
            margin: 30px 0px 0px;
        }
        .css-hvbk5q {
            position: relative;
            transform: translateZ(0px);
        }
        .css-lxtdud {
            background-color: black;
            cursor: pointer;
            display: inline-block;
            vertical-align: top;
            border: 4px solid rgba(0, 0, 0, 0);
            backface-visibility: visible;
            transform: rotateX(0deg) translateZ(1px);
            transition: transform 0.3s ease-out 0s;
            z-index: 1;
            background-clip: padding-box !important;
        }
    </style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.2/js/uikit.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js" integrity="sha512-efUTj3HdSPwWJ9gjfGR71X9cvsrthIA78/Fvd/IN+fttQVy7XWkOAXb295j8B3cmm/kFKVxjiNYzKw9IQJHIuQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function(){
            $(".modallumini").trigger("click");
            var totalBoxes, min, min, howMany, randomNumbers, level = 1, error = 0, cube = 3, trial = 1;

            function start(){
                var html = '';
                var num = 0;
                for(var i = 1; i <= cube; i++){
                    html += '<div>';
                    for(var j = 1; j <= cube; j++){
                        num = num + 1;
                        html += '<div class="css-lxtdud eut2yre1 child'+num+'"></div>';
                    }
                    html += '</div>';
                }
                $('.boxHere').html(html);

                if(cube == 5){
                    $('.eut2yre1').css('width','100px');
                    $('.eut2yre1').css('height','100px');
                } else if(cube == 6){
                    $('.eut2yre1').css('width','80px');
                    $('.eut2yre1').css('height','80px');
                } else if(cube == 7){
                    $('.eut2yre1').css('width','70px');
                    $('.eut2yre1').css('height','70px');
                } else if(cube == 8){
                    $('.eut2yre1').css('width','60px');
                    $('.eut2yre1').css('height','60px');
                } else if(cube == 9){
                    $('.eut2yre1').css('width','50px');
                    $('.eut2yre1').css('height','50px');
                } else if(cube == 10){
                    $('.eut2yre1').css('width','40px');
                    $('.eut2yre1').css('height','40px');
                } else if(cube == 11){
                    $('.eut2yre1').css('width','40px');
                    $('.eut2yre1').css('height','40px');
                } else if(cube == 12){
                    $('.eut2yre1').css('width','30px');
                    $('.eut2yre1').css('height','30px');
                } else if(cube == 13){
                    $('.eut2yre1').css('width','30px');
                    $('.eut2yre1').css('height','30px');
                } else if(cube == 14){
                    $('.eut2yre1').css('width','30px');
                    $('.eut2yre1').css('height','30px');
                } else if(cube == 15){
                    $('.eut2yre1').css('width','30px');
                    $('.eut2yre1').css('height','30px');
                }
                
                error = 0;
                randomNumbers = getRandomNumbers();
                setTimeout(function(){
                    assignClasses(randomNumbers);
                },1000)
            }

            howMany = 3;
            setTimeout(function(){
                randomNumbers = getRandomNumbers();
                assignClasses(randomNumbers);
            },1000)

            function getRandomNumbers(){
                min = 1;
                max = $(".container .eut2yre1").length;
                
                var a = new Array();
                while (a.length < howMany) {
                    var n = Math.floor(Math.random() * (max - min) + 0.5) + min;
                    if (a.indexOf(n) == -1) {
                        a.push(n);
                    }
                }
                return a;
            }
            function assignClasses(randomNumbers){
                for(var i = 0; i < randomNumbers.length; i++){
                    $(".container .child"+randomNumbers[i]).addClass('white-back white-exist');
                }
                setTimeout(function(){
                    $(".container .eut2yre1").addClass('hide-white-back');
                    $(".container .eut2yre1").addClass('commonClass');
                },2000)
            }
            function checkIfWhiteExists(){
                if($(".container .eut2yre1").hasClass("white-exist")){
                    return false;
                } else {
                    return true;
                }
            }
            $(document).on('click','.commonClass',function(){
                if($(this).hasClass("white-back")){
                    successBeep();
                    $(this).removeClass('hide-white-back');
                    $(this).removeClass('white-exist');
                } else if($(this).hasClass("red-back")) {
                } else {
                    error = error + 1;
                    errorBeep();
                    $(this).addClass('red-back');
                    $(this).removeClass('hide-white-back');
                }
                var isAllChecked = checkIfWhiteExists();
                if(error == 3){
                    trial = trial + 1;
                    if(trial == 4){
                        alert('Game Over');
                    } else {
                        $('.skewX-tab').removeClass('text-white active');
                        $('.trial'+trial).addClass('text-white active');
                        start();
                    }
                } else if (isAllChecked){
                    howMany = howMany + 1;
                    level = level + 1;
                    $('#attemptlevel').html(level);

                    if(level % 3 == 0){
                        cube = cube + 1;
                        start();
                    } else {
                        start();
                    }
                }
            })
        })
    </script>
    <script>
        const context = new window.AudioContext();

        function playFile(filepath) {
        fetch(filepath)
            .then(response => response.arrayBuffer())
            .then(arrayBuffer => context.decodeAudioData(arrayBuffer))
            .then(audioBuffer => {
            const soundSource = context.createBufferSource();
            soundSource.buffer = audioBuffer;
            soundSource.connect(context.destination);
            soundSource.start();
            });
        }

        function successBeep(){
            playFile('https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/success.mp3');
        }
        function errorBeep(){
            playFile('https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/error.mp3');
        }
    </script>
</body>
</html>
