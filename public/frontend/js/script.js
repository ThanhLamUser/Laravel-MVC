{//Check ticket amount
    var ticketAmount = 0;
    var singleTicketAmount = 0;
    var coupleTicketAmount = 0;
    var totalPrice = 0; // Biến toàn cục để theo dõi tổng giá

    function updateTotalPrice() {
        document.getElementById('temp-price-calc').innerHTML = totalPrice.toLocaleString();
    }
    function decrByOne(fieldId) {
        var inputField = document.getElementById(fieldId);
        var dataValue = Number(inputField.getAttribute('data-value1'));
        var x = Number(inputField.value);
        if (x > 0) {
            inputField.value = --x;
            totalPrice -= dataValue; // Giảm tổng giá
            updateTotalPrice(); // Cập nhật tổng giá trên giao diện
        }
        updateTicketAmount();
    }

    function incrByOne(fieldId) {
        var inputField = document.getElementById(fieldId);
        var dataValue = Number(inputField.getAttribute('data-value1'));
        var x = Number(inputField.value);
        inputField.value = ++x;
        totalPrice += dataValue; // Tăng tổng giá
        updateTotalPrice(); // Cập nhật tổng giá trên giao diện
        updateTicketAmount();
    }

    function updateTicketAmount() {
        var singleInputs = document.querySelectorAll('input[data-value="Single"]');
        var coupleInputs = document.querySelectorAll('input[data-value="Couple"]');

        singleTicketAmount = Array.from(singleInputs).reduce((total, input) => total + Number(input.value), 0);
        coupleTicketAmount = Array.from(coupleInputs).reduce((total, input) => total + Number(input.value), 0);

        ticketAmount = singleTicketAmount + (coupleTicketAmount * 2);
    }

    function checkTicketAmount(fieldId) {
        var inputField = document.getElementById(fieldId);
        var dataValue = inputField.getAttribute('data-value');

        if (ticketAmount >= 8) {
            window.alert('The maximum amount of tickets is 8!');
            return;
        }

        if (dataValue === 'Couple') {
            if (ticketAmount + 2 <= 8) {
                incrByOne(fieldId);
            } else {
                window.alert('Adding a couple ticket exceeds the maximum amount of 8 tickets!');
            }
        } else {
            if (ticketAmount < 8) {
                incrByOne(fieldId);
            } else {
                window.alert('The maximum amount of tickets is 8!');
            }
        }
    }

    }

    {// Toggle functions
    function toggleFocusMIO(element) {
        // Loại bỏ class "movie-info--option-active" khỏi tất cả các thẻ li trong ul
        document.querySelectorAll('ul.movie-info--dates-list li.movie-info--date div.movie-info--option').forEach(function(div) {
            div.classList.remove('movie-info--option-active');
        });

        // Thêm class "movie-info--option-active" vào thẻ li được nhấp
        element.classList.add('movie-info--option-active');
    }
    function toggleFocusMFH(element) {
        // Loại bỏ class "movie-info--hours-option-focus" khỏi tất cả các thẻ li trong ul
        document.querySelectorAll('ul.movie-info--hours-ulist li.movie-info--hours-list button.movie-info--hours-option').forEach(function(a) {
            a.classList.remove('movie-info--hours-option-focus');
        });

        // Thêm class "movie-info--hours-option-focus" vào thẻ li được nhấp
        element.classList.add('movie-info--hours-option-focus');
    }
    function toggleMIH(fieldId) {
        document.getElementById('movie-info--hours-1').classList.add('movie-info--hours-show');
        var hourLists = document.querySelectorAll('.movie-info--hours-list');
        hourLists.forEach(function(list) {
            var dataValue3 = list.querySelector('.movie-info--hours-option').dataset.value3;
            if (dataValue3 === fieldId) {
                list.style.display = 'block'; // Hiển thị phần tử nếu data-value3 === fieldId
            } else {
                list.style.display = 'none'; // Ẩn phần tử nếu data-value3 khác fieldId
            }
        });
        var element = document.querySelector('.movie-info--hours-type');
        var stickyInfo = document.querySelector('.sticky-info');
        var ticket = document.querySelector('.select-ticket.col.l-12.m-12.c-12');
        var seat = document.querySelector('.choose-seat.col.l-12.m-12.c-12');
        var choose_seat = document.querySelector('.choose-seat--container.col.l-12.m-4.c-6');
        var popcorn = document.querySelector('.buy-popcorn.col.l-12.m-12.c-12');
        var movie = document.querySelector('.movie-info--hours-option.movie-info--hours-option-focus');

        if(fieldId=='no_schedule'){
            element.style.display = 'none';
            stickyInfo.style.display ='none'
            seat.style.display = 'none'
            ticket.style.display ='none'
            choose_seat.style.display = 'none'
            popcorn.style.display = 'none'
            movie.classList.remove('movie-info--hours-option-focus');
        }else {
            element.style.display = 'block';
        }
    }
    function toggleClick() {
        var stickyInfo = document.querySelector('.sticky-info');
        var ticket = document.querySelector('.select-ticket.col.l-12.m-12.c-12');
        var seat = document.querySelector('.choose-seat.col.l-12.m-12.c-12');
        var choose_seat = document.querySelector('.choose-seat--container.col.l-12.m-4.c-6');
        var popcorn = document.querySelector('.buy-popcorn.col.l-12.m-12.c-12');


        if (stickyInfo.style.display === 'none') {
            stickyInfo.style.display = 'block';
        }
        if (ticket.style.display === 'none') {
            ticket.style.display = 'block';
        }
        if (seat.style.display === 'none') {
            seat.style.display = 'block';
        }
        if (choose_seat.style.display === 'none') {
            choose_seat.style.display = 'block';
        }
        if (popcorn.style.display === 'none') {
            popcorn.style.display = 'block';
        }

        var element = document.querySelector('.select-ticket.col.l-12.m-12.c-12');
        element.scrollIntoView({
            behavior: 'smooth', // Cuộn mượt mà
            block: 'start' // Cuộn sao cho phần tử được hiển thị ở phía trên container
        });

    }
    function toggleFocusCSS(element) {
        if (element.classList.contains('selected')) {
            return;
        }

        if (element.classList.contains('selecting') || element.classList.contains('selecting-double')) {
            element.classList.remove('selecting');
            element.classList.remove('selecting-double');
        } else {
            if (element.classList.contains('double')) {
                element.classList.add('selecting-double');
            } else {
                element.classList.add('selecting');
            }
        }
    }


    function toggleClickSEAT(index,data) {
        var seats = document.querySelectorAll('.choose-seat--seat');

        // Duyệt qua từng phần tử
        seats.forEach(function(seat) {
            // Lấy giá trị của thuộc tính 'data-value'
            var dataValue = seat.getAttribute('data-value');
            var dataValue1 = seat.getAttribute('data-value1');

            // Kiểm tra nếu giá trị này bằng với index được truyền vào
            if (dataValue == index && dataValue1==data) {
                // Thêm style 'display: block;' vào phần tử đó
                seat.style.display = 'flex';
            }else{
                seat.style.display = 'none';
            }
        });
    }


    {//Change Slide based on Date
    function sliderChange(x) {
        document.getElementById("myRange").value = x;
    }}

    {// Timer
        let time = 300; // 5 phút
        let countdownEl = document.getElementById("countdown-timer");
        let countdownStarted = false; // Biến trạng thái để theo dõi trạng thái của bộ đếm ngược

        function startCountdown() {
            // Bắt đầu đếm ngược mỗi 1 giây
            let countdownInterval = setInterval(updateCountdown, 1000);

            function updateCountdown() {
                if (time < 0) {
                    clearInterval(countdownInterval); // Dừng đếm ngược nếu hết thời gian
                    window.alert('Ticket holding time expired. Please restart the booking process!');
                    location.reload();
                } else {
                    let minutes = Math.floor(time / 60);
                    let seconds = time % 60;

                    minutes = minutes < 10 ? '0' + minutes : minutes;
                    seconds = seconds < 10 ? '0' + seconds : seconds;

                    countdownEl.innerHTML = minutes + ':' + seconds;
                    time--;
                }
            }
        }

        function toggleSeatAndStartCountdown(seatId) {
            toggleFocusCSS(document.getElementById(seatId));
            if (document.getElementById(seatId).classList.contains('selected')) {
                return;
            }

            // Cập nhật sticky single seats
            if(document.getElementById(seatId).classList.contains('norm') || document.getElementById(seatId).classList.contains('vip')){
                updateStickySingleSeats(seatId);
            }else{
                updateStickyCoupleSeats(seatId);
            }
            // Kiểm tra nếu bộ đếm ngược chưa được bắt đầu, thì bắt đầu đếm ngược
            if (!countdownStarted && ticketAmount!=0) {
                startCountdown();
                countdownStarted = true; // Đánh dấu rằng bộ đếm ngược đã được bắt đầu
            }
        }
    }

    {// Update Sticky
    function updateSticky(fieldId) {
        document.getElementById("movie-type").innerHTML = document.getElementById(fieldId).value;
        document.getElementById("movie-screen").innerHTML = document.getElementById(fieldId).getAttribute("data-value1");
        document.getElementById("movie-time").innerHTML = document.getElementById(fieldId).getAttribute("data-value2");
        document.getElementById("room-selected").innerHTML = document.getElementById(fieldId).getAttribute("data-value1");
        var roomSelected = document.getElementById('room-selected');
        roomSelected.textContent = roomSelected.textContent.toUpperCase();
    }

    function updateSticky2(fieldId) {
        document.getElementById("movie-date").innerHTML = document.getElementById(fieldId).getAttribute("data-value1");
    }
        //Update Sticky - Seats
    var selectedSingleSeats = [];
    var selectedCoupleSeats = [];
    function updateStickySingleSeats(fieldId) {
        var seatElement = document.getElementById(fieldId);
        // Kiểm tra xem đã chọn số vé chưa
        if (singleTicketAmount == 0 ) {
            window.alert('Select your single ticket(s) first!');
        } else {
            // Hủy chọn ghế
            if (selectedSingleSeats.includes(seatElement.innerText)) {
                var indexToRemove = selectedSingleSeats.indexOf(seatElement.innerText);
                if (indexToRemove !== -1) {
                    selectedSingleSeats.splice(indexToRemove, 1);
                    document.getElementById('movie-seats').innerHTML = selectedSingleSeats.join(', ');
                    toggleFocusCSS(seatElement); // Gọi toggleFocusCSS để hủy chọn ghế
                }
            } else {
                // Check số ghế phải bằng số vé, không cho chọn thêm
                if (selectedSingleSeats.length >= singleTicketAmount) {
                    window.alert('You have already chosen enough seats for this type of ticket!');
                } else {
                    // Chọn ghế + thêm vào ds ghế đã chọn
                    selectedSingleSeats.push(seatElement.innerText);
                    document.getElementById('movie-seats').innerHTML = selectedSingleSeats.join(', ');
                    toggleFocusCSS(seatElement); // Gọi toggleFocusCSS để chọn ghế
                }
            }
        }
    }

    function updateStickyCoupleSeats(fieldId) {
        //Kiểm tra xem đã chọn số vé chưa
        if (coupleTicketAmount == 0) {
            window.alert('Select your couple ticket(s) first!')
        } else {
            //Hủy chọn ghế
            if (selectedCoupleSeats.includes(document.getElementById(fieldId).innerText)) {
                var indexToRemove = selectedCoupleSeats.indexOf(document.getElementById(fieldId).innerText);
                if (indexToRemove !== -1) {
                    selectedCoupleSeats.splice(indexToRemove, 1);
                    document.getElementById('movie-seats-couple').innerHTML = selectedCoupleSeats;
                    toggleFocusCSS(document.getElementById(fieldId));
                }
            } else {
                //Check số ghế phải bằng số vé, không cho chọn thêm
                if (selectedCoupleSeats.length >= coupleTicketAmount) {
                    window.alert('You have already chosen enough seats for this type of ticket!');
                } else {
                //Chọn ghế + thêm vào ds ghế đã chọn
                    selectedCoupleSeats.push(document.getElementById(fieldId).innerText);
                    document.getElementById('movie-seats-couple').innerHTML = selectedCoupleSeats;
                    toggleFocusCSS(document.getElementById(fieldId));

                }
            }
        }

    }}

    {
        function increaseQuantity(inputId) {
            var input = document.getElementById(inputId);
            var dataValue = Number(input.getAttribute('data-value1'));
            var currentValue = parseInt(input.value);
            input.value = currentValue + 1;
            totalPrice += dataValue; // Tăng tổng giá
            updateTotalPrice(); // Cập nhật tổng giá trên giao diện
        }

        function decreaseQuantity(inputId) {
            var input = document.getElementById(inputId);
            var dataValue = Number(input.getAttribute('data-value1'));
            var currentValue = parseInt(input.value);
            if (currentValue > 0) {
                input.value = currentValue - 1;
                totalPrice -= dataValue; // Giảm tổng giá
                updateTotalPrice(); // Cập nhật
            }

    }

    }

    {//Play trailer
        // Thay thế 'YOUR_VIDEO_ID' bằng ID của video YouTube bạn muốn phát
        const videoId = 'KudedLV0tP0';

        // Tạo một đối tượng player YouTube
        let player;
        function onYouTubeIframeAPIReady() {
            player = new YT.Player('trailer', {
                // height: '360',
                // width: '640',
                videoId: videoId,
                events: {
                    'onReady': onPlayerReady,
                }
            });
        }
    }


function LoginForm() {
    var login_form = `<div class="modal">
        <div class="modal_overlay" onclick="CloseForm()">
        </div>
        <div class="modal_body">
            <div class="login">
                <div class="logo hide-on-mobile">
                    <img src="../img/image-removebg-preview (2).png" alt="" class="logo_img">
                </div>
                <div class="account">
                    <div class="account_container">
                        <h1 class="account_container-header">Login into your account</h1>
                        <form class="account_container-form">
                            <div class="account_container-form--group-login">
                                <label for="email">Email or Phone</label>
                                <input type="email" id="email" name="email">
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="img_email" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z"/></svg>

                            <div class="account_container-form--group-login">
                                <label for="Password">Password</label>
                                <input type="password" id="Password" name="Password">
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="img_lock" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"/></svg>
                            <div class="FAQ">
                                <div class="FAQ_remember">
                                    <input type="checkbox" id="remember">
                                    <label>Remember Me</label>
                                </div>
                                <div class="FAQ_forgot">
                                    <a href="" >Forgot Password?</a>
                                </div>
                            </div>
                            <div class="button_container ">
                                <button class="btn btn_LOGIN">LOGIN NOW</button>
                            </div>
                            <div class="OR_container">
                                <div class="line"></div>
                                <p class="OR">OR</p>
                                <div class="line"></div>
                            </div>
                            <div class="button_container">
                                <button id="signup-button" onclick="RegisterForm()" class="btn">SIGN UP NOW</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>`

    document.getElementById('login_register_form').innerHTML = login_form;
}

function RegisterForm(){
    var register_form = `<div class="modal">
    <div class="modal_overlay" onclick="CloseForm()">
    </div>
    <div class="modal_body">
        <div class="register">
            <div class="logo hide-on-mobile">
                <img src="../img/image-removebg-preview (2).png" alt="" class="logo_img">
            </div>
            <div class="account">
                <div class="account_container">
                    <h2 class="account_container-header-register">Create your account</h2>
                    <form class="account_container-form">
                        <div class="account_container-form--group">
                            <div class="form_group">
                                <label for="FullName">Full Name</label>
                                <input type="text" id="FullName" name="FullName">
                            </div>
                            <div class="form_group">
                                <label for="phone">Phone</label>
                                <input type="text" id="Phone" name="phone">
                            </div>
                        </div>
                        <div class="account_container-form--group">
                            <label for="Email">Email</label>
                            <input type="text" id="Email" name="Email">
                        </div>
                        <div class="account_container-form--group">
                            <label for="Password">Password</label>
                            <input type="password" id="Password" name="Password">
                        </div>
                        <div class="account_container-form--group">
                            <label for="reconfirm">Confirm Password</label>
                            <input type="password" id="reconfirm" name="reconfirm">
                        </div>
                        <div class="button_container">
                            <button class="btn">CREATE ACCOUNT</button>
                        </div>
                        <p class="account_text">Do you already have an account?
                            <a href="#" onclick="LoginForm()">Login</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>`
    document.getElementById('login_register_form').innerHTML= register_form;
}

function CloseForm() {
    var modalOverlay = document.querySelector('.modal_overlay');
    var modal = modalOverlay.closest('.modal');
    modal.style.display = 'none';
}

function transfer(url) {
    window.location.href = url;
  }

    }
{

    document.addEventListener("DOMContentLoaded", function() {
        var stickyElement = document.querySelector(".sticky-info");
        var footer1 = document.querySelector(".footer-1");

        // Kiểm tra xem phần tử sticky-element có tồn tại trên trang không
        if (stickyElement) {
          // Nếu có, cài đặt margin-top của footer-1 thành 0
          if (footer1) {
            footer1.style.marginTop = "0";
          }
        }
      });

}