<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Laravel CRUD</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="stylesheet" href="../resources/css/app.css"> -->
        
        {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet"> --}}
   <style>
   body{
    background-color: #0d0d0e;
    color: whitesmoke;
    font-family: monospace !important;
   }
html{
  scroll-behavior: smooth;
}
.home{
  text-align: center;
  height: 50px;
  /* width: auto; */
  font-size: 15px;
  margin-left: 15px;
  font-family: monospace;
}
.nav_hold{
  position: -webkit-sticky;
  position: sticky;
  top: 0;
}
.lf_me:hover{
  text-shadow: 2px 2px 2px #000000;
}
code {
  font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: subpixel-antialiased;
}
.h1{
  /* top: 0; */
  margin-left: 10px;
  padding-top: 10px;
  position: relative;
  width: 190px;
  border-bottom-right-radius: 0px;
  transition: .25s;
  color: rgb(224, 220, 220) !important;
  cursor: pointer;
  height: 70px; 

 
}
.nav_stick{
  width: auto;
  display: grid;
  background-color: #3a3a3a;
  grid-template-columns: repeat(2,1fr);
  position: sticky;
}
.h1:hover{
  
  
  text-shadow:1px 1px  rgba(255, 49, 49, 0.5),
  2px 2px 5px rgb(255, 11, 11);

  
}
/* .card_1{
  background-color: black;
} */

.b1{
  
  position: relative;
  width: 0px;
  height: 0px;
  padding-right: -5px;
  display: inline-block;
  border-left: 0px solid #680a0a;
  border-right: 0px solid #680a0a;
  border-top: 0px solid #680a0a;
  transform: scaleX(2);
  transform: scaleY(1);
  margin-right: 15px;
  cursor: pointer;
  color:#f0f0f0!important;
  transition: .5s;
 background-color:rgb(255, 22, 22);
  text-decoration: none !important;
  

  

}

.b1:hover{
  /* height: 2em; */
  width: 4em;
  transform: scaleY(1);
  transform: scaleX(1);
  border-top-right-radius:20px ;
  border-bottom-right-radius:20px ;
  border-bottom: 4px rgb(255, 22, 22) solid;
  background-color:rgb(255, 22, 22);
  /* transform: scaleX(1); */
  color: #f0f0f0 !important;
  border-bottom-left-radius: 20px solid rgb(255, 22, 22);
}

.nav_item{
  height: 30px;
  /* opacity: 1; */
 
}
.b_1{
  margin-right: -20px;
  /* width: 80px; */
}

.nav_items{
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  float: right;
  color:#f0f0f0;
  width: 400px;
  background-color: transparent;
  margin-left: 135px;
  margin-top: 22px;
  /* height: 60px; */
  text-align: center;

}

#dp{
  color:#f0f0f0;
  margin-top: 20px;
  border-top: 2px solid #8480806d;
  display: grid;
  grid-template-columns: repeat(2,12fr);
}

/* .P_1,.P_2,.P_3,.P_4{
  height: 500px;
  text-align: center;
  /* width: 100%; */
 
/* } */ 

.P_1{
 width: 330px;
 max-height: 400px;
 display: grid;
 /* padding: 10px; */
 grid-auto-flow: row;
 overflow-y: auto;
 border-right:2px solid #797979d0;
 /* border-top-right-radius: 20px; */
}
.P_1::-webkit-scrollbar{
  display: none;
}


.cc{
  display: grid;
  float: right;
  padding: 5px;
  text-align: center;
  transition: .25s;
}
.bt{
  border-bottom-left-radius: 20px  ;
  border-top-right-radius: 20px  ;
  border-bottom: 1px solid rgb(255, 22, 22);
  border-top: 1px solid rgb(255, 22, 22);
  margin-top: 10px;
}
.b-d{
  /* position:absolute ; */
  margin-right: 10px;
  width:80px;
}
.p-d{
  /* float: right; */
  margin-top: -25px;
}

.u_n{
  text-align: left;
  /* margin-right: 20px; */
  /* max-width: 30px; */
  padding-left: 40px;
  margin-top: -60px;
  transition: .25s;
  font-weight: bolder;
  color: whitesmoke;
  
}
.card_1:hover .u_n{
  margin-left: 85px;
  /* margin-top: 10px; */
}
.P_1>.card_1{
  position:relative ;
  width: 300px;
  height: 100px;
  background-color: rgb(42, 42, 42);
  cursor: pointer;
  margin: 5px;
  border-bottom-left-radius: 20px;
  border-top-right-radius: 20px;
  /* border-top:2px solid #ff0606;*/
  border-bottom:2px solid #545454; 
  transition:ease-in .25s;
  /* opacity: 0.7; */
  max-height: 80px;
}
#pi{
  margin-top: 10px;
  width: 60px;
  height: 59px;
}
.P_1>.card_1:hover{
  opacity: 1;
  transform: rotate(-2deg) skew(-2deg, 2deg);
  box-shadow:4px 4px  rgba(255, 22, 22, 0.5),
  8px 8px  rgba(255, 22, 22, 0.4),
  12px 12px  rgba(255, 22, 22, 0.3),
  16px 16px 30px rgb(255, 22, 22);
  min-height: 80px;
  max-height: 80px;
  width: 300px;
}
.card_1:hover #pi{
  width: 70px;
  height: 69px;
  margin-top: 5px;
  margin-left: 10px;
}


