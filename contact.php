<?php

require_once("Template.php");

$page = new Template("Contact");
$page->setHeadSection(
"<script>
    function contactForm (form) 
    {
        var userNumber = form.number.value;
        var userMail = form.mail.value;
        var userInput = form.feedback.value;

        if(userMail == '' || userInput == '')
        {
            alert ('The email and feedback sections are required to continue.');
        }
        else
        {
            alert ('Thanks for contacting us, expect a response shortly.');
        }
    
	}
</script>

<style> 
    body {
        background-color: lightgray;
    }
    form {
        color: darkred;
        background-color: gray;
        text-align: left;
        padding: 8px;
        height: 30px;
        font-size: 100%;
        font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', 
                    Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 
                    'Helvetica Neue', sans-serif
    }
    div {
        margin: auto;
    }
    div#form {
        background-color: darkgray;
        width: 1200px;
        height: 340px;
    }
    div#title {
        background-color:darkred;
        width: 1200px;
        margin-top: -26px;
    }
    div#thanks {
        background-color: gray;
        width: 1200px;
        height: 600px;
        margin-top: -26px;
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
    h2#thankshead {
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
    p#thanks {
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
<h2 id='headline'>Get In Touch</h2>
</div>

<nav id='index'>
<ul>
    <li><a href='index.php'>Home</a></li>
    <li><a href='about.php'>About Us</a></li>
    <li><a href='contact.php'>Contact Us</a></li>
</ul>
</nav>

<div id='form'>
        <form name='contactInfo' action='' method='get'>Provide us with your contact info and any question:
            <p>Phone Number</p> <p><input type='text' name='number' value=''></p>
            <p>Email</p> <p><input type='text' name='mail' value=''></p>
            <p>Enter your question or feedback here:</p> <p><input type='text' name='feedback' value=''></p>
            <input type='button' name='button' Value='Submit' onClick='contactForm(this.form)'>
        </form>
</div>

<div id='thanks'>
<h2 id='thankshead'>Get updates on everything Business Inc. first</h2>
<p id='thanks'>Business Inc. thanks you for your interest. In order to 
                receive fast updates on deals or events, please make 
                sure to leave us your email and phone number along 
                with any questions or comments you have. We'll get 
                back to you as soon as we can</p>
</div>";
print $page->getBottomSection();

?>