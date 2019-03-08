<div id="fb-root"></div>
<script>
/*
status specifies the login status of the person using the app. The status can be one of the following:
connected - the person is logged into Facebook, and has logged into your app.
not_authorized - the person is logged into Facebook, but has not logged into your app.
unknown - the person is not logged into Facebook, so you don't know if they've logged into your app or FB.logout() was called before and therefore, it cannot connect to Facebook.
authResponse is included if the status is connected and is made up of the following:
accessToken - contains an access token for the person using the app.
expiresIn - indicates the UNIX time when the token expires and needs to be renewed.
signedRequest - a signed parameter that contains information about the person using the app.
userID - the ID of the person using the app.
Once your app knows the login status of the person using it, it can do one of the following:
If the person is logged into Facebook and your app, redirect them to your app's logged in experience.
If the person isn't logged into your app, or isn't logged into Facebook, prompt them with the Login dialog with FB.login() or show them the Login Button.
*/
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '517692821953021',
      cookie     : true,
      xfbml      : true,
      version    : 'v2.8'
    });
    FB.AppEvents.logPageView();   
  };


(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8&appId=517692821953021";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

  window.onload=function(){
    FB.getLoginStatus(function(response) {
      if(response.status=='connected'){
        alert("logged in");
      }
    });
  }
</script>
<div class="fb-login-button" data-max-rows="1" data-size="medium" data-show-faces="false" data-auto-logout-link="false"></div>