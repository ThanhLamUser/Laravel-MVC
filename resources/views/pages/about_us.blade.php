@extends('layout')
@section('content')
    <div class="content">
        <div class="grid wide">
            <div class="introduction-page col l-12 m-12 c-12" style="display:flex">
                <div class="user-buttons col l-2 m-4 c-6">
                    <div class="row sm-gutter">
                        <div>
                            <button class="user-buttons--active about-us">ABOUT US</button>
                            <button class="contact-us" onclick="transfer('contact-us')">CONTACT
                                US</button>
                        </div>
                    </div>
                </div>

                <div class="introducing-the-cinema col l-10 m-4 c-6">
                    <h1>ABOUT US</h1>

                    <img src="https://vietnamteachingjobs.com/wp-content/uploads/2023/11/visiting-the-cinema-in-vietnam-2.jpg"
                        alt="" class="itc-img">

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec egestas eleifend libero a efficitur.
                        Curabitur eget ex nisl. Sed cursus augue magna, vel aliquet nisi gravida fringilla. Vestibulum ac
                        elit eget erat dapibus placerat a at arcu. Morbi mollis quam et convallis egestas. Praesent sit amet
                        elit cursus, venenatis nisi quis, fermentum elit. Nullam sagittis dui vel ligula varius imperdiet.
                        Integer rhoncus tempus libero, ut blandit eros bibendum sit amet.
                    </p>

                    <p>
                        Etiam id mollis ante. Ut suscipit odio mauris, vel varius nisi hendrerit eget. In quam sem, posuere
                        in leo a, porta condimentum risus. In dui odio, accumsan non placerat in, consequat nec urna. Ut
                        consequat dictum posuere. Quisque malesuada lectus facilisis tortor lobortis interdum. Nullam sed
                        nisl aliquam, eleifend sapien vel, porttitor augue. Maecenas in velit et nisi ornare rhoncus.
                        Quisque pulvinar enim ac tincidunt sodales. Praesent sollicitudin mollis lectus quis semper.
                        Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin et risus id eros rutrum
                        fermentum.
                    </p>

                    <p>
                        Aliquam ut ipsum interdum, auctor felis sit amet, fermentum leo. Praesent vel posuere dui. Aenean
                        ornare leo turpis, at feugiat lacus euismod sit amet. Aliquam dapibus magna aliquet felis finibus,
                        congue tristique quam gravida. Proin pretium nisi ut malesuada aliquet. Praesent molestie laoreet
                        sapien sit amet finibus. Fusce justo magna, rutrum vel nisl nec, bibendum viverra odio. Nullam
                        fermentum sapien et justo lacinia, sit amet volutpat velit laoreet. Proin pellentesque leo cursus mi
                        facilisis, ut porttitor diam tincidunt. Donec venenatis enim vel urna consequat varius. Ut at
                        hendrerit velit. Proin a ultrices sapien. Donec semper at leo vitae pharetra.
                    </p>

                    <p>
                        Cras venenatis erat dui, vitae dignissim dolor posuere quis. Donec non vestibulum nulla. Class
                        aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed iaculis,
                        metus vel consequat accumsan, velit purus lobortis nisi, sit amet aliquet risus mauris scelerisque
                        risus. Quisque consequat malesuada lorem, at pellentesque nunc bibendum id. Duis condimentum, lorem
                        in dictum pellentesque, sapien erat facilisis mi, ut condimentum nunc odio at nunc. Vivamus odio
                        dolor, elementum eget ultricies consectetur, efficitur ac ante. Quisque lacinia facilisis justo nec
                        varius. Nam blandit porta accumsan. Phasellus accumsan nec risus posuere pharetra. Praesent eleifend
                        quam sit amet elementum interdum. Nunc tincidunt, erat et imperdiet interdum, augue lorem aliquam
                        velit, et eleifend dolor nunc et nibh. Curabitur libero lectus, mollis at fermentum eget, convallis
                        in tortor. Donec sodales velit est.
                    </p>

                    <div class="itc-img-container">
                        <img src="https://www.vietvisiontravel.com/wp-content/uploads/2017/07/cgv-vincom-ba-trieu-cinema-hanoi.jpg"
                            alt="" class="itc-smol-img">
                        <img src="https://uploads.metropoles.com/wp-content/uploads/2016/10/18115636/sala-de-cinema.jpg"
                            alt="" class="itc-smol-img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2KM2lQdNJIjSH6Su5Sm-She4spRNzBwW6WlwRknfYIg&s"
                            alt="" class="itc-smol-img">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