a, a:hover, a:focus, a:active ,a:active, a:focus , a:link ,a:visited {
  text-decoration: none;
  color:#f0f0f0!important;
} 
a{
  text-decoration: none !important;
}
.br{
  margin-top: 10px;
  margin-bottom: 10px;
  width: 100%;
  height: 2px;
  background-color: #8480806d;
}

.P_2{
margin-right: 50px;
  width: 940px;
  margin-left: 150px;
  max-height: 500px;
  grid-auto-flow: row;
  display: grid;
  overflow-y: auto;
  grid-template-columns: 1,1fr;
  grid-template-rows: 1,1fr;
 
}

.P_2>.card_1>.c-img{
  display: unset;
  position: static;
  width:930px;
  margin: 10px;
  height: 420px;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
  transition: .5s;
  
}
.P_2::-webkit-scrollbar{
  display: none;
}
.P_2>.card_1{
  display: grid;
}
.P_2>.card_1{
 
 margin-top: -20px;

  width: 940px;
  margin-right: 0px;
 opacity: 1;
 height: 100%;
 text-align: center;

}


.card_1>.img{
  border-radius: 50%;
  width: 50px;
  height: 48px;
  margin-top: 5px;
  margin-left: 5px;
  border: 2px dashed #ff0606;
  transition: .25s;
}
.P_2>.card_1>.p-d{
  opacity: 1;
  /* width: 100%; */
  /* display: unset; */
  position: relative;
  /* min-height: 470px; */
  /* max-height: 480px; */
  /* margin-top: -200px;
  margin-left: 900px; */
  background-color: transparent;
}
.P_2>.card_1::-webkit-scrollbar{
  display: none;
}
.P_2>.card_1>#pi{

  width: 180px;
  height: 178px;
  position:relative;
  border-radius: 50%;
  margin-top: -100px;
  margin-left: 20px;
  border:4px solid rgb(255, 22, 22)
  ;
  outline: 4px solid #333333;

  transition: .25s;

}
.P_2>.card_1>#pi:hover{
  border:5px dashed rgb(255, 22, 22)
  ;
}
.P_2>.card_1>.u_n{
  font-weight: bolder;
  margin-top: -50px;
  max-width: 600px;
  /* display: inline-block; */
  font-size: 30px;
  margin-left: 185px;
  /* text-align: center; */
}


.P_2>.card_1>.p-d>.b-c{
  padding-left: 20px;
  padding-right: 20px;
  height: 40px;
  border-top: 2px solid rgb(255, 22, 22);
  border-bottom: 2px solid rgb(255, 22, 22);
}
.P_2>.card_1>.p-d>.b-d{
  padding-left: 30px;
  padding-right: 30px;
  width: 100px;
  height: 40px;
  border-top: 2px solid rgb(255, 22, 22);
  border-bottom: 2px solid rgb(255, 22, 22);
}

.P_2>.card_1>.p-d{
  /* float:inherit ; */
  /* display:grid;  */
  margin-top: -65px;
  margin-right: 20px;
  margin-left: 440px;
  position:relative ;
  /* padding: 20px; */
  text-align: center;

}
.P_2>.card_1>.detail{
  display: unset;
  /* position:absolute ; */
  border-top: 2px solid #8480806d;
  width: 920px;
  height: 300px;
  margin-left: 10px;
  margin-top: 20px;
  background-color: transparent;


}

.c-img{
  opacity: 0.5;
}
/* .card_1:hover .body-1>.P_2{
  opacity: 1;
} */

