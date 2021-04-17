@extends('layouts.app')


@section('content')
<div>  

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <title>ContactUs</title>
     </head>
          <body>
          <div >

          <img  src="images/contactUs.jpg" style="margin:0;padding:0;position: relative;height: 70%;width: 100%;" />
   
              <br><br><br>
              <br><br><br>


           <div class="row">
           <div class="col-lg-8" style="padding-right:50px; padding-left:100px;">
             
            <form>
            <div>
                <label for="feedback_content">Message </label>
                <input class="text" id="feedback_content" name="feedback[content]"></input>
            </div>
      
            
            <div>
                <label class="checkbox" for="feedback_is_private">
                <input name="feedback[is_private]" type="hidden" value="0"><input class="checkbox" id="feedback_is_private" name="feedback[is_private]" type="checkbox" value="1"> Don't post this publicly</label>
            </div>
            
            <div>
       
                <label for="feedback_first_name">First Name</label>
                <input class="text" id="feedback_first_name" name="feedback[first_name]" type="text">
                <br>
                <label for="feedback_last_name">Last Name </label>
                <input class="text" id="feedback_last_name" name="feedback[last_name]" type="text">
            </div>
            
            <div>
                <label for="feedback_email">Email</label>      
                  <input class="text" id="feedback_email" name="feedback[email]" type="email">
                <br>
                <label for="feedback_mobile_number">Mobile phone (optional)</label>
                <input class="text" id="feedback_mobile_number" name="feedback[mobile_number]" type="tel">   
            </div>
              
            <div >
                    <label class="checkbox" for="feedback_email_opt_in"><input name="feedback[email_opt_in]" type="hidden" value="0"><input class="checkbox" checked="checked" id="feedback_email_opt_in" name="feedback[email_opt_in]" type="checkbox" value="1"> Send me email updates</label>
                    <br>
                    <label class="checkbox" for="feedback_mobile_opt_in"><input name="feedback[mobile_opt_in]" type="hidden" value="0"><input class="checkbox" checked="checked" id="feedback_mobile_opt_in" name="feedback[mobile_opt_in]" type="checkbox" value="1"> Send me text messages</label>
            </div>

            
            <div>
                <label for="feedback_submitted_address">Address (Street, City, State, Postal code)</label>
                <input class="text" id="feedback_submitted_address" name="feedback[submitted_address]" type="text">
            </div>

      
            <input class="submit-button" type="submit" name="commit" value="Send message">
            </form>
      

        </div>
                    
            <div class="col">
                <img  src="images/contact.png" style="margin:0;padding:0;position: relative;height:100%;width: 80%;" />
            </div>

        </div>  

        <br><br><br>
        <br><br><br>      
    </body>
</html>


@endsection
</div>