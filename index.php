
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <script src="./js/bootstrap.bundle.min.js"></script>
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <link href="./css/css.css" rel="stylesheet">

    </head>
    <body class="bg-dark text-white">
    <?php include 'nav.php';?>


    <!-- Content wrapper start -->
    <div class="container content-wrapper">

        <!-- Row start -->
        <div class="row no-gutters">

            <div class="">
                <div class="selected-user">
                    <span class="name">Global Chat</span>
                </div>
                <div class="chat-container ">
                    <ul class="chat-box chatContainerScroll">
                        <li class="chat-left">
                            <div class="chat-avatar">
                                <img src="./images/default.png" alt="Retail Admin">
                                <div class="chat-name">Russell</div>
                            </div>
                            <div class="chat-text" style="background-color:#1E90FF;color:white">Hello, I'm Russell.
                                <br>How can I help you today?</div>
                            <div class="chat-hour">08:55 <span class="fa fa-check-circle"></span></div>
                        </li>
                        <li class="chat-right">
                            <div class="chat-hour">08:56 <span class="fa fa-check-circle"></span></div>
                            <div class="chat-text" style="background-color:#696969;color:white">Hi, Russellsss
                                <br> I need more information about Developer Plan.I need more information about Developer Plan.I need more information about Developer Plan.I need more information about Developer Plan.
                            </div>
                            <div class="chat-avatar">
                                <img src="./images/default.png" alt="Retail Admin">
                                <div class="chat-name">Sam</div>
                            </div>
                        </li>
                        <li class="chat-left">
                            <div class="chat-avatar">
                                <img src="./images/default.png" alt="Retail Admin">
                                <div class="chat-name">Russell</div>
                            </div>
                            <div class="chat-text" style="background-color:#1E90FF;color:white">Are we meeting today?
                                <br>Project has been already finished and I have results to show you.</div>
                            <div class="chat-hour">08:57 <span class="fa fa-check-circle"></span></div>
                        </li>
                        <li class="chat-right">
                            <div class="chat-hour">08:59 <span class="fa fa-check-circle"></span></div>
                            <div class="chat-text"  style="background-color:#696969;color:white">Well I am not sure.
                                <br>I have results to show you.</div>
                            <div class="chat-avatar">
                                <img src="./images/default.png" alt="Retail Admin">
                                <div class="chat-name">Joyse</div>
                            </div>
                        </li>
                        <li class="chat-left">
                            <div class="chat-avatar">
                                <img src="./images/default.png" alt="Retail Admin">
                                <div class="chat-name">Russell</div>
                            </div>
                            <div class="chat-text" style="background-color:#1E90FF;color:white">The rest of the team is not here yet.
                                <br>Maybe in an hour or so?</div>
                            <div class="chat-hour">08:57 <span class="fa fa-check-circle"></span></div>
                        </li>
                        <li class="chat-right ml-auto">
                            <div class="chat-hour">08:59 <span class="fa fa-check-circle"></span></div>
                            <div class="chat-text"  style="background-color:#696969;color:white">Have you faced any problems at the last phase of the project?</div>
                            <div class="chat-avatar">
                                <img src="./images/default.png" alt="Retail Admin">
                                <div class="chat-name">Jin</div>
                            </div>
                        </li>
                        <li class="chat-left">
                            <div class="chat-avatar">
                                <img src="./images/default.png" alt="Retail Admin">
                                <div class="chat-name">Russell</div>
                            </div>
                            <div class="chat-text" style="background-color:#1E90FF;color:white">Actually everything was fine.
                                <br>I'm very excited to show this to our team.</div>
                            <div class="chat-hour">07:00 <span class="fa fa-check-circle"></span></div>
                        </li>
                    </ul>
                    <form>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Type your message here..." aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-outline-light" type="submit" id="button-addon2">Send</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
    <!-- Content wrapper end -->


        
    </body>
    </html>