.P_2>.card_1>.c-img:hover{
  opacity: 0.7;
  /* height: 400px; */
  


}



 .cp{
  background-color: #0d0d0e;
  height: 0px;
  display: none;
  /* margin-left: -200px; */
  /* font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; */
 }
 .P_2>.detail{
  display: grid;
  grid-template-rows: repeat(1,1fr);
  row-gap: 10px;
 }
 .intro{
  text-align: left;
  background-color: #232323;
  width: 700px;
  margin-left: 130px;
  border-radius: 10px;
 }
 .bio{
  margin: 30px;
  width: 650px;
  height: 80px;
  border-bottom: 2px solid #4e4e4e;
 }
 /* .int{
  /* margin: 10px; */
  
 .bio{
  margin-left: 31px;
  /* margin-bottom: 20px; */
 }
 .about{
  display: grid;
  grid-template-rows: repeat(1,12fr);
  float: left;
  text-align: left;
  width: 100%;
  margin-left: 31px;
 }
 .about>div{
  margin-bottom: 15px;
 }
 span{
  opacity: 0.7;
  
 }
 .span{
  font-size: 15px;
  
 }
 .highlight{
  /* text-align: left; */
  
  margin-top: 100px;
  display: grid;
  grid-template-columns: repeat(1,1fr);
  overflow-x: auto;
  /* width: 100%; */
  
  /* border-top: 2px solid #4e4e4e; */

 }
 .highlight_items{
  margin-top: 5px;
  display: grid;
  grid-template-columns: repeat(8,1fr);
  overflow-x: auto;
  margin-left: 31px;
  width: 640px;
  margin-bottom: 50px;
 }
 .highlight_item{
  width: 152.833px;
  height: 271.698px;
  margin-right: 10px;
  background: #292929;
  border-bottom-left-radius: 30px;
  border-top-right-radius: 30px;
  border-top: 3px solid #ff0000;
  border-bottom: 3px solid #ff0000;
 }
 .highlight_items::-webkit-scrollbar{
  display: none;
}
.friends{
  margin-top: 20px;
  margin-left: 130px;
  width: 700px;
  background-color: #232323;
  /* display: grid; */
  text-align: left;
  height: 810px;
  /* border: 2px solid #4e4e4e; */
  border-radius: 10px;
  color: #ffffff;
}
.fr_n{
  margin-top: 20px;
  font-size: 23px;
  margin-left: 31px;
}
.firend_list{
  
  width: 210px;
  height: 210px;
  background-color: #323232;
  margin-right: 8px;
  /* column-gap: 15px; */
  margin-bottom: 45px;
  border-bottom-left-radius: 20px;
  border-top-right-radius: 20px;
  border-top: 2px solid #ff0000;
  border-bottom: 2px solid #ff0000;
}
.friend_list{
  margin-top: 10px;
  margin-left: 31px;
  /* margin-left: 0px; */
  width: 640px;
  display: grid;
  grid-template-columns: repeat(3,1fr);
  grid-template-rows: repeat(3,1fr);
  /* height: 300px; */
}
.photos{
  margin-top: 20px;
  margin-left: 130px;
  background-color: #232323;
  width: 700px;
  height: 700px;
  border-radius: 10px;
  color: #ffffff;
  text-align: left;
}
.ph_n{
  margin-top: 25px;
  font-size: 25px;
  margin-left: 31px;
}
.photo_album{
  border-top-left-radius: 10px;
  border-bottom-left-radius: 10px;
  border-top-right-radius: 10px;
  border-bottom-right-radius: 10px;
  margin-left: 31px;
  width: 650px;
  /* border: 10px solid #232323 ; */
  height: 640px;
  display: grid;
  grid-template-columns: repeat(3,1fr);
  grid-template-rows: repeat(3,1fr);
}
.photo_item{
  width: 212px;
  height: 212px;
  background-color: #2e2e2e;
  margin-bottom: 4px;
  
}
.sa_p{
  color:rgb(13, 13, 234) !important;
  cursor: pointer;
  float: right;
  font-size: 18px;
  margin-top: 10px;
  margin-top: 5px;
  margin-right: 27px;
}
.pi_1{
  border-top-left-radius: 10px;
  border-top: 2px solid #ff0000;
}
.pi_2{
  border-top: 2px solid #ff0000;
}
.pi_3{
  border-top-right-radius: 10px;
  border-top: 2px solid #ff0000;
}

.pi_7{
  border-bottom-left-radius: 10px;
  border-bottom: 2px solid #ff0000;
}
.pi_8{
  border-bottom: 2px solid #ff0000;
}
.pi_9{
  border-bottom-right-radius: 10px;
  border-bottom: 2px solid #ff0000;
}
#su{
  display: none;
}
#user{
  display: none;
}

/* User Profile */
.pf_hold{
 max-height: 700px;
  overflow-y: auto;
}
.pf_hold::-webkit-scrollbar{
  display: none;
}
.P_f{
  color: white;
  margin-left: 160px;
}
.pf{
  background-color: #323232;
  width:1263.4px;
  margin-left: -160px;
  height: 600px;
 }
.P_f>.data{
  display: grid;
  grid-template-rows: repeat(1,1fr);
  row-gap: 10px;

}
.pf>.card_1>.c-img{
  display: unset;
  position: static;
  width:930px;
  margin: 10px;
  height: 420px;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
  transition: .5s;
  
}
.P_f::-webkit-scrollbar{
  display: none;
}
.pf>.card_1{
  display: grid;
}
.pf>.card_1{
 
 margin-top: -20px;
  margin-left: 160px;
  width: 940px;
  margin-right: 0px;
 opacity: 1;
 height: 100%;
 text-align: center;

}


.card_1>.img{
  border-radius: 50%;
  width: 50px;
  height: 48px;
  margin-top: 5px;
  margin-left: 5px;
  border: 2px dashed #ff0606;
  transition: .25s;
}
.pf>.card_1>.p-d{
  opacity: 1;
  /* width: 100%; */
  /* display: unset; */
  position: relative;
  /* min-height: 470px; */
  /* max-height: 480px; */
  /* margin-top: -200px;
  margin-left: 900px; */
  background-color: transparent;
}
.pg>.card_1::-webkit-scrollbar{
  display: none;
}
.pf>.card_1>#pi{

  width: 180px;
  height: 178px;
  position:relative;
  border-radius: 50%;
  margin-top: -100px;
  margin-left: 20px;
  border:4px solid rgb(255, 22, 22)
  ;
  outline: 4px solid #333333;

  transition: .25s;

}
.pf>.card_1>#pi:hover{
  border:5px dashed rgb(255, 22, 22)
  ;
}
.pf>.card_1>.u_n{
  font-weight: bolder;
  margin-top: -50px;
  max-width: 600px;
  /* display: inline-block; */
  font-size: 30px;
  margin-left: 185px;
  /* text-align: center; */
}


