<head> <style> 


@sR: #418a95;
@sRLight: #418a95 + #222;
@sRDark: #418a95 - #222;
@darkGrey:#6b6b6b;
@offWhite:#f6f3f7;
@bg:#f6f3f7 - #111;
@darkBg:#f6f3f7 - #222;

*{  
  margin:0;
  padding:0;
  font-family:Lato;
}

body{
  padding:0px;
  background:@bg;
}

.flatTable{  
  width:100%;
  min-width:500px;
  border-collapse:collapse;  
  font-weight:bold;
  color:@darkGrey;
  
  tr{
    height:50px;
    background:@darkBg;
    border-bottom:rgba(0,0,0,.05) 1px solid;
  }
  
  td{    
    box-sizing:border-box;
    padding-left:30px;
    
  }

.titleTr{
  height:70px;  
  color:#f6f3f7; 
  background:@sR;  
  border:0px solid;
}

.plusTd{
    background:url(http://i.imgur.com/3hSkhay.png) center center no-repeat, rgba(0,0,0,.1);
}

.controlTd{  
  position:relative;
  width:80px;
  background:url(http://i.imgur.com/9Q5f6cv.png) center center no-repeat;
  cursor:pointer;
}

.headingTr{
    height:30px;
    background:@sRLight;
    color:@offWhite; 
    font-size:8pt;
    border:0px solid;
}  
}

.button{
  text-align:center;
  cursor:pointer;
}

.sForm{
  position:absolute;
  top:0;
  right:-400px;
  width:400px;
  height:100%; 
  background:@darkBg;  
  overflow:hidden;  
  transition:width 1s, right .3s;
  padding:0px;
  box-sizing:border-box;
  
  .close{
    float:right; 
    height:70px;
    width:80px;
    padding-top:25px;    
    box-sizing:border-box;
    background:rgba(255,0,0,.4);
      
  }
  
  .title{
    width:100%;
    height:70px;
    padding-top:20px;
    padding-left:20px;
    box-sizing:border-box;
    background:rgba(0,0,0,.1);
  }

.open{  
  right:0;
  width:400px !important;
}

.settingsIcons{
  position:absolute; 
  top:0;
  right:0;
  width:0;

  overflow:hidden;

}

.display{

  width:300px;
}

.settingsIcon{
  float:right; 
  background:@sR;
  color:@offWhite;
  height:50px;
  width:80px;
  padding-top:15px;
  box-sizing:border-box;
  text-align:center;
  overflow:hidden;
  transition:width 1s;
}

.settingsIcon:hover{
  background:@sRDark;
}

tr:nth-child(3){
   .settingsIcon{
    height:51px;
  }
}

.openIcon{
   width:80px; 
}




</style></head>

<table class="flatTable">

   
  </tr>
  <tr class="headingTr">
    <td>Name</td>
    <td>Description</td>
    <td>Threads</td>
  </tr>
  
  <tr>
    <td>#2331212</td>
    <td>Feb 21,2013</td>
    <td>White Out</td>  
    </td>
  </tr>
  
  <tr>
    <td>#2331212</td>
    <td>Feb 21,2013</td>
    <td>White Out</td>
    </td>
  </tr>
  
  <tr>
    <td>#2331212</td>
    <td>Feb 21,2013</td>
    <td>White Out</td>

  
     </td>
  </tr>

</table>

<div id="sForm" class="sForm sFormPadding">
        <span class="button close"><img src="http://i.imgur.com/nnzONel.png" alt="X"  class="" /></span>
        <h2 class="title">Add a New Record</h2>  
    </div>

<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>