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
        @media screen and (max-width: 992px) {
            .page-tabs .nav-item .nav-link {
                display: none;
            }
            #greenDiv{
                width: 500px;
                height: 500px;
            }
            #redDiv{
                width: 500px;
                height: 500px;
            }
            #greyDiv{
                width: 500px;
                height: 500px;
            }
            #continueDiv{
                width: 500px;
                height: 500px;
            }
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
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link skewX-tab trial4 text-center" type="button" role="tab">Trial 4</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link skewX-tab trial5 text-center" type="button" role="tab">Trial 5</button>
                                        </li>
                                    </ul>
                                </section>
                                <h2 class="fs-2 fw-bold mx-3 text-white"><span id="attemptlevel" class="mx-3">1</span>Attempt</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="d-flex justify-content-center block-width">
                            <div class="circle-container d-flex justify-content-center my-4">
                                <div id="greyDiv" class="circle justify-content-center align-items-center d-none">
                                    <span class="fs-4 text-white waitt fw-bold"></span>
                                </div>
                                <div id="greenDiv" class="circle justify-content-center d-flex align-items-center color-green">
                                    <span class="fs-4 text-white waitt fw-bold">Press Here</span>
                                </div>
                                <span id="redDiv" class="retry-circle d-none d-flex justify-content-center align-items-center retry">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="83.464" height="81.681" viewBox="0 0 83.464 81.681">
                                        <path id="Path_1193" data-name="Path 1193" d="M13959.226,6374.07c3.193-1.49,9.578-6.172,12.346-6.811,2.127,1.7,4.682,7.875,13.836,11.069a23.215,23.215,0,0,0,14.687.425,26.33,26.33,0,0,0,18.945-24.691c0-21.5-23.627-32.78-39.8-22.987-1.491,1.064-5.748,3.83-6.174,5.96,1.7,3.194,8.3,5.533,9.579,8.94-1.275,1.49-3.405,1.275-6.812,1.49l-13.836,1.491c-9.366,1.276-6.812,2.979-9.578-13.2-3.194-19.582-3.406-18.093,3.406-12.558,4.682,3.831,5.108,5.109,7.235,2.767,11.069-11.493,25.97-15.963,41.081-11.493a41.806,41.806,0,0,1,25.329,20.859,40.806,40.806,0,0,1-16.39,53.638c-14.048,8.088-29.16,7.025-42.357-1.915-3.192-2.342-10.642-10.218-11.493-12.984Z" transform="translate(-13950.267 -6312.768)" fill="#e28088" fill-rule="evenodd"></path>
                                    </svg>
                                </span>
                                <div id="continueDiv" class="circle justify-content-center d-flex align-items-center color-blue">
                                    <span class="fs-4 text-white waitt fw-bold">Click to keep going</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <p class="fs-3 text-center fw-bold waitgreen d-none font-forty text-white"><b>Wait For Green</b>&nbsp;&nbsp;<i class="fa fa-info-circle"></i>
                <!-- <i class="fa fa-save" title="Save Info"></i> -->
                </p>
                <div class="tosoon">
                    <p class="fs-3 text-center fw-bold m-0 text-white"><b>You pressed too soon.</b></p>
                    <p class="text-center text-white"><b>You need to retry this attempt</b></p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade show" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" style="padding-right: 17px;" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-body text-white text-center p-5">
                        <h3 class="text-white">Attempt Average:</h3>
                        <p class="fs-1" id="attemptscore">0</p>
                        <h3 class="text-white">Individual Results:</h3>
                        <table class="table-center">
                            
                        </table><br>
                        <!-- <p>You can retry this attempt and improve your results or navigate to the next attempt</p> -->
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-danger mx-3 px-3 retry popup-btn" id="retryattempt"><img class="mx-2" src="{{ asset('assets/img/refresh.svg') }}" alt="retry" width="15" height="15">Retry</button>
                            <button class="btn btn-success mx-3 px-3 next popup-btn" id="nextattempt">Next<img class="mx-2" src="{{ asset('assets/img/next.svg') }}" alt="next" width="15" height="15"></button>
                            <a href="{{ route('reaction-time') }}" class="btn btn-danger mx-3 px-3">Back<img class="mx-2" src="{{ asset('assets/img/refresh.svg') }}" alt="next" width="15" height="15"></a>
                            <button class="btn btn-success mx-3 px-3 save popup-btn" id="saveatempt">Save<img class="mx-2" src="{{ asset('assets/img/next.svg') }}" alt="next" width="15" height="15"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade show" id="information-popup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" style="padding-right: 17px;" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-body text-white text-center p-5">
                        <p class="mt-4 attempttext text-white">You will see a gray button on a screen. In a few seconds it will become green.<br> Your task is to press on it as fast as you can and we will calculate your reaction.</p>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-danger mx-3 px-3 closeModal"><i class="mx-2 fa fa-times" width="15" height="15"></i>Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade show" id="retry-popup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" style="padding-right: 17px;" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-body text-white text-center p-5">
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="isRetry">Are you wanted to enable retry functionality?  <input name="is_retry" required id="isRetry" type="checkbox" value="0" <?php if(isset($status) && $status->is_retry == 1){echo 'checked';} ?>></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade show" id="result-popup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" style="padding-right: 17px;" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-body text-white text-center p-5">
                        <p class="notification"></p>
                        <p class="state"></p>
                        <p class="status"></p>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-danger mx-3 px-3 retryFromStart"><img class="mx-2" src="{{ asset('assets/img/refresh.svg') }}" alt="retry" width="15" height="15">Play Again</button>
                            <button class="btn btn-danger mx-3 px-3 closeSaveModal"><i class="mx-2 fa fa-times" width="15" height="15"></i>Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
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
        .circle{
            background: red !important;
            width: 250px;
            height: 250px;
            border-radius: 9999px;
            margin: 10px;
            box-shadow: 0 0 0 10px #2c353f;
            cursor: pointer;
        }
        .btn-green, .color-green, .save-btn .btn {
            background-color: #53bf5f!important;
        }
        .fs-4{
            font-size: 1.5rem!important;
        }
        .fw-bold{
            font-weight: 700!important;
        }
        .align-items-center{
            align-items: center!important;
        }
        .retry-circle{
            background: red!important;
            width: 250px;
            height: 250px;
            border-radius: 9999px;
            margin: 10px;
            box-shadow: 0 0 0 10px #2c353f;
            cursor: pointer;
        }
        .attempttext{
            color: black;
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
        #greenDiv{
            display: none;
        }
        #redDiv{
            display: none;
        }
        .color-blue{
            background-color: blue !important ;
        }
        #continueDiv{
            display: none;
        }
        .uk-width-xxlarge{
            border-radius: 20px;
            background: grey;
        }
        .uk-width-xxlarge{
            width: 900px !important;
        }
        .save{
            display: none;
        }
    </style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.2/js/uikit.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js" integrity="sha512-efUTj3HdSPwWJ9gjfGR71X9cvsrthIA78/Fvd/IN+fttQVy7XWkOAXb295j8B3cmm/kFKVxjiNYzKw9IQJHIuQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        <?php if($status): ?>
            var is_retry = "<?= $status->is_retry; ?>";
            var state = "<?= $status->state; ?>";
            var status = "<?= $status->status; ?>";
        <?php else: ?>
            var is_retry = 0;
            var state = '';
            var status = '';
        <?php endif; ?>

        $(document).ready(function(){
            $(".modallumini").trigger("click");
            var isRetry = false;
            var milliseconds;
            var msTimer;
            var isGreenClicked = false;
            var active;
            var trial = 1;
            var scores = [];
            var random = 3000;

            start();
            var interval;
            function start(){
                random = getRandom() * 1000;
                interval = setTimeout(function(){
                    if(isRetry == false){
                        milliseconds = 0;
                        $('#greyDiv').css('display','none');
                        $('#greenDiv').css('display','flex');
                        
                        isRetry = false;
                        isGreenClicked = false;
                        setMs();
                    }
                // },random)
                },3000)
            }
            function getRandom(){
                let min = 3;
                let max = 6;
                
                return Math.floor(Math.random() * (max - min + 1)) + min;
            }

            function setMs(){
                if(isGreenClicked == true){
                    clearInterval(msTimer);
                } else { 
                    milliseconds += 10;
                    msTimer = setTimeout(setMs, 10);
                }
            }
            
            $('#greyDiv').on('click',function(){
                isRetry = true;
                $('.waitgreen').css('display','none');
                $('.tosoon').css('display','block');
                $('#greyDiv').css('display','none');
                $('#greenDiv').css('display','none');
                $('#redDiv').css('display','flex');
            })
            $('#greenDiv').on('click',function(){
                isGreenClicked = true;
                scores.push(milliseconds);
                
                if(trial == 5){
                    var html = '';
                    $('.next').css('display','none');
                    $('.save').css('display','block');
                    html = '<tr>'+
                                '<td>Trial 1 = </td>'+
                                '<td>'+scores[0]+' ms</td>'+
                            '</tr>'+
                            '<tr>'+
                                '<td>Trial 2 = </td>'+
                                '<td>'+scores[1]+' ms</td>'+
                            '</tr>'+
                            '<tr>'+
                                '<td>Trial 3 = </td>'+
                                '<td>'+scores[2]+' ms</td>'+
                            '</tr>'+
                            '<tr>'+
                                '<td>Trial 4 = </td>'+
                                '<td>'+scores[3]+' ms</td>'+
                            '</tr>'+
                            '<tr>'+
                                '<td>Trial 5 = </td>'+
                                '<td>'+scores[4]+' ms</td>'+
                            '</tr>';
                    $('.table-center').html(html);
                    var attemptscore = Math.round((+scores[0] + +scores[1] + +scores[2] + +scores[3] + +scores[4]) / 5);
                    $('#attemptscore').html(attemptscore+' ms');
                } else {
                    $('.next').css('display','block');
                    $('.save').css('display','none');
                }
                if(is_retry == 1){
                    $('#staticBackdrop').show();
                } else if(trial == 5) {
                    $('#retryattempt').hide();
                    $('#staticBackdrop').show();
                } else {
                    $('#greenDiv').css('display','none');
                    $('#continueDiv').css('display','flex');
                }
                // $('#attemptscore').text(milliseconds+ ' ms');
            })
            $('#continueDiv').on('click',function(){
                $('#continueDiv').css('display','none');
                $('.next').trigger("click");
            })
            $('#redDiv').on('click',function(){
                $('.notification').css('display','none');
                restart();
            })
            function restart(){
                $('.waitgreen').css('display','block');
                $('.tosoon').css('display','none');

                $('#greyDiv').css('display','flex');
                $('#greenDiv').css('display','none');
                $('#redDiv').css('display','none');

                isRetry = false;
                clearInterval(interval);
                interval = 0;
                start();
            }
            $('.next').on('click',function(){
                // scores.push(milliseconds);
                $('#staticBackdrop').hide();
                trial += 1;
                $('#attemptlevel').text(trial);
                $('.skewX-tab').removeClass('text-white active');
                $('.trial'+trial).addClass('text-white active');
                restart();
            });
            $('.retry').on('click',function(){
                $('#staticBackdrop').hide();
                restart();
            });
            $('.retryFromStart').on('click',function(){
                $('#result-popup').hide();
                restart();
            });
            $('.save').on('click',function(){
                let score = milliseconds;
                // scores.push(milliseconds);
                saveScore(score);
            });
            function saveScore(score){
                // $('.popup-btn').attr('disabled',true);
                $.ajax({
                    type : 'POST',
                    url : '{{ route("save-reaction-score") }}',
                    data : {
                        score : score,
                        scores : scores,
                        "_token" : "{{ csrf_token() }}"
                    },
                    success : function(data){
                        // $('.popup-btn').attr('disabled',true);
                        $('#staticBackdrop').hide();
                        // window.location.href = "{{ route('reaction-time') }}/#dashboard-table";
                        if(data.status == 'ok'){
                            $('.notification').css('display','block');
                            // $('.notification').html('Previously you were '+data.data.previous_avg+ ' score and now you are '+data.data.current_avg+'.<br> <a href="{{ route("reaction-time") }}/#dashboard-table">Click here</a> to see your stat result or play again!');
                            var html = '';
                            if(data.data.current_percentile > 0){
                                html += ' Currently you are at '+ data.data.current_percentile+ '% percentile';
                            }
                            if(data.data.is_better == 0){
                                $('.notification').html('Today your score is '+data.data.current_avg+' which is '+data.data.better_score+'% down than previous day!<br>');
                            } else {
                                $('.notification').html('Today your score is '+data.data.current_avg+' which is '+data.data.better_score+'% better than previous day. You are just '+data.data.away+'% away from your best score!<br> '+html);
                            }
                        } else {
                            // $('.notification').css('display','block');
                            // $('.notification').html('<a href="{{ route("reaction-time") }}/#dashboard-table">Click here</a> to see your stat result or play again!');
                        }
                        $('#result-popup').show();
                        if(state != ''){
                            $('.state').css('display','block');
                            $('.state').html('Your current cognitive state is '+state);
                        }
                        if(status != ''){
                            $('.status').css('display','block');
                            $('.status').html('Your current body health status is '+status);
                        }

                        isRetry = true;
                        $('.waitgreen').css('display','none');
                        $('.tosoon').css('display','block');
                        $('#greyDiv').css('display','none');
                        $('#greenDiv').css('display','none');
                        $('#redDiv').css('display','flex');

                        milliseconds = 0;
                        trial = 1;
                        scores = [];

                        $('#attemptlevel').text(trial);
                        $('.skewX-tab').removeClass('text-white active');
                        $('.trial'+trial).addClass('text-white active');
                    }
                })
            }
            $('.fa-info-circle').on('click',function(){
                $('#information-popup').css('display','block');
            })
            $('.fa-save').on('click',function(){
                $('#retry-popup').css('display','block');
            })
            $('.closeModal').on('click',function(){
                $('#information-popup').css('display','none');
                $('#result-popup').css('display','none');
                $('#retry-popup').css('display','none');
            })
            $('.closeSaveModal').on('click',function(){
                $('#result-popup').css('display','none');
                // history.back();
                window.location.href = "{{ route('reaction-time') }}";
            })
            $('#isRetry').on('change',function(){
                var value = $("#isRetry").is(":checked") ? 1 : 0;
                is_retry = value;
                if(is_retry == 1){
                    $('#retryattempt').show();
                }
                $.ajax({
                    type : 'POST',
                    url : '{{ route("update-statue") }}',
                    data : {
                        value : value,
                        '_token' : "{{ csrf_token() }}"
                    },
                    success : function(data){
                        $('#retry-popup').css('display','none');
                        $.notify('Data updated successfully!','success');
                    }
                })
            })
        })
        function redirect(){
            window.location.href = "{{ route('reaction-time') }}";
        }
    </script>
</body>
</html>
