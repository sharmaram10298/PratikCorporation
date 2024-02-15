@extends('frontend.master_dashboard')
@section('main')
<main>
  <section class="breadcrumbs">
    <h3>BALL BEARING</h3>
    <a href="#">HOME / PRODUCT <span>BALL BEARING</span></a>
  </section>
  <div class="mb-md-1 pb-md-3"></div>
  <section class="product-single container" style="margin-top: 60px;">
    <div class="row">
      <div class="col-lg-6">
        <div class="product-single__media" data-media-type="vertical-thumbnail">
          <div class="product-single__image">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide product-single__image-item">
                  <img loading="lazy" class="h-auto" src="{{ asset('frontend/assets/images/productdetails.jpg') }}" width="674" height="674" alt="" />
                  <a data-fancybox="gallery" href="{{ asset('frontend/assets/images/productdetails') }}" data-bs-toggle="tooltip"
                    data-bs-placement="left" title="Zoom">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <use href="#icon_zoom" />
                    </svg>
                  </a>
                </div>
                <div class="swiper-slide product-single__image-item">
                  <img loading="lazy" class="h-auto" src="{{ asset('frontend/assets/images/productdetails.jpg') }}" width="674" height="674"
                    alt="" />
                  <a data-fancybox="gallery" href="{{ asset('frontend/assets/images/productdetails.jpg') }}" data-bs-toggle="tooltip"
                    data-bs-placement="left" title="Zoom">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <use href="#icon_zoom" />
                    </svg>
                  </a>
                </div>
                <div class="swiper-slide product-single__image-item">
                  <img loading="lazy" class="h-auto" src="{{ asset('frontend/assets/images/productdetails.jpg') }}" width="674" height="674"
                    alt="" />
                  <a data-fancybox="gallery" href="{{ asset('frontend/assets/images/productdetails.jpg') }}" data-bs-toggle="tooltip"
                    data-bs-placement="left" title="Zoom">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <use href="#icon_zoom" />
                    </svg>
                  </a>
                </div>
                <div class="swiper-slide product-single__image-item">
                  <img loading="lazy" class="h-auto" src="{{ asset('frontend/assets/images/productdetails.jpg') }}" width="674" height="674"
                    alt="" />
                  <a data-fancybox="gallery" href="{{ asset('frontend/assets/images/productdetails.jpg') }}" data-bs-toggle="tooltip"
                    data-bs-placement="left" title="Zoom">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <use href="#icon_zoom" />
                    </svg>
                  </a>
                </div>
              </div>
              <div class="swiper-button-prev"><svg width="7" height="11" viewBox="0 0 7 11"
                  xmlns="http://www.w3.org/2000/svg">
                  <use href="#icon_prev_sm" />
                </svg></div>
              <div class="swiper-button-next"><svg width="7" height="11" viewBox="0 0 7 11"
                  xmlns="http://www.w3.org/2000/svg">
                  <use href="#icon_next_sm" />
                </svg></div>
            </div>
          </div>
          <div class="product-single__thumbnail">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide product-single__image-item"><img loading="lazy" class="h-auto"
                    src="{{ asset('frontend/assets/images/productdetails.jpg') }}" width="104" height="104" alt="" /></div>
                <div class="swiper-slide product-single__image-item"><img loading="lazy" class="h-auto"
                    src="{{ asset('frontend/assets/images/productdetails.jpg') }}" width="104" height="104" alt="" /></div>
                <div class="swiper-slide product-single__image-item"><img loading="lazy" class="h-auto"
                    src="{{ asset('frontend/assets/images/productdetails.jpg') }}" width="104" height="104" alt="" /></div>
                <div class="swiper-slide product-single__image-item"><img loading="lazy" class="h-auto"
                    src="{{ asset('frontend/assets/images/productdetails.jpg') }}" width="104" height="104" alt="" /></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <p style="color: #191919;margin-bottom: 5px;font-size: 15px;">Manufacturer : <b>FAG</b></p>
        <p style="color: #191919;margin-bottom: 5px;font-size: 15px;">Manufacturer Ref.: <b>B7028-E-T-P4S-UL</b></p>
        <p style=" color: #191919;margin-bottom: 5px;font-size: 15px;">Rodavigo Ref.: <b>011B7028ETP4SUL</b></p>
        <h1 class="product-single__name">SUPER PRECISION ANGULAR CONTACT BALL BEARING REF. FAG B7028-E-T-P4S-UL</h1>
        <div class="product-single__rating" style="margin-bottom: 20px;">
          <div class="reviews-group d-flex">
            <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
              <use href="#icon_star" />
            </svg>
            <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
              <use href="#icon_star" />
            </svg>
            <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
              <use href="#icon_star" />
            </svg>
            <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
              <use href="#icon_star" />
            </svg>
            <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
              <use href="#icon_star" />
            </svg>
          </div>
        </div>
        <ul class="list text-list">
          <li>Creat by cotton fibric with soft and smooth</li>
          <li>Simple, Configurable (e.g. size, color, etc.), bundled</li>
          <li>Downloadable/Digital Products, Virtual Products</li>
        </ul>
        <form name="addtocart-form" method="post">
          <div class="product-single__swatches">
            <div class="product-swatch text-swatches">
              <div class="swatch-list" style="display: contents;">
                <input type="radio" name="size" id="swatch-1">
                <label class="swatch js-swatch" for="swatch-1" aria-label="106 cm (42)" data-bs-toggle="tooltip"
                  data-bs-placement="top" title="106 cm (42)">106 cm (42)</label>
                <input type="radio" name="size" id="swatch-2" checked>
                <label class="swatch js-swatch" for="swatch-2" aria-label="121 cm (48)" data-bs-toggle="tooltip"
                  data-bs-placement="top" title="121 cm (48)">121 cm (48)</label>
                <input type="radio" name="size" id="swatch-3">
                <label class="swatch js-swatch" for="swatch-3" aria-label="139 cm (55)" data-bs-toggle="tooltip"
                  data-bs-placement="top" title="139 cm (55)">139 cm (55)</label>
                <input type="radio" name="size" id="swatch-4">
                <label class="swatch js-swatch" for="swatch-4" aria-label="164 cm (65)" data-bs-toggle="tooltip"
                  data-bs-placement="top" title="164 cm (65)">164 cm (65)</label>
                <input type="radio" name="size" id="swatch-5">
                <label class="swatch js-swatch" for="swatch-5" aria-label="196 cm (77)" data-bs-toggle="tooltip"
                  data-bs-placement="top" title="196 cm (77)">196 cm (77)</label>
                <input type="radio" name="size" id="swatch-6">
                <label class="swatch js-swatch" for="swatch-6" aria-label="210 cm (83)" data-bs-toggle="tooltip"
                  data-bs-placement="top" title="210 cm (83)">210 cm (83)</label>
              </div>
            </div>
          </div>
          <span>USD(incl. of all taxes)</span>
          <div class="product-single__price">
            <span class="current-price">$449</span>
          </div>
          <div class="product-single__addtocart">
            <div class="qty-control position-relative">
              <input type="number" name="quantity" value="1" min="1" class="qty-control__number text-center">
              <div class="qty-control__reduce">-</div>
              <div class="qty-control__increase">+</div>
            </div><!-- .qty-control -->
            <button type="submit" class="btn btn-primary btn-addtocart js-open-aside" data-aside="cartDrawer">Buy
              Now</button>
            <button type="submit" class="btn btn-primary btn-addtocart js-open-aside" data-aside="cartDrawer">Add to
              Cart</button>
          </div>
        </form>
      </div>
    </div>
    <div class="product-single__details-tab">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link nav-link_underscore active" id="tab-description-tab" data-bs-toggle="tab"
            href="#tab-description" role="tab" aria-controls="tab-description" aria-selected="true">Description</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link nav-link_underscore" id="tab-additional-info-tab" data-bs-toggle="tab"
            href="#tab-additional-info" role="tab" aria-controls="tab-additional-info" aria-selected="false">Depth</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link nav-link_underscore" id="tab-reviews-tab" data-bs-toggle="tab" href="#tab-reviews"
            role="tab" aria-controls="tab-reviews" aria-selected="false">Specification</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link nav-link_underscore" id="tab-reviews-tab" data-bs-toggle="tab" href="#tab-reviews"
            role="tab" aria-controls="tab-reviews" aria-selected="false">Reviews</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link nav-link_underscore" id="tab-reviews-tab" data-bs-toggle="tab" href="#tab-reviews"
            role="tab" aria-controls="tab-reviews" aria-selected="false">Planning</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link nav-link_underscore" id="tab-reviews-tab" data-bs-toggle="tab" href="#tab-reviews"
            role="tab" aria-controls="tab-reviews" aria-selected="false">Price Brand</a>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade show active" id="tab-description" role="tabpanel"
          aria-labelledby="tab-description-tab">
          <div class="product-single__description">
            <h3 class="block-title mb-4">Sed do eiusmod tempor incididunt ut labore</h3>
            <p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
              laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
              in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus
              error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
              inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            <div class="row">
              <div class="col-lg-6">
                <h3 class="block-title">Why choose product?</h3>
                <ul class="list text-list">
                  <li>Creat by cotton fibric with soft and smooth</li>
                  <li>Simple, Configurable (e.g. size, color, etc.), bundled</li>
                  <li>Downloadable/Digital Products, Virtual Products</li>
                </ul>
              </div>
              <div class="col-lg-6">
                <h3 class="block-title">Sample Number List</h3>
                <ol class="list text-list">
                  <li>Create Store-specific attrittbutes on the fly</li>
                  <li>Simple, Configurable (e.g. size, color, etc.), bundled</li>
                  <li>Downloadable/Digital Products, Virtual Products</li>
                </ol>
              </div>
            </div>
            <h3 class="block-title mb-0">Lining</h3>
            <p class="content">100% Polyester, Main: 100% Polyester.</p>
          </div>
        </div>
        <div class="tab-pane fade" id="tab-additional-info" role="tabpanel" aria-labelledby="tab-additional-info-tab">
          <div class="product-single__addtional-info">
            <div class="item">
              <label class="h6">Weight</label>
              <span>1.25 kg</span>
            </div>
            <div class="item">
              <label class="h6">Dimensions</label>
              <span>90 x 60 x 90 cm</span>
            </div>
            <div class="item">
              <label class="h6">Size</label>
              <span>XS, S, M, L, XL</span>
            </div>
            <div class="item">
              <label class="h6">Color</label>
              <span>Black, Orange, White</span>
            </div>
            <div class="item">
              <label class="h6">Storage</label>
              <span>Relaxed fit shirt-style dress with a rugged</span>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="tab-reviews" role="tabpanel" aria-labelledby="tab-reviews-tab">
          <h2 class="product-single__reviews-title">Reviews</h2>
          <div class="product-single__reviews-list">
            <div class="product-single__reviews-item">
              <div class="customer-avatar">
                <img loading="lazy" src="{{ asset('frontend/assets/images/avatar.jpg') }}" alt="" />
              </div>
              <div class="customer-review">
                <div class="customer-name">
                  <h6>Janice Miller</h6>
                  <div class="reviews-group d-flex">
                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                      <use href="#icon_star" />
                    </svg>
                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                      <use href="#icon_star" />
                    </svg>
                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                      <use href="#icon_star" />
                    </svg>
                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                      <use href="#icon_star" />
                    </svg>
                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                      <use href="#icon_star" />
                    </svg>
                  </div>
                </div>
                <div class="review-date">April 06, 2023</div>
                <div class="review-text">
                  <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod
                    maxime placeat facere possimus, omnis voluptas assumenda est…</p>
                </div>
              </div>
            </div>
            <div class="product-single__reviews-item">
              <div class="customer-avatar">
                <img loading="lazy" src="{{ asset('frontend/assets/images/avatar.jpg') }}" alt="" />
              </div>
              <div class="customer-review">
                <div class="customer-name">
                  <h6>Benjam Porter</h6>
                  <div class="reviews-group d-flex">
                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                      <use href="#icon_star" />
                    </svg>
                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                      <use href="#icon_star" />
                    </svg>
                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                      <use href="#icon_star" />
                    </svg>
                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                      <use href="#icon_star" />
                    </svg>
                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                      <use href="#icon_star" />
                    </svg>
                  </div>
                </div>
                <div class="review-date">April 06, 2023</div>
                <div class="review-text">
                  <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod
                    maxime placeat facere possimus, omnis voluptas assumenda est…</p>
                </div>
              </div>
            </div>
          </div>
          <div class="product-single__review-form">
            <form name="customer-review-form">
              <h5>Be the first to review “Message Cotton T-Shirt”</h5>
              <p>Your email address will not be published. Required fields are marked *</p>
              <div class="select-star-rating">
                <label>Your rating *</label>
                <span class="star-rating">
                  <svg class="star-rating__star-icon" width="12" height="12" fill="#ccc" viewBox="0 0 12 12"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M11.1429 5.04687C11.1429 4.84598 10.9286 4.76562 10.7679 4.73884L7.40625 4.25L5.89955 1.20312C5.83929 1.07589 5.72545 0.928571 5.57143 0.928571C5.41741 0.928571 5.30357 1.07589 5.2433 1.20312L3.73661 4.25L0.375 4.73884C0.207589 4.76562 0 4.84598 0 5.04687C0 5.16741 0.0870536 5.28125 0.167411 5.3683L2.60491 7.73884L2.02902 11.0871C2.02232 11.1339 2.01563 11.1741 2.01563 11.221C2.01563 11.3951 2.10268 11.5558 2.29688 11.5558C2.39063 11.5558 2.47768 11.5223 2.56473 11.4754L5.57143 9.89509L8.57813 11.4754C8.65848 11.5223 8.75223 11.5558 8.84598 11.5558C9.04018 11.5558 9.12054 11.3951 9.12054 11.221C9.12054 11.1741 9.12054 11.1339 9.11384 11.0871L8.53795 7.73884L10.9688 5.3683C11.0558 5.28125 11.1429 5.16741 11.1429 5.04687Z" />
                  </svg>
                  <svg class="star-rating__star-icon" width="12" height="12" fill="#ccc" viewBox="0 0 12 12"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M11.1429 5.04687C11.1429 4.84598 10.9286 4.76562 10.7679 4.73884L7.40625 4.25L5.89955 1.20312C5.83929 1.07589 5.72545 0.928571 5.57143 0.928571C5.41741 0.928571 5.30357 1.07589 5.2433 1.20312L3.73661 4.25L0.375 4.73884C0.207589 4.76562 0 4.84598 0 5.04687C0 5.16741 0.0870536 5.28125 0.167411 5.3683L2.60491 7.73884L2.02902 11.0871C2.02232 11.1339 2.01563 11.1741 2.01563 11.221C2.01563 11.3951 2.10268 11.5558 2.29688 11.5558C2.39063 11.5558 2.47768 11.5223 2.56473 11.4754L5.57143 9.89509L8.57813 11.4754C8.65848 11.5223 8.75223 11.5558 8.84598 11.5558C9.04018 11.5558 9.12054 11.3951 9.12054 11.221C9.12054 11.1741 9.12054 11.1339 9.11384 11.0871L8.53795 7.73884L10.9688 5.3683C11.0558 5.28125 11.1429 5.16741 11.1429 5.04687Z" />
                  </svg>
                  <svg class="star-rating__star-icon" width="12" height="12" fill="#ccc" viewBox="0 0 12 12"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M11.1429 5.04687C11.1429 4.84598 10.9286 4.76562 10.7679 4.73884L7.40625 4.25L5.89955 1.20312C5.83929 1.07589 5.72545 0.928571 5.57143 0.928571C5.41741 0.928571 5.30357 1.07589 5.2433 1.20312L3.73661 4.25L0.375 4.73884C0.207589 4.76562 0 4.84598 0 5.04687C0 5.16741 0.0870536 5.28125 0.167411 5.3683L2.60491 7.73884L2.02902 11.0871C2.02232 11.1339 2.01563 11.1741 2.01563 11.221C2.01563 11.3951 2.10268 11.5558 2.29688 11.5558C2.39063 11.5558 2.47768 11.5223 2.56473 11.4754L5.57143 9.89509L8.57813 11.4754C8.65848 11.5223 8.75223 11.5558 8.84598 11.5558C9.04018 11.5558 9.12054 11.3951 9.12054 11.221C9.12054 11.1741 9.12054 11.1339 9.11384 11.0871L8.53795 7.73884L10.9688 5.3683C11.0558 5.28125 11.1429 5.16741 11.1429 5.04687Z" />
                  </svg>
                  <svg class="star-rating__star-icon" width="12" height="12" fill="#ccc" viewBox="0 0 12 12"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M11.1429 5.04687C11.1429 4.84598 10.9286 4.76562 10.7679 4.73884L7.40625 4.25L5.89955 1.20312C5.83929 1.07589 5.72545 0.928571 5.57143 0.928571C5.41741 0.928571 5.30357 1.07589 5.2433 1.20312L3.73661 4.25L0.375 4.73884C0.207589 4.76562 0 4.84598 0 5.04687C0 5.16741 0.0870536 5.28125 0.167411 5.3683L2.60491 7.73884L2.02902 11.0871C2.02232 11.1339 2.01563 11.1741 2.01563 11.221C2.01563 11.3951 2.10268 11.5558 2.29688 11.5558C2.39063 11.5558 2.47768 11.5223 2.56473 11.4754L5.57143 9.89509L8.57813 11.4754C8.65848 11.5223 8.75223 11.5558 8.84598 11.5558C9.04018 11.5558 9.12054 11.3951 9.12054 11.221C9.12054 11.1741 9.12054 11.1339 9.11384 11.0871L8.53795 7.73884L10.9688 5.3683C11.0558 5.28125 11.1429 5.16741 11.1429 5.04687Z" />
                  </svg>
                  <svg class="star-rating__star-icon" width="12" height="12" fill="#ccc" viewBox="0 0 12 12"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M11.1429 5.04687C11.1429 4.84598 10.9286 4.76562 10.7679 4.73884L7.40625 4.25L5.89955 1.20312C5.83929 1.07589 5.72545 0.928571 5.57143 0.928571C5.41741 0.928571 5.30357 1.07589 5.2433 1.20312L3.73661 4.25L0.375 4.73884C0.207589 4.76562 0 4.84598 0 5.04687C0 5.16741 0.0870536 5.28125 0.167411 5.3683L2.60491 7.73884L2.02902 11.0871C2.02232 11.1339 2.01563 11.1741 2.01563 11.221C2.01563 11.3951 2.10268 11.5558 2.29688 11.5558C2.39063 11.5558 2.47768 11.5223 2.56473 11.4754L5.57143 9.89509L8.57813 11.4754C8.65848 11.5223 8.75223 11.5558 8.84598 11.5558C9.04018 11.5558 9.12054 11.3951 9.12054 11.221C9.12054 11.1741 9.12054 11.1339 9.11384 11.0871L8.53795 7.73884L10.9688 5.3683C11.0558 5.28125 11.1429 5.16741 11.1429 5.04687Z" />
                  </svg>
                </span>
                <input type="hidden" id="form-input-rating" value="" />
              </div>
              <div class="mb-4">
                <textarea id="form-input-review" class="form-control form-control_gray" placeholder="Your Review"
                  cols="30" rows="8"></textarea>
              </div>
              <div class="form-label-fixed mb-4">
                <label for="form-input-name" class="form-label">Name *</label>
                <input id="form-input-name" class="form-control form-control-md form-control_gray">
              </div>
              <div class="form-label-fixed mb-4">
                <label for="form-input-email" class="form-label">Email address *</label>
                <input id="form-input-email" class="form-control form-control-md form-control_gray">
              </div>
              <div class="form-check mb-4">
                <input class="form-check-input form-check-input_fill" type="checkbox" value="" id="remember_checkbox">
                <label class="form-check-label" for="remember_checkbox">
                  Save my name, email, and website in this browser for the next time I comment.
                </label>
              </div>
              <div class="form-action">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="products-carousel container">
    <h2 class="h3 text-center mb-4 pb-xl-2 mb-xl-4">Related Products</h2>

    <div id="related_products" class="position-relative">
      <div class="swiper-container js-swiper-slider" data-settings='{
            "autoplay": false,
            "slidesPerView": 4,
            "slidesPerGroup": 4,
            "effect": "none",
            "loop": true,
            "pagination": {
              "el": "#related_products .products-pagination",
              "type": "bullets",
              "clickable": true
            },
            "navigation": {
              "nextEl": "#related_products .products-carousel__next",
              "prevEl": "#related_products .products-carousel__prev"
            },
            "breakpoints": {
              "320": {
                "slidesPerView": 2,
                "slidesPerGroup": 2,
                "spaceBetween": 14
              },
              "768": {
                "slidesPerView": 3,
                "slidesPerGroup": 3,
                "spaceBetween": 24
              },
              "992": {
                "slidesPerView": 4,
                "slidesPerGroup": 4,
                "spaceBetween": 30
              }
            }
          }'>
        <div class="swiper-wrapper">
          <div class="swiper-slide product-card">
            <div class="product-card mb-3 mb-md-4 mb-xxl-5">
              <div class="pc__img-wrapper12">
                <a href="#">
                  <img loading="lazy" src="{{ asset('frontend/assets/images//product.jpg') }}">
                </a>
              </div>

              <div class="pc__info position-relative itemsaaa">
                <h2>Ball Bearings</h2>
                <h3>Bearings</h3>
                <button>View More</button>
              </div>
            </div>
          </div>

          <div class="swiper-slide product-card">
            <div class="product-card mb-3 mb-md-4 mb-xxl-5">
              <div class="pc__img-wrapper12">
                <a href="#">
                  <img loading="lazy" src="{{ asset('frontend/assets/images//product.jpg') }}">
                </a>
              </div>
              <div class="pc__info position-relative itemsaaa">
                <h2>Ball Bearings</h2>
                <h3>Bearings</h3>
                <button>View More</button>
              </div>
            </div>
          </div>
          <div class="swiper-slide product-card">
            <div class="product-card mb-3 mb-md-4 mb-xxl-5">
              <div class="pc__img-wrapper12">
                <a href="#">
                  <img loading="lazy" src="{{ asset('frontend/assets/images//product.jpg') }}">
                </a>
              </div>
              <div class="pc__info position-relative itemsaaa">
                <h2>Ball Bearings</h2>
                <h3>Bearings</h3>
                <button>View More</button>
              </div>
            </div>
          </div>
          <div class="swiper-slide product-card">
            <div class="product-card mb-3 mb-md-4 mb-xxl-5">
              <div class="pc__img-wrapper12">
                <a href="#">
                  <img loading="lazy" src="{{ asset('frontend/assets/images//product.jpg') }}">
                </a>
              </div>

              <div class="pc__info position-relative itemsaaa">
                <h2>Ball Bearings</h2>
                <h3>Bearings</h3>
                <button>View More</button>
              </div>
            </div>
          </div>
          <div class="swiper-slide product-card">
            <div class="product-card mb-3 mb-md-4 mb-xxl-5">
              <div class="pc__img-wrapper12">
                <a href="#">
                  <img loading="lazy" src="{{ asset('frontend/assets/images//product.jpg') }}">
                </a>
              </div>

              <div class="pc__info position-relative itemsaaa">
                <h2>Ball Bearings</h2>
                <h3>Bearings</h3>
                <button>View More</button>
              </div>
            </div>
          </div>
          <div class="swiper-slide product-card">
            <div class="product-card mb-3 mb-md-4 mb-xxl-5">
              <div class="pc__img-wrapper12">
                <a href="#">
                  <img loading="lazy" src="{{ asset('frontend/assets/images//product.jpg') }}">
                </a>
              </div>

              <div class="pc__info position-relative itemsaaa">
                <h2>Ball Bearings</h2>
                <h3>Bearings</h3>
                <button>View More</button>
              </div>
            </div>
          </div>
        </div><!-- /.swiper-wrapper -->
      </div><!-- /.swiper-container js-swiper-slider -->

      <div class="products-carousel__prev position-absolute top-50 d-flex align-items-center justify-content-center">
        <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
          <use href="#icon_prev_md" />
        </svg>
      </div><!-- /.products-carousel__prev -->
      <div class="products-carousel__next position-absolute top-50 d-flex align-items-center justify-content-center">
        <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
          <use href="#icon_next_md" />
        </svg>
      </div><!-- /.products-carousel__next -->

      <div class="products-pagination mt-4 mb-5 d-flex align-items-center justify-content-center"></div>
      <!-- /.products-pagination -->
    </div><!-- /.position-relative -->

  </section><!-- /.products-carousel container -->
</main>

@endsection