<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login Form</title>
      <link rel="stylesheet" href="asset/style.css">
   </head>
   <body>
      <div class="wrapper">
         <div class="title">
            Registration Form
         </div>
         <form action="{{route('user.post.register')}}" method="POST">
            @csrf
            <div class="field">
                <input type="text" name="name">
                <label>Name</label>
             </div>
            <div class="field">
               <input type="text" name="email">
               <label>Email Address</label>
            </div>
            <div class="field">
               <input type="password" name="password">
               <label>Password</label>
            </div>
            <div class="field">
                <input type="password" name="password_confirmation">
                <label>Confirm Password</label>
             </div>

            <div class="field">
               <input type="submit" value="Register">
            </div>
            <div class="signup-link">
               Not a member? <a href="{{route('login')}}">Signup now</a>
            </div>
         </form>
      </div>
   </body>
</html>
