<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>My Website</title>
        <link rel="stylesheet" href="styling.css" />
        <video loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">
        <source src="indexvid.mp4" type="video/mp4">

            
    </video>
    </head>
    <body>

        <center>
         <div class="container"><p class="paragraph" 
    style="font-size: 25px; 
    color: lightgoldenrodyellow;
    border: solid; 
    border-color: darkcyan;
    padding: 15px;
    border-radius: 10px;
    width: 1000px;
    padding: 10px;
    position: relative;">    
    TUG O’ WAR BY SHEL SILVERSTEIN
            </p>
            <p>
“I will not play at tug o’ war.<br>
I’d rather play at hug o’ war,<br>
Where everyone hugs<br>
Instead of tugs,<br>
Where everyone giggles<br>
And rolls on the rug,<br>
Where everyone kisses,<br>
And everyone grins,<br>
And everyone cuddles,<br>
And everyone wins”<br>
            </p>
            <p class="paragraph" 
    style="font-size: 25px; 
    color: lightgoldenrodyellow;
    border: solid; 
    border-color: darkcyan;
    padding: 15px;
    border-radius: 10px;
    width: 1000px;
    padding: 10px;
    position: relative;">    
    LOST FRIENDS
            </p>
            <p>
                 “I loved my friend<br>
                He went away from me<br>
                There’s nothing more to say<br>
                The poem ends,<br>
                Soft as it began-<br>
                I loved my friend.”<br>
            <p class="paragraph" 
    style="font-size: 25px; 
    color: lightgoldenrodyellow;
    border: solid; 
    border-color: darkcyan;
    padding: 15px;
    border-radius: 10px;
    width: 1000px;
    padding: 10px;
    position: relative;">    
    POEM BY LANGSTON HUGHES
            </p>
            <p>
                “I loved my friend<br>
                He went away from me<br>
                There’s nothing more to say<br>
                The poem ends,<br>
                Soft as it began-<br>
                I loved my friend.”<br>
            </p>
            <p class="paragraph" 
    style="font-size: 25px; 
    color: lightgoldenrodyellow;
    border: solid; 
    border-color: darkcyan;
    padding: 15px;
    border-radius: 10px;
    width: 1000px;
    padding: 10px;
    position: relative;">    
    “NO MAN IS AN ISLAND” BY JOHN DONNE
            </p>
            <p>
                No man is an island,<br>
                Entire of itself,<br>
                Every man is a piece of the continent,<br>
                A part of the main.<br><br>
                If a clod be washed away by the sea,<br>
                Europe is the less.<br>
                As well as if a promontory were.<br>
                As well as if a manor of thy friend’s<br>
                Or of thine own were:<br><br>
                Any man’s death diminishes me,<br>
                Because I am involved in mankind,<br>
                And therefore never send to know for whom the bell tolls;<br>
                It tolls for thee.<br>
            </p>
            <p class="paragraph" 
    style="font-size: 25px; 
    color: lightgoldenrodyellow;
    border: solid; 
    border-color: darkcyan;
    padding: 15px;
    border-radius: 10px;
    width: 1000px;
    padding: 10px;
    position: relative;">    
    “STOPPING BY WOODS ON A SNOWY EVENING” BY ROBERT FROST
            </p>
            <p>
                Whose woods these are I think I know.<br>
                His house is in the village though;<br>
                He will not see me stopping here<br>
                To watch his woods fill up with snow.<br><br>
                My little horse must think it queer<br>
                To stop without a farmhouse near<br>
                Between the woods and frozen lake<br>
                The darkest evening of the year.<br><br>
                He gives his harness bells a shake<br>
                To ask if there is some mistake.<br>
                The only other sound’s the sweep<br>
                Of easy wind and downy flake.<br><br>
                The woods are lovely, dark and deep,<br>
                But I have promises to keep,<br>
                And miles to go before I sleep,<br>
                And miles to go before I sleep.<br>
            </p>
            <p class="paragraph" 
    style="font-size: 25px; 
    color: lightgoldenrodyellow;
    border: solid; 
    border-color: darkcyan;
    padding: 15px;
    border-radius: 10px;
    width: 1000px;
    padding: 10px;
    position: relative;">    
    “STOPPING BY WOODS ON A SNOWY EVENING” BY ROBERT FROST
            </p>
            <p>
                Whose woods these are I think I know.<br>
                His house is in the village though;<br>
                He will not see me stopping here<br>
                To watch his woods fill up with snow.<br><br>
                My little horse must think it queer<br>
                To stop without a farmhouse near<br>
                Between the woods and frozen lake<br>
                The darkest evening of the year.<br><br>
                He gives his harness bells a shake<br>
                To ask if there is some mistake.<br>
                The only other sound’s the sweep<br>
                Of easy wind and downy flake.<br><br>
                The woods are lovely, dark and deep,<br>
                But I have promises to keep,<br>
                And miles to go before I sleep,<br>
                And miles to go before I sleep.<br>
            </p>
            <p class="paragraph" 
    style="font-size: 25px; 
    color: lightgoldenrodyellow;
    border: solid; 
    border-color: darkcyan;
    padding: 15px;
    border-radius: 10px;
    width: 1000px;
    padding: 10px;
    position: relative;">    
    “SHALL I COMPARE THEE TO A SUMMER’S DAY?” BY WILLIAM SHAKESPEARE
            </p>
            <p> 
                Shall I compare thee to a summer’s day?<br>
                Thou art more lovely and more temperate.<br>
                Rough winds do shake the darling buds of May,<br>
                And summer’s lease hath all too short a date.<br><br>
                Sometime too hot the eye of heaven shines,<br>
                And often is his gold complexion dimmed;<br>
                And every fair from fair sometime declines,<br>
                By chance, or nature’s changing course, untrimmed;<br><br>
                But thy eternal summer shall not fade,<br>
                Nor lose possession of that fair thou ow’st,<br>
                Nor shall death brag thou wand’rest in his shade,<br>
                When in eternal lines to Time thou grow’st.<br><br>
                So long as men can breathe, or eyes can see,<br>
                So long lives this, and this gives life to thee.<br>
            </p>
            <br>
            <br>
            <p>
                Disclaimer: I do not own any poem presented and all rights are reserved to their respective owners.<br>
                Source: bookriot.com/friendship-poems/ , allpoetry.com/Us-Two
               medium.com/@EmEmbarty/31-of-the-best-and-most-famous-short-classic-poems-of-all-time-e445986e6df
            </p>
        </div>
        <link href='https://fonts.googleapis.com/css?family=Cabin+Condensed:700' rel='stylesheet' type='text/css'>

