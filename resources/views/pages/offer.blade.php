@extends('layout')
@section('content')

<div class="content">
    <div class="grid wide">
        <div class="poster col l-12 m-12 c-12">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div>
                            <img src="https://api-website.cinestar.com.vn/media/.renditions/wysiwyg/CMSPage/Member/Rectangle_1899.png" alt="" class="poster-img a">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div>
                            <img src="https://api-website.cinestar.com.vn/media/.renditions/wysiwyg/CMSPage/Member/Rectangle_1899.png" alt="" class="poster-img a">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div>
                            <img src="https://api-website.cinestar.com.vn/media/.renditions/wysiwyg/CMSPage/Member/Rectangle_1899.png" alt="" class="poster-img a">
                        </div>
                    </div>
                </div>

                <div id="swiper-btn" class="swiper-button-prev"></div>
                <div id="swiper-btn" class="swiper-button-next"></div>
            </div>
        </div>
    </div>

    <div class="grid wide">
        <div class="offers">
            <div class="offer odd">
                <div class="offer-text">
                    <p class="offer-text--header">
                        C’STUDENT - 45K FOR STUDENTS
                        <p class="offer-text--desc">
                            SAME PRICE 45K/ 2D FOR STUDENTS/TEACHERS/ U22 ALL WEEKEND AT ALL CINESTAR THEATER.
                        </p>
                    </p>
                    <p class="offer-text--cond">
                        Condition:
                        <ul>
                            <li>Students present their student ID card or ID card and are under 22 years old.</li>
                            <li>Lecturer/teacher presents lecturer card.</li>
                        </ul>
                    </p>
                    <p class="offer-text--note">
                        Note:
                        <ul>
                            <li>Each card can buy one ticket.</li>
                            <li>Does not apply to holidays, Tet, or screenings with surcharges from the film distributor.</li>
                        </ul>
                    </p>

                    <button onclick="transfer('now-showing')">BUY TICKETS NOW</button>
                </div>

                <img src="https://api-website.cinestar.com.vn/media/.renditions/wysiwyg/CMSPage/Promotions/c_student.png" alt="" class="offer-img">
            </div>

            <div class="offer even">
                <div class="offer-text">
                    <p class="offer-text--header">
                        C'TEN - HAPPY HOUR - 45K/ 2D MILLION 10H
                        <p class="offer-text--desc">
                            Apply prices of 45K/ 2D and 55K/ 3D for customers watching movies before 10am and after 10pm
                        </p>
                    </p>
                    <p class="offer-text--cond">
                        Condition:
                        <ul>
                            <li>The customer is a C'FRIEND or C'VIP member of Cinestar.</li>
                            <li>Applicable at Cinestar App/Web or purchased directly at the theater..</li>
                        </ul>
                    </p>
                    <p class="offer-text--note">
                        Note:
                        <ul>
                            <li>Does not apply to the holidays.</li>
                        </ul>
                    </p>

                    <button onclick="transfer('now-showing')">BUY TICKETS NOW</button>
                </div>

                <img src="https://api-website.cinestar.com.vn/media/.renditions/wysiwyg/CMSPage/Promotions/C_TEN.png" alt="" class="offer-img">
            </div>

            <div class="offer odd">
                <div class="offer-text">
                    <p class="offer-text--header">
                        C'MONDAY - HAPPY DAY - SAME PRICE 45K/ 2D
                        <p class="offer-text--desc">
                            SAME PRICE 45K / 2D, 55K / 3D EVERY MONDAY
                        </p>
                    </p>
                    <p class="offer-text--cond">
                        Condition:
                        <ul>
                            <li>Applicable to screenings on every Monday.</li>
                            <li>Buy tickets directly at Cinestar App/Web or buy directly at the theater. </li>
                        </ul>
                    </p>
                    <p class="offer-text--note">
                        Note:
                        <ul>
                            <li>Does not apply to the holidays.</li>
                        </ul>
                    </p>

                    <button onclick="transfer('now-showing')">BUY TICKETS NOW</button>
                </div>

                <img src="https://api-website.cinestar.com.vn/media/.renditions/wysiwyg/CMSPage/Member/monday_1_.jpg" alt="" class="offer-img">
            </div>

            <div class="offer even">
                <div class="offer-text">
                    <p class="offer-text--header">
                        C'MEMBER - HAPPY MEMBER’S DAY - PRICE ONLY 45K/ 2D
                        <p class="offer-text--desc">
                            Applying prices of 45K/ 2D and 55K/ 3D for customers who are Cinestar members every Wednesday.
                        </p>
                    </p>
                    <p class="offer-text--cond">
                        Condition:
                        <ul>
                            <li>The customer is a C'FRIEND or C'VIP member of Cinestar.</li>
                            <li>Applicable at Cinestar App/Web or purchased directly at the theater.</li>
                        </ul>
                    </p>
                    <p class="offer-text--note">
                        Note:
                        <ul>
                            <li>Additional 10% discount on popcorn bill value for C'FRIEND cardholders and 15% discount for C'VIP cardholders.</li>
                            <li>Does not apply to the holidays.</li>
                        </ul>
                    </p>

                    <button onclick="transfer('now-showing')">BUY TICKETS NOW</button>
                </div>

                <img src="https://api-website.cinestar.com.vn/media/.renditions/wysiwyg/CMSPage/Promotions/C_MEMBER.png" alt="" class="offer-img">
            </div>

            <div class="offer odd">
                <div class="offer-text">
                    <p class="offer-text--header">
                        C’PURPLE DAY - RECEIVE 0 VND VOUCHER
                        <p class="offer-text--desc">
                            On Tuesday - the last week of each month, customers who go to the movies wearing purple clothes (shirt, skirt, pants, handbag, hat, shoes), buy movie tickets and receive 01 movie voucher worth 0 VND.
                        </p>
                    </p>
                    <p class="offer-text--cond">
                        Condition:
                        <ul>
                            <li>Applicable when buying tickets online or directly at the theater.</li>
                        </ul>
                    </p>
                    <p class="offer-text--note">
                        Note:
                        <ul>
                            <li>Does not apply to the holidays.</li>
                        </ul>
                    </p>

                    <button onclick="transfer('now-showing')"> BUY TICKETS NOW</button>
                </div>

                <img src="https://api-website.cinestar.com.vn/media/.renditions/wysiwyg/CMSPage/Promotions/c_student.png" alt="" class="offer-img">
            </div>
        </div>
    </div>
</div>

@endsection
