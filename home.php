<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aahara Meals</title>


    <!-- <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    />-->
<style>
@import url("https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap");
@import url('https://fonts.googleapis.com/css2?family=Lobster&family=Oswald:wght@500&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap');

.icon{
  background-color:#f6f9fa;

  color: black;
  list-style-type: none;
  margin-top: 23px;
  margin-left:1px;

  display: flex;
  /* justify-content: space-evenly; */
}

.icon .photos .icon1 img
{
  margin-left:1px;
  width: 20px;
  height:20px;
  background-color: rgb(0, 0, 0);
  
}
.icon .Videos .icon1 img
{
  width: 20px;
  height:20px;
}
.icon .document .icon1 img
{
  width: 20px;
  height:20px;
}
.icon .Location .icon1 img
{
  width: 20px;
  height:20px;
}
.icon1{

  font-size:18px;
  color: rgb(0, 0, 0);
}
.post  img{
  position: absolute;

 


}

body{
  background-color:#e3e1e1;
  
}

header{
    display:flex;
    justify-content: space-between;
    z-index: 2000;
}
.display img
{
    
    /* display:flex;
    align-items: center;
    color: grey; */
    margin-left:30px;

}
a{

  display:flex;
  justify-content: space-between;
}
button
{
  font-size: 15px;
  color:#0E738A;
}
button{
  border: 0;
    border-radius: 50px;
    width: 500px;
    height: 50px;
}

#button-post
{
  margin-left: 120px;
  margin-top: 15px;
  font-size: 15px;
  color:#0E738A;
  border: 0;
    border-radius: 50px;
    width: 500px;
    height: 50px;
}
 ul{
  background-color: #BDE7F4;
   margin: 0;
  padding: 0; 
   overflow: hidden; 
  list-style-type: none;
} 
li {
  font-family: "Roboto", sans-serif;
  font-size: 20px;
  font-weight: 500;
  color: rgb(230, 226, 226);
}
.title {
  font-family: "Oswald", sans-serif;
  font-size: 19px;
  font-weight: 500;
  color: white;
}
li {
  float: right;
  margin: 20px;
}
header {
  display: flex;
  align-items: center;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  height: 100px;
  background-color: #BDE7F4;
}
li a {
  display: block;
  color:rgb(14, 115, 138);
  text-align: center;
  padding: 16px;
  text-decoration: none;
}

.request{
  font-family: 'Ubuntu', sans-serif;
  position: absolute; 
  width: 400px;
  height: 600px;
  left:70%;
  top: 110px;
  background: #0E738A;
  text-align: center;
  color: #ffffff;
  font-size: 30px;
  border: 10px solid #ffffff;
  box-shadow: 10px 10px 10px 10px #878585;
}


.board_content
{
  margin-top: 10px;
  list-style-type: square;
  text-align: left;
}
.RQB{
  background-color: #0E738A;
  margin-right: 60px;
  padding: 0;
  overflow: hidden;
  list-style-type: square;
  align-items: left;
   display:inline-block;
}
.post
{
 margin-top:110px;
 margin-left:240px;
  width:700px;
  height:200px;
  background-color: #f6f9fa;
  
} 
 .post .pimg button
{
  
    border-radius: 50px;
    width: 550px;
    height: 60px;
    margin-top:23px;
    margin-left:130px;
    display:flex;
    align-items: center; 
}

.post .pimg img
{
  position: absolute;
  height:60px;
  width:60px;
  border-radius: 50%;
  margin-top: 15px;
  margin-left: 50px;
 display:flex;
 justify-content:space-between;
 
}

.upost{
  border:2px solid #d9d9d9;
}

.twopost
{
  border:2px solid #d9d9d9;
}

.RQB li{
  margin-left: 20%;
}

.upost
{
 margin-top:50px;
 margin-left:240px;
  width:700px;
  height:480px;
  background-color: #f6f9fa;
} 

 .upost .uimg
{
  
    border-radius: 50px;
    width: 550px;
    height: 60px;
    margin-top:15px;
    display: flex;
    align-items: left;
}
.upost .pimg
{
 margin-top:5px;
 margin-left: 140px;
}

.upost .uimg img
{
  position: absolute;
  height:60px;
  width:60px;
  border-radius: 50%;
  margin-top: 15px;
  margin-left: 50px;
 display:flex;
 align-items: left;

 
}
.upost .secondpost img
{
  width: 700px;
  height:300px ;
}

input{
  border-radius: 15px;
}

.req-button
{
  border-radius: 0%;
  width:120px;
  height: 40px;
  margin-left: 60px;
  box-shadow: #97c8d3;
}

.req-button a{
  text-decoration: none;
  display:flex;
  justify-content:center;
  align-items:center;
  color: black;
}

.post{
  border:2px solid #d9d9d9;

}