<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     width="1000px" height="240px" xml:space="preserve">
  <defs>
    <pattern id="water" width=".25" height="1.1" patternContentUnits="objectBoundingBox">
      <path fill="#000" d="M0.25,1H0c0,0,0-0.659,0-0.916c0.083-0.303,0.158,0.334,0.25,0C0.25,0.327,0.25,1,0.25,1z"/>
    </pattern>
    
    <text id="text" transform="translate(2,116)" font-family="'Cabin Condensed'" font-size="161.047">WELCOME</text>
    
    <mask id="text-mask">
      <use x="0" y="0" xlink:href="#text" opacity="1" fill="#ffffff"/>
    </mask>
    
    <g id="eff">
      <use x="0" y="0" xlink:href="#text" fill="#a0f2fa"/>
  
  <rect class="water-fill" mask="url(#text-mask)" fill="url(#water)" x="-300" y="50" width="1200" height="120" opacity="0.3">
    <animate attributeType="xml" attributeName="x" from="-300" to="0" repeatCount="indefinite" dur="2s"/>
  </rect>
   <rect class="water-fill" mask="url(#text-mask)" fill="url(#water)" y="45" width="1600" height="120" opacity="0.3">
    <animate attributeType="xml" attributeName="x" from="-400" to="0" repeatCount="indefinite" dur="3s"/>
  </rect>
      
  <rect class="water-fill" mask="url(#text-mask)" fill="url(#water)" y="55" width="800" height="120" opacity="0.3">
    <animate attributeType="xml" attributeName="x" from="-200" to="0" repeatCount="indefinite" dur="1.4s"/>
  </rect>
      <rect class="water-fill" mask="url(#text-mask)" fill="url(#water)" y="55" width="2000" height="120" opacity="0.3">
    <animate attributeType="xml" attributeName="x" from="-500" to="0" repeatCount="indefinite" dur="2.8s"/>
  </rect>
    </g>
  </defs>
 
      <use xlink:href="#eff" opacity="0.9" style="mix-blend-mode:color-burn"/>

</svg>
        </center>
    <a href="logout.php"
    style="font-size: 30px; 
    position: fixed; left: 1400px; top: 700px;
    padding-top: 20px;
    ">Logout</a>
    </body>
</html>