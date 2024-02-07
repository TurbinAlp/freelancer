<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <style>
        .navbar {
            background-color: #117864;
        }

        .navbar-brand {
            color: #ffffff;
            font-weight: bold;
        }

        .navbar-nav .nav-item {
            margin-right: 15px;
        }
        .message {
            margin-bottom: 10px;
        }
        .message.sent {
            text-align: right;
            background-color: #cce5ff;
            padding: 10px;
            border-radius: 10px;
        }
        .message.received {
            text-align: left;
            background-color: #f8f9fa;
            padding: 10px;
            border-radius: 10px;
        }
        .chat-box {
            border: 1px solid #ced4da;
            border-radius: 10px;
            padding: 10px;
        }
    </style>
    <title>Inbox</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="index.html">Logo</a>
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Notification</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="https://via.placeholder.com/30" alt="Profile" class="rounded-circle">
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-4 border border-end-1">
                <!-- First Column: List of people who sent you messages -->
                <h3>People</h3>
                <div class="card border-end-0 border-start-0 border-top-0 border-bottom-1 mb-3" >
                    <div class="col card-body">
                        <div class="row">
                            <!-- Picture -->
                            <div class="col-sm-3">
                                <img src="https://via.placeholder.com/100" class="rounded-circle" alt="Person 1">
                            </div>
                            <!-- Full name, username, and date -->
                            <div class="col-md-6 p-3">
                                <h5 class="card-title">Person 1</h5>
                                <p class="card-text">@username1</p>
                            </div>
                            <div class="col-sm-3 ml-auto text-right  mt-3">
                                <p class="card-text">jan 1, 2024</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-md-8">
                <!-- Second Column: Conversation and message input -->
                <h3>Messgaes</h3>
                <div class="chat-box">
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="message sent">Your message 1</div>
                            <div class="message received">Their message 1</div>
                            <div class="message sent">Your message 2</div>
                            <div class="message received">Their message 2</div>
                        </div>
                        <form class="col border rounded-2 mt-3">
                            <div class="row d-flex h-100">
                                <div class="col-9"><input  type="text" class="form-control" placeholder="Type your message"></div>
                                <div class="col-1 align-self-end ml-auto"><button class="btn btn-primary">Send</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
