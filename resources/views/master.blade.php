<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;500&display=swap" rel="stylesheet">    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Comm Project</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>
<style>
    body
    {
        font-family: 'Poppins', sans-serif;
        
    }
    .custom-login
    {
        height: 500px;
        padding-top: 100px;
    }
    img.slider-img
    {
        height: 400px !important
    }
    .custom-product
    {
        height: 600px
    }
    .slider-text
    {
        background-color: #35443585 !important;
    }
    .trending-image
    {
        height: 100px;
    }
    .trending-item
    {
        float: left;
        width: 20%;
    }
    .trending-wrapper
    {
        margin: 30px;
        border: 
    }
    .detail-img
    {
        height: 200px;
    }
    .search-box
    {
        width: 400px !important
    }
    .navbar-brand
    {
        font-weight: bold;
        /* font-style: oblique; */
        color:orange; !important;
    }
    .cart-list-divider
    {
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px
    }
    
    /* rating */
    .rating-css div {
     color: #ffe400;
    font-size: 30px;
    font-family: sans-serif;
    font-weight: 800;
    text-align: center;
    text-transform: uppercase;
    padding: 20px 0;
  }
  .rating-css input {
    display: none;
  }
  .rating-css input + label {
    font-size: 60px;
    text-shadow: 1px 1px 0 #8f8420;
    cursor: pointer;
  }
  .rating-css input:checked + label ~ label {
    color: #b4afaf;
  }
  .rating-css label:active {
    transform: scale(0.8);
    transition: 0.3s ease;
  }
  .captcha {
      display: flex;
  }
  #captchaValue{
      height: 40px;
      padding: 10px;
      line-height: 20px;
      background-color: #fff;
      border-radius: 10px 0 0 10px;
      color: #000;
      font-weight: 700;
      border-right: 2px solid gray;
  }
  .captcha input{
      border-radius: 0 10px 10px 0 !important;
  }
</style>
</html>