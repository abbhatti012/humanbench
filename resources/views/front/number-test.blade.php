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
                                    <!-- <h2 class="fs-2 fw-bold mx-3 text-white">Level:<span id="attemptlevel" class="mx-2">1</span></h2> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="d-flex justify-content-center block-width">
                            <div class="anim-slide-fade-in css-18qa6we">
                                <div class="anim-slide-fade-in"><div>
                                    <div class="form">
                                        <div class="css-1qvtbrk e19owgy78">
                                                <center><h2 class="text-white">What was the number?</h2></center>
                                            <div class="save-hint faint-label">
                                                <center><span class="text-white">Press enter to submit</span>&nbsp;</div></center>
                                            </div><div class="css-1qvtbrk e19owgy78">
                                                <input pattern="[0-9]*" type="number" class="field">
                                            </div>
                                            <div class="css-1qvtbrk e19owgy78">
                                                <center><button type="button" class="css-de05nr submit">Submit</button></center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h1 class="text-white randomNumber disable-text"></h1>
                            <div class="bar">
                                <div class="in"></div>
                            </div>
                        </div>
                    </div>
                </section>
                </p>
            </div>
        </div>
    </div>
    <div class="modal fade show" id="result-popup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" style="padding-right: 17px;" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-body text-white text-center p-5">
                        <h3 class="text-white" style="margin: 0px 0 0px 0;">Number</h3>
                        <h1 class="text-white number" style="margin-top: 0px;"></h1>
                        <h3 class="text-white" style="margin: 0px 0 0px 0;">Your Answer</h3>
                        <h1 class="text-white answer" style="margin-top: 0px;text-decoration: line-through;"></h1>
                        <h3 class="text-white" style="margin: 0px 0 0px 0;">Level: <span class="level"></span></h3>
                        <p>Save your score to see how you compare.</p>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-danger mx-3 px-3 saveScore"><img class="mx-2" src="{{ asset('assets/img/next.svg') }}" alt="retry" width="15" height="15">Save Score</button>
                            <button class="btn btn-danger mx-3 px-3 closeSaveModal"><i class="mx-2 fa fa-times" width="15" height="15"></i>Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .bar {
            border: 1px solid #666;
            height: 20px;
            width: 100%;
        }
        .bar .in {
            animation: fill 2s linear 1;
            height: 100%;
            background-color: black;
        }

        @keyframes fill {
            0% {
                width: 0%;
            }
            100% {
                width: 100%;
            }
        }
        .disable-text {
            -webkit-touch-callout: none; /* iOS Safari */
            -webkit-user-select: none;   /* Chrome/Safari/Opera */
            -khtml-user-select: none;    /* Konqueror */
            -moz-user-select: none;      /* Firefox */
            -ms-user-select: none;       /* Internet Explorer/Edge */
            user-select: none;           /* Non-prefixed version, currently supported by any browser but < IE9 */
        }
    </style>
    <style>
        .css-1gr1qbh .anim-slide-fade-in {
            animation-name: slideFadeIn;
            animation-duration: 0.5s;
            animation-timing-function: ease-out;
        }
        @media (min-width: 500px){
            .css-18qa6we h2 {
                font-size: 24px;
            }
        }
        .css-1gr1qbh .faint-label {
            color: rgba(255, 255, 255, 0.6);
        }
        .css-1qvtbrk + .css-1qvtbrk {
            margin: 30px 0px 0px;
        }
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            display: none;
        }
        .css-18qa6we input[type="number"] {
            background: rgba(0, 0, 100, 0.2);
            border-radius: 3px;
            text-align: center;
            font-size: 48px;
            width: 100%;
            outline-style: none;
            box-shadow: none;
            border-color: transparent;
            appearance: none;
            color: white;
        }
        .form{
            display: none;
        }
        .css-1gr1qbh input:not([type="submit"]) {
            padding: 10px;
            border: 1px solid rgb(204, 204, 204);
        }
        .css-1gr1qbh input, .css-1gr1qbh select, .css-1gr1qbh textarea {
            font-family: inherit;
            font-size: inherit;
            font-weight: inherit;
            color: inherit;
        }
        .css-de05nr {
            padding: 12px 30px;
            background: green;
            display: inline-block;
            border: none;
            border-radius: 3px;
            transition: background 0.1s linear 0s;
            font-weight: bold;
            cursor: pointer;
            font-size: inherit;
            font-family: inherit;
            line-height: inherit;
            color: white !important;
            text-decoration: none !important;
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
            var randomNumber = 0, digits = 1, level = 1;
            getRandomNumber();
            function getRandomNumber(){
                $('.randomNumber').css('display','block');
                $('.bar').css('display','block');
                $('.form').css('display','none');
                $('.field').val('');

                showInputField();
                var number='';
                for(var i = 0; i < digits; i++){
                    number += Math.floor((Math.random() * 9) + 1);
                }
                randomNumber = number;
                $('.randomNumber').html(randomNumber);
                return randomNumber;
            }
            function showInputField(){
                setTimeout(function(){
                    $('.randomNumber').css('display','none');
                    $('.bar').css('display','none');
                    $('.form').css('display','block');
                    $(".field").focus();
                },2500)
            }
            $('.submit').on('click',function(){
                var value = $('.field').val();
                if(value == ''){
                    $.notify('Please enter some value in input field');
                } else {
                    if(value == randomNumber){
                        level = level + 1;
                        digits = digits + 1;
                        getRandomNumber();
                    } else {
                        $('#result-popup').css('display','block');
                        $('.number').html(randomNumber);
                        $('.answer').html(value);
                        $('.level').html(level);
                    }
                }
            })
            $('.field').keypress(function(event) {
                if (event.keyCode == 13) {
                    $('.submit').trigger('click');
                }
            });
            $('.closeSaveModal').on('click',function(){
                $('#result-popup').css('display','none');
                window.location.href = "{{ route('reaction-time') }}";
            })
            $('.saveScore').on('click',function(){
                $.ajax({
                    type : 'POST',
                    url : '{{ route("insert-number-test-score") }}',
                    data : {
                        level : level,
                        '_token' : "{{ csrf_token() }}"
                    },
                    success : function(data){
                        $('#retry-popup').css('display','none');
                        $.notify('Data updated successfully!','success');
                        setTimeout(function(){
                            window.location.href = "{{ route('number-memory') }}";
                        },1000)
                    }
                })
            })
        })
        function redirect(){
            window.location.href = "{{ route('number-memory') }}";
        }
    </script>
</body>
</html>