.pf>.card_1>.p-d>.b-c{
  padding-left: 20px;
  padding-right: 20px;
  height: 40px;
  border-top: 2px solid rgb(255, 22, 22);
  border-bottom: 2px solid rgb(255, 22, 22);
}
.pf>.card_1>.p-d>.b-d{
  padding-left: 30px;
  padding-right: 30px;
  width: 140px;
  height: 40px;
  border-top: 2px solid rgb(255, 22, 22);
  border-bottom: 2px solid rgb(255, 22, 22);
}

.pf>.card_1>.p-d{
  /* float:inherit ; */
  /* display:grid;  */
  margin-top: -65px;
  margin-right: 20px;
  margin-left: 440px;
  position:relative ;
  /* padding: 20px; */
  text-align: center;

}
.pf>.card_1>.detail{
  display: unset;
  /* position:absolute ; */
  border-top: 2px solid #8480806d;
  width: 920px;
  height: 300px;
  margin-left: 10px;
  margin-top: 20px;
  background-color: transparent;


}

.c-img{
  opacity: 1;
  cursor: pointer;
}
img{
  cursor: pointer;
}
/* .card_1:hover .body-1>.P_2{
  opacity: 1;
} */

.pf>.card_1>.c-img:hover{
  opacity: 0.7;
  /* height: 400px; */
  


}









 .cp{
  background-color: #0d0d0e;
  height: 0px;
  display: none;
  /* margin-left: -200px; */
  /* font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; */
 }
 /* User Profile */
 .P_f>.detail{
  display: grid;
  grid-template-rows: repeat(1,1fr);
  row-gap: 10px;
 }
 
 .data{
  display: grid;
  grid-template-columns: repeat(2,1fr);
 }
 .u_int{
  padding-top: -15px;
 }
 .u_intro{
  text-align: left;
  padding-top: -10px;
  background-color: #323232;
  width: 360px;
  margin-left: 10px;
  border-radius: 10px;
 }
 .u_bio{
  margin: 20px;
  width: 340px;
  height: 80px;
  border-bottom: 0px solid #4e4e4e;
 }
 /* .int{
  /* margin: 10px; */
  
 .u_bio{
  margin-left: 20px;
  /* margin-bottom: 20px; */
 }
.u_edit_bio{
  width: 300px;
  text-align: center;
  font-size: 15px;
  font-weight: lighter;
  margin-left: 10px;
  height: 40px;
  margin-top: 10px;
  padding-top: 6px;
  background-color: #525252;
  /* border: 2px solid; */
  border-radius: 10px;
  cursor: pointer;
}

 .u_about{
  display: grid;
  grid-template-rows: repeat(1,12fr);
  float: left;
  text-align: left;
  width: 100%;
  margin-left: 20px;
 }
 .u_edit_detail{
  width: 300px;
  text-align: center;
  font-size: 15px;
  font-weight: lighter;
  margin-left: 10px;
  height: 40px;
  margin-top: 10px;
  padding-top: 6px;
  background-color: #525252;
  /* border: 2px solid; */
  border-radius: 10px;
  cursor: pointer;
}
 .u_about>div{
  margin-bottom: 5px;
 }
 span{
  opacity: 0.7;
 }
 .u_highlight{
  /* text-align: left; */
  
  margin-top: 90px;
  display: grid;
  grid-template-columns: repeat(1,1fr);
  overflow-x: auto;
  /* width: 100%; */
  
  /* border-top: 2px solid #4e4e4e; */

 }
 .u_highlight_items{
  margin-top: 5px;
  display: grid;
  grid-template-columns: repeat(8,1fr);
  overflow-x: auto;
  margin-left: 20px;
  width: 330px;
  margin-bottom: 10px;
 }
 .u_highlight_item{
  width: 101.333px;
  height: 180.146px;
  margin-right: 10px;
  background: #292929;
  border-bottom-left-radius: 20px;
  border-top-right-radius: 20px;
  border-top: 2px solid #ff0000;
  border-bottom: 2px solid #ff0000;
 }
 .u_highlight_items::-webkit-scrollbar{
  display: none;
}
.u_edit_highlight{
  width: 300px;
  text-align: center;
  font-size: 15px;
  font-weight: lighter;
  margin-left: 30px;
  margin-bottom: 15px;
  height: 40px;
  margin-top: 10px;
  padding-top: 6px;
  background-color: #525252;
  /* border: 2px solid; */
  border-radius: 10px;
  cursor: pointer;
}
.u_friends{
  margin-top: 10px;
  margin-left: 10px;
  width: 360px;
  background-color: #343434;
  /* display: grid; */
  text-align: left;
  height: 500px;
  /* border: 2px solid #4e4e4e; */
  border-radius: 10px;
  color: #ffffff;
}
#flop{
  font-weight: bold;
}
.u_fr_n{
  float: left;
  padding-top: 20px;
  font-size: 20px;
  margin-top: -10px;
  margin-left: 20px;
}
.u_firend_list{
  
  width: 101.990px;
  height: 101.990px;
  background-color: #5b5b5b;
  margin-right: 2px;
  
  /* column-gap: 15px; */
  margin-bottom: 55px;
  border-bottom-left-radius: 10px;
  border-top-right-radius: 10px;
  border-top: 1px solid #ff0000;
  border-bottom: 1px solid #ff0000;
}
.u_friend_list{
  margin-top: 20px;
  margin-left: 10px;
  /* margin-left: 0px; */
  width: 340px;
  display: grid;
  grid-template-columns: repeat(3,1fr);
  grid-template-rows: repeat(3,1fr);
  /* height: 300px; */
}
.u_photos{
  margin-top: 20px;
  margin-left: 10px;
  background-color: #343434;
  width: 360px;
  height: 404px;
  border-radius: 10px;
  color: #ffffff;
  text-align: left;
}
.u_ph_n{
  margin-top: 25px;
  font-size: 15px;
  margin-left: 20px;
}
.u_photo_album{
  border-top-left-radius: 10px;
  border-bottom-left-radius: 10px;
  border-top-right-radius: 10px;
  border-bottom-right-radius: 10px;
  margin-left: 13px;
  margin-top: 25px;
  width: 340px;
  /* border: 10px solid #232323 ; */
  height: 340px;
  display: grid;
  grid-template-columns: repeat(3,1fr);
  grid-template-rows: repeat(3,1fr);
}
.u_photo_item{
  width: 106.667px;
  height: 106.667px;
  background-color: #2e2e2e;
  margin-bottom: 0px;
  
}
.u_sa_p{
  color:rgb(13, 13, 234) !important;
  cursor: pointer;
  float: right;
  font-size: 18px;
  margin-top: 10px;
  /* margin-top: 0px; */
  margin-right: 20px;
}
.u_pi_1{
  border-top-left-radius: 10px;
  border-top: 1px solid #ff0000;
}
.u_pi_2{
  border-top: 1px solid #ff0000;
}
.u_pi_3{
  border-top-right-radius: 10px;
  border-top: 1px solid #ff0000;
}

