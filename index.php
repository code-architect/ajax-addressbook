<?php
/**
 * Created by PhpStorm.
 * User: Code-Architect
 * Date: 22-Dec-14
 * Time: 12:51 AM
 */
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Address Book | Welcome</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
    <div class="row">
       <div class="large-6 columns">
           <h1>Address Book</h1>
       </div>
       <div class="large-6 columns">
           <a class="add-btn button right small" data-reveal-id="addModal">Add Contact</a>
           <div id="addModal" class="reveal-modal" data-reveal>
               <h2>Add Contact</h2>
               <form id="addContact" action="#" method="post">

                   <div class="row">
                       <div class="large-6 columns">
                           <lable>First Name
                                <input name="first_name" type="text" placeholder="Enter First Name" />
                           </lable>
                       </div>
                       <div class="large-6 columns">
                           <label>Last Name
                                <input name="last_name" type="text" placeholder="Enter Last Name" />
                           </label>
                       </div>
                   </div>
                   <div class="row">
                       <div class="large-4 columns">
                           <label>Email
                               <input name="email" type="email" placeholder="Enter Email Address" />
                           </label>
                       </div>
                       <div class="large-4 columns">
                           <label>Phone Number
                                <input name="phone" type="text" placeholder="Enter Email Address" />
                           </label>
                       </div>
                       <div class="large-4 columns">
                           <label>Contact Group
                                <select name="contact_group">
                                   <option value="family">Family</option>
                                   <option value="friends">Friends</option>
                                   <option value="business">Business</option>
                               </select>
                           </label>
                       </div>
                   </div>
                   <div class="row">
                       <div class="large-6 columns">
                           <label>Address 1
                                <input name="address1" type="text" placeholder="Enter Address 1" />
                           </label>
                       </div>
                       <div class="large-6 columns">
                           <label>Address 2
                                <input name="address2" type="text" placeholder="Enter Address 2" />
                           </label>
                       </div>
                   </div>
                   <div class="row">
                       <div class="large-4 columns">
                           <label>City
                               <input name="city" type="text" placeholder="Enter City" />
                           </label>
                       </div>
                       <div class="large-4 columns">
                           <label>State
                               <input name="state" type="text" placeholder="Enter State" />
                           </label>
                       </div>
                       <div class="large-4 columns">
                           <label>Zipcode
                               <input name="zipcode" type="text" placeholder="Enter Zipcode" />
                           </label>
                       </div>
                   </div>
                   <div class="row">
                       <div class="large-12 columns">
                           <label>Note
                               <textarea name="notes" placeholder="Enter Optional Notes"></textarea>
                           </label>
                       </div>
                   </div>
                   <input name="submit" type="submit" class="add-btn button right small" value="Submit" />
                   <a class="close-reveal-modal">&#215;</a>

               </form>
           </div>
       </div>
    </div>

    <!-- loading img -->
    <div id="loaderImage">
        <img src="img/loader.gif">
    </div>
    <!-- Main Content -->
    <div id="pageContent"></div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/script.js"></script>
    <script>
$(document).foundation();
    </script>
  </body>
</html>
