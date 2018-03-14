<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

html, body {
  margin: 0;
  padding: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color: #333632;
}

.topheader {
  color: #FFFFFF;
  text-align: center;
}

.lowerfont {
  font-size: 12px;
}

.fluff {
  color: white;
  text-align: center;
  font-size: 45px;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #DC7E00;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}

a:link {
    color: white;
}

/* visited link */
a:visited {
    color: white;
}

/* mouse over link */
a:hover {
    color: white;
}

/* selected link */
a:active {
    color: white;
}
</style>

</head>
<body>

<div class="topheader">
  <h1>My-MUSICLIST<br><div class="lowerfont">MUSIC TRACKING UTILITY</div></h1>
</div>

<div class="topnav">
  <a class="active" href="MWhome.php">Home</a>
  <a href="MWprofile.php">Profile</a>
  <a href="MWdiscovery.php">Discovery</a>
  <a href="MWlogin.php">Login</a>
  <a href="MWregistration.php">Registration</a>

  <div class="search-container">
    <form target="_blank" action='action.php'>
      <input type="text" placeholder="Search..">
      <button type="submit">Submit</button>
    </form>
  </div>
</div>

<p></p><p></p><p></p><p></p><p></p><p></p>
<div class ="fluff">
  <a href="https://www.apple.com/itunes/charts/songs/">TOP 100</a>
  <a href="https://www.discogs.com/search/?sort=want%2Cdesc&type=artist">Song Search</a>
  <a href="https://www.discogs.com/search/?sort=have%2Cdesc&type=release">Album Search</a>
  <a href="https://musicbrainz.org/search?query=justin+beiber&type=artist&limit=25&method=indexed">Artist Search</a>
</div>


</body>
</html>