.u_pi_7{
  border-bottom-left-radius: 10px;
  border-bottom: 1px solid #ff0000;
}
.u_pi_8{
  border-bottom: 1px solid #ff0000;
}
.u_pi_9{
  border-bottom-right-radius: 10px;
  border-bottom: 2px solid #ff0000;
}
.u_posts{
  margin-top: 20px;
  
  width: 500px;
  margin-left: -130px;
  display: grid;
  grid-template-rows: repeat(1,1fr);
}
.u_post::-webkit-scrollbar{
  display: none;
}
.upload_post{
  width: 500px;
  height: 123px;
  background-color: #323232;
  border-radius: 10px;

}
.pe_h{
  width: 468px;
  height: 101px;
  padding-top: 12px;
  padding-bottom: 10px;
  padding-left: 16px;
  padding-right: 16px;
 
}
.p_pe{
  width: 468px;
  height: 60px;
  display: grid;
  grid-template-columns: repeat(2,1fr);
  border-bottom: 1px solid #504f4f;
}
.pe_m_p{
  width: 40px;
  height: 40px;
  border-radius: 50%;
  cursor: pointer;
}
.pe_txt{
  width:400px;
  height: 30px;
  padding: 8px 12px;
  margin-left: 5px;
  background-color: #4c4c4c;
  border-radius: 20px;
  cursor: pointer;
  opacity: 0.7;
}
.pe_txt:hover{
  opacity: 1;
}
.l_b{
  margin-left: 25px;
}

                                        /* NewFeed */

.newfeed{
  display: grid;
  grid-template-columns: repeat(3,1fr);
  margin-top: 20px;
  color: white;
}
                                      /* Left Feed  */
.left_feed{
  width: auto;
  border-right: 0px solid #77777760;
}
*{
  transition: .3s;
}
.pf_chng_btn{
    /* background-image:url('https://static.xx.fbcdn.net/rsrc.php/v3/yy/r/GVZOkxm43JO.png'); */
    /* background-position: 0px -136px; */
     /* background-size: 26px 602px; */
     border-radius: 50px;
     background: #333333;
     text-align: center;
     /* position: relative; */
     margin-bottom: -80px;
     margin-left: 175px;
     z-index: 1;
     /* float: right; */
      width: 40px; height: 40px; 
      background-repeat: no-repeat; 
    display: inline-block;
}
.pf_chng_btn p{
  /* align-content: center; */
  margin-top: 12px;
  font-weight: 900;
  color: #ff0606;
}
.lf_me{
  display: grid;
  padding-top: 10px;
  padding-left: 8px;
  grid-template-columns: repeat(2,1fr);
  width: 264px;
  padding-right:8px;
  height: 44px;
  /* padding: 0px 8px; */
  cursor: pointer;
  transition: .3s;
}
.lf_me:hover{
  background-color: #292929;
  border-radius: 10px;
  box-shadow: 2px 2px 5px #ff0000;
}
.lf_p{
  width: 28px;
  height: 28px;
  border-radius: 50%;
}
.lf_n{
  width: 210px;
  height: 44px;
  text-align: left;
  font-weight: bold;
  font-size: 15px;
}
                                    /* Mid Feed */
