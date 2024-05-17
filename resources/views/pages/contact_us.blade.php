@extends('layout')
@section('content')

<div class="content">
    <div class="grid wide">
        <div class="contact-us-page col l-12 m-12 c-12" style="display:flex">
          <div class="user-buttons col l-2 m-4 c-6">
            <div class="row sm-gutter">
              <div>
                <button class="about-us" onclick="transfer('about-us')">ABOUT US</button>
                <button class="user-buttons--active contact-us">CONTACT US</button>
              </div>
            </div>
          </div>

          <div class="contact-us-please col l-10 m-4 c-6" >
                <h1>CONTACT US</h1>

                <div class="cup-map">
                  <iframe class="cup-img" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62701.28801845626!2d106.70303124530955!3d10.82428007374997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527587e9ad5bf%3A0xafa66f9c8be3c91!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiAtIMSQSFFHIFRQLkhDTQ!5e0!3m2!1svi!2s!4v1714032768154!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="cup-div col l-12 m-4 c-6" style="display:flex">
                  <div class="cup-info col l-5 m-4 c-6">
                    <h2>HEADQUARTER</h2>
                    <p>Hàn Thuyên Street, Neighborhood 6, Linh Trung Ward, Thủ Đức District, Ho Chi Minh City</p>
                    <h2>CUSTOMER SERVICE</h2>
                    <p>
                      <span>Hotline: 0123 456789</span>
                      <span>Working hours: 8:00 - 2:00</span>
                      <span>E-mail: customerservice@brand.vn</span>
                    </p>
                    <h2>ADVERTISING</h2>
                    <p>
                      <span>Business Department: +84-28-3738-7476</span>
                      <span>Hotline: 0123 456789</span>
                      <span>E-mail: customerservice@brand.vn</span>
                    </p>
                  </div>

                  <div class="cup-input col l-5 m-4 c-6">
                    <p>Name<span>*</span></p>
                    <input type="text" name="" id="">
                    <p>E-mail<span>*</span></p>
                    <input type="text" name="" id="">
                    <p>Phone Number<span>*</span></p>
                    <input type="text" name="" id="">
                    <p>Issue<span>*</span></p>
                    <textarea name="" id="" rows="10"></textarea>
                    <input type="submit" name="" id="">
                  </div>
                </div>
          </div>
        </div>
    </div>
  </div>

@endsection
