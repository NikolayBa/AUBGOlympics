
        <!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
</head>
<body>
<div class="container-fluid">

    <section class="team-section">
        <div class="container">
            <?php
            $fb = new Facebook\Facebook([
                'app_id' => '1277812225642978', // Replace {app-id} with your app id
                'app_secret' => '7f0e12c9fcbead55b65554c3856428ad',
                'default_graph_version' => 'v2.2',
            ]);

            # fb-login-callback.php
            $jsHelper = $fb->getJavaScriptHelper();
            // @TODO This is going away soon
            $facebookClient = $fb->getClient();
            //
            //    try {
            //        $accessToken = $jsHelper->getAccessToken($facebookClient);
            //    } catch(Facebook\Exceptions\FacebookResponseException $e) {
            //        // When Graph returns an error
            //        echo 'Graph returned an error: ' . $e->getMessage();
            //    } catch(Facebook\Exceptions\FacebookSDKException $e) {
            //        // When validation fails or other local issues
            //        echo 'Facebook SDK returned an error: ' . $e->getMessage();
            //    }
            //
            //    if (isset($accessToken)) {
            //        // Logged in.
            //    } else {
            //        // Unable to read JavaScript SDK cookie
            //    }
            //    $helper = $fb->getRedirectLoginHelper();
            //
            //    $permissions = ['email']; // Optional permissions
            ////    $loginUrl = $helper->getLoginUrl('https://example.com/fb-callback.php', $permissions);
            ////
            ////    echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
            //
            //    $fb = new Facebook\Facebook([
            //        'app_id' => '1277812225642978', // Replace {app-id} with your app id
            //        'app_secret' => '7f0e12c9fcbead55b65554c3856428ad',
            //        'default_graph_version' => 'v2.2',
            //    ]);
            //
            //    $helper = $fb->getRedirectLoginHelper();

            try {
                $accessToken = $jsHelper->getAccessToken();
            } catch(Facebook\Exceptions\FacebookResponseException $e) {
                // When Graph returns an error
                echo 'Graph returned an error: ' . $e->getMessage();
                exit;
            } catch(Facebook\Exceptions\FacebookSDKException $e) {
                // When validation fails or other local issues
                echo 'Facebook SDK returned an error: ' . $e->getMessage();
                exit;
            }

            if (! isset($accessToken)) {
                if ($jsHelper->getError()) {
                    header('HTTP/1.0 401 Unauthorized');
                    echo "Error: " . $jsHelper->getError() . "\n";
                    echo "Error Code: " . $jsHelper->getErrorCode() . "\n";
                    echo "Error Reason: " . $jsHelper->getErrorReason() . "\n";
                    echo "Error Description: " . $jsHelper->getErrorDescription() . "\n";
                } else {
                    header('HTTP/1.0 400 Bad Request');
                    echo 'Bad request';
                }
                exit;
            }

            // Logged in
            echo '<h3>Access Token</h3>';
            var_dump($accessToken->getValue());

            // The OAuth 2.0 client handler helps us manage access tokens
            $oAuth2Client = $fb->getOAuth2Client();

            // Get the access token metadata from /debug_token
            $tokenMetadata = $oAuth2Client->debugToken($accessToken);
            echo '<h3>Metadata</h3>';
            var_dump($tokenMetadata);

            // Validation (these will throw FacebookSDKException's when they fail)
            $tokenMetadata->validateAppId('1277812225642978'); // Replace {app-id} with your app id
            // If you know the user ID this access token belongs to, you can validate it here
            //$tokenMetadata->validateUserId('123');
            $tokenMetadata->validateExpiration();

            if (! $accessToken->isLongLived()) {
                // Exchanges a short-lived access token for a long-lived one
                try {
                    $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
                } catch (Facebook\Exceptions\FacebookSDKException $e) {
                    echo "<p>Error getting long-lived access token: " . $jsHelper->getMessage() . "</p>\n\n";
                    exit;
                }

                echo '<h3>Long-lived</h3>';
                var_dump($accessToken->getValue());
            }

            //$_SESSION['fb_access_token'] = (string) $accessToken;

            // User is logged in with a long-lived access token.
            // You can redirect them to a members-only page.
            //header('Location: https://example.com/members.php');

            //    session_start();
            //
            //    use Facebook\FacebookSession;
            //    use Facebook\FacebookRequest;
            //    use Facebook\GraphUser;
            //    use Facebook\FacebookRequestException;
            //    use Facebook\FacebookRedirectLoginHelper;
            //
            //    $api_key = '1277812225642978';
            //    $api_secret = '7f0e12c9fcbead55b65554c3856428ad';
            //    $redirect_login_url = 'http://www.yoursite.com/somefolder/file.php';
            //
            //$fb = new Facebook\Facebook([
            //    'app_id' => '1277812225642978',
            //    'app_secret' => '7f0e12c9fcbead55b65554c3856428ad',
            //    'default_graph_version' => 'v5.5',
            //]);

            try {
                // Returns a `Facebook\FacebookResponse` object
                $response = $fb->get('/me?fields=id,name', $accessToken->getValue());
            } catch(Facebook\Exceptions\FacebookResponseException $e) {
                echo 'Graph returned an error: ' . $e->getMessage();
                exit;
            } catch(Facebook\Exceptions\FacebookSDKException $e) {
                echo 'Facebook SDK returned an error: ' . $e->getMessage();
                exit;
            }

            $user = $response->getGraphUser();

            echo 'Name: ' . $user['name'];
            // OR
            return $accessToken->getValue();
            ?>
        </div>
    </section>
</div>
</body>

</html>