.mid_feed{
  width: 650px;
  max-height: 700px;
  overflow-y: auto;
}
.mf_highlight{
  /* margin-left: -36px; */
  width: 616px;
  
 }
 .mf_highlight_items{
  margin-top: 5px;

  display: grid;
  grid-template-columns: repeat(8,1fr);
  overflow-x: auto;
  margin-left: 0px;
  width: 616px;
 }
 .mf_highlight_item{
  width: 111.604px;
  height: 198.406px;
  padding: 0px 8px;
  margin-right: 15px;
  /* margin-right: 10px; */
  background: #292929;
  border-bottom-left-radius: 30px;
  border-top-right-radius: 30px;
  border-top: 3px solid #ff0000;
  border-bottom: 3px solid #ff0000;
 }
 .mf_highlight_items::-webkit-scrollbar{
  display: none;
}
.mf_highlight_item::-webkit-scrollbar{
  display: none;
}
.mf_up{
  margin-top: 30px;
  margin-left: 60px;
  width: 500px;
  height: 123px;
  margin-bottom: 16px;
  background-color: #292929;
  border-radius: 10px;
}
.mf_pe{
  width: 468px;
  height: 40px;
  display: grid;
  grid-template-columns: repeat(2,1fr);
 
}
.mf_md{
  font-size: 15px;
  color:#B0B3B8;;
  width: 468px;
  height: 40px;
  display: grid;
  grid-template-columns: repeat(3,1fr);
  padding-top: 8px;
  border-top: 1px solid #5e5e5e;
  margin-top: 12px;
}
.md_li{
  border-radius: 10px;
  text-align: center;
  padding-top: 8px;
  cursor: pointer;
  height: 40px;
}
.md_li:hover{
  background-color: #4e4e4e;
}

.card2 {
  width: 202px;
  height: 314px;
  display: flex;
  flex-direction: column;
  align-items: center;
  background: #333333;
border-radius: 10px;
  padding-bottom: 10px;

  

 }

 
.mc_hold::-webkit-scrollbar{
  display: none;
}

.mc_hold{
  border-radius: 10px;
  max-width: 500px;
  background-color: #292929;
  height: 314px;
 display: grid;
 grid-auto-flow: column;
 overflow-y: auto;
 grid-template-columns: repeat(20,1fr);
}

 .mc{
  color: white;
  margin-left: 10px;
  border-radius: 10px;
  width: 202px;
  height: 314px;
  box-shadow:0px 0px  rgba(241, 29, 29, 0.5),
  0px 0px  rgb(241, 29, 29,0.4),
  0px 0px  rgb(241, 29, 29,0.3),
  0px 0px 0px rgb(241, 29, 29,0.2);
  transition: .25s;
 }
 .card2 .blob {
  height: 30px;
  width: 75%;
  border-radius: 0 0 30px 30px;
  margin: 0px;
  background-color: #232323;
  visibility: visible;
  transition: all 0.3s;
 }
 .mc:hover .blob{
  height: 0px;
 }
 .add_fri{
  margin-bottom: 10px;
  border-radius: 10px;
  padding-top: 7px;
  margin-left: 70px;
  width: 150px;
  height: 40px;
  color: #ff0000 !important;
  background-color: #ff363692;
 }
 .del_fri{
  margin-bottom: 10px;
  border-radius: 10px;
  padding-top: 5px;
  margin-left: 25px;
  width: 100px;
  height: 40px;
  background-color: #4c4c4c;
 }
 .m_bu{
  text-align: center;
  width: 290px;
  opacity: 0.7;
  /* height: 100px; */
  color: #ff0000 !important;
  display: grid;
  grid-template-columns: repeat(2,1fr);
 }
 .m_bu:hover{
  opacity: 1;
 }
 
 .mc:hover {
  opacity: 1;
  margin-right: 5px;
  width: 202px;
  height: 314px;
  box-shadow:4px 4px  rgba(255, 22, 22, 0.5),
  8px 8px  rgba(255, 22, 22, 0.4),
  12px 12px  rgba(255, 22, 22, 0.3),
  16px 16px 30px rgb(255, 0, 0);
  /* transition:  .5s; */
 }
 
 .pl_u_p {
  /* margin-top: -20px; */
  border-radius: 10px;
  object-fit: cover;
  padding: 0px 0px;
  width: 196px;
  height: 196px;
  margin-top: 1.6em;
  background: #2e2e2e;
  
 }
.i_un{
  width: 176px;
  height: 12px;
  transition:  .5s;
  text-align: left;
  margin-top: 0.4em;
  color: white !important;

 }
 
 .cp{
  background-color: #0d0d0e;
  height: 0px;
  display: none;
  /* margin-left: -200px; */
  /* font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; */
 }
 .ppl_ymk{
  display: grid;
  margin-left: 60px;
  border-radius: 10px;
  margin-top: 20px;
  height: 330px;
  width: 500px;
  background-color: #292929;
  margin-bottom: 60px;
 }
.ppl_t{
  font-size: 20px;
  margin-left: 15px;
  padding-top: 10px;
}

