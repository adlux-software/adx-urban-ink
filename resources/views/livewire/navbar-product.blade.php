<div>

    <div class="collapse navbar-collapse mean-menu">
        <ul class="navbar-nav">
            <li class="nav-item" ><a href="/" class="nav-link ">Home </a>

            </li>

            <li class="nav-item megamenu" id="nav"><a href="/about" class="nav-link">About US </a>

            </li>
            <li class="nav-item megamenu" id="nav"><a href="/products" class="nav-link">Shop </a>

            <li class="nav-item"><a href="#" class="nav-link " id="nav">Our Collection <i class='bx bx-chevron-down'></i></a>
                <ul class="dropdown-menu">
                    {{--                                @foreach($products as $product)--}}

                    {{--                                @endforeach--}}

                    <li class="nav-item"><a href="index.html" class="nav-link active">Home 1</a></li>

                </ul>
            </li>

            </li >

            <li class="nav-item megamenu" id="nav"><a href="/contact" class="nav-link">Contact Us</a>

            </li>
        </ul>

        <div class="others-option">
            <div class="option-item">
                <div class="search-btn-box">
                    <i class="search-btn bx bx-search-alt"></i>
                </div>
            </div>

            <div class="option-item">
                <div class="cart-btn">
                    <a href="/cart" ><i class='bx bx-shopping-bag'></i><span>{{ \App\Models\Cart::totalProductCount() }}</span></a>
                </div>
            </div>

            <div class="option-item">
                <div class="burger-menu" data-bs-toggle="modal" data-bs-target="#sidebarModal">
                    <span class="top-bar"></span>
                    <span class="middle-bar"></span>
                    <span class="bottom-bar"></span>
                </div>
            </div>
        </div>
    </div>



</div>
