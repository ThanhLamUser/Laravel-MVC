{//Check ticket amount
    var ticketAmount = 0;
    var singleTicketAmount = 0;
    var coupleTicketAmount = 0;
    var totalPrice = 0; // Biến toàn cục để theo dõi tổng giá
    var selectedSeats = 0;
    function updateTotalPrice() {
        document.getElementById('temp-price-calc').innerHTML = totalPrice.toLocaleString();
        document.querySelector('input[name="temp_price_calc"]').value =  totalPrice.toLocaleString();

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
        UpdatetoggleFocusCSS();
        if (selectedSeats!=0  && ticketAmount !=0) {
            window.location.reload()
        }
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
        var schedule = document.querySelector('.movie-info--date');

        if(fieldId=='no_schedule'){
            element.style.display = 'none';
            stickyInfo.style.display ='none'
            seat.style.display = 'none'
            ticket.style.display ='none'
            choose_seat.style.display = 'none'
            popcorn.style.display = 'none'
            movie.classList.remove('movie-info--hours-option-focus');
        }
        else if(!schedule.classList.contains('.movie-info--option-active')){
            element.style.display = 'block';
            stickyInfo.style.display ='none'
            seat.style.display = 'none'
            ticket.style.display ='none'
            choose_seat.style.display = 'none'
            popcorn.style.display = 'none'
            movie.classList.remove('movie-info--hours-option-focus');

        }
        var hourElements = document.querySelectorAll('.movie-info--hours.movie-info--hours-show');
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
    function UpdatetoggleFocusCSS() {
        var seats = document.querySelectorAll('.choose-seat--seat');
        seats.forEach(function(seat) {
            seat.classList.remove('selecting');
            seat.classList.remove('selecting-double');
        });
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
                seat.remove();
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

        window.onload = function() {
            var timerElement = document.getElementById('cd-timer');
            var timeLeft = 300; // 5 minutes in seconds

            function updateTimer() {
                var minutes = Math.floor(timeLeft / 60);
                var seconds = timeLeft % 60;

                // Add leading zero if seconds less than 10
                if (seconds < 10) {
                    seconds = '0' + seconds;
                }

                timerElement.textContent = minutes + ':' + seconds;

                if (timeLeft > 0) {
                    timeLeft--;
                } else {
                    alert('Time Out!');
                    window.history.back();
                    clearInterval(timerInterval);
                }
            }

            // Initial call to display the starting time
            updateTimer();

            // Update the timer every 1 second
            var timerInterval = setInterval(updateTimer, 1000);
        };

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
        document.getElementById("movie-screen").innerHTML = document.getElementById(fieldId).getAttribute("data-value5");
        document.getElementById("movie-time").innerHTML = document.getElementById(fieldId).getAttribute("data-value2");
        document.getElementById("room-selected").innerHTML = document.getElementById(fieldId).getAttribute("data-value1");
        document.getElementById("room-selected").innerHTML = document.getElementById(fieldId).getAttribute("data-value5").toUpperCase();
        var movieScreen = document.getElementById(fieldId).getAttribute("data-value1");
        document.querySelector('input[name="movie_screen"]').value = movieScreen;
        var movieTime = document.getElementById(fieldId).getAttribute("data-value4");
        document.querySelector('input[name="movie_time"]').value = movieTime;

    }

    function updateSticky2(fieldId) {
        document.getElementById("movie-date").innerHTML = document.getElementById(fieldId).getAttribute("data-value1");
    }
        //Update Sticky - Seats
    var selectedSingleSeats = [];
    var selectedCoupleSeats = [];
    var selectedSingleSeats = [];
    var selectedSingleSeatTexts = [];
    var selectedCoupleSeatTexts = [];

    function updateStickySingleSeats(fieldId) {
        var seatElement = document.getElementById(fieldId);
        var dataValue2 = seatElement.getAttribute('data-value2'); // Lấy giá trị của data-value2
        var seatText = seatElement.textContent.trim(); // Lấy giá trị textContent

        // Kiểm tra xem đã chọn số vé chưa
        if (singleTicketAmount == 0) {
            window.alert('Select your single ticket(s) first!');
        } else {
            // Hủy chọn ghế
            if (selectedSingleSeats.includes(dataValue2)) {
                var indexToRemove = selectedSingleSeats.indexOf(dataValue2);
                if (indexToRemove !== -1) {
                    selectedSingleSeats.splice(indexToRemove, 1);
                    selectedSingleSeatTexts.splice(indexToRemove, 1);
                    selectedSeats--;
                    toggleFocusCSS(seatElement); // Gọi toggleFocusCSS để hủy chọn ghế
                }
            } else {
                // Check số ghế phải bằng số vé, không cho chọn thêm
                if (selectedSingleSeats.length >= singleTicketAmount) {
                    window.alert('You have already chosen enough seats for this type of ticket!');
                    return; // Dừng việc thực thi tiếp theo
                }
                // Chọn ghế + thêm vào ds ghế đã chọn
                selectedSingleSeats.push(dataValue2);
                selectedSingleSeatTexts.push(seatText);
                selectedSeats++;
                toggleFocusCSS(seatElement); // Gọi toggleFocusCSS để chọn ghế
            }

            // Cập nhật hiển thị ghế đã chọn
            document.getElementById('movie-seats').textContent = selectedSingleSeatTexts.join(', ');
            document.querySelector('input[name="movie_seats"]').value = selectedSingleSeats.join(',');
        }
    }



    function updateStickyCoupleSeats(fieldId) {
        var seatElement = document.getElementById(fieldId);
        var dataValue2 = seatElement.getAttribute('data-value2'); // Lấy giá trị của data-value2
        var seatText = seatElement.textContent.trim(); // Lấy giá trị textContent

        // Kiểm tra xem đã chọn số vé cặp chưa
        if (coupleTicketAmount == 0) {
            window.alert('Select your couple ticket(s) first!');
        } else {
            // Hủy chọn ghế
            if (selectedCoupleSeats.includes(dataValue2)) {
                var indexToRemove = selectedCoupleSeats.indexOf(dataValue2);
                if (indexToRemove !== -1) {
                    selectedCoupleSeats.splice(indexToRemove, 1);
                    selectedCoupleSeatTexts.splice(indexToRemove, 1);
                    selectedSeats = selectedSeats - 2;
                    toggleFocusCSS(seatElement);
                }
            } else {
                // Check số ghế phải bằng số vé, không cho chọn thêm
                if (selectedCoupleSeats.length >= coupleTicketAmount) {
                    window.alert('You have already chosen enough seats for this type of ticket!');
                    return; // Dừng việc thực thi tiếp theo
                }
                // Chọn ghế + thêm vào ds ghế đã chọn
                selectedCoupleSeats.push(dataValue2);
                selectedCoupleSeatTexts.push(seatText);
                selectedSeats = selectedSeats + 2;
                toggleFocusCSS(seatElement);
            }

            // Cập nhật hiển thị ghế đã chọn
            document.getElementById('movie-seats-couple').textContent = selectedCoupleSeatTexts.join(', ');
            document.querySelector('input[name="movie_seats_couple"]').value = selectedCoupleSeats.join(',');
        }
    }


    }

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

    function checkSeatsAndProceed() {
        if (selectedSeats < ticketAmount) {
            window.alert('You need to pick enough seat(s)!');
            return false; // Ngăn không cho submit form
        }
        if (selectedSeats == 0){
            window.alert('Select your ticket(s) first!');
            return false;
        }

        transfer_root('checkout');
        return true; // Cho phép submit form nếu đủ ghế
    }


function RegisterForm(){
    document.querySelector('.register').style.display = "block";
}

function transfer(url) {
    window.location.href = url;
  }
function transfer_root(path) {
    window.location.href = '/laravel/example-app/' + path;
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
{
    function PlayTrailer(){
        var register_form = `<div class="modal">
        <div class="modal_overlay" onclick="CloseForm()">
        </div>
        <div class="modal_body">
        <iframe width="936px" height="527px" src="https://www.youtube.com/embed/J-1z1nQGS_k?si=l7hLBlAsPaf8jF-E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
       </div>
        </div>`;
        document.getElementById('login_register_form').innerHTML= register_form;
    }

    function CloseForm() {
        var modalOverlay = document.querySelector('.modal_overlay');
        var modal = modalOverlay.closest('.modal');
        modal.style.display = 'none';
    }
}

{
    function validateEmailLogin() {
        var email = document.getElementById('email').value;
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        var emailError = document.getElementById('emailError');

        if (!emailPattern.test(email)) {
            emailError.style.display = 'inline';
        } else {
            emailError.style.display = 'none';
        }
    }
    function validatePasswordLogin() {
        var password = document.getElementById('Password').value;
        var passwordError = document.getElementById('passwordError');

        if (password === "") {
            passwordError.style.display = 'inline';
        } else {
            passwordError.style.display = 'none';
        }
    }
    function validateFullName() {
        var name = document.getElementById('user_name').value;
        var nameError = document.getElementById('nameError');

        if (name === "") {
            nameError.style.display = 'inline';
            return false;
        } else {
            nameError.style.display = 'none';
            return true;
        }
    }

    function validatePhone() {
        var phone = document.getElementById('user_phone').value;
        var phonePattern = /^[0-9]{10,11}$/;
        var phoneError = document.getElementById('phoneError');

        if (!phonePattern.test(phone)) {
            phoneError.style.display = 'inline';
            return false;
        } else {
            phoneError.style.display = 'none';
            return true;
        }
    }

    function validateEmail() {
        var email = document.getElementById('user_email').value;
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        var emailError = document.getElementById('emailError');

        if (!emailPattern.test(email)) {
            emailError.style.display = 'inline';
            return false;
        } else {
            emailError.style.display = 'none';
            return true;
        }
    }

    function validatePassword() {
        var password = document.getElementById('user_password').value;
        var passwordError = document.getElementById('passwordError');

        if (password === "") {
            passwordError.style.display = 'inline';
            return false;
        } else {
            passwordError.style.display = 'none';
            return true;
        }
    }

    function validateForm() {
        var validName = validateFullName();
        var validPhone = validatePhone();
        var validEmail = validateEmail();
        var validPassword = validatePassword();

        return validName && validPhone && validEmail && validPassword;
    }
}
