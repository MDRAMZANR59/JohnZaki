@extends('frontend.app')
@section('title')
    Notification
@endsection

@section('content')
    <main>
        <!-- banner part start hare -->
        <section class="store--banner--wrapper">
            <div class="store--banner--inner">
                <div class="container">
                    <div class="store--banner--text">
                        <h2> <span class="buyerCentral--adjust"><svg xmlns="http://www.w3.org/2000/svg" width="50"
                                    height="50" viewBox="0 0 50 50" fill="none">
                                    <path
                                        d="M37.0891 25.244C36.9441 25.0958 36.771 24.978 36.58 24.8974C36.389 24.8167 36.1838 24.7749 35.9764 24.7744C35.7691 24.7739 35.5637 24.8146 35.3723 24.8943C35.1808 24.9739 35.0071 25.0909 34.8613 25.2383C34.7156 25.3858 34.6006 25.5608 34.5231 25.7531C34.4456 25.9454 34.4072 26.1513 34.4101 26.3586C34.413 26.5659 34.4571 26.7706 34.5399 26.9607C34.6226 27.1508 34.7424 27.3226 34.8923 27.4659C36.2179 28.7703 37.2696 30.3264 37.9858 32.0428C38.7019 33.7592 39.068 35.6014 39.0626 37.4612C39.0626 39.3721 33.5844 42.1487 25.0001 42.1487C16.4157 42.1487 10.9376 39.3706 10.9376 37.4581C10.9322 35.611 11.2934 33.7811 12.0001 32.0745C12.7068 30.3679 13.7451 28.8185 15.0548 27.5159C15.204 27.3718 15.323 27.1994 15.4049 27.0087C15.4868 26.8181 15.5299 26.6131 15.5317 26.4056C15.5335 26.1981 15.494 25.9924 15.4154 25.8004C15.3369 25.6083 15.2208 25.4339 15.0741 25.2872C14.9274 25.1405 14.753 25.0244 14.5609 24.9459C14.3689 24.8673 14.1632 24.8278 13.9557 24.8296C13.7482 24.8314 13.5432 24.8745 13.3526 24.9564C13.1619 25.0383 12.9895 25.1573 12.8454 25.3065C11.2444 26.899 9.97519 28.7933 9.1113 30.8797C8.24741 32.966 7.80598 35.2031 7.81257 37.4612C7.81257 42.5362 16.6673 45.2737 25.0001 45.2737C33.3329 45.2737 42.1876 42.5362 42.1876 37.4612C42.1945 35.1878 41.747 32.936 40.8715 30.838C39.996 28.74 38.71 26.8381 37.0891 25.244Z"
                                        fill="white" />
                                    <path
                                        d="M25 26.5234C27.1632 26.5234 29.2779 25.882 31.0765 24.6801C32.8752 23.4783 34.2771 21.7701 35.1049 19.7715C35.9328 17.773 36.1494 15.5738 35.7273 13.4521C35.3053 11.3305 34.2636 9.3816 32.734 7.85196C31.2043 6.32232 29.2555 5.28063 27.1338 4.8586C25.0121 4.43658 22.813 4.65318 20.8144 5.48101C18.8158 6.30884 17.1076 7.71073 15.9058 9.50939C14.704 11.3081 14.0625 13.4227 14.0625 15.5859C14.0658 18.4857 15.2192 21.2658 17.2697 23.3163C19.3201 25.3667 22.1002 26.5201 25 26.5234ZM25 7.77344C26.5452 7.77344 28.0556 8.23164 29.3404 9.09009C30.6251 9.94853 31.6265 11.1687 32.2178 12.5962C32.8091 14.0238 32.9638 15.5946 32.6624 17.1101C32.3609 18.6256 31.6169 20.0176 30.5243 21.1102C29.4317 22.2028 28.0396 22.9469 26.5241 23.2483C25.0087 23.5498 23.4378 23.3951 22.0103 22.8037C20.5827 22.2124 19.3626 21.2111 18.5041 19.9263C17.6457 18.6416 17.1875 17.1311 17.1875 15.5859C17.19 13.5147 18.0139 11.529 19.4785 10.0644C20.9431 8.59982 22.9288 7.77592 25 7.77344Z"
                                        fill="white" />
                                </svg></span>Notifications</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner end hare -->

        <!-- notification start hare -->
        <section class="notification--wrapper">
            <div class="container">
                <div class="notification--new--wrapper">
                    <div class="notification--new--wrapper--text">
                        <div class="notification--new--wrapper--text--number">
                            <h6>New</h6>
                            <div class="notification--new--wrapper--text--numberss">
                                <span>2</span>
                            </div>
                        </div>

                        <a href="#">Mark All As Read</a>
                    </div>
                    <div class="notification--new--wrapper--item--wrapper">
                        <div class="notification--new--wrapper--item">
                            <div class="notification--text--image">
                                <div class="notification--new--wrapper--item--photo">
                                    <img src="{{ asset('frontend/images/notification_img.png') }}" alt="not found">
                                </div>
                                <div class="notification--new--wrapper--item--text">
                                    <h4><span>50% OFF</span> in Men's Ethnic Style</h4>
                                    <h5>Long Sleeve Set</h5>
                                </div>
                            </div>
                            <div class="notification--new--wrapper--item--time">
                                <h4>7: 20 <span>AM</span></h4>
                                <div class="time--dots"></div>
                            </div>
                        </div>
                        <div class="notification--new--wrapper--item">
                            <div class="notification--text--image">
                                <div class="notification--new--wrapper--item--photo">
                                    <img src="{{ asset('frontend/images/notification_img.png') }}" alt="not found">
                                </div>
                                <div class="notification--new--wrapper--item--text">
                                    <h4><span>50% OFF</span> in Men's Ethnic Style</h4>
                                    <h5>Long Sleeve Set</h5>
                                </div>
                            </div>
                            <div class="notification--new--wrapper--item--time">
                                <h4>7: 20 <span>AM</span></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div>

                    <div class="notification--new--wrapper--er">
                        <div class="notification--new--wrapper">
                            <div class="notification--new--wrapper--text">
                                <div class="notification--new--wrapper--text--number">
                                    <h6>Earlier</h6>
                                    <div class="notification--new--wrapper--text--numberss">
                                        <span>2</span>
                                    </div>
                                </div>
                            </div>
                            <div class="notification--new--wrapper--item--wrapper">
                                <div class="notification--new--wrapper--item">
                                    <div class="notification--text--image">
                                        <div class="notification--new--wrapper--item--photo">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <g clip-path="url(#clip0_11302_13046)">
                                                    <path
                                                        d="M20.8449 11.2324V21.9022H3.18089V11.2324H1.53516V22.725C1.53516 23.1795 1.9035 23.5478 2.358 23.5478H21.6677C22.1222 23.5478 22.4906 23.1795 22.4906 22.725V11.2324H20.8449Z"
                                                        fill="white" />
                                                    <path
                                                        d="M23.1772 5.06055H0.822844C0.368344 5.06055 0 5.42889 0 5.88339V11.2594C0 11.7139 0.368344 12.0822 0.822844 12.0822H23.1771C23.6316 12.0822 24 11.7141 24 11.2594V5.88339C24 5.42889 23.6317 5.06055 23.1772 5.06055ZM22.3543 10.4368H1.64573V6.70656H22.3543V10.4368H22.3543Z"
                                                        fill="white" />
                                                    <path
                                                        d="M12.8081 5.67552C12.7521 5.46214 11.3947 0.453125 7.43153 0.453125C5.70738 0.453125 4.30469 1.85581 4.30469 3.57997C4.30469 5.30413 5.69505 6.70681 7.40411 6.70681H12.0121C12.2669 6.70681 12.5078 6.58859 12.6635 6.3867C12.8193 6.18481 12.8725 5.92208 12.8081 5.67552ZM7.40416 5.06112C6.589 5.06112 5.95042 4.4105 5.95042 3.57997C5.95042 2.77714 6.62875 2.09881 7.43158 2.09881C9.2372 2.09881 10.3184 3.87758 10.8382 5.06108L7.40416 5.06112Z"
                                                        fill="white" />
                                                    <path
                                                        d="M16.5949 0.453125C12.6317 0.453125 11.2743 5.46214 11.2183 5.67552C11.1864 5.79723 11.1828 5.92465 11.2079 6.04797C11.2329 6.17128 11.2859 6.2872 11.3628 6.38682C11.4397 6.48643 11.5384 6.56708 11.6514 6.62256C11.7643 6.67805 11.8885 6.70689 12.0143 6.70686H16.6223C18.3313 6.70686 19.7217 5.30417 19.7217 3.58002C19.7218 1.85581 18.3191 0.453125 16.5949 0.453125ZM16.6223 5.06112H13.185C13.7009 3.87758 14.7789 2.09886 16.5952 2.09886C17.398 2.09886 18.0763 2.77719 18.0763 3.58002C18.0763 4.4105 17.4378 5.06112 16.6223 5.06112Z"
                                                        fill="white" />
                                                    <path d="M11.1914 5.88281H12.8371V22.724H11.1914V5.88281Z"
                                                        fill="white" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_11302_13046">
                                                        <rect width="24" height="24" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div class="notification--new--wrapper--item--text">
                                            <h4> You got a promo code</h4>
                                            <span>E46AUD#</span>
                                        </div>
                                    </div>
                                    <div class="notification--new--wrapper--item--time">
                                        <h4>7: 20 <span>AM</span></h4>
                                        <div class="time--dots"></div>
                                    </div>
                                </div>
                                <div class="notification--new--wrapper--item">
                                    <div class="notification--text--image">
                                        <div class="notification--new--wrapper--item--photo">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M19.1503 5.25H5.33588L4.15554 3.1346C4.02306 2.89715 3.77242 2.75 3.50049 2.75H2.00028C1.58601 2.75 1.25018 3.08579 1.25018 3.5C1.25018 3.91421 1.58601 4.25 2.00028 4.25H3.06003L4.22488 6.33765L6.91132 12.2809L6.91407 12.2869L7.15069 12.8104L4.45348 15.687C4.25955 15.8939 4.19884 16.1924 4.29658 16.4585C4.39433 16.7247 4.63381 16.913 4.91554 16.9452L7.37401 17.2261C10.4491 17.5775 13.5542 17.5775 16.6293 17.2261L19.0878 16.9452C19.4994 16.8981 19.7949 16.5264 19.7479 16.1148C19.7008 15.7033 19.329 15.4078 18.9174 15.4549L16.459 15.7358C13.4971 16.0742 10.5062 16.0742 7.54435 15.7358L6.5687 15.6243L8.54834 13.513C8.56749 13.4925 8.58528 13.4713 8.6017 13.4494L9.35462 13.5474C10.4097 13.6847 11.4762 13.7116 12.5368 13.6277C15.0106 13.4321 17.3034 12.2551 18.904 10.3591L19.4822 9.67425C19.5016 9.65125 19.5196 9.62711 19.5361 9.60194L20.6137 7.96009C21.3774 6.79633 20.5425 5.25 19.1503 5.25ZM8.65746 11.944C8.49202 11.9225 8.34937 11.8175 8.27972 11.666L8.27838 11.6631L6.05757 6.75H19.1503C19.3492 6.75 19.4685 6.9709 19.3594 7.13716L18.3067 8.74123L17.7577 9.39152C16.4154 10.9814 14.4929 11.9683 12.4186 12.1324C11.4618 12.208 10.4999 12.1837 9.54819 12.0599L8.65746 11.944Z"
                                                    fill="white" />
                                                <path
                                                    d="M6.5009 18.5C5.67236 18.5 5.00069 19.1716 5.00069 20C5.00069 20.8284 5.67236 21.5 6.5009 21.5C7.32944 21.5 8.0011 20.8284 8.0011 20C8.0011 19.1716 7.32944 18.5 6.5009 18.5Z"
                                                    fill="white" />
                                                <path
                                                    d="M16.0022 20C16.0022 19.1716 16.6738 18.5 17.5024 18.5C18.3309 18.5 19.0026 19.1716 19.0026 20C19.0026 20.8284 18.3309 21.5 17.5024 21.5C16.6738 21.5 16.0022 20.8284 16.0022 20Z"
                                                    fill="white" />
                                            </svg>
                                        </div>
                                        <div class="notification--new--wrapper--item--text">
                                            <h4> Yor order <span>#1967TF</span> has arrived </h4>
                                        </div>
                                    </div>
                                    <div class="notification--new--wrapper--item--time">
                                        <h4>7: 20 <span>AM</span></h4>
                                    </div>
                                </div>
                                <div class="notification--new--wrapper--item">
                                    <div class="notification--text--image">
                                        <div class="notification--new--wrapper--item--photo">
                                            <img src="{{ asset('frontend/images/notification_img.png') }}" alt="not found">
                                        </div>
                                        <div class="notification--new--wrapper--item--text">
                                            <h4><span>50% OFF</span> in Men's Ethnic Style</h4>
                                            <h5>Long Sleeve Set</h5>
                                        </div>
                                    </div>
                                    <div class="notification--new--wrapper--item--time">
                                        <h4>7: 20 <span>AM</span></h4>
                                        <div class="time--dots"></div>
                                    </div>
                                </div>
                                <div class="notification--new--wrapper--item">
                                    <div class="notification--text--image">
                                        <div class="notification--new--wrapper--item--photo">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M19.1503 5.25H5.33588L4.15554 3.1346C4.02306 2.89715 3.77242 2.75 3.50049 2.75H2.00028C1.58601 2.75 1.25018 3.08579 1.25018 3.5C1.25018 3.91421 1.58601 4.25 2.00028 4.25H3.06003L4.22488 6.33765L6.91132 12.2809L6.91407 12.2869L7.15069 12.8104L4.45348 15.687C4.25955 15.8939 4.19884 16.1924 4.29658 16.4585C4.39433 16.7247 4.63381 16.913 4.91554 16.9452L7.37401 17.2261C10.4491 17.5775 13.5542 17.5775 16.6293 17.2261L19.0878 16.9452C19.4994 16.8981 19.7949 16.5264 19.7479 16.1148C19.7008 15.7033 19.329 15.4078 18.9174 15.4549L16.459 15.7358C13.4971 16.0742 10.5062 16.0742 7.54435 15.7358L6.5687 15.6243L8.54834 13.513C8.56749 13.4925 8.58528 13.4713 8.6017 13.4494L9.35462 13.5474C10.4097 13.6847 11.4762 13.7116 12.5368 13.6277C15.0106 13.4321 17.3034 12.2551 18.904 10.3591L19.4822 9.67425C19.5016 9.65125 19.5196 9.62711 19.5361 9.60194L20.6137 7.96009C21.3774 6.79633 20.5425 5.25 19.1503 5.25ZM8.65746 11.944C8.49202 11.9225 8.34937 11.8175 8.27972 11.666L8.27838 11.6631L6.05757 6.75H19.1503C19.3492 6.75 19.4685 6.9709 19.3594 7.13716L18.3067 8.74123L17.7577 9.39152C16.4154 10.9814 14.4929 11.9683 12.4186 12.1324C11.4618 12.208 10.4999 12.1837 9.54819 12.0599L8.65746 11.944Z"
                                                    fill="white" />
                                                <path
                                                    d="M6.5009 18.5C5.67236 18.5 5.00069 19.1716 5.00069 20C5.00069 20.8284 5.67236 21.5 6.5009 21.5C7.32944 21.5 8.0011 20.8284 8.0011 20C8.0011 19.1716 7.32944 18.5 6.5009 18.5Z"
                                                    fill="white" />
                                                <path
                                                    d="M16.0022 20C16.0022 19.1716 16.6738 18.5 17.5024 18.5C18.3309 18.5 19.0026 19.1716 19.0026 20C19.0026 20.8284 18.3309 21.5 17.5024 21.5C16.6738 21.5 16.0022 20.8284 16.0022 20Z"
                                                    fill="white" />
                                            </svg>
                                        </div>
                                        <div class="notification--new--wrapper--item--text">
                                            <h4><span>50% OFF</span> in Men's Ethnic Style</h4>
                                            <h5>Long Sleeve Set</h5>
                                        </div>
                                    </div>
                                    <div class="notification--new--wrapper--item--time">
                                        <h4>7: 20 <span>AM</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- notification end hare -->
    </main>
@endsection
