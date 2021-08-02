<html>
  <head>
     <title>Multilives connect</title>

     <style>

body { padding: 2em; }


/* Shared */
.loginBtn {
  box-sizing: border-box;
  position: relative;
  /* width: 13em;  - apply for fixed size */
  margin: 0.2em;
  padding: 0 15px 0 46px;
  border: none;
  text-align: left;
  line-height: 34px;
  white-space: nowrap;
  border-radius: 0.2em;
  font-size: 16px;
  color: #FFF;
}
.loginBtn:before {
  content: "";
  box-sizing: border-box;
  position: absolute;
  top: 0;
  left: 0;
  width: 34px;
  height: 100%;
}
.loginBtn:focus {
  outline: none;
}
.loginBtn:active {
  box-shadow: inset 0 0 0 32px rgba(0,0,0,0.1);
}

a {
    color: #FFFFFF;
    text-decoration: none;
}

/* Facebook */
.loginBtn--facebook {
  background-color: #4C69BA;
  background-image: linear-gradient(#4C69BA, #3B55A0);
  /*font-family: "Helvetica neue", Helvetica Neue, Helvetica, Arial, sans-serif;*/
  text-shadow: 0 -1px 0 #354C8C;
}
.loginBtn--facebook:before {
  border-right: #364e92 1px solid;
  background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_facebook.png') 6px 6px no-repeat;
}
.loginBtn--facebook:hover,
.loginBtn--facebook:focus {
  background-color: #5B7BD5;
  background-image: linear-gradient(#5B7BD5, #4864B1);
}



     </style>
  </head>


<body>

<?php 

    require_once __DIR__.'/vendor/autoload.php'; // change path as needed

    $fb = new Facebook\Facebook([
    'app_id' => '471671317346225',
    'app_secret' => 'f323c87224497155e64511515b0b0977',
    'default_graph_version' => 'v2.10',
    ]);
  
  $helper = $fb->getRedirectLoginHelper();
  
  $permissions = ["public_profile", "email", "pages_show_list", "pages_read_engagement", "publish_video", "publish_to_groups", "pages_manage_posts", "groups_access_member_info", "user_videos"]; // Optional permissions
  $loginUrl = $helper->getLoginUrl('http://127.0.0.1/multilives/fb-callback.php', $permissions);
  
?>

<button class="loginBtn loginBtn--facebook">
  <?php echo '<a href="' . $loginUrl . '">Se connecter avec Facebook</a>'; ?>
</button>

</body>
</html>