.all_post{
  width: 500px;
  height: auto;
  margin-left: 60px;
  border-radius: 10px;
  background-color:#2e2e2e ;
  margin-bottom: 50px;
}
.all_p_owner{
  padding-top: 10px;
  width: 500px;
  height: 48.656px;
  display: grid;
  margin-left: 10px;
  
  grid-template-columns: repeat(3,1fr);
}
.p_o_p{
  width: 40px;
  height: 40px;
  border-radius: 50%;
}
.p_o_n
{
  margin-left: -50px;
  width: 348px;
  height: 36.656px;
  cursor: pointer;
}
.p_opt{
  width: 36px;
  height: 36px;
  float: right;
  cursor: pointer;
  margin-left: 40px;
  text-align: center;
  border-radius: 10px;
}
.p_opt:hover{
  background-color: #4c4c4c;
}
.post_data{
  
  margin-top:0px;
  display: grid;
  grid-template-rows: repeat(2,0fr);
  width: 500px;
  height:auto;
}
.p_d_tex{
    padding-left: 40px;
    width:90%;
    height: 40px;
    overflow: hidden;
  /* display: table-cell;  */
}
.p_d_tex::-webkit-scrollbar{
  display: none;
}

.p_d_p{
  object-fit: cover;
  width: 500px;
  height: auto;
}
.post_react{
  margin-top: 5px;
  color:#B0B3B8;
  width: 500px;
  display: grid;
  grid-template-rows: repeat(1,1fr);
}
.p_r_count{
  color:#B0B3B8;
  padding-top: 10px;
  width: 500px;
  height: 35px;
  font-size: 14px;
  padding-left: 5px;
  display: grid;
  grid-template-columns: repeat(3,1fr);
  border-bottom: 1px solid #4c4c4c;
}
.p_c_c{
  margin-left: 170px;
  width: 130px;
}
.p_l_c{
  margin-left: 10px;
  cursor: pointer;
  width: 100px;
}
.p_s_c{
  margin-left: -10px;
  width: 100px;
  cursor: pointer;
}
.p_r_data{
  text-align: center;
  width: 476px;
  height: 50px;
  padding-top: 4px;
  font-weight: 700;
  margin-bottom: 5px;
  display: grid;
  grid-template-columns: repeat(3,1fr);
  margin: 0px 12px;
}
.p_r_r{
  padding-top: 5px;
  margin-left: 60px;
  cursor: pointer;
}
.p_r_r:hover,
.p_r_c:hover,
.p_r_s:hover
{
  box-shadow: inset 2px 2px 5px  #393939;
  border-radius: 10px;
}
.p_r_c{
  padding-top: 5px;
  margin-left: 0px;
  cursor: pointer;
}
.p_r_s{
  padding-top: 5px;
  margin-left: 0px;
  margin-right: 60px;
  cursor: pointer;
}
.posts{
    margin-left: 170px;
    margin-top: 20px;
}
.right_feed{
  text-align: center;
  font-size: larger;
  border-left: 0px solid #77777760;
  width: auto;
  max-width: 831.750px;
}
.liv_vid{
  color: #f3425f;
}
.left_feed::-webkit-scrollbar{
  display: none;
}
.mid_feed::-webkit-scrollbar{
  display: none;
}
.right_feed::-webkit-scrollbar{
  display: none;
}

.all_post_data{
  display: grid;
  grid-template-rows: repeat(1,1fr);
}

