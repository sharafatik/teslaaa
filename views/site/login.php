<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


?>
<header>
        <center>
            <i><h1>Discussion</h1></i>
        </center>
    </header>
<hr>
<br>
<div class="main_discussion_block">
    <div class="user_item">
            <h3>Bob Marley</h3>
            <p class="time">2/17/2017, 7:32:20 PM</p>
            <div class="clearfix"></div>
            <h5>I want to invent new car</h5>
            <p>Let's say you've decided to invest in the new car or truck. Sure, you can probably get a better deal with a used car, but you've probably decided that the risks of driving a second-hand car or even third-hand are not worth saving some extra cash. You're willing to shell out the extra bucks to get a car fresh off the lot, so you'll want to make sure you get what you want without getting ripped off.</p>
    </div>
</div>

<div class="alert alert-success" role="alert">
  <strong>Well done!</strong> I like your site!.
</div>
<div class="alert alert-warning" role="alert">
  <strong>Do not forget about his family history!</strong> I can send you some information.
</div>


<form class="my_form">

        <h3>Do you want to post new suggestion or discussion?</h3>
        <table>
            <tr>
                <td>From:</td>
                <td><input type="text" id="name" placeholder="Your name" required></td>
            </tr>
            <tr>
                <td>Subject:</td>
                <td><input type="text" id="subject" placeholder="Your Subject" required></td>
            </tr>
            <tr>
                <td>Message:</td>
                <td><textarea cols="60" rows="5" id="text" required></textarea></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" class="post_button" value="Post"></td>
            </tr>
        </table>
</form>



<br><br>

If you have any questions, please write me on email:
<a href=sharafat2909@gmail.com>
sharafat2909@gmail.com</a>  
<br/><br/>
<h4>Wanna come visit? Check out our office here</h4>
        
        <address>
            <ul>
                <li>56Tole bi</li>
                <li>Kazakhstan,Almaty</li>
                <li>400567</li>
            </ul>
        </address>
        <hr>
