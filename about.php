<?php

require_once("Template.php");

$page = new Template("About");
$page->setHeadSection(
"<style> 
    body {
        background-color: lightgray;
    }
    div {
        margin: auto;
    }
    div#title {
        background-color:darkred;
        width: 1200px;
        margin-top: -26px;
    }
    div#about {
        background-color: gray;
        width: 1200px;
       
    }
    h1 {
        color: lightgray;
        text-align: center;
    }
    h2 {
        color: darkred;
    }
    h2#headline {
        color: gray;
        text-align: center;
        font-style: italic;
    }
    h2#abouthead {
        color: darkred;
        background-color: gray;
        text-align: left;
        padding: 8px;
        height: 30px;
        font-size: 200%;
        font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', 
                    Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 
                    'Helvetica Neue', sans-serif
    }
    p#about {
        color: black;
        background-color: darkgray;
        font-size: 140%;
        height: 550px;
        padding: 16px;
    }
    nav#index {
        font-family: 'Century Schoolbook L';
        font-size: 1em;
        width: 1200px;
        color: darkgray;
        text-align: left;
        background-color:darkgray;
        margin: auto;
        margin-top: -20px;
    }
    ul {
        list-style-type: none;
        margin: 0;
           padding: 0;
        width: 1200px;
           background-color: white;
        overflow: hidden;
    }
    li {
        float: left;
    }	
    li a {
        display: block;
        color: darkred;
        padding: 16px;
        text-align: center;
           text-decoration: none;
        font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif';
        width: 366px;
        border: 1px solid black;
    }
    li a:hover {
               background-color: darkgray;
               color: darkred;
            padding: 16px 16px;
            clear: left;
    }
</style>");

$page->setTopSection();
$page->setBottomSection();

print $page->getTopSection();
print "<div id='title'>
<h1>Business Incorporated</h1>
<h2 id='headline'>Who We Are</h2>
</div>

<nav id='index'>
<ul>
    <li><a href='index.php'>Home</a></li>
    <li><a href='about.php'>About Us</a></li>
    <li><a href='contact.php'>Contact Us</a></li>
</ul>
</nav>

<div id='about'>
<h2 id='abouthead'>What is Business Incorporated?</h2>
<p id='about'>Business Incorporated is a family run business and has been 
                since it was founded in 1913. We serve to provide a variety 
                of needs to the general public in order to improve the wonderful 
                world we live in today. For upcoming events, we recomend checking 
                out our news feed on our home page or providing us with contact 
                information on our contact page.</p>
</div>";
print $page->getBottomSection();

?>