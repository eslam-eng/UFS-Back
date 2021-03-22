@extends('website.master', ["title" => "Contact Us"])

@section('styles')
<style>
    #header {
        background-image: url("{{ url('/') }}/wp-content/uploads/2015/11/header_bg_13.jpg")!important;
        background-repeat: repeat!important;
    }
    #header {
        position: relative!important;
        background-color: #183650!important;
        background-position: 50% 0!important;
        color: #fff!important;
        z-index: 50!important;
        margin: 0 0 37px!important;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="container">

        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div>
                    <h1 class="serv">{{ ___('Contact Form') }} :</h1>
                    <form action="contact.php" id="contact" method="post">
                       <label>{{ ___('Name') }}: *</label>
                       <input type="text" class="form-control" required name="name" id="name">
                       <br>

                       <label>{{ ___('Company') }}: *</label>
                       <input type="text" class="form-control" required name="company" id="name">
                       <br>

                       <label>{{ ___('Tel-Mobile') }}: *</label>
                       <input type="text" class="form-control" required name="phone" id="name">
                       <br>

                       <label>{{ ___('Website') }}: *</label>
                       <input type="text" class="form-control" required name="website" id="name">
                       <br>

                       <label>{{ ___('E-mail') }}: *</label>
                       <input type="text" class="form-control" required name="email" id="name">
                       <br>

                       <label>{{ ___('Message') }}: *</label>
                       <textarea name="msg" class="form-control" required rows="5" wrap="virtual" id="message"></textarea>
                       <br>

                       <label></label>
                       <input type="submit" value="{{ ___('Submit') }}" class="btn btn-primary">&nbsp;&nbsp;<input type="reset" value="{{ ___('Reset') }}" class="btn btn-warning">
                    </form>
                    <br>
                    <!-- نهاية نموذج الاتصال  -->
                 </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3455.6559377143526!2d31.297466014956694!3d29.98931648190244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145838e5c50df569%3A0xcfd49815c7e779fa!2sRing%20Rd%2C%20Al%20Abageyah%2C%20El-Khalifa%2C%20Cairo%20Governorate!5e0!3m2!1sen!2seg!4v1616406821635!5m2!1sen!2seg" style="width: 100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

    </div>

</div>
@endsection
