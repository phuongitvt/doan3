@extends("layouts.frontend")
@section("content")
<div class="main">
    <div class="banner">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item item-banner active">
                    <img src="{{asset("images/banner1.jpg")}}">
                </div>
                <div class="carousel-item item-banner">
                    <img src="{{asset("images/banner1.jpg")}}">
                </div>
                <div class="carousel-item item-banner">
                    <img src="{{asset("images/banner1.jpg")}}">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>
    <div class="show-category">
        <div class="category-main">
            <h1>TRENDING NOW</h1>
            <div class="category-info">
                Đây là những xu hướng của năm nay
            </div>
        </div>
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
    <div class="show-category">
        <div class="category-main">
            <h1>TRENDING NOW</h1>
            <div class="category-info">
                Đây là những xu hướng của năm nay
            </div>
        </div>
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
