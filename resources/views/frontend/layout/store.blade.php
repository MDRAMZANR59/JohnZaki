@extends('frontend.app')
@section('title')
    Store
@endsection
@section('content')
    <main>
        <!-- banner part start hare -->
        <section class="store--banner--wrapper">
            <div class="store--banner--inner">
                <div class="container">
                    <div class="store--banner--text">
                        <h2>Store - Get your desire cloths</h2>
                        <p>Home - Products</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner end hare -->

        <!-- feature store start -->
        <section class="feature--store--wrapper">
            <div class="container">
                <div class="feature--main">
                    <h2 class="subHeading">Our featured store</h2>
                </div>
                <div class="store--adjust">
                    <div class="storee--inner--filture">
                        <h5>Filter</h5>
                    </div>
                    <div class="store--feature--inner--text">
                        <div class="store--feature--text--left">
                            <h4>Blazers & Sport Coats</h4>
                            <p>Male & Female</p>
                        </div>
                        <!-- for mobile -->
                        <div class="store--filture--ic">
                            <div class="store--filture--svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M3.53125 17.426C3.53125 17.0118 3.86704 16.676 4.28125 16.676H10.582C10.9962 16.676 11.332 17.0118 11.332 17.426C11.332 17.8402 10.9962 18.176 10.582 18.176H4.28125C3.86704 18.176 3.53125 17.8402 3.53125 17.426Z"
                                        fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.6406 7.73364C12.6406 7.31943 12.9764 6.98364 13.3906 6.98364H19.6913C20.1056 6.98364 20.4413 7.31943 20.4413 7.73364C20.4413 8.14786 20.1056 8.48364 19.6913 8.48364H13.3906C12.9764 8.48364 12.6406 8.14786 12.6406 7.73364Z"
                                        fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M3.5 7.67951C3.5 5.96457 4.89903 4.58325 6.61314 4.58325C8.32726 4.58325 9.72629 5.96457 9.72629 7.67951C9.72629 9.39444 8.32726 10.7758 6.61314 10.7758C4.89903 10.7758 3.5 9.39444 3.5 7.67951ZM6.61314 6.08325C5.71729 6.08325 5 6.80313 5 7.67951C5 8.55589 5.71729 9.27576 6.61314 9.27576C7.509 9.27576 8.22629 8.55589 8.22629 7.67951C8.22629 6.80313 7.509 6.08325 6.61314 6.08325Z"
                                        fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14.7734 17.3865C14.7734 15.6714 16.1726 14.2903 17.8874 14.2903C19.6019 14.2903 20.9997 15.6719 20.9997 17.3865C20.9997 19.1011 19.6019 20.4828 17.8874 20.4828C16.1726 20.4828 14.7734 19.1016 14.7734 17.3865ZM17.8874 15.7903C16.9906 15.7903 16.2734 16.5103 16.2734 17.3865C16.2734 18.2627 16.9906 18.9828 17.8874 18.9828C18.7829 18.9828 19.4997 18.2633 19.4997 17.3865C19.4997 16.5098 18.7829 15.7903 17.8874 15.7903Z"
                                        fill="white" />
                                </svg>
                            </div>
                            <p>Filter</p>
                        </div>
                        <!-- for mobile -->
                        <div class="store--feature--text--right">
                            <div class="store--selector">
                                <div class="selector">
                                    <span>Sort by:</span>
                                    <select class="nice--select">
                                        <option data-display="Select">Popular</option>
                                        <option value="1">Some option</option>
                                        <option value="2">Another</option>
                                        <option value="4">Potato</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="store--feature--main">
                    <div class="store--feature--filter">
                        <div class="store--gender">
                            <h6>Gender</h6>
                            <div class="store--gender--male">
                                <input type="checkbox" id="male" name="male" value="male">
                                <label for="male">Male</label>
                            </div>
                            <div class="store--gender--female">
                                <input type="checkbox" id="female" name="female" value="female">
                                <label for="female">Female</label>
                            </div>
                        </div>
                        <div class="store--age">
                            <h6>Age group</h6>
                            <div class="store--gender--male">
                                <input type="checkbox" id="adult" name="adult" value="adult">
                                <label for="adult">Adult</label>
                            </div>
                            <div class="store--gender--female">
                                <input type="checkbox" id="children" name="children" value="children">
                                <label for="children">Children</label>
                            </div>
                        </div>
                        <div class="store--price">
                            <h6>Price</h6>
                            <div class="pricee--nnnn">
                                <span class="minPrice">Min <input type="number" class="minNumber"></span>
                                <span>Max <input type="number" class="minNumber"></span>
                            </div>
                        </div>
                        <div class="store--sizee">
                            <h6>Size</h6>
                            <div class="store--gender--male">
                                <input type="checkbox" id="small" name="small" value="small">
                                <label for="small">Small</label>
                            </div>
                            <div class="store--gender--female">
                                <input type="checkbox" id="medium" name="medium" value="medium">
                                <label for="medium">Medium</label>
                            </div>
                            <div class="store--gender--female">
                                <input type="checkbox" id="large" name="large" value="large">
                                <label for="large">Large</label>
                            </div>
                        </div>
                    </div>

                    <div class="storefeature--inner--wrapper">
                        <div class="store--feature--item">
                            <div class="store--feature--item--img">
                                <img src="{{ asset('frontend/images/feature_store_item1.png') }}" alt="not found">
                            </div>

                            <div class="store--feature--item--adjust">
                                <div class="store--feature--item--text">
                                    <h4 class="store--feature--item--subtext">Men's Slim-Fit Linen Suit Jackets, Created
                                        for Macy's</h4>
                                    <div class="store--fature--item--gen">
                                        <div class="store--gender">
                                            <p>Gene: <span>Men</span></p>
                                        </div>
                                        <div class="store--dot">
                                            <div class="store--doted"></div>
                                        </div>
                                        <div class="store--size">
                                            <p>Size: <span>Please select</span></p>
                                        </div>
                                    </div>
                                    <div class="store--fture--pricea">
                                        <h6>£1450.99</h6>
                                        <h5>£1370.99</h5>
                                    </div>


                                </div>
                                <a class="store--fature--btn" href="product.html">
                                    <span>Shop Now</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                        viewBox="0 0 19 19" fill="#000">
                                        <path d="M11 4.25L16.25 9.5M16.25 9.5L11 14.75M16.25 9.5L2.75 9.5" stroke="#1A1A1A"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>


                        </div>


                        <div class="store--feature--item">
                            <div class="store--feature--item--img">
                                <img src="{{ asset('frontend/images/feature_store_item2.png') }}" alt="not found">
                            </div>

                            <div class="store--feature--item--adjust">

                                <div class="store--feature--item--text">
                                    <h4 class="store--feature--item--subtext">Men's Slim-Fit Linen Suit Jackets, Created
                                        for Macy's</h4>
                                    <div class="store--fature--item--gen">
                                        <div class="store--gender">
                                            <p>Gene: <span>Men</span></p>
                                        </div>
                                        <div class="store--dot">
                                            <div class="store--doted"></div>
                                        </div>
                                        <div class="store--size">
                                            <p>Size: <span>Please select</span></p>
                                        </div>
                                    </div>
                                    <div class="store--fture--pricea">
                                        <h6>£1450.99</h6>
                                        <h5>£1370.99</h5>
                                    </div>
                                </div>
                                <a class="store--fature--btn" href="product.html">
                                    <span>Shop Now</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                        viewBox="0 0 19 19" fill="#000">
                                        <path d="M11 4.25L16.25 9.5M16.25 9.5L11 14.75M16.25 9.5L2.75 9.5" stroke="#1A1A1A"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>

                            </div>
                        </div>


                        <div class="store--feature--item">
                            <div class="store--feature--item--img">
                                <img src="{{ asset('frontend/images/feature_store_item3.png') }}" alt="not found">
                            </div>

                            <div class="store--feature--item--adjust">
                                <div class="store--feature--item--text">
                                    <h4 class="store--feature--item--subtext">Men's Slim-Fit Linen Suit Jackets, Created
                                        for Macy's</h4>
                                    <div class="store--fature--item--gen">
                                        <div class="store--gender">
                                            <p>Gene: <span>Men</span></p>
                                        </div>
                                        <div class="store--dot">
                                            <div class="store--doted"></div>
                                        </div>
                                        <div class="store--size">
                                            <p>Size: <span>Please select</span></p>
                                        </div>
                                    </div>
                                    <div class="store--fture--pricea">
                                        <h6>£1450.99</h6>
                                        <h5>£1370.99</h5>
                                    </div>


                                </div>
                                <a class="store--fature--btn" href="product.html">
                                    <span>Shop Now</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                        viewBox="0 0 19 19" fill="#000">
                                        <path d="M11 4.25L16.25 9.5M16.25 9.5L11 14.75M16.25 9.5L2.75 9.5" stroke="#1A1A1A"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>

                        </div>



                        <div class="store--feature--item">
                            <div class="store--feature--item--img">
                                <img src="{{ asset('frontend/images/feature_store_item4.png') }}" alt="not found">
                            </div>

                            <div class="store--feature--item--adjust">
                                <div class="store--feature--item--text">
                                    <h4 class="store--feature--item--subtext">Men's Slim-Fit Linen Suit Jackets, Created
                                        for Macy's</h4>
                                    <div class="store--fature--item--gen">
                                        <div class="store--gender">
                                            <p>Gene: <span>Men</span></p>
                                        </div>
                                        <div class="store--dot">
                                            <div class="store--doted"></div>
                                        </div>
                                        <div class="store--size">
                                            <p>Size: <span>Please select</span></p>
                                        </div>
                                    </div>
                                    <div class="store--fture--pricea">
                                        <h6>£1450.99</h6>
                                        <h5>£1370.99</h5>
                                    </div>



                                </div>
                                <a class="store--fature--btn" href="product.html">
                                    <span>Shop Now</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                        viewBox="0 0 19 19" fill="#000">
                                        <path d="M11 4.25L16.25 9.5M16.25 9.5L11 14.75M16.25 9.5L2.75 9.5" stroke="#1A1A1A"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>

                        </div>


                        <div class="store--feature--item">
                            <div class="store--feature--item--img">
                                <img src="{{ asset('frontend/images/feature_store_item5.png') }}" alt="not found">
                            </div>
                            <div class="store--feature--item--text">
                                <h4 class="store--feature--item--subtext">Men's Slim-Fit Linen Suit Jackets, Created for
                                    Macy's</h4>
                                <div class="store--fature--item--gen">
                                    <div class="store--gender">
                                        <p>Gene: <span>Men</span></p>
                                    </div>
                                    <div class="store--dot">
                                        <div class="store--doted"></div>
                                    </div>
                                    <div class="store--size">
                                        <p>Size: <span>Please select</span></p>
                                    </div>
                                </div>
                                <div class="store--fture--pricea">
                                    <h6>£1450.99</h6>
                                    <h5>£1370.99</h5>
                                </div>
                                <a class="store--fature--btn" href="product.html">
                                    <span>Shop Now</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                        viewBox="0 0 19 19" fill="#000">
                                        <path d="M11 4.25L16.25 9.5M16.25 9.5L11 14.75M16.25 9.5L2.75 9.5" stroke="#1A1A1A"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>


                        <div class="store--feature--item">
                            <div class="store--feature--item--img">
                                <img src="{{ asset('frontend/images/feature_store_item6.png') }}" alt="not found">
                            </div>

                            <div class="store--feature--item--adjust">
                                <div class="store--feature--item--text">
                                    <h4 class="store--feature--item--subtext">Men's Slim-Fit Linen Suit Jackets, Created
                                        for Macy's</h4>
                                    <div class="store--fature--item--gen">
                                        <div class="store--gender">
                                            <p>Gene: <span>Men</span></p>
                                        </div>
                                        <div class="store--dot">
                                            <div class="store--doted"></div>
                                        </div>
                                        <div class="store--size">
                                            <p>Size: <span>Please select</span></p>
                                        </div>
                                    </div>
                                    <div class="store--fture--pricea">
                                        <h6>£1450.99</h6>
                                        <h5>£1370.99</h5>
                                    </div>


                                </div>
                                <a class="store--fature--btn" href="product.html">
                                    <span>Shop Now</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                        viewBox="0 0 19 19" fill="#000">
                                        <path d="M11 4.25L16.25 9.5M16.25 9.5L11 14.75M16.25 9.5L2.75 9.5" stroke="#1A1A1A"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>

                        </div>


                        <div class="store--feature--item">
                            <div class="store--feature--item--img">
                                <img src="{{ asset('frontend/images/feature_store_item7.png') }}" alt="not found">
                            </div>

                            <div class="store--feature--item--adjust">
                                <div class="store--feature--item--text">
                                    <h4 class="store--feature--item--subtext">Men's Slim-Fit Linen Suit Jackets, Created
                                        for Macy's</h4>
                                    <div class="store--fature--item--gen">
                                        <div class="store--gender">
                                            <p>Gene: <span>Men</span></p>
                                        </div>
                                        <div class="store--dot">
                                            <div class="store--doted"></div>
                                        </div>
                                        <div class="store--size">
                                            <p>Size: <span>Please select</span></p>
                                        </div>
                                    </div>
                                    <div class="store--fture--pricea">
                                        <h6>£1450.99</h6>
                                        <h5>£1370.99</h5>
                                    </div>
                                </div>
                                <a class="store--fature--btn" href="product.html">
                                    <span>Shop Now</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                        viewBox="0 0 19 19" fill="#000">
                                        <path d="M11 4.25L16.25 9.5M16.25 9.5L11 14.75M16.25 9.5L2.75 9.5" stroke="#1A1A1A"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>


                        <div class="store--feature--item">
                            <div class="store--feature--item--img">
                                <img src="{{ asset('frontend/images/feature_store_item8.png') }}" alt="not found">
                            </div>

                            <div class="store--feature--item--adjust">
                                <div class="store--feature--item--text">
                                    <h4 class="store--feature--item--subtext">Men's Slim-Fit Linen Suit Jackets, Created
                                        for Macy's</h4>
                                    <div class="store--fature--item--gen">
                                        <div class="store--gender">
                                            <p>Gene: <span>Men</span></p>
                                        </div>
                                        <div class="store--dot">
                                            <div class="store--doted"></div>
                                        </div>
                                        <div class="store--size">
                                            <p>Size: <span>Please select</span></p>
                                        </div>
                                    </div>
                                    <div class="store--fture--pricea">
                                        <h6>£1450.99</h6>
                                        <h5>£1370.99</h5>
                                    </div>
                                </div>
                                <a class="store--fature--btn" href="product.html">
                                    <span>Shop Now</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                        viewBox="0 0 19 19" fill="#000">
                                        <path d="M11 4.25L16.25 9.5M16.25 9.5L11 14.75M16.25 9.5L2.75 9.5" stroke="#1A1A1A"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>


                        <div class="store--feature--item">
                            <div class="store--feature--item--img">
                                <img src="{{ asset('frontend/images/feature_store_item9.png') }}" alt="not found">
                            </div>

                            <div class="store--feature--item--adjust">
                                <div class="store--feature--item--text">
                                    <h4 class="store--feature--item--subtext">Men's Slim-Fit Linen Suit Jackets, Created
                                        for Macy's</h4>
                                    <div class="store--fature--item--gen">
                                        <div class="store--gender">
                                            <p>Gene: <span>Men</span></p>
                                        </div>
                                        <div class="store--dot">
                                            <div class="store--doted"></div>
                                        </div>
                                        <div class="store--size">
                                            <p>Size: <span>Please select</span></p>
                                        </div>
                                    </div>
                                    <div class="store--fture--pricea">
                                        <h6>£1450.99</h6>
                                        <h5>£1370.99</h5>
                                    </div>
                                </div>
                                <a class="store--fature--btn" href="product.html">
                                    <span>Shop Now</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                        viewBox="0 0 19 19" fill="#000">
                                        <path d="M11 4.25L16.25 9.5M16.25 9.5L11 14.75M16.25 9.5L2.75 9.5" stroke="#1A1A1A"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>


                        <div class="store--feature--item">
                            <div class="store--feature--item--img">
                                <img src="{{ asset('frontend/images/feature_store_item1.png') }}" alt="not found">
                            </div>

                            <div class="store--feature--item--adjust">
                                <div class="store--feature--item--text">
                                    <h4 class="store--feature--item--subtext">Men's Slim-Fit Linen Suit Jackets, Created
                                        for Macy's</h4>
                                    <div class="store--fature--item--gen">
                                        <div class="store--gender">
                                            <p>Gene: <span>Men</span></p>
                                        </div>
                                        <div class="store--dot">
                                            <div class="store--doted"></div>
                                        </div>
                                        <div class="store--size">
                                            <p>Size: <span>Please select</span></p>
                                        </div>
                                    </div>
                                    <div class="store--fture--pricea">
                                        <h6>£1450.99</h6>
                                        <h5>£1370.99</h5>
                                    </div>
                                </div>
                                <a class="store--fature--btn" href="product.html">
                                    <span>Shop Now</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                        viewBox="0 0 19 19" fill="#000">
                                        <path d="M11 4.25L16.25 9.5M16.25 9.5L11 14.75M16.25 9.5L2.75 9.5" stroke="#1A1A1A"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>


                        <div class="store--feature--item">
                            <div class="store--feature--item--img">
                                <img src="{{ asset('frontend/images/feature_store_item7.png') }}" alt="not found">
                            </div>

                            <div class="store--feature--item--adjust">
                                <div class="store--feature--item--text">
                                    <h4 class="store--feature--item--subtext">Men's Slim-Fit Linen Suit Jackets, Created
                                        for Macy's</h4>
                                    <div class="store--fature--item--gen">
                                        <div class="store--gender">
                                            <p>Gene: <span>Men</span></p>
                                        </div>
                                        <div class="store--dot">
                                            <div class="store--doted"></div>
                                        </div>
                                        <div class="store--size">
                                            <p>Size: <span>Please select</span></p>
                                        </div>
                                    </div>
                                    <div class="store--fture--pricea">
                                        <h6>£1450.99</h6>
                                        <h5>£1370.99</h5>
                                    </div>

                                </div>
                                <a class="store--fature--btn" href="product.html">
                                    <span>Shop Now</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                        viewBox="0 0 19 19" fill="#000">
                                        <path d="M11 4.25L16.25 9.5M16.25 9.5L11 14.75M16.25 9.5L2.75 9.5" stroke="#1A1A1A"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>

                        </div>


                        <div class="store--feature--item">
                            <div class="store--feature--item--img">
                                <img src="{{ asset('frontend/images/feature_store_item2.png') }}" alt="not found">
                            </div>

                            <div class="store--feature--item--adjust">
                                <div class="store--feature--item--text">
                                    <h4 class="store--feature--item--subtext">Men's Slim-Fit Linen Suit Jackets, Created
                                        for Macy's</h4>
                                    <div class="store--fature--item--gen">
                                        <div class="store--gender">
                                            <p>Gene: <span>Men</span></p>
                                        </div>
                                        <div class="store--dot">
                                            <div class="store--doted"></div>
                                        </div>
                                        <div class="store--size">
                                            <p>Size: <span>Please select</span></p>
                                        </div>
                                    </div>
                                    <div class="store--fture--pricea">
                                        <h6>£1450.99</h6>
                                        <h5>£1370.99</h5>
                                    </div>


                                </div>
                                <a class="store--fature--btn" href="product.html">
                                    <span>Shop Now</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                        viewBox="0 0 19 19" fill="#000">
                                        <path d="M11 4.25L16.25 9.5M16.25 9.5L11 14.75M16.25 9.5L2.75 9.5" stroke="#1A1A1A"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- feature store end -->

        <!-- sale strat hare -->
        <section class="sale--wrapper">
            <div class="sale--freme">
                <div class="sale--fream--two">
                    <img src="{{ asset('frontend/images/sale_fream.png') }}" alt="not found">
                    <div class="sale--discount--main">
                        <div class="sale--discount">
                            <div class="sale--discount--text">
                                <p>UP TO</p>
                                <h6>50 <span>%</span></h6>
                                <h4>OFF</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="sale--wrapper--text">
                    <h3>Big Sale </h3>
                    <h4>This Weekend!</h4>
                </div>
            </div>
        </section>
        <!-- sale end hare -->

        <!-- awsome client start hare -->
        <section class="awsome--clint--wrapper">
            <div class="container">
                <div class="awsome--clint-main">
                    <h2 class="subHeading">What we offer For Clients</h2>
                </div>
                <div class="awsome--clint--inner">
                    <!-- owl 2 -->
                    <div class="rafi-1 owl-carousel owl-theme">
                        <div class="item">
                            <div class="awsome--client--item">
                                <div class="awsome--clint--img">
                                    <img src="{{ asset('frontend/images/test_img.png') }}" alt="not found">
                                    <div class="awsome--clint--fream">
                                        <img src="{{ asset('frontend/images/client--frame.png') }}" alt="not found">
                                    </div>
                                </div>
                                <div class="awsome--clint--text">
                                    <div class="awsome--client--fream">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="72" height="48"
                                            viewBox="0 0 72 48" fill="none">
                                            <g clip-path="url(#clip0_10153_5699)">
                                                <path
                                                    d="M71.9001 0.024475C70.0643 5.94652 68.0444 11.7262 66.5021 17.6286C64.1837 26.492 62.1589 35.434 60.1041 44.3662C59.7459 45.9228 59.323 46.7036 57.4424 46.7772C50.3728 47.0571 43.3131 47.5776 36.2484 47.995C35.7833 47.9833 35.3196 47.9407 34.8604 47.8674C35.4275 46.2125 35.94 44.6755 36.4822 43.1435C41.4872 29.1044 47.4275 15.4827 55.0196 2.58285C55.2449 2.09507 55.6088 1.68231 56.0671 1.39467C56.5255 1.10703 57.0585 0.956848 57.6016 0.96238C61.5021 0.751229 65.3977 0.338756 69.2932 0.0343055C70.139 -0.0344413 70.9897 0.024475 71.9001 0.024475Z"
                                                    fill="#1A1A1A" />
                                                <path
                                                    d="M37.5447 0.102823C32.1666 15.4235 28.3756 30.8818 25.301 46.6542L0.922852 47.9899C1.22633 46.7328 1.38554 45.8538 1.6542 45.0092C6.28604 30.6117 12.7238 17.0195 20.0224 3.76114C21.0423 1.90989 22.2512 1.01126 24.5 0.976889C27.5945 0.927784 30.6791 0.397451 33.7736 0.132284C34.893 0.0193431 36.0472 0.102823 37.5447 0.102823Z"
                                                    fill="#1A1A1A" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_10153_5699">
                                                    <rect width="71" height="48" fill="white"
                                                        transform="translate(0.899414 -0.00012207)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                    <p>Consult With Us The Suitable Material for Your Project
                                        Nulla in nibh at leo faucibus molestie eget nec velit. Phasellus vel felis vel orci
                                        iaculis tempor tristique sagittis urna. Phasellus ac ante in lacus tempor egestas.
                                    </p>
                                    <h3>Cameron Williamson</h3>
                                    <h4>Marketing Coordinator</h4>
                                    <div class="star--icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                            viewBox="0 0 25 24" fill="none">
                                            <path
                                                d="M22.8994 10.0999C22.9994 9.59994 22.5994 8.99994 22.0994 8.99994L16.3994 8.19994L13.7994 2.99994C13.6994 2.79994 13.5994 2.69994 13.3994 2.59994C12.8994 2.29994 12.2994 2.49994 11.9994 2.99994L9.49941 8.19994L3.79941 8.99994C3.49941 8.99994 3.29941 9.09994 3.19941 9.29994C2.79941 9.69994 2.79941 10.2999 3.19941 10.6999L7.29941 14.6999L6.29941 20.3999C6.29941 20.5999 6.29941 20.7999 6.39941 20.9999C6.69941 21.4999 7.29941 21.6999 7.79941 21.3999L12.8994 18.6999L17.9994 21.3999C18.0994 21.4999 18.2994 21.4999 18.4994 21.4999C18.5994 21.4999 18.5994 21.4999 18.6994 21.4999C19.1994 21.3999 19.5994 20.8999 19.4994 20.2999L18.4994 14.5999L22.5994 10.5999C22.7994 10.4999 22.8994 10.2999 22.8994 10.0999Z"
                                                fill="#FDBD39" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                            viewBox="0 0 25 24" fill="none">
                                            <path
                                                d="M22.8994 10.0999C22.9994 9.59994 22.5994 8.99994 22.0994 8.99994L16.3994 8.19994L13.7994 2.99994C13.6994 2.79994 13.5994 2.69994 13.3994 2.59994C12.8994 2.29994 12.2994 2.49994 11.9994 2.99994L9.49941 8.19994L3.79941 8.99994C3.49941 8.99994 3.29941 9.09994 3.19941 9.29994C2.79941 9.69994 2.79941 10.2999 3.19941 10.6999L7.29941 14.6999L6.29941 20.3999C6.29941 20.5999 6.29941 20.7999 6.39941 20.9999C6.69941 21.4999 7.29941 21.6999 7.79941 21.3999L12.8994 18.6999L17.9994 21.3999C18.0994 21.4999 18.2994 21.4999 18.4994 21.4999C18.5994 21.4999 18.5994 21.4999 18.6994 21.4999C19.1994 21.3999 19.5994 20.8999 19.4994 20.2999L18.4994 14.5999L22.5994 10.5999C22.7994 10.4999 22.8994 10.2999 22.8994 10.0999Z"
                                                fill="#FDBD39" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                            viewBox="0 0 25 24" fill="none">
                                            <path
                                                d="M22.8994 10.0999C22.9994 9.59994 22.5994 8.99994 22.0994 8.99994L16.3994 8.19994L13.7994 2.99994C13.6994 2.79994 13.5994 2.69994 13.3994 2.59994C12.8994 2.29994 12.2994 2.49994 11.9994 2.99994L9.49941 8.19994L3.79941 8.99994C3.49941 8.99994 3.29941 9.09994 3.19941 9.29994C2.79941 9.69994 2.79941 10.2999 3.19941 10.6999L7.29941 14.6999L6.29941 20.3999C6.29941 20.5999 6.29941 20.7999 6.39941 20.9999C6.69941 21.4999 7.29941 21.6999 7.79941 21.3999L12.8994 18.6999L17.9994 21.3999C18.0994 21.4999 18.2994 21.4999 18.4994 21.4999C18.5994 21.4999 18.5994 21.4999 18.6994 21.4999C19.1994 21.3999 19.5994 20.8999 19.4994 20.2999L18.4994 14.5999L22.5994 10.5999C22.7994 10.4999 22.8994 10.2999 22.8994 10.0999Z"
                                                fill="#FDBD39" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                            viewBox="0 0 25 24" fill="none">
                                            <path
                                                d="M22.8994 10.0999C22.9994 9.59994 22.5994 8.99994 22.0994 8.99994L16.3994 8.19994L13.7994 2.99994C13.6994 2.79994 13.5994 2.69994 13.3994 2.59994C12.8994 2.29994 12.2994 2.49994 11.9994 2.99994L9.49941 8.19994L3.79941 8.99994C3.49941 8.99994 3.29941 9.09994 3.19941 9.29994C2.79941 9.69994 2.79941 10.2999 3.19941 10.6999L7.29941 14.6999L6.29941 20.3999C6.29941 20.5999 6.29941 20.7999 6.39941 20.9999C6.69941 21.4999 7.29941 21.6999 7.79941 21.3999L12.8994 18.6999L17.9994 21.3999C18.0994 21.4999 18.2994 21.4999 18.4994 21.4999C18.5994 21.4999 18.5994 21.4999 18.6994 21.4999C19.1994 21.3999 19.5994 20.8999 19.4994 20.2999L18.4994 14.5999L22.5994 10.5999C22.7994 10.4999 22.8994 10.2999 22.8994 10.0999Z"
                                                fill="#FDBD39" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                            viewBox="0 0 25 24" fill="none">
                                            <path
                                                d="M22.8994 10.0999C22.9994 9.59994 22.5994 8.99994 22.0994 8.99994L16.3994 8.19994L13.7994 2.99994C13.6994 2.79994 13.5994 2.69994 13.3994 2.59994C12.8994 2.29994 12.2994 2.49994 11.9994 2.99994L9.49941 8.19994L3.79941 8.99994C3.49941 8.99994 3.29941 9.09994 3.19941 9.29994C2.79941 9.69994 2.79941 10.2999 3.19941 10.6999L7.29941 14.6999L6.29941 20.3999C6.29941 20.5999 6.29941 20.7999 6.39941 20.9999C6.69941 21.4999 7.29941 21.6999 7.79941 21.3999L12.8994 18.6999L17.9994 21.3999C18.0994 21.4999 18.2994 21.4999 18.4994 21.4999C18.5994 21.4999 18.5994 21.4999 18.6994 21.4999C19.1994 21.3999 19.5994 20.8999 19.4994 20.2999L18.4994 14.5999L22.5994 10.5999C22.7994 10.4999 22.8994 10.2999 22.8994 10.0999Z"
                                                fill="#FDBD39" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="awsome--client--item">
                                <div class="awsome--clint--img">
                                    <img src="{{ asset('frontend/images/test_img.png') }}" alt="not found">
                                    <div class="awsome--clint--fream">
                                        <img src="{{ asset('frontend/images/client--frame.png') }}" alt="not found">
                                    </div>
                                </div>
                                <div class="awsome--clint--text">
                                    <div class="awsome--client--fream">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="72" height="48"
                                            viewBox="0 0 72 48" fill="none">
                                            <g clip-path="url(#clip0_10153_5699)">
                                                <path
                                                    d="M71.9001 0.024475C70.0643 5.94652 68.0444 11.7262 66.5021 17.6286C64.1837 26.492 62.1589 35.434 60.1041 44.3662C59.7459 45.9228 59.323 46.7036 57.4424 46.7772C50.3728 47.0571 43.3131 47.5776 36.2484 47.995C35.7833 47.9833 35.3196 47.9407 34.8604 47.8674C35.4275 46.2125 35.94 44.6755 36.4822 43.1435C41.4872 29.1044 47.4275 15.4827 55.0196 2.58285C55.2449 2.09507 55.6088 1.68231 56.0671 1.39467C56.5255 1.10703 57.0585 0.956848 57.6016 0.96238C61.5021 0.751229 65.3977 0.338756 69.2932 0.0343055C70.139 -0.0344413 70.9897 0.024475 71.9001 0.024475Z"
                                                    fill="#1A1A1A" />
                                                <path
                                                    d="M37.5447 0.102823C32.1666 15.4235 28.3756 30.8818 25.301 46.6542L0.922852 47.9899C1.22633 46.7328 1.38554 45.8538 1.6542 45.0092C6.28604 30.6117 12.7238 17.0195 20.0224 3.76114C21.0423 1.90989 22.2512 1.01126 24.5 0.976889C27.5945 0.927784 30.6791 0.397451 33.7736 0.132284C34.893 0.0193431 36.0472 0.102823 37.5447 0.102823Z"
                                                    fill="#1A1A1A" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_10153_5699">
                                                    <rect width="71" height="48" fill="white"
                                                        transform="translate(0.899414 -0.00012207)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                    <p>Consult With Us The Suitable Material for Your Project
                                        Nulla in nibh at leo faucibus molestie eget nec velit. Phasellus vel felis vel orci
                                        iaculis tempor tristique sagittis urna. Phasellus ac ante in lacus tempor egestas.
                                    </p>
                                    <h3>Cameron Williamson</h3>
                                    <h4>Marketing Coordinator</h4>
                                    <div class="star--icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                            viewBox="0 0 25 24" fill="none">
                                            <path
                                                d="M22.8994 10.0999C22.9994 9.59994 22.5994 8.99994 22.0994 8.99994L16.3994 8.19994L13.7994 2.99994C13.6994 2.79994 13.5994 2.69994 13.3994 2.59994C12.8994 2.29994 12.2994 2.49994 11.9994 2.99994L9.49941 8.19994L3.79941 8.99994C3.49941 8.99994 3.29941 9.09994 3.19941 9.29994C2.79941 9.69994 2.79941 10.2999 3.19941 10.6999L7.29941 14.6999L6.29941 20.3999C6.29941 20.5999 6.29941 20.7999 6.39941 20.9999C6.69941 21.4999 7.29941 21.6999 7.79941 21.3999L12.8994 18.6999L17.9994 21.3999C18.0994 21.4999 18.2994 21.4999 18.4994 21.4999C18.5994 21.4999 18.5994 21.4999 18.6994 21.4999C19.1994 21.3999 19.5994 20.8999 19.4994 20.2999L18.4994 14.5999L22.5994 10.5999C22.7994 10.4999 22.8994 10.2999 22.8994 10.0999Z"
                                                fill="#FDBD39" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                            viewBox="0 0 25 24" fill="none">
                                            <path
                                                d="M22.8994 10.0999C22.9994 9.59994 22.5994 8.99994 22.0994 8.99994L16.3994 8.19994L13.7994 2.99994C13.6994 2.79994 13.5994 2.69994 13.3994 2.59994C12.8994 2.29994 12.2994 2.49994 11.9994 2.99994L9.49941 8.19994L3.79941 8.99994C3.49941 8.99994 3.29941 9.09994 3.19941 9.29994C2.79941 9.69994 2.79941 10.2999 3.19941 10.6999L7.29941 14.6999L6.29941 20.3999C6.29941 20.5999 6.29941 20.7999 6.39941 20.9999C6.69941 21.4999 7.29941 21.6999 7.79941 21.3999L12.8994 18.6999L17.9994 21.3999C18.0994 21.4999 18.2994 21.4999 18.4994 21.4999C18.5994 21.4999 18.5994 21.4999 18.6994 21.4999C19.1994 21.3999 19.5994 20.8999 19.4994 20.2999L18.4994 14.5999L22.5994 10.5999C22.7994 10.4999 22.8994 10.2999 22.8994 10.0999Z"
                                                fill="#FDBD39" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                            viewBox="0 0 25 24" fill="none">
                                            <path
                                                d="M22.8994 10.0999C22.9994 9.59994 22.5994 8.99994 22.0994 8.99994L16.3994 8.19994L13.7994 2.99994C13.6994 2.79994 13.5994 2.69994 13.3994 2.59994C12.8994 2.29994 12.2994 2.49994 11.9994 2.99994L9.49941 8.19994L3.79941 8.99994C3.49941 8.99994 3.29941 9.09994 3.19941 9.29994C2.79941 9.69994 2.79941 10.2999 3.19941 10.6999L7.29941 14.6999L6.29941 20.3999C6.29941 20.5999 6.29941 20.7999 6.39941 20.9999C6.69941 21.4999 7.29941 21.6999 7.79941 21.3999L12.8994 18.6999L17.9994 21.3999C18.0994 21.4999 18.2994 21.4999 18.4994 21.4999C18.5994 21.4999 18.5994 21.4999 18.6994 21.4999C19.1994 21.3999 19.5994 20.8999 19.4994 20.2999L18.4994 14.5999L22.5994 10.5999C22.7994 10.4999 22.8994 10.2999 22.8994 10.0999Z"
                                                fill="#FDBD39" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                            viewBox="0 0 25 24" fill="none">
                                            <path
                                                d="M22.8994 10.0999C22.9994 9.59994 22.5994 8.99994 22.0994 8.99994L16.3994 8.19994L13.7994 2.99994C13.6994 2.79994 13.5994 2.69994 13.3994 2.59994C12.8994 2.29994 12.2994 2.49994 11.9994 2.99994L9.49941 8.19994L3.79941 8.99994C3.49941 8.99994 3.29941 9.09994 3.19941 9.29994C2.79941 9.69994 2.79941 10.2999 3.19941 10.6999L7.29941 14.6999L6.29941 20.3999C6.29941 20.5999 6.29941 20.7999 6.39941 20.9999C6.69941 21.4999 7.29941 21.6999 7.79941 21.3999L12.8994 18.6999L17.9994 21.3999C18.0994 21.4999 18.2994 21.4999 18.4994 21.4999C18.5994 21.4999 18.5994 21.4999 18.6994 21.4999C19.1994 21.3999 19.5994 20.8999 19.4994 20.2999L18.4994 14.5999L22.5994 10.5999C22.7994 10.4999 22.8994 10.2999 22.8994 10.0999Z"
                                                fill="#FDBD39" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                            viewBox="0 0 25 24" fill="none">
                                            <path
                                                d="M22.8994 10.0999C22.9994 9.59994 22.5994 8.99994 22.0994 8.99994L16.3994 8.19994L13.7994 2.99994C13.6994 2.79994 13.5994 2.69994 13.3994 2.59994C12.8994 2.29994 12.2994 2.49994 11.9994 2.99994L9.49941 8.19994L3.79941 8.99994C3.49941 8.99994 3.29941 9.09994 3.19941 9.29994C2.79941 9.69994 2.79941 10.2999 3.19941 10.6999L7.29941 14.6999L6.29941 20.3999C6.29941 20.5999 6.29941 20.7999 6.39941 20.9999C6.69941 21.4999 7.29941 21.6999 7.79941 21.3999L12.8994 18.6999L17.9994 21.3999C18.0994 21.4999 18.2994 21.4999 18.4994 21.4999C18.5994 21.4999 18.5994 21.4999 18.6994 21.4999C19.1994 21.3999 19.5994 20.8999 19.4994 20.2999L18.4994 14.5999L22.5994 10.5999C22.7994 10.4999 22.8994 10.2999 22.8994 10.0999Z"
                                                fill="#FDBD39" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="awsome--client--item">
                                <div class="awsome--clint--img">
                                    <img src="{{ asset('frontend/images/test_img.png') }}" alt="not found">
                                    <div class="awsome--clint--fream">
                                        <img src="{{ asset('frontend/images/client--frame.png') }}" alt="not found">
                                    </div>
                                </div>
                                <div class="awsome--clint--text">
                                    <div class="awsome--client--fream">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="72" height="48"
                                            viewBox="0 0 72 48" fill="none">
                                            <g clip-path="url(#clip0_10153_5699)">
                                                <path
                                                    d="M71.9001 0.024475C70.0643 5.94652 68.0444 11.7262 66.5021 17.6286C64.1837 26.492 62.1589 35.434 60.1041 44.3662C59.7459 45.9228 59.323 46.7036 57.4424 46.7772C50.3728 47.0571 43.3131 47.5776 36.2484 47.995C35.7833 47.9833 35.3196 47.9407 34.8604 47.8674C35.4275 46.2125 35.94 44.6755 36.4822 43.1435C41.4872 29.1044 47.4275 15.4827 55.0196 2.58285C55.2449 2.09507 55.6088 1.68231 56.0671 1.39467C56.5255 1.10703 57.0585 0.956848 57.6016 0.96238C61.5021 0.751229 65.3977 0.338756 69.2932 0.0343055C70.139 -0.0344413 70.9897 0.024475 71.9001 0.024475Z"
                                                    fill="#1A1A1A" />
                                                <path
                                                    d="M37.5447 0.102823C32.1666 15.4235 28.3756 30.8818 25.301 46.6542L0.922852 47.9899C1.22633 46.7328 1.38554 45.8538 1.6542 45.0092C6.28604 30.6117 12.7238 17.0195 20.0224 3.76114C21.0423 1.90989 22.2512 1.01126 24.5 0.976889C27.5945 0.927784 30.6791 0.397451 33.7736 0.132284C34.893 0.0193431 36.0472 0.102823 37.5447 0.102823Z"
                                                    fill="#1A1A1A" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_10153_5699">
                                                    <rect width="71" height="48" fill="white"
                                                        transform="translate(0.899414 -0.00012207)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                    <p>Consult With Us The Suitable Material for Your Project
                                        Nulla in nibh at leo faucibus molestie eget nec velit. Phasellus vel felis vel orci
                                        iaculis tempor tristique sagittis urna. Phasellus ac ante in lacus tempor egestas.
                                    </p>
                                    <h3>Cameron Williamson</h3>
                                    <h4>Marketing Coordinator</h4>
                                    <div class="star--icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                            viewBox="0 0 25 24" fill="none">
                                            <path
                                                d="M22.8994 10.0999C22.9994 9.59994 22.5994 8.99994 22.0994 8.99994L16.3994 8.19994L13.7994 2.99994C13.6994 2.79994 13.5994 2.69994 13.3994 2.59994C12.8994 2.29994 12.2994 2.49994 11.9994 2.99994L9.49941 8.19994L3.79941 8.99994C3.49941 8.99994 3.29941 9.09994 3.19941 9.29994C2.79941 9.69994 2.79941 10.2999 3.19941 10.6999L7.29941 14.6999L6.29941 20.3999C6.29941 20.5999 6.29941 20.7999 6.39941 20.9999C6.69941 21.4999 7.29941 21.6999 7.79941 21.3999L12.8994 18.6999L17.9994 21.3999C18.0994 21.4999 18.2994 21.4999 18.4994 21.4999C18.5994 21.4999 18.5994 21.4999 18.6994 21.4999C19.1994 21.3999 19.5994 20.8999 19.4994 20.2999L18.4994 14.5999L22.5994 10.5999C22.7994 10.4999 22.8994 10.2999 22.8994 10.0999Z"
                                                fill="#FDBD39" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                            viewBox="0 0 25 24" fill="none">
                                            <path
                                                d="M22.8994 10.0999C22.9994 9.59994 22.5994 8.99994 22.0994 8.99994L16.3994 8.19994L13.7994 2.99994C13.6994 2.79994 13.5994 2.69994 13.3994 2.59994C12.8994 2.29994 12.2994 2.49994 11.9994 2.99994L9.49941 8.19994L3.79941 8.99994C3.49941 8.99994 3.29941 9.09994 3.19941 9.29994C2.79941 9.69994 2.79941 10.2999 3.19941 10.6999L7.29941 14.6999L6.29941 20.3999C6.29941 20.5999 6.29941 20.7999 6.39941 20.9999C6.69941 21.4999 7.29941 21.6999 7.79941 21.3999L12.8994 18.6999L17.9994 21.3999C18.0994 21.4999 18.2994 21.4999 18.4994 21.4999C18.5994 21.4999 18.5994 21.4999 18.6994 21.4999C19.1994 21.3999 19.5994 20.8999 19.4994 20.2999L18.4994 14.5999L22.5994 10.5999C22.7994 10.4999 22.8994 10.2999 22.8994 10.0999Z"
                                                fill="#FDBD39" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                            viewBox="0 0 25 24" fill="none">
                                            <path
                                                d="M22.8994 10.0999C22.9994 9.59994 22.5994 8.99994 22.0994 8.99994L16.3994 8.19994L13.7994 2.99994C13.6994 2.79994 13.5994 2.69994 13.3994 2.59994C12.8994 2.29994 12.2994 2.49994 11.9994 2.99994L9.49941 8.19994L3.79941 8.99994C3.49941 8.99994 3.29941 9.09994 3.19941 9.29994C2.79941 9.69994 2.79941 10.2999 3.19941 10.6999L7.29941 14.6999L6.29941 20.3999C6.29941 20.5999 6.29941 20.7999 6.39941 20.9999C6.69941 21.4999 7.29941 21.6999 7.79941 21.3999L12.8994 18.6999L17.9994 21.3999C18.0994 21.4999 18.2994 21.4999 18.4994 21.4999C18.5994 21.4999 18.5994 21.4999 18.6994 21.4999C19.1994 21.3999 19.5994 20.8999 19.4994 20.2999L18.4994 14.5999L22.5994 10.5999C22.7994 10.4999 22.8994 10.2999 22.8994 10.0999Z"
                                                fill="#FDBD39" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                            viewBox="0 0 25 24" fill="none">
                                            <path
                                                d="M22.8994 10.0999C22.9994 9.59994 22.5994 8.99994 22.0994 8.99994L16.3994 8.19994L13.7994 2.99994C13.6994 2.79994 13.5994 2.69994 13.3994 2.59994C12.8994 2.29994 12.2994 2.49994 11.9994 2.99994L9.49941 8.19994L3.79941 8.99994C3.49941 8.99994 3.29941 9.09994 3.19941 9.29994C2.79941 9.69994 2.79941 10.2999 3.19941 10.6999L7.29941 14.6999L6.29941 20.3999C6.29941 20.5999 6.29941 20.7999 6.39941 20.9999C6.69941 21.4999 7.29941 21.6999 7.79941 21.3999L12.8994 18.6999L17.9994 21.3999C18.0994 21.4999 18.2994 21.4999 18.4994 21.4999C18.5994 21.4999 18.5994 21.4999 18.6994 21.4999C19.1994 21.3999 19.5994 20.8999 19.4994 20.2999L18.4994 14.5999L22.5994 10.5999C22.7994 10.4999 22.8994 10.2999 22.8994 10.0999Z"
                                                fill="#FDBD39" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                            viewBox="0 0 25 24" fill="none">
                                            <path
                                                d="M22.8994 10.0999C22.9994 9.59994 22.5994 8.99994 22.0994 8.99994L16.3994 8.19994L13.7994 2.99994C13.6994 2.79994 13.5994 2.69994 13.3994 2.59994C12.8994 2.29994 12.2994 2.49994 11.9994 2.99994L9.49941 8.19994L3.79941 8.99994C3.49941 8.99994 3.29941 9.09994 3.19941 9.29994C2.79941 9.69994 2.79941 10.2999 3.19941 10.6999L7.29941 14.6999L6.29941 20.3999C6.29941 20.5999 6.29941 20.7999 6.39941 20.9999C6.69941 21.4999 7.29941 21.6999 7.79941 21.3999L12.8994 18.6999L17.9994 21.3999C18.0994 21.4999 18.2994 21.4999 18.4994 21.4999C18.5994 21.4999 18.5994 21.4999 18.6994 21.4999C19.1994 21.3999 19.5994 20.8999 19.4994 20.2999L18.4994 14.5999L22.5994 10.5999C22.7994 10.4999 22.8994 10.2999 22.8994 10.0999Z"
                                                fill="#FDBD39" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- awsome client end hare -->
    </main>
@endsection
