@extends("layouts.frontend")
@section("content")
    <div class="main">
        <div class="pro-info row">
            <div class="pro-image col-sm-7 row">
                <img class="pro-img col-md-6" src="{{asset("images/product1.jpg")}}">
                <img class="pro-img col-md-6" src="{{asset("images/product1.jpg")}}">
                <img class="pro-img col-md-6" src="{{asset("images/product1.jpg")}}">
                <img class="pro-img col-md-6" src="{{asset("images/product1.jpg")}}">
            </div>
            <div class="pro-detail col-sm-5">
                <div class="name">
                    LEGEND ESSENTIAL TRAINING SHOE - MEN'S
                </div>
                <div class="from">
                    <a href="#">Shop all Nike</a>
                </div>
                <div class="price">
                    $55
                </div>
                <div class="pro-review">
                    <span class="star">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                    </span>
                    <span class="pro-number"></span>
                    <span class="pro-write-review">
                        Write review
                    </span>
                </div>
                <div class="pro-color">
                    <span class="title">COLOR: </span>
                    <span class="item">Black/White</span>
                    <span class="item">Yellow/White</span>
                </div>
                <div class="pro-size">
                    <span class="item">8</span>
                    <span class="item">9</span>
                    <span class="item">10</span>
                    <span class="item">10</span>
                    <span class="item">10</span>
                </div>
                <div class="pro-ship">
                    <div class="ship-item">
                        <div class="radio-fill"></div>
                        <div class="info-ship">
                            Free ship trong 7-10 ngày
                        </div>
                    </div>
                    <div class="ship-item">
                        <div class="radio-fill">
                            <div class="fillra"></div>
                        </div>
                        <div class="info-ship">
                            Ship nhanh 3 ngày
                        </div>
                    </div>
                </div>
                <div class="pro-total-price">
                    $29
                </div>
                <button class="pro-add-cart">
                    Add to cart
                </button>
            </div>
        </div>
        <div class="divlineOne"></div>
        <div class="pro-description">
            <h1 onclick="">PRODUCT DESCRIPTION<i class="bi bi-plus"></i></h1>
            <div class="des-info">
                Build your endurance in the Nike Legend Essential training shoe. High-abrasion honeycomb mesh with tough overlays and durable outsole with grooves offer outstanding flexibility and traction.
            </div>
        </div>
        <div class="divlineOne"></div>
        <div class="show-category">
            <h1 class="pro-title1">PEOPLE ALSO VIEWED</h1>
            <div class="row category-product">
                <a href="#" class="col-md-3 product">
                <span class="image">
                    <img src="{{asset("images/product1.jpg")}}">
                </span>
                    <div class="infor-full">
                        <span class="name"> Giầy 1</span>
                        <span class="info">Với chất liệu mềm nhung...</span>
                        <span class="price">$200</span>
                        <span class="start">
                        <span class="total">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                        </span>
                        <span class="number">(20)</span>

                    </span>
                        <span class="buy">
                        <span class="add-to-cards">Buy Now</span>
                    </span>
                    </div>
                </a>
                <a href="#" class="col-md-3 product">
                <span class="image">
                    <img src="{{asset("images/product1.jpg")}}">
                </span>
                    <div class="infor-full">
                        <span class="name"> Giầy 1</span>
                        <span class="info">Với chất liệu mềm nhung...</span>
                        <span class="price">$200</span>
                        <span class="start">
                        <span class="total">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                        </span>
                        <span class="number">(20)</span>

                    </span>
                        <span class="buy">
                        <span class="add-to-cards">Buy Now</span>
                    </span>
                    </div>
                </a>
                <a href="#" class="col-md-3 product">
                <span class="image">
                    <img src="{{asset("images/product1.jpg")}}">
                </span>
                    <div class="infor-full">
                        <span class="name"> Giầy 1</span>
                        <span class="info">Với chất liệu mềm nhung...</span>
                        <span class="price">$200</span>
                        <span class="start">
                        <span class="total">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                        </span>
                        <span class="number">(20)</span>

                    </span>
                        <span class="buy">
                        <span class="add-to-cards">Buy Now</span>
                    </span>
                    </div>
                </a>
                <a href="#" class="col-md-3 product">
                <span class="image">
                    <img src="{{asset("images/product1.jpg")}}">
                </span>
                    <div class="infor-full">
                        <span class="name"> Giầy 1</span>
                        <span class="info">Với chất liệu mềm nhung...</span>
                        <span class="price">$200</span>
                        <span class="start">
                        <span class="total">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                        </span>
                        <span class="number">(20)</span>

                    </span>
                        <span class="buy">
                        <span class="add-to-cards">Buy Now</span>
                    </span>
                    </div>
                </a>
            </div>
        </div>
        <div class="divlineOne"></div>
        <div class="show-category">
            <h1 class="pro-title1">PEOPLE ALSO BOUGHT</h1>
            <div class="row category-product">
                <a href="#" class="col-md-3 product">
                <span class="image">
                    <img src="{{asset("images/product1.jpg")}}">
                </span>
                    <div class="infor-full">
                        <span class="name"> Giầy 1</span>
                        <span class="info">Với chất liệu mềm nhung...</span>
                        <span class="price">$200</span>
                        <span class="start">
                        <span class="total">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                        </span>
                        <span class="number">(20)</span>

                    </span>
                        <span class="buy">
                        <span class="add-to-cards">Buy Now</span>
                    </span>
                    </div>
                </a>
                <a href="#" class="col-md-3 product">
                <span class="image">
                    <img src="{{asset("images/product1.jpg")}}">
                </span>
                    <div class="infor-full">
                        <span class="name"> Giầy 1</span>
                        <span class="info">Với chất liệu mềm nhung...</span>
                        <span class="price">$200</span>
                        <span class="start">
                        <span class="total">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                        </span>
                        <span class="number">(20)</span>

                    </span>
                        <span class="buy">
                        <span class="add-to-cards">Buy Now</span>
                    </span>
                    </div>
                </a>
                <a href="#" class="col-md-3 product">
                <span class="image">
                    <img src="{{asset("images/product1.jpg")}}">
                </span>
                    <div class="infor-full">
                        <span class="name"> Giầy 1</span>
                        <span class="info">Với chất liệu mềm nhung...</span>
                        <span class="price">$200</span>
                        <span class="start">
                        <span class="total">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                        </span>
                        <span class="number">(20)</span>

                    </span>
                        <span class="buy">
                        <span class="add-to-cards">Buy Now</span>
                    </span>
                    </div>
                </a>
                <a href="#" class="col-md-3 product">
                <span class="image">
                    <img src="{{asset("images/product1.jpg")}}">
                </span>
                    <div class="infor-full">
                        <span class="name"> Giầy 1</span>
                        <span class="info">Với chất liệu mềm nhung...</span>
                        <span class="price">$200</span>
                        <span class="start">
                        <span class="total">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                        </span>
                        <span class="number">(20)</span>

                    </span>
                        <span class="buy">
                        <span class="add-to-cards">Buy Now</span>
                    </span>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
