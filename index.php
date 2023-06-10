<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechSPARKS Interbarangay ML Tournament 2023</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="techsparks.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- meta tags -->
    <meta property="og:title" content="TechSPARKS Interbarangay Mobile Legends Tournament 2023" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://tsibml.k4th.site" />
    <meta property="og:image" content="https://tsibml.k4th.site/poster.png" />
    <meta property="og:description" content="Official Website for TechSPARKS IBMLT 2023!" />
    <meta name="theme-color" content="#004AAD">

    <!-- Include this to make the og:image larger -->
    <meta name="twitter:card" content="summary_large_image">
</head>
<body>
    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "113358421781727");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v17.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    <?php include 'nav.php';?>
    <div class="container">
        <div class="row g-0">
            <div class="col">
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Attention!</h4>
                    <p>Registration for ML Teams is now <b>CLOSED!</b> Thank you for supporting this event and we hope to see you on Opening and Pay-Per-View Event.</p>
                </div>
                <div class="alert alert-warning">Watch the opening (June 14) on <a href="https://www.facebook.com/techsparksorg" class="alert-link">Facebook Page of TechSPARKS!</a></div>
            </div>
        </div>
        <div class="row g-0">
            <img src="poster.png" alt="Poster of IBML">
        </div><br>
        <div class="row g-0">
            <center>
                <h1>Live Leaderboard</h1>
                <iframe src="https://brackethq.com/b/j1ljb/embed/" width="90%" height="600" frameborder="0"></iframe>
                <br><br>
                <h1>Live Statistics</h1>
                <iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vS6e2JdRGCaFi8MzW43Zq4o0iqAY6CkVJfOiKcZHMW_9IByeyPKwffxZoapU4_OwSfnT-RxgmGWdvGI/pubhtml?widget=true&amp;headers=false" width="90%" height="900"></iframe>
            </center>
        </div><br>
        <div class="row g-0">
            <div class="col">
                <center>
                <button type="button" class="btn btn-primary btn-lg btn-block" onclick="window.location.href='https://www.facebook.com/techsparksorg';">Visit our Facebook Page</button>
                </center>
            </div>
        </div>
</body>
</html>
