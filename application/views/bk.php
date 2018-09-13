<!DOCTYPE html>
<html>
<title>จองหอประชุม ออนไลน์</title>
<meta charset="utf-8">

<style>
body {
  font-family: 'Open Sans', sans-serif;
   background: url('https://www.theptarin.com/upload/image/hall.jpg')
    color: #222;
}

.navbar-shrink{
    padding-top: 0;
    padding-bottom: 0;
}
.mybg-dark {
    background: #000 !important;
}

header.masthead {
    position: relative;
    height: 100vh;
    background-color: #343a40;
    background: url('https://www.theptarin.com/upload/image/hall.jpg') no-repeat center center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    padding-top: 8rem;
    padding-bottom: 8rem;
}

header.masthead .overlay{position:absolute;background-color:#212529;height:100%;width:100%;top:0;left:0;opacity:.3}

@media (min-width:768px) {
    header.masthead {
        padding-top: 12rem;
        padding-bottom: 12rem;
    }
    header.masthead h3 {
        font-size: 4rem;
    }
}

.testimonials{padding-top:7rem;padding-bottom:7rem}
.myform-control {
    display: block;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}

button.btn.btn-light {
    position: absolute;
    background: transparent;
    border: none;
    height: 38px;
    right: 23px;
}

a.btn.btn-default.btn-scroll {
    border: 1px solid #fff;
    color: #fff;
    border-radius: 100%;
}

.scroll-down {
    position: absolute;
    left: 50%;
    transform: translate(-50%, -50%);
    top: 135px;
}

.big-img img {
    height: 325px;
    object-fit: cover;
}

.container.slider-top-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.btn-login {
    width: 138px;
    background: #3683a1 !important;
    border: 1px solid #1fc6d8 !important;
}

.mfa-white {
    color: #fff !important;
}

h3.my-heading {
    color: #fff;
    font-weight: bold;
    font-size: 39px;
}

p.myp-slider.text-center {
    color: #fff;
}

.btn-register {
    width: 138px;
    background: #1fc6d8 !important;
}

.btn-join {
    background: #1fc6d8 !important;
    border: 1px solid #1fc6d8 !important;
}

section#about {
    width: 100%;
    padding-top: 2.1rem;
    padding-bottom: 2.1rem;
}

.btn-circle {
    border-radius: 50%;
}

.my-social-btn {
    background: lightgrey;
}

a.btn.btn-circle.my-social-btn.fb:hover {
    background: #205b9f;
}

a.btn.btn-circle.my-social-btn.twitter:hover {
    background: #00ace3;
}

a.btn.btn-circle.my-social-btn.google:hover {
    background: #ff3921;
}

a.btn.btn-circle.my-social-btn {
    color: #fff;
}

.inner-section h3 {
    text-transform: uppercase;
}

span.bg-main {
    color: #008ba3;
}

hr.my-border {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 2px solid #008ba3;
    width: 117px;
}

.linear-grid img {
    width: 100%;
    height: 124px;
}

.mybg-events {
    background: url('https://images.pexels.com/photos/167605/pexels-photo-167605.jpeg?auto=compress&cs=tinysrgb&h=650&w=940') no-repeat center center fixed;
    background-size: cover;
}

.h-262 {
    height: 262px !important;
}

h3.title-heading.text-center {
    color: #fff;
    font-weight: bold;
}

p.myp.text-center {
    color: #fff;
    font-size: 14px;
    margin-bottom: 3rem;
}

.big-img2 img {
    height: 472px;
    width: 100%;
    object-fit: cover;
}

.my-grid img {
    height: 228px;
    width: 100%;
    object-fit: cover;
}

.text-block {
    min-height: 228px;
    height: auto;
    background: #fff;
    padding: 15px;
}

h5.events-heading {
    font-weight: bold;
    font-size: 17px;
}

p.myp-font {
    font-size: 15px;
}

section#group {
    background: #fff;
    height: 100%;
    width: 100%;
    padding-top: 2rem;
    padding-bottom: 2rem;
}

.card {
    font-size: 1em;
    overflow: hidden;
    padding: 0;
    border: none !important;
    border-radius: .28571429rem;
}

.card:hover {
    color: #222 !important;
    box-shadow: 0 1px 3px 0 #d4d4d5, 0 0 0 1px #d4d4d5;
}

.card-block {
    font-size: 1em;
    position: relative;
    margin: 0;
    padding: 1em;
    border: none !important;
    border-top: 1px solid rgba(34, 36, 38, .1);
    box-shadow: none;
}

.card-img-top {
    display: block;
    width: 100%;
    height: auto;
}

.card-title {
    font-size: 1.28571429em;
    font-weight: 700;
    line-height: 1.2857em;
}

.card-text {
    clear: both;
    margin-top: .5em;
    color: rgba(0, 0, 0, .68);
}

.card-footer {
    font-size: 1em;
    position: static;
    top: 0;
    left: 0;
    max-width: 100%;
    padding: .75em 1em;
    color: rgba(0, 0, 0, .4);
    border-top: 1px solid rgba(0, 0, 0, .05) !important;
    background: #fff;
}

.card-inverse .btn {
    border: 1px solid rgba(0, 0, 0, .05);
}

.mybg-music {
    background: url('https://images.pexels.com/photos/167605/pexels-photo-167605.jpeg?auto=compress&cs=tinysrgb&h=650&w=940') no-repeat center center fixed;
    background-size: cover;
}

section#marketplace {
    background: #f7f7f7;
    height: 100%;
    width: 100%;
    padding-top: 5rem;
    padding-bottom: 5rem;
}

section#marketplace .card {
    font-size: 1em;
    overflow: hidden;
    padding: 0;
    border: none;
    border-radius: .28571429rem;
    box-shadow: 0 1px 3px 0 #d4d4d5, 0 0 0 1px #d4d4d5;
}

section#artist {
    background: #fff;
    height: 100%;
    width: 100%;
    padding-top: 2rem;
    padding-bottom: 2rem;
}

a.link-color {
    color: #008ba3;
    font-weight: bold;
}

.floating-arrow {
    -webkit-animation: floating-arrow 1.6s infinite ease-in-out 0s;
    -o-animation: floating-arrow 1.6s infinite ease-in-out 0s;
    animation: floating-arrow 1.6s infinite ease-in-out 0s;
}

@keyframes floating-arrow {
    from {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
    65% {
        -webkit-transform: translateY(11px);
        transform: translateY(11px);
    }
    to {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
}

footer.footer{padding-top:4rem;padding-bottom:4rem}

li.list-inline-item a {
    color: #fff;
    text-decoration: none;
}


/*-------------------responsive-----------------*/

@media screen and (max-width: 520px) {
    ::placeholder {
        font-size: 10px;
    }
    .scroll-down {
        position: absolute;
        left: 50%;
        transform: translate(-50%, -50%);
        top: 45px;
    }
    
    .text-block {
        padding: 15px;
    }
    .linear-grid img {
        width: 100%;
        height: 181px;
    }
    .my-grid img {
        width: 100%;
    }
    .inner-section h3 {
        font-size: 22px;
    }
    .inner-section p {
        font-size: 13px;
    }
}
@media screen and (max-width: 767px) {
    .btn-login{
       width:100%; 
    }
    .btn-register {
         width:100%; 
    }
}

</style>

