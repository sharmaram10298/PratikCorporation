@extends('frontend.master_dashboard')
@section('main')
<style>
  .qty-control.position-relative.qty-initialized {
    left: 20%;
  }
</style>
<main>
  <section class="breadcrumbs">
    <h3>BALL BEARING</h3>
    <a href="#">HOME / PRODUCT <span>BALL BEARING</span></a>
  </section>
  <section class="shop-main container d-flex pt-4 pt-xl-5">
    <div class="shop-sidebar side-sticky bg-body" id="shopFilter">
      <div class="aside-header d-flex d-lg-none align-items-center">
        <h3 class="text-uppercase fs-6 mb-0">Filter By</h3>
        <button class="btn-close-lg js-close-aside btn-close-aside ms-auto"></button>
      </div><!-- /.aside-header -->

      <div class="pt-4 pt-lg-0"></div>

      <div class="accordion" id="categories-list">
        <div class="accordion-item mb-4 pb-3">
          <h5 class="accordion-header" id="accordion-heading-1">
            <button class="accordion-button p-0 border-0 fs-5 text-uppercase" type="button" data-bs-toggle="collapse"
              data-bs-target="#accordion-filter-1" aria-expanded="true" aria-controls="accordion-filter-1">
              Product Categories
              <svg class="accordion-button__icon type2" viewBox="0 0 10 6" xmlns="http://www.w3.org/2000/svg">
                <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                  <path
                    d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z" />
                </g>
              </svg>
            </button>
          </h5>
          <div id="accordion-filter-1" class="accordion-collapse collapse show border-0"
            aria-labelledby="accordion-heading-1" data-bs-parent="#categories-list">
            <div class="accordion-body px-0 pb-0 pt-3">
              <ul class="list list-inline mb-0">
                <!-- <li class="list-item">
                  <a href="#" class="menu-link py-1">Dresses</a>
                </li>
                <li class="list-item">
                  <a href="#" class="menu-link py-1">Shorts</a>
                </li>
                <li class="list-item">
                  <a href="#" class="menu-link py-1">Sweatshirts</a>
                </li>
                <li class="list-item">
                  <a href="#" class="menu-link py-1">Swimwear</a>
                </li>
                <li class="list-item">
                  <a href="#" class="menu-link py-1">Jackets</a>
                </li>
                <li class="list-item">
                  <a href="#" class="menu-link py-1">T-Shirts & Tops</a>
                </li>
                <li class="list-item">
                  <a href="#" class="menu-link py-1">Jeans</a>
                </li>
                <li class="list-item">
                  <a href="#" class="menu-link py-1">Trousers</a>
                </li>
                <li class="list-item">
                  <a href="#" class="menu-link py-1">Men</a>
                </li>
                <li class="list-item">
                  <a href="#" class="menu-link py-1">Jumpers & Cardigans</a>
                </li> -->
              </ul>
            </div>
          </div>
        </div><!-- /.accordion-item -->
      </div><!-- /.accordion-item -->


      <div class="accordion" id="color-filters">
        <div class="accordion-item mb-4 pb-3">
          <h5 class="accordion-header" id="accordion-heading-1">
            <button class="accordion-button p-0 border-0 fs-5 text-uppercase" type="button" data-bs-toggle="collapse"
              data-bs-target="#accordion-filter-2" aria-expanded="true" aria-controls="accordion-filter-2">
              Color
              <svg class="accordion-button__icon type2" viewBox="0 0 10 6" xmlns="http://www.w3.org/2000/svg">
                <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                  <path
                    d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z" />
                </g>
              </svg>
            </button>
          </h5>
          <div id="accordion-filter-2" class="accordion-collapse collapse show border-0"
            aria-labelledby="accordion-heading-1" data-bs-parent="#color-filters">
            <div class="accordion-body px-0 pb-0">
              <div class="d-flex flex-wrap">
                <!-- <a href="#" class="swatch-color js-filter" style="color: #0a2472"></a>
                <a href="#" class="swatch-color js-filter" style="color: #d7bb4f"></a>
                <a href="#" class="swatch-color js-filter" style="color: #282828"></a>
                <a href="#" class="swatch-color js-filter" style="color: #b1d6e8"></a>
                <a href="#" class="swatch-color js-filter" style="color: #9c7539"></a>
                <a href="#" class="swatch-color js-filter" style="color: #d29b48"></a>
                <a href="#" class="swatch-color js-filter" style="color: #e6ae95"></a>
                <a href="#" class="swatch-color js-filter" style="color: #d76b67"></a>
                <a href="#" class="swatch-color swatch_active js-filter" style="color: #bababa"></a>
                <a href="#" class="swatch-color js-filter" style="color: #bfdcc4"></a> -->
              </div>
            </div>
          </div>
        </div><!-- /.accordion-item -->
      </div><!-- /.accordion -->


      <div class="accordion" id="size-filters">
        <div class="accordion-item mb-4 pb-3">
          <h5 class="accordion-header" id="accordion-heading-size">
            <button class="accordion-button p-0 border-0 fs-5 text-uppercase" type="button" data-bs-toggle="collapse"
              data-bs-target="#accordion-filter-size" aria-expanded="true" aria-controls="accordion-filter-size">
              Sizes
              <svg class="accordion-button__icon type2" viewBox="0 0 10 6" xmlns="http://www.w3.org/2000/svg">
                <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                  <path
                    d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z" />
                </g>
              </svg>
            </button>
          </h5>
          <div id="accordion-filter-size" class="accordion-collapse collapse show border-0"
            aria-labelledby="accordion-heading-size" data-bs-parent="#size-filters">
            <div class="accordion-body px-0 pb-0">
              <div class="d-flex flex-wrap">
                <!-- <a href="#" class="swatch-size btn btn-sm btn-outline-light mb-3 me-3 js-filter">XS</a>
                <a href="#" class="swatch-size btn btn-sm btn-outline-light mb-3 me-3 js-filter">S</a>
                <a href="#" class="swatch-size btn btn-sm btn-outline-light mb-3 me-3 js-filter">M</a>
                <a href="#" class="swatch-size btn btn-sm btn-outline-light mb-3 me-3 js-filter">L</a>
                <a href="#" class="swatch-size btn btn-sm btn-outline-light mb-3 me-3 js-filter">XL</a>
                <a href="#" class="swatch-size btn btn-sm btn-outline-light mb-3 me-3 js-filter">XXL</a> -->
              </div>
            </div>
          </div>
        </div><!-- /.accordion-item -->
      </div><!-- /.accordion -->


      <div class="accordion" id="brand-filters">
        <div class="accordion-item mb-4 pb-3">
          <h5 class="accordion-header" id="accordion-heading-brand">
            <button class="accordion-button p-0 border-0 fs-5 text-uppercase" type="button" data-bs-toggle="collapse"
              data-bs-target="#accordion-filter-brand" aria-expanded="true" aria-controls="accordion-filter-brand">
              Brands
              <svg class="accordion-button__icon type2" viewBox="0 0 10 6" xmlns="http://www.w3.org/2000/svg">
                <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                  <path
                    d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z" />
                </g>
              </svg>
            </button>
          </h5>
          <div id="accordion-filter-brand" class="accordion-collapse collapse show border-0"
            aria-labelledby="accordion-heading-brand" data-bs-parent="#brand-filters">
            <div class="search-field multi-select accordion-body px-0 pb-0">
              <select class="d-none" multiple name="total-numbers-list">
                <!-- <option value="1">Adidas</option>
                <option value="2">Balmain</option>
                <option value="3">Balenciaga</option>
                <option value="4">Burberry</option>
                <option value="5">Kenzo</option>
                <option value="5">Givenchy</option>
                <option value="5">Zara</option> -->
              </select>
              <!-- <div class="search-field__input-wrapper mb-3">
                <input type="text" class="search-field__input form-control form-control-sm border-light border-2"
                  placeholder="Search" />
              </div>
              <ul class="multi-select__list list-unstyled">
                <li class="search-suggestion__item multi-select__item text-primary js-search-select js-multi-select">
                  <span class="me-auto">Adidas</span>
                  <span class="text-secondary">2</span>
                </li>
                <li class="search-suggestion__item multi-select__item text-primary js-search-select js-multi-select">
                  <span class="me-auto">Balmain</span>
                  <span class="text-secondary">7</span>
                </li>
                <li class="search-suggestion__item multi-select__item text-primary js-search-select js-multi-select">
                  <span class="me-auto">Balenciaga</span>
                  <span class="text-secondary">10</span>
                </li>
                <li class="search-suggestion__item multi-select__item text-primary js-search-select js-multi-select">
                  <span class="me-auto">Burberry</span>
                  <span class="text-secondary">39</span>
                </li>
                <li class="search-suggestion__item multi-select__item text-primary js-search-select js-multi-select">
                  <span class="me-auto">Kenzo</span>
                  <span class="text-secondary">95</span>
                </li>
                <li class="search-suggestion__item multi-select__item text-primary js-search-select js-multi-select">
                  <span class="me-auto">Givenchy</span>
                  <span class="text-secondary">1092</span>
                </li>
                <li class="search-suggestion__item multi-select__item text-primary js-search-select js-multi-select">
                  <span class="me-auto">Zara</span>
                  <span class="text-secondary">48</span>
                </li> -->
              </ul>
            </div>
          </div>
        </div><!-- /.accordion-item -->
      </div><!-- /.accordion -->


      <div class="accordion" id="price-filters">
        <div class="accordion-item mb-4">
          <h5 class="accordion-header mb-2" id="accordion-heading-price">
            <button class="accordion-button p-0 border-0 fs-5 text-uppercase" type="button" data-bs-toggle="collapse"
              data-bs-target="#accordion-filter-price" aria-expanded="true" aria-controls="accordion-filter-price">
              Price
              <svg class="accordion-button__icon type2" viewBox="0 0 10 6" xmlns="http://www.w3.org/2000/svg">
                <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                  <path
                    d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z" />
                </g>
              </svg>
            </button>
          </h5>
          <div id="accordion-filter-price" class="accordion-collapse collapse show border-0"
            aria-labelledby="accordion-heading-price" data-bs-parent="#price-filters">
            <input class="price-range-slider" type="text" value="" data-slider-min="10" data-slider-max="1000"
              data-slider-step="5" data-slider-value="[250,450]" data-currency="$" />
            <div class="price-range__info d-flex align-items-center mt-2">
              <div class="me-auto">
                <span class="text-secondary">Min Price: </span>
                <span class="price-range__min">$250</span>
              </div>
              <div>
                <span class="text-secondary">Max Price: </span>
                <span class="price-range__max">$450</span>
              </div>
            </div>
          </div>
        </div><!-- /.accordion-item -->
      </div><!-- /.accordion -->
    </div><!-- /.shop-sidebar -->

    <div class="shop-list flex-grow-1">

      <div class="mb-3 pb-2 pb-xl-3"></div>

      <div class="d-flex justify-content-between mb-4 pb-md-2">

        <div class="shop-acs d-flex align-items-center justify-content-between justify-content-md-end flex-grow-1">
          <select class="shop-acs__select form-select w-auto border-0 py-0 order-1 order-md-0" aria-label="Sort Items"
            name="total-number">
            <option selected>Default Sorting</option>
            <option value="1">Featured</option>
            <option value="2">Best selling</option>
            <option value="3">Alphabetically, A-Z</option>
            <option value="3">Alphabetically, Z-A</option>
            <option value="3">Price, low to high</option>
            <option value="3">Price, high to low</option>
            <option value="3">Date, old to new</option>
            <option value="3">Date, new to old</option>
          </select>
          <div class="shop-filter d-flex align-items-center order-0 order-md-3 d-lg-none">
            <button class="btn-link btn-link_f d-flex align-items-center ps-0 js-open-aside" data-aside="shopFilter">
              <svg class="d-inline-block align-middle me-2" width="14" height="10" viewBox="0 0 14 10" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <use href="#icon_filter" />
              </svg>
              <span class="text-uppercase fw-medium d-inline-block align-middle">Filter</span>
            </button>
          </div><!-- /.col-size d-flex align-items-center ms-auto ms-md-3 -->
        </div><!-- /.shop-acs -->
      </div><!-- /.d-flex justify-content-between -->
      <div class="shopping-cart">
        <div class="cart-table__wrapper" style="padding-top:0px">
          <table class="cart-table table-striped">
            <thead>
              <tr>
                <th>Brand</th>
                <th>Article</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Quantity</th>
                <th>Add to cart</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="shopping-cart__product-item">
                    <div class="d-flex cennn"> <a href="{{route('productdetails')}}">
                      <img loading="lazy" src="{{ asset('frontend/assets/images/barrier.png') }}" alt="" /></a>
                      <p>B7028-E-T-P4S-UL</p>
                    </div>
                  </div>
                </td>
                <td>
                  <h3 class="nameee">Ball bearing</h3>
                </td>
                <td>
                  <h3 class="nameee">$99</h3>
                </td>
                <td>
                  <h3 class="nameee">11</h3>
                </td>
                <td>
                  <div class="qty-control position-relative">
                    <input type="number" name="quantity" value="3" min="1" class="qty-control__number text-center">
                    <div class="qty-control__reduce">-</div>
                    <div class="qty-control__increase">+</div>
                  </div><!-- .qty-control -->
                </td>
                <td>
                  <img style="width: 60px;" src="{{ asset('frontend/assets/images/cartimage.svg') }}" alt="">
                </td>
              </tr>
              <tr>
                <td>
                  <div class="shopping-cart__product-item">
                    <div class="d-flex cennn"><a href="{{route('productdetails')}}">
                      <img loading="lazy" src="{{ asset('frontend/assets/images/barrier.png') }}" alt="" /></a>
                      <p>B7028-E-T-P4S-UL</p>
                    </div>
                  </div>
                </td>
                <td>
                  <h3 class="nameee">Ball bearing</h3>
                </td>
                <td>
                  <h3 class="nameee">$99</h3>
                </td>
                <td>
                  <h3 class="nameee">11</h3>
                </td>
                <td>
                  <div class="qty-control position-relative">
                    <input type="number" name="quantity" value="3" min="1" class="qty-control__number text-center">
                    <div class="qty-control__reduce">-</div>
                    <div class="qty-control__increase">+</div>
                  </div><!-- .qty-control -->
                </td>
                <td>
                  <img style="width: 60px;" src="{{ asset('frontend/assets/images/cartimage.svg') }}" alt="">
                </td>
              </tr>
              <tr>
                <td>
                  <div class="shopping-cart__product-item">
                    <div class="d-flex cennn"><a href="{{route('productdetails')}}">
                      <img loading="lazy" src="{{ asset('frontend/assets/images/barrier.png') }}" alt="" /></a>
                      <p>B7028-E-T-P4S-UL</p>
                    </div>
                  </div>
                </td>
                <td>
                  <h3 class="nameee">Ball bearing</h3>
                </td>
                <td>
                  <h3 class="nameee">$99</h3>
                </td>
                <td>
                  <h3 class="nameee">11</h3>
                </td>
                <td>
                  <div class="qty-control position-relative">
                    <input type="number" name="quantity" value="3" min="1" class="qty-control__number text-center">
                    <div class="qty-control__reduce">-</div>
                    <div class="qty-control__increase">+</div>
                  </div><!-- .qty-control -->
                </td>
                <td>
                  <img style="width: 60px;" src="{{ asset('frontend/assets/images/cartimage.svg') }}" alt="">
                </td>
              </tr>
              <tr>
                <td>
                  <div class="shopping-cart__product-item">
                    <div class="d-flex cennn"><a href="{{route('productdetails')}}">
                      <img loading="lazy" src="{{ asset('frontend/assets/images/barrier.png') }}" alt="" /></a>
                      <p>B7028-E-T-P4S-UL</p>
                    </div>
                  </div>
                </td>
                <td>
                  <h3 class="nameee">Ball bearing</h3>
                </td>
                <td>
                  <h3 class="nameee">$99</h3>
                </td>
                <td>
                  <h3 class="nameee">11</h3>
                </td>
                <td>
                  <div class="qty-control position-relative">
                    <input type="number" name="quantity" value="3" min="1" class="qty-control__number text-center">
                    <div class="qty-control__reduce">-</div>
                    <div class="qty-control__increase">+</div>
                  </div><!-- .qty-control -->
                </td>
                <td>
                  <img style="width: 60px;" src="{{ asset('frontend/assets/images/cartimage.svg') }}" alt="">
                </td>
              </tr>
              <tr>
                <td>
                  <div class="shopping-cart__product-item">
                    <div class="d-flex cennn"><a href="{{route('productdetails')}}">
                      <img loading="lazy" src="{{ asset('frontend/assets/images/barrier.png') }}" alt="" /></a>
                      <p>B7028-E-T-P4S-UL</p>
                    </div>
                  </div>
                </td>
                <td>
                  <h3 class="nameee">Ball bearing</h3>
                </td>
                <td>
                  <h3 class="nameee">$99</h3>
                </td>
                <td>
                  <h3 class="nameee">11</h3>
                </td>
                <td>
                  <div class="qty-control position-relative">
                    <input type="number" name="quantity" value="3" min="1" class="qty-control__number text-center">
                    <div class="qty-control__reduce">-</div>
                    <div class="qty-control__increase">+</div>
                  </div><!-- .qty-control -->
                </td>
                <td>
                  <img style="width: 60px;" src="{{ asset('frontend/assets/images/cartimage.svg') }}" alt="">
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section><!-- /.shop-main container -->
</main>

<div class="mb-5 pb-xl-5"></div>

@endsection