.likeshare img
{
  width: 20px;
  height:20px;
}
.likeshare
{
  display: flex;
  justify-content: space-evenly;
  margin-top:10px
}

.twopost
{
 margin-top:50px;
 margin-left:240px;
  width:700px;
  height:480px;
  background-color: #f6f9fa;
} 
.secondpost .twopost{
  margin-top:50px;
  margin-left:240px;
   width:700px;
   height:400px;
   background-color: #f6f9fa;
}


.twopost .twoimg 
{
  
    border-radius: 50px;
    width: 550px;
    height: 60px;
    margin-top:15px;
    display: flex;
    align-items: left;
}
.twopost .twoimg img 
{
  position: absolute;
  height:60px;
  width:60px;
  border-radius: 50%;
  margin-top: 15px;
  margin-left: 0px;
 display:flex;
 align-items: left;

 
}
.twopost .secondpost img 
{
  width: 700px;
  height:300px ;
}
.twopost .twoimg 
{
 margin-top:5px;
 margin-left: 60px
}
.twopost .twoimg p
{
  margin-left: 90px;
}

.like p{
  margin-left:-8px;
}
.share p{
  margin-left:-10px;

}
.comment p{
  margin-left:-18px;
}
</style>
  </head>
  <body>
    <header>
      <div class="display">
        <img
          class="logo"
          src="brandnewlogo.png"
          alt="logo"
          height="60px"
          width="60px"
        />
      </div>
      <div class="Searchbar">
        <a><button>Search</button></a>
      </div>
      <nav background-color="#0E738A">
        <ul>
        <li>
            <b><a href="about_me.php">Profile</a></b>
          </li>
          <li>
            <b><a href="chat/login.php">Messages</a></b>
          </li>
          <li>
            <b><a href="Notification.php">Notifications</a></b>
          </li>
          <li>
            <b><a href="explore.php">Explore</a></b>
          </li>
          <li>
            <b><a href="home.php">Home</a></b>
          </li>
        </ul>
      </nav>
    </header>
    <div class="request">
      <u>Request Board</u>
      <div class="board_content">
        <ul class="RQB">
          <li>5 volunteers needed by Helping Hands</li>
          <li>Access food pick up at Vasco at 12</li>
          <li>Urgent meals needed at these locations</li>
          <li>2 volunteers needed by Sunshine NGO</li>
        </ul>
      </div>
      <div class="req-button">
        <button class="req-button"><b>Add request<b></button>
      </div>
    </div>
    <div class="post">
      <div class="pimg">
        <img src="profpic.jpg" alt="profpic" />
        <input type="text" placeholder="Write a post" id="button-post" />
      </div>

      <br />
      <div>
        <ol class="icon">
          <div class="photos">
            <li class="icon1">
              <img src="camera.jpeg" />
            </li>
            <li class="icon1">Photos</li>
          </div>
          <div class="Videos">
            <li class="icon1"><img src="video.jpeg" alt="Videos" /></li>
            <li class="icon1">Videos</li>
          </div>
          <div class="document">
            <li class="icon1"><img src="document.jpeg" alt="Document" /></li>
            <li class="icon1">Documents</li>
          </div>
          <div class="Location">
            <li class="icon1"><img src="location.jpeg" alt="location" /></li>
            <li class="icon1">Location</li>
          </div>
        </ol>
      </div>
    </div>

    <div class="upost">
      <div class="uimg">
        <img src="profpic.jpg" />
        <div class="pimg">
          <p>
            Vivek Paste<br />
            Founder of ...<br />
            3h
          </p>
        </div>
      </div>
      <br /><br />
      <div class="secondpost">
        <img src="background_pic.jpeg" alt="post2" />
      </div>
      <div class="likeshare">
        <div class="like">
          <img src="like.png" alt="like" />
          <p>Like</p>
        </div>
        <div class="share">
          <img src="share.png" alt="share" />
          <p>Share</p>
        </div>
        <div class="comment">
          <img src="comment.png" alt="comment" />
          <p>Comment</p>
        </div>
      </div>
    </div>
    <div class="twopost">
      <div class="twoimg">
        <img src="2.png" />
        <div class="pimg">
          <p>
            Aayush Mehra<br />
            Founder of ...<br />
            4h
          </p>
        </div>
      </div>
      <br /><br />
      <div class="secondpost">
        <img src="backpic2.jpg" alt="post2" />
      </div>
      <div class="likeshare">
        <div class="like">
          <img src="like.png" alt="like" />
          <p>Like</p>
        </div>
        <div class="share">
          <img src="share.png" alt="share" />
          <p>Share</p>
        </div>
        <div class="comment">
          <img src="comment.png" alt="comment" />
          <p>Comment</p>
        </div>
      </div>
    </div>
   
  </body>
</html>
