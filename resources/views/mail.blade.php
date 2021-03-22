@php
    $company = App\Models\Company::admin();
@endphp

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <style>
   /* Our Font */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap');
/* Global */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins'
}
body {
  height: 100vh;
  background-color: #D3E1E1
}
/* The Receipt */
.receipt {
  width: 360px;
  background-color: white;
  border-radius: 30px;
  position: relative;
  top: 50%;
  left: 50%;
  margin-top: -360px; /* -half height and width to center */
  margin-left: -180px;
  box-shadow: 14px 14px 22px -18px;
  padding: 20px
}
/* Heading */
.name {
  text-transform: uppercase;
  text-align: center;
  color: #6c8b8e;
  letter-spacing: 10px;
  font-size: 1.8em;
  margin-top: 10px
}
/* Big thank */
.greeting {
  font-size: 21px;
  text-transform: capitalize;
  text-align: center;
  color: #6f8d90;
  margin: 35px 0;
  letter-spacing: 1.2px
}
/* Order info */
.order p {
  font-size: 13px;
  color: #aaa;
  padding-left: 10px;
  letter-spacing: .7px
}
/* Our line */
hr {
  border: .7px solid #ddd;
  margin: 15px 0;
}
/* Order details */
.details {
  padding-left: 10px;
  margin-bottom: 35px;
  overflow: hidden;
  position: relative;
}
.details h3 {
  font-weight: 400;
  color: #6c8b8e;
  font-size: 1.5em;
  margin-bottom: 15px
}
/* Image and the info of the order */
.product {
  float: left;
  width: 83%
}
.product img {
  width: 65px;
  float: left
}
.product .info {
  float: left;
  margin-left: 15px
}
.product .info h4 {
  color: #6f8d90;
  font-weight: 400;
  text-transform: uppercase;
  margin-top: 10px
}
.product .info p {
  font-size: 12px;
  color: #aaa;
}
/* Net price */
.details > p {
  color: #6f8d90;
  margin-top: 25px;
  font-size: 15px
}
/* Total price */
.totalprice p {
  padding-left: 10px
}
.totalprice .sub,
.totalprice .del {
  font-size: 13px;
  color: #aaa
}
.totalprice span {
  float: right;
  margin-right: 17px
}
.totalprice .tot {
  color: #6f8d90;
  font-size: 15px
}
/* Footer */
footer {
  font-size: 10px;
  text-align: center;
  margin-top: 135px; /* You can make it with position try it */
  color: #aaa
}
 </style>
</head>
<body>
    <br><br>
     <div class="receipt" style="width: 360px;
  background-color: white;
  border-radius: 30px;
  position: relative;
  top: 50%;
  left: 50%;
  margin-top: -360px; /* -half height and width to center */
  margin-left: -180px;
  box-shadow: 14px 14px 22px -18px;
  padding: 20px" >

      <h2 class="name"> <img src="{{ url('/logo.png') }}" style="height: 30px;text-transform: uppercase" > {{ $company->name }} </h2>

      <p class="greeting"> New Message From {{ $resource->name }} </p>

      <div class="order">

        <p> {{ __('Company Name') }} : {{ $company->name }} </p>
        <p> {{ __('Address') }} : {{ $company->address }} </p>
        <p> {{ __('Phone') }} : {{ $company->phone }} </p>
        <p> {{ __('Fax') }} : {{ $company->fax }} </p>
        <p> {{ __('City') }} : {{ optional($company->city)->name }} </p>
        <p> {{ __('Area') }} : {{ optional($company->area)->name }} </p>

      </div>

      <hr>

      <!-- Details -->
      <div class="details" style=" padding-left: 10px;
  margin-bottom: 35px;
  overflow: hidden;
  position: relative;" >

        <h3> Message </h3>

        <p>
            {{ $resource->message }}
        </p>

      </div>

      <!-- Sub and total price -->
      <div class="totalprice">

        <p class="sub"> visit our site now <span> <a class="w3-button w3-gray" target="_blank" href="{{ url('/') }}" >{{ $company->name }}</a> </span></p>

      <br>
      <img src="{{ url('/image/logo.png') }}" style="height: 30px" >
      </div>


      <!-- Footer -->
      <footer> UFS started working in Egypt since 2009, as a legal local courier company and powered by well Experienced key persons in sales and operation staff. Our vision is to be the biggest local company in Egypt.	. </footer>

    </div>

</body>
</html>