/* Phone View  */
@media only screen and (max-width: 520px) {

  
.newfeed{
  display: grid;
  max-width: 412px;
  margin-right: 0px;
  height: auto;
  grid-template-columns: repeat(1,1fr);
  margin-top: 20px;
  color: white;
}

.left_feed{
  width: 100%;
  border-right: 0px solid #77777760;
}

.lf_me{
  display: grid;
  padding: 0px;
  margin-left: -20px;
  grid-template-columns: repeat(2,1fr);
  max-width: 38px;
 max-height: 38px;
 margin-top: -10px;
  float: right;
  cursor: pointer;
  transition: .3s;
}
.lf_p{
  width: 38px;
  height: 38px;
  align-items: center;
}
.lf_me:hover{
  background-color: #292929;
  border-radius: 50px;
  /* padding-right: -15px; */
  box-shadow: 2px 2px 5px #ff0000;
}
.lf_pf{
  display:none;
 
}

.lf_n{
  display: none;
}

.mid_feed{
  max-width: 412px;
  max-height: 1070px;
  overflow-y: auto;
}
.mf_highlight{
  /* margin-left: -36px; */
  width: 370px;
  
 }
 .mf_highlight_items{
  margin-top: 5px;

  display: grid;
  grid-template-columns: repeat(8,1fr);
  overflow-x: auto;
  margin-left: 0px;
  width: 412px;
 }
 .mf_highlight_item{
  width: 97px;
  height: 172.438px;
  padding: 0px 8px;
  margin-right: 5px;
  /* margin-right: 10px; */
  background: #292929;
  border-bottom-left-radius: 15px;
  border-top-right-radius: 15px;
  border-top: 1.5px solid #ff0000;
  border-bottom: 1.5px solid #ff0000;
 }
 .mf_highlight_items::-webkit-scrollbar{
  display: none;
}
.mf_highlight_item::-webkit-scrollbar{
  display: none;
}

.mf_up{
  margin-top: 30px;
  margin-left: 0px;
  width: 412;
  height: 61px;
  margin-bottom: 16px;
  background-color: #292929;
  border-radius: 10px;
}

.mf_md{
  display: none;
}
.md_li{
  display: none;
}

.pe_txt{
  width:320px;
  height: 20px;
  padding: 4px 6px;
  margin-top: 5px;
  margin-right: 30px;
  background-color: #4c4c4c;
  border-radius: 20px;
  cursor: pointer;
  opacity: 0.7;
}
.pe_txt:hover{
  opacity: 1;
}

.pe_h{
  width: 412px;
  height: 101px;
  padding-top: 12px;
  padding-bottom: 10px;
  padding-left: 16px;
  padding-right: 16px;
 
}
.p_pe{
  width: 412px;
  height: 60px;
  display: grid;
  grid-template-columns: repeat(2,1fr);
  border-bottom: 1px solid #504f4f;
}

.ppl_ymk{
  display: grid;
  margin-left: 0px;
  border-radius: 5px;
  margin-top: 20px;
  height: 300px;
  width: 412px;
  background-color: #292929;
  padding-bottom: 60px;
 }

 .mf_pe{
  width: 412px;
  height: 40px;
  display: grid;
  grid-template-columns: repeat(2,1fr);
 
}

.mf_up{
  margin-top: 30px;
  margin-left: 0px;
  width: 412px;
  height: 61px;
  margin-bottom: 16px;
  background-color: #292929;
  border-radius: 10px;
}
.mf_md{
  font-size: 15px;
  color:#B0B3B8;;
  width: 412px;
  height: 40px;
  display: grid;
  grid-template-columns: repeat(3,1fr);
  padding-top: 8px;
  border-top: 1px solid #5e5e5e;
  margin-top: 12px;
}

.all_post{
  
  margin-top: 6px;
  width: 412px;
  height:auto;
  margin-left: 0px;
  border-radius: 10px;
  background-color:#2e2e2e ;
  margin-bottom: 50px;
}
.all_post_data{
  display: grid;
  grid-template-rows: repeat(1,1fr);
}
.all_p_owner{
  width: 412px;
  height:min-content;
  margin-left: 5px;
   display: grid;
 
  margin-bottom: 0px;
  grid-template-rows: repeat(1,1fr);
}

.post_data{
  margin-top:0px;
  display: grid;
  grid-template-rows: repeat(2,0fr);
  width: 412px;
  height:auto;
 
}
.p_d_tex{
  /* margin-top: -100px; */
    padding-left: 40px;
    width:90%;
    height: 40px;
    overflow: hidden;
}
.p_d_tex::-webkit-scrollbar{
  display: none;
}

.p_d_p{
  /* margin-top: -290px; */
  object-fit:scale-down;
  width: 412px;
  height: auto;
}

.post_react{
  margin-top: 5px;
  color:#B0B3B8;
  width: 412px;
  display: grid;
  grid-template-rows: repeat(1,1fr);
  
}
.p_r_count{
  color:#B0B3B8;
  padding-top: 0px;
  margin-top: 5px;
  /* padding-bottom: -100px; */
  width: 412px;
  height: 30px;
  font-size: 14px;
  padding-left: 15px;
  display: grid;
  grid-template-columns: repeat(3,1fr);
  border-bottom: 1px solid #4c4c4c;
}

.p_c_c{
  margin-left: 20px;
  width: 100px;
}
.p_l_c{
  margin-left: 10px;
  cursor: pointer;
  width: 100px;
}
.p_s_c{
  margin-left: 20px;
  width: 100px;
  cursor: pointer;
}
.p_r_data{
  text-align: center;
  width: 412px;
  height: 30px;
  font-weight: 600;
  margin-top: 0px;
  display: grid;
  grid-template-columns: repeat(3,1fr);
  
}
.p_r_r{
  padding-top: 5px;
  margin-left: 6px;
  cursor: pointer;
}
.p_r_r:hover,
.p_r_c:hover,
.p_r_s:hover
{
  box-shadow: inset 2px 2px 5px  #393939;
  border-radius: 5px;
}
.p_r_c{
  padding-top: 5px;
  margin-left: 0px;
  cursor: pointer;
}
.p_r_s{
  padding-top: 5px;
  margin-left: 0px;
  margin-right: 0px;
  cursor: pointer;
}

.p_o_n
{
  margin-left: 10px;
  width: 300px;
  height: 30px;
  cursor: pointer;
}

.p_opt{
  width: 30px;
  height: 30px;
  float: right;
  cursor: pointer;
  margin-left: 10px;
  text-align: center;
  border-radius: 10px;
}

.right_feed{
  display: none;
}

}


   </style>
    </head>
    <body>
        
      

       <div  class="nav_hold">
        
        </div>
        <a href="{{ route('posts.index') }}" class="home" style="margin-left: 600px;">Home</a> 
            <div id="b2"  class="body-2"> 
                @yield('content')
            </div>
            <div id="user">
              <div id="pf">
              
              </div>
            
            </div>
        
       
    </body>
</html>